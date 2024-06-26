<?php

namespace App\Http\Controllers;

use App\Models\Attributes;
use App\Models\AttributesValues;
use App\Models\Category;
use App\Models\Galerie;
use App\Models\Products;
use App\Models\Specifications;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use SoDe\Extend\File as ExtendFile;

class ProductsController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    
    $products =  Products::where("status", "=", true)->get();

    
    
    return view('pages.products.index', compact('products'));
  }




  /**
   * Show the form for creating a new resource.
   */

   public function getProvincias($id)
    {
      
        $provincias = DB::table('provinces')->where('department_id', $id)->get();
        

        return response()->json($provincias);
    }

    public function getDistritos($id)
    {
      
        $distritos = DB::table('districts')->where('province_id', $id)->get();
        

        return response()->json($distritos);
    }

    
  public function create()
  {
    $atributos = Attributes::where("status", "=", true)->get();
    $valorAtributo = AttributesValues::where("status", "=", true)->get();
    $tags = Tag::where("status", "=", true)->get();
    $categoria = Category::all();

    /* depa-prov-dist */
    $distritos  = DB::select('select * from districts where active = ? order by 3', [1]);
    $provincias = DB::select('select * from provinces where active = ? order by 3', [1]);
    $departamentos = DB::select('select * from departments where active = ? order by 2', [1]);




    return view('pages.products.create', compact('atributos', 'valorAtributo', 'categoria','tags', 'distritos', 'provincias', 'departamentos'));
  }

  public function saveImg($file, $route, $nombreImagen)
  {
    $manager = new ImageManager(new Driver());
    $img =  $manager->read($file);
    $img->coverDown(416, 251, 'center'); /* recorte de imageness ->avisar */

    if (!file_exists($route)) {
      mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
    }

    $img->save($route . $nombreImagen);
  }


  public function saveImgPropietario($file, $route, $nombreImagen)
  {
    $manager = new ImageManager(new Driver());
    $img =  $manager->read($file);
    $img->coverDown(32, 32, 'center'); /* recorte de imageness ->avisar */

    if (!file_exists($route)) {
      mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
    }

    $img->save($route . $nombreImagen);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    /* dd($request->tags_id); */
    $especificaciones = [];
    $data = $request->all();
    $atributos = null;
    $tagsSeleccionados = $request->input('tags_id');
    // $valorprecio = $request->input('precio') - 0.1;
    
    $request->validate([
      'producto' => 'required',
      'precio' => 'min:0|required|numeric', 
      'descuento' => 'lt:' . $request->input('precio'),
      'tipo_propiedad' => 'required',
      'cuartos' => 'required',
      'codigo' => 'required',
      'banios' =>'required',
      'pisos' =>'required',
      'area' =>'required',
      'cochera' =>'required',
      'movilidad' =>'required',
      'address' =>'required',
      'inside' =>'required',
      'incluye' =>'required',
      'no_incluye' =>'required',
      'propietario' =>'required',
      'tipo_propietario' =>'required',
      'imagen_propietario' =>'required',
      'frecuencia' => 'required'

    ]);

    if ($request->hasFile("imagen")) {
      $file = $request->file('imagen');
      $routeImg = 'storage/images/imagen/';
      $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

      $this->saveImg($file, $routeImg, $nombreImagen);

      $data['imagen'] = $routeImg . $nombreImagen;
    }

    /* foto del propietario */

    if ($request->hasFile("imagen_propietario")) {
      $file = $request->file('imagen_propietario');
      $routeImg = 'storage/images/imagen/';
      $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

      $this->saveImgPropietario($file, $routeImg, $nombreImagen);

      $data['imagen_propietario'] = $routeImg . $nombreImagen;
    }



    foreach ($data as $key => $value) {

     /*  dd($data); */

      if (strstr($key, ':')) {
        // Separa el nombre del atributo y su valor
        $atributos = $this->stringToObject($key, $atributos);
        unset($request[$key]);
      } elseif (strstr($key, '-')) {

        //strpos primera ocurrencia que enuentre
        if (strpos($key, 'tittle-') === 0 || strpos($key, 'title-') === 0) {
          $num = substr($key, strrpos($key, '-') + 1); // Obtener el número de la especificación
          $especificaciones[$num]['tittle'] = $value; // Agregar el título al array asociativo
        } elseif (strpos($key, 'specifications-') === 0) {
          $num = substr($key, strrpos($key, '-') + 1); // Obtener el número de la especificación
          $especificaciones[$num]['specifications'] = $value; // Agregar las especificaciones al array asociativo

          /* solo guardamos aquellos que son diferentes de nullo */
          $especificaciones = array_filter($especificaciones, function($item) {
            return $item['tittle'] !== null && $item['specifications'] !== null;
          });
        }
      }
    }

    $jsonAtributos = json_encode($atributos);

    if (array_key_exists('destacar', $data)) {
      if (strtolower($data['destacar']) == 'on') $data['destacar'] = 1;
    }
    if (array_key_exists('recomendar', $data)) {
      if (strtolower($data['recomendar']) == 'on') $data['recomendar'] = 1;
    }

    /* mascotas y mobiliado */
    if (array_key_exists('mascota', $data)) {
      if (strtolower($data['mascota']) == 'on') $data['mascota'] = 1;
    }
    if (array_key_exists('mobiliado', $data)) {
      if (strtolower($data['mobiliado']) == 'on') $data['mobiliado'] = 1;
    }

    /* tipo de alquiler */
    if (array_key_exists('tipo_propiedad', $data)) {
      $tipo = $data['tipo_propiedad'];
      if ($tipo == 'alquiler') $data['tipo_propiedad'] = 'alquiler';
      if ($tipo == 'comprar') $data['tipo_propiedad'] = 'comprar'; 
      if ($tipo == 'vender') $data['tipo_propiedad'] = 'vender'; 
    }


    $data['atributes'] = $jsonAtributos;

    $cleanedData = Arr::where($data, function ($value, $key) {
      return !is_null($value);
    });

    $producto = Products::create($cleanedData);
    $this->GuardarEspecificaciones($producto->id, $especificaciones);
    /* if(!is_null($tagsSeleccionados)){
      $this->TagsXProducts($producto->id, $tagsSeleccionados);
    } */

    /* --------  */
    $producto->tags()->sync($tagsSeleccionados);


    /* dropzone */
    if (isset($data['files'])) {

      foreach ($data['files'] as $file) {
        # code...
        /* agregando intervencion */
        /* $file->coverDown(600, 400, 'center'); */
        /*  */
        // data:image/png; base64,code
        [$first, $code] = explode(';base64,', $file);
        $imageData = base64_decode($code);  
        
        
        


        $routeImg = 'storage/images/imagen/';

        $ext = ExtendFile::getExtention(str_replace("data:", '', $first));

        $nombreImagen = Str::random(10) . '.' . $ext;

        // Verificar si la ruta no existe y crearla si es necesario
        if (!file_exists($routeImg)) {
          mkdir($routeImg, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
        }

        // Guardar los datos binarios en un archivo
        file_put_contents($routeImg . $nombreImagen, $imageData);
        $dataGalerie['imagen'] = $routeImg . $nombreImagen;
        $dataGalerie['product_id'] = $producto->id;
        $dataGalerie['type_img'] = 'portada';
        Galerie::create($dataGalerie);
      }
    }
    
    return redirect()->route('products.index')->with('success', 'Publicación creado exitosamente.');
  }

  private function TagsXProducts($id, $nTags){
    foreach ($nTags as $key => $value) {
      DB::insert('insert into tags_xproducts (producto_id, tag_id) values (?, ?)', [$id, $value]);
    }

  }


  private function GuardarEspecificaciones($id, $especificaciones)
  {

    foreach ($especificaciones as $value) {
      $value['product_id'] = $id;
      Specifications::create($value);
    }
  }

  private function actualizarEspecificacion ($especificaciones){
    foreach ($especificaciones as $key => $value) {
      $espect = Specifications::find($key);
      $espect->tittle = $value['tittle'];
      $espect->specifications = $value['specifications'];

      if($value['specifications'] == null ){
        $espect->delete();
      }else{
        $espect->save();
      }

    }

  }

  private function stringToObject($key, $atributos)
  {

    $parts = explode(':', $key);
    $nombre = strtolower($parts[0]); // Nombre del atributo
    $valor = strtolower($parts[1]); // Valor del atributo en minúsculas

    // Verifica si el atributo ya existe en el array
    if (isset($atributos[$nombre])) {
      // Si el atributo ya existe, agrega el nuevo valor a su lista
      $atributos[$nombre][] = $valor;
    } else {
      // Si el atributo no existe, crea una nueva lista con el valor
      $atributos[$nombre] = [$valor];
    }
    return $atributos;
  }

  /**
   * Display the specified resource.
   */
  public function show(Products $products)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  { 
    
    $product =  Products::with('tags')->find($id);

    /* $inmuebleGaleria = Products::where('id', $id)->with('galeria')->get(); */

    $atributos = Attributes::where("status", "=", true)->get();
    $valorAtributo = AttributesValues::where("status", "=", true)->get();
    $especificacion = Specifications::where("product_id", "=" , $id)->get();
    $allTags = Tag::all();
    $categoria = Category::all();

    $departamentos = DB::select('select * from departments where active = ? order by 2', [1]);

    $provincias = DB::select('select * from provinces where active = ? order by 3', [1]);

    $distritos  = DB::select('select * from districts where active = ? order by 3', [1]);
   
    
    return view('pages.products.edit', compact('product', 'atributos', 'valorAtributo', 'allTags', 'categoria','especificacion', 'departamentos', 'provincias', 'distritos'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $especificaciones = [];
    $product = Products::find($id);
    $tagsSeleccionados = $request->input('tags_id');
    $data = $request->all();
    $atributos = null;
    

    $request->validate([
      'producto' => 'required',
    ]);

    if ($request->hasFile("imagen")) {
      $file = $request->file('imagen');
      $routeImg = 'storage/images/imagen/';
      $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

      $this->saveImg($file, $routeImg, $nombreImagen);

      $data['imagen'] = $routeImg . $nombreImagen;
      // $AboutUs->name_image = $nombreImagen;
    }

    if ($request->hasFile("imagen_propietario")) {
      $file = $request->file('imagen_propietario');
      $routeImg = 'storage/images/imagen/';
      $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

      $this->saveImgPropietario($file, $routeImg, $nombreImagen);

      $data['imagen_propietario'] = $routeImg . $nombreImagen;
      // $AboutUs->name_image = $nombreImagen;
    }

    foreach ($request->all() as $key => $value) {
      /* dd($request->all()); */
      if (strstr($key, ':')) {
        // Separa el nombre del atributo y su valor
        $atributos = $this->stringToObject($key, $atributos);
        unset($request[$key]);
      }elseif (strstr($key, '-')) {
       /*  dd($key); */
        //strpos primera ocurrencia que enuentre
        if (strpos($key, 'tittle-') === 0 || strpos($key, 'title-') === 0) {
          $num = substr($key, strrpos($key, '-') + 1); // Obtener el número de la especificación
          $especificaciones[$num]['tittle'] = $value; // Agregar el título al array asociativo
        } elseif (strpos($key, 'specifications-') === 0) {
          
          $num = substr($key, strrpos($key, '-') + 1); // Obtener el número de la especificación
          $especificaciones[$num]['specifications'] = $value; // Agregar las especificaciones al array asociativo

          /* dd($especificaciones); */

          /* solo guardamos aquellos que son diferentes de nullo */
          $especificaciones = array_filter($especificaciones, function($item) {
            return $item['tittle'] !== null && $item['specifications'] !== null;
          });
        }
      }
    }

  

    $jsonAtributos = json_encode($atributos);

    if (array_key_exists('destacar', $data)) {
      if (strtolower($data['destacar']) == 'on') $data['destacar'] = 1;
    }
    if (array_key_exists('recomendar', $data)) {
      if (strtolower($data['recomendar']) == 'on') $data['recomendar'] = 1;
    }

    /* mascotas e inmobiliado */
    if (array_key_exists('mascota', $data)) {
      if (strtolower($data['mascota']) == 'on') $data['mascota'] = 1;
    }
    if (array_key_exists('mobiliado', $data)) {
      if (strtolower($data['mobiliado']) == 'on') $data['mobiliado'] = 1;
    }

    /* aluiler - compra */
    if (array_key_exists('tipo_propiedad', $data)) {
      $tipo = $data['tipo_propiedad'];
      if ($tipo == 'alquiler') $data['tipo_propiedad'] = 'alquiler';
      if ($tipo == 'comprar') $data['tipo_propiedad'] = 'comprar'; 
    }


    $data['atributes'] = $jsonAtributos;
    $cleanedData = Arr::where($data, function ($value, $key) {
      return !is_null($value);
    });
    $product->update($cleanedData);
    DB::delete('delete from tags_xproducts where producto_id = ?', [$id]);
    if(!is_null($tagsSeleccionados)){
      $this->TagsXProducts($id, $tagsSeleccionados);
    }
    $this->actualizarEspecificacion($especificaciones);


  /*   if (isset($data['files'])) {

      foreach ($data['files'] as $file) {

        [$first, $code] = explode(';base64,', $file);
        $imageData = base64_decode($code);
        $routeImg = 'storage/images/imagen/';

        $ext = ExtendFile::getExtention(str_replace("data:", '', $first));



        $nombreImagen = Str::random(10) . '.' . $ext;

        if (!file_exists($routeImg)) {
          mkdir($routeImg, 0777, true); 
        }

        file_put_contents($routeImg . $nombreImagen, $imageData);
        $dataGalerie['imagen'] = $routeImg . $nombreImagen;
        $dataGalerie['product_id'] = $id;
        $dataGalerie['type_img'] = 'portada';
        Galerie::create($dataGalerie);
      }
    } */




     return redirect()->route('products.index')->with('success', 'Producto editado exitosamente.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function borrar(Request $request)
  {
    //softdelete
    $product = Products::find($request->id);
    $product->status = 0;
    $product->save();
  }

  public function updateVisible(Request $request)
  {
    $id = $request->id;
    $field = $request->field;
    $status = $request->status;

    // Verificar si el producto existe
    $product = Products::find($id);

    if (!$product) {
      return response()->json(['message' => 'Producto no encontrado'], 404);
    }

    // Actualizar el campo dinámicamente
    $product->update([
      $field => $status
    ]);
    return response()->json(['message' => 'registro actualizado']);
  }
}
<?php

namespace App\Http\Controllers;

use App\Helpers\EmailConfig;
use App\Http\Requests\StoreIndexRequest;
use App\Http\Requests\UpdateIndexRequest;
use App\Models\AboutUs;
use App\Models\Attributes;
use App\Models\AttributesValues;
use App\Models\Faqs;
use App\Models\General;
use App\Models\Index;
use App\Models\Message;
use App\Models\Products;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\Strength;
use App\Models\Testimony;
use App\Models\Category;
use App\Models\CategoryBlog;
use App\Models\Galerie;
use App\Models\Specifications;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use SoDe\Extend\File as ExtendFile;

use function PHPUnit\Framework\isNull;

class IndexController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    // $productos = Products::all();
    $generales = General::all()->first();

    $blogs = Blog::where('status', '=', true)->where('visible', '=', 1)->get();

    /* $inmuebles = Products::where('destacar', '=', 1)->where('status', '=', 1)->where('visible', '=', 1)->with('tags')->orderBy('created_at', 'desc')->activeDestacado()->get(); */

    $inmuebles = Products::select('products.*', 'departments.description as department_description', 'provinces.description as province_description', 'districts.description as district_description')
      ->join('departments', 'products.departamento_id', '=', 'departments.id')
      ->join('provinces', 'products.provincia_id', '=', 'provinces.id')
      ->join('districts', 'products.distrito_id', '=', 'districts.id')
      ->where('products.destacar', '=', 1)
      ->where('products.status', '=', 1)
      ->where('products.visible', '=', 1)
      ->with('tags')
      ->orderBy('products.created_at', 'desc')
      ->activeDestacado()
      ->get();

    $inmueblesAlquiler = Products::where('destacar', '=', 1)->where('status', '=', 1)->where('visible', '=', 1)->where('tipo_propiedad', 'alquiler')->get();

    $inmueblesComprar = Products::where('destacar', '=', 1)->where('status', '=', 1)->where('visible', '=', 1)->where('tipo_propiedad', 'comprar')->get();

    $beneficios = Strength::where('status', '=', 1)->get();
    $testimonios = Testimony::where('status', 1)->where('visible', 1)->get();

    $ubicacion = Db::select('SELECT DISTINCT
            districts.id , districts.description , products.tipo_propiedad
          FROM
            products
            INNER JOIN
            districts
            ON 
           products.distrito_id = districts.id

        
        ');

    $categorias = Db::select('select DISTINCT
    categories.id , categories.name, products.tipo_propiedad
    from categories
     join products on products.categoria_id = categories.id
    
    ');

    /* $inmueblesExiste = Products::where() */

    return view('public.index', compact(
      'generales',
      'inmuebles',
      'blogs',
      'beneficios',
      'testimonios',
      'inmueblesAlquiler',
      'inmueblesComprar',
      'ubicacion',
      'categorias'
    ));
  }

  public function propiedades(Request $request)
  {
    $servicio = $request->input('servicio');
    $ubicacion = $request->input('ubicacion');
    $categoria = $request->input('categoria');



    $generales = General::all()->first();
    $blogs = Blog::where('status', '=', true)->where('visible', '=', 1)->get();
    /* $inmuebles = Products::where('visible', 1)->where('status', 1)->with('tags')->orderBy('created_at', 'desc')->get(); */

    $inmuebles = Products::select('products.*', 'departments.description as department_description', 'provinces.description as province_description', 'districts.description as district_description')
      ->join('departments', 'products.departamento_id', '=', 'departments.id')
      ->join('provinces', 'products.provincia_id', '=', 'provinces.id')
      ->join('districts', 'products.distrito_id', '=', 'districts.id')
      ->where('products.destacar', 1)
      ->where('products.status', 1)
      ->where('products.visible', 1);

    if (isset($servicio)) {
      $inmuebles->where('tipo_propiedad', $servicio);
    }

    if (isset($ubicacion)) {
      $inmuebles->where('distrito_id', $ubicacion);
    }

    if (isset($categoria)) {
      $inmuebles->where('categoria_id', $categoria);
    }

    // Make sure to chain the methods correctly and consistently
    $inmuebles = $inmuebles->with('tags')
      ->orderBy('products.created_at', 'desc')
      ->activeDestacado()
      ->get();



    $ubicacion = Db::select('SELECT DISTINCT
        districts.id , districts.description , products.tipo_propiedad
      FROM
        products
        INNER JOIN
        districts
        ON 
      products.distrito_id = districts.id

  
  ');

    $categorias = Db::select('select DISTINCT
      categories.id , categories.name, products.tipo_propiedad
      from categories
      join products on products.categoria_id = categories.id

      ');


    return view('public.propiedades', compact('generales', 'blogs', 'inmuebles', 'ubicacion', 'categorias'));
  }

  public function post($id)
  {
    $blogs = Blog::where('status', '=', true)->where('visible', '=', 1)->get();
    $generales = General::all()->first();
    $blog = Blog::findOrFail($id);
    /* $postById = Blog::where('category_id', $blog->category_id)->get(); */

    $postAnterior = Blog::where('status', 1)
      ->where('visible', 1)
      ->where('id', '<', $blog->id)
      ->orderBy('id', 'desc')
      ->first();

    $postSiguiente = Blog::where('status', 1)
      ->where('visible', 1)
      ->where('id', '>', $blog->id)
      ->orderBy('id', 'asc')
      ->first();

    return view('public.post', compact('generales', 'blog', 'postSiguiente', 'postAnterior', 'blogs'));
  }

  public function nosotros()
  {
    $generales = General::all()->first();
    $blogs = Blog::where('status', '=', true)->where('visible', '=', 1)->get();
    $nosotros = AboutUs::where('status', 1)->get();
    return view('public.nosotros', compact('generales', 'blogs', 'nosotros'));
  }

  public function blog(Request $request)
  {
    $generales = General::all()->first();
    /* $blogs = Blog::where('visible', 1)->where('status', 1)->get(); */

    try {
      $id = $request->id;
      $categorias = CategoryBlog::where('status', 1)->where('visible', 1)->select('id', 'name')->with('blogs')->get();
      $categoria = CategoryBlog::where('status', 1)->where('visible', 1)->select('id', 'name')->get();

      if ($id == 0) {
        $blogs = Blog::where('status', 1)->where('visible', 1)->orderBy('created_at', 'desc')->get();
        $latestBlog = Blog::where('status', 1)->where('visible', 1)->orderBy('created_at', 'desc')->first();

        return view('public.blog', compact('generales', 'blogs', 'id', 'categorias', 'categoria', 'latestBlog'));
      } else {
        $blogs = Blog::where('status', 1)->where('visible', 1)->where('category_id', $id)->orderBy('created_at', 'desc')->get();

        $latestBlog = Blog::where('status', 1)->where('visible', 1)->where('category_id', $id)->orderBy('created_at', 'desc')->first();

        $categoria = CategoryBlog::where('status', 1)->where('visible', 1)->findOrFail($id);
        return view('public.blog', compact('generales', 'blogs', 'id', 'categorias', 'categoria', 'latestBlog'));
      }
    } catch (\Throwable $th) {
      //throw $th;
    }
  }

  public function detalle($id)
  {
    $generales = General::all()->first();
    /* $inmueble = Products::where('id', $id)->with('specificaciones')->first(); */
    $inmueble = Products::findOrFail($id);
    $inmuebleGaleria = Products::where('id', $id)->with('galeria')->get();
    /* dd($inmuebleGaleria); */

    $distrito_id = $inmueble->distrito_id;

    $inmuebleWithTag = Products::where('visible', 1)->where('status', 1)->where('id', $id)->with('tags')->orderBy('created_at', 'desc')->first();

    /* $inmuebles = Products::where('destacar', '=', 1)->where('status', '=', 1)->where('visible', '=', 1)->orderBy('created_at', 'desc')->activeDestacado()->get(); */ /* ->with('tags') */
    $blogs = Blog::where('status', '=', true)->where('visible', '=', 1)->get();
    $distrito = DB::select('SELECT * FROM districts WHERE id = ? ', [$distrito_id]);
    /* --- */

    $inmuebles = Products::select('products.*', 'departments.description as department_description', 'provinces.description as province_description', 'districts.description as district_description')
      ->join('departments', 'products.departamento_id', '=', 'departments.id')
      ->join('provinces', 'products.provincia_id', '=', 'provinces.id')
      ->join('districts', 'products.distrito_id', '=', 'districts.id')
      ->where('products.id', '!=', $inmueble->id)
      ->with('tags')
      ->get();

    return view('public.detalle', compact('generales', 'inmueble', 'blogs', 'distrito', 'inmuebles', 'inmuebleWithTag', 'inmuebleGaleria'));
  }

  public function contacto()
  {
    $generales = General::all()->first();
    $blogs = Blog::where('status', '=', true)->where('visible', '=', 1)->get();
    return view('public.contacto', compact('generales', 'blogs'));
  }

  public function micuenta()
  {
    $user = Auth::user();
    return view('public.dashboard', compact('user'));
  }

  //  --------------------------------------------
  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreIndexRequest $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(Index $index)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Index $index)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateIndexRequest $request, Index $index)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Index $index)
  {
    //
  }

  /**
   * Save contact from blade
   */
  public function guardarContacto(Request $request)
  {
    $data = $request->all();
    $data['full_name'] = $request->full_name;

    try {
      $reglasValidacion = [
        /* 'name' => 'required|string|max:255', */
        'email' => 'required|email|max:255',
      ];
      $mensajes = [
        'name.required' => 'El campo nombre es obligatorio.',
        'email.required' => 'El campo correo electrónico es obligatorio.',
        'email.email' => 'El formato del correo electrónico no es válido.',
        'email.max' => 'El campo correo electrónico no puede tener más de :max caracteres.',
      ];
      $request->validate($reglasValidacion, $mensajes);
      $formlanding = Message::create($data);
      $this->envioCorreo($formlanding);
      $this->envioCorreoInterno($formlanding);

      return response()->json(['message' => 'Mensaje enviado con exito']);
    } catch (ValidationException $e) {
      return response()->json(['message' => $e->validator->errors()], 400);
    }
  }

  public function saveImg($file, $route, $nombreImagen)
  {
    $manager = new ImageManager(new Driver());
    $img = $manager->read($file);

    if (!file_exists($route)) {
      mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
    }
    $img->save($route . $nombreImagen);
  }

  private function envioCorreo($data)
  {
    $name = $data['full_name'] . ',';
    $mensaje = 'Gracias por comunicarte con Dimensión Lider';
    $mail = EmailConfig::config($name, $mensaje);
    $generales = General::all()->first();
    // dd($mail);
    try {
      $mail->addAddress($data['email']);
      $mail->Body =
        '<html lang="en">
            <head>
              <meta charset="UTF-8" />
              <meta name="viewport" content="width=device-width, initial-scale=1.0" />
              <title>Dimensión Lider</title>
              <link rel="preconnect" href="https://fonts.googleapis.com" />
              <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
              <link
                href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
                rel="stylesheet"
              />
              <style>
                * {
                  margin: 0;
                  padding: 0;
                  box-sizing: border-box;
                }
              </style>
            </head>
            <body>
              <main>
                <table
                  style="
                    width: 600px;
                    margin: 0 auto;
                    text-align: center;
                    background-image: url(https://dimensionlider.mundoweb.pe/mailing/fondo_lider.png);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                  "
                >
                  <thead>
                    <tr>
                      <th
                        style="
                          display: flex;
                          flex-direction: row;
                          justify-content: center;
                          align-items: center;
                          margin: 40px;
                          padding:0 80px;
                        "
                      >
                        <img
                          src="https://dimensionlider.mundoweb.pe/mailing/logo.png"
                          alt="lider"
                        />
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <p
                          style="
                            color: #ffffff;
                            font-weight: 500;
                            font-size: 18px;
                            text-align: center;
                            width: 500px;
                            margin: 0 auto;
                            padding: 20px 0;
                            font-family: Montserrat, sans-serif;
                          "
                        >
                          <span style="display: block">Hola </span>
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p
                          style="
                            color: #ffffff;
                            font-size: 40px;
                            line-height: 20px;
                            font-family: Montserrat, sans-serif;
                          "
                        >
                          ' .
        $name .
        '
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p
                          style="
                            color: #ffffff;
                            font-size: 40px;
                            line-height: 70px;
                            font-family: Montserrat, sans-serif;
                            font-weight: bold;
                          "
                        >
                          ¡Gracias
                          <span style="color: #ffffff">por escribirnos!</span>
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p
                          style="
                            color: #ffffff;
                            font-weight: 500;
                            font-size: 18px;
                            text-align: center;
                            width: 500px;
                            margin: 0 auto;
                            padding: 20px 0;
                            font-family: Montserrat, sans-serif;
                          "
                        >
                          En breve estaremos comunicandonos contigo.
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a
                          target="_blank"
                          href="https://dimensionlider.mundoweb.pe/"
                          style="
                            text-decoration: none;
                            background-color: #fdfefd;
                            color: #254f9a;
                            padding: 16px 20px;
                            display: inline-flex;
                            justify-content: center;
                            border-radius: 10px;
                            align-items: center;
                            gap: 10px;
                            font-weight: 600;
                            font-family: Montserrat, sans-serif;
                            font-size: 16px;
                            margin-bottom: 350px;
                          "
                        >
                          <span>Visita nuestra web</span>
                        </a>
                      </td>
                    </tr>
                    <!--  <tr>
                      <td style="text-align: right; padding-right: 80px">
                        <img
                          src="https://dockewin.mundoweb.pe/mail/banner.png"
                          alt="mundo web"
                          style="width: 80%"
                        />
                      </td>
                    </tr> -->
          
                    <tr>
                    <td>
                    <a href="https://' .
        htmlspecialchars($generales->facebook, ENT_QUOTES, 'UTF-8') .
        '" target="_blank" style="padding: 0 5px 30px 0; display: inline-block">
                      <img
                        src="https://dimensionlider.mundoweb.pe/mailing/image_1.png"
                        alt=""
                    /></a>
      
                    <a href="https://' .
        htmlspecialchars($generales->instagram, ENT_QUOTES, 'UTF-8') .
        '" target="_blank" style="padding: 0 5px 30px 0; display: inline-block">
                      <img
                        src="https://dimensionlider.mundoweb.pe/mailing/image_2.png"
                        alt=""
                    /></a>
      
                    <a href="https://' .
        htmlspecialchars($generales->twitter, ENT_QUOTES, 'UTF-8') .
        '" target="_blank" style="padding: 0 5px 30px 0; display: inline-block">
                      <img
                        src="https://dimensionlider.mundoweb.pe/mailing/image_3.png"
                        alt=""
                    /></a>
      
                    <a href="https://' .
        htmlspecialchars($generales->linkedin, ENT_QUOTES, 'UTF-8') .
        '" target="_blank" style="padding: 0 5px 30px 0; display: inline-block">
                      <img
                        src="https://dimensionlider.mundoweb.pe/mailing/image_4.png"
                        alt=""
                    /></a>
      
                    <a href="https://' .
        htmlspecialchars($generales->youtube, ENT_QUOTES, 'UTF-8') .
        '" target="_blank" style="padding: 0 5px 30px 0; display: inline-block">
                      <img
                        src="https://dimensionlider.mundoweb.pe/mailing/image_5.png"
                        alt=""
                    /></a>
                  </td>
                    </tr>
                  </tbody>
                </table>
              </main>
            </body>
          </html>
';
      $mail->isHTML(true);
      $mail->send();
    } catch (\Throwable $th) {
      //throw $th;
    }
  }

  private function envioCorreoInterno($data)
  {
    /* $name = $data['full_name']; */
    $name = 'Hola, ';
    /* $mensaje = 'Gracias por comunicarte con Dimensión Lider'; */
    $mensaje = 'Tienes un nuevo mensaje';
    $mail = EmailConfig::config($name, $mensaje);
    $emailCliente = General::all()->first();
    $generales = General::all()->first();

    try {
      $mail->addAddress($emailCliente->email);
      $mail->Body =
        '<html lang="en">
            <head>
              <meta charset="UTF-8" />
              <meta name="viewport" content="width=device-width, initial-scale=1.0" />
              <title>Mundo web</title>
              <link rel="preconnect" href="https://fonts.googleapis.com" />
              <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
              <link
                href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
                rel="stylesheet"
              />
              <style>
                * {
                  margin: 0;
                  padding: 0;
                  box-sizing: border-box;
                }
              </style>
            </head>
            <body>
              <main>
                <table
                  style="
                    width: 600px;
                    margin: 0 auto;
                    text-align: center;
                    background-image: url(https://dimensionlider.mundoweb.pe/mailing/fondo_lider.png);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                  "
                >
                  <thead>
                    <tr>
                      <th
                        style="
                          display: flex;
                          flex-direction: row;
                          justify-content: center;
                          align-items: center;
                          margin: 40px;
                          padding:0 80px;
                        "
                      >
                        <img
                          src="https://dimensionlider.mundoweb.pe/mailing/logo.png"
                          alt="dimension lider"
                        />
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <p
                          style="
                            color: #ffffff;
                            font-weight: 500;
                            font-size: 18px;
                            text-align: center;
                            width: 500px;
                            margin: 0 auto;
                            padding: 20px 0;
                            font-family: Montserrat, sans-serif;
                          "
                        >
                          <span style="display: block">Hola Dimensión Lider</span>
                          <span style="display: block">Tienes un nuevo mensaje</span>
                        </p>
                      </td>
                    </tr>
                    
                    <tr>
                      <td>
                        <a
                          target="_blank"
                          href="https://dimensionlider.mundoweb.pe/"
                          style="
                            text-decoration: none;
                            background-color: #fdfefd;
                            color: #254f9a;
                            padding: 16px 20px;
                            display: inline-flex;
                            justify-content: center;
                            border-radius: 10px;
                            align-items: center;
                            gap: 10px;
                            font-weight: 600;
                            font-family: Montserrat, sans-serif;
                            font-size: 16px;
                            margin-bottom: 350px;
                          "
                        >
                          <span>Visita nuestra web</span>
                        </a>
                      </td>
                    </tr>
                    <!-- <tr>
                      <td style="text-align: right; padding-right: 80px">
                        <img
                          src="https://cirugiasdelima.com/mail/banner.png"
                          alt="mundo web"
                          style="width: 80%"
                        />
                      </td>
                    </tr> -->
                    <tr style="margin-top: 300px">
                      <td>
                        <a href="https://' .
        htmlspecialchars($generales->facebook, ENT_QUOTES, 'UTF-8') .
        '" target="_blank" style="padding: 0 5px 30px 0; display: inline-block">
                          <img
                            src="https://dimensionlider.mundoweb.pe/mailing/image_1.png"
                            alt=""
                        /></a>
          
                        <a href="https://' .
        htmlspecialchars($generales->instagram, ENT_QUOTES, 'UTF-8') .
        '" target="_blank" style="padding: 0 5px 30px 0; display: inline-block">
                          <img
                            src="https://dimensionlider.mundoweb.pe/mailing/image_2.png"
                            alt=""
                        /></a>
          
                        <a href="https://' .
        htmlspecialchars($generales->twitter, ENT_QUOTES, 'UTF-8') .
        '" target="_blank" style="padding: 0 5px 30px 0; display: inline-block">
                          <img
                            src="https://dimensionlider.mundoweb.pe/mailing/image_3.png"
                            alt=""
                        /></a>
          
                        <a href="https://' .
        htmlspecialchars($generales->linkedin, ENT_QUOTES, 'UTF-8') .
        '" target="_blank" style="padding: 0 5px 30px 0; display: inline-block">
                          <img
                            src="https://dimensionlider.mundoweb.pe/mailing/image_4.png"
                            alt=""
                        /></a>
          
                        <a href="https://' .
        htmlspecialchars($generales->youtube, ENT_QUOTES, 'UTF-8') .
        '" target="_blank" style="padding: 0 5px 30px 0; display: inline-block">
                          <img
                            src="https://dimensionlider.mundoweb.pe/mailing/image_5.png"
                            alt=""
                        /></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </main>
            </body>
          </html>
          ';
      $mail->isHTML(true);
      $mail->send();
    } catch (\Throwable $th) {
      //throw $th;
    }
  }

  public function guardarAnunciante(Request $request)
  {
    $especificaciones = [];
    $data = $request->all();
    
    $data['vendedor_ext'] = true;
    $data['status'] = false;

    foreach ($data as $key => $value) {
      if (strstr($key, '-')) {

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

    
    if (isset($data['filesPortada'])) {
      foreach ($data['filesPortada'] as $file) {
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
        $data['imagen'] = $routeImg . $nombreImagen; 
        
      }
    }
    if (isset($data['filesPropietario'])) {
      foreach ($data['filesPropietario'] as $file) {
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

        $data['imagen_propietario'] = $routeImg . $nombreImagen; 
        
      }
    }

    $product = Products::create($data);
    if (isset($data['filesGallery'])) {
      $this->SaveDropzone($data['filesGallery'], $product->id);
    }
    $this->GuardarEspecificaciones($product->id, $especificaciones);

    return response()->json(['message' => "Legando correctamente al guardarAnunciante"]);
  }

  private function SaveDropzone($data, $producto_id)
  {

    foreach ($data as $file) {

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
      $dataGalerie['product_id'] = $producto_id;
      $dataGalerie['type_img'] = 'portada';
      Galerie::create($dataGalerie);
    }
  }
  private function GuardarEspecificaciones($id, $especificaciones)
  {
    foreach ($especificaciones as $value) {
      $value['product_id'] = $id;
      Specifications::create($value);
    }
  }
}

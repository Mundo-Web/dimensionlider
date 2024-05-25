<?php

namespace App\Http\Controllers;

use App\Models\CategoryBlog;
use App\Http\Requests\StoreCategoryBlogRequest;
use App\Http\Requests\UpdateCategoryBlogRequest;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CategoryBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = CategoryBlog::where('status', '=', true)->get();

        return view('pages.categoriesBlog.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.categoriesBlog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new CategoryBlog();

        if ($request->hasFile('imagen')) {
            $manager = new ImageManager(Driver::class);

            $nombreImagen = Str::random(10) . '_' . $request->file('imagen')->getClientOriginalName();

            $img = $manager->read($request->file('imagen'));

            // Obtener las dimensiones de la imagen que se esta subiendo
            $img->coverDown(640, 640, 'center');

            $ruta = 'storage/images/categories/';

            if (!file_exists($ruta)) {
                mkdir($ruta, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
            }

            $img->save($ruta . $nombreImagen);

            $category->url_image = $ruta;
            $category->name_image = $nombreImagen;
        }

        $slug = strtolower(str_replace(' ', '-', $request->name));

        if (CategoryBlog::where('slug', $slug)->exists()) {
            // Si el slug existe, agregar un número aleatorio al final
            $slug .= '-' . rand(1, 1000); // Puedes ajustar el rango según tu necesidad
        }

        $category->name = $request->name;
        $category->description = $request->description;
        $category->slug = $slug;
        $category->status = 1;
        $category->visible = 1;

        $category->save();

        //ruta del web.php
        return redirect()->route('categoriasBlog.index')->with('success', 'Categoria creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryBlog $categoryBlog)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryBlog $categoryBlog, $id)
    {
        $category = CategoryBlog::findOrfail($id);

        return view('pages.categoriesBlog.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = CategoryBlog::findOrfail($id); 

        if ($request->hasFile("imagen")) {

            $manager = new ImageManager(new Driver());


            $ruta = storage_path() . '/app/public/images/categories/' . $category->name_image;
            
            // dd($ruta);
            if (File::exists($ruta)) {
                File::delete($ruta);
            }

            $rutanueva = 'storage/images/categories/';
            $nombreImagen = Str::random(10) . '_' . $request->file('imagen')->getClientOriginalName();

            $img =  $manager->read($request->file('imagen'));

            $img->coverDown(640, 640, 'center');
            
            if (!file_exists($rutanueva)) {
                mkdir($rutanueva, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
            }
            
            $img->save($rutanueva . $nombreImagen);


            $category->url_image = $rutanueva;
            $category->name_image = $nombreImagen;
        }

        $slug = strtolower(str_replace(' ', '-', $request->name));

        if (CategoryBlog::where('slug', $slug)->exists()) {
            // Si el slug existe, agregar un número aleatorio al final
            $slug .= '-' . rand(1, 1000); // Puedes ajustar el rango según tu necesidad
        }


        $category->name = $request->name;
        $category->description = $request->description;
        $category->slug = $slug;
        
        $category->save();
//ruta php
        return redirect()->route('categoriasBlog.index')->with('success', 'Categoria modificada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryBlog $categoryBlog)
    {
        //
    }

    public function deleteCategory(Request $request)
    {
        $id = $request->id;
       
        $category = CategoryBlog::findOrfail($id); 
       
        $category->status = false;
       
        $category->save();

        return response()->json(['message' => 'Categoría eliminada']);
    }

    public function updateVisible(Request $request)
    {
        // Lógica para manejar la solicitud AJAX
        $cantidad = $this->contarCategoriasDestacadas();


        if($cantidad >= 4 && $request->status == 1){
            return response()->json(['message' => 'Solo puedes destacar 4 categorias'], 409 );
        }


        $id = $request->id;

        $field = $request->field;

        $status = $request->status;

        // Actualizar el estado de la categoría
        $category = CategoryBlog::findOrFail($id);

        $category->$field = $status;

        $category->save();
    
        $cantidad = $this->contarCategoriasDestacadas();

        
        return response()->json(['message' => 'Categoría modificada',  'cantidad' => $cantidad]);
    
    }

    public function contarCategoriasDestacadas(){

        $cantidad = CategoryBlog::where('destacar', '=', 1)->count();
   
        return  $cantidad;
    }
}
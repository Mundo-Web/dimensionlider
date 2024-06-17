<?php

namespace App\Providers;

use App\Models\General;
use App\Models\Message;
use App\Models\Tag;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('components.public.footer', function ($view) {
            // Obtener los datos del footer
            $datosgenerales = General::all(); // Suponiendo que tienes un modelo Footer y un método footerData() en él
            // Pasar los datos a la vista
            $view->with('datosgenerales', $datosgenerales);
        });

        View::composer('components.public.header', function ($view) {
            // Obtener los datos del footer
            $datosgenerales = General::all();
            $tags = Tag::all(); // Suponiendo que tienes un modelo Footer y un método footerData() en él
            
            $distritos  = DB::select('select * from districts where active = ? order by 3', [1]);
            $provincias = DB::select('select * from provinces where active = ? order by 3', [1]);
            $departamentos = DB::select('select * from departments where active = ? order by 2', [1]);
            // Pasar los datos a la vista
            $view->with([
                'datosgenerales'=> $datosgenerales , 
                'tags' => $tags,
                'distritos' =>$distritos,
                'provincias' =>$provincias,
                'departamentos' =>$departamentos,
            ]);
        });

        View::composer('components.app.sidebar', function ($view) {
            // Obtener los datos del footer
            $mensajes = Message::where('is_read', '!=', 1 )->where('status', '!=', 0)->count(); // Suponiendo que tienes un modelo Footer y un método footerData() en él
            // Pasar los datos a la vista
            $view->with('mensajes', $mensajes);
        });
        
         PaginationPaginator::useTailwind();   
    }
}

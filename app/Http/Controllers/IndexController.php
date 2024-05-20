<?php

namespace App\Http\Controllers;

use App\Helpers\EmailConfig;
use App\Http\Requests\StoreIndexRequest;
use App\Http\Requests\UpdateIndexRequest;
use App\Models\Attributes;
use App\Models\AttributesValues;
use App\Models\Faqs;
use App\Models\General;
use App\Models\Index;
use App\Models\Message;
use App\Models\Products;
use App\Models\Slider;
use App\Models\Strength;
use App\Models\Testimony;
use App\Models\Category;
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

use function PHPUnit\Framework\isNull;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $productos = Products::all();
        $general = General::all()->first();

        return view('public.index', compact('general'));
    }

    public function propiedades()
    {
        $general = General::all()->first();
        return view('public.propiedades', compact('general'));
    }

    public function post()
    {
        $general = General::all()->first();
        return view('public.post', compact('general'));
    }

    public function nosotros()
    {
        $general = General::all()->first();
        return view('public.nosotros', compact('general'));
    }

    public function blog()
    {
        $general = General::all()->first();
        return view('public.blog', compact('general'));
    }

    public function detalle()
    {
        $general = General::all()->first();
        return view('public.detalle', compact('general'));
    }

    public function contacto()
    {
        $general = General::all()->first();
        return view('public.contacto', compact('general'));
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
        $data['full_name'] = $request->name . ' ' . $request->last_name;

        try {
            $reglasValidacion = [
                'name' => 'required|string|max:255',
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
        $name = $data['full_name'];
        $mensaje = 'Gracias por comunicarte con Decotab';
        $mail = EmailConfig::config($name, $mensaje);
        // dd($mail);
        try {
            $mail->addAddress($data['email']);
            $mail->Body =
                '<html lang="es">
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
                height: 700px;
                margin: 0 auto;
                text-align: center;
                background-image: url(https://decotab.pe/mail/ImagenFondo.png);
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
                    "
                  >
                    <img src="https://decotab.pe/mail/LogoP.png" alt="mundo web"  style="
                    margin: auto;
                  "/>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="height: 10px">
                    <p
                      style="
                        color: #ffffff;
                        font-weight: 500;
                        font-size: 18px;
                        text-align: center;
                        width: 500px;
                        margin: 0 auto;
                        font-family: Montserrat, sans-serif;
                        line-height: 30px;
                      "
                    >
                      <span style="display: block">Hola </span>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="height: 10px">
                    <p
                      style="
                        color: #ffffff;
                        font-size: 40px;
                        font-family: Montserrat, sans-serif;
                        line-height: 60px;
                      "
                    >
                      <span style="display: block">' .
                $name .
                ' </span>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="height: 10px">
                    <p
                      style="
                        color: #74a68d;
                        font-size: 40px;
                        font-family: Montserrat, sans-serif;
                        font-weight: bold;
                        line-height: 60px;
                      "
                    >
                      !Gracias
                      <span style="color: #ffffff">por escribirnos!</span>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="height: 10px">
                    <p
                      style="
                        color: #ffffff;
                        font-weight: 500;
                        font-size: 18px;
                        text-align: center;
                        width: 250px;
                        margin: 0 auto;
                        font-family: Montserrat, sans-serif;
                        line-height: 30px;
                      "
                    >
                      En breve estaremos comunicandonos contigo.
                    </p>
                  </td>
                </tr>
                <tr>
                  <td
                    style="
                      display: flex;
                      align-items: start;
                      justify-content: center;
                      padding-top: 20px;
                    "
                  >
                    <a
                      href="https://decotab.pe/"
                      style="
                        text-decoration: none;
                        background-color: #74a68d;
                        color: white;
                        padding: 10px 16px;
                        display: inline-flex;
                        justify-content: center;
                        align-items: center;
                        gap: 10px;
                        font-weight: 600;
                        font-family: Montserrat, sans-serif;
                        font-size: 16px;
                        border-radius: 30px;
                      "
                    >
                      <span>Visita nuestra web</span>
                    </a>
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

    private function envioCorreoCompra($data)
    {
        $name = $data['nombre'];
        $mensaje = 'Gracias por comprar en Decotab';
        $mail = EmailConfig::config($name, $mensaje);
        try {
            $mail->addAddress($data['email']);
            $mail->Body =
                '<html lang="es">
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
                height: 700px;
                margin: 0 auto;
                text-align: center;
                background-image: url(https://decotab.pe/mail/ImagenFondo.png);
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
                    "
                  >
                    <img src="https://decotab.pe/mail/Logo P.png" alt="mundo web" />
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="height: 10px">
                    <p
                      style="
                        color: #ffffff;
                        font-weight: 500;
                        font-size: 18px;
                        text-align: center;
                        width: 500px;
                        margin: 0 auto;
                        font-family: Montserrat, sans-serif;
                        line-height: 30px;
                      "
                    >
                      <span style="display: block">Hola </span>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="height: 10px">
                    <p
                      style="
                        color: #ffffff;
                        font-size: 40px;
                        font-family: Montserrat, sans-serif;
                        line-height: 60px;
                      "
                    >
                      <span style="display: block">' .
                $name .
                ' </span>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="height: 10px">
                    <p
                      style="
                        color: #74a68d;
                        font-size: 40px;
                        font-family: Montserrat, sans-serif;
                        font-weight: bold;
                        line-height: 60px;
                      "
                    >
                      !Gracias
                      <span style="color: #ffffff">por escribirnos!</span>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="height: 10px">
                    <p
                      style="
                        color: #ffffff;
                        font-weight: 500;
                        font-size: 18px;
                        text-align: center;
                        width: 250px;
                        margin: 0 auto;
                        font-family: Montserrat, sans-serif;
                        line-height: 30px;
                      "
                    >
                      En breve estaremos comunicandonos contigo.
                    </p>
                  </td>
                </tr>
                <tr>
                  <td
                    style="
                      display: flex;
                      align-items: start;
                      justify-content: center;
                      padding-top: 20px;
                    "
                  >
                    <a
                      href="https://decotab.pe/"
                      style="
                        text-decoration: none;
                        background-color: #74a68d;
                        color: white;
                        padding: 10px 16px;
                        display: inline-flex;
                        justify-content: center;
                        align-items: center;
                        gap: 10px;
                        font-weight: 600;
                        font-family: Montserrat, sans-serif;
                        font-size: 16px;
                        border-radius: 30px;
                      "
                    >
                      <span>Visita nuestra web</span>
                    </a>
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
}
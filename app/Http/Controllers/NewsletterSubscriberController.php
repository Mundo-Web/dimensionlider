<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use App\Helpers\EmailConfig;
use App\Http\Requests\StoreNewsletterSubscriberRequest;
use App\Http\Requests\UpdateNewsletterSubscriberRequest;
use App\Models\General;
use Illuminate\Http\Request;

class NewsletterSubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

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
    public function store(StoreNewsletterSubscriberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsletterSubscriber $newsletterSubscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsletterSubscriber $newsletterSubscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsletterSubscriberRequest $request, NewsletterSubscriber $newsletterSubscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsletterSubscriber $newsletterSubscriber)
    {
        //
    }

    public function showSubscripciones()
    {
        $subscripciones = NewsletterSubscriber::orderBy('created_at', 'desc')->get();

        return view('pages.subscripciones.index', compact('subscripciones'));
    }

    public function guardarUserNewsLetter(Request $request)
    {
        NewsletterSubscriber::create($request->all());
        $data = $request->all();
        $data['nombre'] = '';
        $this->envioCorreo($data);
        $this->envioCorreoInterno($data);
        return response()->json(['message' => 'Newsletter guardado ']);
    }

    private function envioCorreo($data)
    {
        $name = 'Usuario';
        $mensaje = 'Gracias por comunicarte con Dimensión Lider';
        $mail = EmailConfig::config($name, $mensaje);
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
                    background-image: url(https://dimensionlider.mundoweb.pe/mailing/Fondo.png);
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
                        <img
                          src="https://dimensionlider.mundoweb.pe/mailing/logo.png"
                          alt="kewin"
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
                          <span style="display: block">' .
                $name .
                ' </span>
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
                    <a href="https://www.facebook.com/" target="_blank">
                      <img
                        src="https://dimensionlider.mundoweb.pe/mailing/image_1.png"
                        alt=""
                    /></a>
      
                    <a href="https://www.instagram.com/" target="_blank">
                      <img
                        src="https://dimensionlider.mundoweb.pe/mailing/image_2.png"
                        alt=""
                    /></a>
      
                    <a href="https://x.com/" target="_blank">
                      <img
                        src="https://dimensionlider.mundoweb.pe/mailing/image_3.png"
                        alt=""
                    /></a>
      
                    <a href="https://www.linkedin.com/" target="_blank">
                      <img
                        src="https://dimensionlider.mundoweb.pe/mailing/image_4.png"
                        alt=""
                    /></a>
      
                    <a href="https://www.youtube.com/" target="_blank">
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
        $name = 'Usuario';
        $mensaje = 'Gracias por comunicarte con Dimensión Lider';
        $mail = EmailConfig::config($name, $mensaje);
        $emailCliente = General::all()->first();
 

        try {
            $mail->addAddress($emailCliente->email);
            $mail->Body = 'Hola tienes un mensaje de: .....';
            $mail->isHTML(true);
            $mail->send();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
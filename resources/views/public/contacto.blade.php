@extends('components.public.matrix')
<script async
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDikLz7ELBdUFW0TnvkWkcXPK48Wc003U&loading=async&callback=initMap">
</script>

@section('css_importados')
  <style>
    .bg_color {
      background-color: #2E609D;
    }

    .bg_inscribir {
      background-color: #FAFAFA;
      color: #000929;
    }
  </style>
@stop


@section('content')
  <main class="bg-[#FAFAFA]">
    <section class="bg-[#F7F7FD] pt-32">
      <div class="w-11/12 mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">
        <div class="flex flex-col gap-5 pb-10 md:pb-20">
          <div class="flex flex-col gap-1">
            <h3 class="font-satoshiBold text-text40">Hablemos <span class="text-[#2E609D]">Hoy</span></h3>
            <p class="text-[#000929] text-opacity-50 text-text18 font-satoshiRegular">
              Ponte en contacto con nosotros para obtener soluciones personalizadas.
            </p>
          </div>

          <div>
            <form action="" class="flex flex-col gap-5" id="formContactos">
              @csrf
              <div class="flex flex-col justify-start gap-1" data-aos="fade-up" data-aos-duration="150">
                <label for="full_name" class="text-[#000929] font-satoshiRegular text-text14">Nombre Completo</label>
                <input required type="text" name="full_name" id="full_name" placeholder="Nombre Completo"
                  class="font-satoshiMedium text-text18 placeholder:text-[#000929] placeholder:text-opacity-25 placeholder:font-satoshiMedium py-3 px-5 w-full bg-white border-0 focus:outline-0 focus:ring-0 transition-all text-[#2E609D]">
              </div>

              <div class="flex flex-col justify-start gap-1" data-aos="fade-up" data-aos-duration="150">
                <label for="email" class="text-[#000929] font-satoshiRegular text-text14">Correo Electrónico</label>
                <input required type="text" name="email" id="email" placeholder="hola@gmail.com"
                  class="font-satoshiMedium text-text18 placeholder:text-[#000929] placeholder:text-opacity-25 placeholder:font-satoshiMedium py-3 px-5 w-full bg-white border-0 focus:outline-0 focus:ring-0 transition-all text-[#2E609D]">
              </div>

              <div class="flex flex-col justify-start gap-1" data-aos="fade-up" data-aos-duration="150">
                <label for="message" class="text-[#000929] font-satoshiRegular text-text14">Mensaje</label>
                <textarea required name="message" id="message" cols="30" rows="3" placeholder="Hola ..."
                  class="font-satoshiMedium text-text18 placeholder:text-[#000929] placeholder:text-opacity-25 placeholder:font-satoshiMedium py-3 px-5 w-full bg-white border-0 focus:outline-0 focus:ring-0 transition-all text-[#2E609D]"></textarea>
              </div>

              <div class="flex justify-start items-center pt-5" data-aos="fade-up" data-aos-duration="150">
                <button type="submit" class="bg-[#2E609D] text-white font-satoshiBold text-text18 py-3 px-5 rounded-lg">
                  Enviar mensaje
                </button>
              </div>
            </form>
          </div>
        </div>

        <div class="flex justify-center items-start">
          {{-- <img src="{{ asset('images/img/image_28.png') }}" alt="ubicacion" class="w-full object-cover h-[548px]"> --}}
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7834.99855136595!2d-74.87784936347086!3d-10.925681200996289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910a2c82b961d395%3A0x48a4f703261fa530!2sPLAZA%20DE%20ARMAS%20-%20PICHANAKI!5e0!3m2!1ses!2spe!4v1717082049306!5m2!1ses!2spe"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>

    <section class="w-11/12 mx-auto">
      <div class="flex flex-col lg:flex-row lg:justify-between gap-24 py-20">
        <div class="lg:basis-2/4 flex justify-center items-center order-2 md:order-1" data-aos="fade-up"
          data-aos-duration="150">
          <img src="{{ asset('images/img/image_29.png') }}" alt="lider" class="w-full object-cover h-[645px]">
        </div>

        <div class="lg:basis-4/6 grid grid-cols-1 md:grid-cols-2 gap-10 order-1 md:order-2">
          <div class="order-1 md:order-1 md:col-span-1 flex flex-col gap-3 bg-[#FFFFFF] p-6 rounded-xl" data-aos="fade-up"
            data-aos-duration="150">
            <div>
              <img src="{{ asset('images/svg/imagen_46.svg') }}" alt="email">
            </div>
            <h3 class="text-[#082252] font-satoshiBold text-text32">Email</h3>
            <p class="text-[#082252] font-satoshiRegular text-text16">Escríbenos para recibir atención personalizada y
              resolver tus dudas.</p>
            <p class="font-satoshiMedium text-text16 text-[#2E609D]">
              {{ $generales->email }}

            </p>
          </div>

          <div class="order-1 md:order-1 md:col-span-1 flex flex-col gap-3 bg-[#FFFFFF] p-6 rounded-xl" data-aos="fade-up"
            data-aos-duration="150">
            <div>
              <img src="{{ asset('images/svg/imagen_47.svg') }}" alt="email">
            </div>
            <h3 class="text-[#082252] font-satoshiBold text-text32">Teléfono</h3>
            <p class="text-[#082252] font-satoshiRegular text-text16">Llámanos para obtener soporte inmediato y asistencia
              profesional.</p>
            <p class="font-satoshiMedium text-text16 text-[#2E609D]">
              {{ $generales->office_phone }}
            </p>
          </div>


          <div class="order-3 md:order-3 md:col-span-2 bg-[#FFFFFF] p-6 rounded-xl flex flex-col gap-3" data-aos="fade-up"
            data-aos-duration="150">
            <div>
              <img src="{{ asset('images/svg/imagen_47.svg') }}" alt="email">
            </div>
            <h3 class="text-[#082252] font-satoshiBold text-text32">Oficina</h3>
            <p class="text-[#082252] font-satoshiRegular text-text16">Visítanos en nuestra oficina para conocer nuestras
              soluciones de tratamiento de agua en persona.</p>
            <p class="font-satoshiMedium text-text16 text-[#2E609D]">
              {{ $generales->address }} {{ $generales->inside }} {{ $generales->district }}, {{ $generales->country }}
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>


@section('scripts_importados')

@stop

@stop

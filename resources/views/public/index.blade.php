@extends('components.public.matrix')

@section('css_importados')
    <style>
        .bg_main {
            background-image: url({{ asset('images/img/image_1.png') }});
        }

        @media (min-width: 768px) {
            .bg_main {
                background-image: url({{ asset('images/img/image_1.png') }});
            }
        }

        .tab-button.active {
            border-color: #2e609d;
            color: #2e609d;
        }

        .bg_color {
            background-color: transparent;
        }

        .scroll_ubicacion::-webkit-scrollbar,
        .scroll_categoria::-webkit-scrollbar {
            width: 5px;
            background-color: white;
            border-radius: 1rem;
        }

        .scroll_ubicacion::-webkit-scrollbar-thumb,
        .scroll_categoria::-webkit-scrollbar-thumb {
            background-color: #393f53;
            border-radius: 1rem;
        }
    </style>
@stop




@section('content')

    <main>
        <section class="bg_main bg-center bg-no-repeat bg-cover pb-24 pt-36 md:py-44">
            <div class="w-11/12 mx-auto flex flex-col gap-5 md:gap-10" data-aos="fade-up" data-aos-duration="150">
                <!-- py-24 md:py-44 -->
                <div class="flex flex-col gap-5 w-full md:w-5/6 xl:w-4/6 2xl:w-3/6">
                    <h1 class="font-satoshiBold text-text40 md:text-text64 text-white leading-snug">
                        Compra, alquila o vende tu propiedad
                        <span class="bg-[#2E609D] py-2 pr-5 pl-2 rounded-md">fácilmente</span>
                    </h1>
                    <p class="font-satoshiRegular text-white text-text18 md:text-text20">
                        Una gran plataforma para comprar, vender o incluso alquilar tus
                        propiedades sin comisiones.
                    </p>
                </div>
                <div>
                    <!--  -->
                    <div class="z-[0]">
                        <!-- Tab Buttons -->
                        <div class="bg-white rounded-t-lg inline-block w-[343px] md:max-w-[388px]">
                            <div class="flex justify-between items-center">
                                <button
                                    class="px-4 pt-4 pb-3 text-[#000929] font-satoshiBold border-b-2 focus:outline-none tab-button text-text18 flex-1"
                                    onclick="showTab('tab1')">
                                    Alquilar
                                </button>
                                <button
                                    class="px-4 pt-4 pb-3 text-[#000929] font-satoshiBold border-b-2 focus:outline-none tab-button text-text18 flex-1"
                                    onclick="showTab('tab2')">
                                    Comprar
                                </button>
                                <button
                                    class="px-4 pt-4 pb-3 text-[#000929] font-satoshiBold border-b-2 focus:outline-none tab-button text-text18 flex-1"
                                    onclick="showTab('tab3')">
                                    Vender
                                </button>
                            </div>
                        </div>

                        <!-- Tab Content -->
                        <div id="tab1"
                            class="py-8 px-4 tab-content bg-white flex justify-between items-center gap-5 rounded-b-lg md:rounded-tr-lg w-full md:max-w-[750px]">
                            <div class="w-full ">
                                <div class="relative w-full text-left">
                                    <div class="group">
                                        <button type="button"
                                            class="inline-flex items-center w-full text-text18 text-[#000929] focus:outline-none font-satoshiBold justify-between gap-5">
                                            <span>Ubicación</span>
                                            <svg width="13" height="13" viewBox="0 0 8 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="group-hover:rotate-180 md:duration-300">
                                                <path d="M0.666016 0.666748L3.99989 3.72008L7.33268 0.666748"
                                                    stroke="#000929" stroke-width="1.33333" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>

                                        <div
                                            class="absolute left-0 w-full origin-top-left bg-white divide-y divide-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                                            <div class="overflow-y-scroll h-[100px] scroll_ubicacion">
                                                @foreach ($inmuebles as $item)
                                                    <a onclick="event.preventDefault();"
                                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                                        {{ $item->district }}
                                                    </a>
                                                @endforeach



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[0.5px] h-[50px] bg-[#E0DEF7] hidden md:block">
                            </div>

                            <div class="hidden md:block w-full">
                                <div class="relative w-full text-left">
                                    <div class="group">
                                        <button type="button"
                                            class="inline-flex items-center w-full text-text18 text-[#000929] focus:outline-none font-satoshiBold justify-between gap-5">
                                            <span>Categorías</span>
                                            <svg width="13" height="13" viewBox="0 0 8 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="group-hover:rotate-180 md:duration-300">
                                                <path d="M0.666016 0.666748L3.99989 3.72008L7.33268 0.666748"
                                                    stroke="#000929" stroke-width="1.33333" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>

                                        <div
                                            class="absolute left-0 w-full origin-top-left bg-white divide-y divide-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                                            <div class="overflow-y-scroll h-[100px] scroll_categoria">
                                                @foreach ($inmuebles as $item)
                                                    <a onclick="event.preventDefault();"
                                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                                        {{ $item->district }}
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[0.5px] h-[50px] bg-[#E0DEF7] hidden md:block">
                            </div>

                            <div class="flex justify-center items-center md:w-full">
                                <div class="flex flex-row-reverse 2md:flex-row justify-center items-center gap-5">
                                    <div class="flex justify-start items-center w-full">
                                        <a href="{{ route('propiedades') }}"
                                            class="bg-[#2E609D] rounded-lg font-satoshiBold text-text16 text-white px-0 md:px-6 py-0 md:py-3 text-center h-full inline-block">
                                            <span class="hidden md:flex w-full">Explorar propiedades</span>
                                            <div
                                                class="flex justify-center items-center p-4 md:hidden w-[48px] h-[48px] 2md:w-[50px] 2md:h-[50px]">
                                                <img src="{{ asset('images/svg/imagen_18.svg') }}" alt="busqueda" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab2"
                            class="py-8 p-4 tab-content bg-white flex justify-between items-center gap-5 rounded-b-lg md:rounded-tr-lg w-full md:max-w-[750px]">
                            <div class="w-full ">
                                <div class="relative w-full text-left">
                                    <div class="group">
                                        <button type="button"
                                            class="inline-flex items-center w-full text-text18 text-[#000929] focus:outline-none font-satoshiBold justify-between gap-5">
                                            <span>Ubicación</span>
                                            <svg width="13" height="13" viewBox="0 0 8 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="group-hover:rotate-180 md:duration-300">
                                                <path d="M0.666016 0.666748L3.99989 3.72008L7.33268 0.666748"
                                                    stroke="#000929" stroke-width="1.33333" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>

                                        <div
                                            class="absolute left-0 w-full origin-top-left bg-white divide-y divide-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                                            <div class="overflow-y-scroll h-[100px] scroll_ubicacion">
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Villa
                                                    María del Triunfosss</a>
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Villa
                                                    María del Triunfo</a>
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Villa
                                                    María del Triunfo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[0.5px] h-[50px] bg-[#E0DEF7] hidden md:block">
                            </div>

                            <div class="hidden md:block w-full">
                                <div class="relative w-full text-left">
                                    <div class="group">
                                        <button type="button"
                                            class="inline-flex items-center w-full text-text18 text-[#000929] focus:outline-none font-satoshiBold justify-between gap-5">
                                            <span>Categorías</span>
                                            <svg width="13" height="13" viewBox="0 0 8 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="group-hover:rotate-180 md:duration-300">
                                                <path d="M0.666016 0.666748L3.99989 3.72008L7.33268 0.666748"
                                                    stroke="#000929" stroke-width="1.33333" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>

                                        <div
                                            class="absolute left-0 w-full origin-top-left bg-white divide-y divide-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                                            <div class="overflow-y-scroll h-[100px] scroll_categoria">
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Villa
                                                    María del Triunfosss</a>
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Villa
                                                    María del Triunfo</a>
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Villa
                                                    María del Triunfo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[0.5px] h-[50px] bg-[#E0DEF7] hidden md:block">
                            </div>

                            <div class="flex justify-center items-center md:w-full">
                                <div class="flex flex-row-reverse 2md:flex-row justify-center items-center gap-5">
                                    <div class="flex justify-start items-center w-full">
                                        <a href="{{ route('propiedades') }}"
                                            class="bg-[#2E609D] rounded-lg font-satoshiBold text-text16 text-white px-0 md:px-6 py-0 md:py-3 text-center h-full inline-block">
                                            <span class="hidden md:flex w-full">Explorar propiedades</span>
                                            <div
                                                class="flex justify-center items-center p-4 md:hidden w-[48px] h-[48px] 2md:w-[50px] 2md:h-[50px]">
                                                <img src="{{ asset('images/svg/imagen_18.svg') }}" alt="busqueda" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab3"
                            class="py-8 p-4 tab-content bg-white flex justify-between items-center gap-5 rounded-b-lg md:rounded-tr-lg w-full md:max-w-[750px]">
                            <div class="w-full ">
                                <div class="relative w-full text-left">
                                    <div class="group">
                                        <button type="button"
                                            class="inline-flex items-center w-full text-text18 text-[#000929] focus:outline-none font-satoshiBold justify-between gap-5">
                                            <span>Ubicación</span>
                                            <svg width="13" height="13" viewBox="0 0 8 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="group-hover:rotate-180 md:duration-300">
                                                <path d="M0.666016 0.666748L3.99989 3.72008L7.33268 0.666748"
                                                    stroke="#000929" stroke-width="1.33333" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>

                                        <div
                                            class="absolute left-0 w-full origin-top-left bg-white divide-y divide-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                                            <div class="overflow-y-scroll h-[100px] scroll_ubicacion">
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Villa
                                                    María del Triunfosss</a>
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Villa
                                                    María del Triunfo</a>
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Villa
                                                    María del Triunfo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[0.5px] h-[50px] bg-[#E0DEF7] hidden md:block">
                            </div>

                            <div class="hidden md:block w-full">
                                <div class="relative w-full text-left">
                                    <div class="group">
                                        <button type="button"
                                            class="inline-flex items-center w-full text-text18 text-[#000929] focus:outline-none font-satoshiBold justify-between gap-5">
                                            <span>Categorías</span>
                                            <svg width="13" height="13" viewBox="0 0 8 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="group-hover:rotate-180 md:duration-300">
                                                <path d="M0.666016 0.666748L3.99989 3.72008L7.33268 0.666748"
                                                    stroke="#000929" stroke-width="1.33333" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>

                                        <div
                                            class="absolute left-0 w-full origin-top-left bg-white divide-y divide-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                                            <div class="overflow-y-scroll h-[100px] scroll_categoria">
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Villa
                                                    María del Triunfosss</a>
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Villa
                                                    María del Triunfo</a>
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Villa
                                                    María del Triunfo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[0.5px] h-[50px] bg-[#E0DEF7] hidden md:block">
                            </div>

                            <div class="flex justify-center items-center md:w-full">
                                <div class="flex flex-row-reverse 2md:flex-row justify-center items-center gap-5">
                                    <div class="flex justify-start items-center w-full">
                                        <a href="{{ route('propiedades') }}"
                                            class="bg-[#2E609D] rounded-lg font-satoshiBold text-text16 text-white px-0 md:px-6 py-0 md:py-3 text-center h-full inline-block">
                                            <span class="hidden md:flex w-full">Explorar propiedades</span>
                                            <div
                                                class="flex justify-center items-center p-4 md:hidden w-[48px] h-[48px] 2md:w-[50px] 2md:h-[50px]">
                                                <img src="{{ asset('images/svg/imagen_18.svg') }}" alt="busqueda" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  -->
                    <p class="font-satoshiMedium text-text14 hidden md:block text-white pt-2">
                        Propietario, anuncia tu propiedad gratis
                    </p>
                </div>
                <div class="flex gap-5 md:gap-24 justify-between md:justify-start items-center">
                    <div class="flex flex-col gap-2">
                        <div>
                            <img src="{{ asset('images/svg/imagen_1.svg') }}" alt="propietarios"
                                class="w-[49px] h-[49px] md:w-[56px] md:h-[56px]" />
                        </div>
                        <div class="text-white clear-startflex flex-col gap-2">
                            <div class="flex flex-col md:flex-row">
                                <p class="font-satoshiBold text-text24 md:text-text26">5k+</p>
                                <p class="font-satoshiBold text-text24 md:text-text26">
                                    propietarios
                                </p>
                            </div>
                            <p class="font-satoshiMedium text-text14 md:text-text16">
                                creen en nuestro servicio
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <div>
                            <img src="{{ asset('images/svg/imagen_2.svg') }}" alt="propiedades"
                                class="w-[49px] h-[49px] md:w-[56px] md:h-[56px]" />
                        </div>
                        <div class="text-white clear-startflex flex-col gap-2">
                            <div class="flex flex-col md:flex-row">
                                <p class="font-satoshiBold text-text24 md:text-text26">
                                    10k+
                                </p>
                                <p class="font-satoshiBold text-text24 md:text-text26">
                                    propiedades
                                </p>
                            </div>
                            <p class="font-satoshiMedium text-text14 md:text-text16">
                                y casa lista para ser habitada
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#FAFAFA]">
            <div class="w-11/12 mx-auto pt-16 pb-10 md:pt-20 md:pb-10">
                <div class="flex flex-col gap-4 w-full md:w-4/6 mx-auto">
                    <h2 class="text-[#000929] font-satoshiBold text-text40 md:text-text48 leading-tight text-center">
                        Para aquellos que quieran
                        <span class="text-[#2E609D]">alquilar</span>
                    </h2>
                    <p class="font-satoshiRegular text-text18 md:text-text20 text-[#000929] text-center">
                        Alquile rápidamente, sin aval ni fianza. Programe visitas online,
                        cierre un trato directamente con el propietario y firme un
                        contrato digital: se acabaron las colas en la notaría.
                    </p>
                </div>

                <div class="my-5 block md:hidden">
                    <div class="swiper propiedades z-[10]">
                        <div class="swiper-wrapper z-[10]">

                            @foreach ($inmuebles as $item)
                                @if ($item->tipo_propiedad == 'alquiler')
                                    <div class="swiper-slide">
                                        @if ($item->destacar == 1)
                                            <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up"
                                                data-aos-duration="150">
                                                <div class="w-full flex justify-center items-center relative">
                                                    <img src="{{ asset($item->imagen) }}" alt=""
                                                        class="rounded-t-2xl w-full" />
                                                    <div
                                                        class="flex gap-2 items-center justify-center absolute top-[10%] right-[5%] bg-[#2E609D] text-white font-satoshiBold text-text12 px-5 py-3 rounded-full">
                                                        <div class="flex justify-start items-center">
                                                            <img src="{{ asset('images/svg/imagen_6.svg') }}"
                                                                alt="" />
                                                        </div>
                                                        <p>Popular</p>
                                                    </div>
                                                </div>

                                                <div class="flex flex-col gap-5 p-6">
                                                    <div class="flex flex-col gap-1">
                                                        <div class="flex gap-1 items-center">
                                                            <p
                                                                class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                                                S/{{-- 2,095 --}} {{ $item->precio }}
                                                            </p>
                                                            <p
                                                                class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                                                /mensual
                                                            </p>
                                                        </div>

                                                        <p
                                                            class="text-[#100A55] opacity-40 font-satoshiMedium text-text12">
                                                            Condomínio: R$ 150,00
                                                        </p>
                                                    </div>

                                                    <div class="flex flex-col gap-2">
                                                        <a href="{{ route('detalle', $item->id) }}">
                                                            <h2 class="text-[#000929] font-satoshiBold text-text32">
                                                                {{-- Cond. Las Brisas --}} {{ $item->producto }}
                                                            </h2>
                                                        </a>
                                                        <p
                                                            class="font-satoshiRegular text-text12 text-[#000929] opacity-50">
                                                            {{-- Av. Los Aires 634, Puenta Piedra, Lima, Perú --}}
                                                            {{ $item->address }}, {{ $item->inside }} -
                                                            {{ $item->district }}, {{ $item->country }}
                                                        </p>
                                                        <p
                                                            class="font-satoshiRegular text-text14 text-[#000929] opacity-50">
                                                            {{--   Excelente oportunidad; Terreno de 1000 m2 con cerco
                                                    perímetrico, ubicado... --}} {{ $item->extract }}
                                                        </p>
                                                    </div>

                                                    <div class="flex justify-between gap-5">
                                                        <div class="flex gap-3">
                                                            <div class="flex justify-center items-center">
                                                                <img src="{{ asset('images/svg/imagen_3.svg') }}"
                                                                    alt="" />
                                                            </div>
                                                            <p
                                                                class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                                {{ $item->cuartos }} Cuartos
                                                            </p>
                                                        </div>

                                                        <div class="flex gap-3">
                                                            <div class="flex justify-center items-center">
                                                                <img src="{{ asset('images/svg/imagen_4.svg') }}"
                                                                    alt="" />
                                                            </div>
                                                            <p
                                                                class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                                {{ $item->banios }} Baños
                                                            </p>
                                                        </div>

                                                        <div class="flex gap-3">
                                                            <div class="flex justify-center items-center">
                                                                <img src="{{ asset('images/svg/imagen_5.svg') }}"
                                                                    alt="" />
                                                            </div>
                                                            <p
                                                                class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                                {{ $item->area }}m<sup>2</sup>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="flex gap-2 items-center justify-start border-t border-[#100A55] border-opacity-15 pt-5">
                                                        <div class="flex justify-start items-center">
                                                            <img src="{{ asset($item->imagen_propietario) }}"
                                                                alt="" class="rounded-full" />
                                                        </div>
                                                        <p
                                                            class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                            {{ $item->propietario }}
                                                        </p>
                                                        <p
                                                            class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                            |
                                                        </p>
                                                        <p
                                                            class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                            {{ $item->tipo_propietario }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up"
                                                data-aos-duration="150">
                                                <div class="w-full flex justify-center items-center relative">
                                                    <img src="{{ asset($item->imagen) }}" alt=""
                                                        class="rounded-t-2xl w-full" />
                                                </div>

                                                <div class="flex flex-col gap-5 p-6">
                                                    <div class="flex flex-col gap-1">
                                                        <div class="flex gap-1 items-center">
                                                            <p
                                                                class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                                                S/{{-- 2,095 --}} {{ $item->precio }}
                                                            </p>
                                                            <p
                                                                class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                                                /mensual
                                                            </p>
                                                        </div>

                                                        <p
                                                            class="text-[#100A55] opacity-40 font-satoshiMedium text-text12">
                                                            Condomínio: R$ 150,00
                                                        </p>
                                                    </div>

                                                    <div class="flex flex-col gap-2">
                                                        <a href="{{ route('detalle', $item->id) }}">
                                                            <h2 class="text-[#000929] font-satoshiBold text-text32">
                                                                {{-- Cond. Las Brisas --}} {{ $item->producto }}
                                                            </h2>
                                                        </a>
                                                        <p
                                                            class="font-satoshiRegular text-text12 text-[#000929] opacity-50">
                                                            {{-- Av. Los Aires 634, Puenta Piedra, Lima, Perú --}}
                                                            {{ $item->address }}, {{ $item->inside }} -
                                                            {{ $item->district }}, {{ $item->country }}
                                                        </p>
                                                        <p
                                                            class="font-satoshiRegular text-text14 text-[#000929] opacity-50">
                                                            {{--   Excelente oportunidad; Terreno de 1000 m2 con cerco
                                                    perímetrico, ubicado... --}} {{ $item->extract }}
                                                        </p>
                                                    </div>

                                                    <div class="flex justify-between gap-5">
                                                        <div class="flex gap-3">
                                                            <div class="flex justify-center items-center">
                                                                <img src="{{ asset('images/svg/imagen_3.svg') }}"
                                                                    alt="" />
                                                            </div>
                                                            <p
                                                                class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                                {{ $item->cuartos }} Cuartos
                                                            </p>
                                                        </div>

                                                        <div class="flex gap-3">
                                                            <div class="flex justify-center items-center">
                                                                <img src="{{ asset('images/svg/imagen_4.svg') }}"
                                                                    alt="" />
                                                            </div>
                                                            <p
                                                                class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                                {{ $item->banios }} Baños
                                                            </p>
                                                        </div>

                                                        <div class="flex gap-3">
                                                            <div class="flex justify-center items-center">
                                                                <img src="{{ asset('images/svg/imagen_5.svg') }}"
                                                                    alt="" />
                                                            </div>
                                                            <p
                                                                class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                                {{ $item->area }}m<sup>2</sup>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="flex gap-2 items-center justify-start border-t border-[#100A55] border-opacity-15 pt-5">
                                                        <div class="flex justify-start items-center">
                                                            <img src="{{ asset('images/img/image_3.png') }}"
                                                                alt="" class="rounded-full" />
                                                        </div>
                                                        <p
                                                            class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                            {{ $item->propietario }}
                                                        </p>
                                                        <p
                                                            class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                            |
                                                        </p>
                                                        <p
                                                            class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                            {{ $item->tipo_propietario }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="py-10 hidden md:grid md:grid-cols-2 xl:grid-cols-3 md:gap-5">
                    @foreach ($inmuebles as $item)
                        @if ($item->tipo_propiedad == 'alquiler')
                            @if ($item->destacar == 1)
                                <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up"
                                    data-aos-duration="150">
                                    <div class="w-full flex justify-center items-center relative">
                                        <img src="{{ asset($item->imagen) }}" alt=""
                                            class="rounded-t-2xl w-full" />
                                        <div
                                            class="flex gap-2 items-center justify-center absolute top-[10%] right-[5%] bg-[#2E609D] text-white font-satoshiBold text-text12 px-5 py-3 rounded-full">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset('images/svg/imagen_6.svg') }}" alt="" />
                                            </div>
                                            <p>Popular</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-col gap-5 p-6">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex gap-1 items-center">
                                                <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                                    S/{{-- 2,095 --}} {{ $item->precio }}
                                                </p>
                                                <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                                    /mensual
                                                </p>
                                            </div>

                                            <p class="text-[#100A55] opacity-40 font-satoshiMedium text-text12">
                                                Condomínio: R$ 150,00
                                            </p>
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <a href="{{ route('detalle', $item->id) }}">
                                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                                    {{-- Cond. Las Brisas --}} {{ $item->producto }}
                                                </h2>
                                            </a>
                                            <p class="font-satoshiRegular text-text12 text-[#000929] opacity-50">
                                                {{-- Av. Los Aires 634, Puenta Piedra, Lima, Perú --}}
                                                {{ $item->address }}, {{ $item->inside }} - {{ $item->district }},
                                                {{ $item->country }}
                                            </p>
                                            <p class="font-satoshiRegular text-text14 text-[#000929] opacity-50">
                                                {{--   Excelente oportunidad; Terreno de 1000 m2 con cerco
                                        perímetrico, ubicado... --}} {{ $item->extract }}
                                            </p>
                                        </div>

                                        <div class="flex justify-between gap-5">
                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_3.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    {{ $item->cuartos }} Cuartos
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_4.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    {{ $item->banios }} Baños
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_5.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    {{ $item->area }}m<sup>2</sup>
                                                </p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex gap-2 items-center justify-start border-t border-[#100A55] border-opacity-15 pt-5">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset($item->imagen_propietario) }}" alt=""
                                                    class="rounded-full" />
                                            </div>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                {{ $item->propietario }}
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                |
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                {{ $item->tipo_propietario }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up"
                                    data-aos-duration="150">
                                    <div class="w-full flex justify-center items-center relative">
                                        <img src="{{ asset($item->imagen) }}" alt=""
                                            class="rounded-t-2xl w-full" />
                                    </div>

                                    <div class="flex flex-col gap-5 p-6">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex gap-1 items-center">
                                                <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                                    S/{{-- 2,095 --}} {{ $item->precio }}
                                                </p>
                                                <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                                    /mensual
                                                </p>
                                            </div>

                                            <p class="text-[#100A55] opacity-40 font-satoshiMedium text-text12">
                                                Condomínio: R$ 150,00
                                            </p>
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <a href="{{ route('detalle', $item->id) }}">
                                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                                    {{-- Cond. Las Brisas --}} {{ $item->producto }}
                                                </h2>
                                            </a>
                                            <p class="font-satoshiRegular text-text12 text-[#000929] opacity-50">
                                                {{-- Av. Los Aires 634, Puenta Piedra, Lima, Perú --}}
                                                {{ $item->address }}, {{ $item->inside }} - {{ $item->district }},
                                                {{ $item->country }}
                                            </p>
                                            <p class="font-satoshiRegular text-text14 text-[#000929] opacity-50">
                                                {{--   Excelente oportunidad; Terreno de 1000 m2 con cerco
                                        perímetrico, ubicado... --}} {{ $item->extract }}
                                            </p>
                                        </div>

                                        <div class="flex justify-between gap-5">
                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_3.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    {{ $item->cuartos }} Cuartos
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_4.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    {{ $item->banios }} Baños
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_5.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    {{ $item->area }}m<sup>2</sup>
                                                </p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex gap-2 items-center justify-start border-t border-[#100A55] border-opacity-15 pt-5">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset('images/img/image_3.png') }}" alt=""
                                                    class="rounded-full" />
                                            </div>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                {{ $item->propietario }}
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                |
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                {{ $item->tipo_propietario }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>
        </section>

        <section class="bg-[#F7F7FD]">
            <div class="flex flex-col lg:flex-row w-11/12 mx-auto">
                <div data-aos="fade-up" data-aos-duration="150"
                    class="flex flex-col gap-5 justify-center basis-1/2 my-10 md:my-20 xl:pl-32">
                    <div class="w-full lg:w-5/6">
                        <h2 class="font-satoshiBold text-text32 md:text-text48 text-[#000929]">
                            Comience su viaje inmobiliario hoy
                        </h2>
                        <p class="text-text18 md:text-text20 font-satoshiRegular text-[#000929]">
                            La propiedad de tus sueños está a sólo un clic de distancia. Ya
                            sea que esté buscando una nueva casa, una inversión estratégica
                            o asesoramiento de expertos en bienes raíces, Estatein está aquí
                            para ayudarlo en cada paso del camino. Dé el primer paso hacia
                            sus objetivos inmobiliarios y explore nuestras propiedades
                            disponibles o póngase en contacto con nuestro equipo para
                            obtener asistencia personalizada.
                        </p>
                    </div>
                    <div class="flex justify-start items-center w-full md:w-auto">
                        <a href="#"
                            class="bg-[#2E609D] rounded-lg font-satoshiBold text-text16 text-white px-6 py-3 w-full md:w-auto text-center">
                            Explorar propiedades
                        </a>
                    </div>
                </div>

                <div class="basis-1/2 flex justify-end items-end" data-aos="fade-up" data-aos-duration="150">
                    <img src="{{ asset('images/img/image_11.png') }}" alt="inmobiliaria" />
                </div>
            </div>
        </section>

        <section class="bg-[#FAFAFA]">
            <div class="w-11/12 mx-auto py-16 md:py-20">
                <div class="flex flex-col gap-4 w-full md:w-4/6 mx-auto">
                    <h2 class="text-[#000929] font-satoshiBold text-text40 md:text-text48 leading-tight text-center">
                        Para aquellos que quieran
                        <span class="text-[#2E609D]">Comprar</span>
                    </h2>
                    <p class="font-satoshiRegular text-text18 md:text-text20 text-[#000929] text-center">
                        Alquile rápidamente, sin aval ni fianza. Programe visitas online,
                        cierre un trato directamente con el propietario y firme un
                        contrato digital: se acabaron las colas en la notaría.
                    </p>
                </div>

                {{-- comprar carrusel --}}
                <div class="my-5 block md:hidden">
                    <div class="swiper propiedades">
                        <div class="swiper-wrapper">
                            @foreach ($inmuebles as $item)
                                @if ($item->tipo_propiedad == 'comprar')
                                    <div class="swiper-slide">
                                        @if ($item->destacar == 1)
                                            <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up"
                                                data-aos-duration="150">
                                                <div class="w-full flex justify-center items-center relative">
                                                    <img src="{{ asset($item->imagen) }}" alt=""
                                                        class="rounded-t-2xl w-full" />
                                                    <div
                                                        class="flex gap-2 items-center justify-center absolute top-[10%] right-[5%] bg-[#2E609D] text-white font-satoshiBold text-text12 px-5 py-3 rounded-full">
                                                        <div class="flex justify-start items-center">
                                                            <img src="{{ asset('images/svg/imagen_6.svg') }}"
                                                                alt="" />
                                                        </div>
                                                        <p>Popular</p>
                                                    </div>
                                                </div>

                                                <div class="flex flex-col gap-5 p-6">
                                                    <div class="flex flex-col gap-1">
                                                        <div class="flex gap-1 items-center">
                                                            <p
                                                                class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                                                S/{{-- 2,095 --}} {{ $item->precio }}
                                                            </p>
                                                            <p
                                                                class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                                                /mensual
                                                            </p>
                                                        </div>

                                                        <p
                                                            class="text-[#100A55] opacity-40 font-satoshiMedium text-text12">
                                                            Condomínio: R$ 150,00
                                                        </p>
                                                    </div>

                                                    <div class="flex flex-col gap-2">
                                                        <a href="{{ route('detalle', $item->id) }}">
                                                            <h2 class="text-[#000929] font-satoshiBold text-text32">
                                                                {{-- Cond. Las Brisas --}} {{ $item->producto }}
                                                            </h2>
                                                        </a>
                                                        <p
                                                            class="font-satoshiRegular text-text12 text-[#000929] opacity-50">
                                                            {{-- Av. Los Aires 634, Puenta Piedra, Lima, Perú --}}
                                                            {{ $item->address }}, {{ $item->inside }} -
                                                            {{ $item->district }}, {{ $item->country }}
                                                        </p>
                                                        <p
                                                            class="font-satoshiRegular text-text14 text-[#000929] opacity-50">
                                                            {{--   Excelente oportunidad; Terreno de 1000 m2 con cerco
                                        perímetrico, ubicado... --}} {{ $item->extract }}
                                                        </p>
                                                    </div>

                                                    <div class="flex justify-between gap-5">
                                                        <div class="flex gap-3">
                                                            <div class="flex justify-center items-center">
                                                                <img src="{{ asset('images/svg/imagen_3.svg') }}"
                                                                    alt="" />
                                                            </div>
                                                            <p
                                                                class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                                {{ $item->cuartos }} Cuartos
                                                            </p>
                                                        </div>

                                                        <div class="flex gap-3">
                                                            <div class="flex justify-center items-center">
                                                                <img src="{{ asset('images/svg/imagen_4.svg') }}"
                                                                    alt="" />
                                                            </div>
                                                            <p
                                                                class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                                {{ $item->banios }} Baños
                                                            </p>
                                                        </div>

                                                        <div class="flex gap-3">
                                                            <div class="flex justify-center items-center">
                                                                <img src="{{ asset('images/svg/imagen_5.svg') }}"
                                                                    alt="" />
                                                            </div>
                                                            <p
                                                                class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                                {{ $item->area }}m<sup>2</sup>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="flex gap-2 items-center justify-start border-t border-[#100A55] border-opacity-15 pt-5">
                                                        <div class="flex justify-start items-center">
                                                            <img src="{{ asset($item->imagen_propietario) }}"
                                                                alt="" class="rounded-full" />
                                                        </div>
                                                        <p
                                                            class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                            {{ $item->propietario }}
                                                        </p>
                                                        <p
                                                            class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                            |
                                                        </p>
                                                        <p
                                                            class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                            {{ $item->tipo_propietario }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up"
                                                data-aos-duration="150">
                                                <div class="w-full flex justify-center items-center relative">
                                                    <img src="{{ asset($item->imagen) }}" alt=""
                                                        class="rounded-t-2xl w-full" />
                                                </div>

                                                <div class="flex flex-col gap-5 p-6">
                                                    <div class="flex flex-col gap-1">
                                                        <div class="flex gap-1 items-center">
                                                            <p
                                                                class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                                                S/{{-- 2,095 --}} {{ $item->precio }}
                                                            </p>
                                                            <p
                                                                class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                                                /mensual
                                                            </p>
                                                        </div>

                                                        <p
                                                            class="text-[#100A55] opacity-40 font-satoshiMedium text-text12">
                                                            Condomínio: R$ 150,00
                                                        </p>
                                                    </div>

                                                    <div class="flex flex-col gap-2">
                                                        <a href="{{ route('detalle', $item->id) }}">
                                                            <h2 class="text-[#000929] font-satoshiBold text-text32">
                                                                {{-- Cond. Las Brisas --}} {{ $item->producto }}
                                                            </h2>
                                                        </a>
                                                        <p
                                                            class="font-satoshiRegular text-text12 text-[#000929] opacity-50">
                                                            {{-- Av. Los Aires 634, Puenta Piedra, Lima, Perú --}}
                                                            {{ $item->address }}, {{ $item->inside }} -
                                                            {{ $item->district }}, {{ $item->country }}
                                                        </p>
                                                        <p
                                                            class="font-satoshiRegular text-text14 text-[#000929] opacity-50">
                                                            {{--   Excelente oportunidad; Terreno de 1000 m2 con cerco
                                        perímetrico, ubicado... --}} {{ $item->extract }}
                                                        </p>
                                                    </div>

                                                    <div class="flex justify-between gap-5">
                                                        <div class="flex gap-3">
                                                            <div class="flex justify-center items-center">
                                                                <img src="{{ asset('images/svg/imagen_3.svg') }}"
                                                                    alt="" />
                                                            </div>
                                                            <p
                                                                class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                                {{ $item->cuartos }} Cuartos
                                                            </p>
                                                        </div>

                                                        <div class="flex gap-3">
                                                            <div class="flex justify-center items-center">
                                                                <img src="{{ asset('images/svg/imagen_4.svg') }}"
                                                                    alt="" />
                                                            </div>
                                                            <p
                                                                class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                                {{ $item->banios }} Baños
                                                            </p>
                                                        </div>

                                                        <div class="flex gap-3">
                                                            <div class="flex justify-center items-center">
                                                                <img src="{{ asset('images/svg/imagen_5.svg') }}"
                                                                    alt="" />
                                                            </div>
                                                            <p
                                                                class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                                {{ $item->area }}m<sup>2</sup>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="flex gap-2 items-center justify-start border-t border-[#100A55] border-opacity-15 pt-5">
                                                        <div class="flex justify-start items-center">
                                                            <img src="{{ asset('images/img/image_3.png') }}"
                                                                alt="" class="rounded-full" />
                                                        </div>
                                                        <p
                                                            class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                            Carlos Soria
                                                        </p>
                                                        <p
                                                            class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                            |
                                                        </p>
                                                        <p
                                                            class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                            Dueño
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @endif
                            @endforeach


                            {{-- <div class="swiper-slide">
                                <div class="flex flex-col rounded-xl bg-white">
                                    <div class="w-full flex justify-center items-center relative">
                                        <img src="{{ asset('images/img/image_10.png') }}" alt=""
                                            class="rounded-t-lg w-full" />
                                        <div
                                            class="flex gap-2 items-center justify-center absolute top-[10%] right-[5%] bg-[#2E609D] text-white font-satoshiBold text-text12 px-5 py-3 rounded-full">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset('images/svg/imagen_6.svg') }}" alt="" />
                                            </div>
                                            <p>Popular</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-col gap-5 p-6">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex gap-2 items-center">
                                                <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                                    Desde
                                                </p>
                                                <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                                    S/250,000.00
                                                </p>
                                            </div>

                                            <p class="text-[#100A55] opacity-40 font-satoshiMedium text-text12">
                                                Hasta 30% de descuento programa...
                                            </p>
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <a href="{{route('detalle')}}">
                                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                                Cond. Las Brisas
                                                </h2>
                                            </a>
                                            <p class="font-satoshiRegular text-text12 text-[#000929] opacity-50">
                                                Av. Los Aires 634, Puenta Piedra, Lima, Perú
                                            </p>
                                            <p class="font-satoshiRegular text-text14 text-[#000929] opacity-50">
                                                Excelente oportunidad; Terreno de 1000 m2 con cerco
                                                perímetrico, ubicado...
                                            </p>
                                        </div>

                                        <div class="flex justify-between gap-5">
                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_3.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    3 Cuartos
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_4.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    2 Baños
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_5.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    5x7m<sup>2</sup>
                                                </p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex gap-2 items-center justify-start border-t border-[#100A55] border-opacity-15 pt-5">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset('images/img/image_3.png') }}" alt=""
                                                    class="rounded-full" />
                                            </div>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                Carlos Soria
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                |
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                Dueño
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex flex-col rounded-xl bg-white">
                                    <div class="w-full flex justify-center items-center relative">
                                        <img src="{{ asset('images/img/image_10.png') }}" alt=""
                                            class="rounded-t-lg w-full" />
                                        <div
                                            class="flex gap-2 items-center justify-center absolute top-[10%] right-[5%] bg-[#2E609D] text-white font-satoshiBold text-text12 px-5 py-3 rounded-full">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset('images/svg/imagen_6.svg') }}" alt="" />
                                            </div>
                                            <p>Popular</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-col gap-5 p-6">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex gap-2 items-center">
                                                <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                                    Desde
                                                </p>
                                                <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                                    S/250,000.00
                                                </p>
                                            </div>

                                            <p class="text-[#100A55] opacity-40 font-satoshiMedium text-text12">
                                                Hasta 30% de descuento programa...
                                            </p>
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <a href="{{route('detalle')}}">
                                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                                Cond. Las Brisas
                                                </h2>
                                            </a>
                                            <p class="font-satoshiRegular text-text12 text-[#000929] opacity-50">
                                                Av. Los Aires 634, Puenta Piedra, Lima, Perú
                                            </p>
                                            <p class="font-satoshiRegular text-text14 text-[#000929] opacity-50">
                                                Excelente oportunidad; Terreno de 1000 m2 con cerco
                                                perímetrico, ubicado...
                                            </p>
                                        </div>

                                        <div class="flex justify-between gap-5">
                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_3.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    3 Cuartos
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_4.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    2 Baños
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_5.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    5x7m<sup>2</sup>
                                                </p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex gap-2 items-center justify-start border-t border-[#100A55] border-opacity-15 pt-5">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset('images/img/image_3.png') }}" alt=""
                                                    class="rounded-full" />
                                            </div>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                Carlos Soria
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                |
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                Dueño
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex flex-col rounded-xl bg-white">
                                    <div class="w-full flex justify-center items-center relative">
                                        <img src="{{ asset('images/img/image_10.png') }}" alt=""
                                            class="rounded-t-lg w-full" />
                                        <div
                                            class="flex gap-2 items-center justify-center absolute top-[10%] right-[5%] bg-[#2E609D] text-white font-satoshiBold text-text12 px-5 py-3 rounded-full">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset('images/svg/imagen_6.svg') }}" alt="" />
                                            </div>
                                            <p>Popular</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-col gap-5 p-6">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex gap-2 items-center">
                                                <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                                    Desde
                                                </p>
                                                <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                                    S/250,000.00
                                                </p>
                                            </div>

                                            <p class="text-[#100A55] opacity-40 font-satoshiMedium text-text12">
                                                Hasta 30% de descuento programa...
                                            </p>
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <a href="{{route('detalle')}}">
                                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                                Cond. Las Brisas
                                                </h2>
                                            </a>
                                            <p class="font-satoshiRegular text-text12 text-[#000929] opacity-50">
                                                Av. Los Aires 634, Puenta Piedra, Lima, Perú
                                            </p>
                                            <p class="font-satoshiRegular text-text14 text-[#000929] opacity-50">
                                                Excelente oportunidad; Terreno de 1000 m2 con cerco
                                                perímetrico, ubicado...
                                            </p>
                                        </div>

                                        <div class="flex justify-between gap-5">
                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_3.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    3 Cuartos
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_4.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    2 Baños
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_5.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    5x7m<sup>2</sup>
                                                </p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex gap-2 items-center justify-start border-t border-[#100A55] border-opacity-15 pt-5">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset('images/img/image_3.png') }}" alt=""
                                                    class="rounded-full" />
                                            </div>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                Carlos Soria
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                |
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                Dueño
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex flex-col rounded-xl bg-white">
                                    <div class="w-full flex justify-center items-center relative">
                                        <img src="{{ asset('images/img/image_10.png') }}" alt=""
                                            class="rounded-t-lg w-full" />
                                        <div
                                            class="flex gap-2 items-center justify-center absolute top-[10%] right-[5%] bg-[#2E609D] text-white font-satoshiBold text-text12 px-5 py-3 rounded-full">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset('images/svg/imagen_6.svg') }}" alt="" />
                                            </div>
                                            <p>Popular</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-col gap-5 p-6">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex gap-2 items-center">
                                                <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                                    Desde
                                                </p>
                                                <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                                    S/250,000.00
                                                </p>
                                            </div>

                                            <p class="text-[#100A55] opacity-40 font-satoshiMedium text-text12">
                                                Hasta 30% de descuento programa...
                                            </p>
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <a href="{{route('detalle')}}">
                                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                                Cond. Las Brisas
                                                </h2>
                                            </a>
                                            <p class="font-satoshiRegular text-text12 text-[#000929] opacity-50">
                                                Av. Los Aires 634, Puenta Piedra, Lima, Perú
                                            </p>
                                            <p class="font-satoshiRegular text-text14 text-[#000929] opacity-50">
                                                Excelente oportunidad; Terreno de 1000 m2 con cerco
                                                perímetrico, ubicado...
                                            </p>
                                        </div>

                                        <div class="flex justify-between gap-5">
                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_3.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    3 Cuartos
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_4.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    2 Baños
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_5.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    5x7m<sup>2</sup>
                                                </p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex gap-2 items-center justify-start border-t border-[#100A55] border-opacity-15 pt-5">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset('images/img/image_3.png') }}" alt=""
                                                    class="rounded-full" />
                                            </div>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                Carlos Soria
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                |
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                Dueño
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex flex-col rounded-xl bg-white">
                                    <div class="w-full flex justify-center items-center relative">
                                        <img src="{{ asset('images/img/image_10.png') }}" alt=""
                                            class="rounded-t-lg w-full" />
                                        <div
                                            class="flex gap-2 items-center justify-center absolute top-[10%] right-[5%] bg-[#2E609D] text-white font-satoshiBold text-text12 px-5 py-3 rounded-full">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset('images/svg/imagen_6.svg') }}" alt="" />
                                            </div>
                                            <p>Popular</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-col gap-5 p-6">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex gap-2 items-center">
                                                <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                                    Desde
                                                </p>
                                                <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                                    S/250,000.00
                                                </p>
                                            </div>

                                            <p class="text-[#100A55] opacity-40 font-satoshiMedium text-text12">
                                                Hasta 30% de descuento programa...
                                            </p>
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <a href="{{route('detalle')}}">
                                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                                Cond. Las Brisas
                                                </h2>
                                            </a>
                                            <p class="font-satoshiRegular text-text12 text-[#000929] opacity-50">
                                                Av. Los Aires 634, Puenta Piedra, Lima, Perú
                                            </p>
                                            <p class="font-satoshiRegular text-text14 text-[#000929] opacity-50">
                                                Excelente oportunidad; Terreno de 1000 m2 con cerco
                                                perímetrico, ubicado...
                                            </p>
                                        </div>

                                        <div class="flex justify-between gap-5">
                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_3.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    3 Cuartos
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_4.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    2 Baños
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_5.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    5x7m<sup>2</sup>
                                                </p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex gap-2 items-center justify-start border-t border-[#100A55] border-opacity-15 pt-5">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset('images/img/image_3.png') }}" alt=""
                                                    class="rounded-full" />
                                            </div>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                Carlos Soria
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                |
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                Dueño
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex flex-col rounded-xl bg-white">
                                    <div class="w-full flex justify-center items-center relative">
                                        <img src="{{ asset('images/img/image_10.png') }}" alt=""
                                            class="rounded-t-lg w-full" />
                                        <div
                                            class="flex gap-2 items-center justify-center absolute top-[10%] right-[5%] bg-[#2E609D] text-white font-satoshiBold text-text12 px-5 py-3 rounded-full">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset('images/svg/imagen_6.svg') }}" alt="" />
                                            </div>
                                            <p>Popular</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-col gap-5 p-6">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex gap-2 items-center">
                                                <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                                    Desde
                                                </p>
                                                <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                                    S/250,000.00
                                                </p>
                                            </div>

                                            <p class="text-[#100A55] opacity-40 font-satoshiMedium text-text12">
                                                Hasta 30% de descuento programa...
                                            </p>
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <a href="{{route('detalle')}}">
                                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                                Cond. Las Brisas
                                                </h2>
                                            </a>
                                            <p class="font-satoshiRegular text-text12 text-[#000929] opacity-50">
                                                Av. Los Aires 634, Puenta Piedra, Lima, Perú
                                            </p>
                                            <p class="font-satoshiRegular text-text14 text-[#000929] opacity-50">
                                                Excelente oportunidad; Terreno de 1000 m2 con cerco
                                                perímetrico, ubicado...
                                            </p>
                                        </div>

                                        <div class="flex justify-between gap-5">
                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_3.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    3 Cuartos
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_4.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    2 Baños
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_5.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    5x7m<sup>2</sup>
                                                </p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex gap-2 items-center justify-start border-t border-[#100A55] border-opacity-15 pt-5">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset('images/img/image_3.png') }}" alt=""
                                                    class="rounded-full" />
                                            </div>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                Carlos Soria
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                |
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                Dueño
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                {{-- comprar desktop  --}}
                <div class="py-10 hidden md:grid md:grid-cols-2 xl:grid-cols-3 md:gap-5">

                    @foreach ($inmuebles as $item)
                        @if ($item->tipo_propiedad == 'comprar')
                            @if ($item->destacar == 1)
                                <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up"
                                    data-aos-duration="150">
                                    <div class="w-full flex justify-center items-center relative">
                                        <img src="{{ asset($item->imagen) }}" alt=""
                                            class="rounded-t-lg w-full" />
                                        <div
                                            class="flex gap-2 items-center justify-center absolute top-[10%] right-[5%] bg-[#2E609D] text-white font-satoshiBold text-text12 px-5 py-3 rounded-full">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset('images/svg/imagen_6.svg') }}" alt="" />
                                            </div>
                                            <p>Popular</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-col gap-5 p-6">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex gap-2 items-center">
                                                <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                                    Desde
                                                </p>
                                                <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                                    {{-- S/250,000.00 --}} S/{{ $item->precio }}
                                                </p>
                                            </div>


                                            <p class="text-[#100A55] opacity-40 font-satoshiMedium text-text12">
                                                Hasta 30% de descuento programa...
                                            </p>
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <a href="{{ route('detalle', $item->id) }}">
                                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                                    {{-- Cond. Las Brisas --}} {{ $item->producto }}
                                                </h2>
                                            </a>
                                            <p class="font-satoshiRegular text-text12 text-[#000929] opacity-50">
                                                {{-- Av. Los Aires 634, Puenta Piedra, Lima, Perú --}}
                                                {{ $item->address }}, {{ $item->inside }} - {{ $item->district }},
                                                {{ $item->country }}
                                            </p>
                                            <p class="font-satoshiRegular text-text14 text-[#000929] opacity-50">
                                                {{-- Excelente oportunidad; Terreno de 1000 m2 con cerco
                            perímetrico, ubicado... --}} {{ $item->extract }}
                                            </p>
                                        </div>

                                        <div class="flex justify-between gap-5">
                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_3.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    {{-- 3 Cuartos --}} {{ $item->cuartos }} Cuartos
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_4.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    {{-- 2 Baños --}} {{ $item->banios }} Baños
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_5.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    {{ $item->area }}m<sup>2</sup>
                                                </p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex gap-2 items-center justify-start border-t border-[#100A55] border-opacity-15 pt-5">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset($item->imagen_propietario) }}" alt=""
                                                    class="rounded-full" />
                                            </div>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                {{ $item->propietario }}
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                |
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                {{ $item->tipo_propietario }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up"
                                    data-aos-duration="150">
                                    <div class="w-full flex justify-center items-center relative">
                                        <img src="{{ asset($item->imagen) }}" alt=""
                                            class="rounded-t-lg w-full" />

                                    </div>

                                    <div class="flex flex-col gap-5 p-6">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex gap-2 items-center">
                                                <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                                    Desde
                                                </p>
                                                <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                                    {{-- S/250,000.00 --}} S/{{ $item->precio }}
                                                </p>
                                            </div>


                                            <p class="text-[#100A55] opacity-40 font-satoshiMedium text-text12">
                                                Hasta 30% de descuento programa...
                                            </p>
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <a href="{{ route('detalle', $item->id) }}">
                                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                                    {{-- Cond. Las Brisas --}} {{ $item->producto }}
                                                </h2>
                                            </a>
                                            <p class="font-satoshiRegular text-text12 text-[#000929] opacity-50">
                                                {{-- Av. Los Aires 634, Puenta Piedra, Lima, Perú --}}
                                                {{ $item->address }}, {{ $item->inside }} - {{ $item->district }},
                                                {{ $item->country }}
                                            </p>
                                            <p class="font-satoshiRegular text-text14 text-[#000929] opacity-50">
                                                {{-- Excelente oportunidad; Terreno de 1000 m2 con cerco
                            perímetrico, ubicado... --}} {{ $item->extract }}
                                            </p>
                                        </div>

                                        <div class="flex justify-between gap-5">
                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_3.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    {{-- 3 Cuartos --}} {{ $item->cuartos }} Cuartos
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_4.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    {{-- 2 Baños --}} {{ $item->banios }} Baños
                                                </p>
                                            </div>

                                            <div class="flex gap-3">
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/imagen_5.svg') }}" alt="" />
                                                </div>
                                                <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                    {{ $item->area }}m<sup>2</sup>
                                                </p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex gap-2 items-center justify-start border-t border-[#100A55] border-opacity-15 pt-5">
                                            <div class="flex justify-start items-center">
                                                <img src="{{ asset($item->imagen_propietario) }}" alt=""
                                                    class="rounded-full" />
                                            </div>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                {{ $item->propietario }}
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                |
                                            </p>
                                            <p class="font-satoshiMedium text-text14 text-[#000929] opacity-50">
                                                {{ $item->tipo_propietario }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>
        </section>

        <section class="bg-[#2E609D]">
            <div class="grid  grid-cols-1 md:grid-cols-2">
                <div class="flex flex-col gap-10 md:gap-16 py-16">
                    <div class="flex flex-col gap-2 w-11/12 mx-auto" data-aos="fade-up" data-aos-duration="150">
                        <h3 class="text-[#FFFFFF] font-satoshiBold text-text40 text-left leading-tight">
                            Únete a nuestra comunidad
                        </h3>
                        <p class="text-[#FFFFFF] font-satoshiRegular text-text16 text-left">
                            Mantente al día con las últimas noticias, consejos y tendencias sobre sector inmobiliario.
                            ¡Inscríbete ahora y no te pierdas ninguna actualización!
                        </p>
                    </div>
                    <div class="flex flex-col gap-5">
                        <form action="" id="formInscripcion" class=" w-11/12 mx-auto">
                            @csrf
                            <div class="bg-[#FFFFFF] flex flex-row justify-between px-3 md:px-5 py-5 items-center">
                                <input type="email" name="email"
                                    class="appearance-none font-satoshiMedium text-[#000929] w-full h-full border-none outline-none focus:outline-none focus:ring-0 transition-all opacity-45"
                                    placeholder="Introduce tu correo electrónico" />
                                <div class="flex justify-end items-center">
                                    
                                    <button type="submit"
                                        class="bg-[#2E609D] rounded-lg font-satoshiBold text-text16 text-white px-5 md:px-10 py-3 text-center">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>

                        <p data-aos="fade-up" data-aos-duration="150"
                            class="text-[#FFFFFF] text-text14 font-satoshiRegular text-left w-11/12 mx-auto">
                            Únase a
                            <span class="text-[#FFFFFF] font-satoshiBold">10,000+</span>
                            propietarios más en nuestra comunidad inmobiliaria.
                        </p>
                    </div>
                </div>

                <div class="flex justify-end items-end">
                    <img src="{{ asset('images/img/image_14.png') }}" alt="inmobiliaria"
                        class="hidden md:block w-full object-cover">
                    <img src="{{ asset('images/img/image_15.png') }}" alt="inmobiliaria"
                        class="block md:hidden w-full object-cover">
                </div>
            </div>
        </section>


        <section class="bg-[#F7F7FD]">
            <div class="flex flex-col gap-10 items-center w-11/12 mx-auto pt-10 md:pt-20 pb-20">
                <div class="flex flex-col gap-10" data-aos="fade-up" data-aos-duration="150">
                    <div class="flex flex-col gap-3 items-center">
                        <h2 class="text-[#000929] font-satoshiBold text-text40 text-center w-full md:w-[544px]">
                            Testimonios <span class="text-[#2E609D]">Reales</span>
                        </h2>
                        <p
                            class="text-[#000929] text-text16 font-satoshiRegular opacity-70 text-center w-full md:w-[400px]">
                            Vea lo que nuestros administradores de propiedades, propietarios
                            e inquilinos tienen que decir
                        </p>
                    </div>
                    <p
                        class="text-[##000929] font-satoshiMedium text-[20px] md:text-[27px] text-center w-full md:w-[736px]">
                        “La plataforma de Dimensión Líder es a la que acudo casi a diario
                        para comprar una segunda casa y un condominio para vacaciones, o
                        simplemente para buscar casas de mis sueños en nuevas áreas.
                        ¡Gracias por divertirte comprando casas y analizando
                        comparativamente, Estatery!
                    </p>
                </div>

                <p class="text-[#2E609D] text-text16 font-jakarta font-extrabold">
                    Alejandra Neyra,
                    <span class="text-[#6C727F] font-normal">Inquilino</span>
                </p>

                <div class="flex justify-center items-center gap-10">
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/img/image_12.png') }}" alt="" class="rounded-full" />
                    </div>
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/img/image_12.png') }}" alt="" class="rounded-full" />
                    </div>
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/img/image_12.png') }}" alt="" class="rounded-full" />
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#FAFAFA] lg:bg-white">
            <div class="flex flex-col lg:flex-row pt-10 w-11/12 mx-auto gap-24">
                <div class="bg-[#FAF9FE] pt-10 basis-2/6">
                    <div class="flex flex-col gap-5 w-11/12 mx-auto md:px-5" data-aos="fade-up" data-aos-duration="150">
                        <h3 class="font-satoshiBold text-text32 text-[#100A55] leading-tight">
                            La nueva forma de vender propiedades
                        </h3>
                        <p class="font-medium text-text16 text-[#100A55]">
                            Encuentre el lugar de sus sueños para vivir con más de 10.000
                            propiedades enumeradas.
                        </p>
                        <div class="flex justify-end items-center">
                            <a href="#"
                                class="bg-[#2E609D] rounded-lg font-satoshiBold text-text16 text-white px-6 py-3 text-center">
                                Ver propiedades
                            </a>
                        </div>
                    </div>

                    <div>
                        <img src="{{ asset('images/img/image_13.png') }}" alt="" />
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 place-content-center gap-10 md:gap-20 basis-4/6">
                    <div class="flex flex-col gap-3" data-aos="fade-up" data-aos-duration="150">
                        <div class="flex justify-start items-center">
                            <img src="{{ asset('images/svg/imagen_7.svg') }}" alt=""
                                class="w-[56px] h-[56px]" />
                        </div>
                        <h2 class="text-[#000929] font-jakarta font-bold text-text24">
                            Ofrecemos Cartera de Clientes
                        </h2>
                        <p class="text-[#4D5461] font-jakarta font-normal text-text16">
                            Aenean interdum, ipsum dignissim facilisis viverra, velit nibh
                            iaculis est, non aliquam. Cras eleifend,
                        </p>
                    </div>

                    <div class="flex flex-col gap-3" data-aos="fade-up" data-aos-duration="150">
                        <div class="flex justify-start items-center">
                            <img src="{{ asset('images/svg/imagen_8.svg') }}" alt=""
                                class="w-[56px] h-[56px]" />
                        </div>
                        <h2 class="text-[#000929] font-jakarta font-bold text-text24">
                            Precios redondos
                        </h2>
                        <p class="text-[#4D5461] font-jakarta font-normal text-text16">
                            Aenean interdum, ipsum dignissim facilisis viverra, velit nibh
                            iaculis est, non aliquam. Cras eleifend,
                        </p>
                    </div>

                    <div class="flex flex-col gap-3" data-aos="fade-up" data-aos-duration="150">
                        <div class="flex justify-start items-center">
                            <img src="{{ asset('images/svg/imagen_9.svg') }}" alt=""
                                class="w-[56px] h-[56px]" />
                        </div>
                        <h2 class="text-[#000929] font-jakarta font-bold text-text24">
                            Bajas comisiones
                        </h2>
                        <p class="text-[#4D5461] font-jakarta font-normal text-text16">
                            Aenean interdum, ipsum dignissim facilisis viverra, velit nibh
                            iaculis est, non aliquam. Cras eleifend,
                        </p>
                    </div>

                    <div class="flex flex-col gap-3" data-aos="fade-up" data-aos-duration="150">
                        <div class="flex justify-start items-center">
                            <img src="{{ asset('images/svg/imagen_10.svg') }}" alt=""
                                class="w-[56px] h-[56px]" />
                        </div>
                        <h2 class="text-[#000929] font-jakarta font-bold text-text24">
                            Los mejores lugares
                        </h2>
                        <p class="text-[#4D5461] font-jakarta font-normal text-text16">
                            Aenean interdum, ipsum dignissim facilisis viverra, velit nibh
                            iaculis est, non aliquam. Cras eleifend,
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#FAFAFA] lg:bg-white pt-20">
            <div class="bg-[#F7F7FD] flex flex-col gap-10 md:gap-16 py-16">
                <div class="flex flex-col gap-2 w-11/12 mx-auto" data-aos="fade-up" data-aos-duration="150">
                    <h3 class="text-[#000929] font-satoshiBold text-text40 text-center">
                        ¿Es usted <span class="text-[#2E609D]">propitario?</span>
                    </h3>
                    <p class="text-[#000929] font-satoshiRegular text-text16 opacity-50 text-center">
                        Descubra formas de aumentar el valor de su casa y cotizar en la
                        lista. No es Spam.
                    </p>
                </div>
                <div class="flex flex-col gap-5">
                    <form action="" id="contactoFormulario" class="md:w-[630px] w-11/12 mx-auto">
                        <div class="bg-[#FFFFFF] flex flex-row justify-between px-3 md:px-5 py-5 items-center">
                            <input type="text"
                                class="appearance-none font-satoshiMedium text-[#000929] w-full h-full border-none outline-none focus:outline-none focus:ring-0"
                                placeholder="Introduce tu correo electrónico" />
                            <div class="flex justify-end items-center">
                                <a href="#"
                                    class="bg-[#2E609D] rounded-lg font-satoshiBold text-text16 text-white px-5 md:px-10 py-3 text-center">
                                    Enviar
                                </a>
                            </div>
                        </div>
                    </form>

                    <p data-aos="fade-up" data-aos-duration="150"
                        class="text-[#9EA3AE] text-text14 font-satoshiRegular text-center w-11/12 mx-auto">
                        Únase a
                        <span class="text-[#2E609D] font-satoshiBold">10,000+</span>
                        propietarios más en nuestra comunidad inmobiliaria.
                    </p>
                </div>
            </div>
        </section>

    </main>


@section('scripts_importados')

    <script>
        $('#formInscripcion').submit(function(e) {
            console.log('precionando para ')

            e.preventDefault()
            let data = $('#inscribirseMailDesk').serialize()
            console.log(data)
            Swal.fire({

                title: 'Procesando información',
                html: `Registrando... 
          <div class="max-w-2xl mx-auto overflow-hidden flex justify-center items-center mt-4">
              <div role="status">
              <svg aria-hidden="true" class="w-8 h-8 text-blue-600 animate-spin dark:text-gray-600 " viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
              </svg>

              </div>
          </div>
          `,
                allowOutsideClick: false,
                onBeforeOpen: () => {
                    Swal.showLoading();
                }
            });

            $.ajax({
                url: '{{ route('guardarUserNewsLetter') }}',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    Swal.close();
                    Swal.fire({
                        title: response.message,
                        icon: "success",
                    });
                },
                error: function(response) {
                    let message = ''

                    let isDuplicado = response.responseJSON.message.includes('Duplicate entry')
                    console.log(isDuplicado)

                    if (isDuplicado) {
                        message =
                            'El correo que ha ingresado ya existe. Utilice  otra direccion de correo'
                    } else {
                        message = response.responseJSON.message
                    }
                    Swal.close();
                    Swal.fire({
                        title: message,
                        icon: "error",
                    });
                }
            });

        })
    </script>


    <script>
        var slider = new Swiper(".propiedades", {
            slidesPerView: 1,
            spaceBetween: 50,
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            initialSlide: 0,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
            },
        });
    </script>

    <script>
        function showTab(tabId) {
            // Hide all tab content
            const tabContents = document.querySelectorAll(".tab-content");
            tabContents.forEach((content) => {
                content.classList.add("hidden");
            });

            // Show the selected tab content
            const selectedTab = document.getElementById(tabId);
            if (selectedTab) {
                selectedTab.classList.remove("hidden");
            }

            // Remove the 'active' class from all tab buttons
            const tabButtons = document.querySelectorAll(".tab-button");
            tabButtons.forEach((button) => {
                button.classList.remove("active");
            });

            // Add the 'active' class to the clicked tab button
            const clickedButton = document.querySelector(
                `[onclick="showTab('${tabId}')"]`
            );
            if (clickedButton) {
                clickedButton.classList.add("active");
            }
        }

        // Initialize the first tab
        showTab("tab1");
    </script>
@stop

@stop

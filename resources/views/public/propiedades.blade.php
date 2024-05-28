@extends('components.public.matrix')

@section('css_importados')
    <style>
        .bg_color {
            background-color: #2E609D;
        }

        .tab-button.active {
            border-color: #2e609d;
            color: #2e609d;
        }

        .bg_inscribir {
            background-color: #FAFAFA;
            color: #000929;
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
    <main class="bg-[#FAFAFA]">
        <section class="bg-[#F7F7FD] pt-32">
            <div class="z-[100] w-11/12 mx-auto flex flex-col gap-10 relative">
                <div class="order-1 md:order-2 relative md:absolute md:-bottom-[18%] z-[500] w-full md:max-w-[750px]">
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
                        class="py-8 px-4 tab-content bg-white flex justify-between items-center gap-5 rounded-b-lg md:rounded-tr-lg max-w-[750px]">
                        <div class="w-full ">
                            <div class="relative w-full text-left">
                                <div class="group">
                                    <button type="button"
                                        class="inline-flex items-center w-full text-text18 text-[#000929] focus:outline-none font-satoshiBold justify-between gap-5">
                                        <span>Ubicación</span>
                                        <svg width="13" height="13" viewBox="0 0 8 5" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="group-hover:rotate-180 md:duration-300">
                                            <path d="M0.666016 0.666748L3.99989 3.72008L7.33268 0.666748" stroke="#000929"
                                                stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
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
                                            <path d="M0.666016 0.666748L3.99989 3.72008L7.33268 0.666748" stroke="#000929"
                                                stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
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
                    <div id="tab2"
                        class="py-8 p-4 tab-content bg-white flex justify-between items-center gap-5 rounded-b-lg md:rounded-tr-lg max-w-[750px]">
                        <div class="w-full ">
                            <div class="relative w-full text-left">
                                <div class="group">
                                    <button type="button"
                                        class="inline-flex items-center w-full text-text18 text-[#000929] focus:outline-none font-satoshiBold justify-between gap-5">
                                        <span>Ubicación</span>
                                        <svg width="13" height="13" viewBox="0 0 8 5" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="group-hover:rotate-180 md:duration-300">
                                            <path d="M0.666016 0.666748L3.99989 3.72008L7.33268 0.666748" stroke="#000929"
                                                stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
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
                                            <path d="M0.666016 0.666748L3.99989 3.72008L7.33268 0.666748" stroke="#000929"
                                                stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
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
                        class="py-8 p-4 tab-content bg-white flex justify-between items-center gap-5 rounded-b-lg md:rounded-tr-lg max-w-[750px]">
                        <div class="w-full ">
                            <div class="relative w-full text-left">
                                <div class="group">
                                    <button type="button"
                                        class="inline-flex items-center w-full text-text18 text-[#000929] focus:outline-none font-satoshiBold justify-between gap-5">
                                        <span>Ubicación</span>
                                        <svg width="13" height="13" viewBox="0 0 8 5" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="group-hover:rotate-180 md:duration-300">
                                            <path d="M0.666016 0.666748L3.99989 3.72008L7.33268 0.666748" stroke="#000929"
                                                stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
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
                                            <path d="M0.666016 0.666748L3.99989 3.72008L7.33268 0.666748" stroke="#000929"
                                                stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
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
                <div class="flex order-2 md:order-1">
                    <div class="hidden md:flex flex-col gap-5 md:basis-1/2  justify-center md:pb-32" data-aos="fade-up"
                        data-aos-duration="150">
                        <h2 class="text-[#000929] font-satoshiBold text-text52 leading-tight">Compra, alquila o vende tu
                            propiedad fácilmente</h2>
                        <p class="text-[#000929] font-satoshiRegular text-text20 text-opacity-50">Una gran plataforma para
                            comprar, vender o incluso alquilar tus propiedades sin comisiones.</p>
                    </div>

                    <div class="flex justify-center items-center md:basis-1/2 w-full md:w-11/12 mx-auto ">
                        <img src="{{ asset('images/img/image_16.png') }}" alt="inmobiliaria"
                            class="w-full hidden md:block">
                        <img src="{{ asset('images/img/image_30.png') }}" alt="inmobiliaria"
                            class="w-full block md:hidden">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="w-11/12 mx-auto pt-20 md:pt-44 pb-20">
                <div class="pb-10 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 md:gap-5">

                    @foreach ($inmuebles as $item)
                        @foreach ($item->tags as $tag)
                            @if ($tag->name == 'Popular')
                                <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up"
                                    data-aos-duration="150">

                                    <div class="w-full flex justify-center items-center relative">
                                        <img src="{{ asset($item->imagen) }}" alt=""
                                            class="rounded-t-2xl w-full" />
                                    </div>

                                    <div
                                        class="flex gap-2 items-center justify-center absolute top-[5%] right-[5%] bg-[#2E609D] text-white font-satoshiBold text-text12 px-5 py-3 rounded-full">
                                        <div class="flex justify-start items-center">
                                            <img src="{{ asset('images/svg/imagen_6.svg') }}" alt="" />
                                        </div>
                                        <p>{{ $tag->name }} </p>
                                    </div>

                                    <div class="flex flex-col gap-5 p-6">
                                        <div class="flex flex-col gap-1">
                                            <div class="flex gap-1 items-center">
                                                <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                                    S/{{ $item->precio }}
                                                </p>
                                                @if ($item->frecuencia)
                                                    <p
                                                        class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                                        / {{ $item->frecuencia }}
                                                    </p>
                                                @endif

                                            </div>

                                            <p class="text-[#13BEBA] opacity-40 font-satoshiMedium text-text12">
                                                Condomínio: R$ 150,00
                                            </p>
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <a href="{{ route('detalle', $item->id) }}">
                                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                                    {{ $item->producto }}
                                                </h2>
                                            </a>
                                            <p class="font-satoshiRegular text-text12 text-[#000929] opacity-50">
                                                {{ $item->address }}, {{$item->district_description}},
                                                {{$item->province_description}},
                                                {{$item->department_description}}, Perú
                                            </p>
                                            <p class="font-satoshiRegular text-text16 text-[#000929] opacity-50">
                                                {{ $item->extract }}
                                            </p>
                                        </div>

                                        <div class="flex justify-between gap-5 items-center">
                                            @if ($item->cuartos != 0)
                                                <div class="flex gap-3">
                                                    <div class="flex justify-center items-center">
                                                        <img src="{{ asset('images/svg/imagen_3.svg') }}"
                                                            alt="" />
                                                    </div>
                                                    <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                        {{ $item->cuartos }} Cuartos
                                                    </p>
                                                </div>
                                            @endif

                                            @if ($item->banios != 0)
                                                <div class="flex gap-3">
                                                    <div class="flex justify-center items-center">
                                                        <img src="{{ asset('images/svg/imagen_4.svg') }}"
                                                            alt="" />
                                                    </div>
                                                    <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                        {{ $item->banios }} Baños
                                                    </p>
                                                </div>
                                            @endif

                                            @if ($item->area)
                                                <div class="flex gap-3">
                                                    <div class="flex justify-center items-center">
                                                        <img src="{{ asset('images/svg/imagen_5.svg') }}"
                                                            alt="" />
                                                    </div>
                                                    <p class="font-satoshiMedium text-[#000929] opacity-70 text-text14">
                                                        {{ $item->area }}
                                                    </p>
                                                </div>
                                            @endif
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
                        @endforeach
                    @endforeach

                    {{--  @foreach ($inmuebles as $item)
               
                        @if ($item->destacar == 1)
                            <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up" data-aos-duration="150">
                                <div class="w-full flex justify-center items-center relative">
                                    <img src="{{ asset($item->imagen) }}" alt="" class="rounded-t-2xl w-full" />
                                    @foreach ($item->tags as $tag)
                                        @if ($tag->name == 'Popular')
                                            <div
                                                class="flex gap-2 items-center justify-center absolute top-[10%] right-[5%] bg-[#2E609D] text-white font-satoshiBold text-text12 px-5 py-3 rounded-full">
                                                <div class="flex justify-start items-center">
                                                    <img src="{{ asset('images/svg/imagen_6.svg') }}" alt="" />
                                                </div>
                                                <p>{{ $tag->name }} </p>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                                <div class="flex flex-col gap-5 p-6">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex gap-1 items-center">
                                            <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                                S/{{ $item->precio }}
                                            </p>
                                            <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                                /mensual
                                            </p>
                                        </div>

                                        <p class="text-[#13BEBA] opacity-40 font-satoshiMedium text-text12">
                                            Condomínio: R$ 150,00
                                        </p>
                                    </div>

                                    <div class="flex flex-col gap-2">
                                        <a href="{{ route('detalle', $item->id) }}">
                                            <h2 class="text-[#000929] font-satoshiBold text-text32">
                                                 {{ $item->producto }}
                                            </h2>
                                        </a>
                                        <p class="font-satoshiRegular text-text12 text-[#000929] opacity-50">
                                            {{ $item->direction }}
                                        </p>
                                        <p class="font-satoshiRegular text-text14 text-[#000929] opacity-50">
                                            {{ $item->extract }}
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
                            <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up" data-aos-duration="150">
                                <div class="w-full flex justify-center items-center relative">
                                    <img src="{{ asset($item->imagen) }}" alt="" class="rounded-t-lg w-full" />
                                </div>

                                <div class="flex flex-col gap-5 p-6">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex gap-1 items-center">
                                            <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                                S/{{ $item->precio }}
                                            </p>
                                            <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                                /mensual
                                            </p>
                                        </div>

                                        <p class="text-[#13BEBA] opacity-40 font-satoshiMedium text-text12">
                                            Condomínio: R$ 150,00
                                        </p>
                                    </div>

                                    <div class="flex flex-col gap-2">
                                        <a href="{{ route('detalle', $item->id) }}">
                                            <h2 class="text-[#000929] font-satoshiBold text-text32">
                                            {{ $item->producto }}
                                            </h2>
                                        </a>
                                        <p class="font-satoshiRegular text-text12 text-[#000929] opacity-50">
                                            {{ $item->direction }}
                                        </p>
                                        <p class="font-satoshiRegular text-text14 text-[#000929] opacity-50">
                                            {{ $item->extract }}
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
                        @endif
                    @endforeach --}}

                    {{-- <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up" data-aos-duration="150">
                        <div class="w-full flex justify-center items-center relative">
                            <img src="{{ asset('images/img/image_4.png') }}" alt="" class="rounded-t-lg w-full" />
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
                                        S/2,095
                                    </p>
                                    <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                        /mensual
                                    </p>
                                </div>

                                <p class="text-[#13BEBA] opacity-40 font-satoshiMedium text-text12">
                                    Condomínio: R$ 150,00
                                </p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                    Cond. Las Brisas
                                </h2>
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

                    <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up" data-aos-duration="150">
                        <div class="w-full flex justify-center items-center relative">
                            <img src="{{ asset('images/img/image_5.png') }}" alt=""
                                class="rounded-t-lg w-full" />
                            <div
                                class="flex gap-2 items-center justify-center absolute top-[10%] right-[5%] bg-[#2E609D] text-white font-satoshiBold text-text12 px-5 py-3 rounded-full">
                                <div class="flex justify-start items-center">
                                    <img src="./images/svg/imagen_6.svg" alt="" />
                                </div>
                                <p>Popular</p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-5 p-6">
                            <div class="flex flex-col gap-1">
                                <div class="flex gap-1 items-center">
                                    <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                        S/2,095
                                    </p>
                                    <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                        /mensual
                                    </p>
                                </div>

                                <p class="text-[#13BEBA] opacity-40 font-satoshiMedium text-text12">
                                    Condomínio: R$ 150,00
                                </p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                    Cond. Las Brisas
                                </h2>
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

                    <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up" data-aos-duration="150">
                        <div class="w-full flex justify-center items-center relative">
                            <img src="{{ asset('images/img/image_6.png') }}" alt=""
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
                                <div class="flex gap-1 items-center">
                                    <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                        S/2,095
                                    </p>
                                    <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                        /mensual
                                    </p>
                                </div>

                                <p class="text-[#13BEBA] opacity-40 font-satoshiMedium text-text12">
                                    Condomínio: R$ 150,00
                                </p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                    Cond. Las Brisas
                                </h2>
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

                    <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up" data-aos-duration="150">
                        <div class="w-full flex justify-center items-center relative">
                            <img src="{{ asset('images/img/image_7.png') }}" alt=""
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
                                <div class="flex gap-1 items-center">
                                    <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                        S/2,095
                                    </p>
                                    <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                        /mensual
                                    </p>
                                </div>

                                <p class="text-[#13BEBA] opacity-40 font-satoshiMedium text-text12">
                                    Condomínio: R$ 150,00
                                </p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                    Cond. Las Brisas
                                </h2>
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

                    <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up" data-aos-duration="150">
                        <div class="w-full flex justify-center items-center relative">
                            <img src="{{ asset('images/img/image_8.png') }}" alt=""
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
                                <div class="flex gap-1 items-center">
                                    <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                        S/2,095
                                    </p>
                                    <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                        /mensual
                                    </p>
                                </div>

                                <p class="text-[#13BEBA] opacity-40 font-satoshiMedium text-text12">
                                    Condomínio: R$ 150,00
                                </p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                    Cond. Las Brisas
                                </h2>
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

                    <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up" data-aos-duration="150">
                        <div class="w-full flex justify-center items-center relative">
                            <img src="{{ asset('images/img/image_9.png') }}" alt=""
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
                                <div class="flex gap-1 items-center">
                                    <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                        S/2,095
                                    </p>
                                    <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                        /mensual
                                    </p>
                                </div>

                                <p class="text-[#13BEBA] opacity-40 font-satoshiMedium text-text12">
                                    Condomínio: R$ 150,00
                                </p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                    Cond. Las Brisas
                                </h2>
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

                    <div class="hidden md:flex flex-col rounded-xl bg-white" data-aos="fade-up" data-aos-duration="150">
                        <div class="w-full flex justify-center items-center relative">
                            <img src="{{ asset('images/img/image_7.png') }}" alt=""
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
                                <div class="flex gap-1 items-center">
                                    <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                        S/2,095
                                    </p>
                                    <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                        /mensual
                                    </p>
                                </div>

                                <p class="text-[#13BEBA] opacity-40 font-satoshiMedium text-text12">
                                    Condomínio: R$ 150,00
                                </p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                    Cond. Las Brisas
                                </h2>
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

                    <div class="hidden md:flex flex-col rounded-xl bg-white" data-aos="fade-up" data-aos-duration="150">
                        <div class="w-full flex justify-center items-center relative">
                            <img src="{{ asset('images/img/image_7.png') }}" alt=""
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
                                <div class="flex gap-1 items-center">
                                    <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                        S/2,095
                                    </p>
                                    <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                        /mensual
                                    </p>
                                </div>

                                <p class="text-[#13BEBA] opacity-40 font-satoshiMedium text-text12">
                                    Condomínio: R$ 150,00
                                </p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                    Cond. Las Brisas
                                </h2>
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

                    <div class="hidden md:flex flex-col rounded-xl bg-white" data-aos="fade-up" data-aos-duration="150">
                        <div class="w-full flex justify-center items-center relative">
                            <img src="{{ asset('images/img/image_7.png') }}" alt=""
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
                                <div class="flex gap-1 items-center">
                                    <p class="text-[#2E609D] font-jakarta font-extrabold text-text24">
                                        S/2,095
                                    </p>
                                    <p class="font-jakarta font-medium text-text16 text-[#000929] opacity-50">
                                        /mensual
                                    </p>
                                </div>

                                <p class="text-[#13BEBA] opacity-40 font-satoshiMedium text-text12">
                                    Condomínio: R$ 150,00
                                </p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#000929] font-satoshiBold text-text32">
                                    Cond. Las Brisas
                                </h2>
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
                    </div> --}}
                </div>
                {{-- revisar este boton --}}
                <div class="flex justify-center items-center">
                    <a href="#"
                        class="border-[#2E609D] border rounded-lg font-satoshiBold text-text18 text-[#2E609D] px-5 md:px-10 py-3 text-center">Ver
                        mas propiedades</a>
                </div>
                {{-- revisar este boton --}}
            </div>
        </section>

        <section class="bg-[#FAFAFA] lg:bg-white">
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
                    <form action="" id="propFormulario" class="md:w-[630px] w-11/12 mx-auto">
                        @csrf
                        <div class="bg-[#FFFFFF] flex flex-row justify-between px-3 md:px-5 py-5 items-center">
                            <input type="email" name="email" id="email"
                                class="appearance-none font-satoshiMedium text-[#000929] w-full h-full border-none outline-none focus:outline-none focus:ring-0"
                                placeholder="Introduce tu correo electrónico" />
                            <input type="text" name="tipo" value="propiedad" hidden />

                            <div class="flex justify-end items-center">

                                <button type="submit"
                                    class="bg-[#2E609D] rounded-lg font-satoshiBold text-text16 text-white px-5 md:px-10 py-3 text-center">
                                    Enviar
                                </button>
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
        function validarEmail(value) {
            const regex =
                /^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/

            if (!regex.test(value)) {
                alerta("Por favor, asegúrate de ingresar una dirección de correo electrónico válida");
                return false;
            }
            return true;
        }


        $('#propFormulario').submit(function(e) {

            e.preventDefault();

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


            if (!validarEmail($('#email').val())) {
                return;
            };
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
                    $('#propFormulario')[0].reset();
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

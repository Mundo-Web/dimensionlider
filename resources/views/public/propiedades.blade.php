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
    </style>
@stop


@section('content')
    <main class="bg-[#FAFAFA]">
        <section class="bg-[#F7F7FD] pt-32">
            <div class="z-[100] w-11/12 mx-auto flex flex-col gap-10 relative">
                <div class="order-1 md:order-2 relative md:absolute md:-bottom-[18%]">
                    <div class="bg-white rounded-t-lg inline-block w-[343px] md:max-w-w-[388px]">
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
    
                    <div id="tab1"
                        class="py-8 px-4 tab-content bg-white flex justify-between gap-5 rounded-b-lg md:rounded-tr-lg max-w-[700px]">
                        <div class="w-full md:w-auto">
                            <p class="text-[#001619] font-satoshiMedium text-text16 hidden md:block">
                                Ubicación
                            </p>
                            <p class="text-text18 font-satoshiBold hidden md:block">
                                Puente Piedra, Lima, Perú
                            </p>
    
                            <form action="" class="w-full">
                                <input type="text" class="text-[#2E609D] block md:hidden py-3 bg-[#2E609D] bg-opacity-25 w-full rounded-lg placeholder:text-[#2E609D] font-satoshiMedium placeholder:font-satoshiMedium text-text18"
                                    placeholder="Ubicación de búsqueda" />
                            </form>
                        </div>
    
                        <div class="w-[0.5px] h-[50px] bg-[#E0DEF7] hidden md:block">
                        </div>
    
                        <div class="hidden md:block">
                            <p class="text-[#001619] font-satoshiMedium text-text16">
                                Categorías
                            </p>
                            <div class="relative inline-block text-left">
                                <div class="group">
                                    <button type="button"
                                        class="inline-flex items-center w-full text-text18 text-[#000929] focus:outline-none font-satoshiBold justify-between gap-5">
                                        <span>Departamento</span>
                                        <svg width="13" height="13" viewBox="0 0 8 5" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="group-hover:rotate-180 md:duration-300">
                                            <path d="M0.666016 0.666748L3.99989 3.72008L7.33268 0.666748" stroke="#000929"
                                                stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
    
                                    <div
                                        class="absolute left-0 w-full origin-top-left bg-white divide-y divide-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                                        <div class="py-1">
                                            <a href="#"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option
                                                1</a>
                                            <a href="#"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option
                                                2</a>
                                            <a href="#"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option
                                                3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="w-[0.5px] h-[50px] bg-[#E0DEF7] hidden md:block">
                        </div>
    
                        <div class="flex justify-center items-center">
                            <div class="flex flex-row-reverse 2md:flex-row justify-center items-center gap-5">
                                {{-- <div
                                            class="flex justify-center items-center border border-[#2E609D] p-4 rounded-lg cursor-pointer w-[48px] h-[48px] 2md:w-[50px] 2md:h-[50px]">
                                            <img src="{{ asset('images/svg/imagen_16.svg') }}" alt="filtro" />
                                        </div> --}}
                                <div class="flex justify-start items-center">
                                    <a href="{{ route('propiedades') }}"
                                        class="bg-[#2E609D] rounded-lg font-satoshiBold text-text16 text-white px-0 md:px-6 py-0 md:py-3 text-center h-full inline-block">
                                        <span class="hidden md:flex">Explorar propiedades</span>
                                        <div
                                            class="flex justify-center items-center p-4 md:hidden w-[48px] h-[48px] 2md:w-[50px] 2md:h-[50px]">
                                            <img src="{{ asset('images/svg/imagen_18.svg') }}" alt="busqueda" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="p-4 tab-content bg-white hidden rounded-b-lg md:rounded-tr-lg max-w-[865px]">
                        <h2 class="text-2xl font-semibold mb-2 text-blue-700">
                            Tab 2 Content
                        </h2>
                    </div>
                    <div id="tab3" class="p-4 tab-content bg-white hidden rounded-b-lg md:rounded-tr-lg max-w-[865px]">
                        <h2 class="text-2xl font-semibold mb-2 text-blue-700">
                            Tab 3 Content
                        </h2>
                    </div>
    
                </div>
                <div class="flex order-2 md:order-1">
                    <div class="hidden md:flex flex-col gap-5 md:basis-1/2  justify-center md:pb-32" data-aos="fade-up" data-aos-duration="150">
                        <h2 class="text-[#000929] font-satoshiBold text-text52 leading-tight">Compra, alquila o vende tu
                            propiedad fácilmente</h2>
                        <p class="text-[#000929] font-satoshiRegular text-text20 text-opacity-50">Una gran plataforma para
                            comprar, vender o incluso alquilar tus propiedades sin comisiones.</p>
                    </div>
    
                    <div class="flex justify-center items-center md:basis-1/2 w-full md:w-11/12 mx-auto ">
                        <img src="{{ asset('images/img/image_16.png') }}" alt="inmobiliaria" class="w-full hidden md:block">
                        <img src="{{ asset('images/img/image_30.png') }}" alt="inmobiliaria" class="w-full block md:hidden">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="w-11/12 mx-auto pt-20 md:pt-44 pb-20">
                <div class="pb-10 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 md:gap-5">
                    <div class="flex flex-col rounded-xl bg-white" data-aos="fade-up" data-aos-duration="150">
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
                    </div>
                </div>
                {{-- revisar este boton --}}
                <div class="flex justify-center items-center">
                    <a href="#" class="border-[#2E609D] border rounded-lg font-satoshiBold text-text18 text-[#2E609D] px-5 md:px-10 py-3 text-center">Ver mas propiedades</a>
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

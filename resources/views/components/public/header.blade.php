<style>
    .modal-destinos {
        position: fixed;
        top: 0px;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.6s 0.9s;
        --transform: translateY(-100vh);
        --transition: transform 0.8s;
        padding-top: 5rem;
        /* Moverlo verticalmente */
    }

    .modal__mostrar-destino {
        border-top-left-radius: 2rem;
        border-top-right-radius: 2rem;

        margin: auto;
        width: 90%;
        max-width: 800px;
        /* Ancho del modas */
        max-height: auto;
        /* altura del moda */
        background-color: #fff;
        border-bottom-left-radius: 2rem;
        border-bottom-right-radius: 2rem;
        place-items: center;
        grid-auto-columns: 100%;
        transform: var(--transform);
        transition: var(--transition);
    }

    .modal__mostrar-destino h2 {
        border-top-left-radius: 2rem;
        border-top-right-radius: 2rem;
    }

    .modal--show--destinos {
        opacity: 1;
        pointer-events: unset;
        transition: opacity 0.6s;
        --transform: translateY(0);
        --transition: transform 0.8s 0.8s;
    }

    .actividades_scroll::-webkit-scrollbar {
        width: 10px;
        background-color: #f1f1f1;
    }

    .actividades_scroll::-webkit-scrollbar-thumb {
        background-color: #c1c1c1;
        border-radius: 2rem;
    }

    .modal-destino {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #111111bd;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.6s 0.9s;
        --transform: translateY(-100vh);
        --transition: transform 0.8s;
        -webkit-transition: opacity 0.6s 0.9s;
        -moz-transition: opacity 0.6s 0.9s;
        -ms-transition: opacity 0.6s 0.9s;
        -o-transition: opacity 0.6s 0.9s;
    }

    .modal--show {
        opacity: 1;
        pointer-events: unset;
        transition: opacity 0.6s;
        --transform: translateY(0);
        --transition: transform 0.8s 0.8s;
    }

    .modal__mostrar-destino {
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
        margin: auto;
        width: 90%;
        max-width: 700px;
        max-height: 90%;
        background-color: #fff;

        padding: 20px;
        place-items: center;
        grid-auto-columns: 100%;
        transform: var(--transform);
        transition: var(--transition);

        border-bottom-left-radius: 1rem;
        border-bottom-right-radius: 1rem;
    }
</style>



<header class="z-[1000]">
    <div class="w-full mx-auto absolute right-0 left-0 bg_color z-[1000] px-4 lg:px-12 xl:px-16">
        <div x-data="{ open: false }"
            class="flex flex-col w-full mx-auto lg:items-center lg:justify-between lg:flex-row py-5 px-0 sm:px-4 md:px-5 lg:px-0 2xl:px-4"
            x-init="$watch('open', value => document.body.classList.toggle('overflow-hidden', value))">
            <div class="flex flex-row items-center justify-between z-[1000] lg:w-auto lg:mx-0 lg:pr-10">
                <a href="{{ route('index') }}"
                    class="text-lg font-satoshiBold text-white rounded-lg focus:outline-none focus:shadow-outline flex justify-start items-center gap-2"
                    :class="{ 'text-black': open, 'text-white': !open }">
                    <div>
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_5_2178)">
                                <path
                                    d="M25.333 11.6132L18.2224 6.08252C17.5984 5.59707 16.8303 5.3335 16.0397 5.3335C15.2491 5.3335 14.4811 5.59707 13.857 6.08252L6.74505 11.6132C6.31764 11.9456 5.97184 12.3712 5.73405 12.8577C5.49627 13.3441 5.37279 13.8784 5.37305 14.4199V24.0199C5.37305 24.7271 5.654 25.4054 6.1541 25.9055C6.65419 26.4056 7.33247 26.6865 8.03971 26.6865H24.0397C24.747 26.6865 25.4252 26.4056 25.9253 25.9055C26.4254 25.4054 26.7064 24.7271 26.7064 24.0199V14.4199C26.7064 13.3225 26.1997 12.2865 25.333 11.6132Z"
                                    fill="white" stroke="white" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M21.3346 20C18.388 21.7773 13.612 21.7773 10.668 20" stroke-width="3"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="stroke-strokeWithe lg:stroke-strokeAzul" />
                            </g>
                            <defs>
                                <clipPath id="clip0_5_2178">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <span class="text-white">Dimensión lider</span>
                </a>
                <button class="lg:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="#fff" viewBox="0 0 20 20" class="w-8 h-8">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{ 'flex fixed inset-0 bg-slate-800 pt-20': open, 'hidden bg-transparent pt-0': !open }"
                class="flex-col flex-grow pb-4 md:pb-0 hidden lg:flex lg:justify-between lg:flex-row gap-10 lg:gap-0 lg:items-center">
                <div class="flex flex-col lg:flex-row gap-5 lg:gap-10 w-11/12 lg:w-auto mx-auto lg:mx-0">
                    <a class="py-2 text-text16 text-white focus:outline-none focus:shadow-outline cursor-pointer {{ request()->routeIs('index') ? 'font-satoshiBold' : 'font-satoshiRegular' }}"
                        href="{{ route('index') }}">Inicio</a>
                    <a class="py-2 text-text16 text-white focus:outline-none focus:shadow-outline cursor-pointer 
                    {{ request()->routeIs('propiedades') ? 'font-satoshiBold' : 'font-satoshiRegular' }}"
                        href="{{ route('propiedades') }}">Propiedades</a>

                    <a class="py-2 text-text16 text-white focus:outline-none focus:shadow-outline cursor-pointer {{ request()->routeIs('nosotros') ? 'font-satoshiBold' : 'font-satoshiRegular' }}"
                        href="{{ route('nosotros') }}">Nosotros</a>

                    {{-- <a class="py-2 text-text16 font-satoshiRegular text-white focus:outline-none focus:shadow-outline cursor-pointer"
                        href="{{ route('blog', 0) }}">Blog</a> --}}
                    @if (count($blogs) > 0)
                        <a class="py-2 text-text16 text-white focus:outline-none focus:shadow-outline cursor-pointer {{ request()->routeIs('blog') ? 'font-satoshiBold' : 'font-satoshiRegular' }}"
                            href="{{ route('blog', 0) }}">Blog</a>
                    @endif

                    <a class="py-2 text-text16 text-white focus:outline-none focus:shadow-outline cursor-pointer {{ request()->routeIs('contacto') ? 'font-satoshiBold' : 'font-satoshiRegular' }}"
                        href="{{ route('contacto') }}">Contacto</a>
                </div>

                <div class="flex justify-start items-center gap-5 w-11/12 lg:w-auto mx-auto lg:mx-0">
                    {{-- <a href="{{ route('index') }}"
                        class="text-white border-2 border-white text-text16 font-satoshiBold py-2 px-5 rounded-lg">Iniciar</a> --}}
                    {{-- <a href="{{ route('index') }}"
                        class="text-white bg-[#2E609D] text-text16 font-satoshiBold py-3 px-8 rounded-lg bg_inscribir">Inscribirse</a> --}}

                    <a href=""
                        class="text-white bg-[#2E609D] text-text16 font-satoshiBold py-3 px-8 rounded-lg bg_inscribir mostrar-modal">Modal</a>
                </div>
            </nav>
        </div>
    </div>

    <div class="flex justify-end w-11/12 mx-auto z-[200] relative">
        <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20 text-center">
            <a target="_blank"
                href="https://api.whatsapp.com/send?phone={{ $generales->whatsapp }}&text={{ $generales->mensaje_whatsapp }}">
                <img src="{{ asset('images/svg/imagen_49.svg') }}" alt="whatsapp"
                    class="w-20 h-20 md:w-full md:h-full">
            </a>

        </div>
    </div>


    {{-- modal --}}

    <section class="modal-destino z-[10000]  md:pt-32">
        <div class="modal__mostrar-destino">
            <div>
                <div class="flex flex-col w-full my-5">

                    <div class="flex justify-end items-center">
                        <a href="#" class="modal__close">
                            <img src="{{ asset('images/img/image_37.png') }}" alt="close" />
                        </a>
                    </div>

                    <div class="flex flex-col justify-start items-start">
                        <h2 class="font-satoshiBold text-text32 md:text-text52 leading-none">
                            Anuncia tu <span class="text-[#2E609D]">Inmueble ahora</span>
                        </h2>

                        <p class="text-[#495560] text-text14 font-acehRegular">
                            Para anunciar su propiedad, introduzca sus datos
                        </p>
                    </div>
                </div>

                <div class="overflow-y-scroll h-[300px] md:h-[500px] actividades_scroll px-2">
                    <div>
                        <form action="" class="flex flex-col gap-4">
                            <div class="flex flex-col gap-5">
                                <div class="flex flex-col gap-1 flex-auto">
                                    <label for="titulo"
                                        class="font-satoshiRegular text-text14 text-[#000929]">Título</label>
                                    <input id="titulo" type="text" placeholder="Título"
                                        class="w-full bg-[#F7F7FD] border-[1px] focus:outline-none border-gray-200 rounded-xl py-2 text-text16 font-satoshiMedium placeholder:text-[#000929] placeholder:text-opacity-25 text-[#2E609D]" />
                                </div>
                            </div>

                            <div class="flex flex-col gap-5">
                                <div class="flex flex-col gap-1 flex-auto">
                                    <label for="extracto"
                                        class="font-satoshiRegular text-text14 text-[#000929]">Extracto</label>
                                    <input id="extracto" type="text" placeholder="Extracto"
                                        class="w-full bg-[#F7F7FD] border-[1px] focus:outline-none border-gray-200 rounded-xl py-2 text-text16 font-satoshiMedium placeholder:text-[#000929] placeholder:text-opacity-25 text-[#2E609D]" />
                                </div>
                            </div>

                            <div class="flex flex-col gap-5">
                                <div class="flex flex-col gap-1 flex-auto">
                                    <label for="description"
                                        class="font-satoshiRegular text-text14 text-[#000929]">Descripción</label>

                                    <textarea name="" id="" cols="30" rows="10"
                                        class="w-full bg-[#F7F7FD] border-[1px] focus:outline-none border-gray-200 rounded-xl py-2 text-text16 font-satoshiMedium placeholder:text-[#000929] placeholder:text-opacity-25 text-[#2E609D]"
                                        placeholder="Descripción ..."></textarea>

                                </div>
                            </div>

                            <div class="flex flex-col gap-5">
                                <div class="flex flex-col gap-1 flex-auto">
                                    <label for="description"
                                        class="font-satoshiRegular text-text14 text-[#000929]">Imagenes de la
                                        Propiedad</label>

                                    <div class="relative ">
                                        <input id="imagen" name="imagen"
                                            class="p-2.5 block w-full text-sm text-gray-900 border border-gray-200 rounded-lg cursor-pointer bg-[#F7F7FD]"
                                            aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col gap-5">
                                <div class="flex flex-col gap-1 flex-auto">
                                    <label for="description"
                                        class="font-satoshiRegular text-text14 text-[#000929]">Imagen destacada</label>

                                    <div class="relative">
                                        <input id="imagen" name="imagen"
                                            class="p-2.5 block w-full text-sm text-gray-900 border border-gray-200 rounded-lg cursor-pointer bg-[#F7F7FD]"
                                            aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                    </div>
                                </div>
                            </div>


                            <div class="flex flex-col md:flex-row gap-5 w-full">
                                <div class="flex flex-col gap-2 flex-auto">
                                    <label for="precio"
                                        class="font-satoshiRegular text-text14 text-[#000929]">Precio</label>

                                    <input id="precio" type="number" placeholder="S." step="0.1"
                                        class="w-full bg-[#F7F7FD] border-[1px] focus:outline-none border-gray-200 rounded-xl py-2 text-text16 font-satoshiMedium placeholder:text-[#000929] placeholder:text-opacity-25 text-[#2E609D]" />
                                </div>

                                <div class="flex flex-col gap-2 flex-auto">
                                    <label for="descuento"
                                        class="font-satoshiRegular text-text14 text-[#000929]">Descuento</label>
                                    <input id="descuento" type="number" placeholder="Descuento" step="0.1"
                                        class="w-full bg-[#F7F7FD] border-[1px] focus:outline-none border-gray-200 rounded-xl py-2 text-text16 font-satoshiMedium placeholder:text-[#000929] placeholder:text-opacity-25 text-[#2E609D]" />
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row gap-5 w-full">
                                <div class="flex flex-col gap-2 flex-auto">
                                    <label for="cuartos"
                                        class="font-satoshiRegular text-text14 text-[#000929]">Número de
                                        cuartos</label>

                                    <input id="cuartos" type="number" placeholder="Cuartos" step="0.1"
                                        class="w-full bg-[#F7F7FD] border-[1px] focus:outline-none border-gray-200 rounded-xl py-2 text-text16 font-satoshiMedium placeholder:text-[#000929] placeholder:text-opacity-25 text-[#2E609D]" />
                                </div>

                                <div class="flex flex-col gap-2 flex-auto">
                                    <label for="banios"
                                        class="font-satoshiRegular text-text14 text-[#000929]">Número de baños</label>

                                    <input id="banios" type="number" placeholder="Baños" step="0.1"
                                        class="w-full bg-[#F7F7FD] border-[1px] focus:outline-none border-gray-200 rounded-xl py-2 text-text16 font-satoshiMedium placeholder:text-[#000929] placeholder:text-opacity-25 text-[#2E609D]" />
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row gap-5 w-full">
                                <div class="flex flex-col gap-2 flex-auto">
                                    <label for="area"
                                        class="font-satoshiRegular text-text14 text-[#000929]">Área</label>

                                    <input id="area" type="number" placeholder="Área" step="0.1"
                                        class="w-full bg-[#F7F7FD] border-[1px] focus:outline-none border-gray-200 rounded-xl py-2 text-text16 font-satoshiMedium placeholder:text-[#000929] placeholder:text-opacity-25 text-[#2E609D]" />
                                </div>

                                <div class="flex flex-col gap-2 flex-auto">
                                    <label for="cochera"
                                        class="font-satoshiRegular text-text14 text-[#000929]">Número de
                                        Cocheras</label>

                                    <input id="cochera" type="number" placeholder="Cocheras" step="0.1"
                                        class="w-full bg-[#F7F7FD] border-[1px] focus:outline-none border-gray-200 rounded-xl py-2 text-text16 font-satoshiMedium placeholder:text-[#000929] placeholder:text-opacity-25 text-[#2E609D]" />
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row gap-5 w-full">
                                <div class="flex flex-col gap-2 flex-auto">
                                    <label for="pisos"
                                        class="font-satoshiRegular text-text14 text-[#000929]">Pisos</label>

                                    <input id="pisos" type="number" placeholder="Pisos" step="0.1"
                                        class="w-full bg-[#F7F7FD] border-[1px] focus:outline-none border-gray-200 rounded-xl py-2 text-text16 font-satoshiMedium placeholder:text-[#000929] placeholder:text-opacity-25 text-[#2E609D]" />
                                </div>

                                <div class="flex flex-col gap-2 flex-auto">
                                    <label for="movilidad"
                                        class="font-satoshiRegular text-text14 text-[#000929]">Movilidad</label>

                                    <input id="movilidad" type="number" placeholder="Movilidad" step="0.1"
                                        class="w-full bg-[#F7F7FD] border-[1px] focus:outline-none border-gray-200 rounded-xl py-2 text-text16 font-satoshiMedium placeholder:text-[#000929] placeholder:text-opacity-25 text-[#2E609D]" />
                                </div>
                            </div>

                            <div class="flex flex-col gap-1 w-full">
                                <p class="font-satoshiRegular text-text14 text-[#000929]">Categoría</p>
                                <div class="flex flex-col md:flex-row gap-5 w-full justify-between">
                                    <div
                                        class="flex items-center ps-4 w-full border-gray-200 border-[1px] rounded-xl px-5 bg-[#F7F7FD]">
                                        <label for="bordered-radio-minorista"
                                            class="w-full py-2 text-text16 font-satoshiMedium text-[#000929]  flex justify-between items-center pr-4">
                                            <span>Alquiler</span>
                                        </label>
                                        <input type="radio" id="bordered-radio-minorista"
                                            name="bordered-radio-tarjetas" value=""
                                            class="focus:ring-transparent w-5 h-5 cursor-pointer border-[1px] border-gray-200 " />

                                    </div>

                                    <div
                                        class="flex items-center ps-4 w-full border-gray-200 border-[1px] rounded-xl px-5 bg-[#F7F7FD]">
                                        <label for="bordered-radio-mayorista"
                                            class="w-full py-2 text-text16 font-acehRegular text-[#000929]  flex justify-between items-center pr-4">
                                            <span>Venta</span>
                                        </label>
                                        <input type="radio" id="bordered-radio-mayorista"
                                            name="bordered-radio-tarjetas" value=""
                                            class="focus:ring-transparent w-5 h-5 cursor-pointer border-[1px] border-gray-200 " />

                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col gap-1 w-full">
                                <label for="pisos"
                                    class="font-satoshiRegular text-text14 text-[#000929]">Frecuencia</label>

                                <select name="" id=""
                                    class="w-full bg-[#F7F7FD] border-[1px] focus:outline-none border-gray-200 rounded-xl py-2 text-text16 font-satoshiMedium placeholder:text-[#000929] placeholder:text-opacity-25 text-[#2E609D]">
                                    <option value="">Frecuencia</option>
                                    <option value="">Anual</option>
                                    <option value="">Bimenstral</option>
                                    <option value="">Mensual</option>

                                </select>
                            </div>

                            <div class="flex flex-col gap-1 w-full">
                                <p class="font-satoshiRegular text-text14 text-[#000929]">Tipo de propiedad</p>
                                <div class="flex flex-col md:flex-row gap-5 w-full justify-between">
                                    <div
                                        class="flex items-center ps-4 w-full border-gray-200 border-[1px] rounded-xl px-5 bg-[#F7F7FD]">
                                        <label for="bordered-radio-casa"
                                            class="w-full py-2 text-text16 font-satoshiMedium text-[#000929]  flex justify-between items-center pr-4">
                                            <span>Casa</span>
                                        </label>
                                        <input type="radio" id="bordered-radio-casa"
                                            name="bordered-radio-propiedad" value=""
                                            class="focus:ring-transparent w-5 h-5 cursor-pointer border-[1px] border-gray-200 " />

                                    </div>

                                    <div
                                        class="flex items-center ps-4 w-full border-gray-200 border-[1px] rounded-xl px-5 bg-[#F7F7FD]">
                                        <label for="bordered-radio-depa"
                                            class="w-full py-2 text-text16 font-acehRegular text-[#000929]  flex justify-between items-center pr-4">
                                            <span>Departamento</span>
                                        </label>
                                        <input type="radio" id="bordered-radio-depa"
                                            name="bordered-radio-propiedad" value=""
                                            class="focus:ring-transparent w-5 h-5 cursor-pointer border-[1px] border-gray-200 " />

                                    </div>


                                    <div
                                        class="flex items-center ps-4 w-full border-gray-200 border-[1px] rounded-xl px-5 bg-[#F7F7FD]">
                                        <label for="bordered-radio-terreno"
                                            class="w-full py-2 text-text16 font-acehRegular text-[#000929]  flex justify-between items-center pr-4">
                                            <span>Terreno</span>
                                        </label>
                                        <input type="radio" id="bordered-radio-terreno"
                                            name="bordered-radio-propiedad" value=""
                                            class="focus:ring-transparent w-5 h-5 cursor-pointer border-[1px] border-gray-200 " />

                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col gap-1 w-full">
                                <p class="font-satoshiRegular text-text14 text-[#000929]">Características del inmueble
                                </p>
                                <div class="flex flex-col md:flex-row gap-5 w-full justify-between">
                                    <div
                                        class="flex items-center ps-4 w-full border-gray-200 border-[1px] rounded-xl px-5 bg-[#F7F7FD]">
                                        <label for="mascota"
                                            class="w-full py-2 text-text16 font-satoshiMedium text-[#000929]  flex justify-between items-center pr-4">
                                            <span>Mascota</span>
                                        </label>
                                        <input type="checkbox" id="mascota" name="mascota" value=""
                                            class="focus:ring-transparent w-5 h-5 cursor-pointer border-[1px] border-gray-200 " />

                                    </div>

                                    <div
                                        class="flex items-center ps-4 w-full border-gray-200 border-[1px] rounded-xl px-5 bg-[#F7F7FD]">
                                        <label for="moviliado"
                                            class="w-full py-2 text-text16 font-acehRegular text-[#000929]  flex justify-between items-center pr-4">
                                            <span>Moviliado</span>
                                        </label>
                                        <input type="checkbox" id="moviliado" name="moviliado" value=""
                                            class="focus:ring-transparent w-5 h-5 cursor-pointer border-[1px] border-gray-200 " />

                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col gap-5">
                                <div class="flex flex-col gap-1 flex-auto">
                                    <label for="direccion"
                                        class="font-satoshiRegular text-text14 text-[#000929]">Dirección de la
                                        propiedad</label>
                                    <input id="direccion" type="text" placeholder="Av..."
                                        class="w-full bg-[#F7F7FD] border-[1px] focus:outline-none border-gray-200 rounded-xl py-2 text-text16 font-satoshiMedium placeholder:text-[#000929] placeholder:text-opacity-25 text-[#2E609D]" />
                                </div>
                            </div>


                            <div class="flex flex-col gap-5">
                                <div class="flex flex-col gap-1 flex-auto">
                                    <label for="propietario"
                                        class="font-satoshiRegular text-text14 text-[#000929]">Propietario</label>
                                    <input id="propietario" type="text" placeholder="Nombre del propietario"
                                        class="w-full bg-[#F7F7FD] border-[1px] focus:outline-none border-gray-200 rounded-xl py-2 text-text16 font-satoshiMedium placeholder:text-[#000929] placeholder:text-opacity-25 text-[#2E609D]" />
                                </div>
                            </div>

                            <div class="flex flex-col gap-1 w-full">
                                <label for="tipo_prop" class="font-satoshiRegular text-text14 text-[#000929]">Tipo de
                                    Propietario</label>

                                <select name="" id=""
                                    class="w-full bg-[#F7F7FD] border-[1px] focus:outline-none border-gray-200 rounded-xl py-2 text-text16 font-satoshiMedium placeholder:text-[#000929] placeholder:text-opacity-25 text-[#2E609D]">
                                    <option value="">Dueño</option>
                                    <option value="">Ejecutivo</option>
                                </select>
                            </div>

                            <div class="flex flex-col gap-5">
                                <div class="flex flex-col gap-1 flex-auto">
                                    <label for="description"
                                        class="font-satoshiRegular text-text14 text-[#000929]">Foto del
                                        propietario</label>

                                    <div class="relative">
                                        <input id="imagen" name="imagen"
                                            class="p-2.5 block w-full text-sm text-gray-900 border border-gray-200 rounded-lg cursor-pointer bg-[#F7F7FD]"
                                            aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                    </div>
                                </div>
                            </div>

                            <div class="especificaciones_container">


                                <div class="md:col-span-5 mt-2 especificaciones">
                                    <div class=" flex items-end justify-between gap-2 ">
                                        <label for="especificacion"
                                            class="font-satoshiRegular text-text14">Especificacion </label>
                                        <button type="button" id="AddEspecifiacion"
                                            class="text-blue-500 hover:underline focus:outline-none font-satoshiRegular text-text16">
                                            Agregar Especificacion
                                        </button>
                                    </div>

                                    <div class="flex gap-2 especificaciones_items">
                                        <div class="relative w-full">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512"
                                                    height="512" x="0" y="0" viewBox="0 0 469.336 469.336"
                                                    style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                    class="">
                                                    <g>
                                                        <path
                                                            d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                                                            fill="#9F9F9F" opacity="1" data-original="#000000"
                                                            class=""></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <input type="text" id="specifications-1" name="tittle-1"
                                                value=""
                                                class="mt-1 bg-[#F7F7FD] border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 "
                                                placeholder="Título">

                                        </div>
                                        <div class="relative w-full">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512"
                                                    height="512" x="0" y="0" viewBox="0 0 469.336 469.336"
                                                    style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                    class="">
                                                    <g>
                                                        <path
                                                            d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                                                            fill="#9F9F9F" opacity="1" data-original="#000000"
                                                            class=""></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <input type="text" id="specifications" name="specifications-1"
                                                value=""
                                                class="mt-1 bg-[#F7F7FD] border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                                                placeholder="Valor">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col gap-1 w-full">
                                <label for="tipo_prop"
                                    class="font-satoshiRegular text-text14 text-[#000929]">Tag</label>

                                <select name="" id=""
                                    class="w-full bg-[#F7F7FD] border-[1px] focus:outline-none border-gray-200 rounded-xl py-2 text-text16 font-satoshiMedium placeholder:text-[#000929] placeholder:text-opacity-25 text-[#2E609D]">
                                    <option value="">Elegir Tag</option>
                                    <option value="">Tag 1</option>
                                </select>
                            </div>

                            <div class="w-full flex flex-col gap-5 py-5">

                                <a href="#"
                                    class="text-white bg-[#2E609D] rounded-[8px] p-4 font-satoshiBold text-text18 text-center">Anunciar
                                    mi propiedad</a>
                                <a href="#"
                                    class="text-[#000929] font-satoshiMedium text-text14 text-center">¿Prefieres hablar
                                    con un <span class="text-[#2E609D]">asistente</span> ?</a>
                            </div>

                        </form>
                    </div>

                </div>


            </div>
        </div>
    </section>

</header>


<script>
    document.addEventListener('DOMContentLoaded', function() {




        const openModal = document.querySelector(".mostrar-modal");
        // Captura al modal que se quiere mostrar
        const modal = document.querySelector(".modal-destino");
        //Captura el evento de cierre
        const closeModal = document.querySelector(".modal__close");
        // Captura el body para bloqueo
        const body = document.querySelector(".scroll__hidden_explorar");


        openModal.addEventListener("click", (e) => {
            e.preventDefault();




            modal.classList.add("modal--show");
            body.classList.add("overflow-hidden");
            modal.style.display = "flex";
        });

        closeModal.addEventListener("click", (e) => {
            e.preventDefault();
            modal.classList.remove("modal--show");
            body.classList.remove("overflow-hidden");






        });


        function resetEffects(event) {
            if (event.target === modal) {
                modal.classList.remove("modal--show");
                body.classList.remove("overflow-hidden");
            }

        }

        window.addEventListener("click", resetEffects);
    })
</script>

<script>
    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    function agregarElementos(elemento, valorInput, name) {
        elemento.setAttribute("type", "text");
        elemento.setAttribute("name", `${name}-${valorInput}`);
        elemento.setAttribute("placeholder", `${capitalizeFirstLetter(name)}`);
        elemento.setAttribute("id", `${name}-${valorInput}`);
        elemento.setAttribute("id", `${name}-${valorInput}`);
        elemento.setAttribute("id", `${name}-${valorInput}`);

        elemento.classList.add("mt-1", "bg-[#F7F7FD]", "border", "border-gray-200", "text-gray-900", "text-sm",
            "rounded-lg",
            "focus:ring-blue-500", "focus:border-blue-500", "block", "w-full", "pl-10", "p-2.5");

        return elemento
    }

    $('document').ready(function() {
        let valorInput = 1



        $("#AddEspecifiacion").on('click', function(e) {
            e.preventDefault()
            valorInput++
            console.log('agregando especificacion')
            const addButton = document.getElementById("AddEspecifiacion");
            const divFlex = document.createElement("div");
            const dRelative = document.createElement("div");
            const dRelative2 = document.createElement("div");

            divFlex.classList.add('flex', 'gap-2')
            dRelative.classList.add('relative', 'w-full')
            dRelative2.classList.add('relative', 'w-full')

            const iconContainer = document.createElement("div");
            const icon = `<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                      version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                      y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
                      xml:space="preserve" class="">
                      <g>
                        <path
                          d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                          fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                      </g>
                    </svg>
                  </div>`
            iconContainer.innerHTML = icon;

            // Obtener el nodo del icono
            const iconNode = iconContainer.firstChild;



            const inputTittle = document.createElement("input");
            const inputValue = document.createElement("input");

            let inputT = agregarElementos(inputTittle, valorInput, 'Título')
            let inputV = agregarElementos(inputValue, valorInput, 'Valor')


            dRelative.appendChild(inputT);
            dRelative2.appendChild(inputV);


            // Agregar el icono como primer hijo de dRelative
            dRelative.insertBefore(iconNode, inputT);

            // Clonar el nodo del icono para agregarlo como primer hijo de dRelative2
            const iconNodeCloned = iconNode.cloneNode(true);
            dRelative2.insertBefore(iconNodeCloned, inputV);


            divFlex.appendChild(dRelative);
            divFlex.appendChild(dRelative2);

            const parentContainer = addButton.parentElement
                .parentElement; // Obtener el contenedor padre
            parentContainer.insertBefore(divFlex, addButton.parentElement
                .nextSibling); // Insertar el input antes del siguiente elemento después del botón



        })

    })
</script>


{{--  --}}
{{-- 
<script>
    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    function agregarElementos(elemento, valorInput, name) {
        elemento.setAttribute("type", "text");
        elemento.setAttribute("name", `${name}-${valorInput}`);
        elemento.setAttribute("placeholder", `${capitalizeFirstLetter(name)}`);
        elemento.setAttribute("id", `${name}-${valorInput}`);
        elemento.setAttribute("id", `${name}-${valorInput}`);
        elemento.setAttribute("id", `${name}-${valorInput}`);

        elemento.classList.add("mt-1", "bg-[#F7F7FD]", "border", "border-gray-200", "text-gray-900", "text-sm",
            "rounded-lg",
            "focus:ring-blue-500", "focus:border-blue-500", "block", "w-full", "pl-10", "p-2.5");

        return elemento
    }
    $("#AddEspecifiacion").on('click', function(e) {
        e.preventDefault();
        let valorInput = 1
        valorInput++;
        console.log('agregando especificacion');
        const addButton = document.getElementById("AddEspecifiacion");
        const divFlex = document.createElement("div");
        const dRelative = document.createElement("div");
        const dRelative2 = document.createElement("div");

        divFlex.classList.add('flex', 'gap-2');
        dRelative.classList.add('relative', 'w-full');
        dRelative2.classList.add('relative', 'w-full');

        const iconContainer = document.createElement("div");
        const icon = `<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
          version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
          y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
          xml:space="preserve" class="">
          <g>
            <path
              d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
              fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
          </g>
        </svg>
      </div>`;
        iconContainer.innerHTML = icon;

        // Obtener el nodo del icono
        const iconNode = iconContainer.firstChild;

        const inputTittle = document.createElement("input");
        const inputValue = document.createElement("input");

        let inputT = agregarElementos(inputTittle, valorInput, 'Título');
        let inputV = agregarElementos(inputValue, valorInput, 'Valor');

        dRelative.appendChild(inputT);
        dRelative2.appendChild(inputV);

        // Agregar el icono como primer hijo de dRelative
        dRelative.insertBefore(iconNode, inputT);

        // Clonar el nodo del icono para agregarlo como primer hijo de dRelative2
        const iconNodeCloned = iconNode.cloneNode(true);
        dRelative2.insertBefore(iconNodeCloned, inputV);

        // Crear botón de eliminación
        const deleteButton = document.createElement("button");
        deleteButton.textContent = 'X';
        deleteButton.classList.add('delete-button');
        deleteButton.onclick = function() {
            divFlex.remove();
        };

        divFlex.appendChild(dRelative);
        divFlex.appendChild(dRelative2);
        divFlex.appendChild(deleteButton);

        const parentContainer = addButton.parentElement.parentElement; // Obtener el contenedor padre
        parentContainer.insertBefore(divFlex, addButton.parentElement
        .nextSibling); // Insertar el input antes del siguiente elemento después del botón
    });
</script>
 --}}
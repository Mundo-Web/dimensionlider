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
                </div>
            </nav>
        </div>
    </div>

    <div class="flex justify-end w-11/12 mx-auto z-[200] relative">
        <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20 text-center">
            <a target="_blank" href="https://api.whatsapp.com/send?phone={{$generales->whatsapp}}&text={{$generales->mensaje_whatsapp}}">
                <img src="{{ asset('images/svg/imagen_49.svg') }}" alt="whatsapp" class="w-20 h-20 md:w-full md:h-full">
            </a>
            
        </div>
       {{--  <p>{{$generales->mensaje_whatsapp}}</p> --}}
    </div>

</header>

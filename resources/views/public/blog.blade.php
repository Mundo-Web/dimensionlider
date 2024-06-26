@extends('components.public.matrix')

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
        <section class="w-11/12 mx-auto pt-32 flex flex-col gap-10 pb-20">
            <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-duration="150">
                <h2 class="text-[#000929] font-satoshiBold text-text32 md:text-text52 leading-tight">
                    En Dimensión Lider te brindamos <span class="text-[#2E609D]">información útil y algunas
                        recomendaciones</span>
                </h2>
                <p class="text-[#000929] font-satoshiRegular text-opacity-50 text-text18">Una gran plataforma para comprar,
                    vender o incluso alquilar tus propiedades sin comisiones.</p>
            </div>

            <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-12">
                <div class="md:basis-5/6 order-2 md:order-1 flex flex-col gap-10">

                    <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-duration="150">
                        <div class="flex justify-center items-center">
                           {{--  <img src="{{ asset('images/img/image_20.png') }}" alt="blog"
                                class="w-full h-[450px] object-cover rounded-xl hidden md:block">
                            <img src="{{ asset('images/img/image_21.png') }}" alt="blog"
                                class="w-full h-[450px] object-cover rounded-xl block md:hidden"> --}}
                                <img src="{{ asset($latestBlog->url_image) }}" alt="blog"
                                class="w-full h-[450px] object-cover rounded-xl block">
                        </div>
                        <div class="flex justify-start items-center gap-5">
                            <p class="text-white font-roboto font-semibold text-text14 bg-[#2E609D] py-2 px-4 rounded-lg">
                                {{ $latestBlog->categories->name }}</p>
                            <p class="text-[#2E609D] font-satoshiBold text-text14">Publicado 5 min</p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h2 class="text-[#000929] font-satoshiBold text-text32 leading-tight">{{$latestBlog->title}} </h2>
                            <p class="text-[#000929] text-opacity-50 text-text16 font-satoshiRegular">
                                {{ $latestBlog->extracto }}
                            </p>
                        </div>

                        <div>
                            <a href="{{ route('post', $latestBlog->id) }}"
                                class="text-[#2E609D] font-roboto font-normal text-text16 flex justify-start items-center gap-3">
                                <span>Leer más</span>
                                <div>
                                    <img src="{{ asset('images/svg/imagen_43.svg') }}" alt="arrow">
                                </div>
                            </a>
                        </div>
                    </div>
                    {{-- Blogs --}}
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-5 gap-y-10">
                        @foreach ($blogs as $key => $item)
                        
                            @if ($key > 0)
                                <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-duration="150">
                                    <div class="flex justify-center items-center">
                                        {{-- <img src="{{asset('images/img/image_22.png')}}" alt="blog" class="w-full h-[300px] object-cover rounded-xl hidden md:block">
                                <img src="{{asset('images/img/image_23.png')}}" alt="blog" class="w-full h-[300px] object-cover rounded-xl block md:hidden"> --}}
                                        <img src="{{ asset($item->url_image) }}" alt="blog"
                                            class="w-full h-[300px] object-cover rounded-xl">
                                    </div>
                                    <div class="flex justify-start items-center gap-5">
                                        <p
                                            class="text-white font-roboto font-semibold text-text14 bg-[#2E609D] py-2 px-4 rounded-lg">
                                            {{-- Categoría --}} {{ $item->categories->name }}</p>
                                        <p class="text-[#2E609D] font-satoshiBold text-text14">Publicado 5 min</p>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <h2 class="text-[#000929] font-satoshiBold text-text24 leading-tight">
                                            {{-- Nunc faucibus, augue at bibendum --}}
                                            {{ $item->title }}
                                        </h2>
                                        <p class="text-[#000929] text-opacity-50 text-text16 font-satoshiRegular">
                                            {{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros. --}}
                                            {{ $item->extracto }}
                                        </p>
                                    </div>

                                    <div>
                                        <a href="{{ route('post', $item->id) }}"
                                            class="text-[#2E609D] font-roboto font-normal text-text16 flex justify-start items-center gap-3">
                                            <span>Leer más</span>
                                            <div>
                                                <img src="{{ asset('images/svg/imagen_43.svg') }}" alt="arrow">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="md:basis-1/6 order-1 md:order-2 flex flex-col gap-5" data-aos="fade-up" data-aos-duration="150">
                    <h3 class="text-[#000929] font-satoshiBold text-text20">Blog categorias</h3>
                    @php
                        $url = $_SERVER['REQUEST_URI'];
                        $parts = explode('/', $url);
                        $filtro = end($parts);
                    @endphp
                    <a href="/blog/0"
                        class="text-[#000929]  text-text18 py-3 px-4 rounded-lg {{ $filtro == 0 ? 'text-opacity-100 font-satoshiBold text-white bg-[#2E609D]' : 'font-satoshiRegular text-opacity-50' }}">Todas</a>

                    <div class="flex flex-col gap-3">
                        @foreach ($categorias as $item)
                            @if ($item->blogs->where('visible', 1)->count() != 0)
                                <a href="/blog/{{ $item->id }}"
                                    class="text-[#000929] text-text18 py-3 px-4 rounded-lg
                                @if ($id == 0) {{ in_array($item->id, [0]) ? 'text-opacity-100 font-satoshiBold text-white bg-[#2E609D]' : 'font-satoshiRegular text-opacity-50' }} 
                                @else
                                {{ $item->id == $categoria->id ? 'text-opacity-100 font-satoshiBold text-white bg-[#2E609D]' : 'font-satoshiRegular text-opacity-50' }} @endif">
                                    {{ $item->name }}
                                </a>
                            @endif
                        @endforeach



                        {{--  <a href="#" class="text-[#000929] text-opacity-50 font-satoshiRegular text-text18 py-3 px-4 rounded-lg">Tratamiento de Agua</a>
                    <a href="#" class="text-[#000929] text-opacity-50 font-satoshiRegular text-text18 py-3 px-4 rounded-lg">Productos Químicos</a>
                    <a href="#" class="text-[#000929] text-opacity-50 font-satoshiRegular text-text18 py-3 px-4 rounded-lg">Medición e Instrumentación</a>
                    <a href="#" class="text-[#000929] text-opacity-50 font-satoshiRegular text-text18 py-3 px-4 rounded-lg">Piscinas & Spa</a> --}}
                    </div>
                </div>
            </div>
        </section>
    </main>

@section('scripts_importados')

@stop

@stop

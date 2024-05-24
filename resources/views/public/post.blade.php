@extends('components.public.matrix')

@section('css_importados')
    <style>
        .bg_color {
            background-color: #2E609D;
        }

        .bg_inscribir{
            background-color: #FAFAFA;
            color: #000929;
        }
    </style>
@stop


@section('content')

    <main class="bg-[#FAFAFA]">
        <section class="w-10/12 mx-auto pt-32 flex flex-col gap-10 pb-20">
            <div class="flex flex-col gap-1" data-aos="fade-up" data-aos-duration="150">
                <h2 class="font-satoshiBold text-text48 md:text-text64 text-[#000929] leading-tight">Donec non imperdiet
                    nisi, <span class="text-[#2E609D]">et eleifend est proin lacinia efficitur</span> </h2>
                <p class="text-[#2E609D] font-satoshiMedium text-text18">{{-- 12 Abril, 2024 --}}
                    {{ \Carbon\Carbon::parse($blog->created_at)->locale('es')->isoFormat('DD [de] MMMM, YYYY') }} 
                </p>
                
            </div>

            <div class="flex flex-col gap-3" data-aos="fade-up" data-aos-duration="150">

                <p class="text-[#000929] font-satoshiRegular text-opacity-50 text-text18">
                    {{$blog->extracto}}
                </p>
                
                {{-- <p class="text-[#000929] font-satoshiRegular text-opacity-50 text-text18">
                    Donec tincidunt turpis lacinia nulla ultricies, quis sagittis nisl feugiat. Ut lobortis dui et risus
                    vulputate, ut placerat felis rhoncus. Proin iaculis tellus massa, non mattis nulla malesuada ultrices.
                </p>


                <p class="text-[#000929] font-satoshiRegular text-opacity-50 text-text18">
                    Donec tincidunt turpis lacinia nulla ultricies, quis sagittis nisl feugiat. Ut lobortis dui et risus
                    vulputate, ut placerat felis rhoncus. Proin iaculis tellus massa, non mattis nulla malesuada ultrices.
                </p> --}}
            </div>

           {{--  <div class="flex flex-col gap-3" data-aos="fade-up" data-aos-duration="150">
                <div class="flex flex-col gap-2">
                    <h2 class="font-satoshiMedium text-text32 text-[#000929] leading-tight">Vestibulum vehicula urna arcu
                    </h2>
                    <p class="text-[#000929] font-satoshiRegular text-opacity-50 text-text18">
                        Donec tincidunt turpis lacinia nulla ultricies, quis sagittis nisl feugiat. Ut lobortis dui et risus
                        vulputate, ut placerat felis rhoncus. Proin iaculis tellus massa, non mattis nulla malesuada
                        ultrices.
                    </p>
                </div>

                <div class="mx-8">
                    <ul class="text-[#000929] font-satoshiRegular text-opacity-50 text-text18 list-disc">
                        <li>
                            Implementación de un sistema para el cumplimiento.
                        </li>
                        <li>
                            Implementación de un sistema para el cumplimiento.
                        </li>
                        <li>
                            Implementación de un sistema para el cumplimiento.
                        </li>
                        <li>
                            Implementación de un sistema para el cumplimiento.
                        </li>
                        <li>
                            Implementación de un sistema para el cumplimiento.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-duration="150">
                <h2 class="font-satoshiBold text-text32 text-[#000929] leading-tight">Nunc tincidunt sollicitudin lectus a
                    ornare</h2>
                <p class="text-[#000929] font-satoshiRegular text-opacity-50 text-text18">
                    Nam a lorem ut dui ultrices efficitur vitae et metus. Mauris quis vulputate orci, ac hendrerit purus.
                    Nunc sagittis lacus sem. Nam varius purus et urna vehicula, eget dictum magna efficitur. Vestibulum
                    facilisis sapien id dolor suscipit malesuada. Cras tristique odio ipsum. Morbi at accumsan lacus.
                    Phasellus efficitur magna eget orci posuere, at pretium metus ultricies. Proin sollicitudin at est non
                    imperdiet. Morbi rhoncus tortor et sapien hendrerit, vel luctus ex feugiat.
                </p>
            </div>


            <div class="flex flex-wrap gap-4 justify-center" data-aos="fade-up" data-aos-duration="150">
                <p
                    class="bg-[#FCFCFC] flex-grow text-[#000929] font-satoshiMedium text-text18 border-l-8 border-[#2E609D]  px-3 py-2 w-full md:w-5/12 lg:w-3/12">
                    Phasellus efficitur magna eget orci posuere, at pretium metus
                    ultricies. Proin sollicitudin at est non imperdiet. Morbi rhoncus
                    tortor et sapien hendrerit, vel luctus ex feugiat.Phasellus
                    efficitur magna eget orci posuere, at pretium metus ultricies.
                    Proin sollicitudin at est non imperdiet. Morbi rhoncus tortor et
                    sapien hendrerit, vel luctus ex feugiat.
                </p>
            </div> --}}



            <div class="w-full" data-aos="fade-up" data-aos-offset="150">
                {{-- <img src="{{ asset('images/img/image_26.png') }}" alt="blog" class="w-full h-[560px] object-cover hidden md:block rounded-xl" />
                <img src="{{ asset('images/img/image_27.png') }}" alt="blog" class="w-full h-[560px] object-cover block md:hidden rounded-xl" /> --}}
                <img src="{{asset($blog->url_image)}}" alt="{{$blog->name_image}}" class="w-full h-[560px] object-cover rounded-xl">
            </div>


            {{-- <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-duration="150">
                <h2 class="font-satoshiBold text-text32 text-[#000929] leading-tight">Nunc tincidunt sollicitudin lectus a
                    ornare</h2>
                <p class="text-[#000929] font-satoshiRegular text-opacity-50 text-text18">
                    Nam a lorem ut dui ultrices efficitur vitae et metus. Mauris quis vulputate orci, ac hendrerit purus.
                    Nunc sagittis lacus sem. Nam varius purus et urna vehicula, eget dictum magna efficitur. Vestibulum
                    facilisis sapien id dolor suscipit malesuada. Cras tristique odio ipsum. Morbi at accumsan lacus.
                    Phasellus efficitur magna eget orci posuere, at pretium metus ultricies. Proin sollicitudin at est non
                    imperdiet. Morbi rhoncus tortor et sapien hendrerit, vel luctus ex feugiat.
                </p>
            </div> --}}
            <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-duration="150">
                <div class="text-[#000929] font-satoshiRegular text-opacity-50 text-text18">
                    {!!$blog->description!!}
                </div>
            </div>

        </section>

        <section class="w-10/12 mx-auto">
            <div class="flex justify-between items-center border-t-[1.5px]  border-[#DDDDDD] py-10">
                <div class="flex flex-col gap-2">
                    @if ($postAnterior)
                        <a href="{{ route('post', $postAnterior) }}"
                            class="text-[#2E609D] flex items-center justify-start gap-2 font-satoshiBold  text-text14 md:text-text18">
                            <div>
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.8307 7.49935H1.16406M1.16406 7.49935L6.9974 13.3327M1.16406 7.49935L6.9974 1.66602" stroke="#2E609D" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    

                            </div>

                            Anterior
                          
                        </a>
                    @endif
                </div>

                <div class="flex flex-col gap-2">
                    @if ($postSiguiente)
                        <a href="{{ route('post', $postSiguiente) }}"
                            class="text-[#2E609D] flex items-center justify-end gap-2 font-satoshiBold text-text14 md:text-text18">
                                Próximo
                            <div>

                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.16406 7.49935H12.8307M12.8307 7.49935L6.9974 1.66602M12.8307 7.49935L6.9974 13.3327" stroke="#2E609D" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    

                            </div>
                        </a>
                    @endif
                </div>
            </div>
        </section>
    </main>





@section('scripts_importados')

@stop

@stop

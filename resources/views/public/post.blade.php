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
        <section class="w-11/12 mx-auto pt-32 flex flex-col gap-10 pb-20">
            <div class="flex flex-col gap-1">
                <h2 class="font-satoshiBold text-text48 md:text-text64 text-[#000929] leading-tight">Donec non imperdiet
                    nisi, <span class="text-[#2E609D]">et eleifend est proin lacinia efficitur</span> </h2>
                <p class="text-[#2E609D] font-satoshiMedium text-text18">12 Abril, 2024</p>
            </div>

            <div class="flex flex-col gap-3">
                <p class="text-[#000929] font-satoshiRegular text-opacity-50 text-text18">
                    Donec tincidunt turpis lacinia nulla ultricies, quis sagittis nisl feugiat. Ut lobortis dui et risus
                    vulputate, ut placerat felis rhoncus. Proin iaculis tellus massa, non mattis nulla malesuada ultrices.
                </p>

                <p class="text-[#000929] font-satoshiRegular text-opacity-50 text-text18">
                    Donec tincidunt turpis lacinia nulla ultricies, quis sagittis nisl feugiat. Ut lobortis dui et risus
                    vulputate, ut placerat felis rhoncus. Proin iaculis tellus massa, non mattis nulla malesuada ultrices.
                </p>
            </div>

            <div class="flex flex-col gap-3">
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

            <div class="flex flex-col gap-2">
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


            <div class="flex flex-wrap gap-4 justify-center">
                <p
                    class="bg-[#FCFCFC] flex-grow text-[#000929] font-satoshiMedium text-text18 border-l-8 border-[#2E609D]  px-3 py-2 w-full md:w-5/12 lg:w-3/12">
                    Phasellus efficitur magna eget orci posuere, at pretium metus
                    ultricies. Proin sollicitudin at est non imperdiet. Morbi rhoncus
                    tortor et sapien hendrerit, vel luctus ex feugiat.Phasellus
                    efficitur magna eget orci posuere, at pretium metus ultricies.
                    Proin sollicitudin at est non imperdiet. Morbi rhoncus tortor et
                    sapien hendrerit, vel luctus ex feugiat.
                </p>
            </div>



            <div class="w-full" data-aos="fade-up" data-aos-offset="150">
                <img src="{{ asset('images/img/image_26.png') }}" alt="blog" class="w-full h-[560px] object-cover hidden md:block" />
                <img src="{{ asset('images/img/image_27.png') }}" alt="blog" class="w-full h-[560px] object-cover block md:hidden" />
            </div>


            <div class="flex flex-col gap-2">
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


            <div>
                <div>
                    <div class="mb-4 flex justify-between border-t-2 pt-5" aria-label="Pagination">
                        <a class="px-2 py-2 text-[#3F76BB] flex gap-2" href="#">
                            <img src="{{ asset('images/svg/imagen_44.svg') }}" alt="previo" />
                            <span class="font-satoshiBold text-text18 text-[#2E609D]">Anterior</span>
                        </a>

                        <a class="px-2 py-2 text-[#3F76BB] flex gap-2" href="#">
                            <span class="font-satoshiBold text-text18 text-[#2E609D]">Próximo</span>
                            <img src="{{ asset('images/svg/imagen_45.svg') }}" alt="next" />
                        </a>
                    </div>
                </div>
            </div>

        </section>
    </main>





@section('scripts_importados')

@stop

@stop

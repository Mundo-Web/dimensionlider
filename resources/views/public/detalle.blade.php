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
        <section class="pt-36 pb-14 w-11/12 mx-auto">
            <div>
                <div class="swiper slider_propiedades">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/img/image_18.png') }}" alt="inmobiliaria"
                                    class="rounded-xl w-full h-[400px] object-cover">
                            </div>
                        </div>
    
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/img/image_18.png') }}" alt="inmobiliaria"
                                    class="rounded-xl w-full h-[400px] object-cover">
                            </div>
                        </div>
    
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/img/image_18.png') }}" alt="inmobiliaria"
                                    class="rounded-xl w-full h-[400px] object-cover">
                            </div>
                        </div>
    
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/img/image_18.png') }}" alt="inmobiliaria"
                                    class="rounded-xl w-full h-[400px] object-cover">
                            </div>
                        </div>
    
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/img/image_18.png') }}" alt="inmobiliaria"
                                    class="rounded-xl w-full h-[400px] object-cover">
                            </div>
                        </div>
    
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/img/image_18.png') }}" alt="inmobiliaria"
                                    class="rounded-xl w-full h-[400px] object-cover">
                            </div>
                        </div>
    
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/img/image_18.png') }}" alt="inmobiliaria"
                                    class="rounded-xl w-full h-[400px] object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden">
                <img src="{{asset('images/img/image_31.png')}}" alt="mapa">
            </div>
        </section>

        <section>
            <div class="flex flex-col gap-5 w-11/12 mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-6 gap-5">
                    <div
                        class="bg-[#FFFFFF] rounded-xl p-4 md:p-8 order-1 lg:order-1 col-span-1 row-span-1 lg:col-span-4 lg:row-span-1 ">
                        <div class="flex flex-col gap-5">
                            <div class="flex justify-between items-center">
                                <div class="flex gap-2">
                                    <p class="font-normal font-roboto text-text16 text-[#000929] text-opacity-25">Inicio</p>
                                    <span> / </span>
                                    <p class="font-normal font-roboto text-text16 text-[#2E609D]">Apartamento</p>
                                </div>

                                <div class="flex justify-center items-center">
                                    <img src="{{ asset('images/svg/imagen_21.svg') }}" alt="configuraciones">
                                </div>
                            </div>

                            {{-- <div class="flex justify-between md:justify-start items-center gap-3" data-aos="fade-up" data-aos-duration="150">
                                <div
                                    class="flex justify-center items-center gap-2 bg-[#2E609D] py-2 px-3 rounded-lg border border-[#2E609D] cursor-pointer">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.4286 1.71094H0.571429C0.255357 1.71094 0 1.96629 0 2.28237V13.7109C0 14.027 0.255357 14.2824 0.571429 14.2824H15.4286C15.7446 14.2824 16 14.027 16 13.7109V2.28237C16 1.96629 15.7446 1.71094 15.4286 1.71094ZM14.7143 12.9967H1.28571V12.2842L3.75893 9.35022L6.43929 12.5288L10.6089 7.58594L14.7143 12.4538V12.9967ZM14.7143 10.6788L10.7179 5.93951C10.6607 5.87165 10.5571 5.87165 10.5 5.93951L6.43929 10.7538L3.86786 7.70558C3.81071 7.63772 3.70714 7.63772 3.65 7.70558L1.28571 10.5092V2.99665H14.7143V10.6788ZM4.28571 6.99665C4.49208 6.99665 4.69642 6.95601 4.88707 6.87703C5.07773 6.79806 5.25096 6.68231 5.39688 6.53639C5.5428 6.39047 5.65855 6.21724 5.73752 6.02658C5.8165 5.83593 5.85714 5.63159 5.85714 5.42522C5.85714 5.21886 5.8165 5.01452 5.73752 4.82386C5.65855 4.63321 5.5428 4.45998 5.39688 4.31406C5.25096 4.16813 5.07773 4.05238 4.88707 3.97341C4.69642 3.89444 4.49208 3.8538 4.28571 3.8538C3.86895 3.8538 3.46925 4.01936 3.17455 4.31406C2.87985 4.60876 2.71429 5.00846 2.71429 5.42522C2.71429 5.84199 2.87985 6.24169 3.17455 6.53639C3.46925 6.83109 3.86895 6.99665 4.28571 6.99665ZM4.28571 4.92522C4.5625 4.92522 4.78571 5.14844 4.78571 5.42522C4.78571 5.70201 4.5625 5.92522 4.28571 5.92522C4.00893 5.92522 3.78571 5.70201 3.78571 5.42522C3.78571 5.14844 4.00893 4.92522 4.28571 4.92522Z"
                                                fill="#E6FFFB" />
                                        </svg>

                                    </div>
                                    <p class="font-satoshiMedium text-text16 text-center text-white">Fotos</p>
                                </div>

                                <div
                                    class="flex justify-center items-center gap-2 bg-[#ffffff] py-2 px-3 rounded-lg border border-[#2E609D] cursor-pointer">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 18 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2.66602 4.6661C2.66602 4.482 2.81525 4.33276 2.99935 4.33276H10.3327C10.5168 4.33276 10.666 4.482 10.666 4.6661V7.99943V11.3328C10.666 11.5169 10.5168 11.6661 10.3327 11.6661H2.99935C2.81525 11.6661 2.66602 11.5169 2.66602 11.3328V4.6661ZM12.666 6.05624V4.6661C12.666 3.37743 11.6213 2.33276 10.3327 2.33276H2.99935C1.71068 2.33276 0.666016 3.37743 0.666016 4.6661V11.3328C0.666016 12.6214 1.71068 13.6661 2.99935 13.6661H10.3327C11.6213 13.6661 12.666 12.6214 12.666 11.3328V9.94262L15.7514 12.1465C16.0563 12.3642 16.4572 12.3933 16.7903 12.2219C17.1233 12.0505 17.3327 11.7074 17.3327 11.3328V4.6661C17.3327 4.29151 17.1233 3.94833 16.7903 3.77693C16.4572 3.60552 16.0563 3.63464 15.7514 3.85236L12.666 6.05624ZM15.3327 9.38957L13.3865 7.99943L15.3327 6.60929V9.38957Z"
                                                fill="#2E609D" />
                                        </svg>


                                    </div>
                                    <p class="font-satoshiMedium text-text16 text-center text-[#2E609D]">Videos</p>
                                </div>

                                <div
                                    class="flex justify-center items-center gap-2 bg-[#ffffff] py-2 px-3 rounded-lg border border-[#2E609D] cursor-pointer">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.33145 0.832765C5.23849 0.83299 5.15149 0.858584 5.077 0.90299L0.417946 3.56531C0.262159 3.65433 0.166016 3.82 0.166016 3.99943V14.6661C0.166016 14.8443 0.260895 15.0091 0.415052 15.0986C0.56921 15.188 0.759334 15.1886 0.914085 15.1002L5.34842 12.5663L10.4334 15.1088C10.4983 15.143 10.5716 15.1633 10.6495 15.1658C10.655 15.166 10.6605 15.1661 10.666 15.1661C10.7595 15.1661 10.8469 15.1405 10.9217 15.0958L15.5808 12.4336C15.7365 12.3445 15.8327 12.1789 15.8327 11.9994V1.33276C15.8327 1.15453 15.7378 0.98977 15.5836 0.900309C15.4295 0.810848 15.2394 0.810213 15.0846 0.898642L10.6503 3.43255L5.5653 0.890056C5.49671 0.85394 5.4187 0.833299 5.33592 0.832774L5.33268 0.832764L5.33145 0.832765ZM11.166 13.8045L14.8327 11.7093V2.19435L11.166 4.28959V13.8045ZM10.166 4.30845L5.83268 2.14178V11.6904L10.166 13.8571V4.30845ZM1.16602 4.28959L4.83268 2.19435V11.7093L1.16602 13.8045V4.28959Z"
                                                fill="#2E609D" />
                                        </svg>
                                    </div>
                                    <p class="font-satoshiMedium text-text16 text-center text-[#2E609D]">Mapa</p>
                                </div>
                            </div> --}}

                            <div class="flex flex-col gap-2">
                                <h2 class="text-[#000929] font-satoshiBold text-text28 md:text-text32 leading-tight">
                                    {{$inmueble->producto}}
                                </h2>
                                <div
                                    class="flex flex-col justify-start items-start md:flex-row md:justify-between md:items-center gap-2">
                                    <p class="text-[#000929] font-satoshiRegular text-text16">
                                       {{$inmueble->direction}}
                                    </p>
                                    <div class="flex gap-2 items-center justify-center">
                                        <div>
                                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.89258 3.91975C9.95151 3.91975 9.99972 3.87153 9.99972 3.8126V3.00903C9.99972 2.9501 9.95151 2.90189 9.89258 2.90189H7.69615V0.678676C7.69615 0.619747 7.64794 0.571533 7.58901 0.571533H6.73186C6.67294 0.571533 6.62472 0.619747 6.62472 0.678676V2.90189H3.57115V0.678676C3.57115 0.619747 3.52294 0.571533 3.46401 0.571533H2.60686C2.54794 0.571533 2.49972 0.619747 2.49972 0.678676V2.90189H0.249721C0.190792 2.90189 0.142578 2.9501 0.142578 3.00903V3.8126C0.142578 3.87153 0.190792 3.91975 0.249721 3.91975H2.49972V7.08046H0.249721C0.190792 7.08046 0.142578 7.12868 0.142578 7.18761V7.99118C0.142578 8.05011 0.190792 8.09832 0.249721 8.09832H2.49972V10.3215C2.49972 10.3805 2.54794 10.4287 2.60686 10.4287H3.46401C3.52294 10.4287 3.57115 10.3805 3.57115 10.3215V8.09832H6.62472V10.3215C6.62472 10.3805 6.67294 10.4287 6.73186 10.4287H7.58901C7.64794 10.4287 7.69615 10.3805 7.69615 10.3215V8.09832H9.89258C9.95151 8.09832 9.99972 8.05011 9.99972 7.99118V7.18761C9.99972 7.12868 9.95151 7.08046 9.89258 7.08046H7.69615V3.91975H9.89258ZM6.62472 7.08046H3.57115V3.91975H6.62472V7.08046Z"
                                                    fill="black" fill-opacity="0.85" />
                                            </svg>

                                        </div>
                                        <p class="font-satoshiRegular text-text14 text-[#000000]">
                                            Cod. imóvel {{-- 58756 --}} {{$inmueble->codigo}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="order-3 lg:order-3 col-span-1 row-span-1 lg:col-span-4 lg:row-span-1 bg-[#FAFAFA] flex flex-col gap-5">
                        <div class="bg-[#FFFFFF] flex flex-wrap justify-between items-center gap-5 rounded-xl p-4 md:p-8" data-aos="fade-up" data-aos-duration="150">
                            <div class="flex flex-col gap-2">
                                <div class="flex justify-center items-center">
                                    <img src="{{ asset('images/svg/imagen_26.svg') }}" alt="metros">
                                </div>
                                <p class="font-satoshiRegular text-text16 text-[#000929]">
                                    {{-- 65m --}} {{$inmueble->area}}m
                                    <sup>2</sup></p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <div class="flex justify-center items-center">
                                    <img src="{{ asset('images/svg/imagen_27.svg') }}" alt="metros">
                                </div>
                                <p class="font-satoshiRegular text-text16 text-[#000929]">{{-- 2 --}}
                                    {{$inmueble->cuartos}}
                                    cuartos</p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <div class="flex justify-center items-center">
                                    <img src="{{ asset('images/svg/imagen_28.svg') }}" alt="baños">
                                </div>
                                <p class="font-satoshiRegular text-text16 text-[#000929]">{{-- 2 --}}
                                    {{$inmueble->banios}}
                                     baños</p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <div class="flex justify-center items-center">
                                    <img src="{{ asset('images/svg/imagen_29.svg') }}" alt="vagas">
                                </div>
                                <p class="font-satoshiRegular text-text16 text-[#000929]">{{-- 2 vagas --}}
                                    {{$inmueble->cochera}} cochera
                                </p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <div class="flex justify-center items-center">
                                    <img src="{{ asset('images/svg/imagen_30.svg') }}" alt="andar">
                                </div>
                                <p class="font-satoshiRegular text-text16 text-[#000929]">
                                    {{$inmueble->pisos}} pisos
                                </p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <div class="flex justify-center items-center">
                                    <img src="{{ asset('images/svg/imagen_31.svg') }}" alt="aceita">
                                </div>
                                <p class="font-satoshiRegular text-text16 text-[#000929] text-center">{{-- Aceita --}}
                                    @if ($inmueble->mascota == 1)
                                        Mascotas
                                    @else
                                        No mascotas
                                    @endif
                                </p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <div class="flex justify-center items-center">
                                    <img src="{{ asset('images/svg/imagen_32.svg') }}" alt="mobiliado">
                                </div>
                                <p class="font-satoshiRegular text-text16 text-[#000929]">{{-- Mobiliado --}}
                                    @if ($inmueble->mobiliado == 1)
                                        Mobiliado
                                    @else
                                        No mobiliado
                                    @endif
                                </p>
                            </div>

                            <div class="flex flex-col gap-2">
                                <div class="flex justify-center items-center">
                                    <img src="{{ asset('images/svg/imagen_33.svg') }}" alt="proximo">
                                </div>
                                <p class="font-satoshiRegular text-text16 text-[#000929]">Próximo</p>
                            </div>


                        </div>

                        <div class="bg-[#FFFFFF] px-4 py-6 md:p-8 rounded-xl" data-aos="fade-up" data-aos-duration="150">
                            <div class="flex flex-col gap-10">
                                <div class="flex gap-5 justify-start items-start w-full" >
                                    <div class="flex justify-center items-center">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="40" height="40" rx="20" fill="#2E609D" />
                                            <path d="M23.8281 18.4685H13.1074" stroke="white" stroke-width="1.53153"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M26.8912 15.4053H13.1074" stroke="white" stroke-width="1.53153"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M26.8912 21.5315H13.1074" stroke="white" stroke-width="1.53153"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M23.8281 24.5945H13.1074" stroke="white" stroke-width="1.53153"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <h3 class="font-satoshiBold text-text24 leading-tight">Acerca de esta propiedad
                                        </h3>
                                        <div class="text-[#808494] font-satoshiRegular text-text16">
                                        {!!$inmueble->description!!}    
                                        </div>
                                    </div>
                                </div>

                                <div class="flex gap-5 justify-start items-start w-full" data-aos="fade-up" data-aos-duration="150">
                                    <div class="flex justify-center items-center">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="40.0016" height="40.0016" rx="20.0008" fill="#2E609D" />
                                            <path
                                                d="M22.2981 23.8301C21.6858 24.3067 20.8815 24.5959 20.0006 24.5959C19.1197 24.5959 18.3154 24.3067 17.7031 23.8301"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                            <path
                                                d="M12.6109 20.9302C12.3405 19.1709 12.2054 18.2912 12.538 17.5114C12.8706 16.7316 13.6085 16.1981 15.0844 15.131L16.187 14.3337C18.023 13.0063 18.941 12.3425 20.0001 12.3425C21.0593 12.3425 21.9773 13.0063 23.8132 14.3337L24.9159 15.131C26.3918 16.1981 27.1297 16.7316 27.4623 17.5114C27.7949 18.2912 27.6597 19.1709 27.3893 20.9302L27.1588 22.4304C26.7756 24.9243 26.5839 26.1713 25.6895 26.9153C24.7951 27.6592 23.4875 27.6592 20.8722 27.6592H19.128C16.5128 27.6592 15.2052 27.6592 14.3108 26.9153C13.4163 26.1713 13.2247 24.9243 12.8414 22.4304L12.6109 20.9302Z"
                                                stroke="white" stroke-width="1.5" stroke-linejoin="round" />
                                        </svg>

                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <h3 class="font-satoshiBold text-text24 leading-tight">Inmmueble</h3>
                                        <div class="flex flex-col gap-5">
                                            <div class="flex flex-col gap-2">
                                                <p class="font-satoshiBold text-text18 leading-tight">Incluye</p>
                                                <div class="text-[#808494] font-satoshiRegular text-text16">
                                                    {!!$inmueble->incluye!!}    
                                                    </div>
                                            </div>

                                            <div class="flex flex-col gap-2">
                                                <p class="font-satoshiBold text-text18 leading-tight">No Incluye</p>
                                                <div class="text-[#808494] font-satoshiRegular text-text16">
                                                    {!!$inmueble->no_incluye!!}    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="flex gap-5 justify-start items-start w-full" data-aos="fade-up" data-aos-duration="150">
                                    <div class="flex justify-center items-center">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.00146484" width="40.0016" height="40.0016" rx="20.0008"
                                                fill="#2E609D" />
                                            <path
                                                d="M21.3232 13.4497L22.6709 16.1675C22.8547 16.5458 23.3448 16.9087 23.7583 16.9781L26.201 17.3873C27.7632 17.6498 28.1308 18.7925 27.0051 19.9198L25.106 21.8345C24.7844 22.1587 24.6083 22.7841 24.7078 23.232L25.2515 25.6022C25.6803 27.4784 24.6925 28.2042 23.0462 27.2236L20.7565 25.857C20.3431 25.61 19.6616 25.61 19.2403 25.857L16.9508 27.2236C15.3121 28.2042 14.3166 27.4706 14.7454 25.6022L15.2891 23.232C15.3887 22.7841 15.2125 22.1587 14.8909 21.8345L12.9919 19.9198C11.8739 18.7925 12.2338 17.6498 13.7959 17.3873L16.2386 16.9781C16.6445 16.9087 17.1346 16.5458 17.3183 16.1675L18.666 13.4497C19.4012 11.9751 20.5957 11.9751 21.3232 13.4497Z"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <h3 class="font-satoshiBold text-text24 leading-tight">Condominio Saint Exupéry
                                        </h3>
                                        <div class="flex flex-col gap-5">
                                            <div class="flex flex-col gap-2">
                                                <p class="font-satoshiBold text-text18 leading-tight">Disponible</p>
                                                <p class="text-[#808494] font-satoshiRegular text-text16">Piscina,
                                                    Gimnasio, Salón
                                                    de fiestas, Sauna, Lavandería en el edificio, Ascensor, Conserjería 24
                                                    horas.
                                                </p>
                                            </div>

                                            <div class="flex flex-col gap-2">
                                                <p class="font-satoshiBold text-text18 leading-tight">Indisponible</p>
                                                <p class="text-[#808494] font-satoshiRegular text-text16">Obtenga más
                                                    información y
                                                    vea si hay otros apartamentos disponibles allí.</p>
                                            </div>

                                            <div class="flex flex-col gap-2">
                                                <p class="font-satoshiBold text-text18 leading-tight">¿Te gustó el
                                                    condominio?</p>
                                                <p class="text-[#808494] font-satoshiRegular text-text16">Obtenga más
                                                    información y
                                                    vea si hay otros apartamentos disponibles allí.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- <div class="flex gap-5 justify-start items-start w-full bg-[#F7F7FD] p-5 rounded-xl" data-aos="fade-up" data-aos-duration="150">
                                    <div class="flex justify-center items-center">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.00317383" width="40.0016" height="40.0016" rx="20.0008"
                                                fill="#2E609D" />
                                            <path
                                                d="M24.2132 14.6431C24.8476 14.6431 25.362 15.1574 25.362 15.7918C25.362 16.4263 24.8476 16.9406 24.2132 16.9406C23.5788 16.9406 23.0645 16.4263 23.0645 15.7918C23.0645 15.1574 23.5788 14.6431 24.2132 14.6431Z"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M12.9347 19.3484C12.1665 20.2064 12.15 21.5009 12.855 22.4116C14.2542 24.2186 15.7856 25.75 17.5926 27.1491C18.5032 27.8542 19.7977 27.8377 20.6558 27.0695C22.9853 24.9836 25.1186 22.8038 27.1774 20.4083C27.381 20.1715 27.5083 19.8813 27.5369 19.5703C27.6632 18.1951 27.9228 14.2332 26.8469 13.1573C25.7709 12.0813 21.809 12.3409 20.4339 12.4673C20.1229 12.4959 19.8326 12.6232 19.5958 12.8267C17.2003 14.8856 15.0205 17.0189 12.9347 19.3484Z"
                                                stroke="white" stroke-width="1.5" />
                                            <path
                                                d="M21.3703 20.2847C21.3866 19.9776 21.4728 19.4159 21.0059 18.9889M21.0059 18.9889C20.8614 18.8568 20.6639 18.7375 20.395 18.6428C19.4327 18.3036 18.2507 19.4388 19.0868 20.4779C19.5363 21.0365 19.8829 21.2083 19.8502 21.8427C19.8273 22.2888 19.389 22.7551 18.8113 22.9326C18.3094 23.0869 17.7559 22.8827 17.4057 22.4914C16.9782 22.0137 17.0214 21.5634 17.0177 21.3671M21.0059 18.9889L21.5328 18.4619M17.4438 22.5509L16.9434 23.0514"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <h3 class="font-satoshiBold text-text24 leading-tight">¿Pensó en comprar?
                                        </h3>
                                        <p class="text-[#808494] font-satoshiRegular text-text16">También puedes comprar
                                            esta propiedad. Valor de compra: S/ 300.000</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="bg-[#FAFAFA] order-2 lg:order-2 col-span-1 row-span-1 lg:col-span-2 lg:row-span-2" data-aos="fade-up" data-aos-duration="150">
                        <div class="bg-[#F7F7FD] md:bg-[#FFFFFF]  rounded-xl px-4 py-6 md:p-8 ">
                            <div class="flex flex-col gap-10">
                                <div class="flex justify-between items-center">
                                    <p class="font-satoshiBold text-text16 text-[#000929]">Alquiler</p>
                                    <p class="font-satoshiBold text-text18 text-[#000929]">R$ 5.700</p>
                                </div>

                               {{--  <div class="flex flex-col gap-1 pb-5">
                                    <div class="flex justify-between items-center">
                                        <div class="flex justify-center items-center gap-2">
                                            <p class="font-satoshiRegular text-text16 text-[#000929] text-opacity-50">
                                                Condominio</p>
                                            <div class="flex justify-center items-center">
                                                <img src="{{ asset('images/svg/imagen_34.svg') }}" alt="condominio">
                                            </div>
                                        </div>
                                        <p class="font-satoshiRegular text-text16 text-[#000929] text-opacity-50">R$ 5.700
                                        </p>
                                    </div>

                                    <div class="flex justify-between items-center">
                                        <div class="flex justify-center items-center gap-2">
                                            <p class="font-satoshiRegular text-text16 text-[#000929] text-opacity-50">IGV
                                            </p>
                                            <div class="flex justify-center items-center">
                                                <img src="{{ asset('images/svg/imagen_34.svg') }}" alt="condominio">
                                            </div>
                                        </div>
                                        <p class="font-satoshiRegular text-text16 text-[#000929] text-opacity-50">R$ 5.700
                                        </p>
                                    </div>

                                    <div class="flex justify-between items-center">
                                        <div class="flex justify-center items-center gap-2">
                                            <p class="font-satoshiRegular text-text16 text-[#000929] text-opacity-50">
                                                Seguro
                                                incendio</p>
                                            <div class="flex justify-center items-center">
                                                <img src="{{ asset('images/svg/imagen_34.svg') }}" alt="condominio">
                                            </div>
                                        </div>
                                        <p class="font-satoshiRegular text-text16 text-[#000929] text-opacity-50">R$ 5.700
                                        </p>
                                    </div>

                                    <div class="flex justify-between items-center">
                                        <div class="flex justify-center items-center gap-2">
                                            <p class="font-satoshiRegular text-text16 text-[#000929] text-opacity-50">Tasa
                                                de
                                                servicio</p>
                                            <div class="flex justify-center items-center">
                                                <img src="{{ asset('images/svg/imagen_34.svg') }}" alt="condominio">
                                            </div>
                                        </div>
                                        <p class="font-satoshiRegular text-text16 text-[#000929] text-opacity-50">R$ 5.700
                                        </p>
                                    </div>

                                </div> --}}
                            </div>

                            {{-- <div class="border-t border-[#2E609D] py-5 flex justify-between items-center">
                                <p class="font-satoshiBold text-text18 text-[#000929]">Total</p>
                                <p class="font-satoshiBold text-text18 text-[#000929]">R$ 7.872</p>
                            </div> --}}

                            <div class="w-full flex flex-col gap-5">
                                <a href=""
                                    class="w-full flex justify-center items-center gap-2 bg-[#2E609D] text-white font-satoshiBold text-text16 py-4 px-8 rounded-lg">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset('images/svg/imagen_35.svg') }}" alt="agendar">
                                    </div>
                                    Agendar visita
                                </a>

                                {{-- <a href=""
                                    class="w-full flex justify-center items-center gap-2 border border-[#2E609D] text-[#2E609D] font-satoshiBold text-text16 py-4 px-8 rounded-lg">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset('images/svg/imagen_51.svg') }}" alt="agendar">
                                    </div>
                                    Agendar visita
                                </a> --}}
                            </div>

                        </div>
                    </div>


                    {{-- <div
                        class="bg-[#FFFFFF]  rounded-xl p-4 md:p-8 order-4 lg:order-4 col-span-4 row-span-1 lg:row-span-1">
                        <p>nuevo</p>
                    </div> --}}
                </div>

                {{-- <div class="bg-[#FFFFFF] ">
                    <div class="flex flex-col gap-10">
                        <div class="flex gap-5 justify-start items-start w-full">
                            <div class="flex justify-center items-center">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="40" height="40" rx="20" fill="#2E609D" />
                                    <path d="M23.8281 18.4685H13.1074" stroke="white" stroke-width="1.53153"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M26.8912 15.4053H13.1074" stroke="white" stroke-width="1.53153"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M26.8912 21.5315H13.1074" stroke="white" stroke-width="1.53153"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M23.8281 24.5945H13.1074" stroke="white" stroke-width="1.53153"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-satoshiBold text-text24 leading-tight">Acerca de esta propiedad</h3>
                                <p class="text-[#808494] font-satoshiRegular text-text16">Se alquila acogedor piso de 2
                                    habitaciones, 1 suite y 2 baños en total.
                                    Este apartamento es bueno para quienes buscan comodidad y conveniencia y está ubicado en
                                    el octavo piso. El condominio está bien equipado con diversas instalaciones y está
                                    ubicado en Calle Leopoldo Couto en el distrito de San Isidro en Lima. Está bien ubicado,
                                    cerca de puntos de interés de Itaim Bibi, como Hospital do Coração, Grupo Escolar Martim
                                    Francisco, Museu Casa Peruana, FMU, Colégio Maria Magdalena y Parque Nuevo.</p>
                            </div>
                        </div>

                        <div class="flex gap-5 justify-start items-start w-full">
                            <div class="flex justify-center items-center">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="40.0016" height="40.0016" rx="20.0008" fill="#2E609D" />
                                    <path
                                        d="M22.2981 23.8301C21.6858 24.3067 20.8815 24.5959 20.0006 24.5959C19.1197 24.5959 18.3154 24.3067 17.7031 23.8301"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                    <path
                                        d="M12.6109 20.9302C12.3405 19.1709 12.2054 18.2912 12.538 17.5114C12.8706 16.7316 13.6085 16.1981 15.0844 15.131L16.187 14.3337C18.023 13.0063 18.941 12.3425 20.0001 12.3425C21.0593 12.3425 21.9773 13.0063 23.8132 14.3337L24.9159 15.131C26.3918 16.1981 27.1297 16.7316 27.4623 17.5114C27.7949 18.2912 27.6597 19.1709 27.3893 20.9302L27.1588 22.4304C26.7756 24.9243 26.5839 26.1713 25.6895 26.9153C24.7951 27.6592 23.4875 27.6592 20.8722 27.6592H19.128C16.5128 27.6592 15.2052 27.6592 14.3108 26.9153C13.4163 26.1713 13.2247 24.9243 12.8414 22.4304L12.6109 20.9302Z"
                                        stroke="white" stroke-width="1.5" stroke-linejoin="round" />
                                </svg>

                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-satoshiBold text-text24 leading-tight">Inmmueble</h3>
                                <div class="flex flex-col gap-5">
                                    <div class="flex flex-col gap-2">
                                        <p class="font-satoshiBold text-text18 leading-tight">Incluye</p>
                                        <p class="text-[#808494] font-satoshiRegular text-text16">Se alquila acogedor piso
                                            de 2 habitaciones, 1 suite y 2 baños en total.
                                            Caja de cristal, Armarios empotrados en el dormitorio, Armarios en los baños,
                                            Armarios en la cocina, Aire acondicionado, Ducha de gas, Frigorífico incluido.
                                        </p>
                                    </div>

                                    <div class="flex flex-col gap-2">
                                        <p class="font-satoshiBold text-text18 leading-tight">No Incluye</p>
                                        <p class="text-[#808494] font-satoshiRegular text-text16">Bañera de hidromasaje,
                                            Piscina privada, Cuarto de servicio, Baño de servicio, Balcón gourmet,
                                            Apartamento Penthouse, Habitación extra reversible, Estufa incluida.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-5 justify-start items-start w-full">
                            <div class="flex justify-center items-center">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.00146484" width="40.0016" height="40.0016" rx="20.0008"
                                        fill="#2E609D" />
                                    <path
                                        d="M21.3232 13.4497L22.6709 16.1675C22.8547 16.5458 23.3448 16.9087 23.7583 16.9781L26.201 17.3873C27.7632 17.6498 28.1308 18.7925 27.0051 19.9198L25.106 21.8345C24.7844 22.1587 24.6083 22.7841 24.7078 23.232L25.2515 25.6022C25.6803 27.4784 24.6925 28.2042 23.0462 27.2236L20.7565 25.857C20.3431 25.61 19.6616 25.61 19.2403 25.857L16.9508 27.2236C15.3121 28.2042 14.3166 27.4706 14.7454 25.6022L15.2891 23.232C15.3887 22.7841 15.2125 22.1587 14.8909 21.8345L12.9919 19.9198C11.8739 18.7925 12.2338 17.6498 13.7959 17.3873L16.2386 16.9781C16.6445 16.9087 17.1346 16.5458 17.3183 16.1675L18.666 13.4497C19.4012 11.9751 20.5957 11.9751 21.3232 13.4497Z"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>


                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-satoshiBold text-text24 leading-tight">Condominio Saint Exupéry</h3>
                                <div class="flex flex-col gap-5">
                                    <div class="flex flex-col gap-2">
                                        <p class="font-satoshiBold text-text18 leading-tight">Disponible</p>
                                        <p class="text-[#808494] font-satoshiRegular text-text16">Piscina, Gimnasio, Salón
                                            de fiestas, Sauna, Lavandería en el edificio, Ascensor, Conserjería 24 horas.
                                        </p>
                                    </div>

                                    <div class="flex flex-col gap-2">
                                        <p class="font-satoshiBold text-text18 leading-tight">Indisponible</p>
                                        <p class="text-[#808494] font-satoshiRegular text-text16">Obtenga más información y
                                            vea si hay otros apartamentos disponibles allí.</p>
                                    </div>

                                    <div class="flex flex-col gap-2">
                                        <p class="font-satoshiBold text-text18 leading-tight">¿Te gustó el condominio?</p>
                                        <p class="text-[#808494] font-satoshiRegular text-text16">Obtenga más información y
                                            vea si hay otros apartamentos disponibles allí.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

        </section>
        {{-- --- --}}

        <section class="w-11/12 mx-auto pt-10 pb-20">
            <h3 class="text-[#000929] font-satoshiBold text-text28 py-10">Propiedades similares</h3>
            <div>
                <div class="swiper propiedades z-[10]">
                    <div class="swiper-wrapper z-[10]">
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

                                        <p class="text-[#100A55] opacity-40 font-satoshiMedium text-text12 text-opacity-40">
                                            Hasta 30% de descuento programa...
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

                                        <p class="text-[#100A55] opacity-40 font-satoshiMedium text-text12 text-opacity-40">
                                            Hasta 30% de descuento programa...
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

                                        <p class="text-[#100A55] opacity-40 font-satoshiMedium text-text12 text-opacity-40">
                                            Hasta 30% de descuento programa...
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
                    </div>
                </div>
            </div>
        </section>
    </main>


@section('scripts_importados')
    <script>
        var slider = new Swiper(".slider_propiedades", {
            slidesPerView: 2,
            spaceBetween: 20,
            loop: true,
            grabCursor: true,
            centeredSlides: true,
            initialSlide: 0,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    centeredSlides: false,
                },
                768: {
                    slidesPerView: 2,
                    centeredSlides: true,
                },
            },
        });
    </script>

    <script>
        var slider = new Swiper(".propiedades", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            initialSlide: 0,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
            },
        });
    </script>

@stop

@stop

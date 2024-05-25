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
        <section class="w-11/12 mx-auto flex flex-col gap-10 md:gap-20 pt-32">
            <div class=" w-full md:max-w-[740px] mx-auto flex flex-col gap-3" data-aos="fade-up" data-aos-duration="150">
                <h2 class="text-[#000929] text-text44 md:text-text64 font-satoshiBold leading-tight text-center">Compra,
                    alquila o vende tu
                    propiedad <span class="text-[#2E609D]">fácilmente</span> </h2>
                <p class="text-[#000929] text-opacity-50 text-text18 text-center">Una gran plataforma para comprar, vender o
                    incluso alquilar tus propiedades sin comisiones.</p>
            </div>

            <div class="relative">
                <img src="{{ asset('images/img/image_19.png') }}" alt="inmobiliaria"
                    class="h-[223px] w-full md:h-[800px] object-cover rounded-xl">
                <div class="flex justify-center max-w-[848px] mx-auto gap-2 md:gap-5 absolute left-0 right-0 -bottom-[18%] md:bottom-[5%]"
                    data-aos="fade-up" data-aos-duration="150">
                    <div
                        class="flex flex-col gap-2 bg-[#F7F7FD] rounded-xl p-2 md:p-5 max-w-[96px] md:max-w-[210px] lg:max-w-[270px] flex-1">
                        <p class="font-satoshiBold text-text20 md:text-text40 text-[#000929] leading-tight">200+</p>
                        <p class="font-satoshiRegular text-text8 md:text-text18 text-[#000929]">Clientes felices</p>
                    </div>

                    <div
                        class="flex flex-col gap-2 bg-[#F7F7FD] rounded-xl p-2 md:p-5 max-w-[96px] md:max-w-[210px] lg:max-w-[270px] flex-1">
                        <p class="font-satoshiBold text-text20 md:text-text40 text-[#000929] leading-tight">10k+</p>
                        <p class="font-satoshiRegular text-text8 md:text-text18 text-[#000929]">Propiedades para clientes
                        </p>
                    </div>

                    <div
                        class="flex flex-col gap-2 bg-[#F7F7FD] rounded-xl p-2 md:p-5 max-w-[96px] md:max-w-[210px] lg:max-w-[270px] flex-1">
                        <p class="font-satoshiBold text-text20 md:text-text40 text-[#000929] leading-tight">16+</p>
                        <p class="font-satoshiRegular text-text8 md:text-text18 text-[#000929]">Años de experiencia</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="flex flex-col lg:flex-row justify-between items-center w-11/12 mx-auto pt-20 gap-10">
                <div class="flex flex-col gap-5 lg:basis-2/6 items-center">
                    <div class="w-full lg:max-w-[420px] flex flex-col gap-5" data-aos="fade-up" data-aos-duration="150">
                        <h3 class="text-[#000929] font-satoshiBold text-text32 md:text-text40 leading-tight">Nuestros
                            <span class="text-[#2E609D]">valores</span>
                        </h3>
                        <p class="text-[#000929] text-opacity-50 font-satoshiRegular text-text18 md:text-text20">
                            Nuestra historia es de continuo crecimiento y evolución. Comenzamos como un pequeño equipo con
                            grandes sueños, decididos a crear una plataforma inmobiliaria que trascendiera lo común.
                        </p>

                        <div class="hidden md:flex justify-start items-center">
                            <a href="{{ route('propiedades') }}"
                                class="bg-[#051437] text-white py-4 px-8 rounded-lg">Explorar
                                propiedades</a>
                        </div>
                    </div>
                </div>

                <div class="lg:basis-4/6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="flex flex-col gap-3 bg-[#F7F7FD] rounded-xl p-5 group hover:bg-[#2E609D] md:duration-300"
                            data-aos="fade-up" data-aos-duration="150">
                            <div class="flex gap-4 justify-start items-center">
                                <div>
                                    <svg width="74" height="75" viewBox="0 0 74 75" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.52002" width="74" height="74" rx="37" fill="#5880B1"
                                            class="group-hover:fill-fillWithe md:duration-300" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M35.2835 25.0684C35.9187 23.5413 38.082 23.5413 38.7171 25.0684L41.6666 32.1598L49.3224 32.7736C50.971 32.9058 51.6395 34.9632 50.3835 36.0391L44.5506 41.0357L46.3326 48.5064C46.7164 50.1152 44.9662 51.3867 43.5548 50.5246L37.0003 46.5212L30.4459 50.5246C29.0345 51.3867 27.2843 50.1152 27.6681 48.5064L29.4501 41.0357L23.6172 36.0391C22.3611 34.9632 23.0296 32.9058 24.6783 32.7736L32.3341 32.1598L35.2835 25.0684Z"
                                            fill="#F7F7FD" class="group-hover:fill-fillAzul md:duration-300" />
                                    </svg>
                                </div>
                                <h3
                                    class="text-[#000929] font-satoshiBold text-text20 md:text-text24 group-hover:text-white md:duration-300">
                                    Confianza</h3>
                            </div>
                            <p
                                class="text-[#000929] text-opacity-50 text-text18 font-satoshiRegular group-hover:text-white md:duration-300">
                                La confianza es la piedra angular de toda transacción inmobiliaria exitosa.
                            </p>
                        </div>

                        <div class="flex flex-col gap-3 bg-[#F7F7FD] rounded-xl p-5 group hover:bg-[#2E609D] md:duration-300"
                            data-aos="fade-up" data-aos-duration="150">
                            <div class="flex gap-4 justify-start items-center">
                                <div>

                                    <svg width="74" height="75" viewBox="0 0 74 75" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.52002" width="74" height="74" rx="37" fill="#5880B1"
                                            class="group-hover:fill-fillWithe md:duration-300" />
                                        <path
                                            d="M36.5721 24.4941C36.8434 24.3756 37.1517 24.3756 37.4229 24.4941C42.6913 26.796 47.6843 29.6098 52.3393 32.8727C52.6761 33.1088 52.8464 33.5182 52.7764 33.9236C52.7064 34.329 52.4087 34.6575 52.0121 34.7669C51.0418 35.0348 50.0799 35.3232 49.1267 35.6306C45.2577 36.8784 41.5333 38.4484 37.9851 40.3091L37.9804 40.3115C37.8196 40.3959 37.659 40.4809 37.4989 40.5664C37.186 40.7336 36.8103 40.7336 36.4975 40.5664C36.3358 40.4801 36.1737 40.3943 36.0113 40.3091C34.2568 39.3891 32.4593 38.5401 30.6224 37.766V37.4491C30.6224 37.263 30.7179 37.0979 30.8657 37.0084C32.998 35.7166 35.1974 34.5247 37.4575 33.4391C37.9864 33.185 38.2092 32.5503 37.9552 32.0213C37.7011 31.4924 37.0664 31.2695 36.5374 31.5236C34.2151 32.639 31.9553 33.8637 29.7646 35.1909C29.1223 35.58 28.6906 36.2169 28.5485 36.9303C27.3374 36.4645 26.1103 36.0305 24.8684 35.63C23.9152 35.3226 22.9532 35.0347 21.983 34.7669C21.5864 34.6575 21.2887 34.3289 21.2187 33.9236C21.1486 33.5182 21.3189 33.1088 21.6558 32.8727C26.3107 29.6098 31.3038 26.796 36.5721 24.4941Z"
                                            fill="#ffffff" class="group-hover:fill-fillAzul md:duration-300" />
                                        <path
                                            d="M38.5003 42.4407C41.9554 40.5946 45.5854 39.0339 49.359 37.79C49.5492 39.7943 49.6706 41.8185 49.7209 43.8603C49.7317 44.2983 49.4724 44.6981 49.0681 44.8669C45.029 46.5533 41.187 48.6182 37.5867 51.0175C37.2299 51.2553 36.7651 51.2553 36.4083 51.0175C32.8079 48.6182 28.966 46.5533 24.9269 44.8669C24.5225 44.6981 24.2632 44.2983 24.274 43.8603C24.3243 41.8184 24.4458 39.794 24.636 37.7895C25.9407 38.2196 27.2283 38.6875 28.4974 39.192V40.9918C27.8623 41.3592 27.4349 42.0459 27.4349 42.8325C27.4349 43.5342 27.775 44.1565 28.2994 44.5434C28.1726 45.0826 27.9849 45.6103 27.7364 46.1156C28.3777 46.4183 29.0135 46.7307 29.6437 47.0527C30.0026 46.3227 30.2628 45.5566 30.4243 44.7743C31.1671 44.4432 31.6849 43.6983 31.6849 42.8325C31.6849 42.0459 31.2576 41.3592 30.6224 40.9918V40.0784C32.2819 40.8034 33.9075 41.5919 35.496 42.4407C36.4347 42.9422 37.5617 42.9422 38.5003 42.4407Z"
                                            fill="#ffffff" class="group-hover:fill-fillAzul md:duration-300" />
                                        <path
                                            d="M26.3189 48.0916C26.9127 47.4978 27.3854 46.829 27.7364 46.1156C28.3777 46.4183 29.0135 46.7307 29.6437 47.0527C29.1924 47.9705 28.5848 48.8309 27.8215 49.5942C27.4066 50.0091 26.7339 50.0091 26.3189 49.5942C25.904 49.1792 25.904 48.5065 26.3189 48.0916Z"
                                            fill="#ffffff" class="group-hover:fill-fillAzul md:duration-300" />
                                    </svg>
                                </div>
                                <h3
                                    class="text-[#000929] font-satoshiBold text-text20 md:text-text24 group-hover:text-white md:duration-300">
                                    Excelencia</h3>
                            </div>
                            <p
                                class="text-[#000929] text-opacity-50 text-text18 font-satoshiRegular group-hover:text-white md:duration-300">
                                Nos ponemos el listón muy alto. Desde las propiedades que listamos hasta los servicios que
                                brindamos.
                            </p>
                        </div>

                        <div class="flex flex-col gap-3 bg-[#F7F7FD] rounded-xl p-5 group hover:bg-[#2E609D] md:duration-300"
                            data-aos="fade-up" data-aos-duration="150">
                            <div class="flex gap-4 justify-start items-center">
                                <div>
                                    <svg width="74" height="75" viewBox="0 0 74 75" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.52002" width="74" height="74" rx="37" fill="#5880B1"
                                            class="group-hover:fill-fillWithe md:duration-300" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M31.6875 30.0825C31.6875 27.1485 34.066 24.77 37 24.77C39.934 24.77 42.3125 27.1485 42.3125 30.0825C42.3125 33.0165 39.934 35.395 37 35.395C34.066 35.395 31.6875 33.0165 31.6875 30.0825Z"
                                            fill="white" class="group-hover:fill-fillAzul md:duration-300" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.3125 34.3325C42.3125 31.9853 44.2153 30.0825 46.5625 30.0825C48.9097 30.0825 50.8125 31.9853 50.8125 34.3325C50.8125 36.6797 48.9097 38.5825 46.5625 38.5825C44.2153 38.5825 42.3125 36.6797 42.3125 34.3325Z"
                                            fill="white" class="group-hover:fill-fillAzul md:duration-300" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M23.1875 34.3325C23.1875 31.9853 25.0903 30.0825 27.4375 30.0825C29.7847 30.0825 31.6875 31.9853 31.6875 34.3325C31.6875 36.6797 29.7847 38.5825 27.4375 38.5825C25.0903 38.5825 23.1875 36.6797 23.1875 34.3325Z"
                                            fill="white" class="group-hover:fill-fillAzul md:duration-300" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M28.939 41.9365C30.6361 39.2829 33.6118 37.52 37 37.52C40.3886 37.52 43.3646 39.2834 45.0617 41.9375C46.2349 43.7724 46.7425 45.9849 46.5044 48.1421C46.4672 48.4792 46.2712 48.7783 45.9771 48.9471C43.3317 50.465 40.2655 51.3325 37 51.3325C33.7345 51.3325 30.6683 50.465 28.0229 48.9471C27.7288 48.7783 27.5328 48.4792 27.4956 48.1421C27.2575 45.9845 27.7653 43.7716 28.939 41.9365Z"
                                            fill="white" class="group-hover:fill-fillAzul md:duration-300" />
                                        <path
                                            d="M27.1999 40.7127C27.1828 40.7389 27.1659 40.7652 27.149 40.7916C25.7813 42.9301 25.1554 45.477 25.3475 47.9878C24.4861 47.8569 23.6503 47.6465 22.8481 47.364L22.6852 47.3066C22.3882 47.202 22.1806 46.9322 22.1556 46.6182L22.1419 46.4461C22.1307 46.3053 22.125 46.1632 22.125 46.02C22.125 43.1656 24.3761 40.837 27.1999 40.7127Z"
                                            fill="white" class="group-hover:fill-fillAzul md:duration-300" />
                                        <path
                                            d="M48.653 47.9877C48.8451 45.4774 48.2195 42.9311 46.8522 40.7928C46.8351 40.766 46.8179 40.7394 46.8006 40.7128C49.6241 40.8373 51.875 43.1658 51.875 46.02C51.875 46.1632 51.8693 46.3053 51.8581 46.4461L51.8444 46.6182C51.8194 46.9322 51.6118 47.202 51.3148 47.3066L51.1519 47.364C50.3498 47.6464 49.5142 47.8569 48.653 47.9877Z"
                                            fill="white" class="group-hover:fill-fillAzul md:duration-300" />
                                    </svg>


                                </div>
                                <h3
                                    class="text-[#000929] font-satoshiBold text-text20 md:text-text24 group-hover:text-white md:duration-300">
                                    Centrado en el cliente</h3>
                            </div>
                            <p
                                class="text-[#000929] text-opacity-50 text-text18 font-satoshiRegular group-hover:text-white md:duration-300">
                                Tus sueños y necesidades están en el centro de nuestro universo. Escuchamos, entendemos.
                            </p>
                        </div>

                        <div class="flex flex-col gap-3 bg-[#F7F7FD] rounded-xl p-5 group hover:bg-[#2E609D] md:duration-300"
                            data-aos="fade-up" data-aos-duration="150">
                            <div class="flex gap-4 justify-start items-center">
                                <div>

                                    <svg width="74" height="75" viewBox="0 0 74 75" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.52002" width="74" height="74" rx="37" fill="#5880B1"
                                            class="group-hover:fill-fillWithe md:duration-300" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M35.2835 25.0684C35.9187 23.5413 38.082 23.5413 38.7171 25.0684L41.6666 32.1598L49.3224 32.7736C50.971 32.9058 51.6395 34.9632 50.3835 36.0391L44.5506 41.0357L46.3326 48.5064C46.7164 50.1152 44.9662 51.3867 43.5548 50.5246L37.0003 46.5212L30.4459 50.5246C29.0345 51.3867 27.2843 50.1152 27.6681 48.5064L29.4501 41.0357L23.6172 36.0391C22.3611 34.9632 23.0296 32.9058 24.6783 32.7736L32.3341 32.1598L35.2835 25.0684Z"
                                            fill="#F7F7FD" class="group-hover:fill-fillAzul md:duration-300" />
                                    </svg>
                                </div>
                                <h3
                                    class="text-[#000929] font-satoshiBold text-text20 md:text-text24 group-hover:text-white md:duration-300">
                                    Nuestro compromiso</h3>
                            </div>
                            <p
                                class="text-[#000929] text-opacity-50 text-text18 font-satoshiRegular group-hover:text-white md:duration-300">
                                Estamos dedicados a brindarle el más alto nivel de servicio, profesionalismo y soporte.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <section class="bg-[#2E609D] mt-20">
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
                        <form action="" id="formNosotros" class=" w-11/12 mx-auto">
                            @csrf
                            <div class="bg-[#FFFFFF] flex flex-row justify-between px-3 md:px-5 py-5 items-center">
                                <input type="email" name="email" id="email"
                                    class="appearance-none font-satoshiMedium text-[#000929] w-full h-full border-none outline-none focus:outline-none focus:ring-0 transition-all opacity-45"
                                    placeholder="Introduce tu correo electrónico" />
                                <input type="text" name="tipo" value="inscripcion" hidden />
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
            <div class="w-11/12 mx-auto py-20 flex flex-col gap-10 ">
                <div class="flex flex-col gap-3 w-full md:max-w-[830px] mx-auto" data-aos="fade-up"
                    data-aos-duration="150">
                    <h3 class="text-[#000929] font-satoshiBold text-text40 leading-tight text-center">Nuestros <span
                            class="text-[#2E609D]">logros</span> </h3>
                    <p class="text-[#000929] font-satoshiRegular text-text20 text-center text-opacity-50">Nuestra historia
                        es
                        de continuo crecimiento y evolución. Comenzamos como un pequeño equipo con grandes sueños, decididos
                        a
                        crear una plataforma inmobiliaria que trascendiera lo común</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">
                    <div class="flex flex-col gap-3 rounded-xl bg-white py-5 px-6 group hover:bg-[#2E609D] md:duration-300"
                        data-aos="fade-up" data-aos-duration="150">
                        <h3
                            class="font-satoshiMedium text-text32 text-[#000929] leading-tight group-hover:text-white md:duration-300">
                            Más de 3 años de excelencia</h3>
                        <p
                            class="text-[#000929] font-satoshiRegular text-text20 text-left text-opacity-50 group-hover:text-white group-hover:opacity-1 md:duration-300">
                            Con más de 3 años en la industria, hemos acumulado una gran cantidad de conocimiento y
                            experiencia, convirtiéndonos en un recurso de referencia...</p>
                    </div>

                    <div class="flex flex-col gap-3 rounded-xl bg-white py-5 px-6 group hover:bg-[#2E609D] md:duration-300"
                        data-aos="fade-up" data-aos-duration="150">
                        <h3
                            class="font-satoshiMedium text-text32 text-[#000929] leading-tight group-hover:text-white md:duration-300">
                            Clientes Felices</h3>
                        <p
                            class="text-[#000929] font-satoshiRegular text-text20 text-left text-opacity-50 group-hover:text-white group-hover:opacity-1 md:duration-300">
                            Nuestro mayor logro es la satisfacción de nuestros clientes. Sus historias de éxito alimentan
                            nuestra pasión por lo que hacemos.</p>
                    </div>

                    <div class="flex flex-col gap-3 rounded-xl bg-white py-5 px-6 group hover:bg-[#2E609D] md:duration-300"
                        data-aos="fade-up" data-aos-duration="150">
                        <h3
                            class="font-satoshiMedium text-text32 text-[#000929] leading-tight group-hover:text-white md:duration-300">
                            Reconocimiento de la industria</h3>
                        <p
                            class="text-[#000929] font-satoshiRegular text-text20 text-left text-opacity-50 group-hover:text-white group-hover:opacity-1 md:duration-300">
                            Nos hemos ganado el respeto de nuestros pares y líderes de la industria, con elogios y premios
                            que reflejan nuestro compromiso con la excelencia.</p>
                    </div>
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

        $('#formNosotros').submit(function(e) {

            e.preventDefault()
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
                    $('#formNosotros')[0].reset();
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
@stop

@stop

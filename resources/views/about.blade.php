<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Home Security Perú</title>
</head>
<body >
    <x-header />

    <section class="md:mt-20 mt-10 md:container md:mx-auto  lg:px-40 px-5 my-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="flex  flex-col gap-2">
                <h1 class="text-7xl md:text-8xl font-semibold">Home</h1>
                <h1 class="text-7xl md:text-8xl font-semibold">Security</h1>
                <h1 class="text-7xl md:text-8xl font-semibold">Perú</h1>
            </div>
            <div class="overflow-hidden ">
                 <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <div class="hidden duration-700 ease-in-out py-10" data-carousel-item>
                        <div class="text-center mb-10">
                            <h1 class="text-3xl font-semibold mb-5">Visión</h1>
                            <p class="text-gray-400">Ser la empresa líder en seguridad para el hogar con tecnología innovadora y óptima.mibold</p>
                        </div>
                         <div class="text-center">
                            <h1 class="text-3xl font-semibold mb-5">Misión</h1>
                            <p class="text-gray-400">Destacar y ser recomendados por nuestro servicio, atención al cliente y calidad de trabajo.</p>
                        </div>
                    </div>
                    <div class="hidden duration-700 ease-in-out " data-carousel-item>
                         <div class="grid grid-cols-2 grid-rows-2 h-[300px]   gap-8">
                            <div class="rounded-lg text-green-500 flex flex-col items-center justify-center gap-4 border-2 border-green-500">
                                <i class="icon-heart2 text-3xl"></i>
                                <p class="md:text-1xl lg:text-1xl xl:text-3xl text-1xl">Integridad</p>
                            </div>
                            <div class="rounded-lg text-green-500 flex flex-col items-center justify-center gap-4 border-2 border-green-500">
                                <i class="icon-userHeart text-3xl"></i>
                                <p class="md:text-1xl lg:text-1xl xl:text-3xl text-1xl">Responsabilidad</p>
                            </div>
                            <div class="rounded-lg text-green-500 flex flex-col items-center justify-center gap-4 border-2 border-green-500">
                                <i class="icon-usercheck text-3xl"></i>
                                <p class="md:text-1xl lg:text-1xl xl:text-3xl text-1xl">Compromiso</p>
                            </div>
                            <div class="rounded-lg text-green-500 flex flex-col items-center justify-center gap-4 border-2 border-green-500">
                                <i class="icon-checkquality text-3xl"></i>
                                <p class="md:text-1xl lg:text-1xl xl:text-3xl text-1xl">Calidad</p>
                            </div>
                         </div>
                    </div>
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full " aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full " aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        </div>
                </div>
            </div>
        </div>

        <div class="md:hidden">
            <div class=" my-10">
                <h1 class="text-3xl font-semibold mb-5">Visión</h1>
                <p class="text-gray-400">Ser la empresa líder en seguridad para el hogar con tecnología innovadora y óptima.mibold</p>
            </div>
            <div class="">
                <h1 class="text-3xl font-semibold mb-5">Misión</h1>
                <p class="text-gray-400">Destacar y ser recomendados por nuestro servicio, atención al cliente y calidad de trabajo.</p>
            </div>
             <div class="grid mt-10 grid-cols-2 grid-rows-2 h-[300px]   gap-8">
                            <div class="rounded-lg text-green-500 flex flex-col items-center justify-center gap-4 border-2 border-green-500">
                                <i class="icon-heart2 text-3xl"></i>
                                <p class="text-1xl">Integridad</p>
                            </div>
                            <div class="rounded-lg text-green-500 flex flex-col items-center justify-center gap-4 border-2 border-green-500">
                                <i class="icon-userHeart text-3xl"></i>
                                <p class="text-1xl">Responsabilidad</p>
                            </div>
                            <div class="rounded-lg text-green-500 flex flex-col items-center justify-center gap-4 border-2 border-green-500">
                                <i class="icon-usercheck text-3xl"></i>
                                <p class="text-1xl">Compromiso</p>
                            </div>
                            <div class="rounded-lg text-green-500 flex flex-col items-center justify-center gap-4 border-2 border-green-500">
                                <i class="icon-checkquality text-3xl"></i>
                                <p class="text-1xl">Calidad</p>
                            </div>
            </div>

        </div>

        <div class="mb-10 md:mt-20 mt-10 flex flex-col gap-5">
            <h1 class="text-4xl text-center font-semibold mb-5">Nuesta Historia</h1>
            <p>Iniciamos este proyecto familiar con una gran ilusión y pasión por nuestro trabajo, el saber que brindamos soluciones de comodidad, estética y sobre todo de seguridad nos fortalece y empodera como empresa. Nos sentimos muy identificados con las familias que priorizan a los suyos, su hogar, <strong>EL PROTEGERLOS SIEMPRE.</strong></p>
            <p>Queremos que se sientan a gusto y a salvo en casa, por ello brindamos alternativas de seguridad, desde puertas principales, portones automáticos, cercos perimetrales, cámaras de seguridad, etc. Estamos felices de atenderlos y asesorar sus proyectos, somos profesionales en nuestro trabajo y nuestra mayor satisfacción es cumplir con sus expectativas y requerimientos.</p>
            <div class="">
                <img class="w-full h-[350px] object-cover" src="https://res.cloudinary.com/da0d2neas/image/upload/v1694798841/pexels-christina-morillo-1181438_uswpc1.jpg" alt="Foto de la familia Home Security Perú">
            </div>
        </div>

    </section>


<x-footer />
@if (session('swal'))
            <script>
                Swal.fire(@json(session('swal')));
            </script>
        @endif
</body>
</html>

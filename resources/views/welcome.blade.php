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


<div class="mt-[2px]">

    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-[600px]">
            <!-- Item 1 -->

        @foreach ($sliders as $slide)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ $slide->image }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        @endforeach

        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        @foreach ($sliders as $slide)
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        @endforeach

        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

</div>

<section class="px-5 my-4 md:my-36 md:px-40" >
    <div class="container grid grid-cols-1 gap-4 mx-auto lg:grid-cols-3 sm:grid-cols-2">
        <div class="p-3 border-2 border-green-500 rounded-md">
            <div class="flex justify-center w-full">
                <div class="p-4 mb-3 text-white bg-green-400 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 md:w-10 md:h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                    </svg>
                </div>
            </div>
            <h2 class="text-lg font-semibold text-center md:text-2xl">Servicio Técnico</h2>
            <p class="text-sm text-center md:text-normal">En nuestro compromiso inquebrantable con tu seguridad y comodidad, ofrecemos un servicio técnico disponible las 24 horas del día, los 7 días de la semana.</p>
        </div>
        <div class="p-3 border-2 border-green-500 rounded-md">
              <div class="flex justify-center w-full">
                <div class="p-4 mb-3 text-white bg-green-400 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 md:w-10 md:h-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
                        </svg>
                </div>
              </div>
            <h2 class="text-lg font-semibold text-center md:text-2xl">Calidad</h2>
            <p class="text-sm text-center md:text-normal">En Home Security, trabajamos con los mejores productos de la industria para asegurarte calidad y durabilidad en cada proyecto."</p>
        </div>
        <div class="p-3 border-2 border-green-500 rounded-md">
               <div class="flex justify-center w-full">
                <div class="p-4 mb-3 text-white bg-green-400 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 md:w-10 md:h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                </div>
              </div>
            <h2 class="text-lg font-semibold text-center md:text-2xl">Asesoría</h2>
            <p class="text-sm text-center md:text-normal">Ofrecemos asesoría completa y acompañamiento desde la concepción de tu idea hasta la ejecución.</p>
        </div>
    </div>
</section>

<section class="px-5 my-10 md:mb-36 md:px-20 lg:px-40">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        <div class="flex justify-center">
            <img src="{{ asset('experienceimage.png') }}" class="h-64 md:object-contain md:h-full" alt="imagen de experiencia  +5 años">
        </div>
        <div class="px-5 py-10 ">
            <h2 class="text-4xl font-semibold md:text-6xl">LLevamos +5 años de experiencia</h2>
            <p class="mt-5 text-lg">En Home Security Perú, con más de 5 años en la industria, garantizamos calidad y experiencia en cada proyecto, desde la idea hasta la ejecución. Trabajamos con los mejores productos del mercado para tu seguridad y tranquilidad.</p>
            <div class="flex items-center w-full gap-4 mt-5">
                <a href="#" class="w-1/2 px-4 py-2 font-semibold text-center text-white transition bg-green-400 rounded-lg hover:bg-green-700 ease">Habla con un asesor</a>
                <a href="{{ route('proyectos') }}" class="w-1/2 px-4 py-2 font-semibold text-center text-green-400 transition border-2 border-green-400 rounded-lg hover:bg-green-700 hover:text-white ease">Ver Proyectos</a>
            </div>
        </div>
    </div>
</section>

{{-- Servicios --}}
<section class="px-5 my-10 md:mb-36 md:px-20 lg:px-40" id="services">
    <h1 class="mb-10 text-5xl font-semibold text-center">Nuestros Servicios</h1>
    <div class="grid grid-cols-1 gap-8 md:grid-cols-3 sm:grid-cols-2 ">
        <div class="">
            <div class="relative w-full overflow-hidden">
                <img class="object-cover w-full transition hover:scale-150 ease" src="{{ asset('mantenimiento.png') }}"  alt="Imagen de mantenimiento">
                <div class="absolute p-3 text-center bg-white rounded-lg shadow-lg -bottom-3 right-4 left-4">
                    <span class="text-2xl font-bold">Mantenimiento</span>
                </div>
            </div>
            <div class="mt-5 text-center">
                <span>en puertas basculantes, puertas batientes, y todo tipo de puerta de garaje.</span>
            </div>
        </div>
          <div class="">
            <div class="relative w-full overflow-hidden">
                <img class="object-cover w-full transition hover:scale-150 ease" src="{{ asset('tranqueras.png') }}"  alt="Imagen de mantenimiento">
                <div class="absolute p-3 text-center bg-white rounded-lg shadow-lg -bottom-3 right-4 left-4">
                    <span class="text-2xl font-bold">Tranqueras Automáticas</span>
                </div>
            </div>
            <div class="mt-5 text-center">
                <span>Las mejores soluciones para empresas privadas, publicas, condominios y otros.</span>
            </div>
        </div>
        <div class="">
            <div class="relative w-full overflow-hidden">
                <img class="object-cover w-full transition hover:scale-150 ease" src="{{ asset('automatizacion.png') }}"  alt="Imagen de mantenimiento">
                <div class="absolute p-3 text-center bg-white rounded-lg shadow-lg -bottom-3 right-4 left-4">
                    <span class="text-2xl font-bold">Automatización</span>
                </div>
            </div>
            <div class="mt-5 text-center">
                <span>Te hacemos la viva más fácil, automatizando tu puerta mediante equipos de automáticos de calidad</span>
            </div>
        </div>
        <div class="">
            <div class="relative w-full overflow-hidden">
                <img class="object-cover w-full transition hover:scale-150 ease" src="{{ asset('cercos.png') }}"  alt="Imagen de mantenimiento">
                <div class="absolute p-3 text-center bg-white rounded-lg shadow-lg -bottom-3 right-4 left-4">
                    <span class="text-2xl font-bold">Cercos Eléctricos</span>
                </div>
            </div>
            <div class="mt-5 text-center">
                <span>El cerco eléctrico es una barrera física, eléctrica y electrónica.</span>
            </div>
        </div>
        <div class="">
            <div class="relative w-full overflow-hidden">
                <img class="object-cover w-full transition hover:scale-150 ease" src="{{ asset('camaras.png') }}"  alt="Imagen de mantenimiento">
                <div class="absolute p-3 text-center bg-white rounded-lg shadow-lg -bottom-3 right-4 left-4">
                    <span class="text-2xl font-bold">Cámaras de Seguridad</span>
                </div>
            </div>
            <div class="mt-5 text-center">
                <span>Las mejores cámaras de vigilancia para tu hogar o negocio.</span>
            </div>
        </div>
        <div class="">
            <div class="relative w-full overflow-hidden">
                <img class="object-cover w-full transition hover:scale-150 ease" src="{{ asset('estructura.png') }}"  alt="Imagen de mantenimiento">
                <div class="absolute p-3 text-center bg-white rounded-lg shadow-lg -bottom-3 right-4 left-4">
                    <span class="text-2xl font-bold">Estructura Metálicas</span>
                </div>
            </div>
            <div class="mt-5 text-center">
                <span>Construcción de Almacenes. Fabricación de techos metálicos.</span>
            </div>
        </div>

    </div>
</section>

<section class="w-full md:h-[400px] h-[250px] mb-20 ">
    <img src="{{ asset('family.png') }}" class="object-cover w-full h-full" alt="">
</section>

<section>
    <div class="px-5 my-10 md:mb-36 md:px-20 lg:px-40">
        <h2 class="text-4xl font-semibold text-center">¿Por qué nuestros productos y servicios son diferentes?</h2>
        <div class="grid grid-cols-1 gap-8 mt-16 md:grid-cols-3 sm:grid-cols-2 ">
            <div class="">
                <div class="">
                    <div class="">
                        <div class="flex items-center justify-center w-16 h-16 p-3 text-center bg-green-400 rounded-full text-slate-100">
                            <i class="text-3xl icon-cuadrados"></i>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h3 class="mb-2 text-2xl font-semibold">Solucionamos cualquier problema</h3>
                        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="">
                    <div class="">
                        <div class="flex items-center justify-center w-16 h-16 p-3 text-center bg-green-400 rounded-full text-slate-100">
                            <i class="text-3xl icon-bullet"></i>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h3 class="mb-2 text-2xl font-semibold">Seguridad y Garantía</h3>
                        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="">
                    <div class="">
                        <div class="flex items-center justify-center w-16 h-16 p-3 text-center bg-green-400 rounded-full text-slate-100">
                            <i class="text-3xl icon-lapiz"></i>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h3 class="mb-2 text-2xl font-semibold">Atención las 24/7</h3>
                        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mb-20 ">
    <div class="grid w-full grid-cols-12 ">
        <div class="text-white w-full h-[450px] relative bg-green-400 col-start-1 md:col-start-6 col-end-13 md:p-20 md:px-24 p-10">
            <h1 class="text-5xl font-semibold">Clientes Satisfechos</h1>
            <p class="before:content-['«'] before:text-4xl text-lg ">
                ¡Estoy impresionado! Home Security Peru instaló una puerta seccional en mi garaje y el resultado superó mis expectativas. La calidad del trabajo y la atención al detalle son excepcionales. Recomiendo encarecidamente sus servicios a cualquiera que busque seguridad y profesionalismo
            </p>
            <span class="text-sm">Juan G.</span>
        <div class="w-2/5 h-[340px] hidden md:block absolute top-12 -bottom-10 -right-10 md:-left-1/3  left-5">
            <img src="{{ asset('testify.png') }}" alt="Foto de la persona que testifica" class="object-cover w-full">
        </div>

        </div>
    </div>
</section>

<div class="flex items-center w-full">
    <div class="inline-flex w-full mb-16 overflow-hidden flex-nowrap">
        <ul class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll" aria-hidden="true">
            <li>
                <img src="{{ asset('bft.png') }}" alt="logo de bft" />
            </li>
            <li>
                <img src="{{ asset('lift.png') }}" alt="Logo de lift" />
            </li>
            <li>
                <img src="{{ asset('liftmaster.png') }}" alt="Logo de lift Master" />
            </li>
            <li>
                <img src="{{ asset('nice.png') }}" alt="Logo de Nice" />
            </li>
            <li>
                <img src="{{ asset('roper.png') }}" alt="Logo de Roper" />
            </li>
            <li>
                <img src="{{ asset('bft.png') }}" alt="logo de bft" />
            </li>
            <li>
                <img src="{{ asset('lift.png') }}" alt="Logo de lift" />
            </li>
            <li>
                <img src="{{ asset('liftmaster.png') }}" alt="Logo de lift Master" />
            </li>
            <li>
                <img src="{{ asset('nice.png') }}" alt="Logo de Nice" />
            </li>
            <li>
                <img src="{{ asset('roper.png') }}" alt="Logo de Roper" />
            </li><li>
                <img src="{{ asset('bft.png') }}" alt="logo de bft" />
            </li>
            <li>
                <img src="{{ asset('lift.png') }}" alt="Logo de lift" />
            </li>
            <li>
                <img src="{{ asset('liftmaster.png') }}" alt="Logo de lift Master" />
            </li>
            <li>
                <img src="{{ asset('nice.png') }}" alt="Logo de Nice" />
            </li>
            <li>
                <img src="{{ asset('roper.png') }}" alt="Logo de Roper" />
            </li>
        </ul>
    </div>
</div>

<section class="px-5 my-10 md:mb-36 md:px-20 lg:px-40">
    <div class="flex items-center justify-between">
        <h1 class="mb-5 text-4xl font-semibold">Últimas Publicaciones</h1>
        <a href="{{ route('blog') }}" class="flex items-center gap-3 transition hover:underline ease" >
            Ver lista de Posts
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
            </svg>
        </a>
    </div>
    <div class="grid items-center grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($posts as $post)
            <div class="w-full bg-white rounded-lg ">
                <a href="{{ route('blog.show', $post) }}">
                    <img class="rounded-t-lg w-full h-[250px] object-cover" src="{{ $post->image }}" alt="" />
                </a>
                <div class="p-5">
                    <div >
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                    </div>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Here are the {{ Str::limit($post->extract, 50, '...') }}</p>
                    <div class="flex justify-between mb-2">
                        <small class="text-gray-400">{{ $post->user->name }}</small>
                        <small class="text-gray-400">{{ $post->created_at->format('d-m-Y') }}</small>
                    </div>
                    <a href="{{ route('blog.show', $post) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Leer más
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="px-6 mb-10 md:mb-36 md:px-20 lg:px-40" id="contact">
    <div class="flex flex-col gap-8 md:flex-row">
        <div class="md:w-1/3 w-full order-2 md:order-1 md:h-[450px] bg-[url('/public/contact.png')] bg-no-repeat  bg-cover p-10 text-white">
            <h2 class="text-3xl font-semibold text-white">Trabajemos Juntos</h2>
            <p class="text-slate-400">Comparte tu proyecto, nosotros lo convertimos en realidad</p>
            <div class="flex flex-col gap-4 mt-5">
                <p class="flex items-center gap-4">
                    <i class="icon-phone"></i>
                    <span>
                        +1012 3456 789
                    </span>
                </p>
                <p class="flex items-center gap-4">
                    <i class="icon-mail"></i>
                    <span>
                        demo@gmail.com
                    </span>
                </p><p class="flex items-center gap-4">
                    <i class="icon-location"></i>
                    <span>
                        Showroom
                    </span>
                </p>
            </div>
        </div>
        <div class="md:w-2/3 w-full md:h-[450px] h-auto md:px-10">
            <form action="{{ route('dashboard.clients.store') }}" method="POST">
                @csrf
                <h1 class="mb-3 text-3xl font-semibold md:hidden">Déjanos un mensaje</h1>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div class="">
                        <label for="">
                            Nombres:
                            <input type="text" value="{{ old('name') }}" name="names" class="w-full mt-2 border focus:border-gray-800" required>
                        </label>
                        @error('names')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                          <label for="">
                            Apellidos:
                            <input type="text" name="surnames" value="{{ old('surnames') }}" class="w-full mt-2 border focus:border-gray-800 " required>
                        </label>
                         @error('surnames')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                 <div class="grid grid-cols-1 gap-6 mt-5 md:grid-cols-2 oder-1 md:order-2">
                    <div class="">
                        <label for="">
                            Email:
                            <input name="email" type="email" value="{{ old('email') }}" class="w-full mt-2 border focus:border-gray-800" required>
                        </label>
                        @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <label for="">
                            Número de Celular:
                            <input name="phone" type="tel" value="{{ old('phone') }}" class="w-full mt-2 border focus:border-gray-800 " required>
                        </label>
                        @error('phone')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                 <div class="gap-6 my-5 ">
                    <div class="">
                        <label for="">
                            Mensaje:
                            <textarea name="message" value="{{ old('message') }}" class="w-full mt-2 border focus:border-gray-800 " id="" cols="30" rows="5" placeholder="Escribe un mensaje"></textarea>
                        </label>
                    </div>
                <button type="submit" class="px-4 py-2 mt-5 text-white transition bg-gray-900 rounded-md hover:bg-gray-950 ease">Enviar Mensaje</button>
            </form>
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

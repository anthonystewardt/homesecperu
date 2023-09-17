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
        <div class="grid md:grid-cols-2 grid-cols-1 gap-10">
            <div class="">
                <div class="flex justify-center">
                    <img src="https://res.cloudinary.com/da0d2neas/image/upload/v1694798867/tecnicos_family_hsp_b5xffd.png" alt="Foto de equipo profesional de Home Security Perú">
                </div>
            </div>
            <div class=" w-full flex flex-col justify-center ">
                <h2 class="text-5xl font-semibold mb-5">Contamos con un gran Equipo profesional</h2>
                <p>En Home Security Perú nos preocupamos por  todos los detalles haciendo de nuestro trabajo una garantía 100% segura.</p>
            </div>
        </div>
        <div class="mt-20 mb-10 text-center">
            <h2 class="my-10 text-3xl font-semibold">últimos Proyectos</h2>
            <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3 gap-10">
                @foreach ($projects as $project)
                    <a href="{{ $project->path_url }}" target="_blank" class="h-[200px] ">
                        <img class="w-full h-full object-cover" src="{{ $project->path_image }}" alt="Imagen de un projecto">
                    </a>
                @endforeach
            </div>
            <div class="flex justify-center mt-10">
                <a href="" class="px-4 py-2 rounded-lg bg-green-500 text-white font-semibold text-center hover:bg-green-700 transition ease">Hablar con un asesor</a>
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

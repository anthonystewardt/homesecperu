<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Home Security Perú</title>
</head>
<body>
    {{-- <x-header /> --}}

    <div class="h-[500px] thanks_container">
        {{-- <div class="">
            <img src="{{ asset('confirm.svg') }}" class="image_thanks" alt="">
        </div> --}}
        <section class="px-20 flex flex-col gap-4 justify-center items-center my-32 py-50 ">
            <h1 class="text-4xl font-semibold">Gracias por Contactarnos</h1>
            <p class="text-gray-400">Pronto un asesor se pondrá en contacto con usted</p>
            <a href="{{ route('home') }}" class="flex gap-3 items-center bg-green-500 text-white px-4 py-2 font-semibold rounded-lg hover:bg-green-800 transition ease">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>

                Regresar a la página principal
            </a>
        </section>
    </div>


<x-footer />
@if (session('swal'))
            <script>
                Swal.fire(@json(session('swal')));
            </script>
        @endif
</body>
</html>

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


<div class="px-5 my-10 mt-10 border border-transparent md:mt-10 lg:px-40">

    <div class="container my-10 ">
        <a class="flex items-center gap-2 mb-10" href="{{ redirect()->back()->getTargetUrl() }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
            </svg>

            Regresar
        </a>
        <div class="grid grid-cols-1 gap-10 md:grid-cols-2 ">
            <div class="">
                <img src="{{ $post->image }}" class="object-cover w-full" alt="Imagen del Post">
            </div>
            <div class="">
                <div class="flex items-center justify-between">
                    {{-- <span class="p-2 px-4 py-2 text-white bg-green-500 rounded-md">{{ $post->category->name }}</span> --}}
                    <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500">{{ $post->category->name }}</kbd>
                    <span>{{ $post->created_at->format('d/m/Y') }}</span>
                </div>
                <div class="mb-5">
                    <h1 class="text-4xl font-semibold">{{ $post->title }}</h1>
                </div>
                <div class="">
                    Publicado por: {{ $post->user->name }}
                </div>
            </div>
        </div>
        <div class="my-10">
            <p>{!! $post->body !!}</p>
        </div>
        <section class="my-10 ">
    <div class="flex items-center justify-between">
        <h1 class="mb-5 text-4xl font-semibold">También podría interesarte</h1>
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
    </div>
</div>



<x-footer />
@if (session('swal'))
            <script>
                Swal.fire(@json(session('swal')));
            </script>
        @endif
</body>
</html>

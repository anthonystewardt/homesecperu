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


<div class="md:mt-20 mt-10 md:container md:mx-auto  lg:px-40 px-5 my-10 border border-transparent">

    <div class="container md:px-20 px-5">
      <div class="flex justify-between items-center ">
          <h1 class="text-4xl font-semibold mb-2 order-2">Blog</h1>
        <a class="mb-10 flex items-center gap-2" href="{{ redirect()->back()->getTargetUrl() }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
</svg>

            Regresar</a>

      </div>
      <div class="">
        <ul>
            <li>

            </li>
        </ul>
      </div>
       <div class="flex flex-col gap-5">
            @foreach ($posts as $post)
                <a href="{{ route('blog.show', $post) }}" class="grid md:grid-cols-4 grid-cols-1 hover:bg-slate-50 transition ease">
                    <div class="col-span-2 h-[240px]">
                        <img src="{{ $post->image }}" class="w-full h-full  object-cover" alt="">
                    </div>
                    <div class="px-3 py-2 col-span-2">
                        <div class="">
                            <h1 class="text-1xl font-semibold">{{ $post->title }}</h1>
                            <div class="flex items-center justify-between gap-10 mt-2">
                                <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500">{{ $post->category->name }}</kbd>
                                <span>Fecha: {{  $post->created_at->format('d-m-Y') }}</span>
                            </div>
                            <div class="">
                                <p class="text-slate-400">{{ $post->extract }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
            <div class="">
                {{ $posts->links() }}
            </div>
       </div>
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

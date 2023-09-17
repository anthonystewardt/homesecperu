<x-app-layout>
    <x-slot name="header">
         <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Galería de Fotos - Slider') }}
        </h2>
        <main class="container mx-auto h-auto  my-10">
            <div class="flex w-full justify-end">
                <a href="{{ route('dashboard.slider.create') }}" class="bg-white px-4 py-2 rounded-lg shadow-xl hover:shadow-2xl transition ease-in">Agregar una nueva Imagen</a>
            </div>

            @if ($photos->count() > 0)

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-4 mt-10">
                    @foreach ($photos as $photo)
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div>
                                <img class="rounded-t-lg"  src="{{ $photo->image }}" alt="imagen de la foto">
                            </div>
                            <div class="p-5">
                                <a href="{{ route('dashboard.slider.edit', $photo) }}" class="inline-flex w-full justify-center items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Editar
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <h2>No hay fotos</h2>

            @endif
        </main>

    </x-slot>
    @if (session('swal'))
            <script>
                Swal.fire(@json(session('swal')));
            </script>
        @endif


</x-app-layout>

<x-app-layout>
    <x-slot name="header">
         <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Galería de Fotos') }}
        </h2>
        <main class="container mx-auto my-10">
            <div class="flex w-full justify-end">
                <a href="" class="bg-white px-4 py-2 rounded-lg shadow-xl hover:shadow-2xl transition ease-in">Agregar una nueva Imagen</a>
            </div>
            {{-- @foreach ($photos as $photo)

            @endforeach --}}

            @empty($photos)
                <h2>si hay fotos</h2>

            @else
                <h2>No hay fotos</h2>

            @endempty



        </main>

    </x-slot>

</x-app-layout>

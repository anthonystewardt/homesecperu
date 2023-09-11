<x-app-layout>
     <x-slot name="header">
        <div class="flex w-full items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Crear una nueva Categoría') }}
            </h2>

        </div>
        <main class="container mx-auto my-10">

            <div class="relative overflow-x-auto h-screen">
            <form action="{{ route('dashboard.categories.store') }}" method="POST">
                @csrf
                <div class="">
                    <x-label class="mb-2">Nombre</x-label>
                    <x-input name="name" class="w-full" placeholder="Escribe el nombre de la categoría" />
                    <span class="text-red-500">
                        @error('name')
                        {{ $message }}
                    @enderror
                    </span>
                </div>
                <div class="flex justify-end mt-4">
                    <x-button>Crear</x-button>
                </div>
            </form>
            </div>

        </main>
    </x-slot>
</x-app-layout>

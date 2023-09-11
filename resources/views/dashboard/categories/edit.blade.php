<x-app-layout>
     <x-slot name="header">
        <div class="flex w-full items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Actualización de Categoría') }}
            </h2>

        </div>
        <main class="container mx-auto my-10">
            <div class="relative overflow-x-auto h-screen">
            <form action="{{ route('dashboard.categories.update', $category) }}" method="POST">
                @method("PUT")
                @csrf
                <div class="">
                    <x-label class="mb-2">Nombre</x-label>
                    <input type="text" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="name" value="{{ $category->name }}" >
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

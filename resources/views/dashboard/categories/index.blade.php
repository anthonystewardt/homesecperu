<x-app-layout>
     <x-slot name="header">
        <div class="flex w-full items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Categorias') }}
            </h2>
            <a href="{{ route('dashboard.categories.create') }}">
                <x-button>Crear Categoría</x-button>
            </a>
        </div>
    <main class="container mx-auto my-10">

    <div class="relative overflow-x-auto h-screen">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre de la Categoría
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $category->name }}
                    </th>
                    <td class="px-6 py-4 flex items-center gap-2">
                        <a href="{{ route('dashboard.categories.edit', $category) }}">
                            <button class="p-2 rounded-lg bg-yellow-500 text-white hover:bg-yellow-700 transition ease">Editar</button>
                        </a>
                        <form action="{{ route('dashboard.categories.destroy', $category) }}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="p-2 rounded-lg bg-red-500 text-white hover:bg-red-700 transition ease">Eliminar</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="mt-10">
            {{ $categories->links() }}
        </div>
    </div>

    </main>
    </x-slot>

@if (session('swal'))
            <script>
                Swal.fire(@json(session('swal')));
            </script>

@endif



</x-app-layout>

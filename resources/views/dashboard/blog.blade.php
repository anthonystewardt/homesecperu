<x-app-layout>
     <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Blog') }}
        </h2>

        <main class="container mx-auto my-10">
            <div class="flex items-center justify-between mb-10">
                    <h3 class="text-3xl ">Lista de Posts</h3>
                <a href="{{ route('dashboard.blog.create') }}" class="flex items-center px-4 py-2 text-white transition bg-blue-500 rounded-lg hover:bg-blue-800 ease">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>

                        Crear un nuevo Post
                </a>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Título
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha de creación
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha de actualización
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($posts as $post)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <img src="{{ $post->image }}" class="ratio-[16/9] w-16 h-8 object-cover" alt="">
                            </th>
                            <td class="px-6 py-4">
                                {{ $post->title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $post->created_at->format('d-m-Y') }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $post->updated_at->format('d-m-Y') }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('dashboard.blog.edit', $post) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="{{ route('dashboard.blog.delete', $post) }}" class="font-medium text-red-600 dark:text-red-500 hover:underline" onclick="return confirm('¿Estás segudo de que deseas eliminar este post?')" >Eliminar</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>



            <div class="mt-10">
                {{ $posts->links() }}
            </div>
        </main>
    </x-slot>

       @if (session('swal'))
            <script>
                Swal.fire(@json(session('swal')));
            </script>
        @endif

</x-app-layout>

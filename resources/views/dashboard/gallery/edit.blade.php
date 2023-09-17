<x-app-layout>
    <x-slot name="header">
         <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Subir una Foto') }}
        </h2>
        <main class="container h-screen mx-auto my-10">
            <div class="flex items-center justify-between w-full">
                <a href="{{ route('dashboard.gallery.index') }}" class="flex items-center gap-2 px-4 py-2 transition ease-in bg-white rounded-lg shadow-xl hover:shadow-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
</svg>

                    Regresar</a>
            <form action="{{ route('dashboard.gallery.destroy', $photo) }}" method="POST">
                @csrf
                @method('DELETE')
                  <button type="submit" class="inline-flex items-center bg-red-500 text-white px-5 py-2.5 text-sm font-medium text-center text-white bg-red-700 rounded-lg transition ease focus:ring-4 focus:ring-blue-200 dark:focus:ring-red-900 hover:bg-red-800">
                        Eliminar Foto
                    </button>
            </form>
            </div>

            <form action="{{ route('dashboard.gallery.update', $photo) }}" method="POST"  class="p-2 border-dashed rounded-lg">
                 @csrf
                 @method('PUT')
              <div class="mt-5">
                    <label for="path_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen Url</label>
                    <input type="text" id="path_image" name="path_image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ejemplo: https://res.cloudinary.com/da0d2neas/image/upload/v1694022571/grupo-personas-trabajando-plan-negocios-oficina_1_f3megn.jpg" required value="{{ old('path_image', $photo->path_image) }}" >
                </div>
                  <div class="mt-5">
                    <label for="path_url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Url Instagram</label>
                    <input type="text" id="path_url" name="path_url" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ejemplo: https://www.instagram.com/reel/ConigInD7PV/" required value="{{ old('path_url', $photo->path_url) }}">
                </div>

                 <div class="mt-5">
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                        Editar Foto
                    </button>

                </div>

            </form>


        </main>


    </x-slot>
        @if (session('swal'))
            <script>
                Swal.fire(@json(session('swal')));
            </script>
        @endif


</x-app-layout>

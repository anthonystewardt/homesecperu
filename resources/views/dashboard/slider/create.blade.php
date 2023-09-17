<x-app-layout>
    <x-slot name="header">
         <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Subir una Foto al Slider') }}
        </h2>
        <main class="container mx-auto  h-screen my-10">
            <div class="flex w-full justify-start">
                <a href="{{ route('dashboard.slider') }}" class="bg-white px-4 py-2 rounded-lg shadow-xl hover:shadow-2xl transition ease-in flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
</svg>
                    Regresar</a>
            </div>
            <form action="{{ route('dashboard.slider.store') }}" method="POST"  class="border-dashed p-2 rounded-lg">
                 @csrf
              <div class="mt-5">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen Url</label>
                    <input type="text" id="image" name="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ejemplo: https://res.cloudinary.com/da0d2neas/image/upload/v1694022571/grupo-personas-trabajando-plan-negocios-oficina_1_f3megn.jpg" required value="{{ old('path_image') }}" >
                </div>
                 <div class="mt-5">
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                        Publicar Foto a tu slider
                    </button>
                </div>
            </form>
        </main>


    </x-slot>

</x-app-layout>

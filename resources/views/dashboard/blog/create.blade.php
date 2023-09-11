<x-app-layout>
     <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Crear una Publicación') }}
        </h2>

         <main class="container h-auto mx-auto my-10">

<form action="{{ route('dashboard.blog.store') }}" method="POST" class="container w-1/2 mx-auto mb-10" x-data="{ title: '' }" enctype="multipart/form-data">
                @csrf

                <div class="mt-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Subir una imagen</label>
                    <input name="image" accept="image/*" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file" value="{{ old('image') }}" >
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                    @error('image')
                        <span class="my-2 text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="">
                       <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="category">Elegir Categoría</label>
                    <select name="category_id" id="category"  class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected(old('category_id') == $category->id )>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ejemplo: Tips para contratar servicios" required value="{{ old('name') }}"  id="articleTitle" x-model="title">
                </div>
                <div class="mt-5">
                    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                    <input type="text" id="slug" name="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ejemplo: tips-para-contratar-servicios" required value="{{ old('slug') }}" x-slug="title">

                </div>
                <div class="mt-5">
                    <label for="extract" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Resumen</label>
                    <textarea id="extract" name="extract" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe un resumen">{{ old('extract') }}</textarea>
                </div>
                <div class="mt-5 ckeditor">
                    <label for="editor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blog</label>
                    <textarea id="editor" name="body" rows="12" class="block p-5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe un resumen">{{ old('body') }}</textarea>
                </div>
                  <div class="my-5">
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="hidden" value="off" name="published">
                        <input type="checkbox" name="published" @checked("{{ old('published') }}") class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Publicar</span>
                    </label>
                </div>

                <div class="mt-5">
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                        Publicar Post
                    </button>
                </div>

            </form>

        </main>
    </x-slot>


        {{-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script> --}}
        @push('js')
            <script>
                    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );

        </script>

        @endpush
</x-app-layout>



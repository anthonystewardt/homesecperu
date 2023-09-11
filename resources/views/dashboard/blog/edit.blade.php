<x-app-layout>
     <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Editar una Publicación') }}
        </h2>

         <main class="container h-auto mx-auto my-10">

<form action="{{ route('dashboard.blog.edit', $post) }}"  enctype="multipart/form-data" method="POST" class="container w-1/2 mx-auto mb-10" x-data="{ title: '' }">
                @method("PUT")
                @csrf
                   <img id="preview" src="#" alt="your image" class="mt-3" style="display:none;"/>
                <div class="mb-6 w-full relative">
                    <figure>
                        <img  src="{{ $post->image}}" class="w-full h-80 object-center " alt="imagen del post" id="imgPreview" />
                    </figure>
                    <div class="absolute top-8 right-8">
                        <label class="bg-white rounded-lg px-4 py-2 cursor-pointer flex items-center gap-2 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                            </svg>

                            <span>Actualizar imagen</span>
                            <input type="file" name="image" accept="image/*" id="" class="hidden"   onchange="previewImage(event, '#imgPreview')" >
                        </label>
                    </div>
                </div>
                {{-- <div class="mt-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Subir una imagen</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" accept="image/*"  id="selectImage" type="file" onChange="previewImage(event, '#imgPreview')">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Actualizar imagen</p>
                    @error('image')
                        <span class="my-2 text-red-500">{{ $message }}</span>
                    @enderror
                </div> --}}
                <div class="">
                       <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="category">Elegir Categoría</label>
                    <select name="category_id" id="category"  class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected( $category->id )>{{ $category->name }}</option>
                        @endforeach
                    </select>
                     @error('category_id')
                        <span class="my-2 text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ejemplo: Tips para contratar servicios" required value="{{ $post->title }}"  id="articleTitle" x-model="title">
                     @error('name')
                        <span class="my-2 text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-5">
                    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                    <input type="text" id="slug" name="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ejemplo: tips-para-contratar-servicios" required value="{{  $post->slug }}" x-slug="title">
                    @error('slug')
                        <span class="my-2 text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-5">
                    <label for="extract" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Resumen</label>
                    <textarea id="extract" name="extract" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe un resumen">{{ $post->extract }}</textarea>
                     @error('extract')
                        <span class="my-2 text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-5">
                    <label for="editor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blog</label>
                    <textarea id="editor" name="body" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe un resumen">{{ $post->body }}</textarea>
                     @error('body')
                        <span class="my-2 text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                 <div class="my-5">
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="hidden" value="off" name="published">
                        <input type="checkbox" name="published" @checked("{{ old('published', $post->published) }}") class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Publicar</span>
                    </label>
                </div>

                <div class="mt-5">
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                        Editar Post
                    </button>
                </div>

            </form>

        </main>
            <script>
                function previewImage(event, querySelector) {
                    const input = event.target;
                     // recuperamos la etiqueta img donde cargamos la imagen
                    $imgPreview = document.querySelector(querySelector);

                    // verificamos si existe una imagen seleccionada
                    if(!input.files.length){
                        return
                    }

                    // recuperamos el archivo subido
                    file = input.files[0];

                    // creamos la url
                    objectURL = URL.createObjectURL(file);

                    // Modificamos el atributo src de la etiqueta img
                    $imgPreview.src = objectURL;

                }


            </script>
        @push('script')
        @endpush
    </x-slot>


</x-app-layout>



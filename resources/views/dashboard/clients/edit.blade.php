<x-app-layout>
    <x-slot name="header">
         <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Banco de Datos capturados del Formulario | Edita dato de un cliente ') }}
            </h2>

            <form action="{{ route('dashboard.clients.delete', $client) }}" method="POST">
                @method("DELETE")
                @csrf
                <button class="px-4 py-2 text-white bg-red-500 rounded-lg hover:bg-red-800 transition ease">Eliminar</button>
            </form>
         </div>
        <main class="container mx-auto h-auto  my-10">

            <form action="{{ route('dashboard.clients.update', $client) }}" method="POST">
                @method("PUT")
                @csrf
                    <div class="mb-6">
                        <label for="names" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombres</label>
                        <input type="text" id="names" name="names" value="{{ old('names', $client->names) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
                    </div>
                    <div class="mb-6">
                        <label for="surnames" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellidos</label>
                        <input type="text" id="surnames" name="surnames" value="{{ old('surnames', $client->surnames) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombres</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $client->email) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
                    </div>
                     <div class="mb-6">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Npumero de Teléfono</label>
                        <input type="tel" name="phone" id="phone" value="{{ old('phone', $client->phone) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
                    </div>
                    <div class="mb-6">
                        <label for="status"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona una valor</label>
                            <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Elige una opción</option>
                                <option @selected($client->status === "atendido") value="atendido">Atendido</option>
                                <option @selected($client->status === "sin atender") value="sin atender">Sin atender</option>
                            </select>
                    </div>
                    <div class="mb-6">
                        <p class="text-2xl font-semibold">Mensaje: </p>
                        <p>{{ $client->message }}</p>
                    </div>
                    <button type="submit" class="px-4 py-2 bg-blue-500 rounded-lg text-white font-semibold hover:bg-blue-800 transition ease">
                        Guardar
                    </button>
            </form>

        </main>

    </x-slot>
    @if (session('swal'))
        <script>
            Swal.fire(@json(session('swal')));
        </script>
    @endif


</x-app-layout>

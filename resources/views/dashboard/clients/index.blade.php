<x-app-layout>
    <x-slot name="header">
         <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Banco de Datos capturados del Formulario | ') }}
        </h2>
        <main class="container mx-auto h-auto  my-10">


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombres
                </th>
                <th scope="col" class="px-6 py-3">
                    Apellidos
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Acción
                </th>
            </tr>
        </thead>
        <tbody>
          @foreach ($clients as $client)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $client->names }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $client->surnames }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $client->email }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $client->status === "atendido" ? "Atendido" : "Sin atender" }}
                </th>
                 <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="{{ route('dashboard.clients.edit', $client) }}" class="text-blue-500">Ver más</a>
                </th>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>
<div class="mt-20">
    {{ $clients->links()  }}
</div>

        </main>

    </x-slot>
    @if (session('swal'))
        <script>
            Swal.fire(@json(session('swal')));
        </script>
    @endif


</x-app-layout>

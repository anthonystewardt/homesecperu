{{-- <header class="shadow-lg ">
    <div class="flex items-center justify-between px-20 xl:container xl:mx-auto ">
        <div class="flex items-center w-40 h-28">
            <img class="object-cover w-full " src="{{ asset('hsp_logo.png') }}" alt="Logo de Home Security Perú" height="80" width="150" >
        </div>
        <nav>
            <ul class="flex items-center gap-3 font-semibold">
                <li>
                    <a href="">Inicio</a>
                </li>
                <li>
                    <a href="">Nosotros</a>
                </li>
                <li>
                    <a href="">Servicios</a>
                </li>
                <li>
                    <a href="">Contacto</a>
                </li>
            </ul>
        </nav>
        <div class="">
            <a href="#" class="px-4 py-2 font-semibold text-white transition bg-green-500 rounded-lg hover:bg-green-700 ease">
                Login
            </a>
        </div>
    </div>
</header>
 --}}



<nav class="sticky top-0 left-0 right-0 z-50 bg-white border-gray-200 shadow-lg dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl py-2 mx-auto">
        <div class="md:w-40 w-[150px] md:h-full">
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('hsp_logo.png') }}" class="object-cover w-full " alt="Logo de Home Security perú" />
            </a>
        </div>
        <div class="flex items-center md:order-2">
            <a href="/login" class="text-gray-800 dark:text-white hover:bg-green-50 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Administrador</a>
            <button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                <li>
                    <a href="{{ route('home') }}" class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-green-600 md:p-0 dark:text-green-500 md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-green-500 md:dark:hover:bg-transparent dark:border-gray-700 {{ request()->routeIs('home') ? 'text-green-500' : 'text-gray-700' }}" aria-current="page">Inicio</a>
                </li>

                <li>
                    <a  class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-green-600 md:p-0 dark:text-white md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-green-500 md:dark:hover:bg-transparent dark:border-gray-700" href="#services">Servicios</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-green-600 md:p-0 dark:text-white md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-green-500 md:dark:hover:bg-transparent dark:border-gray-700  {{ request()->routeIs('about') ? 'text-green-500' : 'text-gray-700' }}"">Nosotros</a>
                </li>
                  <li>
                    <a href="#contact" class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-green-600 md:p-0 dark:text-white md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-green-500 md:dark:hover:bg-transparent dark:border-gray-700">Contacto</a>
                </li>
                   <li>
                    <a href="{{ route('blog') }}" class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-green-600 md:p-0 dark:text-green-500 md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-green-500 md:dark:hover:bg-transparent dark:border-gray-700 {{ request()->routeIs('blog') ? 'text-green-500' : 'text-gray-700' }} ">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



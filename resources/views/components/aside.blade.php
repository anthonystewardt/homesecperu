@php
    $links = [
        [
            "name" => "Blog",
            "url" => route('dashboard.blog'),
            "active" => request()->routeIs('dashboard.blog'),
            "icon" => "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTguMzc2IDEzLjg5NmwtMi4zNzYuNDc5LjQ3OS0yLjM3NSAxLjg5NyAxLjg5NnptLTEuNDI1LTIuMzY4bDEuODk2IDEuODk2IDUuMTUzLTUuMTUzLTEuODk2LTEuODk2LTUuMTUzIDUuMTUzem0zLjMxIDMuMzExbC0uMDk0LjA4djIuMjQxYy0zLjkyNy4yNjktNi44NTMgMS4xNDgtOC4yNSAxLjY0OXYtMTEuNzRjMi43MDUtMS42MDIgNy41ODItMi4xNzIgMTAuMDgzLTIuMzAzdi0xLjc2NmMtNC4yMDIuMTI4LTguMzA3LjgwNC0xMSAyLjQ4MS0yLjY5My0xLjY3Ny02Ljc5OC0yLjM1My0xMS0yLjQ4MXYxNS45MDRjMy42MDguMTEgNy4xNDYuNjI0IDkuNzc4IDEuODI5Ljc3NS4zNTUgMS42NjYuMzU2IDIuNDQ0IDAgMi42MzMtMS4yMDUgNi4xNjktMS43MTggOS43NzctMS44Mjl2LTUuODA0bC0xLjczOCAxLjczOXptLTEwLjE3OCAzLjk2OWMtMS4zOTctLjUtNC4zMjItMS4zOC04LjI1LTEuNjQ5di0xMi4yMjhjNC43MjcuMzU2IDYuOSAxLjM0MSA4LjI1IDIuMTR2MTEuNzM3em00Ljk1OS00LjI2M2wuMTc3LTEuMDY2LTIuMjE5LjU0OXYxLjAxOWwyLjA0Mi0uNTAyeiIvPjwvc3ZnPg=="
],
        [
            "name" => "Categorías",
            "url" => route('dashboard.categories'),
            "active" => request()->routeIs('dashboard.categories'),
            "icon" => "data:image/svg+xml;base64,PHN2ZyBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGwtcnVsZT0iZXZlbm9kZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjIiIHZpZXdCb3g9IjAgMCAyNCAyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMTguODkxIDE5LjQ5OGgtMTMuNzgybC0xLjUyLTkuNTAxaDE2LjgyM3ptLTE0LjMwNi0xMi41MDZoMTQuODY4bC0uMjI3IDEuNTA2aC0xNC40MTV6bS45OTMtMi40OTRoMTIuODgybC0uMTMuOTgzaC0xMi42MjN6bTE2LjQyMSA0Ljk5OGMwLS41NTgtLjQ1Ni0uOTk4LTEuMDAxLS45OThoLS4yNTNjLjMwOS0yLjA2NC4yODktMS45MTEuMjg5LTIuMDA5IDAtLjU4LS40NjktMS4wMDgtMS0xLjAwOGgtLjE4OWMuMTkzLTEuNDYxLjE4Ny0xLjM5OS4xODctMS40ODIgMC0uNjcxLS41NzUtMS4wMDEtMS4wMDEtMS4wMDFoLTE0LjAyNGMtLjUzNiAwLTEuMDAxLjQzMy0xLjAwMSAxIDAgLjA4My0uMDA4LjAxMy4xODggMS40ODNoLS4xOWMtLjUyNCAwLTEuMDAxLjQyMi0xLjAwMSAxLjAwNyAwIC4xMDEtLjAxNi0uMDI3LjI5IDIuMDFoLS4yOTFjLS41NjkgMC0xLjAwMS40NjQtMS4wMDEuOTk5IDAgLjExOC0uMTA1LS41ODIgMS42OTQgMTAuNjU5LjA3Ny40ODYuNDk2Ljg0Mi45ODguODQyaDE0LjYzNWMuNDkyIDAgLjkxMS0uMzU2Ljk4OC0uODQyIDEuODAxLTExLjI1IDEuNjkzLTEwLjU0IDEuNjkzLTEwLjY2eiIgZmlsbC1ydWxlPSJub256ZXJvIi8+PC9zdmc+"],
        [
            "name" => "Lista de Clientes ",
            "url" => route('dashboard.clients'),
            "active" => request()->routeIs('dashboard.clients'),
            "icon" => "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTcuOTk3IDE4aC0xMS45OTVsLS4wMDItLjYyM2MwLTEuMjU5LjEtMS45ODYgMS41ODgtMi4zMyAxLjY4NC0uMzg5IDMuMzQ0LS43MzYgMi41NDUtMi4yMDktMi4zNjYtNC4zNjMtLjY3NC02LjgzOCAxLjg2Ni02LjgzOCAyLjQ5MSAwIDQuMjI2IDIuMzgzIDEuODY2IDYuODM5LS43NzUgMS40NjQuODI2IDEuODEyIDIuNTQ1IDIuMjA5IDEuNDkuMzQ0IDEuNTg5IDEuMDcyIDEuNTg5IDIuMzMzbC0uMDAyLjYxOXptNC44MTEtMi4yMTRjLTEuMjktLjI5OC0yLjQ5LS41NTktMS45MDktMS42NTcgMS43NjktMy4zNDIuNDY5LTUuMTI5LTEuNC01LjEyOS0xLjI2NSAwLTIuMjQ4LjgxNy0yLjI0OCAyLjMyNCAwIDMuOTAzIDIuMjY4IDEuNzcgMi4yNDYgNi42NzZoNC41MDFsLjAwMi0uNDYzYzAtLjk0Ni0uMDc0LTEuNDkzLTEuMTkyLTEuNzUxem0tMjIuODA2IDIuMjE0aDQuNTAxYy0uMDIxLTQuOTA2IDIuMjQ2LTIuNzcyIDIuMjQ2LTYuNjc2IDAtMS41MDctLjk4My0yLjMyNC0yLjI0OC0yLjMyNC0xLjg2OSAwLTMuMTY5IDEuNzg3LTEuMzk5IDUuMTI5LjU4MSAxLjA5OS0uNjE5IDEuMzU5LTEuOTA5IDEuNjU3LTEuMTE5LjI1OC0xLjE5My44MDUtMS4xOTMgMS43NTFsLjAwMi40NjN6Ii8+PC9zdmc+"
],

        [
            "name" => "Galería de Fotos",
            "url" => route('dashboard.gallery.index'),
            "active" => request()->routeIs('dashboard.gallery.index'),
            "icon" => "data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0yNCAyMmgtMjR2LTIwaDI0djIwem0tMS0xOWgtMjJ2MThoMjJ2LTE4em0tMSAxNmgtMTlsNC03LjQ5MiAzIDMuMDQ4IDUuMDEzLTcuNTU2IDYuOTg3IDEyem0tMTEuODQ4LTIuODY1bC0yLjkxLTIuOTU2LTIuNTc0IDQuODIxaDE1LjU5M2wtNS4zMDMtOS4xMDgtNC44MDYgNy4yNDN6bS00LjY1Mi0xMS4xMzVjMS4zOCAwIDIuNSAxLjEyIDIuNSAyLjVzLTEuMTIgMi41LTIuNSAyLjUtMi41LTEuMTItMi41LTIuNSAxLjEyLTIuNSAyLjUtMi41em0wIDFjLjgyOCAwIDEuNS42NzIgMS41IDEuNXMtLjY3MiAxLjUtMS41IDEuNS0xLjUtLjY3Mi0xLjUtMS41LjY3Mi0xLjUgMS41LTEuNXoiLz48L3N2Zz4="
],

        [
            "name" => "Galería de Videos",
            "url" => route('dashboard.blog'),
            "active" => request()->routeIs('dashboard.blog'),
            "icon" => "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTYgMThjMCAxLjEwNC0uODk2IDItMiAyaC0xMmMtMS4xMDUgMC0yLS44OTYtMi0ydi0xMmMwLTEuMTA0Ljg5NS0yIDItMmgxMmMxLjEwNCAwIDIgLjg5NiAyIDJ2MTJ6bTgtMTRsLTYgNi4yMjN2My41NTRsNiA2LjIyM3YtMTZ6Ii8+PC9zdmc+"
],
        [
            "name" => "Slider",
            "url" => route('dashboard.slider'),
            "active" => request()->routeIs('dashboard.slider'),
            "icon" => "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMS44NTkgNmwtLjQ4OS0yaDIxLjI1NmwtLjQ5MSAyaC0yMC4yNzZ6bTEuNTgxLTRsLS40MzktMmgxNy45OTRsLS40MzkgMmgtMTcuMTE2em0yMC41NiAxNmgtMjRsMiA2aDIwbDItNnptLTIwLjg5Ni0ybC0uODE0LTZoMTkuNDExbC0uODM5IDZoMi4wMmwxLjExOC04aC0yNGwxLjA4NSA4aDIuMDE5em0yLjc4NC0zLjk5NWMtLjA0OS0uNTU1LjQxOS0xLjAwNSAxLjA0My0xLjAwNS42MjUgMCAxLjE1NS40NDkgMS4xODUgMS4wMDQuMDMuNTU1LS40MzggMS4wMDUtMS4wNDQgMS4wMDUtLjYwNSAwLTEuMTM2LS40NDktMS4xODQtMS4wMDR6bTcuNTc1LS4yMjRsLTEuODI0IDIuNjgtMS44MTMtMS4zMTItMi44MjYgMi44NTFoMTBsLTMuNTM3LTQuMjE5eiIvPjwvc3ZnPg=="
],
    ];
@endphp

<nav class="fixed top-0 z-50 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" x-on:click="open = !open" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>

      </div>
      <div class="flex items-center">
          <div class="flex items-center ml-3">
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>

              </button>
            </div>

          </div>
        </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 bottom-0 left-0 z-40 w-64 h-screen pt-20 transition-transform bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar" :class="{
    '-translate-x-full': !open,
    'translate-x-0': open
}">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">

      <ul class="space-y-2 font-medium">
        @foreach ($links as $link)
             <li>
                <a href="{{ $link['url'] }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  {{ $link['active'] ? 'bg-gray-200' : ''  }} dark:hover:bg-gray-700 group">
                    <img src="{{ $link['icon'] }}" class="w-8">

                <span class="flex-1 ml-3 whitespace-nowrap">{{ $link['name'] }}</span>
                </a>
            </li>
        @endforeach


      </ul>
   </div>
</aside>

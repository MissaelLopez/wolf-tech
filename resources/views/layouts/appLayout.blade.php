<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://wolf-tech.herokuapp.com/css/styles.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>    
    <script src="https://wolf-tech.herokuapp.com/js/tailwindConfig.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>  
    <title>{{ $title ?? 'Game News' }}</title>
    <style>
      body {
        scrollbar-width: auto;
        scrollbar-color: #de744c;
      }

      body::-webkit-scrollbar {
        width: 6px;
      }

      body::-webkit-scrollbar-track {
    	  background: #fff;
  	  }

      body::-webkit-scrollbar-thumb {
     	  background-color: #de744c;
  	  }
    </style>
</head>
<body>  
  <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');">
    <div class="flex antialiased text-gray-900 dark:bg-dark dark:text-light">
      <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-primary">
        Loading.....
      </div>
      <div x-transition:enter="transform transition-transform duration-300 bg-white" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-show="isSidebarOpen" class="fixed inset-y-0 z-50 flex w-80">
        <!-- Sidebar content -->
        <div class="z-10 flex flex-col flex-1 bg-white dark:bg-deep shadow-2xl">
          <div class="flex items-center justify-between flex-shrink-0 w-64 p-4">
            <!-- Logo -->
            <a href="#">
              <i class="fab fa-wolf-pack-battalion text-primary text-5xl"></i>
            </a>
            <!-- Close btn -->
            <button @click="isSidebarOpen = false" class="p-1 rounded-lg focus:outline-none focus:ring">
              <svg class="w-6 h-6 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
              <span class="sr-only">Close sidebar</span>
            </button>
          </div>
          <nav class="flex flex-col flex-1 w-64 p-4 mt-4 dark:text-white">
            @if ( empty( $logged ) )
              <a href="/signin" class="flex items-center space-x-2 mb-3">
                <i class="fa fa-sign-in mx-2"></i>         
                <p class="hover:underline underline-offset-4">Iniciar sesión</p>
              </a>
              <a href="/signup" class="flex items-center space-x-2 mb-3">
                <i class="fa fa-user-plus mx-2"></i>         
                <p class="hover:underline underline-offset-4">Registrarse</p>
              </a>
            @else
              <p class="font-bold">{{ $logged->name }}</p>
              <p class="text-sm text-primary">{{ $logged->email }}</p>
              <br>
              <a href="/dashboard/editors" class="flex items-center space-x-2 mb-3">
                <i class="fa fa-sign-in mx-2"></i>         
                <p class="hover:underline underline-offset-4">Dashboard</p>
              </a>
            @endif
          </nav>
          <div class="flex-shrink-0 p-4 dark:text-white">
            @if ( !empty( $logged ) )
              <a href="/logout" class="flex items-center space-x-2 mb-3">
                <i class="fa fa-sign-in mx-2"></i> 
                <p class="hover:underline underline-offset-4">Cerrar sesión</p>
              </a>
            @endif
          </div>
        </div>
      </div>
      <main class="flex flex-col items-center justify-center flex-1">
        <div class="p-5 bg-white dark:bg-deep w-full text-center">
          <button @click="isSidebarOpen = true" class="absolute rounded-lg left-5">
            <svg class="w-6 h-6 text-deep dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span class="sr-only">Open menu</span>
          </button>
          <i class="fab fa-wolf-pack-battalion text-primary text-3xl"></i>
          <button id="toggle-theme" class="absolute rounded-lg right-5">
            <i id="toggle-icon" class="far text-deep dark:text-white dark:text-white text-2xl"></i>
          </button>
        </div>
        <div class="p-2 bg-white dark:bg-dark text-deep dark:text-white font-bold text-center w-full text-sm md:text-base">
          <div class="grid grid-cols-3">
            <div>
              <button onclick="getPosts('noticias')" class="outline-none transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 bg-gray-200 dark:bg-deep dark:text-white rounded-2xl py-2 px-5">Noticias</button>
            </div>
            <div>
              <button onclick="getPosts('opiniones')" class="outline-none transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 bg-gray-200 dark:bg-deep dark:text-white rounded-2xl py-2 px-4">Opiniones</button>
            </div>
            <div>
              <button onclick="getPosts('componentes')" class="outline-none transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 bg-gray-200 dark:bg-deep dark:text-white rounded-2xl py-2 px-4">Componentes</button>
            </div>            
          </div>
        </div>
        <div class="bg-white dark:bg-dark dark:text-white">
          @yield('content')
        </div>
      </main>
    </div>
  </div>
  <script src="https://wolf-tech.herokuapp.com/js/functions.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>

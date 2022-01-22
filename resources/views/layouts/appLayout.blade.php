<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src={{ asset('js/tailwindConfig.js') }} ></script>    
    <title>Tech</title>
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
      <div x-transition:enter="transform transition-transform duration-300 bg-white" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-show="isSidebarOpen" class="fixed inset-y-0 z-10 flex w-80">        
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
            <a href="#" class="flex items-center space-x-2">
              <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
              </svg>
              <span>Home</span>
            </a>
          </nav>
          <div class="flex-shrink-0 p-4">
            <button class="flex items-center space-x-2">
              <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
              </svg>
              <span>Logout</span>
            </button>
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
          <i class="fab fa-wolf-pack-battalion text-primary text-5xl"></i>
          <button id="toggle-theme" class="absolute rounded-lg right-5">
            <i id="toggle-icon" class="far text-deep dark:text-white dark:text-white text-2xl"></i>
          </button>                         
        </div>
        <div class="p-2 bg-white dark:bg-deep text-deep dark:text-white font-bold text-center w-full text-sm md:text-base">
          <div class="grid grid-cols-3">            
            <a href="/" class="hover:underline underline-offset-8 cursor-pointer hover:text-primary">
              Tecnología
            </a>
            <a href="/development" class="hover:underline underline-offset-8 cursor-pointer hover:text-primary">
              Desarrollo
            </a>
            <a href="/entertainment" class="hover:underline underline-offset-8 cursor-pointer hover:text-primary">
              Ocio
            </a>
          </div>          
        </div>
        <div class="bg-white dark:bg-dark dark:text-white md:h-screen">        
          @yield('content')
        </div>
      </main>
    </div>
  </div>     
  <script src={{ asset('js/functions.js') }} ></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://wolf-tech.herokuapp.com/js/tailwindConfig.js"></script>
    <title>Blog Administration</title>
    <style>
        .header-right {
            width: calc(100% - 3.5rem);
        }
        .sidebar:hover {
            width: 16rem;
        }
        @media only screen and (min-width: 768px) {
            .header-right {
                width: calc(100% - 16rem);
            }        
        }
    </style>
</head>
<body>
    <div>
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-dark text-black dark:text-white">
            <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
                <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-white dark:bg-deep border-r border-gray-200 dark:border-deep">                
                    <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden" src="{{ asset('images/avatar.png') }}" />                    
                </div>
                <div class="flex justify-between items-center h-14 bg-white dark:bg-deep header-right border-b border-gray-200 dark:border-deep">
                    <button id="toggle-theme" class="absolute rounded-lg right-5">
                        <i id="toggle-icon" class="far text-gray-600 dark:text-white text-2xl"></i>
                    </button>                
                </div>
            </div>
                        
            <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-white dark:bg-deep h-full text-gray-700 dark:text-white transition-all duration-300 z-10 sidebar border-r border-gray-200 dark:border-deep">
                <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                    <ul class="flex flex-col py-4 space-y-1">                 
                        @if ( $user->rol == 'admin' )
                            <li>
                                <a href="/dashboard/editors" class="relative flex flex-row items-center h-11 text-white-600 pr-6 hover:bg-gray-200 dark:hover:bg-gray-700">
                                    <span class="inline-flex justify-center items-center ml-4">                                 
                                        <i class="w-5 h-5 fa fa-users"></i>
                                    </span>
                                    <span class="ml-2 text-sm tracking-wide truncate">Editores</span>
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/readers" class="relative flex flex-row items-center h-11 text-white-600 pr-6 hover:bg-gray-200 dark:hover:bg-gray-700">
                                    <span class="inline-flex justify-center items-center ml-4">                                 
                                        <i class="w-5 h-5 fas fa-book-reader"></i>
                                    </span>
                                    <span class="ml-2 text-sm tracking-wide truncate">Lectores</span>
                                </a>
                            </li>
                        @endif
                        <li>
                            <a href="/dashboard/posts" class="relative flex flex-row items-center h-11 text-white-600 pr-6 hover:bg-gray-200 dark:hover:bg-gray-700">
                                <span class="inline-flex justify-center items-center ml-4">                                 
                                    <i class="w-5 h-5 far fa-newspaper"></i>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">{{ $user->rol == 'editor' ? 'Mis Publicaciones' : 'Publicaciones' }}</span>
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="/" class="relative flex flex-row items-center h-11 text-white-600 pr-6 hover:bg-gray-200 dark:hover:bg-gray-700">
                                <span class="inline-flex justify-center items-center ml-4">                                 
                                    <i class="w-5 h-5 far fa-newspaper"></i>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Regresar al Blog</span>
                            </a>
                        </li>
                        <li>
                            <a href="/logout" class="relative flex flex-row items-center h-11 text-white-600 pr-6 hover:bg-gray-200 dark:hover:bg-gray-700">
                                <span class="inline-flex justify-center items-center ml-4">                                 
                                    <i class="w-5 h-5 far fa-newspaper"></i>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Cerrar sesión</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
                <div class="mt-5 mx-10">
                    @yield('content')
                </div>            
            </div>

        </div>
    </div>    
    <script src="https://wolf-tech.herokuapp.com/js/functions.js"></script>
    <!-- <script src="{{ asset('js/functions.js') }}"></script> -->
</body>
</html>
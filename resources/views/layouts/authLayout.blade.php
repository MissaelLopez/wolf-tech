<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src={{ URL::asset('js/tailwindConfig.js') }}></script>
    <title>Wolf Games</title>
</head>
<body>
    <div class="bg-white dark:bg-dark min-h-screen flex flex-col lg:justify-center">
        <button id="toggle-theme" class="hidden py-2 rounded-lg right-0">
            <i id="toggle-icon" class="far text-deep dark:text-white dark:text-white text-2xl"></i>
        </button>
        <div class="p-10 mx-auto md:w-full md:max-w-md">
            <h1 class="font-bold text-center text-2xl mb-5">
                <i class="fab fa-wolf-pack-battalion text-primary text-5xl"></i>
            </h1>
            @yield('content')
            <div class="text-center py-5">
                <a href="/" class="text-gray-500">Regresar</a>
            </div>
        </div>
    </div>
    <script src={{ URL::asset('js/functions.js') }}></script>
</body>
</html>
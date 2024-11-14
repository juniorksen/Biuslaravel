<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    
<header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md">
    <div class="flex-1 flex justify-between items-center">
        <a href="#" class="text-xl"></a>
    </div>

    <input class="hidden" type="checkbox" id="menu-toggle" />

    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
        <nav>
            <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                <!-- Contenedor para imagen de perfil y nombre -->
                <li class="flex items-center space-x-4">
                    <!-- Enlace a la cuenta -->
                    <a href="/Account" class="flex items-center space-x-4">
                        <!-- Imagen de perfil -->
                        <div class="w-16 h-16 relative border-4 border-white rounded-full overflow-hidden">
                            <img class="object-cover object-center h-full w-full" src="{{ asset(auth()->user()->url_perfil) }}" alt="Profile picture" />
                        </div>

                        <span class="text-lg font-semibold">{{ auth()->user()->name }}</span>

                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<div class="flex-1">
    @yield('content')
</div>


</body>
</html>

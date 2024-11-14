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
    
<div class="hidden md:flex flex-col w-64 h-screen bg-gray-900">
    <div class="flex items-center justify-center h-24 bg-gray-900">
        <span class="text-white font-bold uppercase">Bius-Hack</span>
    </div>
    <div class="flex flex-col flex-1 overflow-y-auto">
        <nav class="flex-1 px-2 py-4 bg-gray-800">
            <a 
                href="{{ route('welcome') }}" 
                class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700 {{ request()->routeIs('welcome') ? 'bg-gray-700' : '' }}"
            >
                La invitación
            </a>
            <a 
                href="{{ route('dashboard') }}"
                class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700 {{ request()->routeIs('dashboard') ? 'bg-gray-700' : '' }}"
            >
                La búsqueda del Santo Grial
            </a>


            <a 
                href="{{ route('messages') }}"
                class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700 {{ request()->routeIs('messages') ? 'bg-gray-700' : '' }}"
            >
            
            Ataques BeEF

            </a>

            

            <a 
            href="{{ route('Wifite2') }}"
            class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700 {{ request()->routeIs('Wifite2') ? 'bg-gray-700' : '' }}"
        >
        Wifite2
        </a>


        <a 
        href="{{ route('qr') }}"
        class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700 {{ request()->routeIs('qr') ? 'bg-gray-700' : '' }}"
    >
    QR
    </a>

    <a 
    href="{{ route('gemelos') }}"
    class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700 {{ request()->routeIs('gemelos') ? 'bg-gray-700' : '' }}"
        >
        Gemelos
        </a>

        <a 
        href="{{ route('DSNIFF') }}"
        class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700 {{ request()->routeIs('DSNIFF') ? 'bg-gray-700' : '' }}"
        >
        DSNIFF
        </a>


        <a 
        href="{{ route('torrent') }}"
        class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700 {{ request()->routeIs('torrent') ? 'bg-gray-700' : '' }}"
        >
        Torrent
        </a>

        

        <a 
        href="{{ route('wifi') }}"
        class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700 {{ request()->routeIs('wifi') ? 'bg-gray-700' : '' }}"
        >
        Wifi
        </a>

        
        <a 
        href="{{ route('Piracy') }}"
        class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700 {{ request()->routeIs('Piracy') ? 'bg-gray-700' : '' }}"
        >
        Stop Online Piracy Act
        </a>


        
        <a 
        href="{{ route('Bomb') }}"
        class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700 {{ request()->routeIs('Bomb') ? 'bg-gray-700' : '' }}"
        >
        Storage Bomb
        </a>



        

        


        
        
                    


        </nav>
    </div>
</div>

<!-- Contenido principal -->
<div class="flex-1">
    @yield('content')
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .zoom {
            transition: transform 0.5s ease;
        }
        .zoom:hover {
            transform: scale(0.5);
        }
    </style>
</head>
<body>
    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            
            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12 mt-6">
                <h1 class="mt-4 text-2xl xl:text-3xl font-extrabold">Iniciar sesión</h1>
                <div class="mt-12">

                    <!-- Formulario de Login -->
                    <form action="{{ route('login.submit') }}" method="POST">
                        @csrf
                        <!-- Correo Electrónico -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                            <input type="email" name="email" id="email" class="mt-1 block w-full p-2 border rounded" required>
                            @error('email')
                                <div class="text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Contraseña -->
                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                            <input type="password" name="password" id="password" class="mt-1 block w-full p-2 border rounded" required>
                            @error('password')
                                <div class="text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Recordarme -->
                        <div class="mb-4">
                            <label for="remember" class="inline-flex items-center">
                                <input type="checkbox" name="remember" id="remember" class="form-checkbox">
                                <span class="ml-2">Recordarme</span>
                            </label>
                        </div>

                        <!-- Botón de Login -->
                        <div class="mt-4">
                            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Iniciar sesión</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="flex-1 bg-[#404040] text-center hidden lg:flex">
                <div class="my-4 mx-auto w-full">
                    <img src=" {{ asset('images/logo.jpeg') }}" alt="Logo" class="w-3/4 lg:w-full h-[700px] object-cover mx-auto zoom">
                </div>
            </div>
        </div>
    </div>
</body>
</html>

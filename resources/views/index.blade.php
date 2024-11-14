<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
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
                <h1 class="mt-4 text-2xl xl:text-3xl font-extrabold">Crear Cuenta</h1>
                <div class="mt-12">

                    <!-- Formulario de Registro -->
                    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Nombre -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full p-2 border rounded" required>
                        </div>

                        <!-- Correo Electrónico -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                            <input type="email" name="email" id="email" class="mt-1 block w-full p-2 border rounded" required>
                        </div>

                        <!-- Contraseña -->
                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                            <input type="password" name="password" id="password" class="mt-1 block w-full p-2 border rounded" required>
                        </div>

                        <!-- Confirmación de Contraseña -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Contraseña</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 block w-full p-2 border rounded" required>
                        </div>

                        <!-- Imagen de Perfil -->
                        <div class="mb-4">
                            <label for="url_perfil" class="block text-sm font-medium text-gray-700">Subir Imagen de Perfil</label>
                            <input type="file" name="url_perfil" id="url_perfil" class="mt-1 block w-full p-2 border rounded" accept="image/*">
                        </div>

                        <!-- Imagen de Fotos -->
                        <div class="mb-4">
                            <label for="url_fotos" class="block text-sm font-medium text-gray-700">Subir Imagen de Fotos</label>
                            <input type="file" name="url_fotos" id="url_fotos" class="mt-1 block w-full p-2 border rounded" accept="image/*">
                        </div>

                        <!-- Botón de Registro -->
                        <div class="mt-4">
                            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Registrar</button>
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






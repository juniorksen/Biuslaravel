<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografía</title>
    @vite('resources/css/app.css')
</head>


<style>
    ul.custom-list li::marker {
            color: #22c55e; /* Color verde de Tailwind (green-500) */
        }
</style>


<body>
<div class="flex h-screen bg-gray-100">
    
    <div class="flex-none">
        @include('layouts.Sidebar')
    </div>

    <!-- Contenido Principal -->
    <div class="flex flex-col flex-1 overflow-y-auto">
        @include('layouts.Navbar')
        
        <div class="relative p-4 mt-1"> <!-- Se ha agregado margen superior para ajustar la posición -->
            <div class="max-w-6xl mx-auto">
                <div
                    class="bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                    <div class="">
                        <a  class="text-indigo-600 hover:text-gray-700 transition duration-500 ease-in-out text-sm">
                            Lección
                        </a>
                        
                    <h1  class="text-gray-900 font-bold text-4xl"> Riesgos de conectarse a una red wifi pública y cómo puedes evitarlos </h1>
                    <div class="py-5 text-sm font-regular text-gray-900 flex"> </div>
                    <hr>

                    <p class="text-base leading-8 my-5">
                        Navega en internet con redes wifi públicas sin exponerte a riesgos innecesarios
                    </p>

                    <p class="text-base leading-8 my-5">
                        ¿A quién no le gusta disfrutar de las ventajas de las conexiones de internet gratuitas cuando nos conectamos con nuestro portátil o smartphone a las redes wifi de restaurantes, hoteles, tiendas o aeropuertos sin pagar un céntimo? Lo que no siempre se nos pasa por la cabeza mientras comprobamos nuestros emails, vemos una película o subimos fotos de nuestras vacaciones a nuestras redes sociales, son los muchos riesgos y peligros a los que nos exponemos. Hoy te contamos cuáles son y cómo puedes protegerte eficazmente de ellos.
                    </p>

                    <h1  class="text-gray-900 font-bold text-4xl"> 
                        Riesgos de conectarse a una red wifi abierta
                    </h1>


                    <p class="text-base leading-8 my-5">
                        Si te preguntas qué tipo de red estás utilizando cuando te conectas a una wifi pública, debes saber que a diferencia de las redes de wifi que puedas tener en casa o en tu trabajo, las redes abiertas no suelen contar con elementos de protección como contraseñas, por lo que cualquiera puede conectarse a ellas de forma prácticamente anónima. 
                    </p>

                    <p class="text-base leading-8 my-5">
                        Esta falta de seguridad, unida a la gran creatividad de los cibercriminales para inventar nuevas estrategias con las que obtener información o dinero, ha hecho que la variedad de estafas a las que podemos enfrentarnos cuando navegamos con una red wifi gratuita se hayan multiplicado en los últimos años. A continuación te dejamos una lista de las más comunes: 
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Red wifi falsa
                    </h3>

                    <p class="text-base leading-8 my-5">
                        Una de las herramientas más utilizadas por los piratas informáticos para obtener información sensible de sus víctimas consiste en crear una red wifi con el nombre del establecimiento donde se recibe la señal, como un bar o restaurante por ejemplo, para así poder acceder al dispositivo de los incautos que se conecten a su red. Por eso es particularmente recomendable no conectarse a tu banco online desde una red wifi pública.
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Man in the Middle
                    </h3>

                    <p class="text-base leading-8 my-5">
                        Con este tipo de ciberataque, también conocido como el intermediario, el hacker logra interceptar la transmisión de datos entre la víctima y la página web que esté visitando. Esto le permite acceder a una gran cantidad de información sin apenas arriesgarse a ser detectado. 
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Malware
                    </h3>

                    <p class="text-base leading-8 my-5">
                        Gracias a la anonimidad que proporcionan las redes abiertas de wifi, los hackers pueden acceder a los dispositivos como smartphones y portátiles para infectarlos con softwares maliciosos y así dañarlos o robar información sensible de sus propietarios. 
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Ramsonware
                    </h3>

                    <p class="text-base leading-8 my-5">
                        Con este tipo de malware, los ciberdelincuentes bloquean funciones del ordenador de la víctima como el teclado o el ratón o cifran archivos importantes como imágenes, información bancaria o documentos importantes para luego reclamar una recompensa para recuperar el control del ordenador. 
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Robo de datos
                    </h3>

                    <p class="text-base leading-8 my-5">
                        Uno de los riesgos más habituales a la hora de conectarse a una red wifi pública es el clásico robo de la información contenida en los archivos de nuestro ordenador portátil o smartphone. Los datos como nuestra información personal, profesional o contraseñas pueden entonces acabar cayendo en malas manos.
                    </p>


                    <h1  class="text-gray-900 font-bold text-4xl"> 
                        Cómo protegerse en una red wifi pública
                    </h1>

                    <p class="text-base leading-8 my-5">
                        Como todo problema tiene su solución, existen ciertos mecanismos y herramientas para saber cómo iniciar sesión en una red wifi abierta sin arriesgarte a perder todos tus ahorros o tus archivos más importantes
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Nombres de red wifi
                    </h3>

                    <p class="text-base leading-8 my-5">
                        Desconfía de nombres de red dudosos que te redirijan a páginas en las que tengas que dar más información de la habitual para conectarte y asegúrate de que se trata realmente de la red del establecimiento en el que estés.
                    </p>

                    
                    <h3 class="text-2xl font-bold my-5">
                        Antivirus
                    </h3>

                    <p class="text-base leading-8 my-5">
                        El dicho de que más vale prevenir que curar se aplica también en estos casos. Aunque seguramente ya tengas un antivirus en tu ordenador, resulta recomendable instalar uno también en tu teléfono móvil si lo usas para conectarte en redes abiertas de wifi. En la actualidad existen antivirus gratuitos para iPhone y Android con los que podrás detectar la presencia de malware en tu móvil.
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        VPN
                    </h3>

                    <p class="text-base leading-8 my-5">
                        Las aplicaciones de red privada virtual o VPN por sus siglas en inglés sirven principalmente para simular que estás conectándote a internet desde otra red, lo que pondrá las cosas mucho más difíciles a los eventuales ciberdelincuentes que quieran acceder a tu dispositivo. La mayoría de estas aplicaciones son además gratuitas, así que no te lo pienses dos veces 
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Actualizaciones
                    </h3>

                    <p class="text-base leading-8 my-5"> 
                        La mayoría de las actualizaciones de software de los smartphones, tablets y ordenadores portátiles incluyen mejoras en la protección de los dispositivos. Si mantienes los aparatos con los que te conectes a redes wifi públicas siempre actualizados, podrás navegar en internet con mayor seguridad.
                    </p>


                    <h3 class="text-2xl font-bold my-5">
                        Banca online
                    </h3>

                    <p class="text-base leading-8 my-5"> 
                        Por mucho que necesites saber si te han ingresado el sueldo o si te han cobrado ya el alquiler, no trates nunca de averiguarlo desde una red wifi abierta, ya que a los hackers les resultará mucho más fácil obtener información sensible como tus transacciones o la contraseña de tu cuenta del banco.
                    </p>

                    <h1  class="text-gray-900 font-bold text-4xl"> 
                        Tu dinero, a buen recaudo con N26 
                    </h1>

                    <p class="text-base leading-8 my-5"> 
                        No podemos impedirte acceder a tu cuenta N26 cuando te conectes a una red de wifi pública, pero podemos darte las herramientas necesarias para proteger tus ahorros lo mejor posible.
                    </p>

                    <p class="text-base leading-8 my-5"> 
                        Controla tus gastos y vigila los movimientos de tu cuenta sin salir de tu app N26. Gestiona tu cuenta bancaria desde cualquier lugar en tiempo real, o aparta dinero para tus vacaciones o para reformar el baño con Espacios. Además, las herramientas de administración de la app te permiten fijar límites de gasto diario y realizar un seguimiento de tus pagos de forma automática.
                    </p>


                </div>
            </div>
        </div>
    </div>
</div>
</div>
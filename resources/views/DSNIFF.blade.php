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
                        
                    <h1  class="text-gray-900 font-bold text-4xl"> Práctica de Ciberseguridad. ¿Conoces DSNIFF? </h1>
                    <div class="py-5 text-sm font-regular text-gray-900 flex"> </div>
                    <hr>

                    <p class="text-base leading-8 my-5">
                        En esta práctica que podemos realizar con nuestros alumnos en clase, la realizaremos no sobre una herramienta concreta, si no sobre una pequeña Suite de Auditoría conocida como DSNIFF. ¿Conoces la técnica de Phising?, o como se pueden interceptar paquetes entre la comunicación de dos equipos, o incluso engañar a un Switch con su tabla…
                    </p>

                    <p class="text-base leading-8 my-5">
                        En esta práctica que podemos realizar con nuestros alumnos en clase, la realizaremos no sobre una herramienta concreta, si no
                        sobre una pequeña Suite de Auditoría conocida como DSNIFF.
                    </p>

                    <p class="text-base leading-8 my-5">
                        ¿Conoces la técnica de Phising?, o como se pueden interceptar paquetes entre la comunicación de dos equipos, o incluso engañar a un Switch con su tabla de ARP. Este tipo de técnicas se pueden realizar usando DSNIFF, en este articulo te enseñaré a montar un escenario de pruebas sencillo para probar estas técnicas y que puedas conocer un poco mejor estos ataques.
                    </p>

                    <h1  class="text-gray-900 font-bold text-4xl">¿Que es DSNIFF?</h1>

                    <p class="text-base leading-8 my-5">
                        Dsniff es un conjunto de herramientas creadas para auditar redes y
                        realizar tests de penetración creadas por Dug Song
                        (http://monkey.org/~dugsong/dsniff/).
                        Con esta herramienta nos daremos cuenta de los realmente importante
                        que puede llegar a ser la encriptación en nuestras comunicaciones
                        diarias.
                    </p>


                    <p class="text-base leading-8 my-5">
                        Aunque la Suite tiene un conjunto de herramientas amplio, en este estudio únicamente nos vamos a centrar en 2 de ellas.
                    </p>

                    <h1  class="text-gray-900 font-bold text-4xl"> ARPSPOOF y DNSSPOOF </h1>

                    <p class="text-base leading-8 my-5">
                        Arpspoof y dnsspoof las cuales facilitan la intercepción de tráfico en la red, normalmente no disponible para un atacante
                    </p>

                    <p class="text-base leading-8 my-5">
                        arpspoof es la herramienta que usaremos para envenenar tablas ARP. Se encarga de enviar los paquetes “arp reply” falsos a la maquina que le indiquemos como “target” para suplantar la dirección MAC de la segunda máquina que le indiquemos.
                    </p>

                    <p class="text-base leading-8 my-5">
                        dnsspoof permite construir falsas respuestas DNS. Se usa mucho para
                        saltar controles basados en nombres de hosts o para implementar una
                        gran variedad de ataques Man in the Middle (HTTP, HTTPS, SSH,
                        Kerberos, etc).
                    </p>

                    <p class="text-base leading-8 my-5">
                        También en este estudio de caso trataremos con la herramienta tshark
                        debido a que es una herramienta orientada para el terminal y nos
                        servirá como apoyo en nuestro laboratorio de pruebas detallada
                        en el ultimo punto de este documento.
                    </p>

                    <p class="text-base leading-8 my-5">
                        TShark esta diseñada para capturar y mostrar paquetes cuando no es
                        necesaria o no está disponible una interfaz de usuario interactiva. Es
                        compatible con las mismas opciones que wireshark.
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Para la instalación de estas tres herramientas utilizaremos el sistema Kali Linux.
                    </h3>


                    <p class="text-base leading-8 my-5">
                        Kali Linux es la versión actualizada y optimizada de la distro
                        BackTrack desarrollada por Offensive Security.
                        Instalar Kali Linux en la computadora es un proceso fácil. Primero,
                        necesitaremos hardware de computadora compatible. Kali es
                        compatible con las plataformas i386, amd64 y ARM. Los requisitos de
                        hardware son mínimos, como se indica a continuación, aunque un
                        mejor hardware naturalmente proporcionará un mejor rendimiento.
                    </p>


                    <p class="text-base leading-8 my-5">
                        Las imágenes i386 tienen un kernel PAE predeterminado, por lo que
                        puede ejecutarlas en sistemas con más de 4GB de RAM.
                        Descargar Kali Linux y queme la ISO a DVD, o prepare una memoria
                        USB con Kali Linux Live como medio de instalación. Si no se dispone de
                        una unidad de DVD o puerto USB en su computadora, revise la
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Instalación de red Kali Linux.
                    </h3>


                    <p class="text-base leading-8 my-5">
                        Requisitos de instalación:
                    </p>

                    <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                        <li class="text-black"> Un mínimo de 20 GB de espacio en disco para la instalación de Kali Linux. </li>
                        <li class="text-black"> RAM para arquitecturas i386 y amd64, Mínimo: 1 GB, recomendado: 2 GB o más. </li>
                        <li class="text-black"> Unidad de CD-DVD / soporte de arranque USB </li>
                    </ul>

                    <hr>
                    <div class="py-5 text-sm font-regular text-gray-900 flex"> </div>
                    <h1  class="text-gray-900 font-bold text-4xl">EL Objetivo</h1>
                    <div class="py-5 text-sm font-regular text-gray-900 flex"> </div>
                    <hr>

                    <p class="text-base leading-8 my-5">
                        El objetivo de nuestras pruebas es comprobar la integridad de comunicación entre equipos conectados a la Red Local (LAN), para ese cometido usaremos Tshark para interceptación de paquetes y ver su encriptación, si la tienen.
                    </p>

                    <p class="text-base leading-8 my-5">
                        Una segunda parte será  la seguridad del servidor DNS para interceptar peticiones de IP y modificarlas, redirgiendo al usuario a otra IP.
                    </p>

                    <p class="text-base leading-8 my-5">
                        Finalmente acabaremos las pruebas suplantando las direcciones MAC que tiene el Router de nuestra red en su tabla de ARP, de esta manera cambiaremos la identidad de los equipos en la comunicación. Estas pruebas se realizan en escenarios con Switchs en Capa 2.
                    </p>


                    <hr>
                    <div class="py-5 text-sm font-regular text-gray-900 flex"> </div>
                    <h1  class="text-gray-900 font-bold text-4xl">Escenario de Pruebas</h1>
                    <div class="py-5 text-sm font-regular text-gray-900 flex"> </div>
                    <hr>

                    <p class="text-base leading-8 my-5">
                        Para la prueba de concepto hemos creado un escenario de Laboratorio para poder usar las herramientas. Detallamos a continuación el escenario:
                    </p>


                    <p class="text-base leading-8 my-5">
                        Levantamos una red Wifi Pública (sin contraseña) para una conexión fácil y rápida de diferentes dispositivos.
                    </p>

                    <p class="text-base leading-8 my-5">
                        En esta red Wifi tenemos una Router con salida a Internet y una máquina Linux con sistema Kali Linux para entorno de pruebas  y auditorías.
                    </p>


                    <p class="text-base leading-8 my-5">
                        Kali Linux funciona como DHCP y asigna un rango de IPS validos para los diferentes dispositivos conectados por Wifi.
                    </p>

                    <p class="text-base leading-8 my-5">
                        Como medida extraordinaria la puerta de enlace que asigna el Kali Linux no es el Router si no el propio Linux que funcionará como intermediario en el trafico de salida y entrada a internet.
                    </p>


                    <p class="text-base leading-8 my-5">
                        Configuración del DHPC
                    </p>

                    <div class="my-2 mx-auto w-full flex justify-center ">
                        <img src=  "{{ asset('images/dsniff1.png') }}"  alt="Logo">
                    </div>

                    <p class="text-base leading-8 my-5"> 
                        Este Kali Linux tiene dos interfaces para poder realizar la función de Bridge.
                    </p>

                    <div class="my-2 mx-auto w-full flex justify-center ">
                        <img src=  "{{ asset('images/dsniff2.png') }}" alt="Logo">
                    </div>

                    <p class="text-base leading-8 my-5"> 
                        Para que este sistema pueda filtrar los paquetes y funcionar como bridge (falsa puerta de enlace) debemos hacer una pequeña configuración en las IPTABLES.
                    </p>

                    <p class="text-base leading-8 my-5"> 
                        Para hacerlo más cómodo en este entorno de laboratorio creamos un pequeño script con los siguientes comandos.
                    </p>

                    <div class="my-2 mx-auto w-full flex justify-center ">
                        <img src=  "{{ asset('images/dsniff3.png') }}" alt="Logo">
                    </div>


                    <p class="text-base leading-8 my-5"> 
                        De esta manera ya nuestros dispositivos navegarán a través de nuestro Kali Linux.
                    </p>

                    <p class="text-base leading-8 my-5"> 
                        Una vez que ya tenemos nuestro escenario de pruebas, vamos a conectar un dispositivo a esa red Wifi y por medio de Tshark vamos a filtrar los paquetes.
                    </p>

                    <h1  class="text-gray-900 font-bold text-4xl">Comandos Tshark</h1>

                    <div class="my-2 mx-auto w-full flex justify-center ">
                        <img src=  "{{ asset('images/dsniff4.png') }}" alt="Logo">
                    </div>


                    <p class="text-base leading-8 my-5"> 
                        Esto me permitirá capturar paquetes del dispositivo conectado a la Wifi Publica por medio del interfaz eth0 del Kali Linux.
                    </p>


                    <h3 class="text-2xl font-bold my-5">
                        Mostramos un ejemplo de Captura
                    </h3>

                    <div class="my-2 mx-auto w-full flex justify-center ">
                        <img src= "{{ asset('images/dsniff5.png') }}"  alt="Logo">
                    </div>

                    <p class="text-base leading-8 my-5"> 
                        En esta captura en concreto estamos auditando su puerto DNS 53 para ver su navegación web.
                    </p>



                    <hr>
                    <div class="py-5 text-sm font-regular text-gray-900 flex"> </div>
                    <h1  class="text-gray-900 font-bold text-4xl">Utilizamos DNSPOOF</h1>
                    <div class="py-5 text-sm font-regular text-gray-900 flex"> </div>
                    <hr>


                    <p class="text-base leading-8 my-5"> 
                        Ahora vamos a utilizar una de las herramientas de nuestra Suite DSNIFF. Con DNSPOOF auditaremos y comprobaremos la integridad del servicio DNS de los clientes conectados.
                    </p>

                    <p class="text-base leading-8 my-5">
                        LA prueba consistirá en integrar (sniffer) un dirección DNS inventada y que el cliente crea que exista y además se le redirija una IP concreta.
                    </p>

                    <p class="text-base leading-8 my-5">
                        En este caso el DNS será http://my.loginfacebook.es y lo mandaremos al propio Kali Linux.
                    </p>

                    <div class="my-2 mx-auto w-full flex justify-center ">
                        <img src=  "{{ asset('images/dsniff6.png') }}" alt="Logo">
                    </div>

                    <div class="my-2 mx-auto w-full flex justify-center ">
                        <img src=  "{{ asset('images/dsniff7.png') }}"  alt="Logo">
                    </div>


                    <hr>
                    <div class="py-5 text-sm font-regular text-gray-900 flex"> </div>
                    <h1  class="text-gray-900 font-bold text-4xl">Utilizamos ARPSPOOF</h1>
                    <div class="py-5 text-sm font-regular text-gray-900 flex"> </div>
                    <hr>


                    <p class="text-base leading-8 my-5">
                        En esta prueba de auditoría  vamos enviar paquetes falsos a nuestros Switchs para confundir la MAC de nuestro cliente. En este caso concreto nuestro dispositivo conectado tiene la IP 10.5.5.14 y suplantaremos su MAC con una aleatoria en la IP 10.5.5.18
                    </p>

                    Comandos usados:

                    <h3 class="text-2xl font-bold my-5">
                        Comandos usados:
                    </h3>

                    <p class="text-base leading-8 my-5">
                        arpspoof -t 10.5.5.14 10.5.5.18
                    </p>

                    <div class="my-2 mx-auto w-full flex justify-center ">
                        <img src=  "{{ asset('images/dsniff8.png') }}  alt="Logo>
                    </div>


                    <p class="text-base leading-8 my-5">
                        Resultado de la Práctica
                    </p>


                    <h3 class="text-2xl font-bold my-5">
                        Referencias
                    </h3>


                    <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                        <li class="text-black"> http://monkey.org/~dugsong/dsniff/ </li>
                        <li class="text-black"> https://www.kali.org/ </li>
                        <li class="text-black"> https://en.wikipedia.org/wiki/DSniff </li>
                        <li class="text-black"> https://sectools.org/tool/dsniff/ </li>
                        
                    </ul>

                    





                    
                </div>
            </div>
        </div>
    </div>
</div>



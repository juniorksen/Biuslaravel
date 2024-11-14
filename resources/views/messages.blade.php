<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografía</title>
    @vite('resources/css/app.css')
</head>
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
                        
                    <h1  class="text-gray-900 font-bold text-4xl px-8"> Ataques al navegador del usuario usando BeEF </h1>

                    <p class="text-base leading-8 my-5 px-14">
                        BeEF es un framework que viene por defecto en
                    <a class="text-indigo-600 font-semibold" href="https://blog.elhacker.net/search/label/kali">
                        Kali Linux
                    </a>
                    y está orientado en la explotación de vulnerabilidades en los navegadores web. Podemos usar como vector de ataque un XSS (una vulnerabilidad XSS reflejado o persistente) y mediante un iframe oculto o fichero JavaSript (JS) se pueden robar credenciales, o bien usar simples ataques de ingeniería social preguntando por la instalación de falsos certficados de seguridad, falsas actualizaciones de Flash Player o simplemente simular una sesión caducada de Facebook
                    </p>

                    <div class="my-2 mx-auto w-full flex justify-center ">
                        <img src= "{{ asset('images/logo_beef.png') }}"  alt="Logo">
                    </div>

                    <h1  class="text-gray-900 font-bold text-4xl px-8"> ¿Qué es BeEF? </h1>

                    <p class="text-base leading-8 my-5 px-8">
                        La BeEF es la abreviatura de The Browser Exploitation Framework. Es una herramienta de pruebas de penetración que se centra en el navegador web.
                    </p>

                    <p class="text-base leading-8 my-5 px-8">
                        En medio de la creciente preocupación por los ataques procedentes de Internet en contra de los clientes, incluyendo clientes móviles, BeEF permite la prueba de intrusión profesional para evaluar la situación de seguridad actual de un entorno de destino mediante el uso de vectores de ataque del lado del cliente. A diferencia de otros entornos de seguridad, BeEF mira más allá del perímetro de la red endurecido y sistema cliente, y examina explotabilidad en el marco de la puerta abierta: el navegador web.
                    </p>

                    <p class="text-base leading-8 my-5 px-8">
                        BeEF enganchará (hook) uno o más de los navegadores web y los utilizan como cabezas de playa para el lanzamiento de los módulos de comando dirigidas y nuevos ataques contra el sistema desde dentro del contexto del explorador.
                    </p>

                    <div class="my-2 mx-auto w-full flex justify-center ">
                        <img src= "{{ asset('images/beef1.png') }}" alt="Logo">
                    </div>

                    <h1  class="text-gray-900 font-bold text-4xl px-8">Introducción</h1>

                    
                    <p class="text-base leading-8 my-5 px-8">
                        The Browser Exploitation Framework (BeEF ) es una poderosa herramienta de seguridad profesional. La BeEF es técnicas pioneras que proporcionan la prueba de intrusión con experiencia con los vectores de ataque del lado del cliente prácticos. A diferencia de otros marcos de seguridad , BeEF se centra en el aprovechamiento de las vulnerabilidades del navegador para evaluar la postura de seguridad de un objetivo. Este proyecto es desarrollado exclusivamente para la investigación legal y pruebas de penetración .
                    </p>

                    <p class="text-base leading-8 my-5 px-8"> 
                        BeEF engancha uno o más navegadores web como cabezas de playa para la puesta en marcha de los módulos de mando dirigidos . Cada navegador es probable que sea en un contexto de seguridad diferente , y cada contexto puede proporcionar un conjunto de vectores de ataque únicos. El marco permite que el probador de la penetración para seleccionar los módulos específicos ( en tiempo real ) para apuntar cada navegador , y por lo tanto cada contexto.
                    </p>

                    <p class="text-base leading-8 my-5 px-8">
                        El marco contiene numerosos módulos de comando que emplean API sencilla y potente de la BeEF. Esta API está en el corazón de la eficacia y eficiencia de la estructura. Se abstrae la complejidad y facilita el desarrollo rápido de los módulos personalizados.
                    </p>

                    <div class="my-2 mx-auto w-full flex justify-center ">
                        <img src=   "{{ asset('images/beef2.png') }}"  alt="Logo">
                    </div>

                    <h1  class="text-gray-900 font-bold text-4xl px-8">Requerimientos</h1>


                    <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                        <li class="text-black">OSX 10.5.0 o superior, Linux moderno, o bien Windows XP o superior</li>
                        <li class="text-black">Ruby 1.9.2 o superior</li>
                        <li class="text-black">SQLite 3.x</li>
                    </ul>


                    <h1  class="text-gray-900 font-bold text-4xl px-8">Instalación</h1>

                    <p class="text-base leading-8 my-5 px-8">En Kali linux ya tenemos instalado por defecto a BeEF su localizacion es en /usr/share/beef-xss o tambien en “Kali Linux>herramiental de explotacion>plataforma XSS BeEF” </p>
            
                    
                    <div class="bg-black rounded-md p-4 max-w-md mx-auto mt-20">
                        <div class="flex items-center mb-2">
                            <div class="h-3 w-3 rounded-full mr-2 bg-red-500"></div>
                            <div class="h-3 w-3 rounded-full mr-2 bg-yellow-500"></div>
                            <div class="h-3 w-3 rounded-full bg-green-500"></div>
                        </div>
                        <div class="text-white">
                            <span class="font-bold">user@computer:</span><span class="ml-1">~$</span>
                            
                        </div>
                        <div class="text-gray-300 pl-5">
                            cd /usr/share/beef-xss
                        </div>
                        <div class="text-white">
                            <span class="font-bold">user@computer:</span><span class="ml-1">~$</span>
                        </div>
                        <div class="text-gray-300 pl-5">
                            ./beef
                        </div>
                    </div>

                    <p class="text-base leading-8 my-5 px-8"> Para los impacientes:</p>
        

                    <div class="bg-black rounded-md p-4 max-w-md mx-auto mt-20">
                        <div class="flex items-center mb-2">
                            <div class="h-3 w-3 rounded-full mr-2 bg-red-500"></div>
                            <div class="h-3 w-3 rounded-full mr-2 bg-yellow-500"></div>
                            <div class="h-3 w-3 rounded-full bg-green-500"></div>
                        </div>
                        <div class="text-white">
                            <span class="font-bold">curl </span><span class="ml-1">-L</span>
                            <span class="ml-2"> https://raw.githubusercontent.com/beefproject/beef/a6a7536e/install-beef</span>
                            
                        </div>
                        <div class="text-gray-300 pl-5">
                            |bash -s stable
                        </div>
                        </div>

                        <h1  class="text-gray-900 font-bold text-4xl px-8">Dependencias</h1>

                        <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                            <li class="text-black">Curl</li>
                            <li class="text-black">Git</li>
                            <li class="text-black">Gems</li>
                            <li class="text-black">Ruby</li>
                        </ul>


                        <div class="bg-black rounded-md p-4 max-w-md mx-auto mt-20">
                            <div class="flex items-center mb-2">
                                <div class="h-3 w-3 rounded-full mr-2 bg-red-500"></div>
                                <div class="h-3 w-3 rounded-full mr-2 bg-yellow-500"></div>
                                <div class="h-3 w-3 rounded-full bg-green-500"></div>
                            </div>
                            <div class="text-white">
                            </div>
                            <div class="text-gray-300 pl-5">
                                git clone git://github.com/beefproject/beef.git
                            </div>
                        </div>


                        <div class="bg-black rounded-md p-4 max-w-md mx-auto mt-20">
                            <div class="flex items-center mb-2">
                                <div class="h-3 w-3 rounded-full mr-2 bg-red-500"></div>
                                <div class="h-3 w-3 rounded-full mr-2 bg-yellow-500"></div>
                                <div class="h-3 w-3 rounded-full bg-green-500"></div>
                            </div>
                            <div class="text-white">
                                <span class="font-bold">cd  </span><span class="ml-1">beef</span>
                            </div>
                            <div class="text-gray-300 pl-5">
                                bundle install
                            </div>
                            
                            <div class="text-gray-300 pl-5">
                                ruby beef
                            </div>
                        </div>


                    
                        <p class="text-base leading-8 my-5 pl-8 px-8"> https://github.com/beefproject/beef/wiki/Installation</p>

                        <div class="my-2 mx-auto w-full flex justify-center ">
                            <img src=  "{{ asset('images/beef3.png') }}" alt="Logo">
                        </div>


                        <h1  class="text-gray-900 font-bold text-4xl px-8"> Configuración </h1>

                        <p class="text-base leading-8 my-5 px-8">
                            El fichero de configuración general se llama:
                        </p>

                        <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                            <li class="text-black">config.yaml </li>
                        </ul>

                        <p class="text-base leading-8 my-5 px-8">
                            Aquí podemos establecer o restringir el acceso vía red al panel de control
                        </p>

                        <div class="my-2 mx-auto w-full flex justify-center ">
                            <img src=  "{{ asset('images/beef4.png') }}"    alt="Logo">
                        </div>

                        <p class="text-base leading-8 my-5 px-8">
                            Configurar el Servidor web:
                        </p>

                        <div class="my-2 mx-auto w-full flex justify-center">
                            <img src=  "{{ asset('images/beef5.jpeg') }}"   alt="Logo" class="w-21 h-auto"> 
                        </div>

                        <p class="text-base leading-8 my-5 px-8">
                            Las extensiones:
                        </p>
                
                <div class="terminal p-5 rounded-lg font-mono">
                    <div class="terminal-header bg-zinc-700 text-white p-2 rounded-t-lg flex items-center">
                        <span class="text-red-500 text-5xl leading-[0px] align-middle -mt-2">•</span>
                        <span class="text-yellow-500 text-5xl leading-[0px] align-middle -mt-2 ml-1">&bull;</span>
                        <span class="text-green-500 text-5xl leading-[0px] align-middle -mt-2 ml-1">&bull;</span>
                        <span class="ml-4 align-baseline">extension:</span>
                    </div>
                    <div id="output" class="pl-4 pt-2 bg-gray-900 max-h-[500px] overflow-auto">
                        <p class="text-gray-500">requester:</p>
                        <p class="text-sky-300">enable: true</p>
                        <p class="text-gray-500">proxy:</p>
                        <p class="text-sky-300">enable: true</p>
                        <p class="text-gray-500">metasploit:</p>
                        <p class="text-sky-300">enable: false</p>
                        <p class="text-gray-500">social_engineering:</p>
                        <p class="text-sky-300"> enable: true</p>
                        <p class="text-gray-500">evasion:</p>
                        <p class="text-sky-300"> enable: false</p>    
                    </div>
                    <div id="terminal-input-container" class="input flex pl-4 bg-gray-900 pb-4 rounded-b-lg items-center">
                        <span class="text-green-500"></span>
                
                        <span id="placeholder" class="ml-2 text-md text-gray-500"></span>
                        <input type="text" id="terminal-input" class="bg-transparent border-none outline-none ring-0 focus:ring-0 text-amber-400 w-full">
                    </div>
                </div>

                <p class="text-base leading-8 my-5 px-8"> La integración con Metasploit: </p>

                <div class="terminal p-5 rounded-lg font-mono">
                    <div class="terminal-header bg-zinc-700 text-white p-2 rounded-t-lg flex items-center">
                        <span class="text-red-500 text-5xl leading-[0px] align-middle -mt-2">•</span>
                        <span class="text-yellow-500 text-5xl leading-[0px] align-middle -mt-2 ml-1">&bull;</span>
                        <span class="text-green-500 text-5xl leading-[0px] align-middle -mt-2 ml-1">&bull;</span>
                        <span class="ml-4 align-baseline">Metasploit:</span>
                    </div>
                    <div id="output" class="pl-4 pt-2 bg-gray-900 max-h-[500px] overflow-auto">
                        <p class="text-sky-300">name: 'Metasploit'</p>
                        <p class="text-sky-300">enable: true</p>
                        <p class="text-sky-300">host: "127.0.0.1"</p>
                        <p class="text-sky-300"> port: 55552</p>
                        <p class="text-sky-300">user: "msf"</p>
                        <p class="text-sky-300"> pass: "abc123"  </p>
                        <p class="text-sky-300"> uri: '/api'</p>
                        <p class="text-sky-300">ssl: true </p>
                        <p class="text-sky-300"> ssl_version: 'TLS1'</p>
                        <p class="text-sky-300">ssl_verify: true</p>
                        <p class="text-sky-300"> callback_host: "127.0.0.1" </p>
                        <p class="text-sky-300">autopwn_url: "autopwn"</p>
                    </div>
                    <div id="terminal-input-container" class="input flex pl-4 bg-gray-900 pb-4 rounded-b-lg items-center">
                        <span id="placeholder" class="ml-2 text-md text-gray-500"></span>
                        <input type="text" id="terminal-input" class="bg-transparent border-none outline-none ring-0 focus:ring-0 text-amber-400 w-full">
                    </div>
                </div>

                <div class="my-2 mx-auto w-full flex justify-center ">
                    <img src=   "{{ asset('images/beef6.jpeg') }}" alt="Logo">
                </div>

                <p class="text-base leading-8 my-5 px-8"> Módulos de Metasploit </p>

                <div class="my-2 mx-auto w-full flex justify-center ">
                    <img src=    "{{ asset('images/beef7.png') }}"  alt="Logo">
                </div>

                <p class="text-base leading-8 my-5 px-8"> Podemos usar Browser Autopwn creando un iframe invisible </p>

                <div class="my-2 mx-auto w-full flex justify-center ">
                    <img src=  "{{ asset('images/beef8.png') }}" alt="Logo">
                </div>

                <p class="text-base leading-8 my-5 px-8"> Y esperamos para obtener una shell </p>

                <div class="my-2 mx-auto w-full flex justify-center ">
                    <img src=  "{{ asset('images/beef9.png') }}"  alt="Logo">
                </div>

                <h1  class="text-gray-900 font-bold text-4xl px-8"> Iniciando BeFF </h1>
                        
                <p class="text-base leading-8 my-5 px-8"> Accedemos al panel de control vía: </p>

                <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                    <li class="text-black">http://localhost:3000/ui/panel</li>
                    <li class="text-black">Usuario --> beef</li>
                    <li class="text-black"> Contraseña --> beef</li>
                </ul>

                <div class="my-2 mx-auto w-full flex justify-center ">
                    <img src=  "{{ asset('images/beef10.png') }}"  alt="Logo">
                </div>


                <p class="text-base leading-8 my-5 px-8"> Página inicial: </p> 
                
                <div class="my-2 mx-auto w-full flex justify-center ">
                    <img src=   "{{ asset('images/beef11.png') }}" alt="Logo">
                </div>


                <h1 class="text-gray-900 font-bold text-4xl px-8"> Página de Demos </h1>

                <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                    <li class="text-black">http://localhost:3000/demos/basic.html</li>
                </ul>

                <h1 class="text-gray-900 font-bold text-4xl px-8"> Módulos </h1>

                <p class="text-base leading-8 my-5 px-8"> El significado del color de los módulos </p> 

                <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                    <li class="text-black">- Verde: La víctima es vulnerable y su ejecución pasa desapercibida.</li>
                    <li class="text-black">- Naranja: La víctima es vulnerable pero su ejecución no pasa desapercibida.</li>
                    <li class="text-black"> - Gris: Indeterminado. ¡Hemos venido a jugar!</li>
                    <li class="text-black"> - Rojo: La víctima no es vulnerable. </li>
                </ul>

                <h1 class="text-gray-900 font-bold text-4xl px-8"> Ejemplos de Ingeniería Social </h1>

                <p class="text-base leading-8 my-5 px-8"> Preguntar por credenciales </p>

                <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                    <li class="text-black">The Pretty Theft imprime un sencillo  mensaje al usuario que requiere de un usuario y contraseña explicando que la sesión ha terminado o caducado.</li>
                    <li class="text-black">The Simple Hijacker propone varias plantillas de ingeniería social y los impulsan al usuario cuando se haga clic en un enlace en la página.</li>
                    <li class="text-black"> Clippy crea un pequeño asistente navegador que proponen las actualizaciones del navegador. </li>
                </ul>

                <div class="my-2 mx-auto w-full flex justify-center ">
                    <img src=   "{{ asset('images/beef12.png') }}"  alt="Logo">
                </div>

                <p class="text-base leading-8 my-5 px-8">  Ejemplo de session timeout en Facebook </p>

                <div class="my-2 mx-auto w-full flex justify-center ">
                    <img src=  "{{ asset('images/beef13.png') }}"  alt="Logo">
                </div>


                <h1 class="text-gray-900 font-bold text-4xl px-8"> Extensiones de Chrome/Firefox </h1>

                <p class="text-base leading-8 my-5 px-8">  Una vez enganchado al navegador (hooked)  podemos obtener: </p>

                <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                    <li class="text-black"> Listado de dominios visitados. </li>
                    <li class="text-black"> Listado de URLS.</li>
                    <li class="text-black"> Acceso a la Webcam </li>
                    <li class="text-black"> Todas las Cookies </li>
                    <li class="text-black"> Capturas de Pantalla (Screenshots) </li>
                </ul>

                <p class="text-base leading-8 my-5 px-8">  BeEF usa un fichero JavaScript llamado "hook.js" </p>

                <h1 class="text-gray-900 font-bold text-4xl px-8"> Ejemplo Falsa Actualización de Adobe Flash Player: </h1>

                <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                    <li class="text-black"> https://github.com/beefproject/beef/wiki/Module%3A-Fake-Flash-Update </li>
                </ul>


                <div class="my-2 mx-auto w-full flex justify-center ">
                    <img src= "{{ asset('images/beef14.png') }}"  alt="Logo">
                </div>
    

            </div>


            <h1 class="text-gray-900 font-bold text-4xl px-8">  Ejemplo instalación de certficado Falso:</h1>

            <div class="my-2 mx-auto w-full flex justify-center ">
                <img src=  "{{ asset('images/beef15.png') }}" alt="Logo">
            </div>


            <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                <li class="text-black">  https://github.com/beefproject/beef/wiki/Module%3A-Simple-Hijacker </li>
            </ul>




        </div>
    </div>
</div>
</div>

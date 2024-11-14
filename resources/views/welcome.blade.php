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
                        <h1  class="text-gray-900 font-bold text-4xl"> Cicada 3301 First Puzzle Walkthrough </h1>
                        <div class="py-5 text-sm font-regular text-gray-900 flex"> </div>
                        <hr>
    
        
                        <p class="text-base leading-8 my-5">
                            Este es una lección, una solución y una descripción detallada y completa de los primeros acertijos de Cicada 3301 y enlaces a las herramientas que necesitas para descifrarlos. El Cicada 3301 se describe como uno de los misterios sin resolver más extraños y espeluznantes de Internet.
                        </p>
    
                        <h3 class="text-2xl font-bold my-5">Introducción</h3>
    
                        <p class="text-base leading-8 my-5">
                            Cicada 3301 ha sido descrita como "el misterio más desconcertante y enigmático de Internet" y fue catalogada como uno de los "cinco misterios más inquietantes y sin resolver de Internet" por el Washington Post. En tres ocasiones, Cicada 3301 ha publicado acertijos espectaculares en Internet y la red oscura, con la intención declarada de "reclutar individuos inteligentes".
                        </p>
    
                        <p class="text-base leading-8 my-5">
                            Se ha especulado mucho y se han formulado muchas teorías sobre Cicada 3301, entre ellas que son herramientas de reclutamiento para la NSA, el MI6, los Illuminati, una secta o un grupo de hackers. Muchos pensaron que Cicada 3301 era un juego de realidad alternativa, pero todavía son muy pocos los que saben a dónde conduce esta madriguera. Los que lo saben han desaparecido de Internet.
                        </p>
    
                        <p class="text-base leading-8 my-5">
                            Los acertijos siguen trabajando en la resolución del Cicada 3301 Liber Primus ("Primer Libro" en latín), un libro de runas encriptadas. Las páginas que se han resuelto hasta ahora están
                            <a class="text-indigo-600 font-semibold" href="https://uncovering-cicada.fandom.com/wiki/Liber_Primus">
                                Disponibles aquí.
                            </a>
                        </p>
                        
                        <p class="text-base leading-8 my-5">
                            La última comunicación pública y verificada de Cicada 3301 fue en abril de 2017:
                        </p>
    
                        <blockquote class="text-md italic leading-8 my-5 p-5 text-indigo-600 font-semibold">
                            Beware false paths. Always verify PGP signature from 7A35090F. 3301
                        </blockquote>
    
    
                        <div>
                        <h1  class="text-gray-900 font-bold text-4xl"> La invitación </h1>
                        
    
                        <p class="text-base leading-8 my-5">
                                El 5 de enero de 2012, se publicó una imagen misteriosa en
                            <a class="text-indigo-600 font-semibold" href="https://boards.4chan.org/x/">
                                4chan's /x/ - Paranormal board:
                            </a>
                        </p>
    
        
    
    
                            <!-- Contenedor con imagen más alta -->
                            <div class="my-4 mx-auto w-full">
                                <img src=" {{ asset('images/cicada.jpg') }}"  alt="Logo" class="w-3/4 lg:w-full h-[1000px] object-cover mx-auto zoom">
                            </div>
        
                            <p class="text-base leading-8 my-5">
                                Cicada 3301 ha sido descrita como "el misterio más desconcertante y enigmático de Internet" y fue catalogada como uno de los "cinco misterios más inquietantes y sin resolver de Internet" por el Washington Post. En tres ocasiones, Cicada 3301 ha publicado acertijos espectaculares en Internet y la red oscura, con la intención declarada de "reclutar individuos inteligentes".
                            </p>
    
    
                            <p class="text-base leading-8 my-5">
                                De hecho, había un mensaje oculto en esta imagen. Puedes descargar la imagen y probarla tú mismo con la herramienta Text Extractor de Boxentriq. Mira la captura de pantalla a continuación:
                            <a class="text-indigo-600 font-semibold" href="https://www.boxentriq.com/code-breaking/text-extractor">
                                Puedes descargar la imagen
                            </a>
                            y probarla tú mismo con la herramienta Text Extractor de Boxentriq. Mira la captura de pantalla a continuación:
                            </p>
    
    
                            <div class="my-4 mx-auto w-full">
                                <img src=  "{{ asset('images/cicad3301-1.png') }}" alt="Logo" class="w-3/4 lg:w-full h-[1000px] object-cover mx-auto zoom">
                            </div>
    
    
                            <p class="text-base leading-8 my-5">
                                El texto sobre TIBERIUS CLAVDIVS CAESAR indica que el texto siguiente es un Cifrado César. De hecho, puedes utilizar
                            <a class="text-indigo-600 font-semibold" href="https://www.boxentriq.com/code-breaking/caesar-cipher">
                                Decodificador de cifrado César de Boxentriq
                            </a>
                                Para resolverlo:
                            </p>
    
                            <div class="my-4 mx-auto w-full flex justify-center ">
                                <img src=   "{{ asset('images/cicada3302-2.png') }}"   alt="Logo">
                            </div>
    
    
                            <p class="text-base leading-8 my-5">
                                Para decodificarlo, tendrás que configurar la tecla Shift en 4 y el idioma en "Personalizado". Luego te dará un enlace a una imagen de Imagen:
    
                            <a class="text-indigo-600 font-semibold" href="https://i.imgur.com/m9sYK.jpg">
                                https://i.imgur.com/m9sYK.jpg 
                            </a>
                                Esta imagen, sin embargo, parece un callejón sin salida:
                            </p>
    
                            <div class="my-2 mx-auto w-full flex justify-center">
                                <img src= "{{ asset('images/cicada3302-3.png') }}" alt="Logo" class="w-3/4 lg:w-full h-[800px] object-cover mx-auto zoom">
                            </div>
    
    
                            <p class="text-base leading-8 my-5">
                                Aún así, contiene dos palabras clave que dan pistas sobre cómo obtener el mensaje REAL: guess y out. Esto indica que deberías usar la herramienta de esteganografía OutGuess. Si usas OutGuess, obtendrás un mensaje mucho más interesante:
                            </p>
    
    
    
                            <div class="terminal p-5 rounded-lg font-mono">
                                <div class="terminal-header bg-zinc-700 text-white p-2 rounded-t-lg flex items-center">
                                    <span class="text-red-500 text-5xl leading-[0px] align-middle -mt-2">•</span>
                                    <span class="text-yellow-500 text-5xl leading-[0px] align-middle -mt-2 ml-1">&bull;</span>
                                    <span class="text-green-500 text-5xl leading-[0px] align-middle -mt-2 ml-1">&bull;</span>
                                    <span class="ml-4 align-baseline"> Aquí hay un código de libro. Para encontrar el libro y más información, vaya a https://www.reddit.com/r/a2e7j6ic78h0j/ </span>
                                </div>
                                <div id="output" class="pl-4 pt-2 bg-gray-900 max-h-[500px] overflow-auto">
                                    <p class="text-sky-300">1:20</p>
                                    <p class="text-sky-300">2:3</p>
                                    <p class="text-sky-300">3:5</p>
                                    <p class="text-sky-300">4:20</p>
                                    <p class="text-sky-300">5:5</p>
                                    <p class="text-sky-300">6:53</p>
                                    <p class="text-sky-300">7:1</p>
                                    <p class="text-sky-300">8:8</p>
                                    <p class="text-sky-300">9:2</p>
                                    <p class="text-sky-300">10:4</p>
                                    <p class="text-sky-300">11:8</p>
                                    <p class="text-sky-300">12:4</p>
                                    <p class="text-sky-300">13:13</p>
                                    <p class="text-sky-300">14:4</p>
                                    <p class="text-sky-300">15:8</p>
                                    <p class="text-sky-300">16:4</p>
                                    <p class="text-sky-300">17:5</p>
                                    <p class="text-sky-300">18:14</p>
                                    <p class="text-sky-300">19:7</p>
                                    <p class="text-sky-300">20:31</p>
                                    <p class="text-sky-300">21:12</p>
                                    <p class="text-sky-300">22:36</p>
                                    <p class="text-sky-300">23:2</p>
                                    <p class="text-sky-300">24:3</p>
                                    <p class="text-sky-300">25:5</p>
                                    <p class="text-sky-300">26:65</p>
                                    <p class="text-sky-300">27:5</p>
                                    <p class="text-sky-300">28:1</p>
                                    <p class="text-sky-300">29:2</p>
                                    <p class="text-sky-300">30:18</p>
                                    <p class="text-sky-300">31:32</p>
                                    <p class="text-sky-300">32:10</p>
                                    <p class="text-sky-300">33:3</p>
                                    <p class="text-sky-300">34:25</p>
                                    <p class="text-sky-300">35:10</p>
                                    <p class="text-sky-300">36:7</p>
                                    <p class="text-sky-300">37:20</p>
                                    <p class="text-sky-300">38:10</p>
                                    <p class="text-sky-300">39:32</p>
                                    <p class="text-sky-300">40:4</p>
                                    <p class="text-sky-300">41:40</p>
                                    <p class="text-sky-300">42:11</p>
                                    <p class="text-sky-300">43:9</p>
                                    <p class="text-sky-300">44:13</p>
                                    <p class="text-sky-300">45:6</p>
                                    <p class="text-sky-300">46:3</p>
                                    <p class="text-sky-300">47:5</p>
                                    <p class="text-sky-300">48:43</p>
                                    <p class="text-sky-300">49:17</p>
                                    <p class="text-sky-300">50:13</p>
                                    <p class="text-sky-300">51:4</p>
                                    <p class="text-sky-300">52:2</p>
                                    <p class="text-sky-300">53:18</p>
                                    <p class="text-sky-300">54:4</p>
                                    <p class="text-sky-300">55:6</p>
                                    <p class="text-sky-300">56:4</p>
                                    <p class="text-sky-300">57:24</p>
                                    <p class="text-sky-300">58:64</p>
                                    <p class="text-sky-300">59:5</p>
                                    <p class="text-sky-300">60:37</p>
                                    <p class="text-sky-300">61:60</p>
                                    <p class="text-sky-300">62:12</p>
                                    <p class="text-sky-300">63:6</p>
                                    <p class="text-sky-300">64:8</p>
                                    <p class="text-sky-300">65:5</p>
                                    <p class="text-sky-300">66:18</p>
                                    <p class="text-sky-300">67:45</p>
                                    <p class="text-sky-300">68:10</p>
                                    <p class="text-sky-300">69:2</p>
                                    <p class="text-sky-300">70:17</p>
                                    <p class="text-sky-300">71:9</p>
                                    <p class="text-sky-300">72:20</p>
                                    <p class="text-sky-300">73:2</p>
                                    <p class="text-sky-300">74:34</p>
                                    <p class="text-sky-300">75:13</p>
                                    <p class="text-sky-300">76:21</p>
                                </div>
                                <div id="terminal-input-container" class="input flex pl-4 bg-gray-900 pb-4 rounded-b-lg items-center">
                                    <span class="text-green-500">➝ Buena suerte.  3301</span>
                                    <span class="text-sky-300 ml-2">  </span>
                                    <span id="placeholder" class="ml-2 text-md text-gray-500"></span>
                                    <input type="text" id="terminal-input" class="bg-transparent border-none outline-none ring-0 focus:ring-0 text-amber-400 w-full">
                                </div>
                            </div>
    
                            <p class="text-base leading-8 my-5">
                                Este mensaje te dice que los números son un código de libro (también llamado código de libro). Un código de libro consiste en números que hacen referencia a páginas, párrafos, líneas, palabras o letras de un libro. Para decodificarlo, necesitarás acceso al libro. La misión continuó en Reddit.
                            </p>
    
    
                            
                        <h1  class="text-gray-900 font-bold text-4xl"> La búsqueda del Santo Grial </h1>
                            
    
                        <p class="text-base leading-8 my-5">
                            El
                        <a class="text-indigo-600 font-semibold" href="https://www.reddit.com/r/a2e7j6ic78h0j/">
                            foro en Reddit
                        </a>
                            
                        ("Subreddit") contenía esta imagen en el encabezado y también tenía el título a2e7j6ic78h0j7eiejd0120.
                        </p>
    
                        <div class="my-4 mx-auto w-full flex justify-center ">
                            <img src=   "cicada3302-4.png" alt="Logo">
                        </div>
    
                        <p class="text-base leading-8 my-5">
                            También contenía muchas líneas de texto y dos imágenes:
                        </p>
    
                        <div class="my-2 mx-auto w-full flex justify-center ">
                            <img src=    "{{ asset('images/cicada-3301-6.2.jpg') }}"   alt="Logo">
                        </div>
    
                        <p class="text-base leading-8 my-5">
                            Al usar OutGuess en la imagen de bienvenida aparece este texto:
                        </p>
    
                        <div class="terminal p-5 rounded-lg font-mono">
                            <div class="terminal-header bg-zinc-700 text-white p-2 rounded-t-lg flex items-center">
                                <span class="text-red-500 text-5xl leading-[0px] align-middle -mt-2">•</span>
                                <span class="text-yellow-500 text-5xl leading-[0px] align-middle -mt-2 ml-1">&bull;</span>
                                <span class="text-green-500 text-5xl leading-[0px] align-middle -mt-2 ml-1">&bull;</span>
                                <span class="ml-4 align-baseline">BEGIN PGP SIGNED MESSAGE
                                </span>
                            </div>
                            <div id="output" class="pl-4 pt-2 bg-gray-900 max-h-[500px] overflow-auto">
                                <p class="text-gray-500">Hash: SHA1</p>
                                <p class="text-sky-300">- A partir de ahora, firmaremos criptográficamente todos los mensajes con esta clave.</p>
                                <p class="text-sky-300">Está disponible en los servidores de claves del MIT. ID de clave 7A35090F, como se publicó en a2e7j6ic78h0j.</p>
                                <p class="text-sky-300">La paciencia es una virtud.</p>
                                <p class="text-sky-300">Buena suerte.</p>
                                <p class="text-sky-300">3301</p>
                                <p class="text-gray-500">BEGIN PGP SIGNATURE</p>
                                <p class="text-gray-500">Versión: GnuPG v1.4.11 (GNU/Linux)</p>
                                <p class="text-sky-300">iQIcBAEBAgAGBQJPBRz7AAoJEBgfAeV6NQkP1UIQALFcO8DyZkecTK5pAIcGez7k</p>
                                <p class="text-sky-300">ewjGBoCfjfO2NlRROuQm5CteXiH3Te5G+5ebsdRmGWVcah8QzN4UjxpKcTQRPB9e</p>
                                <p class="text-sky-300">/ehVI5BiBJq8GlOnaSRZpzsYobwKH6Jy6haAr3kPFK1lOXX yHSiNnQbydGw9BFRI fSr//DY86BUILE8sGJR6FA8Vzjiifcv6mmXkk3ICrT8z0qY7m/wFOYjgiSohvYpg x5biG6TBwxfmXQOaITdO5rO8+4mtLnP//qN7E9zjTYj4Z4gBhdf6hPSuOqjh1 s+6 /C6IehRChpx8gwpdhIlNf1coz/ZiggPiqdj75Tyqg88 lEr66fVVB2d7PGObSyYSp</p>
                                <p class="text-sky-300">HJl8llrt8Gnk1UaZUS6/eCjnBniV/BLfZPVD2VFKH2Vvvty8sL+S8hCxsuLCjydh</p>
                                <p class="text-sky-300">skpshcjMVV9xPIEYzwSEaqBq0ZMdNFEPxJzC0XISlWSfxROm85r3NYvbrx9lwVbP</p>
                                <p class="text-sky-300">mUpLKFn8ZcMbf7UX18frgOtujmqqUvDQ2dQhmCU ywPdtsKHFLc1xIqdrnRWUS3CD eejUzGYDB5lSflujTjLPgGvtlCBW5ap00cfIHUZPOzmJWoEzgFgdNc9iIkcUUlke e2WbYwCCuwSlLsdQRMA//PJN+a1h2ZMSzzMbZsr/YXQDUWvEaYI8MckmXE kZmDoA RL0xkbHEFVGBmoMPVzeC =fRcg </p>
                                <p class="text-gray-500">FIN DE FIRMA PGP</p>
                            </div>
                            <div id="terminal-input-container" class="input flex pl-4 bg-gray-900 pb-4 rounded-b-lg items-center">
                                <span class="text-green-500">➝</span>
                                <span class="text-sky-300 ml-2">~</span>
                                <span id="placeholder" class="ml-2 text-md text-gray-500"></span>
                                <input type="text" id="terminal-input" class="bg-transparent border-none outline-none ring-0 focus:ring-0 text-amber-400 w-full">
                            </div>
                        </div>
    
    
                        <p class="text-base leading-8 my-5">
                            Esta es una información MUY importante, ya que hay muchos impostores que se hacen pasar por Cicada 3301. Esta clave PGP (GnuPG) es la manera de verificar su autenticidad. Solo los mensajes reales de Cicada 3301 están firmados con esta ID de clave: 7A35090F. Con esta ID, su clave pública se puede descargar desde el servidor de claves MIT.
                        </p>
    
                        <p class="text-base leading-8 my-5">
                            La segunda imagen en el subreddit se veía así:
                        </p>
    
                        <div class="my-2 mx-auto w-full flex justify-center ">
                            <img src=    "{{ asset('images/cicada-3301-6.3.jpg') }}"  alt="Logo">
                        </div>
    
                        <p class="text-base leading-8 my-5">
                            Es un
                        <a class="text-indigo-600 font-semibold" href="https://www.boxentriq.com/code-breaking/stereograms">
                            imagen estereograma
                        </a>
                        , contiene una imagen que parece un Santo Grial. También contiene un texto oculto de OutGuess:    
                        </p>
    
                        <div class="terminal p-5 rounded-lg font-mono">
                            <div class="terminal-header bg-zinc-700 text-white p-2 rounded-t-lg flex items-center">
                                <span class="text-red-500 text-5xl leading-[0px] align-middle -mt-2">•</span>
                                <span class="text-yellow-500 text-5xl leading-[0px] align-middle -mt-2 ml-1">&bull;</span>
                                <span class="text-green-500 text-5xl leading-[0px] align-middle -mt-2 ml-1">&bull;</span>
                                <span class="ml-4 align-baseline">BEGIN PGP SIGNED MESSAGE</span>
                            </div>
                            <div id="output" class="pl-4 pt-2 bg-gray-900 max-h-[500px] overflow-auto">
                                <p class="text-gray-500">Hash: SHA1</p>
                                <p class="text-sky-300">La clave siempre ha estado delante de tus ojos.</p>
                                <p class="text-sky-300">Esta no es la búsqueda del Santo Grial. Dejen de hacer</p>
                                <p class="text-sky-300">Es más difícil de lo que es.</p>
                                <p class="text-gray-500">Buena suerte.</p>
                                <p class="text-gray-500">3301</p>
                                <p class="text-gray-500">-----BEGIN PGP SIGNATURE-----</p>
                                <p class="text-gray-500">Version: GnuPG v1.4.11 (GNU/Linux)</p>
                                <p class="text-sky-300">iQIcBAEBAgAGBQJPCBl3AAoJEBgfAeV6NQkPo6EQAKghp7ZKYxmsYM96iNQu5GZV</p>
                                <p class="text-sky-300">fbjUHsEL164ZLctGkgZx2H1HyYFEc6FGvcfzqs43vV/IzN4mK0SMy2qFPfjuG2JJ</p>
                                <p class="text-sky-300">tv3x2QfHMM3M2+dwX30bUD12UorMZNrLo8HjTpanYD9hL8WglbSIBJhnLE5CPlUS</p>
                                <p class="text-sky-300">BZRSx0yh1U+wbnlTQBxQI0xLkPIz+xCMBwSKl5BaCb006z43/HJt7NwynqWXJmVV</p>
                                <p class="text-sky-300">KScmkpFC3ISEBcYKhHHWv1IPQnFqMdW4dExXdRqWuwCshXpGXwDoOXfKVp5NW7Ix </p> 
                                <p class="text-sky-300">9kCyfC7XC4iWXymGgd+/h4ccFFVm+WWOczOq/zeME+0vJhJqvj+fN2MZtvckpZbc</p>
                                <p class="text-sky-300">CMfLjn1z4w4d7mkbEpVjgVIU8/+KClNFPSf4asqjBKdrcCEMAl80vZorElG6OVIH</p>
                                <p class="text-sky-300">aLV4XwqiSu0LEF1ESCqbxkEmqp7U7CHl2VW6qv0h0Gxy+/UT0W1NoLJTzLBFiOzy</p>
                                <p class="text-sky-300">QIqqpgVg0dAFs74SlIf3oUTxt6IUpQX5+uo8kszMHTJQRP7K22/A3cc/VS/2Ydg4</p>
                                <p class="text-sky-300">o6OfN54Wcq+8IMZxEx+vxtmRJCUROVpHTTQ5unmyG9zQATxn8byD9Us070FAg6/v</p>
                                <p class="text-sky-300">jGjo1VVUxn6HX9HKxdx4wYGMP5grmD8k4jQdF1Z7GtbcqzDsxP65XCaOYmray1Jy</p>
                                <p class="text-sky-300">FG5OlgFyOflmjBXHsNad</p>
                                <p class="text-gray-500">=SqLP</p>
                            </div>
                            <div id="terminal-input-container" class="input flex pl-4 bg-gray-900 pb-4 rounded-b-lg items-center">
                                <span class="text-green-500">➝</span>
                                <span class="text-sky-300 ml-2">END PGP SIGNATURE</span>
                                <span id="placeholder" class="ml-2 text-md text-gray-500"></span>
                                <input type="text" id="terminal-input" class="bg-transparent border-none outline-none ring-0 focus:ring-0 text-amber-400 w-full">
                            </div>
                        </div>
    
                        <p class="text-base leading-8 my-5">
                            En el subreddit también había muchas líneas de texto que parecían texto cifrado:
                        </p>
    
                        <div class="terminal p-5 rounded-lg font-mono">
                            <div class="terminal-header bg-zinc-700 text-white p-2 rounded-t-lg flex items-center">
                                <span class="text-red-500 text-5xl leading-[0px] align-middle -mt-2">•</span>
                                <span class="text-yellow-500 text-5xl leading-[0px] align-middle -mt-2 ml-1">&bull;</span>
                                <span class="text-green-500 text-5xl leading-[0px] align-middle -mt-2 ml-1">&bull;</span>
                            </div>
                            <div id="output" class="pl-4 pt-2 bg-gray-900 max-h-[500px] overflow-auto">
                                <p class="text-sky-300">Ukbn Txltbz nal hh Uoxelmgox wdvg Akw; hvu ogl rsm ar sbv ix jwz</p>
                                <p class="text-sky-300">mjotukj; mul nimo vaa prrf Qwkkb aak kau ww Ukpsf, ogq Kzpox vvl luf</p>
                                <p class="text-sky-300">yh Qsrjfa, hvu Ktp hzs lbn ph Kipsy; ttv Sdmehpfjsf tad igr</p>
                                <p class="text-sky-300">rcbkfgaplvj am uswrerwptk la hox cazkwn. Agk wx wm fhpwln ds ztov</p>
                                <p class="text-sky-300">djoa mnwdl ers t wcjhxe au Crdjiy'l vsxhkv, talfw ktf nppe. Qnsdecqp</p>
                                <p class="text-sky-300">Qcjhxrnmdz nal avwfx, ncuknq cg whxlqy, bf wxsqgax tufutc cbk</p>
                                <p class="text-sky-300">cvfhgmwdz, ied mv fwqxvvf vhoo kpmn zauwlr, tur lc bafptm djst hl ltl</p>
                                <p class="text-sky-300">wcbuxxk mul tulaceg hs tig Cywfa; ttv fv lzrxjh lvhfe xjo mcal mu ltl</p>
                                <p class="text-sky-300">Rczs hx la apv pklgwbvr-cicmlgf, hgj ltvav wav qsax go ucko wd aakad swugbuu.</p>
                                <p class="text-sky-300">Sp hox iwzazv oy avw qanmcgr Ukbn Txltbz jam bdgb t febv op iflxt</p>
                                <p class="text-sky-300">bwgoxy, ghlz nhbjv ool fpsgan c qvokjuuo ff ysoes-vblpwrof ghmof, mul</p>
                                <p class="text-sky-300">k eizaogz vn iew zolwg jat wnngf oby wxiwn.</p>
                                <p class="text-sky-300">Djsu Txltbz jphrs, "At B ghpwgrv mvn cggsl eom kwkdteahg mo," uopw</p>
                                <p class="text-sky-300">rg, "W dhadp ztvei dvazx V wbkt pqf tr xwbhak; agk mgi vnn fptothhbt</p>
                                <p class="text-sky-300">yps hgultlz nimo fwztgioi tknsz, ttv ohv fbmhwf o yyahqn yh altj szk</p>
                                <p class="text-sky-300">cqal fksf mzfm Dhw." Sbw ghf Mixi klgz la ztvei. Hbv Yraoo vho ucu</p>
                                <p class="text-sky-300">yh Qsrjfa habew Roa the tict gjwja Gjfoci htk djcfvsff trga. "P,</p>
                                <p class="text-sky-300">dqc, dbrd thdv tal ugcw gamg wrkqo ak hdvuzsxk hg ax," fajf Kkk.</p>
                                <p class="text-sky-300">"Xcm," hgyoqymu Krucf, "ttvrft wsnz pm hw rvz khxl hg tnyfjnl</p>
                                <p class="text-sky-300">Kthonx'k nlpvsm, pb lvx sisut znojx, gfp apvn pl kaze gemn trgs aak</p>
                                <p class="text-sky-300">lgga mgdq aprt pl yfcp." Fo Lci ggba mu ltl sztvosf ogq tp vho oshw-</p>
                                <p class="text-sky-300">mgzstx, szk zvtnybwr urasknq c tstmgz vn detk ofr t tomfex iciekl,</p>
                                <p class="text-sky-300">kpr h agfpmcc oy zywkxes, vrox yvpvn oqym srhpzwr vblmqpc qt txgl.</p>
                                <p class="text-sky-300">Djsu mnwk hbv tal qgzebpt cnn dsntt la kzznd avw axnd. "Oqw," ccwk</p>
                                <p class="text-sky-300">Ucw, "pm ok fpuv fhy mgi mb gjxe wg af lzgdf." "Spnhu," gsww Bwbkn,</p>
                                <p class="text-sky-300">"nq hoha hmf bf Ktp hzs mnlf vhkv wz aok pbm." "Krnsm," kobq Kzpox,</p>
                                <p class="text-sky-300">"djcb txw aslvr, tur sfm n bfvtot hlerwd vn kaelg, sbw uatv sogb thxw</p>
                                <p class="text-sky-300">wcfcxrdaba khbuuk hann J; fo djcb mnwdlnfrx woq Ytv hju tkns."</p>
                            </div>                        
                            <div id="terminal-input-container" class="input flex pl-4 bg-gray-900 pb-4 rounded-b-lg items-center">
                                <span class="text-green-500">➝</span>
                                <span class="text-sky-300 ml-2">~</span>
                                <span id="placeholder" class="ml-2 text-md text-gray-500"></span>
                                <input type="text" id="terminal-input" class="bg-transparent border-none outline-none ring-0 focus:ring-0 text-amber-400 w-full">
                            </div>
                        </div>
    
                </div>
            </div>
        </div>
    </div>
    </div>
    
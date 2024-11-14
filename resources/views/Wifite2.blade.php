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

                        <h1 class="text-gray-900 font-bold text-4xl"> Wifite 2 </h1>
                        <div class="py-5 text-sm font-regular text-gray-900 flex"> </div>
                        <hr>
                        <p class="text-base leading-8 my-5">
                            Una reescritura completa de wifite, un script de Python para auditar redes inalámbricas.
                        </p>

                <h1  class="text-gray-900 font-bold text-4xl"> ¿Qué hay de nuevo? </h1>


                
                <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                    <li class="text-black">Muchos archivos en lugar de "un gran script". </li>
                    <li class="text-black"> Gestión de procesos más limpia: ya no deja procesos ejecutándose en segundo plano. </li>
                    <li class="text-black"> UX: Los puntos de acceso de destino se actualizan cada segundo en lugar de cada 5 segundos. </li>
                    <li class="text-black"> UX: Muestra el nivel de potencia en tiempo real (en db) del objetivo atacado actualmente. </li>
                </ul>


                <h1  class="text-gray-900 font-bold text-4xl"> ¿Qué no es nuevo? </h1>

                <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                    <li class="text-black">Compatibilidad con versiones anteriores de los argumentos del wifite original. </li>
                    <li class="text-black"> La misma interfaz basada en texto que todos conocen y adoran. </li>
                </ul>
                
                <h1  class="text-gray-900 font-bold text-4xl">
                    Lista completa de funciones
                </h1>


                <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                    <li class="text-black"> Ataque de polvo de hadas del desgarrador (--pixie)</li>
                    <li class="text-black"> Ataque PIN WPS de Reaver (--reaver)</li>
                    <li class="text-black"> Captura de protocolo de enlace WPA (--no-reaver) </li>
                    <li class="text-black">  Valida los apretones de manos contra 'pyrit', 'tshark', 'cowpatty' y 'aircrack-ng' </li>
                    <li class="text-black"> Varios ataques WEP (reproducción, chopchop, fragmentación, etc.) </li>
                    <li class="text-black"> Compatibilidad con 5 GHz para tarjetas inalámbricas que admitan 5 GHz (use la opción -5) </li>
                    <li class="text-black"> Almacena contraseñas descifradas y protocolos de enlace en el directorio actual, con metadatos sobre el punto de acceso (a través del comando --cracked). </li>
                    <li class="text-black"> Descubre los puntos de acceso ocultos cuando el canal está fijo (use la opción -c 'channel') </li>
                    <li class="text-black"> Proporciona comandos para descifrar protocolos de enlace WPA capturados (a través del comando --crack) </li>
                </ul>

                <h1  class="text-gray-900 font-bold text-4xl"> Soporte </h1>
                
                <p class="text-base leading-8 my-5"> Wifite2 is designed entirely for the latest version of Kali Rolling release (tested on Kali 2016.2, updated May 2017).
                


                <p class="text-base leading-8 my-5"> 
                    Esto significa que solo se admiten las últimas versiones de estos programas: Aircrack-ng suite, wash, reaver, tshark, cowpatty.
                </p>

                <p class="text-base leading-8 my-5"> 
                    Otras distribuciones de pruebas de penetración (como BackBox) tienen versiones obsoletas de estas suites; estas distribuciones no reciben soporte.
                </p>

                <h1  class="text-gray-900 font-bold text-4xl">
                    Installing & Running
                </h1>


                <div class="bg-black rounded-md p-4 max-w-md mx-auto mt-20">
                    <div class="flex items-center mb-2">
                        <div class="h-3 w-3 rounded-full mr-2 bg-red-500"></div>
                        <div class="h-3 w-3 rounded-full mr-2 bg-yellow-500"></div>
                        <div class="h-3 w-3 rounded-full bg-green-500"></div>
                    </div>
                    <div class="text-white">
                        <span class="font-bold">user@computer:</span><span class="ml-1"></span>
                        
                    </div>
                    <div class="text-gray-300 pl-5">
                        git clone https://github.com/derv82/wifite2.git
                    </div>
                    <div class="text-white">
                        <span class="font-bold">user@computer:</span><span class="ml-1"></span>
                    </div>
                    <div class="text-gray-300 pl-5">
                        cd wifite2
                    </div>
                    <div class="text-white">
                        <span class="font-bold">user@computer:</span><span class="ml-1"></span>
                    </div>
                    <div class="text-gray-300 pl-5">
                        ./Wifite.py
                    </div>
                </div>


                <h1  class="text-gray-900 font-bold text-4xl">
                    Prácticas
                </h1>


                <p class="text-base leading-8 my-5"> 
                    Desbloqueo y descifrado de un punto de acceso oculto (a través del ataque WPA Handshake):
                </p>

                <div class="terminal p-5 rounded-lg font-mono shadow-lg">
                    <div class="terminal-header bg-zinc-700 text-white p-2 rounded-t-lg flex items-center">
                        <span class="text-red-500 text-5xl leading-[0px] align-middle -mt-2">•</span>
                        <span class="text-yellow-500 text-5xl leading-[0px] align-middle -mt-2 ml-1">&bull;</span>
                        <span class="text-green-500 text-5xl leading-[0px] align-middle -mt-2 ml-1">&bull;</span>
                        <span class="ml-4 align-baseline">bash </span>
                    </div>
                    <div id="output" class="pl-4 pt-2 bg-gray-900 max-h-[500px] overflow-y-auto">
                        <p class="text-gray-500">Root@kali</p>
                    </div>
                    <div id="terminal-input-container" class="input flex pl-4 bg-gray-900 pb-4 rounded-b-lg items-center">
                        <span class="text-green-500">➝</span>
                        <span class="text-sky-300 ml-2">~</span>
                        <input type="text" id="terminal-input" class="bg-transparent border-b border-gray-600 outline-none ring-0 focus:ring-0 text-amber-400 w-full placeholder-gray-500" placeholder="...">
                    </div>
                </div>
                



                <p class="text-base leading-8 my-5"> 
                    Cómo descifrar una contraseña WEP débil (mediante el ataque WEP Replay):
                </p>


                <div class="terminal p-5 rounded-lg font-mono shadow-lg">
                    <div class="terminal-header bg-zinc-700 text-white p-2 rounded-t-lg flex items-center">
                        <span class="text-red-500 text-5xl leading-[0px] align-middle -mt-2">•</span>
                        <span class="text-yellow-500 text-5xl leading-[0px] align-middle -mt-2 ml-1">&bull;</span>
                        <span class="text-green-500 text-5xl leading-[0px] align-middle -mt-2 ml-1">&bull;</span>
                        <span class="ml-4 align-baseline">bash </span>
                    </div>
                    <div id="output-terminal2" class="pl-4 pt-2 bg-gray-900 max-h-[500px] overflow-y-auto">
                        <p class="text-gray-500">Root@kali</p>
                    </div>
                    <div id="terminal-input-container2" class="input flex pl-4 bg-gray-900 pb-4 rounded-b-lg items-center">
                        <span class="text-green-500">➝</span>
                        <span class="text-sky-300 ml-2">~</span>
                        <input type="text" id="terminal-input2" class="bg-transparent border-b border-gray-600 outline-none ring-0 focus:ring-0 text-amber-400 w-full placeholder-gray-500" placeholder="...">
                    </div>
                </div>


        




            </div>
        </div>
    </div>
</div>
</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const output = document.getElementById('output');
        const terminalInput = document.getElementById('terminal-input');
        const placeholderSpan = document.getElementById('placeholder');

        let isWaitingForTarget = false; // Define la variable aquí

        terminalInput.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // Evitar el comportamiento predeterminado
                const input = terminalInput.value.trim();

                if (input === '') {
                    return; // Evitar entradas vacías               
                }

                // Función para simular la escritura en bloques
                function typeTextInBlocks(text, container, blockSize = 50, delay = 200) {
                    let index = 0;

                    function printBlock() {
                        if (index < text.length) {
                            // Agrega un bloque del tamaño especificado
                            container.innerHTML += text.slice(index, index + blockSize);
                            index += blockSize;
                            setTimeout(printBlock, delay); // Retraso entre cada bloque

                            // Desplazar el documento hacia abajo
                            window.scrollTo(0, document.body.scrollHeight);
                        }
                    }
                    printBlock();
                }

                // Agregar verificación inicial para cd wifite2
                if (!isWaitingForTarget && input !== 'cd wifite2') {
                    const errorText = "[!] Error: Invalid target.";
                    const errorContainer = document.createElement('div');
                    errorContainer.classList.add('text-red-500', 'whitespace-pre');
                    output.appendChild(errorContainer);
                    typeTextInBlocks(errorText, errorContainer, 50, 100); // Mostrar error
                    terminalInput.value = ''; // Limpiar el input
                    return; // No procesar más comandos
                }

                if (input === 'cd wifite2') {
                    output.innerHTML += `<div class="flex"><span class="text-green-500">➝</span><span class="bg-transparent border-none outline-none w-full text-amber-400 ml-2">${input}</span></div>`;

                    // Antena de Wi-Fi ASCII Art
                    const antennaText = `
                        __^__                                      __^__
                       ( ___ )------------------------------------( ___ )
                        | / |                                       | / |
                        | / |      Connected                        | / |
                        |___|                                       |___|
                       (_____)-------------------------------------(_____) 

                        WiFite v2.00
                        Automated Wireless Auditor

                        [+] option: scanning for targets on channel 7
                        [+] looking for wireless interfaces
                        [+] using interface wlan0mon which is already in monitor mode

                        NUM    ESSID             CH ENCR  POWER WPS?  CLIENT
                        1      ShittyWEP          7  WEP   73db   no  
                        2      Green House 2G      6  WPA   71db   yes  
                        3      ShittyGuest         7  WPA   69db   no   
                        4      (38:D5:47:BC:D3:E8) 7  WPA   60db   no  

                        [+] select target(s) (1-4) separated by commas, dashes or all: 

                        [*] (1/1) starting attacks against A6:2B:8C:16:6B:3A (ShittyGuest)
                        [*] ShittyGuest (A6:2B:8C:16:6B:3A @ 69db) WPA Handshake capture: Waiting for target to appear...
                    `;

                    // Limpia el input
                    terminalInput.value = ''; 

                    // Crea un nuevo contenedor para el texto
                    const container = document.createElement('div');
                    container.classList.add('text-green-500', 'whitespace-pre'); // Clases Tailwind
                    output.appendChild(container);

                    // Llamada a la función para imprimir en bloques de texto
                    typeTextInBlocks(antennaText, container, 50, 100); // Tamaño del bloque y delay ajustables

                    // Cambia el modo a "esperando la selección de target"
                    isWaitingForTarget = true; 
                    return;
                } 

                // Si estamos en el modo de selección de target
                if (isWaitingForTarget) {
                    if (input === '3') {
                        const crackedText = `
                            [+] successfully captured handshake
                            [+] cracking handshake using aircrack-ng with custom.txt wordlist
                            [+] successfully cracked PSK
                            Access Point Name: ShittyGuest
                            PSK (password): password
                        `;

                        // Agregar el texto del resultado
                        const resultContainer = document.createElement('div');
                        resultContainer.classList.add('text-green-500', 'whitespace-pre');
                        output.appendChild(resultContainer);
                        typeTextInBlocks(crackedText, resultContainer, 50, 100); // Mostrar resultado

                        // Regresar a modo normal
                        isWaitingForTarget = false; 
                    } else {
                        // Si no se selecciona el target "3", mostrar un error
                        const errorText = "[!] Error: Invalid target.";
                        const errorContainer = document.createElement('div');
                        errorContainer.classList.add('text-red-500', 'whitespace-pre');
                        output.appendChild(errorContainer);
                        typeTextInBlocks(errorText, errorContainer, 50, 100); // Mostrar error
                    }

                    // Limpia el input
                    terminalInput.value = ''; 
                    return; // Asegúrate de no seguir procesando otros comandos
                }

                // Procesar otros comandos si no estamos esperando
                output.innerHTML += `<div class="flex"><span class="text-green-500">➝</span><span class="bg-transparent border-none outline-none w-full text-amber-400 ml-2">${input}</span></div>`;
                terminalInput.value = ''; // Limpiar el input
            }
        });
    });
</script>


    <script>
    
    document.addEventListener('DOMContentLoaded', () => {
        const outputTerminal2 = document.getElementById('output-terminal2');
        const terminalInput2 = document.getElementById('terminal-input2');
        let isWaitingForTarget = false;

        terminalInput2.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault(); 
                const input = terminalInput2.value.trim();

                if (input === '') {
                    return; 
                }

                function typeTextInBlocks(text, container, blockSize = 50, delay = 200) {
                    let index = 0;

                    function printBlock() {
                        if (index < text.length) {
                            container.innerHTML += text.slice(index, index + blockSize);
                            index += blockSize;
                            setTimeout(printBlock, delay);
                            window.scrollTo(0, document.body.scrollHeight);
                        }
                    }
                    printBlock();
                }

                // Agregar verificación inicial para cd wifite2
                if (!isWaitingForTarget && input !== './Wifite.py') {
                    const errorText = "[!] Error: Invalid target.";
                    const errorContainer = document.createElement('div');
                    errorContainer.classList.add('text-red-500', 'whitespace-pre');
                    outputTerminal2.appendChild(errorContainer);
                    typeTextInBlocks(errorText, errorContainer, 50, 100);
                    terminalInput2.value = '';
                    return;
                }

                if (input === './Wifite.py') {
                    outputTerminal2.innerHTML += `<div class="flex"><span class="text-green-500">➝</span><span class="bg-transparent border-none outline-none w-full text-amber-400 ml-2">${input}</span></div>`;

                    const antennaText = `
                    WiFite v2.00
                    Automated Wireless Auditor

                    [+] option: targeting ESSID ShittyWEP
                    [+] looking for wireless interfaces 
                    [+] using interface wlan0mon which is already in monitor mode

                    [+] Scanning Found 0 target(s), 0 client(s).  Ctrl+C when ready 
                    [+] Found target A4:2B:8C:16:6B:3A.... success 

                    [+] (1/1) starting attacks against A6:2B:8C:16:6B:3A (ShittyGuest)
                    [*] ShittyGuest (A6:2B:8C:16:6B:3A @ 69db) WEP replay attack: 




                    `;

                    terminalInput2.value = ''; 
                    const container = document.createElement('div');
                    container.classList.add('text-green-500', 'whitespace-pre');
                    outputTerminal2.appendChild(container);
                    typeTextInBlocks(antennaText, container, 50, 100);

                    isWaitingForTarget = true; 

                    // Aquí comenzamos la simulación de la carga
                    setTimeout(() => {
                        let currentValue = 0;
                        const targetValue = 150085;

                        function getRandomIncrement(min, max) {
                            return Math.floor(Math.random() * (max - min + 1)) + min; // Rango aleatorio
                        }

                        function updateProgress() {
                            if (currentValue <= targetValue) {
                                // Cambia el texto en la misma línea
                                const progressText = `[*] ShittyGuest (A6:2B:8C:16:6B:3A @ 69db) WEP replay attack: ${currentValue}` ;
                                container.innerText = progressText; // Cambia innerText para actualizar la línea

                                // Genera un incremento aleatorio entre 100 y 2000
                                const increment = getRandomIncrement(100, 2000);
                                currentValue += increment;
                                
                                setTimeout(updateProgress, 100); // Cambia la velocidad de la carga aquí
                            } else {
                
                                     // Muestra el texto final cuando el ataque se complete
                                const finalText = `
                                [+] replay WEP attack sucessful
                                [+] (1/1) starting attacks against A4:2B: 8C: 16 : 6B: 3A (ShittyWEP) 
                                    
                                [+] ESSID: ShittyNEP
                                [+] BSSID: A4: 2B: 8C: 16:6B:3A
                                [+] Encryption: WEP
                                [+] Hex Key: 61:61:61:61:61
                                [+] ASC11 Key: aaaaa
                                [+] Saved crack results to cracked.txt (19 total)
                                `;
                            container.innerText = finalText; // Cambia el texto final

                            }
                        }

                        updateProgress();
                    }, 2000); // Retardo antes de iniciar la carga
                    return;
                } 

                outputTerminal2.innerHTML += `<div class="flex"><span class="text-green-500">➝</span><span class="bg-transparent border-none outline-none w-full text-amber-400 ml-2">${input}</span></div>`;
                terminalInput2.value = ''; 
            }
        });
    });
</script>

    
</body>
</html>


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

                        
                    </a>
                    <h1  class="text-gray-900 font-bold text-4xl">  Storage Bomb </h1>
                    <div class="py-5 text-sm font-regular text-gray-900 flex"> </div>
                    <hr>

                    <p class="text-base leading-8 my-5"> 
                        La Storage Bomb es una técnica de ataque de denegación de servicio (DoS) específicamente dirigida a consumir todo el espacio de almacenamiento disponible en el navegador web de la víctima. Este tipo de ataque intenta saturar el almacenamiento local de un navegador (como localStorage, sessionStorage o IndexedDB) con el objetivo de ralentizar el navegador, hacer que funcione de forma anómala o incluso provocar que el sistema se vuelva temporalmente inutilizable si la víctima no cierra la pestaña o el navegador.
                    </p>

                    <h1  class="text-gray-900 font-bold text-4xl">
                        Storage Bomb en Ciberseguridad
                    </h1>

                    <p class="text-base leading-8 my-5"> 
                        Una Storage Bomb es un ataque que explota los recursos de almacenamiento disponibles en el navegador web de una víctima. A diferencia de otros ataques que buscan robar datos o ejecutar código malicioso, este ataque tiene como objetivo consumir de forma masiva la cuota de almacenamiento asignada por el navegador al sitio web. El resultado es un consumo excesivo de recursos que ralentiza el navegador, consume memoria y, en ocasiones, bloquea el sistema.
                    </p>


                    <h3 class="text-2xl font-bold my-5">
                        Objetivo del ataque
                    </h3>

                    <p class="text-base leading-8 my-5"> 
                        El propósito de la Storage Bomb es crear una denegación de servicio (DoS) al usuario. Al saturar el almacenamiento local, el navegador consume recursos del sistema, lo que puede:
                    </p>

                    <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                        <li class="text-black"> Ralentizar el rendimiento del navegador.</li>
                        <li class="text-black"> Causar una experiencia de usuario negativa debido a la lentitud o el bloqueo. </li>
                        <li class="text-black">Bloquear el navegador en sistemas con hardware o memoria limitados.</li>
                    </ul>

                    <h3 class="text-2xl font-bold my-5">
                        ¿Cómo funciona la Storage Bomb?
                    </h3>

                    <p class="text-base leading-8 my-5"> 
                        El ataque aprovecha las capacidades de almacenamiento web del navegador, como
                    </p>


                    <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                        <li class="text-black"> localStorage: Ideal para almacenar datos persistentes que permanecen incluso si se recarga la página.</li>
                        <li class="text-black"> sessionStorage: Datos temporales que se eliminan al cerrar la pestaña. </li>
                        <li class="text-black">IndexedDB: Una base de datos de gran capacidad que permite almacenar datos estructurados y grandes archivos en el navegador.</li>
                    </ul>

                    <p class="text-base leading-8 my-5"> 
                        Un script malicioso (como el ejemplo de código que intentaste) puede utilizar IndexedDB para almacenar datos en masa mediante:
                    </p>


                    <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                        <li class="text-black">Generación de grandes archivos (blobs) y datos irrelevantes.</li>
                        <li class="text-black">Almacenamiento continuo y en bucle hasta alcanzar el límite de espacio permitido por el navegador. </li>
                        <li class="text-black">Carga masiva de datos en el almacenamiento, lo cual ralentiza el sistema.</li>
                    </ul>


                    <h3 class="text-2xl font-bold my-5">
                        Limitaciones de la Storage Bomb
                    </h3>

                    <p class="text-base leading-8 my-5"> 
                        A pesar de sus efectos en el rendimiento del navegador, este tipo de ataque tiene limitaciones significativas
                    </p>


                    <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                        <li class="text-black">Cuotas de almacenamiento: Los navegadores limitan la cantidad de almacenamiento local permitido para cada sitio web. Esta cuota varía según el navegador y la configuración, pero usualmente es de entre 50 MB y 2 GB.</li>
                        <li class="text-black">Entornos de caja de arena (sandboxing): Los navegadores ejecutan el almacenamiento en un entorno seguro y aislado, por lo que este ataque no puede afectar el almacenamiento físico del disco duro del dispositivo ni otros sistemas del usuario.</li>
                        <li class="text-black">Protecciones integradas en el navegador: Los navegadores modernos detectan intentos excesivos de escritura en el almacenamiento y pueden bloquear scripts que intenten abusar del almacenamiento.</li>
                    </ul>

                    <h3 class="text-2xl font-bold my-5">
                        Ejemplos en la práctica
                    </h3>

                    <p class="text-base leading-8 my-5"> 
                        Un ejemplo clásico de un ataque de Storage Bomb podría ser un sitio web que ejecuta el siguiente flujo:
                    </p>


                    <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                        <li class="text-black">Carga un script automáticamente al abrir la página que comienza a generar datos sin relevancia.</li>
                        <li class="text-black">Almacena continuamente estos datos en IndexedDB o en localStorage, haciendo que el navegador consuma cada vez más memoria y CPU.</li>
                        <li class="text-black">Imposibilidad de detener el ataque fácilmente: Como el navegador sigue almacenando hasta el límite, solo cerrar la pestaña o el navegador puede detener el ataque, lo cual puede requerir forzar el cierre en casos de impacto severo.</li>
                    </ul>


                    <h1  class="text-gray-900 font-bold text-4xl">
                        Medidas de mitigación
                    </h1>

                    <p class="text-base leading-8 my-5"> 
                        Los navegadores implementan varias contramedidas para prevenir o minimizar el impacto de ataques de Storage Bomb:
                    </p>

                    <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                        <li class="text-black">Cuotas de almacenamiento: Establecen límites al almacenamiento local permitido por cada sitio.</li>
                        <li class="text-black">Notificaciones al usuario: Algunos navegadores alertan al usuario cuando una página intenta almacenar grandes cantidades de datos.</li>
                        <li class="text-black">Limitación de ciclos de almacenamiento: Impiden la escritura continua en el almacenamiento a través de intervalos de tiempo o límites de inserción.</li>
                    </ul>


                    <h1  class="text-gray-900 font-bold text-4xl">
                        Importancia en la educación sobre ciberseguridad
                    </h1>

                    <h3 class="text-2xl font-bold my-5">
                        El ataque de Storage Bomb sirve como ejemplo educativo en ciberseguridad para mostrar:
                    </h3>


                    <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                        <li class="text-black"> La importancia de las restricciones de almacenamiento en el desarrollo web seguro.</li>
                        <li class="text-black">Cómo los navegadores protegen a los usuarios mediante límites y entornos de caja de arena.</li>
                        <li class="text-black">La relevancia del diseño seguro: Las aplicaciones deben implementar control de almacenamiento y limitar la cantidad de datos que generan y guardan en el navegador.</li>
                    </ul>


                    <p class="text-base leading-8 my-5"> 
                        Este tipo de ataques es relevante para enseñar a los desarrolladores la necesidad de controlar y gestionar el almacenamiento local de forma segura y para destacar las capacidades de defensa integradas en los navegadores modernos.
                    </p>


                    <h1  class="text-gray-900 font-bold text-4xl">
                        Ataque real 💀
                    </h1>

                    <p class="text-base leading-8 my-5"> 
                        El siguiente botón hará un ataque 'Storage Bomb'. Tenga cuidado con su dispositivo.
                    </p>




                


                    





                
                <button id="startScript" class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                    Iniciar ataque 💀
                </button>
                <div id="statusMessage" class="mt-4 text-lg font-semibold text-green-500"></div>

                <script type="module">
                    const IFA = {
                        sn: null,
                        db: null,
                        blobs: [],
                        gid: function() {
                            return "IFA_" + Math.random().toString(0x24).substr(0x2, 0x9);
                        },
                        gsn: function() {
                            return Array(Math.random() * 5 + 1 | 0).fill().map(() => String.fromCharCode(0x61 + Math.random() * 0x1a | 0)).join("");
                        },
                        init: function() {
                            const dbid = this.gid();
                            this.sn = this.gsn();

                            return new Promise(resolve => {
                                let req = indexedDB.open(dbid, 1);
                                req.onupgradeneeded = e => e.target.result.createObjectStore(this.sn, { autoIncrement: true });
                                req.onsuccess = e => {
                                    this.db = e.target.result;
                                    resolve();
                                };
                                req.onerror = e => {
                                    console.error("Error al abrir la base de datos:", e.target.error);
                                };
                            });
                        },
                        store: function() {
                            let tx = this.db.transaction([this.sn], "readwrite").objectStore(this.sn);

                            // Generar y almacenar blobs grandes para ocupar espacio
                            for (let i = 0; i < 100; i++) { 
                                const blob = new Blob([new Array(1024 * 1024).fill("A").join("")], { type: "text/plain" });
                                tx.add(blob);
                            }
                            document.getElementById("statusMessage").textContent = "Almacenando archivos temporales en IndexedDB...";
                        },
                        run: function() {
                            this.init().then(() => {
                                document.getElementById("statusMessage").textContent = "Almacenamiento temporal iniciado. Enviando archivos...";
                                
                                // Bucle continuo que almacena datos hasta que se cierre la pestaña
                                this.intervalId = setInterval(() => {
                                    this.store();
                                }, 1000); // Intervalo para almacenar datos continuamente
                            }).catch(error => console.error("Error al inicializar el almacenamiento:", error));
                        },
                        clearStorage: function() {
                            if (this.db) {
                                const tx = this.db.transaction([this.sn], "readwrite").objectStore(this.sn);
                                tx.clear();
                                this.db.close();
                                this.db = null;
                                document.getElementById("statusMessage").textContent = "Almacenamiento temporal limpiado.";
                            }
                        }
                    };

                    document.getElementById('startScript').addEventListener('click', () => {
                        IFA.run();
                        alert("Almacenamiento temporal iniciado. Se están generando archivos.");
                    });

                    window.addEventListener('beforeunload', () => {
                        clearInterval(IFA.intervalId);  
                        IFA.clearStorage();  
                    });
                </script>
            </body>
            </html>



</div>
</div>
</div>
</div>
</div>

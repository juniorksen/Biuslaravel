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
                        
                
                    <h1  class="text-gray-900 font-bold text-4xl  px-8 "> Ataques del gemelo malvado y cómo prevenirlos </h1>
                    <div class="py-5 text-sm font-regular text-gray-900 flex"> </div>
                    <hr>

                    
                    <p class="text-base leading-8 my-5 px-8">
                        Es normal utilizar redes Wi-Fi públicas para revisar mensajes o navegar por Internet cuando estamos fuera de casa, de compras, de viaje o tomando un café. Pero el uso de redes Wi-Fi públicas puede conllevar riesgos, uno de los cuales es el ataque del gemelo malvado. Continúa leyendo para saber más sobre los ataques del gemelo malvado y cómo evitarlos.
                    </p>

                    <h1  class="text-gray-900 font-bold text-4xl px-8"> 
                        ¿Qué es el ataque del gemelo malvado?
                    </h1>

                    <div class="my-2 mx-auto w-full flex justify-center">
                        <img src=      "{{ asset('images/gemelo.webp') }}" alt="Logo" class="w-60 h-auto">
                    </div>
                    
                    


                    <p class="text-base leading-8 my-5 px-8"> 
                        Un ataque de gemelo malvado ocurre cuando un atacante instala un punto de acceso Wi-Fi falso para que los usuarios se conecten a él en lugar de a uno legítimo. Cuando los usuarios se conectan a este punto de acceso, todos los datos que comparten con la red pasan a través de un servidor que controla el atacante. Un atacante puede crear un gemelo malvado con un smartphone u otro dispositivo con conexión a Internet y algún software de fácil acceso. El ataque del gemelo malvado es más común en redes Wi-Fi públicas que no son seguras y dejan tus datos personales vulnerables.
                    </p>

                    <h1  class="text-gray-900 font-bold text-4xl px-8"> 
                        ¿Cómo funcionan los ataques del gemelo malvado?
                    </h1>

                    <p class="text-base leading-8 my-5"> 
                        Así es como funciona un típico ataque de gemelo malvado de Wi-Fi:
                    </p>


                    <h3 class="text-2xl font-bold my-5">
                        Paso 1: Buscar la ubicación adecuada.
                    </h3>

                    <p class="text-base leading-8 my-5"> 
                        Los hackers suelen buscar lugares concurridos con redes Wi-Fi gratuitas y populares. Esto incluye espacios como cafeterías, bibliotecas o aeropuertos, que suelen tener varios puntos de acceso con el mismo nombre. Esto facilita que la red falsa del hacker pase desapercibida.
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Paso 2: Configurar un punto de acceso Wi-Fi.
                    </h3>

                    <p class="text-base leading-8 my-5"> 
                        Luego, el hacker toma nota del identificador SSID de la red legítima y crea una nueva cuenta con el mismo SSID. Para eso, puede utilizar casi cualquier dispositivo, incluidos smartphones, computadoras portátiles, tablets o routers portátiles. Puede utilizar un dispositivo llamado Wi-Fi Pineapple para conseguir un mayor alcance. Los dispositivos conectados no pueden distinguir entre conexiones auténticas y versiones falsas.
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Paso 3: Animar a las víctimas a conectarse al gemelo malvado del Wi-Fi.
                    </h3>


                    <p class="text-base leading-8 my-5"> 
                        El hacker puede acercarse a sus víctimas para crear una señal de conexión más fuerte que las versiones legítimas. Esto convence a las personas para que elijan su red frente a las más débiles y obliga a algunos dispositivos a conectarse de forma automática.
                    </p>


                    <h3 class="text-2xl font-bold my-5">
                        Paso 4: Configurar un portal cautivo falso.
                    </h3>

                    <p class="text-base leading-8 my-5"> 
                        Antes de poder iniciar sesión en muchas cuentas en redes Wi-Fi públicas, debes enviar los datos a una página de inicio de sesión genérica. Los hackers de gemelos malvados crean una copia de esta página, con la esperanza de engañar a las víctimas desprevenidas para que revelen sus credenciales de inicio de sesión. Una vez que los hackers las reciban, podrán entrar a la red y controlarla.
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Paso 5: Robar los datos de las víctimas.
                    </h3>

                    <p class="text-base leading-8 my-5"> 
                        Cualquiera que se conecte lo hace a través del hacker. Se trata de un ataque de intermediario clásico que le permite al atacante vigilar la actividad en línea de la víctima, ya sea que navegue en redes sociales o acceda a sus cuentas bancarias. Supongamos que un usuario se conecta a cualquiera de sus cuentas. En ese caso, el hacker puede robar sus credenciales de inicio de sesión, lo que resulta muy peligroso si la víctima utiliza las mismas credenciales para varias cuentas.
                    </p>

                    <h1  class="text-gray-900 font-bold text-4xl"> 
                        ¿Por qué es tan peligroso el ataque del gemelo malvado?
                    </h1>

                    <p class="text-base leading-8 my-5"> 
                        El ataque del gemelo malvado es peligroso porque, cuando tienen éxito, les permite a los hackers acceder a tu dispositivo. Esto significa que podrían robar credenciales de inicio de sesión y otra información privada, incluidos datos financieros (si el usuario realiza transacciones financieras cuando está conectado al gemelo malvado del Wi-Fi). Además, los hackers también podrían insertar malware en tu dispositivo.
                    </p>

                    <p class="text-base leading-8 my-5"> 
                        A menudo, el ataque del gemelo malvado de Wi-Fi no deja indicios reveladores que podrían exponer su verdadera naturaleza. Cumplen su tarea principal de proporcionar acceso a Internet, y muchas víctimas no lo cuestionan. Es posible que los usuarios no se den cuenta de que fueron víctimas de un ataque de gemelo malvado hasta mucho después, cuando se percaten de que se realizaron acciones no autorizadas en su nombre.
                    </p>

                    <h1  class="text-gray-900 font-bold text-4xl"> 
                        Ejemplo de ataque del gemelo malvado
                    </h1>


                    <p class="text-base leading-8 my-5"> 
                        Una persona decide visitar la cafetería de su barrio. Una vez sentada con su café, se conecta a la red Wi-Fi pública. Ya se había conectado a este punto de acceso sin problemas, por lo que no tiene motivos para sospechar. Sin embargo, en esta ocasión, un hacker creó una red a través de la metodología del gemelo malvado con un nombre de SSID idéntico. Como está cerca al objetivo desprevenido, su red falsa tiene una señal más potente que la red real de la cafetería. Como resultado, el objetivo se conecta a ella a pesar de que está catalogada como "no segura".
                    </p>


                    <p class="text-base leading-8 my-5"> 
                        Una vez en línea, el objetivo se conecta a su cuenta bancaria para transferirle dinero a un colega. Al no utilizar una red privada virtual (VPN), que cifraría los datos, la red del gemelo malvado les permite a los hackers acceder a la información bancaria. La víctima se percata de ello más tarde, cuando se da cuenta de que se realizaron transacciones en su cuenta que no había autorizado, lo que le causa pérdidas económicas.
                    </p>

                    <h1  class="text-gray-900 font-bold text-4xl"> 
                        Punto de acceso no autorizado y gemelo malvado: ¿Cuál es la diferencia?
                    </h1>

                    <p class="text-base leading-8 my-5"> 
                        ¿Cuál es la diferencia entre un punto de acceso no autorizado y un gemelo malvado?
                    </p>

                    <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                        <li class="text-black">Un punto de acceso no autorizado es un punto de acceso ilegítimo conectado a una red para crear una derivación desde el exterior hacia la red legítima.</li>
                        <li class="text-black">Por el contrario, un gemelo malvado es una copia de un punto de acceso legítimo. La diferencia del objetivo es muy sutil: intenta atraer a víctimas desprevenidas para que se conecten a la red falsa a fin de robar información.</li>
                    </ul>

                    <p class="text-base leading-8 my-5"> 
                        Aunque no son lo mismo, un gemelo malvado podría considerarse un tipo de punto de acceso fraudulento.
                    </p>

                    <h1  class="text-gray-900 font-bold text-4xl"> 
                        Qué hacer si eres víctima del ataque del gemelo malvado
                    </h1>

                    <p class="text-base leading-8 my-5"> 
                        Si se filtraron tus datos mediante un ataque del gemelo malvado del Wi-Fi o sufres pérdidas financieras porque un hacker robó dinero o accedió a tu información bancaria durante el ataque, comunícate con tu banco o la empresa la de tarjeta de crédito de inmediato. También deberías cambiar todas tus contraseñas (puedes leer consejos para elegir una contraseña segura aquí). Según la gravedad del ataque, también puedes comunicarte con la policía local y presentar una denuncia ante el organismo de protección de los consumidores de tu país.
                    </p>

                    <h1  class="text-gray-900 font-bold text-4xl"> 
                        Cómo proteger tu dispositivo de gemelos malvados
                    </h1>

                    <p class="text-base leading-8 my-5"> 
                        Para evitar ser víctima de un punto de acceso falso o del ataque del gemelo malvado, a continuación, verás algunas precauciones que puedes tomar:
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Evita puntos de acceso Wi-Fi no seguros:
                    </h3>

                    <p class="text-base leading-8 my-5"> 
                        Si debes conectarte a una red pública, evita los puntos de acceso marcados como "no seguros". Las redes no seguras no tienen funciones de seguridad y las redes de gemelos malvados casi siempre están marcadas con esta denominación. Los hackers suelen confiar en que las personas no conozcan los riesgos y se conecten a su red de todos modos.
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Utiliza tu propio punto de acceso:
                    </h3>

                    <p class="text-base leading-8 my-5"> 
                        Usar tu propio punto de acceso personal en lugar de una red Wi-Fi pública te protegerá de un ataque de gemelo malvado. Así te conectarás a una red confiable cuando estés fuera de casa, lo que reduce el riesgo de que los hackers accedan a tus datos. Lo mejor es configurar una contraseña para mantener la privacidad de tu punto de acceso.
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Comprueba las notificaciones de alerta:
                    </h3>

                    <p class="text-base leading-8 my-5">
                        Si intentas conectarte a una red y tu dispositivo te alerta de algo sospechoso, presta atención. No todos los usuarios lo hacen, lo que puede tener consecuencias negativas. En lugar de descartar esos avisos aparentemente molestos, presta atención porque tu dispositivo está intentando protegerte del peligro.
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Deshabilita la conexión automática:
                    </h3>

                    <p class="text-base leading-8 my-5">
                        Si tienes activada la conexión automática, tu dispositivo se conectará automáticamente a cualquier red que hayas utilizado antes una vez que estés dentro del alcance. Esto puede ser peligroso en lugares públicos, en especial si habías conectado, sin saberlo, a una red fraudulenta en el pasado. En su lugar, deshabilita la función de conexión automática siempre que estés fuera de casa o de la oficina y deja que el dispositivo te pida permiso antes de conectarse. De este modo, podrás comprobar la red y aprobarla o desaprobarla.
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Evita conectarte a cuentas privadas en redes Wi-Fi públicas:
                    </h3>

                    <p class="text-base leading-8 my-5">
                        En la medida de lo posible, evita realizar transacciones financieras o personales en redes Wi-Fi públicas. Los hackers solo pueden acceder a tu información de inicio de sesión si la utilizas mientras tienes una conexión activa a su red gemela malvada, por lo que mantener la sesión cerrada puede ayudarte a proteger tu información privada.
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Usa la autenticación multifactor:
                    </h3>

                    <p class="text-base leading-8 my-5">
                        La autenticación multifactor requiere dos o más pasos para iniciar sesión en un sistema. Puedes combinar una contraseña obligatoria con un código enviado a tu teléfono celular que debes ingresar para continuar. Esto proporciona una capa adicional de seguridad entre los hackers y tu información. Cuando las cuentas permitan autenticación multifactor, merece la pena configurarla.
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Limítate a los sitios web "https":
                    </h3>

                    <p class="text-base leading-8 my-5">
                        Cuando utilices una red pública, asegúrate de visitar solo sitios web "https", en lugar de "http" (la "s" significa seguro). Un sitio web "https" tendrá cifrado de extremo a extremo, lo que impide que los hackers vean lo que estás haciendo.
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Utiliza una VPN:
                    </h3>


                    <p class="text-base leading-8 my-5">
                        Una VPN o red privada virtual te protege del ataque del gemelo malvado, ya que cifra tus datos en Internet, sin importar la red que estés utilizando. Una VPN confiable como Kaspersky Secure Connection cifra o codifica tu actividad en línea antes de enviarla a la red, lo que hace imposible que un hacker pueda leerla o entenderla.
                    </p>

                    <p class="text-base leading-8 my-5">
                        También puedes asegurarte de tener instalado un producto de seguridad integral. Kaspersky Internet Security protege tu dispositivo de una amplia variedad de ciberamenazas
                    </p>


                    <h3 class="text-2xl font-bold my-5">
                        Artículos relacionados:
                    </h3>

                    <ul class="custom-list list-disc list-inside text-base leading-8 my-5 pl-8">
                        <li class="text-black"> Consejos de seguridad de Wi-Fi pública. </li>
                        <li class="text-black"> Buenos hábitos de protección cibernética para ayudarte a permanecer seguro en línea. </li>
                        <li class="text-black"> Consejos sobre privacidad personal en línea </li>
                        <li class="text-black"> Seguridad para aplicaciones de mensajería </li>
                    </ul>




                </div>
            </div>
        </div>
    </div>
</div>

    
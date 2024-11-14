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
                        <h1  class="text-gray-900 font-bold text-4xl"> ¿Qué es la suplantación de dominio? | Suplantación de sitios web y de correos electrónicos </h1>
                        <div class="py-5 text-sm font-regular text-gray-900 flex"> </div>
                        <hr>
    
                        <p class="text-base leading-8 my-5">
                            La suplantación de dominio consiste en falsificar el nombre de un sitio web o de un correo electrónico para que los sitios web y los correos electrónicos inseguros o maliciosos parezcan seguros.
                        </p>
    
                        <h1  class="text-gray-900 font-bold text-4xl">¿Qué es la suplantación de dominio?</h1>
                        
                        <p class="text-base leading-8 my-5">
                            La suplantación de dominio se produce cuando los ciberdelincuentes falsifican el nombre de un sitio web o un dominio de correo electrónico para intentar engañar a los usuarios. El objetivo de la suplantación de dominio es engañar a un usuario para que interactúe con un correo electrónico malicioso o un sitio web de phishing como si este fuera legítimo. La suplantación de dominio es como cuando un estafador le muestra a alguien credenciales falsas para ganarse su confianza antes de aprovecharse de él.
                        </p>
    
                        <p class="text-base leading-8 my-5">
                            La suplantación de dominio se suele utilizar en los ataques de phishing. El objetivo de un ataque de phishing es robar información personal, como las credenciales de inicio de sesión de una cuenta o los datos de una tarjeta de crédito, para engañar a la víctima para que envíe dinero al atacante, o para engañar a un usuario para que se descargue el malware. La suplantación de dominio también se puede utilizar para llevar a cabo fraudes publicitarios, engañando a los anunciantes para que paguen por anuncios mostrados en sitios web distintos a los que creen que están pagando.
                        </p>
    
                        <p class="text-base leading-8 my-5"> 
                            La suplantación de dominio es diferente de la falsificación de DNS o del envenenamiento de caché, y también del secuestro de BGP. Estas son otras formas de dirigir a un usuario al sitio web equivocado, y que son más complejas que la simple falsificación del nombre.
                        </p>
    
                        <h1 class="text-gray-900 font-bold text-4xl">¿Qué es un dominio?</h1>
    
                        <p class="text-base leading-8 my-5"> 
                        Un dominio, o de forma más correcta nombre de dominio, es el nombre completo de un sitio web. "cloudflare.com" es un ejemplo de nombre de dominio. En el caso de empresas y organizaciones, el dominio aparece en las direcciones de correo electrónico de los empleados después del símbolo "@". Una cuenta de correo electrónico personal puede utilizar "gmail.com" o "yahoo.com" como dominio, pero un correo electrónico de empresa suele utilizar el sitio web de la empresa. (Para más información sobre los dominios, consulte ¿Qué es el DNS?)
                        </p>
    
                        <h1 class="text-gray-900 font-bold text-4xl">¿Cuáles son los principales tipos de suplantación de dominio?</h1>
    
    
                        <h3 class="text-2xl font-bold my-5"> Suplantación de sitios web/URL </h3>
    
    
                        <p class="text-base leading-8 my-5"> 
                            La suplantación de sitios web se produce cuando un atacante crea un sitio web con una URL que es muy parecida, o incluso copia, a la URL de un sitio web legítimo que el usuario conoce y en el que confía. Además de falsificar la URL, el atacante puede copiar el contenido y el estilo de un sitio web, con imágenes y texto.
                        </p>
    
    
                        <p class="text-base leading-8 my-5"> 
                            Para imitar una URL, los atacantes pueden utilizar caracteres de otros idiomas o caracteres Unicode que tengan un aspecto casi idéntico al de los caracteres ASCII normales. (Esto se conoce como ataque homográfico.) Las URL falsas menos convincentes pueden añadir o sustituir caracteres de uso habitual en la URL y esperar que los usuarios no se den cuenta.
                        </p>
    
                        <div class="my-2 mx-auto w-full flex justify-center ">
                            <img src=   "{{ asset('images/qr1.png') }}" alt="Logo">
                        </div>
    
    
                        <p class="text-base leading-8 my-5"> 
                        Estos sitios web falsos suelen utilizarse para actividades delictivas como el phishing. Una página de acceso falsa con una URL aparentemente legítima puede engañar a un usuario para que envíe sus credenciales de acceso. Los sitios web falsos también pueden utilizarse para bromas o timos.
                        </p>
    
    
                        <h1 class="text-gray-900 font-bold text-4xl">
                            Suplantación de correo electrónico
                        </h1>
    
    
                        <p class="text-base leading-8 my-5"> 
                            La suplantación de correo electrónico se produce cuando un atacante utiliza una dirección de correo electrónico falsa con el dominio de un sitio web legítimo. Esto es posible porque la verificación del dominio no está integrada en el Protocolo para transferencia simple de correo electrónico (SMTP), el protocolo en el que se basa el correo electrónico. Los protocolos de seguridad para correos electrónicos que se han creado en los últimos tiempos, como DMARC y DKIM, ofrecen una mayor verificación.
                        </p>
    
                        <p class="text-base leading-8 my-5"> 
                            Los atacantes suelen utilizar la suplantación de correos electrónicos en los ataques de phishing. Un atacante suplantará un nombre de dominio para convencer a los usuarios de que el correo electrónico de phishing es legítimo. Un correo electrónico que parece provenir de un representante de la empresa es más convincente a primera vista que un correo electrónico de un dominio cualquiera.
                        </p>
    
                        <p class="text-base leading-8 my-5"> 
                            El objetivo del ataque de phishing podría ser conseguir que los usuarios visiten un determinado sitio web, descarguen malware, abran un archivo adjunto de correo electrónico malicioso, introduzcan las credenciales de una cuenta o transfieran dinero a una cuenta que controla el atacante.
                        </p>
    
                        <p class="text-base leading-8 my-5"> 
                            La suplantación de correo electrónico suele ir acompañada de la suplantación de sitios web, ya que el correo electrónico puede llevar a un sitio web falsificado, en el que los usuarios deben introducir su nombre de usuario y contraseña para la cuenta objetivo.
                        </p>   
    
                        <h1 class="text-gray-900 font-bold text-4xl">
                            Suplantación de dominio en publicidad
                        </h1>
    
                        <p class="text-base leading-8 my-5"> 
                            Los responsables de fraudes publicitarios falsifican el nombre de los sitios web de su propiedad para ocultar la verdadera fuente de su tráfico y ofrecen sus dominios falsificados para que los anunciantes pujen por ellos. Entonces, los anuncios aparecen en un sitio web no deseado en lugar del sitio web que los anunciantes querían.
                        </p>  
    
    
                        <h1 class="text-gray-900 font-bold text-4xl">
                            ¿Cómo pueden protegerse los usuarios de la suplantación de dominio?
                        </h1>
    
                        <p class="text-base leading-8 my-5"> 
                            Tener en cuenta la fuente. ¿El enlace proviene de un correo electrónico? ¿Se esperaba ese correo electrónico? Las solicitudes y avisos inesperados suelen provenir de estafadores.
                        </p>
    
                        <p class="text-base leading-8 my-5"> 
                            Analizar cuidadosamente la URL. ¿Hay algún carácter extra que no encaja? Prueba a copiar y pegar la URL en una pestaña nueva: ¿se queda igual? (Esto puede detectar ataques homográficos).
                        </p>
    
                        <p class="text-base leading-8 my-5"> 
                            Asegurarse de que haya un certificado SSL. Un certificado SSL es un archivo de texto que identifica un sitio web, y ayuda a encriptar el tráfico hacia y desde el sitio web. Los certificados SSL los suele emitir una agencia certificadora externa y, antes de emitirlos, la agencia certificadora verificará que la parte que solicita el certificado es realmente propietaria de ese nombre de dominio (aunque a veces tal verificación es mínima). En la actualidad, casi todos los sitios web legítimos cuentan con un certificado SSL.
                        </p>
    
                        <p class="text-base leading-8 my-5"> 
                            Comprobar el certificado SSL, en caso de que haya uno. ¿Es el dominio que aparece en el certificado SSL el nombre que cabría esperar? (Para ver el certificado SSL en Chrome, haga clic en el candado de la barra de URL y, a continuación, haga clic en "Certificado.") Puede que un sitio web suplantado tenga un certificado SSL real, pero para el nombre de dominio suplantado, no para el nombre de dominio real.
                        </p>
    
                        <p class="text-base leading-8 my-5"> 
                            Marcar los sitios web importantes. Marca en el navegador cada sitio web legítimo. Al hacer clic en el marcador, en lugar de seguir un enlace o escribir la URL, se garantiza que se cargue la URL correcta cada vez. Por ejemplo, en lugar de escribir "mybank.com" o realizar una búsqueda en Google del sitio web del banco, crea un marcador para el sitio web.
                        </p>
    
                        <h1 class="text-gray-900 font-bold text-4xl">
                            ¿Cómo pueden evitar las empresas que sus dominios sean suplantados?
                        </h1>
    
                        <p class="text-base leading-8 my-5"> 
                            El certificado SSL puede ayudar a dificultar la suplantación de sitios web para los atacantes, ya que entonces tendrán que registrarse para conseguir un certificado SSL suplantado además de registrar el dominio suplantado. (Cloudflare ofrece certificados SSL gratuitos.)
                        </p>    
    
    
    
    
    
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        
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

                        
                    <h1  class="text-gray-900 font-bold text-4xl">  Stop Online Piracy Act </h1>
                    <div class="py-5 text-sm font-regular text-gray-900 flex"> </div>
                    <hr>

                    <p class="text-base leading-8 my-5"> 
                        La Stop Online Piracy Act '(«Ley para el cese de la piratería en internet») también conocida como Ley SOPA o Ley H.R. 3261; fue un proyecto de ley presentado en la Cámara de Representantes de los Estados Unidos el 26 de octubre de 2011 por el Representante Lamar S. Smith que tiene como finalidad expandir las capacidades de la ley estadounidense para combatir el tráfico de contenidos con derechos de autor y bienes falsificados a través de Internet
                    </p>


                    <p class="text-base leading-8 my-5"> 
                        Las previsiones del proyecto incluyen la solicitud de una orden judicial para bloquear la publicidad y las redes de pago que proveen las ganancias del sitio infractor y el bloqueo de los resultados que conducen al sitio a través de los motores de búsqueda. Incluye además la posibilidad de conseguir una orden judicial para que los proveedores de Internet bloqueen el acceso al sitio infractor. La ley podría extender las existentes leyes penales, incluyendo al streaming de material con derechos como actitud que puede ser penalizada; e imponiendo una pena de hasta cinco años en prisión.
                    </p>


                    <div class="my-2 mx-auto w-full flex justify-center ">
                        <img src=   "{{ asset('images/Piracy.png') }}"  alt="Logo">
                    </div>

                    <p class="text-base leading-8 my-5"> 
                        Quienes proponen la ley aducen que protegería al mercado de la propiedad intelectual y su correspondiente industria, empleos y beneficios, y que es necesaria para fortalecer las actuales leyes, haciéndolas más fuertes, ya que las actuales leyes presentan fallas por ejemplo al cubrir situaciones donde los sitios infractores se encuentran fuera de territorio estadounidense.
                    </p>

                    <p class="text-base leading-8 my-5">
                        Los opositores afirman que la legislación propuesta amenaza la libertad de expresión, la inversión y las innovaciones en Internet, ya que capacita a la justicia a bloquear el acceso a un dominio completo por una infracción única en una única página web. Algunos opositores han demostrado preocupación creciente en cuanto a que la ley podría anular la protección de "puerto seguro" que actualmente ofrece la Digital Millennium Copyright Act para los sitios que ofrecen contenidos generados por los usuarios. Las asociaciones de bibliotecas han expresado preocupación con respecto a que el énfasis impuesto por la ley sobre los derechos de autor podría exponer a las bibliotecas a una persecución legal. Finalmente un último grupo de opositores considera que el requerimiento a que los motores de búsqueda eliminen a los dominios infractores podría llevar a una carrera armamentística de censura de alcance global, y que viola la Primera Enmienda a la Constitución de los Estados Unidos.
                    </p>


                    <p class="text-base leading-8 my-5">
                        El 18 de enero de 2012, se coordinó una medida de protesta en la cual participaron la versión de Wikipedia en inglés, la red social Reddit y cerca de 7000 sitios web, las cuales consistieron de un apagón informático, la visualización de imágenes con censura y enlaces a páginas que describían las leyes SOPA y PIPA con las posibles consecuencias que podrían originar en caso de ser aprobadas. Se organizaron además otras medidas como la distribución de información de contacto para comunicarse con miembros de ambas cámaras del Congreso norteamericano, la firma de peticiones (entre las que destaca la de Google que afirma haber obtenido 7 millones de firmas), boicots a empresas que apoyaban la promulgación de estas leyes y la organización de protestas en varias ciudades al nivel nacional. Se estima que más de 160 millones de personas pudieron visualizar el aviso publicado en Wikipedia durante el apagón.
                    </p>
                
        
                    <blockquote class="text-md italic leading-8 my-5 p-5 text-indigo-600 font-semibold">    
                        Es algo peligroso y preocupante cuando las plataformas que sirven como puertas de acceso a la información intencionalmente alteran los hechos para incitar a sus usuarios armándolos con esa desinformación…» y «es muy difícil de contrarrestar la desinformación cuando los difusores son también los propietarios de la plataforma de difusión
                    </blockquote>


                    <p class="text-base leading-8 my-5">
                        Un grupo de legisladores opositores a la ley han propuesto un proyecto alternativo llamado Online Protection and Enforcement of Digital Trade Act (OPEN) (Ley de Protección en Línea y Refuerzo del Comercio Digital).[1]​[2]​
                    </p>


                    <p class="text-base leading-8 my-5">
                        El 20 de enero de 2012, el presidente del Comité Judicial de la Cámara, Lamar Smith, pospuso los planes de elaboración del proyecto, diciendo «El comité mantiene el compromiso de encontrar una solución al problema de la piratería online que proteja la propiedad intelectual e innovación estadounidense… El Comité Judicial de la Cámara pospondrá a consideración la legislación hasta conseguir un mayor acuerdo en la solución»
                    </p>


                    <h1  class="text-gray-900 font-bold text-4xl"> Información general </h1>


                    <p class="text-base leading-8 my-5">
                        El proyecto 3261, también conocido como H.R. 3261, es un proyecto de ley introducido en la Cámara de Representantes de los Estados Unidos el día 26 de octubre de 2011, por el Presidente del Comité Judicial de la Cámara, el Representante tejano Lamar S. Smith del Partido Republicano. El proyecto inicial fue sustentado además por un grupo compuesto inicialmente por 12 copatrocinadores de ambos partidos.[6]​ Al momento de ser presentado el proyecto de ley se encontraba estructurado en forma similar al Acta de protección de propiedad intelectual, un proyecto de ley presentado ante el Senado en el año 2008, conocido en inglés como PROTECT IP y por su acrónimo PIPA.[7]
                    </p>

                    <p class="text-base leading-8 my-5">
                        El proyecto de ley original permitía que los propietarios de derechos de autor pudieran solicitar como una medida agresiva con órdenes judiciales contra sitios web acusados de permitir o facilitar la infracción de los derechos de autoría; aún encontrándose estos sitios alojados en servidores fuera de la jurisdicción de los Estados Unidos. Adicionalmente, si la solicitud era hecha por el Departamento de Justicia, podía incluir una orden judicial para impedir la financiación del sitio web infractor bloqueando su acceso a las redes de publicidad, a los facilitadores de pago en línea e impidiendo a los motores de búsqueda que enlazaran con el sitio infractor
                    </p>

                    <p class="text-base leading-8 my-5">
                        El proyecto de ley establecía un proceso de dos etapas para aquellos propietarios de derechos intelectuales que requiriesen una compensación al verse perjudicados por el sitio infractor. El propietario de los derechos debería primero enviar una notificación por escrito a las empresas facilitadoras de pago y a las redes de publicidad en línea, informando la identidad del sitio infractor. Estos últimos a su vez deberían enviar una notificación al sitio infractor y suspender los servicios prestados; esto a menos que el sitio infractor entregue a su vez una contranotificación explicando los motivos por los cuales considera que no se encuentra en infracción. En esta situación el titular de los derechos podía demandar una medida cautelar de alcance limitado contra el operador del sitio, ya sea porque el operador del sitio hubiese entregado la contranotificación o porque los servicios de pago o anuncios en línea no fueron capaces de suspender los servicios prestados en ausencia de tal contranotificación.
                    </p>

                    <p class="text-base leading-8 my-5">
                        La segunda sección del proyecto trata sobre la penalización del streaming de video y la venta de medicamentos falsificados. El proyecto incrementa las penas y extiende las ofensas a los derechos de autor incluyendo al streaming no autorizado de contenidos y otras ofensas a los derechos de propiedad intelectual. Penalizando al streaming de contenidos no autorizados con hasta cinco años de prisión por diez infracciones en un plazo de seis meses.
                    </p>

                    <p class="text-base leading-8 my-5">
                        El proyecto de ley otorga inmunidad a las redes de publicidad y facilitadores de pago que se atengan a su cumplimiento, o que tomen medidas voluntarias para cortar vínculos con tales sitios. Cualquier titular de derechos de propiedad intelectual, que, sin fundamento y a sabiendas acusara a un sitio web por infracción, sería responsable de los daños ocasionados.
                    </p>


                    <p class="text-base leading-8 my-5">
                        Entre los promotores de la ley se encuentran la Motion Picture Association of America (MPAA), la Recording Industry Association of America, laboratorios farmacéuticos tales como Pfizer, negocios de medios audiovisuales y la Cámara de Comercio de los Estados Unidos. Quienes promueven la ley afirman que protege el mercado de la propiedad intelectual y su correspondiente industria, empleos e ingresos, y que es necesaria para reforzar la aplicación de las leyes de derechos de autor, en particular contra los sitios web extranjeros. Citando ejemplos como el del acuerdo judicial de 500 millones de dólares al que llegó Google con el Departamento de Justicia por su papel en una campaña publicitaria dirigida a los ciudadanos estadounidenses que alentaba a los consumidores a comprar drogas de prescripción ilegal en farmacias en línea de Canadá.
                    </p>


                    <p class="text-base leading-8 my-5">
                        Los opositores argumentan que la ley infringe los derechos de la Primera Enmienda, que es censura en Internet, que lisiará a Internet y será una amenaza para la denuncia de irregularidades y otras muestras de libertad de expresión.[
                    </p>


                    <p class="text-base leading-8 my-5">
                        En octubre del año 2011, el representante Bob Goodlatte, miembro del Comité Judicial de la Cámara de Representantes y presidente del Subcomité de Propiedad Intelectual, Competencia, y la Internet; dijo en una entrevista ante el periódico The Hill que SOPA representa una versión reescrita del proyecto PROTECT IP presentado ante el senado, en la cual se abordan algunas de las preocupaciones de la industria tecnológica. Señalando que, en la versión de la Cámara, los titulares de derechos de autor no podrán demandar directamente a los intermediarios, para bloquear a los sitios web infractores ya que en su lugar requiere de la aprobación de la corte antes de tomar medidas frente a terceros. mientras que la versión en el senado PROTECT IP, no lo requiere
                    </p>


                    <h1  class="text-gray-900 font-bold text-4xl">  Objetivo </h1>


                    <h3 class="text-2xl font-bold my-5"> Protección de los ingresos de los creadores de contenidos </h3>

                    <p class="text-base leading-8 my-5">
                        El Representante Bob Goodlatte sentenció
                    </p>


                    <blockquote class="text-md italic leading-8 my-5 p-5 text-indigo-600 font-semibold">  
                        La Propiedad Intelectual es uno de los principales elementos de creación de empleo, y una de nuestras principales ventajas competitivas en el mercado global, sin embargo los inventores, autores y empresarios americanos han sido obligados a observar impotentes como su trabajo es robado por infractores extranjeros, que están fuera del alcance de las leyes actuales de los Estados Unidos. Esta legislación actualizará las leyes para garantizar que los incentivos económicos que nuestros Padres Fundadores consagraron en la Constitución hace más de 220 años —para alentar nuevas obras literarias, investigaciones, productos y servicios— sigan siendo efectivas en el mercado global del siglo XXI, lo que contribuirá a la creación de más empleos en América
                    </blockquote>

                    <p class="text-base leading-8 my-5">
                        Los propietarios de estos derechos ven a los intermediarios -las empresas que hospedan, enlazan, y se dedican al comercio electrónico basado en estos contenidos- como los únicos asequibles para ser acusados.
                    </p>

                    <p class="text-base leading-8 my-5">
                        El Representante John Conyers, patrocinador del proyecto dijo:
                    </p>


                    <blockquote class="text-md italic leading-8 my-5 p-5 text-indigo-600 font-semibold">  
                        Millones de puestos de trabajo americanos penden en la balanza, y nuestros esfuerzos por proteger la propiedad intelectual de América son críticos para el éxito de nuestra economía a largo plazo».[18]​ El representante tejano Lamar Smith añadió: «El Acta SOPA, ayudará a detener el flujo de beneficios hacia estos pícaros sitios web, y asegurará que las ganancias provenientes de las innovaciones americanas vayan a los innovadores americanos
                    </blockquote>

                    <p class="text-base leading-8 my-5">
                        Los representantes de la MPAA que testificaron ante el comité dijeron que la industria del cine y películas sostiene a dos millones de puestos de trabajo y a 95 000 pequeñas empresas.
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Protección contra medicamentos falsificados
                    </h3>

                    <p class="text-base leading-8 my-5">
                        John Clark, portavoz de Pfizer, testificó ante la audiencia del comité que los pacientes no siempre son capaces de distinguir a aquellos sitios hábilmente forjados utilizados para vender medicamentos con nombres similares o simplemente falsificados.
                    </p>

                    <p class="text-base leading-8 my-5">
                        RxRighths, un grupo de defensa al consumidor, emitió un comunicado diciendo que Clark cometió un error
                    </p>

                    <blockquote class="text-md italic leading-8 my-5 p-5 text-indigo-600 font-semibold">  
                        Al no reconocer que hay farmacias internacionales en Canadá y en otros lugares que dan a conocer dónde se encuentran, requieren de una receta médica válida y venden medicamentos perfectamente seguros, de marca reconocida, producidos por los mismos fabricantes líderes de medicamentos que venden en Estados Unidos».[22]​ Anteriormente había dicho que SOPA «falla al distinguir entre farmacias genuinas y falsificadas» y que «lo único que hace es impedir que los pacientes de Estados Unidos puedan ordenar sus medicamentos a farmacias online de Canadá
                    </blockquote>


                    <p class="text-base leading-8 my-5">
                        El representante patrocinador de la ley, Lamar Smith, acusó a Google de obstruir el proyecto, citando el acuerdo por 500 millones de dólares al que llegó la empresa de Internet con el Departamento de Justicia en relación con los cargos que se le imputaban por facilitar anuncios de farmacias canadienses, que conducían a
                    </p>

                    <blockquote class="text-md italic leading-8 my-5 p-5 text-indigo-600 font-semibold">  
                        importaciones ilegales de medicamentos que deberían venderse bajo prescripción
                    </blockquote>

                    <p class="text-base leading-8 my-5"> 
                        El envío de medicamentos con receta desde farmacias extranjeras a clientes en los Estados Unidos, por lo general viola la Ley Federal de Alimentos Drogas y Cosméticos y la Ley de Sustancias Controladas.
                    </p>


                    <h1  class="text-gray-900 font-bold text-4xl"> Argumentos en contra </h1>
                    
                    <h3 class="text-2xl font-bold my-5">
                        Amenaza a la libertad de expresión en Internet
                    </h3>

                    <p class="text-base leading-8 my-5"> 
                        De acuerdo a la Electronic Frontier Foundation (Fundación frontera electrónica), la utilización de servidores proxy que permitan saltar las restricciones impuestas por servidores locales dedicados a censurar contenidos, tales como los que se utilizaron en la Primavera Árabe, también pueden ser utilizados para acceder a contenidos con derechos de autor, y por lo tanto, pueden ser declarados ilegales por la ley.
                    </p>

                    <p class="text-base leading-8 my-5">
                        En el blog Techland blog de la revista Time, Jerry Brito escribió «Imagínense qué sucedería si el Reino Unido creara una lista negra de diarios estadounidenses a los cuales la justicia encontrara “violando la privacidad de algunas celebridades”, o qué sucedería si Francia bloqueara a sitios estadounidenses que creyera que contienen discursos de odio. De manera similar, el Centro para la Democracia y la Tecnología advirtió:
                    </p>


                    <blockquote class="text-md italic leading-8 my-5 p-5 text-indigo-600 font-semibold">  
                        Si SOPA y la Ley de PROTECT IP se promulgasen, el gobierno de Estados Unidos debe estar preparado para que otros gobiernos del mundo sigan su ejemplo, dictando leyes al servicio de las políticas sociales que ellos crean importantes, ya sea restringiendo discursos basados en el odio, los insultos a funcionarios públicos, o la disidencia política
                    </blockquote>

                    <p class="text-base leading-8 my-5">
                        Paul Almeida, miembro de la AFL-CIO (American Federation of Labor and Congress of Industrial Organizations, en español Federación americana de trabajo y consejo de organizaciones industriales), argumentó en favor de la ley SOPA, declararando que la libertad de expresión no era una consideración relevante, ya que «la Primera Enmienda no brinda protección contra el robo de mercancías de los camiones
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Impacto negativo en sitios web que alojan contenidos de usuario
                    </h3>

                    <p class="text-base leading-8 my-5">
                        La periodista Rebecca MacKinnon argumentó en una editorial de opinión que el hacer responsable a las empresas prestadoras de un servicio de los actos de los usuarios podría tener un efecto disuasivo negativo en sitios construidos por los usuarios tales como YouTube. «La intención puede no ser la misma que la del Gran Cortafuegos Chino —un sistema nacional ampliamente distribuido de censura web— pero el efecto práctico podría ser muy similar
                    </p>


                    <p class="text-base leading-8 my-5">
                        La EFF habría advertido que todo parece indicar que Etsy, Flickr y Vimeo deberían cerrar si el proyecto se convierte en ley. Según los críticos de la ley, el proyecto de ley prohibiría obtener enlaces a los sitios considerados como delictivos, ni siquiera por medio de motores de búsqueda, o por medio de servicios tales como Twitter.
                    </p>

                    <p class="text-base leading-8 my-5">
                        Christian Dawson, Director de Operaciones de la empresa de hospedaje web ServInt localizada en el estado de Virginia, predice que esta legislación conducirá a que muchas empresas de computación en nube y servicios de hospedaje web se trasladen a territorios fuera de los Estados Unidos, para evitar las demandas.
                    </p>


                    <p class="text-base leading-8 my-5">
                        Por el contrario, Michael O'Leary de la MPAA declaró ante la audiencia del Comité Judicial del 16 de noviembre, que los efectos comerciales de la ley serían mínimos, ya que al menos 16 países han bloqueado a sitios web, e Internet sigue funcionando en esos países.[34]​Dinamarca, Finlandia, Irlanda e Italia han bloqueado a The Pirate Bay y luego de que los tribunales se pronunciaron a favor de los litigios instaurados por la industria de la música y de la industria cinematográfica, una coalición de compañías de cine y disqueras ha amenazado con demandar a British Telecom si no hace lo mismo.[35]​ Maria Pallante de la Oficina De Derechos de Copyright de Estados Unidos, dijo que el Congreso ya había actualizado la ley de propiedad intelectual antes (Copyright Act of 1976)
                    </p>

                    <h3 class="text-2xl font-bold my-5">
                        Debilitamiento de las protecciones de puerto seguro para sitios web
                    </h3>

                    <p class="text-base leading-8 my-5">
                        La Ley Digital Millennium Copyright Act (DMCA), aprobada en 1998, incluye una previsión, conocida como En línea Copyright Infringement Liability Limitation Act (Ley de Limitación de la Responsabilidad por Infracción de Derechos de Autor Online), que provee un marco de «puerto seguro» para los sitios web que albergan contenido de usuario. Bajo esta disposición, los titulares de derechos que consideren que ese sitio web de alojamiento de contenidos se encuentra infringiendo sus derechos, se encuentran obligados a presentar una notificación ante el sitio web para solicitar que el material infractor sea retirado, y se le da al sitio web una cierta cantidad de tiempo para que pueda eliminar dicho material.[36]​[37]​[38]​ SOPA anularía esta disposición de «puerto seguro», al permitir que los jueces puedan bloquear inmediatamente el acceso a cualquier sitio web encontrado culpable de albergar material protegido por copyright
                    </p>


                    <p class="text-base leading-8 my-5">
                        De acuerdo a algunos críticos del proyecto de ley tales como el Centro para la Democracia y la Tecnología y la EFF, la palabra redactada en el proyecto es lo suficientemente ambigua como para que una simple queja impuesta sobre un sitio web mayor, pudiera causar el bloqueo del mismo, dejando en manos del sitio la carga de demostrar su inocencia para poder ser desbloqueado[Nota 3]​ El foco de gran parte de la crítica se centra en una de las declaraciones del proyecto de ley que indica que cualquier sitio web podría ser bloqueado si «se encuentra tomando, o ha tomado acciones deliberadas para evitar que se confirme que el sitio dirigido al público estadounidense lleva a cabo actos que constituyen una violación». Según la lectura de los críticos del proyecto esto significa que un sitio web que no vigile activamente su contenido en busca de violaciones a los derechos de autor, sino que en cambio espera a que otros lo notifiquen de tales violaciones, puede ser encontrado culpable en virtud de la ley.[
                    </p>


                    <p class="text-base leading-8 my-5">
                        El profesor en leyes Jason Mazzone escribió:
                    </p>

                    <blockquote class="text-md italic leading-8 my-5 p-5 text-indigo-600 font-semibold">  
                        El daño tampoco alcanzaría al propietario del sitio web, a menos que el demandante pueda probar que el sitio demandado malentiende la ley “a sabiendas”, una prueba legal muy difícil de cumplir. El propietario del sitio puede emitir una contranotificación para restablecer el procesamiento de pagos y la publicidad, pero los servicios no están obligados a cumplir con la contranotificación
                    </blockquote>


                    <h3 class="text-2xl font-bold my-5"> 
                        Amenazas generales para los negocios relacionados con la web
                    </h3>

                    <p class="text-base leading-8 my-5"> 
                        Un análisis aparecido en la revista tecnológica eWeek sentenció
                    </p>


                    <blockquote class="text-md italic leading-8 my-5 p-5 text-indigo-600 font-semibold">  
                        El lenguaje de SOPA es tan amplio, las reglas consignadas se encuentran tan desconectadas de la realidad de Internet, y las penalidades se encuentran tan desconectadas de los crímenes alegados, que este proyecto de ley podría efectivamente matar el comercio electrónico, y hasta la normal utilización de Internet. El proyecto de ley además posee graves implicaciones para las leyes existentes en Estados Unidos, para las leyes extranjeras y para las leyes internacionales, y es seguro que desperdiciará décadas en batallas legales en las cortes
                    </blockquote>

                    <p class="text-base leading-8 my-5"> 
                        Art Bordsky del grupo de defensa al consumidor Public Knowledge argumentó de manera similar diciendo que
                    </p>

                    <blockquote class="text-md italic leading-8 my-5 p-5 text-indigo-600 font-semibold"> 
                        Las definiciones escritas en el proyecto de ley son tan amplias que cualquier consumidor de Estados Unidos que utilice un sitio web localizado en el extranjero, de inmediato da a la jurisdicción de los Estados Unidos el poder de tomar posibles medidas para combatirlo
                    </blockquote>

                    <p class="text-base leading-8 my-5">
                        En octubre de 2011, la EFF caratuló al proyecto como una masiva máquina asesina destinada a matar la regulación de Internet, y añadió Esta ley no se puede arreglar, se debe exterminar
                    </p>


                    <p class="text-base leading-8 my-5">
                        Gary Shapiro, Director Ejecutivo de la Consumer Electronics Association 
                        (Asociación de Consumidores Electrónicos) dijo que El proyecto de ley intenta llevar a cabo 
                        una reestructuración radical de las leyes que gobiernan Internet, y que daría al traste con el 
                        “puerto seguro” legal que ha permitido que la industria de Internet, líder en el mundo, floreciera 
                        en la última década. Expondría a los legítimos hombres de negocios e innovadores de América a toda 
                        la responsabilidad legal, plena y abierta. El resultado sería más demandas judiciales, disminución 
                        de inversiones de capital de riesgo, y menos empleos
                    </p>


                    <p class="text-base leading-8 my-5">
                        Lukas Biewald, fundador de CrowdFlower, sentenció que «Tendrá un efecto asfixiante sobre el capital de riesgo… Nadie querrá invertir a causa de la responsabilidad legal
                    </p>


                    
                    <p class="text-base leading-8 my-5">
                        En un estudio de noviembre de 2011, llevado a cabo por empresa de consultoría Booz & Company y financiado por Google, se puede leer por ejemplo que la mayoría de los 200 capitalistas de riesgo e inversores providenciales entrevistados dejarían de financiar a las empresas intermediarias de medios digitales si el proyecto se convirtiera en ley. más del 80 % dijo además que preferirían invertir en un país con una economía débil y riesgosa con las leyes actuales, antes que en una economía fuerte con la ley propuesta en vigencia. Pero si se suprimieran las ambigüedades legales y las previsiones de buena fe se colocaran en el lugar que corresponde, las inversiones podrían incrementarse aproximadamente en un 115 %
                    </p>

                    <h3 class="text-2xl font-bold my-5"> 
                        Amenaza para los usuarios que suben contenidos
                    </h3>


                    <p class="text-base leading-8 my-5">
                        Lateef Mtima, director del Institute for Intellectual Property and Social Justice (Instituto para la Propiedad Intelectual y la Justicia Social) de la Escuela de Leyes de la Universidad Howard, expresó su preocupación porque los usuarios que suben contenidos protegidos por derechos de autor a sitios como YouTube podrían ser hallados penalmente responsables. Dijo, «Tal vez, el más peligroso ribete del proyecto sea la forma en que la conducta penalizada se encuentra tan pobremente definida. Aunque a primera vista parece que el proyecto de ley intenta distinguir entre la conducta que tiene una finalidad comercial y la que no la tiene, supuestamente para penalizar a la primera y permitir la segunda; en realidad no solo falla en cumplir con esto, sino que además, debido a su falta de definiciones concretas, potencialmente tipifica como delito a una conducta que actualmente se encuentra permitida por la ley
                    </p>


                    <p class="text-base leading-8 my-5">
                        Un asesor del promotor de la ley Lamar Smith dijo: «Este proyecto de ley no convierte en un delincuente a aquella persona que postea un video en YouTube de sus hijos cantando una canción con copyright. Este proyecto de ley se encuentra específicamente dirigido a sitios web dedicados a actividades ilegales o infractores. Sitios con contenido de usuario tales como YouTube, Facebook y Twitter no tienen nada que temer con respecto a esta legislación
                    </p>

                    <h3 class="text-2xl font-bold my-5"> 
                        Amenaza para las redes internas
                    </h3>

                    <p class="text-base leading-8 my-5">
                        Según un documento por emitido por el Center for Democracy and Technology (Centro para la Democracia y la Tecnología), el proyecto «hace blanco en todo un sitio web, aunque sólo una pequeña parte de lo hospedado o enlazado sea contenido infractor
                    </p>

                    <p class="text-base leading-8 my-5">
                        A.M. Reilly de la revista Industry Leaders Magazine dice que de acuerdo a la legislación de SOPA, «la culpabilidad por la distribución de material protegido se extiende a aquellos que facilitan la publicación inicial de dicho material. Algunas compañías hacen uso de redes privadas virtuales para crear una red que aparente ser interna pero que de hecho se extiende a lo largo de varias oficinas y domicilios de empleados; si cualquiera de esas localizaciones distribuidas comparte material con derecho de autor, puede provocar que toda la red virtual y la compañía que la soporta se encuentren en riesgo de violación
                    </p>

                    <p class="text-base leading-8 my-5">
                        Respondiendo a una crítica similar en una editorial de la CNET, el directivo de la RIAA Cary Sherman escribió: «De hecho, es exactamente lo contrario. Haciendo foco exclusivamente en los sitios, en vez de en todo el dominio, la acción se puede dirigir únicamente al subdominio o a la dirección IP con actitud ilegal en lugar de tomar acciones contra el dominio en su totalidad
                    </p>

                    <h3 class="text-2xl font-bold my-5"> 
                        Amenaza para el software de código abierto
                    </h3>

                    <p class="text-base leading-8 my-5">
                        La EFF ha expresado su preocupación en lo concerniente a que los proyectos de software de código abierto que pudieran ser encontrados facilitando a la piratería en línea podrían ser cerrados bajo la legislación de SOPA.[52]​ De especial consideración es lo que ocurre con Firefox, el navegador web creado por el grupo defensor del software de código abierto Mozilla,[25]​ Este navegador posee un plug-in llamado MAFIAAFire Redirector que redirige a los usuarios a la nueva ubicación de aquellos dominios que fueron incautados por el gobierno de Estados Unidos.[53]​ En mayo del 2011, Mozilla rechazó un requerimiento del Departamento de Seguridad Nacional de los Estados Unidos en el cual se instaba al grupo a retirar MAFIAAFire de su sitio web. El grupo Mozilla habría respondido con una pregunta: «¿Algún tribunal ha determinado que el plug-in MAFIAAFire es de alguna forma ilegal?
                    </p>

                    <h3 class="text-2xl font-bold my-5"> 
                        Resulta ineficaz para combatir la piratería
                    

                    <p class="text-base leading-8 my-5">
                        Edward J. Black, presidente y Director Ejecutivo de la Computer & Communication Industry Association escribió en el Huffington Post que «Irónicamente, hay poco que podamos hacer para detener a los actuales sitios web dedicados a la piratería, los cuales simplemente reaparecen un par de horas después con un nombre diferente, y si se conoce públicamente su dirección numérica, incluso antes. Cualquiera que posea, o conozca esa dirección web numérica, es capaz de alcanzar el sitio web infractor, saltándose los controle
                    </p>

                    <p class="text-base leading-8 my-5">
                        Una nota editorial en el periódico San Jose Mercury-News decía, «Imagínese los recursos necesarios para analizar cada una de las millones de ofertas de Google y Facebook cada día en busca de piratas que, si son encontrados, simplemente se mudan a otro sitio en prácticamente nada»
                    </p>

                    <h3 class="text-2xl font-bold my-5"> 
                        Inspección profunda de paquetes e invasión de la privacidad
                    </h3>

                    <p class="text-base leading-8 my-5">
                        De acuerdo a Markham Erickson, director de NetCoalition, grupo opositor a SOPA; la sección del proyecto de ley que permite a los jueces ordenarle a los Proveedores de servicios de Internet que bloqueen el acceso para sus clientes localizados en Estados Unidos al sitio infractor, también permitiría la inspección de las direcciones IP de sus clientes, un método conocido como bloqueo por IP. Erickson ha expresado su preocupación con respecto a que tal orden podría exigir a los proveedores a participar en una «inspección profunda de paquetes»,[Nota 4]​ que consiste en analizar todo el contenido que se transmite desde y hacia el usuario, lo cual puede plantear nuevos problemas de seguridad
                    </p>

                    <h3 class="text-2xl font-bold my-5"> 
                        Impacto negativo sobre los DNS, DNSSEC y sobre la seguridad de Internet
                    </h3>

                    <p class="text-base leading-8 my-5">
                        Toda máquina conectada a Internet posee una dirección numérica, llamada dirección IP. Cuando se comunican entre sí, dos o más máquinas conectadas a internet lo hacen enviándose paquetes de información con estas direcciones numéricas especificando el destino. Sin embargo, para los seres humanos resulta muy difícil memorizar y trabajar con estos números. Para solventar este problema se creó el Sistema de Nombres de Dominio (DNS). Muchas veces comparados con una guía telefónica, los servidores DNS guardan tablas en las que se asocia un determinado nombre de dominio con un determinado número IP, cuando un usuario solicita una dirección de tipo www.dominio.ext detrás hay un servidor DNS trabajando que le informa a su navegador cuál es el número IP que corresponde a ese nombre, permitiéndole hacer la conexión. El proyecto de ley requiere que estos servidores dejen de remitir los números IP correspondientes al nombre de los sitios infractores
                    </p>

                    

        



                </div>
            </div>
        </div>
    </div>
</div>



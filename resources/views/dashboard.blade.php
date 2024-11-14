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

                        <h1  class="text-gray-900 font-bold text-4xl"> La búsqueda del Santo Grial </h1>
                        

                    <p class="text-base leading-8 my-5">
                        El
                    <a class="text-indigo-600 font-semibold" href="https://www.reddit.com/r/a2e7j6ic78h0j/">
                        foro en Reddit
                    </a>
                        
                    ("Subreddit") contenía esta imagen en el encabezado y también tenía el título a2e7j6ic78h0j7eiejd0120.
                    </p>

                    <div class="my-4 mx-auto w-full flex justify-center ">
                        <img src=        "{{ asset('images/cicada3302-4.png') }}" alt="Logo">
                    </div>

                    <p class="text-base leading-8 my-5">
                        También contenía muchas líneas de texto y dos imágenes:
                    </p>

                    <div class="my-2 mx-auto w-full flex justify-center ">
                        <img src=  "{{ asset('images/cicada-3301-6.2.jpg') }}"  alt="Logo">
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
                        <img src=    "{{ asset('images/cicada-3301-6.3.jpg') }}" alt="Logo">
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

<?php
// Portafolioko proiektuak euskaraz. Hasierak, kasu arrakastatsuen saretak eta
// proiektu bakoitzaren orriak (proyecto_detalle.php) erabiltzen dituzte.
// Gako bakoitza App/config/config.php-ko 'project' balioarekin bat dator.

return [
    'mdd-editor' => [
        'url' => '/eu/kasu-arrakastatsuak/mdd-editor',
        'title' => 'MDD Editor',
        'category' => 'Produktu propioa · IA agenteentzako tresnak',
        'summary' => 'Grafo itxurako garuna, IA agenteei eta pertsonei kode-base erraldoietan orientatzen laguntzen diena: bideojokoetatik mikrozerbitzuetara.',
        'meta_description' => 'MDD Editor: biltegi oso baten grafo bizia, IA agenteek MCP bidez kontsultatzen dutena eta pertsonek bisualki arakatzen dutena. Guapikoren kasua.',
        'image' => 'assets/img/portfolio/shots/mdd_graph.webp',
        'image_alt' => 'MDD Editorren grafo osoa, kode eta dokumentazioko milaka nodorekin',
        'facts' => [
            'Mota' => 'Produktu propioa',
            'Rola' => 'Diseinua, garapena eta I+G',
            'Urtea' => '2026',
        ],
        'challenge' => 'Biltegi bat hamarnaka mila fitxategira hazten denean, inork ez du osorik ulertzen: ez pertsonek, ez IA agenteek. Agenteek fitxategiak itsu-itsuan irakurtzen dituzte, testuingurua bilaketetan xahutzen dute eta ikusten ez dituzten mendekotasunak hausten dituzte. Dokumentazioa sakabanatuta dago eta kodea aldatu bezain laster zaharkitzen da.',
        'solution' => 'MDD Editorrek biltegi osoa indexatzen du —karpetak, kodea, eszenak, dokumentazioa eta atazak— eta grafo bizi bakar batean lotzen ditu: nork deitzen dion nori, zerk erreferentziatzen duen zer eta zein atazak eragiten dion zein fitxategiri. Pertsonek bisualki arakatzen dute; agenteek MCP (Model Context Protocol) bidez kontsultatzen dute, bilaketa kirurgikoekin, itsuan irakurri beharrean. Proiektu osoa garun partekatu bakar bihurtzen da.',
        'features' => [
            ['title' => 'Hizkuntza anitzeko indexatzailea', 'text' => 'GDScript, TypeScript, JavaScript, Python, Markdown eta Godoteko eszenak. Fitxategien arteko deiak, erreferentziak, instantziak eta estekak detektatzen ditu.'],
            ['title' => 'Arakatzaile bisuala', 'text' => 'Xehetasun-maila moldagarria duen oihala, dokumentuen aurrebista duten txartelak, errorako bidea eta nodo motaren araberako iragazkiak.'],
            ['title' => 'MCP zerbitzaria agenteentzat', 'text' => 'Bilaketa, auzokideak, azpizuhaitzak eta bideak grafoan. Editorea itxita badago, interfazerik gabeko motor bat abiarazten du segundo bat baino gutxiagoan.'],
            ['title' => 'Atazen geruzak', 'text' => 'Proiektu bakoitzaren atazak grafoari lotzen zaizkio: ataza bakoitzak zein fitxategi ukitzen dituen eta fitxategi batek zein ataza dituen ikusten da.'],
            ['title' => 'Diseinuz segurua', 'text' => 'Sekretuak (.env, gakoak, tokenak) grafoan agertzen dira, baina ez dira inoiz irakurtzen. Zubiak lokalean bakarrik entzuten du eta tokena eskatzen du.'],
            ['title' => 'Benetako errendimendua', 'text' => 'C++ kontsulta-motorra Godoten hedapen gisa: estudioaren grafo osoa arin nabigatzen da.'],
        ],
        'results' => [
            ['value' => '18 961', 'label' => 'nodo gure estudioaren grafoan'],
            ['value' => '< 0,2 s', 'label' => 'agenteen kontsulta errepikatuei erantzuteko'],
            ['value' => '60 FPS', 'label' => 'grafo osoa nabigatzean'],
        ],
        'stack' => ['Godot 4 · GDScript', 'C++ (GDExtension)', 'Python', 'Node.js · TypeScript', 'Model Context Protocol', 'WebSocket'],
        'gallery' => [
            ['src' => 'assets/img/portfolio/shots/mdd_graph.webp', 'alt' => 'Estudioaren grafo osoa MDD Editorren', 'caption' => 'Estudio osoa grafo bakar batean: kodea, eszenak, dokumentazioa eta atazak.'],
            ['src' => 'assets/img/portfolio/shots/mdd_explorer.webp', 'alt' => 'MDD Editorren arakatzailea, dokumentu-txartel konektatuekin', 'caption' => 'Arakatzailea: dokumentu irakurgarriak eta klik batean nabiga daitezkeen loturak.'],
        ],
        'note' => '',
    ],

    'trading-lab' => [
        'url' => '/eu/kasu-arrakastatsuak/trading-lab',
        'title' => 'Trading Lab',
        'category' => 'I+G · Errefortzu bidezko ikaskuntza',
        'summary' => 'Trading agenteetarako errefortzu bidezko ikaskuntzaren hipotesiak ikertzeko laborategia. Zorroztasun zientifikoa eta zero autoengainu.',
        'meta_description' => 'Trading Lab: trading agenteetarako errefortzu bidezko ikaskuntzaren (RL) hipotesiak ikertzeko laborategia, laginetik kanpoko ebaluazioarekin. Guapikoren kasua.',
        'image' => 'assets/img/portfolio/shots/trading_1.webp',
        'image_alt' => 'Trading Labeko entrenamendu-telemetriaren panela, PnL, sari eta winrate kurbekin',
        'facts' => [
            'Mota' => 'Barne ikerketa',
            'Rola' => 'Arkitektura, ML eta azpiegitura',
            'Urtea' => '2026',
        ],
        'challenge' => 'Trading algoritmikoan oso erraza da norbere burua engainatzea: historikoan «irabazten» duen eredu batek ia beti zarata memorizatu du. Ideia berri bakoitza —sari bat, iragazki bat, exekuzio-eredu bat— script solteetan amaitzen zen, alderatu ezin ziren emaitzekin eta errepikatu ezin ziren ondorioekin.',
        'solution' => 'Laborategi bat eraiki genuen: ideia bakoitza hipotesi gisa erregistratzen da, bere faltsazio-irizpidearekin, abiarazi aurretik. Osagai isolatu eta probatuekin muntatzen da, lokalean edo hodeiko GPUan aurrekontu mugatuarekin entrenatzen da, eta laginetik kanpo ebaluatzen da derrigorrezko erreferentzien aurka. Epaia FAIL bada, FAIL da: ez da eredurik «txapeldun» bihurtzen ebaluazioa gainditu gabe. IA agenteek MCP bidez erabiltzen dute laborategia, protokolo zorrotz bati jarraituz.',
        'features' => [
            ['title' => 'Hipotesien erregistroa', 'text' => 'Esperimentu bakoitza hipotesi bati lotuta dago, bere egunkariarekin: zer aldatu den, zer ikusi den eta zergatik ematen den hurrengo urratsa.'],
            ['title' => 'Ebaluazio zintzoa', 'text' => 'Laginetik kanpoko aldi «erreak», hainbat hazi, konfiantza-tarteak dituen bootstrap-a eta irristatze-estresa.'],
            ['title' => 'Derrigorrezko erreferentziak', 'text' => 'Eredu orok lehiatu behar du ez eragiketa egitearen, ausazko sarreren, Donchianen eta denbora nahastutako kontrol baten aurka.'],
            ['title' => 'Osagai modularrak', 'text' => 'Sari-terminoak, aldatzaileak eta exekuzio-ereduak pieza independente gisa, bakoitza bere testarekin.'],
            ['title' => 'Zuzeneko telemetria', 'text' => 'PnL, saria, winrate, value loss eta eragiketa bakoitzaren errepikapena grafikoan erakusten dituen panela.'],
            ['title' => 'GPU aurrekontuarekin', 'text' => 'Hodeiko GPUan entrenamendua, esperimentu bakoitzeko kostu- eta denbora-mugarekin.'],
        ],
        'results' => [
            ['value' => '11,9 M', 'label' => 'kandela laginetik kanpoko ebaluazio bakar batean'],
            ['value' => '4', 'label' => 'erreferentzia, eredu orok gainditu beharrekoak'],
            ['value' => '≤ 1 $', 'label' => 'GPU aurrekontu ohikoa esperimentu bakoitzeko'],
        ],
        'stack' => ['Python', 'PyTorch (PPO)', 'FastAPI', 'OKX merkatu-datuak', 'Hodeiko GPU (RunPod)', 'Model Context Protocol'],
        'gallery' => [
            ['src' => 'assets/img/portfolio/shots/trading_1.webp', 'alt' => 'Trading Labeko entrenamendu-telemetria', 'caption' => 'Entrenamendu-telemetria: PnL, saria, winrate eta value loss atal bakoitzeko.'],
            ['src' => 'assets/img/portfolio/shots/trading_2.webp', 'alt' => 'Laginetik kanpoko epaia eta hipotesiaren egunkaria Trading Laben', 'caption' => 'Laginetik kanpoko epaia: hemen laborategiak FAIL dio, eta hipotesiaren egunkarian idatzita uzten du.'],
        ],
        'note' => 'Ikerketa-proiektua. Ez da inbertsio-produktu bat, ezta finantza-aholkularitza ere.',
    ],

    'bilagun' => [
        'url' => '/eu/kasu-arrakastatsuak/bilagun',
        'title' => 'De Bi Lagun',
        'category' => 'Bezeroa · Webgunea eta artxibo digitala',
        'summary' => 'De Bi Lagunen webgunea eta artxibo digitala, Rufo Ribadoren artzain alemaneko hazitegia: urte askotan Espainiako txapeldun eta mundu osoan ezagunak diren txakurrekin.',
        'meta_description' => 'De Bi Lagun: Rufo Ribadoren artzain alemaneko hazitegiaren webgune murgiltzailea eta artxibo digitala, Donostian. Guapikoren kasua.',
        'image' => 'assets/img/portfolio/shots/bilagun_home.webp',
        'image_alt' => 'De Bi Lagun webgunearen azala, Bi Lagun leinuko artzain aleman batekin',
        'facts' => [
            'Bezeroa' => 'Rufo Ribado · De Bi Lagun',
            'Lekua' => 'Donostia',
            'Urtea' => '2026',
        ],
        'challenge' => 'Rufo Ribadok hogeita hamar urte baino gehiago daramatza artzain alemanak hazten Donostian, eta arrazaren epaile nazionala eta nazioartekoa da. De Bi Lagun Espainiako hazle onena izan zen 2013tik 2018ra, Europako txapelduna 2004an eta Espainiako txapelduna 1992, 2005, 2009, 2012, 2013, 2015, 2016 eta 2018an. Ondare hori guztia argazki zaharretan, erakusketa-katalogoetan eta sortzailearen oroimenean sakabanatuta zegoen.',
        'solution' => 'Txakurrak protagonista diren webgune murgiltzaile bat diseinatu genuen. Ale bakoitzak bere fitxa du, genealogia, tituluak eta pantaila osoko galeria barne. Argazki zaharrak IArekin zaharberritu genituen, odol-leinuaren datu-basea katalogo eta egutegietatik berreraiki genuen IA fluxu batekin, eta tokiko SEOa landu genuen, benetako artzain alemana bilatzen duenak hazitegia aurki dezan.',
        'features' => [
            ['title' => 'Ale bakoitzaren fitxa', 'text' => 'Txakur bakoitzaren aita, ama, sexua, tituluak eta argazkiak, ale batetik hurrengora nabigatzeko aukerarekin.'],
            ['title' => 'Ikustaile murgiltzailea', 'text' => 'Pantaila osoko argazkiak, atximurrarekin edo gurpilarekin zoom egiteko eta irristatuz ixteko, mugikorrean zein ordenagailuan.'],
            ['title' => 'IA bidezko zaharberritzea', 'text' => 'Hamarkada batzuetako artxiboko argazkiak eredu sortzaileekin berreskuratuak, txakurraren leialtasuna galdu gabe.'],
            ['title' => 'Datuak IArekin', 'text' => 'IA fluxu batek izenak, genealogiak eta sariak ateratzen ditu katalogo eta egutegietatik, eta datu-basera eramaten ditu.'],
            ['title' => 'Tokiko SEOa', 'text' => 'Donostian eta Espainian artzain alemaneko hazle bat bilatzeko pentsatutako testuak eta egitura.'],
            ['title' => 'Azkarra eta arina', 'text' => 'Frameworkik gabeko JavaScripta, miniatura konprimatuak eta zerbitzaririk gabeko hedapena edge-an.'],
        ],
        'results' => [
            ['value' => '30+', 'label' => 'urteko ondarea, orain leku bakarrean'],
            ['value' => '31', 'label' => 'ale, bere genealogiarekin dokumentatuak'],
            ['value' => '6', 'label' => 'urte jarraian Espainiako hazle onena'],
        ],
        'stack' => ['HTML · CSS · JavaScript', 'Cloudflare Pages + Functions', 'IA sortzailea (irudi-zaharberritzea)', 'Python'],
        'gallery' => [
            ['src' => 'assets/img/portfolio/shots/bilagun_home.webp', 'alt' => 'De Bi Lagun webgunearen azala', 'caption' => 'Azala: txakurra, pantaila osoan, beste guztiaren gainetik.'],
            ['src' => 'assets/img/portfolio/shots/bilagun_grid.webp', 'alt' => 'De Bi Lagunen txakurren sareta iragazkiekin', 'caption' => 'Odol-leinua: arrak, emeak eta promesak, iragazkiekin.'],
            ['src' => 'assets/img/portfolio/shots/bilagun_dog.webp', 'alt' => 'De Bi Lagungo artzain alemanaren fitxa murgiltzailea', 'caption' => 'Ale bakoitzaren fitxa murgiltzailea, hurrengora zuzenean pasatzeko aukerarekin.'],
        ],
        'note' => '',
    ],
];

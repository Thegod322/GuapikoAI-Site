<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'eu')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/eu/lege-oharra') ?>">
    <title>Lege-oharra, pribatutasuna eta cookieak</title>
    <meta name="description" content="Titulartasunari, pribatutasunari, datuen babesari eta cookien kudeaketari buruzko lege-informazio estandarra.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <main class="legalPage">
      <header class="legalPage__hero">
        <p class="legalPage__eyebrow">Lege-informazioa</p>
        <h1>Lege-oharra, pribatutasuna eta cookieak</h1>
        <p class="legalPage__intro">Oinarrizko webgune korporatibo baterako lege-testu estandarra. Ordeztu kortxete arteko datuak titularraren benetako datuekin eta moldatu helburuak proiektuak inprimakiak, eskaerak, newsletterrak, analitikak edo hirugarrenen cookieak jasotzen baditu.</p>
      </header>

      <nav class="legalPage__index" aria-label="Lege-aurkibidea">
        <a href="#aviso-legal">Lege-oharra</a>
        <a href="#politica-privacidad">Pribatutasun-politika</a>
        <a href="#gestion-cookies">Cookien kudeaketa</a>
      </nav>

      <section class="legalPage__section" id="aviso-legal">
        <h2>Lege-oharra</h2>
        <p>Informazioaren gizarteko zerbitzuei buruzko legedia betez, webgune honen titularra honako hau dela jakinarazten da:</p>
        <ul>
          <li>Titularra: [Izena edo sozietatearen izena]</li>
          <li>IFZ/IFK: [Identifikazio zenbakia]</li>
          <li>Helbidea: [Helbide osoa]</li>
          <li>Posta elektronikoa: [posta@domeinua.com]</li>
          <li>Telefonoa: [harremanetarako telefonoa]</li>
          <li>Erregistroko datuak, hala badagokio: [Merkataritza Erregistroa, liburukia, folioa, orria eta inskripzioa]</li>
        </ul>
        <h3>Xedea</h3>
        <p>Webguneak titularraren jarduerari, produktuei edo zerbitzuei buruzko informazioa ematen du. Gune honetara sartzeak eta bertan ibiltzeak erabiltzaile-izaera ematen du, eta lege-ohar hau onartzen dela esan nahi du.</p>
        <h3>Webgunearen erabilera</h3>
        <p>Erabiltzaileak konpromisoa hartzen du webgunea modu zilegi, arduratsu eta errespetuzkoan erabiltzeko, sistemetan, edukietan edo zerbitzuetan kalterik eragin gabe, eta jarduera legez kanpokoak, iruzurrezkoak edo fede onaren aurkakoak egin gabe.</p>
        <h3>Jabetza intelektuala eta industriala</h3>
        <p>Edukiek, testuek, irudiek, diseinuak, iturburu-kodeak, markek eta zeinu bereizgarriek titularrari edo bidezko lizentziadunei dagozkie. Ez da onartzen horiek erreproduzitzea, banatzea edo eraldatzea berariazko baimenik gabe, legeak baimentzen dituen kasuetan izan ezik.</p>
        <h3>Erantzukizuna</h3>
        <p>Titularra saiatzen da informazioa eguneratuta eta eskuragarri mantentzen, baina ez du bermatzen akatsik, etenik edo gorabehera teknikorik egongo ez denik. Kanpoko estekek, egonez gero, hirugarrenen guneetara bideratzen dute, eta gune horien baldintzak eta politikak titularrarenak ez bezalakoak dira.</p>
      </section>

      <section class="legalPage__section" id="politica-privacidad">
        <h2>Pribatutasun-politika</h2>
        <p>Webgune honen bidez jaso daitezkeen datu pertsonalak konfidentzialtasunez eta datuak babesteko legediaren arabera tratatuko dira.</p>
        <h3>Tratamenduaren arduraduna</h3>
        <p>Arduraduna: [Izena edo sozietatearen izena]. Kontaktua: [posta@domeinua.com]. Helbidea: [Helbide osoa].</p>
        <h3>Helburuak</h3>
        <p>Datuak honako helburu hauetarako tratatu ahal izango dira: kontsultak erantzutea, eskaerak kudeatzea, kontratatutako zerbitzuak ematea, merkataritza- edo administrazio-harremana mantentzea eta legezko betebeharrak betetzea. Newsletterrak, inprimaki aurreratuak, online salmenta edo analitika gaitzen badira, haien helburu zehatzak gehitu beharko dira.</p>
        <h3>Legitimazioa</h3>
        <p>Tratamenduaren oinarri juridikoa interesdunaren baimena, kontratu aurreko edo kontratuko neurriak gauzatzea, legezko betebeharrak betetzea edo interes legitimoa izan daiteke, aplikatzekoa denean.</p>
        <h3>Kontserbazioa</h3>
        <p>Datuak bildu ziren helburua betetzeko behar den denboran gordeko dira, eta, ondoren, balizko legezko erantzukizunei erantzuteko eskatzen diren epeetan.</p>
        <h3>Hartzaileak</h3>
        <p>Ez zaie daturik jakinaraziko hirugarrenei, legezko betebeharra badago edo zerbitzua emateko beharrezkoa denean tratamendu-eragileen bidez (adibidez, web ostalaritza, posta elektronikoa, mantentze teknikoa edo kudeaketa-tresnak).</p>
        <h3>Eskubideak</h3>
        <p>Interesdunak bere datuetara sartzeko, zuzentzeko, ezabatzeko, aurka egiteko, tratamendua mugatzeko, datuen eramangarritasunerako eta baimena kentzeko eskubideak gauzatu ditzake, [posta@domeinua.com] helbidera idatziz. Halaber, Datuak Babesteko Espainiako Agentzian erreklamazioa aurkez dezake, tratamendua araudiarekin bat ez datorrela uste badu.</p>
      </section>

      <section class="legalPage__section" id="gestion-cookies">
        <h2>Cookien kudeaketa</h2>
        <p>Stack honek ez du berez instalatzen cookie teknikoak ez diren beste cookierik. Azken proiektuak analitika, publizitatea, mapa txertatuak, bideoak, sare sozialak edo hirugarrenen beste zerbitzu batzuk gehitzen baditu, aurretiaz informazioa emateko eta baimena eskatzeko sistema bat gehitu beharko da, behar denean.</p>
        <h3>Cookie motak</h3>
        <ul>
          <li>Cookie teknikoak: nabigazioa eta oinarrizko funtzioen erabilera ahalbidetzen dute. Normalean ez dute baimenik behar.</li>
          <li>Lehentasun-, analitika-, publizitate- edo hirugarrenen cookieak: informazio argia eskatzen dute eta, behar denean, instalatu aurretik baimena eman behar da.</li>
        </ul>
        <h3>Nola aldatu baimena</h3>
        <p>Cookien kudeatzaile bat ezartzen denean, erabiltzaileak cookieak onartzeko, ukatzeko edo konfiguratzeko erraztasun bera izan beharko du, baita bere baimena gerora kendu ahal izateko ere atal honetatik.</p>
        <p class="legalPage__notice">Egokitu beharreko txantiloia: ordezkatu bloke hau konfiguratzeko benetako botoiarekin proiektuak baimena eskatzen duten cookieak txertatzen dituenean.</p>
      </section>
    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>

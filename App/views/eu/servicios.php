<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'eu')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/eu/zerbitzuak') ?>">
    <title>Zerbitzuak: digitalizazioa, IA eta proiektuen erreskatea | Guapiko AI Studio</title>
    <meta name="description" content="Enpresen digitalizazioa, IA eta agenteekin automatizazioa, eta IArekin sortutako proiektuen abiaraztea eta konponketa. Dena kafe batekin eta doako auditoria batekin hasten da.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="guapiServicesIntro">
      <p class="guapiServicesIntro__tagline reveal-fade">Zerbitzuak</p>
      <h1 class="guapiServicesIntro__title reveal-up">Zure enpresarentzat <span>lan egiten duen teknologia</span></h1>
      <p class="guapiServicesIntro__lead reveal-up">Laguntzeko hiru modu eta arau bakarra: dena kafe batekin hasten da. Zuk zure negozioa kontatzen diguzu; guk auditoria bat eta ideia mordo bat itzultzen dizkizugu. Doan.</p>
      <nav class="guapiServicesIntro__jump reveal-up" aria-label="Zerbitzuak">
        <a href="#digitalizazioa">01 · Digitalizazioa</a>
        <a href="#automatizazioa">02 · IA eta agenteak</a>
        <a href="#abiaraztea">03 · Abiaraztea eta konponketa</a>
      </nav>
    </header>

    <main>
      <!-- Zerbitzuak: bloke zabal bat zerbitzu bakoitzeko -->
      <section class="guapiServiceCards">

        <article class="guapiServiceCard reveal-up" id="digitalizazioa">
          <div class="guapiServiceCard__head">
            <span class="guapiServiceCard__number">01</span>
            <h2 class="guapiServiceCard__title">Enpresaren digitalizazioa</h2>
            <p class="guapiServiceCard__lead">Zure negozioa papera, Excel amaigabea eta WhatsApp-a atzean utzita, zure ordez lan egiten duten sistema digital ordenatuetara eramaten dugu.</p>
          </div>
          <div class="guapiServiceCard__body">
            <h3>Norentzat</h3>
            <p>Egunero zeregin errepikakorretan eta mila tokitan dagoen informazioa bilatzen eguna joaten zaien ETEak, dendak, tailerrak eta bulegoak.</p>
            <h3>Zer egiten dugu</h3>
            <ul>
              <li>Gaur egun nola lan egiten duzuen eta zer tresna erabiltzen dituzuen aztertzen dugu.</li>
              <li>Webgunea, online denda edo bezeroentzako gune pribatua.</li>
              <li>CRMa, erreserbak, fakturazioa eta dokumentuen kudeaketa: neurrira edo dagoeneko existitzen diren tresnekin.</li>
              <li>Datuen migrazioa eta zure taldearentzako prestakuntza.</li>
            </ul>
            <p class="guapiServiceCard__result"><strong>Emaitza:</strong> ordu gutxiago galduta, informazio guztia leku bakarrean eta hazteko prest dagoen negozioa.</p>
          </div>
        </article>

        <article class="guapiServiceCard reveal-up" id="automatizazioa">
          <div class="guapiServiceCard__head">
            <span class="guapiServiceCard__number">02</span>
            <h2 class="guapiServiceCard__title">IA eta agenteekin automatizazioa</h2>
            <p class="guapiServiceCard__lead">Zure tresnen barruan benetako zereginak irakurri, sailkatu, erantzun eta egiten dituzten IA agenteak: posta, CRMa, dokumentuak eta kalkulu-orriak.</p>
          </div>
          <div class="guapiServiceCard__body">
            <h3>Norentzat</h3>
            <p>Egunero zeregin berberak errepikatzen dituzten taldeak: bezeroarentzako arreta, aurrekontuak, txostenak, eskaerak edo paperak.</p>
            <h3>Zer egiten dugu</h3>
            <ul>
              <li>Zein prozesu automatizatzea merezi duen (eta zein ez) detektatzen dugu.</li>
              <li>Zure datu eta dokumentuetara konektatutako laguntzaileak eta agenteak.</li>
              <li>Zure sistemekin APIen bidezko integrazioak, zure lan egiteko modua aldatu gabe.</li>
              <li>Giza gainbegiratzea, ekintza bakoitzaren erregistroa eta kostuen kontrola.</li>
            </ul>
            <p class="guapiServiceCard__result"><strong>Emaitza:</strong> 24/7 dabiltzan prozesuak, kopiatu-itsatsiko akatsik gabe, beti pertsona bat agintean dagoela.</p>
          </div>
        </article>

        <article class="guapiServiceCard reveal-up" id="abiaraztea">
          <div class="guapiServiceCard__head">
            <span class="guapiServiceCard__number">03</span>
            <h2 class="guapiServiceCard__title">Proiektuen abiaraztea eta konponketa</h2>
            <p class="guapiServiceCard__lead">ChatGPT, Claude edo Cursorrekin aplikazio bat sortu duzu eta badabil… baina zure ordenagailuan bakarrik? Erreskatatu eta ekoizpenera eramaten dugu.</p>
          </div>
          <div class="guapiServiceCard__body">
            <h3>Norentzat</h3>
            <p>IArekin («vibe coding») egindako prototipo bat localhost-ean trabatuta, ezegonkor edo jendaurrean irekitzeko beldurrez duten sortzaileak, makerrak eta enpresak.</p>
            <h3>Zer egiten dugu</h3>
            <ul>
              <li>Kodearen eta arkitekturaren berrikuspena: zer balio duen eta zer egin behar den berriro.</li>
              <li>Zibersegurtasuna: agerian dauden gakoak, sarbideak, baimenak eta datu pertsonalak (DBEO).</li>
              <li>Hedapena: domeinua, zerbitzaria edo hodeia, datu-basea, babeskopiak eta HTTPS.</li>
              <li>Estandar profesionalak: testak, bertsio-kontrola, monitorizazioa eta dokumentazioa.</li>
            </ul>
            <p class="guapiServiceCard__result"><strong>Emaitza:</strong> zure proiektua interneten, segurua, mantentzeko erraza eta benetako erabiltzaileentzat prest.</p>
          </div>
        </article>

      </section>

      <!-- Faseak: lehena, kafea, doakoa da -->
      <section class="guapiPhases">
        <div class="guapiPhases__header reveal-up">
          <h2>Nola lan egiten dugun</h2>
          <p>Lehen urratsak ez du ezer kostatzen. Hitzez hitz: kafea ere guk jartzen dugu.</p>
        </div>

        <ol class="guapiPhases__list">
          <li class="guapiPhases__item guapiPhases__item--free reveal-up">
            <div class="guapiPhases__top">
              <span class="guapiPhases__number">01. fasea</span>
              <span class="guapiPhases__badge guapiPhases__badge--free">Doan</span>
            </div>
            <svg class="guapiPhases__icon" viewBox="0 0 64 64" aria-hidden="true" focusable="false">
              <path d="M14 26h30v14a12 12 0 0 1-12 12h-6a12 12 0 0 1-12-12V26z" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
              <path d="M44 30h4a6 6 0 0 1 0 12h-5" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
              <path d="M10 56h40" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
              <path d="M22 20c0-3 3-3 3-6s-3-3-3-6M31 20c0-3 3-3 3-6s-3-3-3-6" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
            <h3>Kafe bat</h3>
            <p>Esertzen gara —aurrez aurre Euskadin edo bideodeiz— eta zure enpresak nola funtzionatzen duen kontatzen diguzu. Zuzenean auditoria azkar bat egiten dugu, denbora eta dirua non galtzen diren ikusten dugu, eta hobetu daitekeenari buruzko ideia zehatzak eramango dituzu.</p>
            <ul>
              <li>Auditoria azkarra</li>
              <li>Ideiak eta lehentasunak</li>
              <li>Konpromisorik gabe</li>
            </ul>
          </li>

          <li class="guapiPhases__item reveal-up">
            <div class="guapiPhases__top">
              <span class="guapiPhases__number">02. fasea</span>
              <span class="guapiPhases__badge">Proposamena</span>
            </div>
            <h3>Aurreproiektua</h3>
            <p>Ideiak plan bihurtzen ditugu: zehaztapen teknikoa, arkitektura, epeak eta aurrekontu itxia. Zerbitzu-kontratua sinatzen dugu eta zehazki zer jasoko duzun badakizu.</p>
          </li>

          <li class="guapiPhases__item reveal-up">
            <div class="guapiPhases__top">
              <span class="guapiPhases__number">03. fasea</span>
              <span class="guapiPhases__badge">Garapena</span>
            </div>
            <h3>Proiektua</h3>
            <p>Diseinatu, garatu eta abiarazten dugu. Etapakako entregak, maiz egindako demoak eta probak ekoizpenera atera aurretik.</p>
          </li>

          <li class="guapiPhases__item reveal-up">
            <div class="guapiPhases__top">
              <span class="guapiPhases__number">04. fasea</span>
              <span class="guapiPhases__badge">Jarraipena</span>
            </div>
            <h3>Laguntza eta bilakaera</h3>
            <p>Mantentze-lanak, segurtasuna, monitorizazioa eta etengabeko hobekuntzak. Zure sistemak zurekin batera hazten jarraitzen du.</p>
          </li>
        </ol>

        <p class="guapiPhases__footnote reveal-up">01. fasea doakoa da. 02., 03. eta 04. faseak bereiz aurrekontatu eta kontratatzen dira: zuk erabakitzen duzu elkarrekin noraino iritsiko garen.</p>

        <div class="guapiPhases__cta reveal-up">
          <p>Zuk kafe batera gonbidatzen gaituzu (lasai, guk ordainduko dugu). Guk auditoriara gonbidatzen zaitugu.</p>
          <a href="<?= url('/eu/kontaktua') ?>" class="guapiHero__cta">Kafe batera gonbidatu</a>
        </div>
      </section>

    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>

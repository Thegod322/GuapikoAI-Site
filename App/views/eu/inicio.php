<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'eu')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/') ?>">
    <title>Guapiko - Etorkizuneko Agentzia</title>
    <meta name="description" content="Agente autonomoak eta Adimen Artifizialeko arkitekturak orkestratzen ditugu bikaintasuna eskatzen duten enpresentzat.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>

    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="guapiHero">
      <p class="guapiHero__tagline reveal-fade">Adimen artifizialeko agentzia Euskadi</p>
      <h1 class="guapiHero__title reveal-up">
        ETORKIZUNARI<br>
        EZ ZAIO ITXAROTEN.<br>
        <span class="guapiHero__line guapiHero__line--3">ERAIKI EGITEN DA.</span>
      </h1>
      <p class="guapiHero__subtitle reveal-up" style="transition-delay: 0.2s;">Agente autonomoak eta Adimen Artifizialeko arkitekturak orkestratzen ditugu bikaintasuna eskatzen duten enpresentzat.</p>
    </header>

    <main>

      <!-- Services Teaser -->
      <section class="guapiPhilosophy reveal-up">
        <div class="guapiPhilosophy__content">
          <h2 class="guapiPhilosophy__heading">BIHARKO INGENIARITZA</h2>
          <p class="guapiPhilosophy__text">Ez ditugu interfaze soilak sortzen. Ekosistema adimentsu eta deterministak diseinatzen ditugu. Prozesu bakoitza goratzen dugu IAren bidez, marruskadura zerora murriztuz.</p>
          <a href="<?= url('eu/zerbitzuak') ?>" class="guapiHero__cta" style="margin-top: 2rem;">Gaitasunak arakatu</a>
        </div>
      </section>

      <!-- Portfolio Highlight -->
      <section class="guapiObras reveal-up">
        <div class="guapiObras__header">
          <h2>Maisulanak</h2>
          <p>Zehaztasuna. Eskalagarritasuna. Estetika asimetrikoa. Gure arkitekturak berez hitz egiten duen benetako kasuak.</p>
        </div>
        
        <div class="guapiObras__grid">
          <!-- Dummy highlight 1 -->
          <a href="<?= url('eu/kasu-arrakastatsuak') ?>" class="guapiObras__card">
            <h3>MDD-Editor</h3>
            <p>AI Pipeline & Graph Architecture. Egituraren kaosa ekosistema bisual fluido bihurtzen duen nodo-editorea, interfaze asimetrikoarekin.</p>
          </a>
          <!-- Dummy highlight 2 -->
          <a href="<?= url('eu/kasu-arrakastatsuak') ?>" class="guapiObras__card">
            <h3>Farm Capitalist</h3>
            <p>Orkestrazio asimetrikoa eta optimizazio matematiko sakona IArekin integratutako joko-motorretan.</p>
          </a>
          <!-- Dummy highlight 3 -->
          <a href="<?= url('eu/kasu-arrakastatsuak') ?>" class="guapiObras__card">
            <h3>Waifu Capitalist</h3>
            <p>Ekonomia asimetrikoa eta erabiltzaileen atxikipen sakonera bideratutako sistema konplexuen diseinua.</p>
          </a>
          <!-- Dummy highlight 4 -->
          <a href="<?= url('eu/kasu-arrakastatsuak') ?>" class="guapiObras__card">
            <h3>Graboid Run</h3>
            <p>Nabigazio IA (Worm AI), pathfinding dinamikoa eta denbora errealean integratutako fisika arkitektura.</p>
          </a>
        </div>
        
        <div class="guapiObras__footer">
          <a href="<?= url('eu/kasu-arrakastatsuak') ?>" class="guapiHero__cta">Ikusi kasu arrakastatsuak</a>
        </div>
      </section>

    </main>
   
    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>

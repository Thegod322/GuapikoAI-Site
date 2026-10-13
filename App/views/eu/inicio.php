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
          <?php foreach (require app_path('data/eu/proyectos.php') as $proyecto): ?>
            <a href="<?= url($proyecto['url']) ?>" class="guapiObras__card">
              <img src="<?= asset($proyecto['image']) ?>" alt="<?= e($proyecto['image_alt']) ?>" title="<?= e($proyecto['title']) ?>" loading="lazy">
              <span class="guapiObras__category"><?= e($proyecto['category']) ?></span>
              <h3><?= e($proyecto['title']) ?></h3>
              <p><?= e($proyecto['summary']) ?></p>
              <span class="guapiObras__more">Ikusi proiektua &rarr;</span>
            </a>
          <?php endforeach; ?>
        </div>
        
        <div class="guapiObras__footer">
          <a href="<?= url('eu/kasu-arrakastatsuak') ?>" class="guapiHero__cta">Ikusi kasu arrakastatsuak</a>
        </div>
      </section>

    </main>
   
    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>

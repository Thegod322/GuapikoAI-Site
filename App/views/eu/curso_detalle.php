<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'eu')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/eu/prestakuntza/xehetasuna') ?>">
    <title>IA Agenteen Arkitektura | Guapiko AI Studio</title>
    <meta name="description" content="LLM Agenteen integrazio ikastaroa. Ekoizpena, Segurtasuna eta Optimizazio Jarraitua.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="guapiHero">
      <p class="guapiHero__tagline reveal-fade">Prestakuntza Esklusiboa</p>
      <h1 class="guapiHero__title reveal-up">IA Agenteen <span>Arkitektura</span></h1>
      <p class="guapiHero__subtitle reveal-up" style="transition-delay: 0.2s;">Ikastaro honek nire ikuspegi teknikoa erabat birdefinitu zuen.</p>
    </header>

    <main>

      <section class="reveal-up" style="width:100%; display:flex; flex-direction:column; align-items:center; padding: 4rem 1rem;">
        <h2 style="color: #ffffff; font-size: 2rem; margin-bottom: 3rem; font-family: Montserrat;">Ikastaroaren Programa</h2>
        
        <div class="cursoAccordion">
            <div class="cursoAccordion__item">
                <h3>1. Modulua: Oinarriak</h3>
                <p>LLM Oinarriak eta Testuinguruaren Kudeaketa.</p>
            </div>
            <div class="cursoAccordion__item">
                <h3>2. Modulua: RAG Aurreratua</h3>
                <p>RAG Aurreratua eta Agenteen Orkestrazioa.</p>
            </div>
            <div class="cursoAccordion__item">
                <h3>3. Modulua: Ekoizpena</h3>
                <p>Ekoizpena, Segurtasuna eta Optimizazio Jarraitua.</p>
            </div>
        </div>
        
        <div style="margin-top: 4rem; text-align: center;">
            <p style="color: #FF145A; font-size: 2rem; font-weight: bold; margin-bottom: 2rem;">Nire plaza ziurtatu</p>
            <a href="<?= url('eu/kontaktua') ?>" class="guapiHero__cta">Eman izena orain</a>
        </div>
      </section>

    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>

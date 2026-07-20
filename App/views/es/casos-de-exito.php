<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/es/casos-de-exito') ?>">
    <title>Casos de Éxito | Guapiko AI Studio</title>
    <meta name="description" content="Soluciones asimétricas para problemas complejos. Ecosistemas de IA en producción.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <main>
      <section class="guapiPhilosophy reveal-up" style="min-height: 40vh;">
        <div class="guapiPhilosophy__content">
          <h1 class="guapiPhilosophy__heading">Casos de Éxito</h1>
          <p class="guapiPhilosophy__text">Soluciones asimétricas para problemas complejos. Una selección de ecosistemas en producción.</p>
        </div>
      </section>

      <!-- Asymmetric Grid -->
      <section class="guapiPortfolio reveal-up">
        <div class="guapiPortfolio__grid">
          
          <a href="<?= url('es/casos-de-exito/detalle') ?>" class="guapiPortfolio__item">
            <img src="<?= asset('assets/img/portfolio/mdd_editor.png') ?>" alt="MDD-Editor">
            <div class="guapiPortfolio__overlay">
              <h3 class="guapiPortfolio__title">MDD-Editor</h3>
            </div>
          </a>
          <a href="<?= url('es/casos-de-exito/detalle') ?>" class="guapiPortfolio__item">
            <img src="<?= asset('assets/img/portfolio/waifu_capitalist.png') ?>" alt="Proyecto 2">
            <div class="guapiPortfolio__overlay">
              <h3 class="guapiPortfolio__title">Nutaku Waifu Capitalist</h3>
            </div>
          </a>
          <a href="<?= url('es/casos-de-exito/detalle') ?>" class="guapiPortfolio__item">
            <img src="<?= asset('assets/img/portfolio/farm_capitalist.png') ?>" alt="Proyecto 3">
            <div class="guapiPortfolio__overlay">
              <h3 class="guapiPortfolio__title">CrazyGames Farm Capitalist</h3>
            </div>
          </a>
          <a href="<?= url('es/casos-de-exito/detalle') ?>" class="guapiPortfolio__item">
            <img src="<?= asset('assets/img/portfolio/graboid_run.png') ?>" alt="Proyecto 4">
            <div class="guapiPortfolio__overlay">
              <h3 class="guapiPortfolio__title">Graboid Run</h3>
            </div>
          </a>
          <a href="<?= url('es/casos-de-exito/detalle') ?>" class="guapiPortfolio__item">
            <img src="<?= asset('assets/img/portfolio/guapiko_studio.png') ?>" alt="Proyecto 5">
            <div class="guapiPortfolio__overlay">
              <h3 class="guapiPortfolio__title">Guapiko AI Studio</h3>
            </div>
          </a>
          <a href="<?= url('es/casos-de-exito/detalle') ?>" class="guapiPortfolio__item">
            <img src="<?= asset('assets/img/portfolio/proyecto_alpha.png') ?>" alt="Proyecto 6">
            <div class="guapiPortfolio__overlay">
              <h3 class="guapiPortfolio__title">Proyecto Alpha</h3>
            </div>
          </a>

        </div>
      </section>

    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>

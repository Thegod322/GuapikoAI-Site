<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'eu')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/eu/kasu-arrakastatsuak') ?>">
    <title>Kasu Arrakastatsuak | Guapiko AI Studio</title>
    <meta name="description" content="Arazo konplexuetarako irtenbide asimetrikoak. Ekoizpenean dauden IA ekosistemak.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <main>
      <section class="guapiPhilosophy reveal-up" style="min-height: 40vh;">
        <div class="guapiPhilosophy__content">
          <h1 class="guapiPhilosophy__heading">Kasu Arrakastatsuak</h1>
          <p class="guapiPhilosophy__text">Arazo konplexuetarako irtenbide asimetrikoak. Ekoizpenean dauden ekosistemen hautaketa bat.</p>
        </div>
      </section>

      <!-- Asymmetric Grid -->
      <section class="guapiPortfolio reveal-up">
        <div class="guapiPortfolio__grid">
          
          <a href="<?= url('eu/kasu-arrakastatsuak/xehetasuna') ?>" class="guapiPortfolio__item">
            <img src="<?= asset('assets/img/portfolio/mdd_editor.png') ?>" alt="MDD-Editor" title="MDD Diseinuko Geruza Anitzeko Editorea">
            <div class="guapiPortfolio__overlay">
              <h3 class="guapiPortfolio__title">MDD-Editor</h3>
            </div>
          </a>
          <a href="<?= url('eu/kasu-arrakastatsuak/xehetasuna') ?>" class="guapiPortfolio__item">
            <img src="<?= asset('assets/img/portfolio/waifu_capitalist.png') ?>" alt="Nutaku Waifu Capitalist" title="Nutaku Waifu Capitalist Proiektua">
            <div class="guapiPortfolio__overlay">
              <h3 class="guapiPortfolio__title">Nutaku Waifu Capitalist</h3>
            </div>
          </a>
          <a href="<?= url('eu/kasu-arrakastatsuak/xehetasuna') ?>" class="guapiPortfolio__item">
            <img src="<?= asset('assets/img/portfolio/farm_capitalist.png') ?>" alt="CrazyGames Farm Capitalist" title="CrazyGames Farm Capitalist Proiektua">
            <div class="guapiPortfolio__overlay">
              <h3 class="guapiPortfolio__title">CrazyGames Farm Capitalist</h3>
            </div>
          </a>
          <a href="<?= url('eu/kasu-arrakastatsuak/xehetasuna') ?>" class="guapiPortfolio__item">
            <img src="<?= asset('assets/img/portfolio/graboid_run.png') ?>" alt="Graboid Run" title="Graboid Run Jokoa">
            <div class="guapiPortfolio__overlay">
              <h3 class="guapiPortfolio__title">Graboid Run</h3>
            </div>
          </a>
          <a href="<?= url('eu/kasu-arrakastatsuak/xehetasuna') ?>" class="guapiPortfolio__item">
            <img src="<?= asset('assets/img/portfolio/guapiko_studio.png') ?>" alt="Guapiko AI Studio" title="Guapiko AI Studio Plataforma">
            <div class="guapiPortfolio__overlay">
              <h3 class="guapiPortfolio__title">Guapiko AI Studio</h3>
            </div>
          </a>
          <a href="<?= url('eu/kasu-arrakastatsuak/xehetasuna') ?>" class="guapiPortfolio__item">
            <img src="<?= asset('assets/img/portfolio/proyecto_alpha.png') ?>" alt="Alpha Proiektua" title="Alpha Proiektuaren Garapena">
            <div class="guapiPortfolio__overlay">
              <h3 class="guapiPortfolio__title">Alpha Proiektua</h3>
            </div>
          </a>

        </div>
      </section>

    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>

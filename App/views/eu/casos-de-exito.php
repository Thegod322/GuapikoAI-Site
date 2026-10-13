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
          <p class="guapiPhilosophy__text">Benetako proiektuak, barrutik kontatuak: erronka, irtenbidea eta lortutakoa.</p>
        </div>
      </section>

      <!-- Rejilla asimétrica: los proyectos salen de App/data/eu/proyectos.php -->
      <section class="guapiPortfolio reveal-up">
        <div class="guapiPortfolio__grid">
          <?php foreach (require app_path('data/eu/proyectos.php') as $proyecto): ?>
            <a href="<?= url($proyecto['url']) ?>" class="guapiPortfolio__item">
              <img src="<?= asset($proyecto['image']) ?>" alt="<?= e($proyecto['image_alt']) ?>" title="<?= e($proyecto['title']) ?>" loading="lazy">
              <div class="guapiPortfolio__overlay">
                <p class="guapiPortfolio__category"><?= e($proyecto['category']) ?></p>
                <h2 class="guapiPortfolio__title"><?= e($proyecto['title']) ?></h2>
                <p class="guapiPortfolio__summary"><?= e($proyecto['summary']) ?></p>
                <span class="guapiPortfolio__more">Ikusi proiektua &rarr;</span>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </section>

    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>

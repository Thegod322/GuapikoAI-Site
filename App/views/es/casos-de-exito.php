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
          <p class="guapiPhilosophy__text">Proyectos reales, contados por dentro: el reto, la solución y lo que se consiguió.</p>
        </div>
      </section>

      <!-- Rejilla asimétrica: los proyectos salen de App/data/es/proyectos.php -->
      <section class="guapiPortfolio reveal-up">
        <div class="guapiPortfolio__grid">
          <?php foreach (require app_path('data/es/proyectos.php') as $proyecto): ?>
            <a href="<?= url($proyecto['url']) ?>" class="guapiPortfolio__item">
              <img src="<?= asset($proyecto['image']) ?>" alt="<?= e($proyecto['image_alt']) ?>" title="<?= e($proyecto['title']) ?>" loading="lazy">
              <div class="guapiPortfolio__overlay">
                <p class="guapiPortfolio__category"><?= e($proyecto['category']) ?></p>
                <h2 class="guapiPortfolio__title"><?= e($proyecto['title']) ?></h2>
                <p class="guapiPortfolio__summary"><?= e($proyecto['summary']) ?></p>
                <span class="guapiPortfolio__more">Ver proyecto &rarr;</span>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </section>

    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>

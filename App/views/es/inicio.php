<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/') ?>">
    <title>Guapiko - Agencia de Futuro</title>
    <meta name="description" content="Orquestamos agentes autónomos y arquitecturas de Inteligencia Artificial para empresas que exigen la excelencia.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>

    <?php require app_path('includes/es/nav.php'); ?>

    <header class="guapiHero">
      <p class="guapiHero__tagline reveal-fade">Agencia de inteligencia artificial Euskadi</p>
      <h1 class="guapiHero__title reveal-up">
        EL FUTURO<br>
        NO SE ESPERA.<br>
        <span class="guapiHero__line guapiHero__line--3">SE CONSTRUYE.</span>
      </h1>
      <p class="guapiHero__subtitle reveal-up" style="transition-delay: 0.2s;">Orquestamos agentes autónomos y arquitecturas de Inteligencia Artificial para empresas que exigen la excelencia.</p>
    </header>

    <main>

      <!-- Services Teaser -->
      <section class="guapiPhilosophy reveal-up">
        <div class="guapiPhilosophy__content">
          <h2 class="guapiPhilosophy__heading">INGENIERÍA DEL MAÑANA</h2>
          <p class="guapiPhilosophy__text">No creamos simples interfaces. Diseñamos ecosistemas inteligentes y deterministas. Elevamos cada proceso mediante IA, reduciendo la fricción a cero.</p>
          <a href="<?= url('es/servicios') ?>" class="guapiHero__cta" style="margin-top: 2rem;">Explorar capacidades</a>
        </div>
      </section>

      <!-- Portfolio Highlight -->
      <section class="guapiObras reveal-up">
        <div class="guapiObras__header">
          <h2>Obras Maestras</h2>
          <p>Precisión. Escalabilidad. Estética asimétrica. Casos reales donde nuestra arquitectura habla por sí misma.</p>
        </div>
        
        <div class="guapiObras__grid">
          <?php foreach (require app_path('data/es/proyectos.php') as $proyecto): ?>
            <a href="<?= url($proyecto['url']) ?>" class="guapiObras__card">
              <img src="<?= asset($proyecto['image']) ?>" alt="<?= e($proyecto['image_alt']) ?>" title="<?= e($proyecto['title']) ?>" loading="lazy">
              <span class="guapiObras__category"><?= e($proyecto['category']) ?></span>
              <h3><?= e($proyecto['title']) ?></h3>
              <p><?= e($proyecto['summary']) ?></p>
              <span class="guapiObras__more">Ver proyecto &rarr;</span>
            </a>
          <?php endforeach; ?>
        </div>
        
        <div class="guapiObras__footer">
          <a href="<?= url('es/casos-de-exito') ?>" class="guapiHero__cta">Ver casos de éxito</a>
        </div>
      </section>

    </main>
   
    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>

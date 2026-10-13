<?php
// Página de un proyecto del portafolio. El proyecto llega desde la ruta
// ('project' en App/config/config.php) y sus textos desde App/data/es/proyectos.php.
$proyectos = require app_path('data/es/proyectos.php');
$slug = $route['project'] ?? '';
$p = $proyectos[$slug] ?? reset($proyectos);

// Siguiente proyecto (en bucle) para el enlace del final.
$slugs = array_keys($proyectos);
$siguiente = $proyectos[$slugs[(array_search($slug, $slugs, true) + 1) % count($slugs)]];
?>
<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url($p['url']) ?>">
    <title><?= e($p['title']) ?> | Casos de Éxito | Guapiko AI Studio</title>
    <meta name="description" content="<?= e($p['meta_description']) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <header class="guapiCase__hero">
      <a class="guapiCase__back reveal-fade" href="<?= url('/es/casos-de-exito') ?>">&larr; Casos de éxito</a>
      <p class="guapiCase__category reveal-fade"><?= e($p['category']) ?></p>
      <h1 class="guapiCase__title reveal-up"><?= e($p['title']) ?></h1>
      <p class="guapiCase__lead reveal-up"><?= e($p['summary']) ?></p>
      <dl class="guapiCase__facts reveal-up">
        <?php foreach ($p['facts'] as $dato => $valor): ?>
          <div>
            <dt><?= e($dato) ?></dt>
            <dd><?= e($valor) ?></dd>
          </div>
        <?php endforeach; ?>
      </dl>
    </header>

    <main>
      <figure class="guapiCase__cover reveal-up">
        <img src="<?= asset($p['image']) ?>" alt="<?= e($p['image_alt']) ?>" title="<?= e($p['title']) ?>" width="1424" height="890">
      </figure>

      <section class="guapiCase__story">
        <article class="guapiCase__block reveal-up">
          <span class="guapiCase__index">01</span>
          <h2>El reto</h2>
          <p><?= e($p['challenge']) ?></p>
        </article>
        <article class="guapiCase__block reveal-up">
          <span class="guapiCase__index">02</span>
          <h2>La solución</h2>
          <p><?= e($p['solution']) ?></p>
        </article>
      </section>

      <section class="guapiCase__results reveal-up" aria-label="Resultados">
        <?php foreach ($p['results'] as $resultado): ?>
          <div class="guapiCase__result">
            <strong><?= e($resultado['value']) ?></strong>
            <span><?= e($resultado['label']) ?></span>
          </div>
        <?php endforeach; ?>
      </section>

      <section class="guapiCase__features">
        <h2 class="guapiCase__sectionTitle reveal-up">Qué construimos</h2>
        <div class="guapiCase__featureGrid">
          <?php foreach ($p['features'] as $feature): ?>
            <article class="guapiCase__feature reveal-up">
              <h3><?= e($feature['title']) ?></h3>
              <p><?= e($feature['text']) ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </section>

      <section class="guapiCase__gallery">
        <h2 class="guapiCase__sectionTitle reveal-up">En imágenes</h2>
        <?php foreach ($p['gallery'] as $foto): ?>
          <?php if ($foto['src'] === $p['image']) continue; // la portada ya se muestra arriba ?>
          <figure class="guapiCase__shot reveal-up">
            <img src="<?= asset($foto['src']) ?>" alt="<?= e($foto['alt']) ?>" title="<?= e($foto['alt']) ?>" loading="lazy" width="1424" height="890">
            <figcaption><?= e($foto['caption']) ?></figcaption>
          </figure>
        <?php endforeach; ?>
      </section>

      <section class="guapiCase__stack reveal-up">
        <h2 class="guapiCase__sectionTitle">Tecnología</h2>
        <ul>
          <?php foreach ($p['stack'] as $tecnologia): ?>
            <li><?= e($tecnologia) ?></li>
          <?php endforeach; ?>
        </ul>
        <?php if ($p['note'] !== ''): ?>
          <p class="guapiCase__note"><?= e($p['note']) ?></p>
        <?php endif; ?>
      </section>

      <section class="guapiCase__cta reveal-up">
        <h2>¿Tienes un reto parecido?</h2>
        <p>Cuéntanoslo con un café. La auditoría inicial y las primeras ideas corren de nuestra cuenta.</p>
        <a href="<?= url('/es/contacto') ?>" class="guapiHero__cta">Invitar a café</a>
      </section>

      <a class="guapiCase__next reveal-up" href="<?= url($siguiente['url']) ?>">
        <span>Siguiente proyecto</span>
        <strong><?= e($siguiente['title']) ?> &rarr;</strong>
      </a>
    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>

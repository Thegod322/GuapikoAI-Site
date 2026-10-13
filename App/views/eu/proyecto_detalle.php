<?php
// Portafolioko proiektu baten orria. Proiektua ibilbidetik dator
// ('project' App/config/config.php-n) eta testuak App/data/eu/proyectos.php-tik.
$proyectos = require app_path('data/eu/proyectos.php');
$slug = $route['project'] ?? '';
$p = $proyectos[$slug] ?? reset($proyectos);

// Hurrengo proiektua (begiztan) amaierako estekarako.
$slugs = array_keys($proyectos);
$siguiente = $proyectos[$slugs[(array_search($slug, $slugs, true) + 1) % count($slugs)]];
?>
<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'eu')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url($p['url']) ?>">
    <title><?= e($p['title']) ?> | Kasu Arrakastatsuak | Guapiko AI Studio</title>
    <meta name="description" content="<?= e($p['meta_description']) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="guapiCase__hero">
      <a class="guapiCase__back reveal-fade" href="<?= url('/eu/kasu-arrakastatsuak') ?>">&larr; Kasu arrakastatsuak</a>
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
          <h2>Erronka</h2>
          <p><?= e($p['challenge']) ?></p>
        </article>
        <article class="guapiCase__block reveal-up">
          <span class="guapiCase__index">02</span>
          <h2>Irtenbidea</h2>
          <p><?= e($p['solution']) ?></p>
        </article>
      </section>

      <section class="guapiCase__results reveal-up" aria-label="Emaitzak">
        <?php foreach ($p['results'] as $resultado): ?>
          <div class="guapiCase__result">
            <strong><?= e($resultado['value']) ?></strong>
            <span><?= e($resultado['label']) ?></span>
          </div>
        <?php endforeach; ?>
      </section>

      <section class="guapiCase__features">
        <h2 class="guapiCase__sectionTitle reveal-up">Zer eraiki genuen</h2>
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
        <h2 class="guapiCase__sectionTitle reveal-up">Irudietan</h2>
        <?php foreach ($p['gallery'] as $foto): ?>
          <?php if ($foto['src'] === $p['image']) continue; // la portada ya se muestra arriba ?>
          <figure class="guapiCase__shot reveal-up">
            <img src="<?= asset($foto['src']) ?>" alt="<?= e($foto['alt']) ?>" title="<?= e($foto['alt']) ?>" loading="lazy" width="1424" height="890">
            <figcaption><?= e($foto['caption']) ?></figcaption>
          </figure>
        <?php endforeach; ?>
      </section>

      <section class="guapiCase__stack reveal-up">
        <h2 class="guapiCase__sectionTitle">Teknologia</h2>
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
        <h2>Antzeko erronkarik baduzu?</h2>
        <p>Kontaiguzu kafe baten bueltan. Hasierako auditoria eta lehen ideiak gure kontura doaz.</p>
        <a href="<?= url('/eu/kontaktua') ?>" class="guapiHero__cta">Kafe batera gonbidatu</a>
      </section>

      <a class="guapiCase__next reveal-up" href="<?= url($siguiente['url']) ?>">
        <span>Hurrengo proiektua</span>
        <strong><?= e($siguiente['title']) ?> &rarr;</strong>
      </a>
    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>

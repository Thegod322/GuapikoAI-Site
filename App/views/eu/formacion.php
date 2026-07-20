<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'eu')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/eu/prestakuntza') ?>">
    <title>Prestakuntza Esklusiboa | Guapiko AI Studio</title>
    <meta name="description" content="Ezagutzaren zuzeneko transferentzia elite teknikotik.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <main>
      <section class="guapiPhilosophy reveal-up" style="min-height: 40vh;">
        <div class="guapiPhilosophy__content">
          <h1 class="guapiPhilosophy__heading">Prestakuntza Esklusiboa</h1>
          <p class="guapiPhilosophy__text">Ezagutzaren zuzeneko transferentzia elite teknikotik. Ikasi aro berriko arkitekto bat bezala pentsatzen, diseinatzen eta eraikitzen.</p>
        </div>
      </section>

      <section class="guapiCursos reveal-up">
        <div class="guapiCursos__grid">
          
          <a href="<?= url('eu/prestakuntza/xehetasuna') ?>" class="guapiCursos__card">
            <h3>IA Agenteen Arkitektura</h3>
            <p style="color: #FF145A; font-weight: bold; margin-bottom: 1rem; font-size: 0.9rem;">Ikastaro Tekniko Aurreratua</p>
            <p>LLM Agenteen integrazioa. Teoria hutsaren eta gaur egun aplikatu daitekeen benetako ingeniaritzaren arteko aldea.</p>
          </a>

          <!-- Highlight 2 -->
          <a href="<?= url('eu/prestakuntza/xehetasuna') ?>" class="guapiCursos__card">
            <h3>Prompt Ingeniaritza</h3>
            <p style="color: #FF145A; font-weight: bold; margin-bottom: 1rem; font-size: 0.9rem;">Tailer Praktikoa</p>
            <p>Eredu sortzaileen arrazoibidea eta sormena maximizatzeko teknika aurreratuak.</p>
          </a>

          <!-- Highlight 3 -->
          <a href="<?= url('eu/prestakuntza/xehetasuna') ?>" class="guapiCursos__card">
            <h3>Ikusmen Konputazionala</h3>
            <p style="color: #FF145A; font-weight: bold; margin-bottom: 1rem; font-size: 0.9rem;">Masterclass</p>
            <p>Ikusmen perzepzioko sistemak, OCR eta denbora errealeko analisia industria-aplikazioetarako.</p>
          </a>

          <!-- Highlight 4 -->
          <a href="<?= url('eu/prestakuntza/xehetasuna') ?>" class="guapiCursos__card">
            <h3>Enpresarako RAG</h3>
            <p style="color: #FF145A; font-weight: bold; margin-bottom: 1rem; font-size: 0.9rem;">Espezializazioa</p>
            <p>Retrieval-Augmented Generation datu-base bektorialekin, errendimendu handiko enpresentzat.</p>
          </a>

        </div>
      </section>

    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>

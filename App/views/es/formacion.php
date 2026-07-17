<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/es/formacion') ?>">
    <title>Formación Exclusiva | Guapiko AI Studio</title>
    <meta name="description" content="Transferencia directa de conocimiento desde la élite técnica.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <main>
      <section class="guapiPhilosophy reveal-up" style="min-height: 40vh;">
        <div class="guapiPhilosophy__content">
          <h1 class="guapiPhilosophy__heading">Formación Exclusiva</h1>
          <p class="guapiPhilosophy__text">Transferencia directa de conocimiento desde la élite técnica. Aprende a pensar, diseñar y construir como un arquitecto de la nueva era.</p>
        </div>
      </section>

      <section class="guapiServices reveal-up">
        <div class="guapiServices__grid">
          
          <a href="<?= url('es/formacion/detalle') ?>" class="guapiServices__card">
            <h3>Arquitectura de Agentes IA</h3>
            <p style="color: #FF145A; font-weight: bold; margin-bottom: 1rem; font-size: 0.9rem;">Curso Técnico Avanzado</p>
            <p>Integración de Agentes LLM. La diferencia entre la teoría vacía y la ingeniería real aplicable hoy.</p>
          </a>

        </div>
        
        <div style="margin-top: 4rem; width: 100%; text-align: center;">
          <a href="<?= url('es/formacion/detalle') ?>" class="guapiHero__cta">Acceder al conocimiento</a>
        </div>
      </section>

    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>

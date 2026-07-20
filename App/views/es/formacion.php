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

      <section class="guapiCursos reveal-up">
        <div class="guapiCursos__grid">
          
          <a href="<?= url('es/formacion/detalle') ?>" class="guapiCursos__card">
            <h3>Arquitectura de Agentes IA</h3>
            <p style="color: #FF145A; font-weight: bold; margin-bottom: 1rem; font-size: 0.9rem;">Curso Técnico Avanzado</p>
            <p>Integración de Agentes LLM. La diferencia entre la teoría vacía y la ingeniería real aplicable hoy.</p>
          </a>

          <!-- Highlight 2 -->
          <a href="<?= url('es/formacion/detalle') ?>" class="guapiCursos__card">
            <h3>Ingeniería de Prompts</h3>
            <p style="color: #FF145A; font-weight: bold; margin-bottom: 1rem; font-size: 0.9rem;">Workshop Práctico</p>
            <p>Técnicas avanzadas para maximizar el razonamiento y la creatividad de los modelos fundacionales.</p>
          </a>

          <!-- Highlight 3 -->
          <a href="<?= url('es/formacion/detalle') ?>" class="guapiCursos__card">
            <h3>Visión Computacional</h3>
            <p style="color: #FF145A; font-weight: bold; margin-bottom: 1rem; font-size: 0.9rem;">Masterclass</p>
            <p>Sistemas de percepción visual, OCR, y análisis en tiempo real para aplicaciones industriales.</p>
          </a>

          <!-- Highlight 4 -->
          <a href="<?= url('es/formacion/detalle') ?>" class="guapiCursos__card">
            <h3>RAG Empresarial</h3>
            <p style="color: #FF145A; font-weight: bold; margin-bottom: 1rem; font-size: 0.9rem;">Especialización</p>
            <p>Retrieval-Augmented Generation con bases de datos vectoriales para empresas de alto rendimiento.</p>
          </a>

        </div>
      </section>

    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>

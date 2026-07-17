<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/es/servicios') ?>">
    <title>Nuestros Servicios | Guapiko AI Studio</title>
    <meta name="description" content="Servicios de ingeniería de Inteligencia Artificial y agentes autónomos.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <main>
      <section class="guapiPhilosophy reveal-up" style="min-height: 40vh;">
        <div class="guapiPhilosophy__content">
          <h1 class="guapiPhilosophy__heading">Nuestros Servicios</h1>
        </div>
      </section>

      <section class="guapiServices reveal-up">
        <div class="guapiServices__grid">
          
          <a href="<?= url('es/servicios/detalle') ?>" class="guapiServices__card">
            <h3>Launch & Repair</h3>
            <p>Rescatamos prototipos estancados y los llevamos a producción. Infraestructura, optimización y despliegue impecable.</p>
          </a>

          <a href="<?= url('es/servicios/detalle') ?>" class="guapiServices__card">
            <h3>Ecosistemas Autónomos</h3>
            <p>Implementamos agentes LLM que transforman la complejidad en flujos de trabajo silenciosos y eficientes.</p>
          </a>

          <a href="<?= url('es/servicios/detalle') ?>" class="guapiServices__card">
            <h3>IA a Medida</h3>
            <p>Arquitecturas de inteligencia artificial diseñadas específicamente para acoplarse a la lógica profunda de tu negocio.</p>
          </a>

        </div>
      </section>

      <!-- Workflow block -->
      <section class="guapiPhilosophy reveal-up">
        <div class="guapiPhilosophy__content">
          <h2 class="guapiPhilosophy__heading" style="color: #ffffff;">Metodología</h2>
          <div style="display: flex; justify-content: space-between; margin-top: 3rem; text-align: left; gap: 2rem; color: #a0a0a0;">
            <div><strong style="color:#FF145A;">Fase 1:</strong><br>Auditoría Quirúrgica.</div>
            <div><strong style="color:#FF145A;">Fase 2:</strong><br>Arquitectura Determinista.</div>
            <div><strong style="color:#FF145A;">Fase 3:</strong><br>Ejecución Silenciosa.</div>
          </div>
          <a href="<?= url('es/contacto') ?>" class="guapiHero__cta" style="margin-top: 4rem;">Solicitar Auditoría</a>
        </div>
      </section>

    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>

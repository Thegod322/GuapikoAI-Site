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
        <div class="guapiServices__list">
          
          <article class="art13">
            <img src="<?= asset('assets/img/servicios/auditoria_ai.png') ?>" alt="Auditoría Quirúrgica AI">
            <div>
              <h3>Auditoría Quirúrgica AI</h3>
              <p>Analizamos la viabilidad real de tu idea, identificamos cuellos de botella técnicos y diseñamos una arquitectura escalable antes de escribir una sola línea de código.</p>
              <a href="<?= url('es/servicios/detalle') ?>" class="guapiHero__cta">Solicitar Auditoría</a>
            </div>
          </article>

          <article class="art13 upsidedown">
            <img src="<?= asset('assets/img/servicios/ecosistemas.png') ?>" alt="Ecosistemas Autónomos">
            <div>
              <h3>Ecosistemas Autónomos (Agentes)</h3>
              <p>Implementamos flujos de trabajo basados en Inteligencia Artificial y agentes LLM que transforman la complejidad y el desorden en procesos silenciosos, deterministas y altamente eficientes.</p>
              <a href="<?= url('es/servicios/detalle') ?>" class="guapiHero__cta">Ver Soluciones</a>
            </div>
          </article>

          <article class="art13">
            <img src="<?= asset('assets/img/servicios/launch_repair.png') ?>" alt="Launch & Repair">
            <div>
              <h3>Lanzamiento y Reparación de Modelos</h3>
              <p>Rescatamos prototipos atascados en el infierno del desarrollo y los llevamos a producción. Nos encargamos de la infraestructura, seguridad, optimización extrema y despliegue impecable en la nube.</p>
              <a href="<?= url('es/servicios/detalle') ?>" class="guapiHero__cta">Iniciar Rescate</a>
            </div>
          </article>

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

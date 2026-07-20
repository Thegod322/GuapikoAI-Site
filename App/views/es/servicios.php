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
            <img src="<?= asset('assets/img/servicios/auditoria_ai.png') ?>" alt="Auditoría Quirúrgica AI" title="Servicio de Auditoría Quirúrgica AI">
            <div>
              <h3>Auditoría Quirúrgica AI</h3>
              <p>Analizamos la viabilidad real de tu idea, identificamos cuellos de botella técnicos y diseñamos una arquitectura escalable antes de escribir una sola línea de código.</p>
              <a href="<?= url('es/servicios/detalle') ?>" class="guapiHero__cta">Solicitar Auditoría</a>
            </div>
          </article>

          <article class="art13 upsidedown">
            <img src="<?= asset('assets/img/servicios/ecosistemas.png') ?>" alt="Ecosistemas Autónomos de IA" title="Desarrollo de Ecosistemas Autónomos de Inteligencia Artificial">
            <div>
              <h3>Ecosistemas Autónomos (Agentes)</h3>
              <p>Implementamos flujos de trabajo basados en Inteligencia Artificial y agentes LLM que transforman la complejidad y el desorden en procesos silenciosos, deterministas y altamente eficientes.</p>
              <a href="<?= url('es/servicios/detalle') ?>" class="guapiHero__cta">Ver Soluciones</a>
            </div>
          </article>

          <article class="art13">
            <img src="<?= asset('assets/img/servicios/launch_repair.png') ?>" alt="Lanzamiento y Reparación de Modelos" title="Servicio Launch & Repair de Modelos de IA">
            <div>
              <h3>Lanzamiento y Reparación de Modelos</h3>
              <p>Rescatamos prototipos atascados en el infierno del desarrollo y los llevamos a producción. Nos encargamos de la infraestructura, seguridad, optimización extrema y despliegue impecable en la nube.</p>
              <a href="<?= url('es/servicios/detalle') ?>" class="guapiHero__cta">Iniciar Rescate</a>
            </div>
          </article>

        </div>
      </section>

      <!-- Workflow block -->
      <section class="guapiServices reveal-up">
        <div class="guapiServices__header" style="margin-bottom: 2rem;">
          <h2 style="border-bottom: none;">Metodología de Trabajo</h2>
          <p style="color: #a0a0a0; font-size: 1.2rem; margin-top: 1rem; max-width: 800px; line-height: 1.6;">
            No dejamos espacio para la improvisación. Cada proyecto sigue un pipeline riguroso y determinista, asegurando que el resultado final supere las expectativas del mercado.
          </p>
        </div>
        
        <div class="metodologiaGrid">
          <div class="metodologiaGrid__card">
            <h3>Fase 1: Auditoría Quirúrgica</h3>
            <p>Desmontamos tu idea y analizamos cada componente. Identificamos los verdaderos cuellos de botella técnicos antes de escribir una sola línea de código.</p>
          </div>
          <div class="metodologiaGrid__card">
            <h3>Fase 2: Arquitectura Determinista</h3>
            <p>Diseñamos sistemas asimétricos y escalables. Cada línea de código tiene un propósito claro. Sin dependencias inútiles, sin over-engineering.</p>
          </div>
          <div class="metodologiaGrid__card">
            <h3>Fase 3: Ejecución Silenciosa</h3>
            <p>Lanzamiento a producción implacable. Monitorización proactiva y ecosistemas de IA que operan 24/7 en segundo plano asegurando la calidad.</p>
          </div>
        </div>

        <div style="margin-top: 4rem; width: 100%; text-align: center;">
          <a href="<?= url('es/contacto') ?>" class="guapiHero__cta">Solicitar Auditoría</a>
        </div>
      </section>

    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>

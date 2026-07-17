<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/es/servicios/detalle') ?>">
    <title>AI App Launch & Repair | Guapiko AI Studio</title>
    <meta name="description" content="Resolvemos la última milla: configuración de servidores, dominios, DevOps y optimización técnica extrema.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <header class="guapiHero">
      <p class="guapiHero__tagline reveal-fade">AI App Launch & Repair</p>
      <h1 class="guapiHero__title reveal-up">Del Boceto a<br><span>Producción</span></h1>
      <p class="guapiHero__subtitle reveal-up" style="transition-delay: 0.2s;">Tienes el modelo o un concepto estancado. Nosotros aportamos la infraestructura, la seguridad y el despliegue para hacerlo real.</p>
    </header>

    <main>

      <section class="guapiPhilosophy reveal-up">
        <div class="guapiPhilosophy__content">
          <h2 class="guapiPhilosophy__heading">Solución Definitiva</h2>
          <p class="guapiPhilosophy__text">Resolvemos la última milla: configuración de servidores, dominios, DevOps y optimización técnica extrema.</p>
        </div>
      </section>

      <section class="reveal-up" style="width:100%; display:flex; justify-content:center; padding: 4rem 1rem;">
        <div style="background-color: #1e1e1e; padding: 3rem; text-align: center; border-top: 3px solid #FF145A; width: 100%; max-width: 600px;">
          <h3 style="color: #ffffff; font-size: 2rem; margin-bottom: 1rem; font-family: Montserrat;">Auditoría y Plan de Acción</h3>
          <p style="color: #FF145A; font-size: 3rem; font-weight: bold; margin-bottom: 2rem;">350 EUR</p>
          <p style="color: #a0a0a0; margin-bottom: 3rem;">Análisis profundo de código, propuesta de arquitectura en la nube y roadmap de escalabilidad.</p>
          <a href="<?= url('es/contacto') ?>" class="guapiHero__cta">Solicitar Auditoría Técnica</a>
        </div>
      </section>

    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>

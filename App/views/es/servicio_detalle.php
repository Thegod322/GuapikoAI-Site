<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/es/servicios/detalle') ?>">
    <title>Auditoría Quirúrgica AI | Guapiko AI Studio</title>
    <meta name="description" content="Resolvemos la viabilidad técnica y diseñamos una arquitectura escalable antes de escribir código.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <header class="guapiHero">
      <p class="guapiHero__tagline reveal-fade">Servicio de Élite</p>
      <h1 class="guapiHero__title reveal-up">Auditoría Quirúrgica <span>AI</span></h1>
      <p class="guapiHero__subtitle reveal-up" style="transition-delay: 0.2s;">Analizamos la viabilidad real de tu idea y diseñamos una arquitectura escalable antes de escribir una sola línea de código. Menos fricción, más determinismo.</p>
    </header>

    <main>
      <section class="guapiPhilosophy reveal-up">
        <div class="guapiPhilosophy__content">
          <h2 class="guapiPhilosophy__heading">Metodología Implacable</h2>
          <p class="guapiPhilosophy__text">No adivinamos, medimos. Evaluamos cada requerimiento para asegurar que los modelos LLM y los agentes se integran perfectamente en la lógica profunda de tu negocio, sin bloated code.</p>
        </div>
      </section>

      <section class="reveal-up" style="width:100%; display:flex; justify-content:center; padding: 4rem 1rem 8rem;">
        <div style="background-color: rgba(255, 255, 255, 0.02); padding: 4rem 2rem; text-align: center; border-radius: 12px; border: 1px solid rgba(255, 255, 255, 0.05); width: 100%; max-width: 600px; transition: border-color 0.3s ease;" onmouseover="this.style.borderColor='#FF145A'" onmouseout="this.style.borderColor='rgba(255, 255, 255, 0.05)'">
          <h3 style="color: #ffffff; font-size: 2rem; margin-bottom: 1rem; font-family: Montserrat;">Inicia con una Auditoría</h3>
          <p style="color: #FF145A; font-size: 3rem; font-weight: 900; margin-bottom: 2rem;">350 EUR</p>
          <p style="color: rgba(255, 255, 255, 0.7); font-size: 1.1rem; line-height: 1.6; margin-bottom: 3rem;">Un análisis riguroso, propuesta arquitectónica y un roadmap de escalabilidad que te salvará meses de iteraciones fallidas.</p>
          <a href="<?= url('es/contacto') ?>" class="guapiHero__cta">Solicitar Auditoría Técnica</a>
        </div>
      </section>
    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>

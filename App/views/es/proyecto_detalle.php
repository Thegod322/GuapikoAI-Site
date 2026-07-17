<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/es/casos-de-exito/detalle') ?>">
    <title>MDD-Editor | Casos de Éxito | Guapiko AI Studio</title>
    <meta name="description" content="Un editor nodal con interfaz asimétrica que convierte el caos estructural en un ecosistema visual fluido.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <header class="guapiHero">
      <p class="guapiHero__tagline reveal-fade">Caso de Éxito</p>
      <h1 class="guapiHero__title reveal-up"><span>MDD-</span>Editor</h1>
    </header>

    <main>

      <section class="guapiPhilosophy reveal-up">
        <div class="guapiPhilosophy__content">
          <h2 class="guapiPhilosophy__heading">The Challenge (Antes)</h2>
          <p class="guapiPhilosophy__text">La necesidad de orquestar agentes LLM mediante una topología compleja y manejar flujos de datos masivos sin perder rendimiento visual.</p>
        </div>
      </section>

      <section class="guapiPhilosophy reveal-up" style="background-color: transparent;">
        <div class="guapiPhilosophy__content">
          <h2 class="guapiPhilosophy__heading">The Solution (Después)</h2>
          <p class="guapiPhilosophy__text">Un editor nodal con interfaz asimétrica que convierte el caos estructural en un ecosistema visual fluido y determinista.</p>
        </div>
      </section>

      <section class="reveal-up" style="width:100%; display:flex; flex-direction:column; align-items:center; padding: 4rem 1rem;">
        <h3 style="color: #ffffff; font-size: 2rem; margin-bottom: 2rem; font-family: Montserrat;">Tech Stack</h3>
        <div style="display: flex; gap: 2rem; color: #a0a0a0; font-size: 1.2rem; flex-wrap: wrap; justify-content: center;">
            <span>Vue</span>
            <span>|</span>
            <span>Node.js</span>
            <span>|</span>
            <span>LLM Agents</span>
            <span>|</span>
            <span>Custom Graph Rendering</span>
        </div>
        
        <div style="margin-top: 4rem;">
            <a href="#" class="guapiHero__cta">Ver el proyecto en vivo</a>
        </div>
      </section>

    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>

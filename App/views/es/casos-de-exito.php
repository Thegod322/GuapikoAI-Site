<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/es/casos-de-exito') ?>">
    <title>Casos de Éxito | Guapiko AI Studio</title>
    <meta name="description" content="Soluciones asimétricas para problemas complejos. Ecosistemas de IA en producción.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <main>
      <section class="guapiPhilosophy reveal-up" style="min-height: 40vh;">
        <div class="guapiPhilosophy__content">
          <h1 class="guapiPhilosophy__heading">Casos de Éxito</h1>
          <p class="guapiPhilosophy__text">Soluciones asimétricas para problemas complejos. Una selección de ecosistemas en producción.</p>
        </div>
      </section>

      <!-- Asymmetric Grid -->
      <section class="guapiServices reveal-up">
        <div class="guapiServices__grid">
          
          <a href="<?= url('es/casos-de-exito/detalle') ?>" class="guapiServices__card">
            <h3>MDD-Editor</h3>
            <p style="color: #FF145A; font-weight: bold; margin-bottom: 1rem; font-size: 0.9rem;">AI Pipeline & Graph Architecture</p>
            <p>Orquestación de agentes LLM mediante una topología compleja y flujos de datos masivos.</p>
          </a>

        </div>
      </section>

    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>

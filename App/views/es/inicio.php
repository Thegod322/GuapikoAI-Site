<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/') ?>">
    <title>Guapiko - Agencia de Futuro</title>
    <meta name="description" content="Orquestamos agentes autónomos y arquitecturas de Inteligencia Artificial para empresas que exigen la excelencia.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>

    <?php require app_path('includes/es/nav.php'); ?>

    <header class="guapiHero">
      <p class="guapiHero__tagline reveal-fade">Agencia de inteligencia artificial Euskadi</p>
      <h1 class="guapiHero__title reveal-up">
        EL FUTURO<br>
        NO SE ESPERA.<br>
        <span class="guapiHero__line guapiHero__line--3">SE CONSTRUYE.</span>
      </h1>
      <p class="guapiHero__subtitle reveal-up" style="transition-delay: 0.2s;">Orquestamos agentes autónomos y arquitecturas de Inteligencia Artificial para empresas que exigen la excelencia.</p>
    </header>

    <main>

      <!-- Services Teaser -->
      <section class="guapiPhilosophy reveal-up">
        <div class="guapiPhilosophy__content">
          <h2 class="guapiPhilosophy__heading">INGENIERÍA DEL MAÑANA</h2>
          <p class="guapiPhilosophy__text">No creamos simples interfaces. Diseñamos ecosistemas inteligentes y deterministas. Elevamos cada proceso mediante IA, reduciendo la fricción a cero.</p>
          <a href="<?= url('es/servicios') ?>" class="guapiHero__cta" style="margin-top: 2rem;">Explorar capacidades</a>
        </div>
      </section>

      <!-- Portfolio Highlight -->
      <section class="guapiObras reveal-up">
        <div class="guapiObras__header">
          <h2>Obras Maestras</h2>
          <p>Precisión. Escalabilidad. Estética asimétrica. Casos reales donde nuestra arquitectura habla por sí misma.</p>
        </div>
        
        <div class="guapiObras__grid">
          <!-- Dummy highlight 1 -->
          <a href="<?= url('es/casos-de-exito') ?>" class="guapiObras__card">
            <h3>MDD-Editor</h3>
            <p>AI Pipeline & Graph Architecture. Un editor nodal con interfaz asimétrica que convierte el caos estructural en un ecosistema visual fluido.</p>
          </a>
          <!-- Dummy highlight 2 -->
          <a href="<?= url('es/casos-de-exito') ?>" class="guapiObras__card">
            <h3>Farm Capitalist</h3>
            <p>Orquestación asimétrica y optimización matemática profunda en motores de juego integrados con IA.</p>
          </a>
          <!-- Dummy highlight 3 -->
          <a href="<?= url('es/casos-de-exito') ?>" class="guapiObras__card">
            <h3>Waifu Capitalist</h3>
            <p>Economía asimétrica y diseño de sistemas complejos orientados a la retención profunda de usuarios.</p>
          </a>
          <!-- Dummy highlight 4 -->
          <a href="<?= url('es/casos-de-exito') ?>" class="guapiObras__card">
            <h3>Graboid Run</h3>
            <p>IA de navegación (Worm AI), pathfinding dinámico y arquitectura de físicas integradas en tiempo real.</p>
          </a>
        </div>
        
        <div class="guapiObras__footer">
          <a href="<?= url('es/casos-de-exito') ?>" class="guapiHero__cta">Ver casos de éxito</a>
        </div>
      </section>

    </main>
   
    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>

<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/es/formacion/detalle') ?>">
    <title>Arquitectura de Agentes IA | Guapiko AI Studio</title>
    <meta name="description" content="Curso de integración de Agentes LLM. Producción, Seguridad y Optimización Continua.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <header class="guapiHero">
      <p class="guapiHero__tagline reveal-fade">Formación Exclusiva</p>
      <h1 class="guapiHero__title reveal-up"><span>Arquitectura</span> de Agentes IA</h1>
      <p class="guapiHero__subtitle reveal-up" style="transition-delay: 0.2s;">Este curso redefinió mi enfoque técnico por completo.</p>
    </header>

    <main>

      <section class="reveal-up" style="width:100%; display:flex; flex-direction:column; align-items:center; padding: 4rem 1rem;">
        <h2 style="color: #ffffff; font-size: 2rem; margin-bottom: 3rem; font-family: Montserrat;">Programa del Curso</h2>
        
        <div class="cursoAccordion">
            <div class="cursoAccordion__item">
                <h3>Módulo 1: Fundamentos</h3>
                <p>Fundamentos de LLM y Gestión de Contexto.</p>
            </div>
            <div class="cursoAccordion__item">
                <h3>Módulo 2: RAG Avanzado</h3>
                <p>RAG Avanzado y Orquestación de Agentes.</p>
            </div>
            <div class="cursoAccordion__item">
                <h3>Módulo 3: Producción</h3>
                <p>Producción, Seguridad y Optimización Continua.</p>
            </div>
        </div>
        
        <div style="margin-top: 4rem; text-align: center;">
            <p style="color: #FF145A; font-size: 2rem; font-weight: bold; margin-bottom: 2rem;">Asegurar mi plaza</p>
            <a href="<?= url('es/contacto') ?>" class="guapiHero__cta">Inscribirse ahora</a>
        </div>
      </section>

    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>

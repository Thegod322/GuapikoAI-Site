<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'eu')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/eu/kasu-arrakastatsuak/xehetasuna') ?>">
    <title>MDD-Editor | Kasu Arrakastatsuak | Guapiko AI Studio</title>
    <meta name="description" content="Egituraren kaosa ekosistema bisual fluido bihurtzen duen nodo-editorea, interfaze asimetrikoarekin.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="guapiHero">
      <p class="guapiHero__tagline reveal-fade">Kasu Arrakastatsua</p>
      <h1 class="guapiHero__title reveal-up"><span>MDD-</span>Editor</h1>
    </header>

    <main>

      <section class="guapiPhilosophy reveal-up">
        <div class="guapiPhilosophy__content">
          <h2 class="guapiPhilosophy__heading">The Challenge (Lehen)</h2>
          <p class="guapiPhilosophy__text">LLM agenteak topologia konplexu baten bidez orkestratzeko eta datu-fluxu masiboak kudeatzeko beharra, errendimendu bisuala galdu gabe.</p>
        </div>
      </section>

      <section class="guapiPhilosophy reveal-up" style="background-color: transparent;">
        <div class="guapiPhilosophy__content">
          <h2 class="guapiPhilosophy__heading">The Solution (Gero)</h2>
          <p class="guapiPhilosophy__text">Egituraren kaosa ekosistema bisual fluido eta determinista bihurtzen duen nodo-editorea, interfaze asimetrikoarekin.</p>
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
            <a href="<?= url('eu/kontaktua') ?>" class="guapiHero__cta">Demoa Eskatu</a>
        </div>
      </section>

    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>

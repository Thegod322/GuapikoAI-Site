<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'eu')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/eu/zerbitzuak') ?>">
    <title>Gure Zerbitzuak | Guapiko AI Studio</title>
    <meta name="description" content="Adimen Artifizialaren ingeniaritza eta agente autonomoen zerbitzuak.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <main>
      <section class="guapiPhilosophy reveal-up" style="min-height: 40vh;">
        <div class="guapiPhilosophy__content">
          <h1 class="guapiPhilosophy__heading">Gure Zerbitzuak</h1>
        </div>
      </section>

      <section class="guapiServices reveal-up">
        <div class="guapiServices__list">
          
          <article class="art13">
            <img src="<?= asset('assets/img/servicios/auditoria_ai.png') ?>" alt="Auditoria Kirurgikoa AI">
            <div>
              <h3>Auditoria Kirurgikoa AI</h3>
              <p>Zure ideiaren benetako bideragarritasuna aztertzen dugu, botila-lepo teknikoak identifikatzen ditugu eta arkitektura eskalagarria diseinatzen dugu kode lerro bakar bat idatzi aurretik.</p>
              <a href="<?= url('eu/zerbitzuak/xehetasuna') ?>" class="guapiHero__cta">Auditoria Eskatu</a>
            </div>
          </article>

          <article class="art13 upsidedown">
            <img src="<?= asset('assets/img/servicios/ecosistemas.png') ?>" alt="Ekosistema Autonomoak">
            <div>
              <h3>Ekosistema Autonomoak (Agenteak)</h3>
              <p>Adimen Artifizialean eta LLM agenteetan oinarritutako lan-fluxuak ezartzen ditugu, konplexutasuna eta desordena prozesu isil, determinista eta oso eraginkor bihurtzeko.</p>
              <a href="<?= url('eu/zerbitzuak/xehetasuna') ?>" class="guapiHero__cta">Ikusi Irtenbideak</a>
            </div>
          </article>

          <article class="art13">
            <img src="<?= asset('assets/img/servicios/launch_repair.png') ?>" alt="Launch & Repair">
            <div>
              <h3>Ereduen Abiaraztea eta Konponketa</h3>
              <p>Garapenaren infernuan harrapatuta dauden prototipoak erreskatatu eta ekoizpenera eramaten ditugu. Azpiegituraz, segurtasunaz, optimizazio muturrekoaz eta hodeiko hedapen ezin hobeaz arduratzen gara.</p>
              <a href="<?= url('eu/zerbitzuak/xehetasuna') ?>" class="guapiHero__cta">Erreskatea Hasi</a>
            </div>
          </article>

        </div>
      </section>

      <!-- Workflow block -->
      <section class="guapiServices reveal-up">
        <div class="guapiServices__header" style="margin-bottom: 2rem;">
          <h2 style="border-bottom: none;">Lan Metodologia</h2>
          <p style="color: #a0a0a0; font-size: 1.2rem; margin-top: 1rem; max-width: 800px; line-height: 1.6;">
            Ez dugu inprobisaziorako tarterik uzten. Proiektu bakoitzak pipeline zorrotz eta determinista bati jarraitzen dio, azken emaitzak merkatuaren itxaropenak gainditzen dituela ziurtatuz.
          </p>
        </div>
        
        <div class="metodologiaGrid">
          <div class="metodologiaGrid__card">
            <h3>1. Fasea: Auditoria Kirurgikoa</h3>
            <p>Zure ideia desmuntatu eta osagai bakoitza aztertzen dugu. Benetako botila-lepo teknikoak identifikatzen ditugu kode lerro bakar bat idatzi aurretik.</p>
          </div>
          <div class="metodologiaGrid__card">
            <h3>2. Fasea: Arkitektura Determinista</h3>
            <p>Sistema asimetrikoak eta eskalagarriak diseinatzen ditugu. Kode lerro bakoitzak helburu argi bat du. Alferrikako mendekotasunik gabe, over-engineering gabe.</p>
          </div>
          <div class="metodologiaGrid__card">
            <h3>3. Fasea: Exekuzio Isila</h3>
            <p>Ekoizpenerako abiarazte inplacablea. Monitorizazio proaktiboa eta atzealdean 24/7 funtzionatzen duten IA ekosistemak, kalitatea ziurtatuz.</p>
          </div>
        </div>

        <div style="margin-top: 4rem; width: 100%; text-align: center;">
          <a href="<?= url('eu/kontaktua') ?>" class="guapiHero__cta">Auditoria Eskatu</a>
        </div>
      </section>

    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>

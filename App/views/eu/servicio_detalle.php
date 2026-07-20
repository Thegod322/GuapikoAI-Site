<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'eu')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/eu/zerbitzuak/xehetasuna') ?>">
    <title>Auditoria Kirurgikoa AI | Guapiko AI Studio</title>
    <meta name="description" content="Bideragarritasun teknikoa ebazten dugu eta arkitektura eskalagarria diseinatzen dugu kodea idatzi aurretik.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="guapiHero">
      <p class="guapiHero__tagline reveal-fade">Eliteko Zerbitzua</p>
      <h1 class="guapiHero__title reveal-up">Auditoria Kirurgikoa <span>AI</span></h1>
      <p class="guapiHero__subtitle reveal-up" style="transition-delay: 0.2s;">Zure ideiaren benetako bideragarritasuna aztertzen dugu eta arkitektura eskalagarria diseinatzen dugu kode lerro bakar bat idatzi aurretik. Marruskadura gutxiago, determinismo handiagoa.</p>
    </header>

    <main>
      <section class="guapiPhilosophy reveal-up">
        <div class="guapiPhilosophy__content">
          <h2 class="guapiPhilosophy__heading">Metodologia Zurruna</h2>
          <p class="guapiPhilosophy__text">Ez dugu asmatzen, neurtzen dugu. Eskakizun bakoitza ebaluatzen dugu LLM ereduak eta agenteak zure negozioaren logika sakonean ezin hobeto integratzen direla ziurtatzeko, bloated code gabe.</p>
        </div>
      </section>

      <section class="reveal-up" style="width:100%; display:flex; justify-content:center; padding: 4rem 1rem 8rem;">
        <div style="background-color: rgba(255, 255, 255, 0.02); padding: 4rem 2rem; text-align: center; border-radius: 12px; border: 1px solid rgba(255, 255, 255, 0.05); width: 100%; max-width: 600px; transition: border-color 0.3s ease;" onmouseover="this.style.borderColor='#FF145A'" onmouseout="this.style.borderColor='rgba(255, 255, 255, 0.05)'">
          <h3 style="color: #ffffff; font-size: 2rem; margin-bottom: 1rem; font-family: Montserrat;">Hasi Auditoria batekin</h3>
          <p style="color: #FF145A; font-size: 3rem; font-weight: 900; margin-bottom: 2rem;">350 EUR</p>
          <p style="color: rgba(255, 255, 255, 0.7); font-size: 1.1rem; line-height: 1.6; margin-bottom: 3rem;">Azterketa zorrotza, proposamen arkitektonikoa eta eskalagarritasun-roadmap bat, huts egindako iterazio hilabeteak aurreztuko dizkizuna.</p>
          <a href="<?= url('eu/kontaktua') ?>" class="guapiHero__cta">Auditoria Teknikoa Eskatu</a>
        </div>
      </section>
    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>

<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/es/contacto') ?>">
    <title>Contacto | Guapiko AI Studio</title>
    <meta name="description" content="Un colectivo de ingenieros, arquitectos de IA y diseñadores. Sin ruido. Solo resultados.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <main>
      <section class="guapiPhilosophy reveal-up" style="min-height: 40vh;">
        <div class="guapiPhilosophy__content">
          <h1 class="guapiPhilosophy__heading">Contacto</h1>
          <p class="guapiPhilosophy__text">Un colectivo de ingenieros, arquitectos de IA y diseñadores unidos por la estética y el código puro. Sin ruido. Solo resultados.</p>
        </div>
      </section>

      <section class="reveal-up" style="width: 100%; display: flex; flex-direction: column; align-items: center; padding: 4rem 1rem;">
        
        <form class="contactForm" action="/app/artForm02" method="post">
            <h2 style="color:#FF145A; font-family: Montserrat; font-size: 2rem; margin-bottom: 2rem;">Qualification Form</h2>
            
            <label for="nombre">Tu Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre completo" required>

            <label for="empresa">Tu Empresa</label>
            <input type="text" id="empresa" name="empresa" placeholder="Compañía" required>

            <label for="reto">¿Qué futuro deseas construir?</label>
            <textarea id="reto" name="mensaje" placeholder="Describe tu reto técnico..." rows="4" required></textarea>

            <input type="submit" class="boton" value="Solicitar evaluación">
        </form>

        <div style="margin-top: 4rem; width: 100%; max-width: 800px; text-align: center;">
            <h3 style="color:#a0a0a0; font-family: Montserrat; margin-bottom: 1rem;">Euskadi · Bilbao · Vitoria</h3>
            <!-- Dark themed Google Map iframe -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1886.901188915529!2d-2.0047191655624914!3d43.29790730427824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b013f0513629%3A0x57e4ff3311f619d9!2s%C3%81rea%20Escuela%20de%20Dise%C3%B1o%20y%20Nuevas%20Tecnolog%C3%ADas!5e1!3m2!1ses!2ses!4v1768584957042!5m2!1ses!2ses" width="100%" height="300" style="border:0; filter: invert(90%) hue-rotate(180deg) contrast(80%);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </section>

    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>

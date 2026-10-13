<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/es/contacto') ?>">
    <title>Contacto: invítanos a un café | Guapiko AI Studio</title>
    <meta name="description" content="Cuéntanos tu reto y quedamos para un café, en Euskadi o por videollamada. Auditoría exprés e ideas incluidas, gratis y sin compromiso.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <main>
      <section class="guapiContact">
        <div class="guapiContact__intro reveal-up">
          <p class="guapiContact__tagline">Contacto</p>
          <h1 class="guapiContact__title">Hablemos con <span>un café</span></h1>
          <p class="guapiContact__text">Cuéntanos tu reto en dos líneas. Te proponemos fecha para un café —en Euskadi o por videollamada— con auditoría exprés e ideas incluidas. Gratis y sin compromiso.</p>

          <ul class="guapiContact__direct">
            <li>
              <a href="tel:+34622618577">
                <img src="<?= asset('assets/img/icons/phone.svg') ?>" alt="Icono de Teléfono" title="Llamar por teléfono">
                <span>+34 622 618 577</span>
              </a>
            </li>
            <li>
              <a href="https://wa.me/34622618577" target="_blank" rel="noopener noreferrer">
                <img src="<?= asset('assets/img/icons/logo-whatsapp.svg') ?>" alt="Icono de WhatsApp" title="Escribir por WhatsApp">
                <span>WhatsApp</span>
              </a>
            </li>
            <li>
              <a href="mailto:guapiko.style@gmail.com">
                <img src="<?= asset('assets/img/icons/mail.svg') ?>" alt="Icono de Email" title="Enviar correo electrónico">
                <span>guapiko.style@gmail.com</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="guapiContact__card reveal-up">
          <!-- Modal que aparece cuando el formulario se envía con éxito -->
          <div id="modal_envio" class="guapiContact__modal">
            <h2 id="h3_modal_envio">¡Café reservado!</h2>
            <p id="p_modal_envio"></p>
            <div class="boton" id="boton_modal_envio">Escribir otro mensaje</div>
          </div>

          <form id="idForAjax" class="guapiContact__form" action="/app/artForm02" method="post"
                data-titulo-exito="¡Café reservado!"
                data-texto-exito="Gracias, {nombre}. Te escribimos en breve para poner fecha al café.">
            <h2>Reservemos un café</h2>
            <p class="error" id="errorForm02" role="alert"></p>

            <label for="nombreAjax">Nombre *</label>
            <input type="text" id="nombreAjax" name="nombre" placeholder="Tu nombre" autocomplete="name" required>

            <label for="empresaAjax">Empresa</label>
            <input type="text" id="empresaAjax" name="empresa" placeholder="Tu empresa (opcional)" autocomplete="organization">

            <div class="guapiContact__row">
              <div>
                <label for="telefonoAjax">Teléfono *</label>
                <input type="tel" id="telefonoAjax" name="telefono" placeholder="+34 …" autocomplete="tel" required>
              </div>
              <div>
                <label for="emailAjax">Email *</label>
                <input type="email" id="emailAjax" name="email" placeholder="tu@empresa.com" autocomplete="email" required>
              </div>
            </div>

            <label for="mensajeAjax">¿Qué te gustaría mejorar? *</label>
            <textarea id="mensajeAjax" name="mensaje" placeholder="Digitalizar, automatizar con IA, sacar a producción un proyecto…" rows="5" required></textarea>

            <div class="guapiContact__check">
              <input type="checkbox" name="terminos" id="terminosAjax" required>
              <label for="terminosAjax">Acepto la <a href="<?= url('/es/legal') ?>#politica-privacidad">política de privacidad</a> *</label>
            </div>

            <div class="guapiContact__captcha">
              <label for="respuestaajax">Para demostrar que no eres un robot: ¿cuánto es <span id="num1ajax"></span> <span id="operadorajax"></span> <span id="num2ajax"></span>?</label>
              <input type="text" name="respUser" id="respuestaajax" placeholder="Respuesta" autocomplete="off" inputmode="numeric" required>
              <input type="hidden" name="respSystem" id="respSystemajax" value="">
            </div>

            <input type="hidden" name="url" value="<?= e($GLOBALS['current_url'] ?? '/es/contacto') ?>">
            <input type="hidden" name="lang" value="<?= e($lang) ?>">

            <button type="submit" class="guapiHero__cta guapiContact__submit" id="botonEnviarAjax">Invitar a café ☕</button>
            <p class="guapiContact__hint">Tú nos invitas, pero el café lo pagamos nosotros.</p>
          </form>

          <div class="moduloLoader01" id="moduloLoader01" aria-hidden="true">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <circle cx="50" cy="50" r="40" fill="none" stroke="currentColor" stroke-width="6" stroke-dasharray="180 80">
                <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="1s" repeatCount="indefinite"/>
              </circle>
            </svg>
          </div>
        </div>
      </section>
    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>

<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'eu')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/eu/kontaktua') ?>">
    <title>Kontaktua: gonbidatu gaitzazu kafe batera | Guapiko AI Studio</title>
    <meta name="description" content="Kontaiguzu zure erronka eta kafe baterako geratuko gara, Euskadin edo bideodeiz. Auditoria azkarra eta ideiak barne, doan eta konpromisorik gabe.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <main>
      <section class="guapiContact">
        <div class="guapiContact__intro reveal-up">
          <p class="guapiContact__tagline">Kontaktua</p>
          <h1 class="guapiContact__title">Hitz egin dezagun <span>kafe baten bueltan</span></h1>
          <p class="guapiContact__text">Kontaiguzu zure erronka bi lerrotan. Kafe baterako data proposatuko dizugu —Euskadin edo bideodeiz—, auditoria azkarra eta ideiak barne. Doan eta konpromisorik gabe.</p>

          <ul class="guapiContact__direct">
            <li>
              <a href="tel:+34622618577">
                <img src="<?= asset('assets/img/icons/phone.svg') ?>" alt="Telefonoaren Ikonoa" title="Telefonoz Deitu">
                <span>+34 622 618 577</span>
              </a>
            </li>
            <li>
              <a href="https://wa.me/34622618577" target="_blank" rel="noopener noreferrer">
                <img src="<?= asset('assets/img/icons/logo-whatsapp.svg') ?>" alt="WhatsApp-en Ikonoa" title="WhatsApp bidez idatzi">
                <span>WhatsApp</span>
              </a>
            </li>
            <li>
              <a href="mailto:guapiko.style@gmail.com">
                <img src="<?= asset('assets/img/icons/mail.svg') ?>" alt="Posta Elektronikoaren Ikonoa" title="Mezu Elektronikoa Bidali">
                <span>guapiko.style@gmail.com</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="guapiContact__card reveal-up">
          <!-- Formularioa ondo bidaltzean agertzen den modala -->
          <div id="modal_envio" class="guapiContact__modal">
            <h2 id="h3_modal_envio">Kafea erreserbatuta!</h2>
            <p id="p_modal_envio"></p>
            <div class="boton" id="boton_modal_envio">Beste mezu bat idatzi</div>
          </div>

          <form id="idForAjax" class="guapiContact__form" action="/app/artForm02" method="post"
                data-titulo-exito="Kafea erreserbatuta!"
                data-texto-exito="Eskerrik asko, {nombre}. Laster idatziko dizugu kafearen data jartzeko.">
            <h2>Erreserba dezagun kafe bat</h2>
            <p class="error" id="errorForm02" role="alert"></p>

            <label for="nombreAjax">Izena *</label>
            <input type="text" id="nombreAjax" name="nombre" placeholder="Zure izena" autocomplete="name" required>

            <label for="empresaAjax">Enpresa</label>
            <input type="text" id="empresaAjax" name="empresa" placeholder="Zure enpresa (aukerakoa)" autocomplete="organization">

            <div class="guapiContact__row">
              <div>
                <label for="telefonoAjax">Telefonoa *</label>
                <input type="tel" id="telefonoAjax" name="telefono" placeholder="+34 …" autocomplete="tel" required>
              </div>
              <div>
                <label for="emailAjax">Email *</label>
                <input type="email" id="emailAjax" name="email" placeholder="zu@enpresa.eus" autocomplete="email" required>
              </div>
            </div>

            <label for="mensajeAjax">Zer hobetu nahiko zenuke? *</label>
            <textarea id="mensajeAjax" name="mensaje" placeholder="Digitalizatu, IArekin automatizatu, proiektu bat ekoizpenera atera…" rows="5" required></textarea>

            <div class="guapiContact__check">
              <input type="checkbox" name="terminos" id="terminosAjax" required>
              <label for="terminosAjax"><a href="<?= url('/eu/lege-oharra') ?>#politica-privacidad">Pribatutasun-politika</a> onartzen dut *</label>
            </div>

            <div class="guapiContact__captcha">
              <label for="respuestaajax">Robota ez zarela frogatzeko: zenbat da <span id="num1ajax"></span> <span id="operadorajax"></span> <span id="num2ajax"></span>?</label>
              <input type="text" name="respUser" id="respuestaajax" placeholder="Erantzuna" autocomplete="off" inputmode="numeric" required>
              <input type="hidden" name="respSystem" id="respSystemajax" value="">
            </div>

            <input type="hidden" name="url" value="<?= e($GLOBALS['current_url'] ?? '/eu/kontaktua') ?>">
            <input type="hidden" name="lang" value="<?= e($lang) ?>">

            <button type="submit" class="guapiHero__cta guapiContact__submit" id="botonEnviarAjax">Kafe batera gonbidatu ☕</button>
            <p class="guapiContact__hint">Zuk gonbidatzen gaituzu, baina kafea guk ordaintzen dugu.</p>
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

    <?php require app_path('includes/eu/footer.php'); ?>
  </body>
</html>

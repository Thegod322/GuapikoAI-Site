<?php
// Nav en castellano. Las rutas se escriben aquí de forma explícita para que
// el alumno pueda relacionar fácilmente cada enlace con App/config/config.php.
?>
<nav class="nav01" data-nav01>
  <div class="nav01__inner">
    <a class="nav01__brand" href="/es" aria-label="Ir al inicio">
      <img src="<?= asset('assets/img/logos/GuapiLogo.svg') ?>" class="nav01__logo" alt="Logotipo de Guapiko AI Studio" title="Inicio de Guapiko AI Studio">
      <span class="nav01__brandText">GUAPIKO.</span>
    </a>

    <button class="nav01__toggle" type="button" aria-controls="nav01-menu-es" aria-expanded="false" aria-label="Abrir menú" data-nav01-toggle data-nav01-label-open="Abrir menú" data-nav01-label-close="Cerrar menú">
      <span class="nav01__toggleLine"></span>
      <span class="nav01__toggleLine"></span>
      <span class="nav01__toggleLine"></span>
    </button>

    <div class="nav01__panel" id="nav01-menu-es" data-nav01-menu>
      <div class="nav01__panelInner">
        <?php
        // enlaces.php también se usa en el footer. Cada copia necesita un ID
        // distinto para que aria-controls apunte a un submenú único.
        $idSubmenu = 'nav-servicios-es';
        require app_path('includes/es/enlaces.php');
        ?>

        <div class="nav01__langs" aria-label="Idiomas">
          <!-- Para mantener el ejemplo sencillo, cada idioma enlaza a su inicio. -->
          <a class="nav01__lang <?= $lang === 'es' ? 'is-active' : '' ?>" href="<?= switch_lang_url('es') ?>" lang="es" hreflang="es" <?= $lang === 'es' ? 'aria-current="true"' : '' ?>>ES</a>
          <a class="nav01__lang <?= $lang === 'eu' ? 'is-active' : '' ?>" href="<?= switch_lang_url('eu') ?>" lang="eu" hreflang="eu" <?= $lang === 'eu' ? 'aria-current="true"' : '' ?>>EU</a>
        </div>
      </div>
    </div>
  </div>
</nav>

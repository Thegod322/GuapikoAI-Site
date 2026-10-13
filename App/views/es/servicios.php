<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/es/servicios') ?>">
    <title>Servicios: digitalización, IA y rescate de proyectos | Guapiko AI Studio</title>
    <meta name="description" content="Digitalización de empresas, automatización con IA y agentes, y lanzamiento y reparación de proyectos creados con IA. Todo empieza con un café y una auditoría gratuita.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <header class="guapiServicesIntro">
      <p class="guapiServicesIntro__tagline reveal-fade">Servicios</p>
      <h1 class="guapiServicesIntro__title reveal-up">Tecnología que trabaja <span>para tu empresa</span></h1>
      <p class="guapiServicesIntro__lead reveal-up">Tres formas de ayudarte y una sola regla: todo empieza con un café. Tú nos cuentas tu negocio; nosotros te devolvemos una auditoría y un puñado de ideas. Gratis.</p>
      <nav class="guapiServicesIntro__jump reveal-up" aria-label="Servicios">
        <a href="#digitalizacion">01 · Digitalización</a>
        <a href="#automatizacion">02 · IA y agentes</a>
        <a href="#lanzamiento">03 · Lanzamiento y reparación</a>
      </nav>
    </header>

    <main>
      <!-- Servicios: un bloque amplio por servicio -->
      <section class="guapiServiceCards">

        <article class="guapiServiceCard reveal-up" id="digitalizacion">
          <div class="guapiServiceCard__head">
            <span class="guapiServiceCard__number">01</span>
            <h2 class="guapiServiceCard__title">Digitalización de la empresa</h2>
            <p class="guapiServiceCard__lead">Llevamos tu negocio del papel, el Excel infinito y el WhatsApp a sistemas digitales ordenados que trabajan por ti.</p>
          </div>
          <div class="guapiServiceCard__body">
            <h3>Para quién</h3>
            <p>Pymes, comercios, talleres y despachos que sienten que el día se les va en tareas repetitivas y en buscar información que está en mil sitios.</p>
            <h3>Qué hacemos</h3>
            <ul>
              <li>Analizamos cómo trabajáis hoy y qué herramientas usáis.</li>
              <li>Web, tienda online o área privada para tus clientes.</li>
              <li>CRM, reservas, facturación y gestión de documentos: a medida o con herramientas que ya existen.</li>
              <li>Migración de datos y formación para tu equipo.</li>
            </ul>
            <p class="guapiServiceCard__result"><strong>Resultado:</strong> menos horas perdidas, toda la información en un solo sitio y un negocio preparado para crecer.</p>
          </div>
        </article>

        <article class="guapiServiceCard reveal-up" id="automatizacion">
          <div class="guapiServiceCard__head">
            <span class="guapiServiceCard__number">02</span>
            <h2 class="guapiServiceCard__title">Automatización con IA y agentes</h2>
            <p class="guapiServiceCard__lead">Agentes de IA que leen, clasifican, responden y ejecutan tareas reales dentro de tus herramientas: correo, CRM, documentos y hojas de cálculo.</p>
          </div>
          <div class="guapiServiceCard__body">
            <h3>Para quién</h3>
            <p>Equipos que repiten cada día las mismas tareas: atención al cliente, presupuestos, informes, pedidos o papeleo.</p>
            <h3>Qué hacemos</h3>
            <ul>
              <li>Detectamos qué procesos merece la pena automatizar (y cuáles no).</li>
              <li>Asistentes y agentes conectados a tus datos y documentos.</li>
              <li>Integraciones con tus sistemas por API, sin cambiar tu forma de trabajar.</li>
              <li>Supervisión humana, registro de cada acción y control de costes.</li>
            </ul>
            <p class="guapiServiceCard__result"><strong>Resultado:</strong> procesos que funcionan 24/7, sin errores de copiar y pegar, con una persona siempre al mando.</p>
          </div>
        </article>

        <article class="guapiServiceCard reveal-up" id="lanzamiento">
          <div class="guapiServiceCard__head">
            <span class="guapiServiceCard__number">03</span>
            <h2 class="guapiServiceCard__title">Lanzamiento y reparación de proyectos</h2>
            <p class="guapiServiceCard__lead">¿Has creado una app con ChatGPT, Claude o Cursor y funciona… pero solo en tu ordenador? La rescatamos y la sacamos a producción.</p>
          </div>
          <div class="guapiServiceCard__body">
            <h3>Para quién</h3>
            <p>Fundadores, makers y empresas con un prototipo hecho con IA («vibe coding») atascado en localhost, inestable o que da miedo abrir al público.</p>
            <h3>Qué hacemos</h3>
            <ul>
              <li>Revisión del código y de la arquitectura: qué sirve, qué hay que rehacer.</li>
              <li>Ciberseguridad: claves expuestas, accesos, permisos y datos personales (RGPD).</li>
              <li>Despliegue: dominio, servidor o nube, base de datos, copias de seguridad y HTTPS.</li>
              <li>Estándares profesionales: tests, control de versiones, monitorización y documentación.</li>
            </ul>
            <p class="guapiServiceCard__result"><strong>Resultado:</strong> tu proyecto en internet, seguro, mantenible y listo para usuarios reales.</p>
          </div>
        </article>

      </section>

      <!-- Fases: la primera, el café, es gratuita -->
      <section class="guapiPhases">
        <div class="guapiPhases__header reveal-up">
          <h2>Cómo trabajamos</h2>
          <p>El primer paso no cuesta nada. Literalmente: el café también lo ponemos nosotros.</p>
        </div>

        <ol class="guapiPhases__list">
          <li class="guapiPhases__item guapiPhases__item--free reveal-up">
            <div class="guapiPhases__top">
              <span class="guapiPhases__number">Fase 01</span>
              <span class="guapiPhases__badge guapiPhases__badge--free">Gratis</span>
            </div>
            <svg class="guapiPhases__icon" viewBox="0 0 64 64" aria-hidden="true" focusable="false">
              <path d="M14 26h30v14a12 12 0 0 1-12 12h-6a12 12 0 0 1-12-12V26z" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
              <path d="M44 30h4a6 6 0 0 1 0 12h-5" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
              <path d="M10 56h40" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
              <path d="M22 20c0-3 3-3 3-6s-3-3-3-6M31 20c0-3 3-3 3-6s-3-3-3-6" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
            <h3>Un café</h3>
            <p>Nos sentamos —en persona en Euskadi o por videollamada— y nos cuentas cómo funciona tu empresa. Hacemos una auditoría exprés en directo, vemos dónde se pierden tiempo y dinero, y te llevas ideas concretas de lo que se puede mejorar.</p>
            <ul>
              <li>Auditoría exprés</li>
              <li>Ideas y prioridades</li>
              <li>Sin compromiso</li>
            </ul>
          </li>

          <li class="guapiPhases__item reveal-up">
            <div class="guapiPhases__top">
              <span class="guapiPhases__number">Fase 02</span>
              <span class="guapiPhases__badge">Propuesta</span>
            </div>
            <h3>Pre-proyecto</h3>
            <p>Convertimos las ideas en un plan: especificación técnica, arquitectura, plazos y presupuesto cerrado. Firmamos el contrato de servicios y sabes exactamente qué vas a recibir.</p>
          </li>

          <li class="guapiPhases__item reveal-up">
            <div class="guapiPhases__top">
              <span class="guapiPhases__number">Fase 03</span>
              <span class="guapiPhases__badge">Desarrollo</span>
            </div>
            <h3>Proyecto</h3>
            <p>Diseñamos, desarrollamos y lanzamos. Entregas por etapas, demos frecuentes y pruebas antes de cada salida a producción.</p>
          </li>

          <li class="guapiPhases__item reveal-up">
            <div class="guapiPhases__top">
              <span class="guapiPhases__number">Fase 04</span>
              <span class="guapiPhases__badge">Continuidad</span>
            </div>
            <h3>Soporte y evolución</h3>
            <p>Mantenimiento, seguridad, monitorización y mejoras continuas. Tu sistema sigue creciendo contigo.</p>
          </li>
        </ol>

        <p class="guapiPhases__footnote reveal-up">La fase 01 es gratuita. Las fases 02, 03 y 04 se presupuestan y contratan por separado: tú decides hasta dónde llegamos juntos.</p>

        <div class="guapiPhases__cta reveal-up">
          <p>Tú nos invitas a un café (tranquilo, pagamos nosotros). Nosotros te invitamos a la auditoría.</p>
          <a href="<?= url('/es/contacto') ?>" class="guapiHero__cta">Invitar a café</a>
        </div>
      </section>

    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>

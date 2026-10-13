<?php
// Proyectos del portafolio en castellano. Lo usan el inicio, la rejilla de
// casos de éxito y la página de cada proyecto (proyecto_detalle.php).
// La clave de cada proyecto coincide con 'project' en App/config/config.php.
// Las imágenes viven en public/assets/img/portfolio/shots/.

return [
    'mdd-editor' => [
        'url' => '/es/casos-de-exito/mdd-editor',
        'title' => 'MDD Editor',
        'category' => 'Producto propio · Herramientas para agentes de IA',
        'summary' => 'Un cerebro en forma de grafo que permite a agentes de IA y a personas orientarse en bases de código enormes: de videojuegos a microservicios.',
        'meta_description' => 'MDD Editor: grafo vivo de todo un repositorio que agentes de IA consultan por MCP y las personas exploran visualmente. Caso de Guapiko.',
        'image' => 'assets/img/portfolio/shots/mdd_graph.webp',
        'image_alt' => 'Vista completa del grafo de MDD Editor con miles de nodos de código y documentación',
        'facts' => [
            'Tipo' => 'Producto propio',
            'Rol' => 'Diseño, desarrollo e I+D',
            'Año' => '2026',
        ],
        'challenge' => 'Cuando un repositorio crece hasta decenas de miles de archivos, nadie lo abarca entero: ni las personas ni los agentes de IA. Los agentes leen archivos a ciegas, gastan su contexto en buscar y rompen dependencias que no ven. La documentación vive dispersa y se queda obsoleta en cuanto el código cambia.',
        'solution' => 'MDD Editor indexa el repositorio completo —carpetas, código, escenas, documentación y tareas— y lo une en un único grafo vivo: quién llama a quién, qué referencia qué y qué tarea afecta a qué archivo. Las personas lo recorren visualmente; los agentes lo consultan por MCP (Model Context Protocol) con búsquedas quirúrgicas en lugar de leer a ciegas. El proyecto entero se convierte en un solo cerebro compartido.',
        'features' => [
            ['title' => 'Indexador multilenguaje', 'text' => 'GDScript, TypeScript, JavaScript, Python, Markdown y escenas de Godot. Detecta llamadas, referencias, instancias y enlaces entre archivos.'],
            ['title' => 'Explorador visual', 'text' => 'Lienzo con nivel de detalle adaptativo, tarjetas con vista previa de documentos, ruta hasta la raíz y filtros por tipo de nodo.'],
            ['title' => 'Servidor MCP para agentes', 'text' => 'Búsqueda, vecinos, subárboles y rutas en el grafo. Si el editor está cerrado, arranca un motor sin interfaz en menos de un segundo.'],
            ['title' => 'Capas de tareas', 'text' => 'Las tareas de cada proyecto se enganchan al grafo: se ve qué archivos toca cada tarea y qué tareas dependen de un archivo.'],
            ['title' => 'Seguro por diseño', 'text' => 'Los secretos (.env, claves, tokens) aparecen en el grafo pero nunca se leen. El puente solo escucha en local y exige token.'],
            ['title' => 'Rendimiento real', 'text' => 'Motor de consultas en C++ como extensión de Godot: el grafo completo del estudio se navega con fluidez.'],
        ],
        'results' => [
            ['value' => '18 961', 'label' => 'nodos en el grafo de nuestro propio estudio'],
            ['value' => '< 0,2 s', 'label' => 'respuesta a consultas repetidas de los agentes'],
            ['value' => '60 FPS', 'label' => 'navegando el grafo completo'],
        ],
        'stack' => ['Godot 4 · GDScript', 'C++ (GDExtension)', 'Python', 'Node.js · TypeScript', 'Model Context Protocol', 'WebSocket'],
        'gallery' => [
            ['src' => 'assets/img/portfolio/shots/mdd_graph.webp', 'alt' => 'Grafo completo del estudio en MDD Editor', 'caption' => 'Todo el estudio en un solo grafo: código, escenas, documentación y tareas.'],
            ['src' => 'assets/img/portfolio/shots/mdd_explorer.webp', 'alt' => 'Explorador de MDD Editor con tarjetas de documentos conectadas', 'caption' => 'Explorador: documentos legibles y conexiones navegables con un clic.'],
        ],
        'note' => '',
    ],

    'trading-lab' => [
        'url' => '/es/casos-de-exito/trading-lab',
        'title' => 'Trading Lab',
        'category' => 'I+D · Aprendizaje por refuerzo',
        'summary' => 'Laboratorio para investigar hipótesis de aprendizaje por refuerzo en agentes de trading. Rigor científico y cero autoengaño.',
        'meta_description' => 'Trading Lab: laboratorio de investigación de hipótesis de aprendizaje por refuerzo (RL) para agentes de trading, con evaluación fuera de muestra. Caso de Guapiko.',
        'image' => 'assets/img/portfolio/shots/trading_1.webp',
        'image_alt' => 'Panel de telemetría de entrenamiento de Trading Lab con curvas de PnL, recompensa y winrate',
        'facts' => [
            'Tipo' => 'Investigación interna',
            'Rol' => 'Arquitectura, ML e infraestructura',
            'Año' => '2026',
        ],
        'challenge' => 'En trading algorítmico es facilísimo engañarse: un modelo que «gana» en el histórico casi siempre ha memorizado ruido. Cada idea nueva —una recompensa, un filtro, un modelo de ejecución— acababa en scripts sueltos, con resultados imposibles de comparar y conclusiones imposibles de reproducir.',
        'solution' => 'Construimos un laboratorio en el que cada idea se registra como hipótesis, con su criterio de falsación, antes de lanzarse. Se monta con componentes aislados y testeados, se entrena en local o en GPU en la nube con presupuesto limitado y se evalúa fuera de muestra contra referencias obligatorias. Si el veredicto es FAIL, es FAIL: ningún modelo llega a «campeón» sin superar la evaluación. Los agentes de IA operan el laboratorio por MCP siguiendo un protocolo estricto.',
        'features' => [
            ['title' => 'Registro de hipótesis', 'text' => 'Cada experimento está ligado a una hipótesis con su diario: qué cambió, qué se observó y por qué se da el siguiente paso.'],
            ['title' => 'Evaluación honesta', 'text' => 'Periodos fuera de muestra «quemados», varias semillas, bootstrap con intervalos de confianza y estrés de deslizamiento.'],
            ['title' => 'Referencias obligatorias', 'text' => 'Todo modelo compite contra no operar, entradas aleatorias, Donchian y un control con el tiempo barajado.'],
            ['title' => 'Componentes modulares', 'text' => 'Términos de recompensa, modificadores y modelos de ejecución como piezas independientes, cada una con su test.'],
            ['title' => 'Telemetría en vivo', 'text' => 'Panel con PnL, recompensa, winrate, value loss y repetición de cada operación sobre el gráfico.'],
            ['title' => 'GPU con presupuesto', 'text' => 'Entrenamiento en GPU en la nube con límite de coste y de tiempo por experimento.'],
        ],
        'results' => [
            ['value' => '11,9 M', 'label' => 'velas en una sola evaluación fuera de muestra'],
            ['value' => '4', 'label' => 'referencias que todo modelo debe batir'],
            ['value' => '≤ 1 $', 'label' => 'presupuesto típico de GPU por experimento'],
        ],
        'stack' => ['Python', 'PyTorch (PPO)', 'FastAPI', 'Datos de mercado OKX', 'GPU en la nube (RunPod)', 'Model Context Protocol'],
        'gallery' => [
            ['src' => 'assets/img/portfolio/shots/trading_1.webp', 'alt' => 'Telemetría de entrenamiento en Trading Lab', 'caption' => 'Telemetría de entrenamiento: PnL, recompensa, winrate y value loss por episodio.'],
            ['src' => 'assets/img/portfolio/shots/trading_2.webp', 'alt' => 'Veredicto fuera de muestra y diario de la hipótesis en Trading Lab', 'caption' => 'Veredicto fuera de muestra: aquí el laboratorio dice FAIL y lo deja por escrito en el diario de la hipótesis.'],
        ],
        'note' => 'Proyecto de investigación. No es un producto de inversión ni asesoramiento financiero.',
    ],

    'bilagun' => [
        'url' => '/es/casos-de-exito/bilagun',
        'title' => 'De Bi Lagun',
        'category' => 'Cliente · Web y archivo digital',
        'summary' => 'Web y archivo digital de De Bi Lagun, el criadero de pastor alemán de Rufo Ribado: campeón de España durante años y con perros conocidos en todo el mundo.',
        'meta_description' => 'De Bi Lagun: web inmersiva y archivo digital del criadero de pastor alemán de Rufo Ribado en Donostia. Caso de Guapiko.',
        'image' => 'assets/img/portfolio/shots/bilagun_home.webp',
        'image_alt' => 'Portada de la web de De Bi Lagun con un pastor alemán de la línea Bi Lagun',
        'facts' => [
            'Cliente' => 'Rufo Ribado · De Bi Lagun',
            'Lugar' => 'Donostia – San Sebastián',
            'Año' => '2026',
        ],
        'challenge' => 'Rufo Ribado lleva más de treinta años criando pastor alemán en Donostia y es juez nacional e internacional de la raza. De Bi Lagun fue mejor criador de España de 2013 a 2018, campeón de Europa en 2004 y campeón de España en 1992, 2005, 2009, 2012, 2013, 2015, 2016 y 2018. Todo ese legado estaba repartido entre fotos antiguas, catálogos de exposiciones y la memoria de su creador.',
        'solution' => 'Diseñamos una web inmersiva en la que los perros son los protagonistas. Cada ejemplar tiene su ficha con genealogía, títulos y galería a pantalla completa. Restauramos con IA las fotos antiguas, reconstruimos la base de datos de la línea de sangre a partir de catálogos y calendarios con un flujo de IA, y trabajamos el SEO local para que el criadero aparezca cuando alguien busca un pastor alemán de verdad.',
        'features' => [
            ['title' => 'Ficha de cada ejemplar', 'text' => 'Padre, madre, sexo, títulos y fotos de cada perro, con navegación de un ejemplar al siguiente.'],
            ['title' => 'Visor inmersivo', 'text' => 'Fotos a pantalla completa con zoom por pellizco o rueda y cierre deslizando, en móvil y escritorio.'],
            ['title' => 'Restauración con IA', 'text' => 'Fotos de archivo de décadas atrás recuperadas con modelos generativos, sin perder la fidelidad del perro.'],
            ['title' => 'Datos con IA', 'text' => 'Un flujo de IA extrae nombres, genealogías y premios de catálogos y calendarios y los vuelca a la base de datos.'],
            ['title' => 'SEO local', 'text' => 'Textos y estructura pensados para búsquedas de criador de pastor alemán en Donostia y en España.'],
            ['title' => 'Rápida y ligera', 'text' => 'JavaScript sin frameworks, miniaturas comprimidas y despliegue serverless en el edge.'],
        ],
        'results' => [
            ['value' => '30+', 'label' => 'años de legado, ahora en un solo sitio'],
            ['value' => '31', 'label' => 'ejemplares documentados con su genealogía'],
            ['value' => '6', 'label' => 'años seguidos como mejor criador de España'],
        ],
        'stack' => ['HTML · CSS · JavaScript', 'Cloudflare Pages + Functions', 'IA generativa (restauración de imagen)', 'Python'],
        'gallery' => [
            ['src' => 'assets/img/portfolio/shots/bilagun_home.webp', 'alt' => 'Portada de la web De Bi Lagun', 'caption' => 'Portada: el perro, a pantalla completa, por encima de todo.'],
            ['src' => 'assets/img/portfolio/shots/bilagun_grid.webp', 'alt' => 'Rejilla de perros de De Bi Lagun con filtros', 'caption' => 'La línea de sangre: machos, hembras y promesas con filtros.'],
            ['src' => 'assets/img/portfolio/shots/bilagun_dog.webp', 'alt' => 'Ficha inmersiva de un pastor alemán de De Bi Lagun', 'caption' => 'Ficha inmersiva de cada ejemplar, con paso directo al siguiente.'],
        ],
        'note' => '',
    ],
];

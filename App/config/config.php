<?php

return [
    'langs' => ['es', 'eu'],
    'lang_default' => env('LANG_DEFAULT', 'es'),
    'global_routes' => [
        // comentar cuando subamos a producción para que no exista una url de showroom
        '/showroom' => [
            'view' => 'showroom.php',
            'resources' => 'src/assets/js/showroom.js',
        ],
    ],

    // Rutas que reciben formularios. La clave es el action del formulario y
    // el valor es el archivo PHP que debe procesar sus datos.
    'post_routes' => [
        '/app/artForm02' => 'app/artForm02.php',
    ],

    'routes' => [
        'es' => [
            '/es' => [
                'view' => 'inicio.php',
                'resources' => 'src/assets/js/inicio.js',
            ],
            '/es/servicios' => [
                'view' => 'servicios.php',
                'resources' => 'src/assets/js/servicios.js',
            ],
            '/es/casos-de-exito' => [
                'view' => 'casos-de-exito.php',
                'resources' => 'src/assets/js/casos-de-exito.js',
            ],
            '/es/formacion' => [
                'view' => 'formacion.php',
                'resources' => 'src/assets/js/formacion.js',
            ],
            '/es/contacto' => [
                'view' => 'contacto.php',
                'resources' => 'src/assets/js/contacto.js',
            ],
            '/es/servicios/detalle' => [
                'view' => 'servicio_detalle.php',
                'resources' => 'src/assets/js/servicio_detalle.js',
            ],
            '/es/casos-de-exito/detalle' => [
                'view' => 'proyecto_detalle.php',
                'resources' => 'src/assets/js/proyecto_detalle.js',
            ],
            '/es/formacion/detalle' => [
                'view' => 'curso_detalle.php',
                'resources' => 'src/assets/js/curso_detalle.js',
            ],
            '/es/legal' => [
                'view' => 'legal.php',
                'resources' => 'src/assets/js/legal.js',
            ],
            '/es/equipo' => [
                'view' => 'equipo.php',
                'resources' => 'src/assets/js/equipo.js',
            ],
            '/es/productos' => [
                'view' => 'productos.php',
                'resources' => 'src/assets/js/productos.js',
            ],
            '/es/productos/producto-1' => [
                'view' => 'producto1.php',
                'resources' => 'src/assets/js/producto.js',
            ],
            '/es/productos/producto-2' => [
                'view' => 'producto2.php',
                'resources' => 'src/assets/js/producto.js',
            ],
            '/es/404' => [
                'view' => '404.php',
                'resources' => 'src/assets/js/inicio.js',
            ],
        ],
        'eu' => [
            '/eu' => [
                'view' => 'inicio.php',
                'resources' => 'src/assets/js/inicio.js',
            ],
            '/eu/zerbitzuak' => [
                'view' => 'servicios.php',
                'resources' => 'src/assets/js/servicios.js',
            ],
            '/eu/kasu-arrakastatsuak' => [
                'view' => 'casos-de-exito.php',
                'resources' => 'src/assets/js/casos-de-exito.js',
            ],
            '/eu/prestakuntza' => [
                'view' => 'formacion.php',
                'resources' => 'src/assets/js/formacion.js',
            ],
            '/eu/kontaktua' => [
                'view' => 'contacto.php',
                'resources' => 'src/assets/js/contacto.js',
            ],
            '/eu/zerbitzuak/xehetasuna' => [
                'view' => 'servicio_detalle.php',
                'resources' => 'src/assets/js/servicio_detalle.js',
            ],
            '/eu/kasu-arrakastatsuak/xehetasuna' => [
                'view' => 'proyecto_detalle.php',
                'resources' => 'src/assets/js/proyecto_detalle.js',
            ],
            '/eu/prestakuntza/xehetasuna' => [
                'view' => 'curso_detalle.php',
                'resources' => 'src/assets/js/curso_detalle.js',
            ],
            '/eu/lege-oharra' => [
                'view' => 'legal.php',
                'resources' => 'src/assets/js/legal.js',
            ],
            '/eu/taldea' => [
                'view' => 'equipo.php',
                'resources' => 'src/assets/js/equipo.js',
            ],
            '/eu/produktuak' => [
                'view' => 'productos.php',
                'resources' => 'src/assets/js/productos.js',
            ],
            '/eu/produktuak/produktua-1' => [
                'view' => 'producto1.php',
                'resources' => 'src/assets/js/producto.js',
            ],
            '/eu/produktuak/produktua-2' => [
                'view' => 'producto2.php',
                'resources' => 'src/assets/js/producto.js',
            ],
            '/eu/404' => [
                'view' => '404.php',
                'resources' => 'src/assets/js/inicio.js',
            ],
        ]
    ],
];

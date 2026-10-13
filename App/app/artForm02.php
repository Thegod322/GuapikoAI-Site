<?php

$basePath = dirname(__DIR__, 2);
require_once $basePath . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable($basePath);
$dotenv->safeLoad();

require_once $basePath . '/App/config/helpers.php';

// 1. Recoger los datos enviados por el formulario.
$nombre = trim((string) ($_POST['nombre'] ?? ''));
$telefono = trim((string) ($_POST['telefono'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$mensaje = trim((string) ($_POST['mensaje'] ?? ''));
$empresa = trim((string) ($_POST['empresa'] ?? ''));
$terminos = (string) ($_POST['terminos'] ?? '');
$respUser = trim((string) ($_POST['respUser'] ?? ''));
$respSystem = trim((string) ($_POST['respSystem'] ?? ''));
$url = ruta_interna($_POST['url'] ?? '/showroom');
$langRecibido = (string) ($_POST['lang'] ?? 'es');
$lang = in_array($langRecibido, ['es', 'eu'], true) ? $langRecibido : 'es';
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$fecha = date('Y-m-d H:i:s');

// 2. Validar los datos antes de intentar enviar correos.
if (comprobarVacio($terminos)) {
    enviarRespuestaAsincrona('Debes aceptar las condiciones de consentimiento', true, 'condiciones');
}

if ($respUser === '' || $respSystem === '') {
    enviarRespuestaAsincrona('Debes cumplir con el captcha', true, 'captcha');
}

if ($respUser !== $respSystem) {
    enviarRespuestaAsincrona('Debes resolver la operación de forma correcta', true, 'captcha');
}

if (comprobarVacio($nombre)) {
    enviarRespuestaAsincrona('Debes rellenar el campo nombre', true, 'nombre');
}

if (comprobarCaracteres($nombre, 3, 40)) {
    enviarRespuestaAsincrona('El nombre debe tener entre 3 y 40 caracteres', true, 'nombre');
}

if (comprobarVacio($telefono)) {
    enviarRespuestaAsincrona('El campo teléfono debe cumplimentarse', true, 'telefono');
}

if (comprobarVacio($email)) {
    enviarRespuestaAsincrona('Debes indicar el correo electrónico', true, 'email');
}

if (!comprobarEmailSintaxis($email)) {
    enviarRespuestaAsincrona('El correo electrónico no tiene un formato adecuado', true, 'email');
}

if (comprobarVacio($mensaje)) {
    enviarRespuestaAsincrona('El mensaje no puede quedar vacío', true, 'mensaje');
}

if (comprobarCaracteres($mensaje, 4, 1500)) {
    enviarRespuestaAsincrona('El mensaje debe tener entre 4 y 1500 caracteres', true, 'mensaje');
}

if (comprobarCaracteres($empresa, 0, 100)) {
    enviarRespuestaAsincrona('El nombre de la empresa no puede superar los 100 caracteres', true, 'empresa');
}

// La empresa es opcional: si llega, va al principio del mensaje.
if ($empresa !== '') {
    $mensaje = "Empresa: $empresa\n\n$mensaje";
}

// 3. Avisar por Telegram (sustituye al correo: no necesita SMTP).
// Token y chat se configuran en .env: TELEGRAM_BOT_TOKEN y TELEGRAM_CHAT_ID.
$web = app_url($url);
$textoTelegram = "☕ <b>Nueva solicitud de café</b> · guapiko.com\n\n"
    . "<b>Nombre:</b> " . e($nombre) . "\n"
    . "<b>Teléfono:</b> " . e($telefono) . "\n"
    . "<b>Email:</b> " . e($email) . "\n"
    . "<b>Idioma:</b> " . e($lang) . "\n\n"
    . "<b>Mensaje:</b>\n" . e($mensaje) . "\n\n"
    . "<i>" . e($fecha) . " · " . e($web) . "</i>";

require_once $basePath . '/App/app/enviarTelegram.php';
$errorTelegram = enviarTelegram($textoTelegram);

if ($errorTelegram !== null) {
    error_log('artForm02: no se ha enviado el aviso a Telegram. ' . $errorTelegram);
    enviarRespuestaAsincrona('No se ha podido enviar tu mensaje. Inténtalo de nuevo más tarde o escríbenos por WhatsApp.', true, 'envio');
}

// 6. Guardar la consulta si este proyecto tiene una BBDD configurada.
$bbddHost = env('BBDD_HOST');
$bbddUser = env('BBDD_USER');
$bbddPass = env('BBDD_PASS');
$bbddNombre = env('BBDD_BBDD');

if (extension_loaded('mysqli') && $bbddHost && $bbddUser && $bbddNombre) {
    $con = @mysqli_connect($bbddHost, $bbddUser, (string) $bbddPass, $bbddNombre);

    if ($con === false) {
        error_log('artForm02: error de conexión con la BBDD: ' . mysqli_connect_error());
    } else {
        $con->set_charset('utf8mb4');
        $sql = 'INSERT INTO `consultas_web` (`creado_en`, `nombre`, `telefono`, `email`, `mensaje`, `ip`, `idioma`, `url_origen`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = mysqli_prepare($con, $sql);

        if ($stmt === false) {
            error_log('artForm02: error al preparar la consulta: ' . mysqli_error($con));
        } else {
            mysqli_stmt_bind_param($stmt, 'ssssssss', $fecha, $nombre, $telefono, $email, $mensaje, $ip, $lang, $url);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

        mysqli_close($con);
    }
}

enviarRespuestaAsincrona("Gracias por escribir, $nombre. En breve te contactaremos.", false, $nombre);

<?php

// Envía un mensaje (HTML de Telegram) al chat configurado en .env.
// Devuelve null si Telegram lo acepta, o el texto del error.
function enviarTelegram(string $textoHtml): ?string
{
    $token = (string) env('TELEGRAM_BOT_TOKEN', '');
    $chatId = (string) env('TELEGRAM_CHAT_ID', '');

    if ($token === '' || $chatId === '') {
        return 'Faltan TELEGRAM_BOT_TOKEN o TELEGRAM_CHAT_ID en el entorno.';
    }

    $contexto = stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => http_build_query([
                'chat_id' => $chatId,
                'text' => $textoHtml,
                'parse_mode' => 'HTML',
                'disable_web_page_preview' => 'true',
            ]),
            'timeout' => 10,
            'ignore_errors' => true,
        ],
    ]);

    $respuesta = @file_get_contents('https://api.telegram.org/bot' . $token . '/sendMessage', false, $contexto);

    if ($respuesta === false) {
        return 'No se ha podido conectar con la API de Telegram.';
    }

    $datos = json_decode($respuesta, true);

    if (!is_array($datos) || ($datos['ok'] ?? false) !== true) {
        return 'Telegram ha rechazado el mensaje: ' . ($datos['description'] ?? $respuesta);
    }

    return null;
}

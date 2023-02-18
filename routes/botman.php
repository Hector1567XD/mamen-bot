<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');
 
$botman->hears('start', function ($bot) {
    $bot->reply("no");
});

$botman->hears('di lo tuyo mamen', function ($bot) {
    $frasesDeMamen = [
        "Huele boxer",
        "Nadie:",
        "Mi pana el menos esquizo",
        "Xd",
        "si",
        "En efecto",
        "Turbio",
        "Las condiciones en las que nacemos no determinan las personas en las que nos convertiremos",
        "Chicos, recuerden, lo mas importante es aceptarse a uno mismo, cuidar el autoestima y respetarnos los unos a los otros",
        "Te pido perdón de la única forma que se , abriendo las puertas de mi corazón para cuando decidas volver , porque nunca habrá nadie que llene el vacío que dejaste en mi"
    ];
    $key = array_rand($frasesDeMamen);
    $bot->reply($frasesDeMamen[$key]);
});

$botman->hears('de que forma se pide perdon', function ($bot) {
    $frasesDeMamen = [
        "Abriendo las puertas de mi corazón para cuando decidas volver , porque nunca habrá nadie que llene el vacío que dejaste en mi"
    ];
    $key = array_rand($frasesDeMamen);
    $bot->reply($frasesDeMamen[$key]);
});

$botman->hears('mamen que te pasa', function ($bot) {
    $frasesDeMamen = [
        "Nada, este es mi verdadero yo"
    ];
    $key = array_rand($frasesDeMamen);
    $bot->reply($frasesDeMamen[$key]);
});

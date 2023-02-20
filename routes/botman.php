<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');
 
$botman->hears('start', function ($bot) {
    $bot->reply("no");
});

$botman->hears('di lo tuyo mamen', function ($bot) {
    $frasesDeMamen = [
        "Porcinos...",
        "Huele boxer",
        "Vamos contra unos huele boxer",
        "Nadie:",
        "Mi pana el menos esquizo",
        "Xd",
        "si",
        "En efecto",
        "Turbio",
        "Las condiciones en las que nacemos no determinan las personas en las que nos convertiremos",
        "Chicos, recuerden, lo mas importante es aceptarse a uno mismo, cuidar el autoestima y respetarnos los unos a los otros",
        "Te pido perdón de la única forma que se , abriendo las puertas de mi corazón para cuando decidas volver , porque nunca habrá nadie que llene el vacío que dejaste en mi",
        "La ex no quiere que siga saliendo con ella"
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

$botman->hears('necesito un consejo mamen', function ($bot) {
    $frasesDeMamen = [
        "Conocete a ti mismo",
        "Aceptate tal y como eres",
        "Identifica tus aspectos de mejora",
        "Deja atras el pasado",
        "Mira tu vida con mas optimismo",
        "Ten paciencia contigo mismo",
        "Aprendete a amarte a ti mismo",
        "Cuando no tenía nada que perder, era libre",
        "Las lágrimas son palabras que necesitan ser escritas",
        "Las personas cambian cuando se dan cuenta del poder que tienen para cambiar las cosas",
        "El dolor de ayer es la fuerza de hoy",
        "Nunca desistas de un sueño",
        "No le doy consejos a geis",
        "Empieza vendiendo bonice",
        "Tá peluo",
        "Si mi jeva me dice eso le digo fuera de aquí loca",
        "Un axioma es algo que no necesita demostrarse"
    ];
    $key = array_rand($frasesDeMamen);
    $bot->reply($frasesDeMamen[$key]);
});

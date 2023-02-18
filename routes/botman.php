<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$frasesDeMamen = [
    "Huele boxer",
    "Nadie:",
    "Mi pana el menos esquizo",
    "Xd",
    "si",
    "En efecto",
    "Turbio",
    "Las condiciones en las que nacemos no determinan las personas en las que nos convertiremos",
    "Chicos, recuerden, lo mas importante es aceptarse a uno mismo, cuidar el autoestima y respetarnos los unos a los otros"
];
 
$botman->hears('di lo tuyo mamen!', function ($bot) {
    $key = array_rand($frasesDeMamen);
    $bot->reply($frasesDeMamen[$key]);
});

$botman->hears('Di lo tuyo mamen!', function ($bot) {
    $key = array_rand($frasesDeMamen);
    $bot->reply($frasesDeMamen[$key]);
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');

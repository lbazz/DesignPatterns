<?php

require_once("../autoloader.php");

$chevroletFactory = new \FactoryMethod\ChevroletFactory();
$dodgeFactory     = new \FactoryMethod\DodgeFactory();

try {
    $chevroletOpala   = $chevroletFactory->criarCarro('opala');
    $chevroletCaravan = $chevroletFactory->criarCarro('caravan');

    $dodgeCharger = $dodgeFactory->criarCarro('charger');
    $dodgeDart    = $dodgeFactory->criarCarro('dart');
} catch (Exception $e) {
    echo $e->getMessage();
}

echo $chevroletOpala->acelerar();
echo $chevroletOpala->frear();
echo $chevroletOpala->trocarMarcha();
echo "\n";

echo $dodgeCharger->acelerar();
echo $dodgeCharger->frear();
echo $dodgeCharger->trocarMarcha();
echo "\n";

echo $chevroletCaravan->acelerar();
echo $chevroletCaravan->frear();
echo $chevroletCaravan->trocarMarcha();
echo "\n";

echo $dodgeDart->acelerar();
echo $dodgeDart->frear();
echo $dodgeDart->trocarMarcha();
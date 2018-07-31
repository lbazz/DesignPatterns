<?php

namespace FactoryMethod\Product;

class DodgeDart implements InterfaceCarroProduct
{
    public function acelerar()
    {
        echo "Acelerando Dodge Dart\n";
    }

    public function frear()
    {
        echo "Freando Dodge Dart\n";
    }

    public function trocarMarcha()
    {
        echo "Trocando marcha do Dodge Dart\n";
    }
}
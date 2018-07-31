<?php

namespace FactoryMethod\Product;

class DodgeCharger implements InterfaceCarroProduct
{
    public function acelerar()
    {
        echo "Acelerando Dodge Charger\n";
    }

    public function frear()
    {
        echo "Freando Dodge Charger\n";
    }

    public function trocarMarcha()
    {
        echo "Trocando marcha do Dodge Charger\n";
    }
}
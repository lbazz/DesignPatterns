<?php

namespace FactoryMethod\Product;

class ChevroletCaravan implements InterfaceCarroProduct
{
    public function acelerar()
    {
        echo "Acelerando Caravan\n";
    }

    public function frear()
    {
        echo "Freando Caravan\n";
    }

    public function trocarMarcha()
    {
        echo "Trocando marcha da Caravan\n";
    }
}
<?php

namespace FactoryMethod\Product;

class ChevroletOpala implements InterfaceCarroProduct
{
    public function acelerar()
    {
        echo "Acelerando Tu pisava ele voava\n";
    }

    public function frear()
    {
        echo "Freando Tu freava ele ancorava\n";
    }

    public function trocarMarcha()
    {
        echo "Trocando marcha E eu lá dentro a me debater\n";
    }
}
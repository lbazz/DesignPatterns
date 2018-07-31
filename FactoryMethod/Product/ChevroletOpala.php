<?php

namespace FactoryMethod\Product;

class ChevroletOpala implements InterfaceCarroProduct
{
    public function acelerar()
    {
        echo "Acelerando \n Tu pisava ele voava\n";
    }

    public function frear()
    {
        echo "Freando \n Tu freava ele ancorava\n";
    }

    public function trocarMarcha()
    {
        echo "Trocando marcha \n E eu lá dentro a me debater\n";
    }
}
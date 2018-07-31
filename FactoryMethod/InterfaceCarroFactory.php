<?php

namespace FactoryMethod;

use FactoryMethod\Product\InterfaceCarroProduct;

interface InterfaceCarroFactory
{
    public function criarCarro(string $modeloCarro): InterfaceCarroProduct;
}
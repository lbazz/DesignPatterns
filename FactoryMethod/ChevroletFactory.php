<?php

namespace FactoryMethod;

use FactoryMethod\Product\{
    InterfaceCarroProduct
    , ChevroletOpala
    , ChevroletCaravan
};

class ChevroletFactory implements InterfaceCarroFactory
{
    /**
     * @param string $modeloCarro
     * @return CarroProduct
     * @throws \Exception
     */
    public function criarCarro(string $modeloCarro): InterfaceCarroProduct
    {
        if (strtolower($modeloCarro) == "opala") {
            return ChevroletOpala();
        } elseif (strtolower($modeloCarro) == "caravan") {
            return ChevroletCaravan();
        } else {
            throw new \Exception("Modelo de carro {$modeloCarro} não existe no sistema.");
        }
    }
}
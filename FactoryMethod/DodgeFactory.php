<?php

namespace FactoryMethod;

use FactoryMethod\Product\{
    InterfaceCarroProduct
    , DodgeDart
    , DodgeCharger
};

class DodgeFactory implements InterfaceCarroFactory
{
    /**
     * @param string $modeloCarro
     * @return CarroProduct
     * @throws \Exception
     */
    public function criarCarro(string $modeloCarro): InterfaceCarroProduct
    {
        if (strtolower($modeloCarro) == "dart") {
            return new DodgeDart();
        } elseif (strtolower($modeloCarro) == "charger") {
            return new DodgeCharger();
        } else {
            throw new \Exception("Modelo de carro {$modeloCarro} não existe no sistema.");
        }
    }
}
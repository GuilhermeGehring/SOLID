<?php

namespace App\poligonos;

class Quadrado extends Retangulo
{
    protected $largura;
    protected $altura;

    public function getLargura(): float
    {
        return $this->largura;
    }

    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
        $this->altura = $largura;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function setAltura(float $altura): void
    {
        $this->largura = $altura;
        $this->altura = $altura;
    }
}

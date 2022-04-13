<?php

namespace App\Extrator;

use App\extrator\Arquivo;

class Xlsx extends Arquivo
{
    public function lerArquivo(string $caminho): array
    {


        return $this->getDados();
    }
}

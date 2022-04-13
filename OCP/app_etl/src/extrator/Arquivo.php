<?php

namespace App\Extrator;

class Arquivo
{
    private $dados = [];

    public function getDados(): array
    {
        return $this->dados;
    }

    public function setDados(string $nome, string $cpf, string $email): void
    {
        $this->dados[] = [
            'nome' => iconv('iso-8859-1', 'utf-8', $nome),
            'cpf' => $cpf,
            'email' => $email
        ];
    }
}

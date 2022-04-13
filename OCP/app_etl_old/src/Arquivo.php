<?php

namespace App;

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

    public function lerArquivoCSV(string $caminho): void
    {
        $handle = fopen($caminho, 'r');

        while (($linha = fgetcsv($handle, 10000, ';')) !== false) {
            $this->setDados($linha[0], $linha[1], $linha[2]);
        }

        fclose($handle);
    }

    public function lerArquivoTXT(string $caminho): void
    {
        $handle = fopen($caminho, 'r');

        while (!feof($handle)) {
            $linha = fgets($handle);
            $this->setDados(
                substr($linha, 11, 30), // nome
                substr($linha, 0, 11), // cpf
                substr($linha, 41, -1) // email
            );
        }

        fclose($handle);
    }
}

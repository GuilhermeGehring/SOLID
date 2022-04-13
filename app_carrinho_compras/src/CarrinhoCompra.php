<?php

namespace App;

class CarrinhoCompra
{
    private $itens;

    public function __construct()
    {
        $this->itens = [];
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function adicionarItem(Item $item)
    {
        $this->itens[] = $item;
        return true;
    }

    public function validarCarrinho()
    {
        return count($this->itens) > 0;
    }
}

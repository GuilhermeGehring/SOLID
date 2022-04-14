<?php

namespace App;

class Mensageiro
{
    private $canal;

    public function __construct(IMensagemToken $canal)
    {
        $this->setCanal($canal);
    }

    public function getCanal(): IMensagemToken
    {
        return $this->canal;
    }

    public function setCanal(IMensagemToken $canal)
    {
        $this->canal = $canal;
    }

    public function enviarToken(): void
    {
        $this->getCanal()->enviar();
        // $classe = '\App\\' . ucfirst($this->getCanal());
        // echo $classe;
        // $obj = new $classe;
        // $obj->enviar();
    }
}

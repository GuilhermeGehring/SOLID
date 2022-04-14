<?php

namespace App;

class Email implements IMensagemToken
{
    public function Enviar(): void
    {
        echo 'E-mail: Seu token é 334-411';
    }
}

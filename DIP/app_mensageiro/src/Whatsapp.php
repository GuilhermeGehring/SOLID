<?php

namespace App;

class Whatsapp implements IMensagemToken
{
    public function Enviar(): void
    {
        echo 'Whatsapp: Seu token é 888-222';
    }
}

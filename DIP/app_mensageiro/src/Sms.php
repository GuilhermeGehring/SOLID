<?php

namespace App;

class Sms implements IMensagemToken
{
    public function Enviar(): void
    {
        echo 'Sms: Seu token é 888-222';
    }
}

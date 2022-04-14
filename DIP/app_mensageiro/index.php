<?php

use App\Email;
use App\Mensageiro;
use App\Sms;
use App\Whatsapp;

require __DIR__ . '/vendor/autoload.php';

$msg = new Mensageiro(new Email);
$msg->enviarToken();

echo '<br>';

$msg = new Mensageiro(new Sms);
$msg->enviarToken();

echo '<br>';

$msg = new Mensageiro(new Whatsapp);
$msg->enviarToken();

<?php

use App\Poligono;
use App\poligonos\Quadrado;
use App\poligonos\Retangulo;

require __DIR__ . "/vendor/autoload.php";

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(15);
echo '<pre>';
echo print_r($poligono);
echo '</pre>';
echo '<h3>Área do retângulo: ' . $poligono->getArea() . '</h3>';


$poligono = new Poligono();
$poligono->setForma(new Quadrado());
$poligono->getForma()->setLargura(15);
echo '<pre>';
echo print_r($poligono);
echo '</pre>';
echo '<h3>Área do quadrado: ' . $poligono->getArea() . '</h3>';

/*
$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<h3>Área do retângulo: ' . $retangulo->getArea() . '</h3>';

$quadrado = new Quadrado();
$quadrado->setAltura(5);
$quadrado->setLargura(10);
echo '<h3>Área do retângulo: ' . $quadrado->getArea() . '</h3>';

$retangulo = new Quadrado();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<h3>LSP - Área do retângulo: ' . $retangulo->getArea() . '</h3>';
*/
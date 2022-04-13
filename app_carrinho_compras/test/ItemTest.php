<?php

use PHPUnit\Framework\TestCase;
use src\Item;

class ItemTest extends TestCase
{
    public function testEstadoInicialItem()
    {
        $item = new Item();

        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    public function testGetSetDescricao()
    {
        $descricao = 'Item de teste';

        $item = new Item();
        $item->setDescricao($descricao);

        $this->assertEquals($descricao, $item->getDescricao());
    }

    public function testItemValido()
    {
        $item = new Item();

        $this->assertFalse($item->itemValido());

        $item->setDescricao('');
        $item->setValor(10.5);
        $this->assertFalse($item->itemValido());

        $item->setDescricao('Item de teste');
        $item->setValor(10.5);
        $this->assertTrue($item->itemValido());
    }

    /**
     * @dataProvider dataValores
     */
    public function testGetSetValor($valor)
    {
        $item = new Item();
        $item->setValor($valor);

        $this->assertEquals($valor, $item->getValor());
    }

    public function dataValores()
    {
        return [
            [100],
            [-2],
            [-4],
            [0]
        ];
    }
}

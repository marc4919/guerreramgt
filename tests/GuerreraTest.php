<?php
use PHPUnit\Framework\TestCase;

class GuerreraTest extends TestCase{

    private $warrior;

    public function setUp():void{
        $this->warrior = new Guerrera('Diana',15,'viva');
    }

    public function testHeridaMuchaVida(){
        $this->warrior->herida();
        $this->assertEquals("viva",$this->warrior->getEstado());
        $this->assertEquals(5,$this->warrior->getVida());
    }

    public function testHeridaPocaVida(){
        $this->warrior->herida();
        $this->warrior->herida();
        $this->assertEquals("muerta",$this->warrior->getEstado());
        $this->assertEquals(-5,$this->warrior->getVida());
    }


    public function testPocionNoFunciona(){
        $this->warrior->herida();
        $this->warrior->herida();
        $this->warrior->herida();
        $this->warrior->pocion();
        $this->assertEquals("muerta",$this->warrior->getEstado());
        $this->assertEquals(-5,$this->warrior->getVida());
    }

    public function testPocionSiFunciona(){
        $this->warrior->herida();
        $this->warrior->herida();
        $this->warrior->pocion();
        $this->assertEquals("viva",$this->warrior->getEstado());
        $this->assertEquals(5,$this->warrior->getVida());
    }

}
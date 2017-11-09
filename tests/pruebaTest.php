<?php

require 'prueba.php';

class pruebaTest extends PHPUnit_Framework_TestCase{
    
    
    public $instanciaPrueba;
    
    
    public function setUp(){
        
        $this->instanciaPrueba = new prueba();
        
    }
    
    public function testMachine(){
        
        
        $this->instanciaPrueba->pruebaTest(100);
        
        $this->instanciaPrueba->modifyAll();
        
        $this->assertEquals(99, $this->instanciaPrueba->getBall());
        
        
    }
    
    
    
    
    
    
    
}


?>
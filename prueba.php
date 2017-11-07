<?php

class prueba(){
    
    private $ball;
    
    
    public function getBall(){
        return $this->ball;    
    }
    
    
    
    public function setBall($ball){
        $this->ball = $ball;
        
    }
    
    
    public function modifyAll(){
        $this->setBall($this->getBall()-1);
        
    }
    
    
    
    
    
}



?>
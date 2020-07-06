<?php

class Vierkant extends Figuur{
    

    public function __construct($Ix){
        // $this->setX($Ix);
        parent::__construct($Ix);
    }
    public function berekenOppervlakte(){
        return $this->x * $this->x;
    }
    public function getX(){
        return $this->$x;
    }

    
}

?>
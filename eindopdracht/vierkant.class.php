<?php

class Vierkant extends Figuur{
    

    public function __construct($Ix){
        // $this->setX($Ix);
        parent::__construct($Ix);
    }

    public function getX(){
        return $this->$x;
    }

    public function berekenOppervlakte(){
        return $this->x * $this->x;
    }
}

?>
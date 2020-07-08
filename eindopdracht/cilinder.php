<?php

class Cilinder extends Figuur{


        public function __construct(float $IH, float $Ir) {
            parent::__construct($IH, $Ir);
        }

        public function getH(){
            return $this->$y;
        }
        
        public function getR(){
            return $this->$x;
        }

        public function berekenOppervlakte(){
            $oppTweeCirkels = * parent::$PI * $this->getR() $this->getR();

            $oppvlakteBuis = * parent::$PI * $this->getR() $this->getR();
            
            $oppvlakteCillinder =   $oppTweeCirkels + $oppTweeCirkels;

            return $oppvlakteCillinder

        }
        
}


?>
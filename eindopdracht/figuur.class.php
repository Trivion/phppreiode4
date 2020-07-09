<?php

abstract class figuur {
    public static $PI = 3.1415;
    protected $x;
    protected $y;

    function __construct($Ix, $Iy=null)
    {
        $this ->setX($Ix);
        $this ->setY($Iy);

    }

    public function setX($Ix)
    {
        if(!is_int($Ix)){
            die('dat is geen getal');
        }
        $this->x = $Ix;
    }

    public function	setY($iY){
        if(!is_int($Iy)){
            die('dat is geen getal');
        }
        $this->y = $Iy;
    }
    public function setOmschrijving($Iomschrijving){

    }

    public function getOmschrijving($Iomschrijving) : string {
        return $een_string;
    }

    public abstract function berekenOppervlakte();
}
?>

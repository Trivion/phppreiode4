<?php

/**
 * Class animal
 */
abstract class animal {
    public $name;
    /**
     * animal constructor.
     * @param $name
     */
    public function __construct($name) {
        $this->name = $name;
    }
    /**
     * @return string
     */
    abstract public function intro() : string;
}

/**
 * Class fish
 */
class fish extends animal {
    /**
     * @return string
     */
    public function intro() : string {
        return "ik vlieg $this->name!";
    }
}

/**
 * Class dog
 */
class dog extends animal {
    /**
     * @return string
     */
    public function intro() : string {
        return "meow I'm a $this->name!";
    }
}

$fish = new fish("vogel");
echo $fish->intro();
echo "<br>";

$dog = new dog("cat");
echo $dog->intro();

?>

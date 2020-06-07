<?php

/**
 * Class animal
 */
class animal
{
    /**
     * @var
     */
    public $species;
    public $color;


    /**
     * animal constructor.
     * @param $species
     * @param $color
     */
function __construct($species, $color)
    {
        $this->species = $species;
        $this->color = $color;
    }
    public function text()
    {
        echo "This is a {$this->species} and the color is {$this->color}.";
    }
}

/**
 * Class cat
 */
class cat extends animal {
    public $age;

    /**
     * cat constructor.
     * @param $species
     * @param $color
     * @param $age
     */

    public function __construct($species, $color, $age) {
        $this->species = $species;
        $this->color = $color;
        $this->age = $age;
    }
    public function text() {
        echo "The species is a {$this->species}, the color is {$this->color}, and the age is {$this->age} years old.";
    }
}
$cat2 = new cat("cat", "white", "2");
echo "<br>";
$cat2->text();
echo "<br>";
$dog = new animal("dog", "brown");
$dog->text();
?>
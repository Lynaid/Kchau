<?php
class Bike {
    public $kleur;
    public $snel;

    public function __construct($kleur, $snel) {
        $this->kleur = $kleur;
        $this->snel = $snel;
    }
    
    public function versnellen($aantal) {
        $this->snel += $aantal;
        echo "$aantal km/u. Nieuwe snelheid: $this->snel km/u.<br>";
    }

    public function rem($aantal) {
        $this->snel -= $aantal;
        if ($this->snel < 0) {
            $this->snel = 0;
        }
        echo "$aantal km/u. Nieuwe snelheid: $this->snel km/u.<br>";
    }
}

$myBike = new Bike("wit", 11);


echo "Mijn fiets is $myBike->kleur kleur, en heeft een snelheid van $myBike->snel km/u.<br>";
$myBike->versnellen(8);
$myBike->rem(9);
?>
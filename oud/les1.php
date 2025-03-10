<?php
$leeftijd = 18;
//hier je kan zijen hoe dom ben ik
if ($leeftijd <= 12||$leeftijd >=65){
    echo "$leeftijd  	Je mag gratis naar binnen!";
} else if  ($leeftijd <= 17 & $leeftijd >=12){
    echo "$leeftijd  Je krijgt korting op de ticketprijs.";
} else {
    echo "$leeftijd 	Je moet de volle prijs betalen.";
}
?>
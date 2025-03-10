<?php

$dagen = ["Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag"];

$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

for ($i = 0; $i <= 50; $i++) {
    echo $i . " "; 
};

echo "<br>";

echo "<br>";

$klasgenoten = ["Pieter", "Lola", "Kris", "Ana", "Elwis", "Mark", "Sophie", "Tom", "Laura", "Eva"];
foreach ($klasgenoten as $naam) {
    echo $naam . "<br>";
};

echo "<br>";

for ($i = 0; $i < count($maanden); $i++) {
    echo 'Maand ' . ($i + 1) . ' is ' . $maanden[$i] . '.<br>';
};

echo "<br>";

foreach ($maanden as $index => $maand) {
    echo 'Maand ' . ($index + 1) . ' is ' . $maand . '.<br />';
};

echo "<br>";

for ($i = 0; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
};

echo "<br>";

for ($i = 0; $i < count($dagen); $i++) {
    echo "Dag " . ($i + 1) . " van de week is : " . $dagen[$i] . "<br>";
};
?>




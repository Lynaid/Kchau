<?php
//Deel 1
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
$myArray[] = 'helikopter';
$dd = "<br>";
$text = "";
for ($i = 0; $i < count($myArray); $i++) {
    $text .= $myArray[$i] . "<br>";
}
echo $text;
//deel 2
$myArray1 = ['auto','fiets','brommer','bus','vliegtuig','trein'];
echo "Het array heeft " . count($myArray1) . " elementen.";
$myArray1[] = 'helikopter';
echo $dd;
echo "Het array heeft " . count($myArray1) . " elementen.";
//deel 3
$places = [
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China" => "Shanghai",
    "Nigeria" => "Lagos",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"];
    foreach ($places as $x) {
        echo "$x <br>";
      }
//deel 4
$cijfers = [3.5, 7.2, 1, 8.8, 5, 2.3, 9.6, 4, 6.1, 0.9];
$gemiddelde = array_sum($cijfers) / count($cijfers);
echo "het gemiddelde is: " . round($gemiddelde, 1);
?>


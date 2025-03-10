<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = htmlspecialchars(trim($_POST["naam"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $telefoon = htmlspecialchars(trim($_POST["telefoon"] ?? ''));
    $wachtwoord = $_POST["wachtwoord"] ?? '';

    if (empty($naam) || strlen($naam) < 3 || !preg_match("/^[a-zA-Z]+$/u", $naam)) {
        echo "Naam moet minimaal 3 letters bevatten en geen cijfers of speciale tekens.<br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Voer een geldig e-mailadres in.<br>";
    } elseif (!preg_match("/^[0-9]{10}$/", $telefoon)) {
        echo "Telefoonnummer moet uit 10 cijfers bestaan.<br>";
    } elseif (strlen($wachtwoord) < 8 || !preg_match("/[A-Z]/", $wachtwoord) || 
            !preg_match("/[a-z]/", $wachtwoord) || !preg_match("/[0-9]/", $wachtwoord) || !preg_match("/[@#$!]/", $wachtwoord)) {
        echo "Wachtwoord moet minimaal 8 tekens lang zijn en een hoofdletter, een kleine letter, een cijfer en een speciaal teken (@, #, $, !) bevatten.<br>";
    } else {
        echo "Formulier succesvol verzonden!";
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratieformulier</title>
</head>
<body>
    <form method="POST">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefoon">Telefoon:</label>
        <input type="tel" id="telefoon" name="telefoon">

        <label for="wachtwoord">Wachtwoord:</label>
        <input type="password" id="wachtwoord" name="wachtwoord" required>

        <input type="submit" name="knop" value="Verzenden">
    </form>
</body>
</html>

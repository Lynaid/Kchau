<?php
if (isset($_GET['naam'])) {
    echo "<h2>Ingevoerde Gegevens:</h2>";
    echo "<p><strong>Naam:</strong> " . $_GET['naam'] . "</p>";
    echo "<p><strong>Achternaam:</strong> " . $_GET['achternaam'] . "</p>";
    echo "<p><strong>Leeftijd:</strong> " . $_GET['leeftijd'] . "</p>";
    echo "<p><strong>Adres:</strong> " . $_GET['adres'] . "</p>";
    echo "<p><strong>Email:</strong> " . $_GET['email'] . "</p>";
}
?>
<h2>Formulier voor GET-methode</h2>
<form method="get" action="get.php">
    <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required><br><br>
        <label for="achternaam">Achternaam:</label>
        <input type="text" id="achternaam" name="achternaam" required><br><br>
        <label for="leeftijd">Leeftijd:</label>
        <input type="number" id="leeftijd" name="leeftijd" required><br><br>
        <label for="adres">Adres:</label>
        <input type="text" id="adres" name="adres" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Verzenden">
</form>

<?php
if (isset($_POST['naam'])) {
    echo "<h2>Ingevoerde Gegevens:</h2>";
    echo "<p><strong>Naam:</strong> " . $_POST['naam'] . "</p>";
    echo "<p><strong>Achternaam:</strong> " . $_POST['achternaam'] . "</p>";
    echo "<p><strong>Leeftijd:</strong> " . $_POST['leeftijd'] . "</p>";
    echo "<p><strong>Adres:</strong> " . $_POST['adres'] . "</p>";
    echo "<p><strong>Email:</strong> " . $_POST['email'] . "</p>";
}
?>
<h2>Formulier voor POST-methode</h2>
<form method="post" action="post.php">
    <label for="naam">Naam:</label>
    <input type="text" id="naam" name="naam" required><br><br>
    <label for="achternaam">Achternaam:</label>
    <input type="text" id="achternaam" name="achternaam" required><br><br>
    <label for="leeftijd">Leeftijd:</label>
    <input type="number" id="leeftijd" name="leeftijd" required><br><br>
    <label for="adres">Adres:</label>
    <input type="text" id="adres" name="adres" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <input type="submit" value="Verzenden">
</form>
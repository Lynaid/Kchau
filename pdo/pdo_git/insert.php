<?php
require 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_naam = $_POST['product_naam'];
    $prijs_per_stuk = $_POST['prijs_per_stuk'];
    $omschrijving = $_POST['omschrijving'];

    try {
        $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES (:product_naam, :prijs_per_stuk, :omschrijving)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':product_naam', $product_naam);
        $stmt->bindParam(':prijs_per_stuk', $prijs_per_stuk);
        $stmt->bindParam(':omschrijving', $omschrijving);

        $stmt->execute();

        echo "Product succesvol toegevoegd!";
    } catch (PDOException $e) {
        echo "Fout bij het toevoegen van het product: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Product Toevoegen</title>
</head>
<body>
    <h1>Voeg een nieuw product toe</h1>
    <form method="post" action="">
        <label for="product_naam">Product Naam:</label>
        <input type="text" id="product_naam" name="product_naam" required><br><br>

        <label for="prijs_per_stuk">Prijs per Stuk:</label>
        <input type="number" step="0.01" id="prijs_per_stuk" name="prijs_per_stuk" required><br><br>

        <label for="omschrijving">Omschrijving:</label>
        <textarea id="omschrijving" name="omschrijving" required></textarea><br><br>

        <button type="submit">Product Toevoegen</button>
    </form>
</body>
</html>
<?php
require 'db.php';
try {
    $sql = "UPDATE product SET product_naam = :product_naam, prijs_per_stuk = :prijs_per_stuk, omschrijving = :omschrijving WHERE product_code = :product_code";
    $stmt = $pdo->prepare($sql);
    
    $product_code = 1;
    $product_naam = "Jan Jansen";
    $prijs_per_stuk = "jan@example.com";
    $omschrijving= "asda";
    
    if ($stmt->execute(['product_naam'=>$product_naam, 'prijs_per_stuk'=>$prijs_per_stuk, 'omschrijving'=>$omschrijving 'product_code'=>$product_code])) {
        echo "Record succesvol bijgewerkt.";
    } else {
        echo "Fout bij bijwerken van record.";
    }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Product Bijwerken</title>
</head>
<body>
    <?php if ($product): ?>
        <h1>Bewerk Product: <?php echo htmlspecialchars($product['product_naam']); ?></h1>
        <form method="POST">
            <input type="text">
            <button type="submit">Opslaan</button>
        </form>
    <?php else: ?>
        <p>Geen product geselecteerd.</p>
    <?php endif; ?>
</body>
</html>
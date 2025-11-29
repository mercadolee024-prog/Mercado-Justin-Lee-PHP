<?php
$gelatoFlavor = "Choco Mint Supreme";
$pricePerCup = "150";   
$quantity = 4;
$subtotal = $pricePerCup * $quantity;
$tax = ($subtotal / 100) * 20;
$total = $subtotal + $tax;
$priceCheckLoose = ($pricePerCup == 150);  
$priceCheckStrict = ($pricePerCup === 150); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Gelato Serano - Order Summary</title>
</head>
<body>
<h1>Gelato Serano</h1>
<h2>Your Order Summary</h2>
<p>Gelato Flavor: <?= $gelatoFlavor ?></p>
<p>Quantity: <?= $quantity ?></p>
<p>Price per cup: ₱ <?= $pricePerCup ?></p>
<p>Subtotal: ₱ <?= $subtotal ?></p>
<p>Tax (20%): ₱ <?= $tax ?></p>
<p><strong>Total: ₱ <?= $total ?></strong></p>
<h3>Type Juggling Examples</h3>
<p>(<code>"150" == 150</code>):  
    <?= $priceCheckLoose ? "true" : "false" ?>
</p>
<p>(<code>"150" === 150</code>):  
    <?= $priceCheckStrict ? "true" : "false" ?>
</p>
</body>
</html>

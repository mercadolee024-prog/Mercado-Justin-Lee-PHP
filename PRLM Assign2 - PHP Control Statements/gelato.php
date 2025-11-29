<?php
// Variables and Type Juggling using do while loop and switch with include 
$name = 'Lee';
$packs = 5;
$price = 265;
$day = 'Friday';
switch ($day) {
    case 'Friday':
        $offer = '20% off bubble gum flavor';
        break;
    case 'Saturday':
        $offer = '20% off bubble gum flavor';
        break;
    default:
    $offer = 'Order 3 scoops, get one free scoop';         
}
include 'include/header.php';
$gelatoFlavor = "Choco Mint Supreme";
$pricePerCup = "265";   
$quantity = 4;
$subtotal = $pricePerCup * $quantity;
$tax = ($subtotal / 100) * 20;
$total = $subtotal + $tax;
$priceCheckLoose = ($pricePerCup == 265);  
$priceCheckStrict = ($pricePerCup === 265); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Updating Variables</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Gelato Serano</h1>
    <h2>GELATO CUP COST</h2>
    <p>
        <?php
        do {
            echo $packs;
            echo ' cup cost P';
            echo $price * $packs;
            echo '<br>';
            $packs--;
        } while ($packs > 0);
        ?>
    </p>
     <h2>OFFERS ON FRIDAY</h2>
    <p><?= $offer ?></p>
</head>
<body>
<h2>Your Order Summary</h2>
<p>Gelato Flavor: <?= $gelatoFlavor ?></p>
<p>Quantity: <?= $quantity ?></p>
<p>Price per cup: ₱ <?= $pricePerCup ?></p>
<p>Subtotal: ₱ <?= $subtotal ?></p>
<p>Tax (20%): ₱ <?= $tax ?></p>
<p><strong>Total: ₱ <?= $total ?></strong></p>
</p>
 <h2>Welcome <?php echo $name; ?></h2>    
    <p>The cost of your gelato is P<?php echo $price; ?> per cups.</p>
</body>
</html>
<?php include 'include/footer.php'; ?>
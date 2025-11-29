<?php
// Shorthand using if else and for loop (foreach) with include 
$name = 'Lee';
$favorites = ["Choco Mint", "Vanilla", "Cookie Biscof"]; 
$flavors = ["Chocolate", "Vanilla", "Strawberry", "Bubble Gum", "Choco Mint", "Cookie Biscof", "Cookies N Cream"];
$title = "Gelato Serano - Flavors";
$flavor = "Choco Mint";
if ($flavor == "Choco Mint") {
    $message = "Choco Mint is available today!";
}  else {
    $message = 'Flavor not available!';
}
include 'include/header.php';
?>

<h1>Gelato Serano</h1>
<h2>Welcome <?= $name ?></h2>

<p>Your favorite gelato flavor is: <?= $favorites[0] ?>.</p>
<p><?= $message ?></p>

<h2>All Available Flavors</h2>
<ul>
<?php foreach ($flavors as $product) { echo "<p>$product</p>";}?>
</ul>

<?php include 'include/footer.php'; ?>

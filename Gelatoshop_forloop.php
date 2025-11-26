<?php

$flavors = ["Chocolate", "Vanilla", "Strawberry", "Bubble Gum", "Choco Mint", "Cookie Biscof", "Cookies N Cream"];
?>
<?php include 'include/header.php'; ?>

<h2>Flavors</h2>

<?php foreach ($flavors as $product) { 
echo "<p>$product</p>";
}
?>
<?php include 'include/footer.php'; ?>

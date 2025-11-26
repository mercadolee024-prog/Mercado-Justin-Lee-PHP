<?php
$packs = 5;
$price = 475;
?>
<!DOCTYPE html>
<html>
<?php include 'include/header.php'; ?>
<body>
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
</body>
</html>
<?php include 'include/footer.php'; ?>



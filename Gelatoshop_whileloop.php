<?php
$counter = 1;
$max = 5;
$price = 95;
?>
<!DOCTYPE html>
<html>
<?php include 'include/header.php'; ?>
<body>
    <h2>GELATO SCOOP PRICES</h2>
    <p>
        <?php
        while ($counter <= $max){
            echo $counter;
            echo ' scoop cost P';
            echo $price * $counter;
            echo '<br>';
            $counter++;
        }
        ?>
    </p>
</body>
</html>
<?php include 'include/footer.php'; ?>


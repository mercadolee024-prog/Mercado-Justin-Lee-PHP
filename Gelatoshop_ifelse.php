<?php
$flavor = "Strawberry";
if ($flavor == "Strawberry") {
    $message = "Strawberry Delight is available today!";
}  else {
    $message = 'Flavor not available!';
}
?>
<!DOCTYPE html>
<html>
<?php include 'include/header.php'; ?>
<body>
    <h2>Strawberry</h2>
    <p><?= $message ?></p>
</body>
</html>
<?php include 'include/footer.php'; ?>

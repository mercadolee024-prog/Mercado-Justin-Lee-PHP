<?php
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
?>
<?php include 'include/header.php'; ?>
<body>


    <h2>OFFERS ON FRIDAY</h2>
    
    <p><?= $offer ?></p>
</body>
<?php include 'include/footer.php'; ?>


<?php
declare(strict_types=1);
$gelatoProducts = [
    "Choco Mint Supreme" => ["price" => 265, "stock" => 12],
    "Strawberry Swirl" => ["price" => 230, "stock" => 8],
    "Vanilla Dream" => ["price" => 210, "stock" => 15],
    "Mango Tango" => ["price" => 240, "stock" => 5],
    "Rocky Road" => ["price" => 280, "stock" => 20],
    "Cookies & Cream" => ["price" => 250, "stock" => 3],
    "Caramel Delight" => ["price" => 270, "stock" => 11]
];
$tax_rate = 12;

function get_reorder_message(int $stock): string {
    return $stock < 10 ? "Yes" : "No";
}
function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}
function get_tax_due(float $price, int $quantity, int $tax_rate = 0): float {
    return ($price * $quantity) * ($tax_rate / 100);
}
include 'include/header.php';
?>
<h1>Gelato Serano - Stock Monitor</h1>
<h2>Current Stock Levels</h2>Z
<table>
    <tr>
        <th>Product Name</th>
        <th>Stock Level</th>
        <th>Reorder?</th>
        <th>Total Value</th>
        <th>Tax Due</th>
    </tr>
    <?php
    foreach ($gelatoProducts as $productName => $data) {
        echo "<tr>";
        echo "<td>$productName</td>"; 
        echo "<td>{$data['stock']}</td>"; 
        echo "<td>" . get_reorder_message($data['stock']) . "</td>"; 
        echo "<td>₱ " . number_format(get_total_value($data['price'], $data['stock']), 2) . "</td>"; 
        echo "<td>₱ " . number_format(get_tax_due($data['price'], $data['stock'], $tax_rate), 2) . "</td>"; 
        echo "</tr>";
    }
    ?>
</table>

<?php
include 'include/footer.php';
?>
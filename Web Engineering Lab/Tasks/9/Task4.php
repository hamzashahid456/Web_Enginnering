<?php
// Declare statement to restrict argument types and return types if they match
    declare(strict_types = 1);
    // Dictionary named candy
    $candy = [
        'Toffee' => ['price' => 3, 'stock' => 12],
        'Mints' => ['price' => 2, 'stock' => 26],
        'Fudge' => ['price' => 4, 'stock' => 8],
    ];
    $tax = 20;
    // Function of get_reorder_message whose argument should be of int type 
    // and his return type is string as restricted
    function get_reorder_message(int $stock): string {
        // If stock is less than 10 it will return 'Yes' otherwise it will return 'No'
        return ($stock < 10) ? 'Yes' : 'No';
    }
    // Function to calculate total price, the price should be of flaot 
    // and quantity should be of int and its return type will be float
    function get_total_value(float $price, int $quantity): float {
        return $price * $quantity;
    }
    // Function of get_tax_due whose price argument will be of flaot 
    // and quantity will be of int and tax will also be of int if passed otherwise tax's value will be default 0 
    // and it's return type is float
    function get_tax_due(float $price, int $quantity, int $tax = 0): float {
        return ($price * $quantity) * ($tax / 100);
    }
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Functions Example</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>The Candy Store</h1>
        <h2>Stock Control</h2>
        <table>
            <tr>
            <th>Product</th><th>Stock</th><th>Re-order</th><th>Total value</th><th>Tax
            due</th>
            </tr>
            <!-- looping through candy dictionary where each key will be in candy and it's value will be in data variable -->
            <?php foreach ($candy as $product => $data) { ?>
                <tr>
                    <!-- Displaying data by calling funcitons -->
                <td><?= $product ?></td>
                <td><?= $data['stock'] ?></td>
                <td><?= get_reorder_message($data['stock']) ?></td>
                <td>$<?= get_total_value($data['price'], $data['stock']) ?></td>
                <td>$<?= get_tax_due($data['price'], $data['stock'], $tax) ?></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>
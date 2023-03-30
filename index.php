<!-- 
    Name: [Sam Krisko]
    South Hills Username: [skrisko08]
-->
<?php
// it says dont hard-code, before that it says dont display at all, im not adding name to greeting due to confusion, prob overthinking it
$name = 'Sam';
$greeting = 'Welcome to Our Website!';

// multidimensional array for menu and array for cart
$menu_items = [
    ['name' => 'Italian', 'price' =>  11.99, 'stock' => 54],
    ['name' => 'Meatball', 'price' => 14.99, 'stock' => 65],
    ['name' => 'Cheesesteak', 'price' => 13.99, 'stock' => 60]
];

$cart = [
    ['name' => 'Italian', 'amount' => 2, 'price' => 11.99],
    ['name' => 'Meatball', 'amount' => 1, 'price' => 14.99]
];

// calculations
$sub_total = 0.0;
for ($a = 0; $a < count($cart); $a++) {
    $sub_total += $cart[$a]['amount'] * $cart[$a]['price'];
}
$tax_rate = 0.06;
$tax = $sub_total * $tax_rate;
$total = $sub_total + $tax;
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Subs 'N' Stuff </title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>Subs 'N' Stuff</h1>

        <p id="one"><?php echo $greeting; ?></p>

        <h4> Menu: </h4>
        <!--display menu--> 
        <p id="two"> <?php echo $menu_items[0]['name'];?> -
            <?php echo $menu_items[0]['price'];?> -
            <?php echo $menu_items[0]['stock']; echo ' in stock';?></p>
        <p id ="three"> <?php echo $menu_items[1]['name'];?> -
            <?php echo $menu_items[1]['price'];?> -
            <?php echo $menu_items[1]['stock']; echo ' in stock';?></p>   
        <p id = "four"> <?php echo $menu_items[2]['name'];?> -
            <?php echo $menu_items[2]['price'];?> -
            <?php echo $menu_items[2]['stock']; echo ' in stock';?></p>
        <!--display cart-->
        <h2>Cart(3)</h2>
        <h3>Your Items:</h3>
        <p class="cart_item"> <?= $cart[0]['name']; ?> -
            <?= 'Quantity: '; echo $cart[0]['amount']; ?> </p>
        <p class="cart_item"> <?= $cart[1]['name']; ?> -
            <?= 'Quantity: '; echo $cart[1]['amount']; ?> </p>
        <p class = "money"> <?= 'Subtotal: $'; echo $sub_total; ?> </p>
        <p class = "money"> <?= 'Tax Rate: $'; echo $tax_rate; ?> </p>  
        <p class = "money"> <?= 'Total: $'; echo number_format((float)$total, 2, '.', '');?> </p>
        <footer><?php echo 'Call now: (814) 123-4321'; ?><br>
        <?php echo 'Address: 1600 Pennsylvania Ave.';?> <br>
        <?php echo 'Hours:'?><br>
        <?php echo '10:00 AM - 10:00 PM 7 days a week'?></footer> 
    </body>
</html>    
<?php
/* A store is having a sale. They are giving 10% off purchases of $10 or lower 
 * and 20% off purchases of greater than $10. Write a short program that displays
 * the discount (10% or 20%) and the final price.
 * – Use a form to capture the item’s cost, output the discount and the discounted
 *   price (and anything else you want). Run as many cases necessary to test the
 *   program.
 */

// Get the user data from the form
$item_cost = $_POST["list_price"];

//$item_cost = 100;

// Calculate the discount
if ($item_cost < 11) {
	$discount_percent = 10;
}
else {
	$discount_percent = 20;
}

$discount_amount = $item_cost * $discount_percent * 0.01;
$discount_price = $item_cost - $discount_amount;

// Apply currency formatting to the dollar amounts for output
$item_cost_formatted = "$".number_format($item_cost, 2);
$discount_percent_formatted = $discount_percent."%";
$discount_amount_formatted = "$".number_format($discount_amount, 2);
$discount_price_formatted = "$".number_format($discount_price, 2);

// Output the results

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Discount Table</title>
	<link rel="stylesheet" href="Exercises.css">
</head>

<body>
	<h1 id="dataContent">Product Discount Calculator</h1>
    <div id="dataContent">
        <label>Item Cost:</label>
        <span><?php echo $item_cost_formatted; ?></span><br />

        <label>Discount Percent:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br />

        <label>Discount Amount:</label>
        <span><?php echo $discount_amount_formatted; ?></span><br />

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br />

    </div>
</body>
</html>
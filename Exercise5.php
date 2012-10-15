<?php
/* A store is having a sale. They are giving 10% off purchases of $10 or lower 
 * and 20% off purchases of greater than $10. Write a short program that displays
 * the discount (10% or 20%) and the final price.
 * – Use a variable for the item’s cost, run as many cases necessary to test 
 *   the program.
 */

$item_cost = 0;

/* HTML tags, because I'm too lazy (at the moment)to create a separate file.  And it's fun.  
 * And using tables will make my classmates reenact the face melting scene in Raider's of 
 * the Lost Ark */

$br = "<br />";
$body = "<body>";
$endbody = "</body>";
$table = "<table border='1'>";
$endtable = "</table>";
$tr = "<tr>";
$endtr = "</tr>";
$td = "<td align='right' style='padding: 5px;'>";
$endtd = "</td>";
$strong = "<strong>";
$endstrong = "</strong>";
$fontformat = "<style> body {font-family: Verdana, Arial, Helvetica, sans-serif;}</style>";

print $fontformat.$body;
print $strong."Discount Table".$endstrong.$br.$br;
print $table;

print $tr;
print $td."Item Cost".$endtd.$td."Discount".$endtd.$td."Discount Amount".$endtd.$td."Final Price".$endtd;
print $endtr;

for ($item_cost=1; $item_cost<101; $item_cost++) {

	print $tr;
	$item_cost_formatted = "$".number_format($item_cost, 2);

	
	if ($item_cost < 11) {
		$discount_percent = 10;
	}
	else {
		$discount_percent = 20;
	}

	/* Calculate discount and format it */
	$discount_amount = $item_cost * $discount_percent * 0.01;
	$discount_amount_formatted = "$".number_format($discount_amount, 2);
	$discounted_price = $item_cost - $discount_amount;
	$discounted_price_formatted = "$".number_format($discounted_price, 2);

	print $td.$item_cost_formatted.$endtd;
	print $td.$discount_percent."%".$endtd;
	print $td.$discount_amount_formatted.$endtd;
	print $td.$discounted_price_formatted.$endtd;
	
	print $endtr;
}


print $endtable.$endbody;
?>
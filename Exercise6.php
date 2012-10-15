<?php

/* Write a short program to print a multiplication or times table. 
 * Your program should output something like:
 *	–Here is the 5’s table:
 *	–5 x 1 = 5
 *	–5 x 2 = 10
 *	–…
 *	–5 x 10 = 50
 */

$times = 5;

/* HTML tags, because I'm too lazy (at the moment) to create a separate file.  And it's fun. 
 * And using tables will make my classmates reenact the face melting scene in Raider's of the 
 * Lost Ark */

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
print $strong.$times." Times Table".$endstrong.$br.$br;
print $table;

for ($i=0; $i<11; $i++) {
	$value = $times * $i;
	print $tr.$td;

	print $times." x ".$i." = ";
	if ($value < 10) {		// Tweak alignment because I feel OCD today
		print "&nbsp;";
	}
	print $value;
	print $endtd.$endtr;
}

print $endtable.$endbody;
?>
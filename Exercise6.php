<?php

/* Write a short program to print a multiplication or times table. 
 * Your program should output something like:
 *	–Here is the 5’s table:
 *	–5 x 1 = 5
 *	–5 x 2 = 10
 *	–…
 *	–5 x 10 = 50
 * Use a form to capture the number whose times table you will display.
 */

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Multiplication Table</title>
	<link rel="stylesheet" href="Exercises.css">
</head>

<body>
	<h1 id="dataContent">Multiplication Table</h1>
	<table>
	<?php
		$times = $_POST["times"];
		
		$tr = "<tr>";
		$endtr = "</tr>";
		$td = "<td align='right' style='padding: 5px;'>";
		$endtd = "</td>";
	
		for ($i=0; $i<11; $i++) {
			$value = $times * $i;
			print $tr.$td;

			print $times." x ".$i." = ";
			if ($value < 10) {
				print "&nbsp;";
			}

			print $value;
			print $endtd.$endtr;
		}
	?>
	</table>
    </div>

    </body>
</html>

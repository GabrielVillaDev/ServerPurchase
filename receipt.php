<!DOCTYPE html>
<html>
<head>
<Title>Purchase/Receipt Server</Title>
<meta charset="UTF-8">
<link href="styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
<!--  author: Your Name -->
<body>
<div class="receipt">
<h3>Receipt</h3>
	
<?php
$howMany = intVal ( ($_POST ["quantity"]) );
$index = strrpos ( $_POST ["size"], ' ' );
$size = substr ( $_POST ['size'], 0, $index );
$cost = 1.0 * (substr ( $_POST ['size'], $index ));
date_default_timezone_set('America/Phoenix');
$date = date ( "d-F-Y" );
echo $date . "<br><br>";

// TODO: Complete the receipt to replace the purchase form.
// The following three echos represent a test that we can
// access the values of some of the the input fields.
echo "How many: <b>" . $howMany . "</b><br>";
echo "Size: <b>" .$size . "</b><br>";
echo "Cost: <b>" . ($cost * $howMany) . "</b><br>";
?>

</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP Dice Roll</title>
</head>
<body>
	<?php
$roll = rand(1, 6);

echo 'You rolled a ' . $roll;

// if ($roll == 6 || $roll == 5) {
// 	echo " </br> You Win";
// }

if ($roll > 4) {
	echo "<br> you win";
} else {
	echo "<br> sorry you are not win, try roll dice again";
}

echo " </br> Thank for playing";

?>
</body>
</html>
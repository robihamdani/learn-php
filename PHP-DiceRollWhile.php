<!DOCTYPE html>
<html>
<head>
	<title>Learn While with dice</title>
</head>
<body>
	<?php
/*
while ($roll != 10) {
$roll = rand(1, 6);
echo "<p>You rolled a " . $roll . '</p>';

if ($roll == 6) {
echo "<p> You Win</p>";
} else {
echo "<p>Sorry, you didn\'t win, better luck next time </p>";
}
}
 */

// $roll = 0;
// while ($roll != 6) {
// 	$roll = rand(1, 6);
// 	echo '<p>You rolled a ' . $roll . '</p>';
// 	if ($roll == 6) {
// 		echo '<p>You win!</p>';
// 	} else {
// 		echo '<p>Sorry, you didn\'t win, better luck
// next time!</p>';
// 	}
// }

$roll = 0;
while ($roll != 6) {
	$roll = rand(1, 6);
	echo '<p>You rolled a ' . $roll . '</p>';
	if ($roll == 6) {
		echo '<p>You Win </p>';
	} else {
		echo '<p>Sorry, you didn\'t win, better luck
next time!</p>';
	}
}
?>
</body>
</html>
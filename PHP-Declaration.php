<!DOCTYPE html>
<html>
<head>
	<title>Learn Declaration</title>
</head>
<body>
	<p>
		<?php
$var1 = 'PHP'; // assigns a value of 'PHP' to $var1
$var2 = 5; // assigns a value of 5 to $var2
$var3 = $var2 + 1; // assigns a value of 6 to $var3
$var2 = $var1; // assigns a value of 'PHP' to $var2
$var4 = rand(1, 12); // assigns a value to $var4 using the rand() function
echo $var1; // outputs 'PHP'
echo "<br>";
echo $var2; // outputs 'PHP'
echo "<br>";
echo $var3; // outputs '6'
echo "<br>";
echo $var4; // outputs the random number generated above
echo "<br>";
echo $var1 . ' rules!'; // outputs 'PHP rules!'
echo "<br>";
echo '$var1 rules!'; // outputs '$var1 rules!'
echo "<br>";
echo "$var1 rules!"// outputs 'PHP rules!
?>
	</p>
</body>
</html>
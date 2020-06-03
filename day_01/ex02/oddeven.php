#!/usr/bin/php
<?php
$i = 0;
while ($i < 5)
{
	print "Enter a number: ";
	$num = trim(fgets(STDIN));
	if (feof(STDIN))
	{
		print("$num\n");
		break ;
	}
 	if (is_numeric($num))
 	{
 		if ($num % 2)
 			print "The number $num is odd\n";
  		else
 			print "The number $num is even\n";
 	}
 	else
 		print "'$num' is not a number\n";
}
?>
#!/usr/bin/php
<?php
	if ($argc == 4)
	{
		$n1 = (int)trim($argv[1]);
		$p = trim($argv[2]);
		$n2 = (int)trim($argv[3]);
		if ($p == '+')
			echo $n1 + $n2, "\n";
		if ($p == '-')
			echo $n1 - $n2, "\n";
		if ($p == '*')
			echo $n1 * $n2, "\n";
		if ($p == '/')
			echo $n1 / $n2, "\n";
		if ($p == '%')
			echo $n1 % $n2, "\n";
	}
?>
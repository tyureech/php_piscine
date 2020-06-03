#!/usr/bin/php
<?php
	$j = 0;
	for ($i = 2; $i < $argc; $i++)
		if (strstr($argv[$i], $argv[1]))
			$j = $i;
	if ($j == 0)
		exit(1);
	$arrow = explode(':', $argv[$j]);
	print($arrow[1]."\n");
?>
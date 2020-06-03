#!/usr/bin/php
<?php
if ($argc > 1)
{
	$array = explode(" ", $argv[1]);
	$buf = array_diff($array, array(""));
	$len = count($buf);
	for($i = 1; $i < $len; $i++)
		print ($buf[$i]." ");
	print($buf[0]."\n");
}
?>
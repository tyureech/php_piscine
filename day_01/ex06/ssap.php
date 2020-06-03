#!/usr/bin/php
<?php
	$array = array();
	if ($argc > 1)
	{
		for ($i = 1; $i < $argc; $i++)
		{
			$buf = array_merge($array, explode(' ', $argv[$i]));
			$array = $buf;
		}
		$array = array_diff($buf, array(''));
		sort($array);
		$len = count($array);
		for ($i = 0; $i < $len; $i++)
			echo $array[$i], "\n";
	}
?>
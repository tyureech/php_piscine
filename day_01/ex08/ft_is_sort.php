#!/usr/bin/php
<?php
function ft_is_sort($arr)
{
	$diff = $arr;
	sort($arr);
	$len = count($arr);
	for($i = 0; $i < $len; $i++)
		{
			if ($diff[$i] != $arr[$i])
				return 0;
		}
	return 1;
}
?>
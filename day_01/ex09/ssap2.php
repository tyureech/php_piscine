#!/usr/bin/php
<?php
	function my_sort($array)
	{
		$array_A_z = preg_replace('/([^A-Za-z]).+/', '', $array);
  		$array_A_z = array_diff($array_A_z, array(''));
  		sort($array_A_z, SORT_NATURAL | SORT_FLAG_CASE);
  		$array_num = preg_replace('/([^0-9]).+/', '', $array);
  		$array_num = array_diff($array_num, array(''));
 		sort($array_num, SORT_STRING);
 		$array_ost = array_diff($array, $array_A_z, $array_num);
 		sort($array_ost);
 		$array_res = array_merge($array_A_z, $array_num, $array_ost);
		return $array_res;
	}

	$array = array();
	if ($argc > 1)
	{
		for ($i = 1; $i < $argc; $i++)
		{
			$buf = array_merge($array, explode(' ', $argv[$i]));
			$array = $buf;
		}
		$array = array_diff($buf, array(''));
		$sort_array = my_sort($array);
		$len = count($sort_array);
		for ($i = 0; $i < $len; $i++)
			echo $sort_array[$i], "\n";
	}
?>
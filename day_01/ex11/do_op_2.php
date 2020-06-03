#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		$arr = preg_replace('/\s+/', "", $argv[1]);
		$arr_num = preg_split("/[^0-9]/", $arr);
		$len = count($arr_num);
		if ($len != 2)
		{
			print("Syntax Error\n");
			exit(1);
		}
		if (count(array_diff($arr_num, array(''))) != 2)
		{
			print("Syntax Error\n");
        	exit(1);
		}
		if (strstr($arr, "+"))
		{
			echo (int)$arr_num[0] + (int)$arr_num[1], "\n";
			exit (1);
		}
		if (strstr($arr, "-"))
		{
			echo (int)$arr_num[0] - (int)$arr_num[1], "\n";
			exit (1);
		}
		if (strstr($arr, "*"))
		{
			echo (int)$arr_num[0] * (int)$arr_num[1], "\n";
			exit (1);
		}
		if (strstr($arr, "/"))
		{
			echo (int)$arr_num[0] / (int)$arr_num[1], "\n";
			exit (1);
		}
		if (strstr($arr, "%"))
		{
			echo (int)$arr_num[0] % (int)$arr_num[1], "\n";
			exit (1);
		}
		print("11Syntax Error\n");
	}
?>
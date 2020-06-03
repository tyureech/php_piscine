#!/usr/bin/php
<?php

function ft_split($str)
{
	$arr = explode(' ', $str);
	$not_space = array_diff($arr, array(''));
	sort($not_space);
	return $not_space;
}
?>
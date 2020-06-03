#!/usr/bin/php
<?php
$d = getdate("Mardi 12 Novembre 2013 12:02:21"); // использовано текущее время
foreach ( $d as $key => $val )
echo "$key = $val<br>";
echo "<hr>Сегодня: $d[mday].$d[mon].$d[year]";
?>
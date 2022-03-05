#! /usr/bin/php 

<?php 
	if ($argc <= 2)
		exit();
	$av = array();
	for ($i = 1; $i < $argc; $i++)
	{
		if (strstr($argv[$i], " "))
		{
			$res = array_filter(explode(" ", $argv[$i]));
			foreach ($res as $s)
				array_push($av, $s);
		}
		else 
			array_push($av, $argv[$i]);
	}
	print_r($av);
	$fin = array();
	$res = array();
	foreach($av as $a)
		if (ctype_alpha($a))
			array_push($res, $a);
	sort($res);
	foreach ($res as $s)
		array_push($fin, $s);
	$res1 = array();
	foreach($av as $a)
		if (ctype_digit($a))
			array_push($res1, $a);
	sort($res1);
	foreach ($res1 as $s)
		array_push($fin, $s);
	$res2 = array();
	foreach ($av as $s)
		if (!ctype_alnum($s))
			array_push($res2, $s);
	sort($res2);
	foreach ($res2 as $s)
		array_push($fin, $s);
	print_r($fin);
?>

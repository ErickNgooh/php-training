#! /usr/bin/php 

<?php 
	if ($argc <= 2)
		exit();
	$av = array();
	unset($argv[0]);
	array_values($argv);
	foreach ($argv as $a)
	{
		$tab = array_filter(explode(" ", $a));
		$av = array_merge($tab, $av);	
	}
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
	foreach ($fin as $f)
		print($f."\n");
?>

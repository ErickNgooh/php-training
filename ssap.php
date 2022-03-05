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
	sort($av);
	foreach ($av as $s)
		print($s."\n");
?>

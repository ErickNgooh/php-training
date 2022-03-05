#! /usr/bin/php 

<?php 
	if ($argc != 2)
		exit();
	$res = "";
	$str = array_filter(explode(" ", $argv[1]));
	foreach ($str as $s)
		if (strcmp($s, " "))
			$res = $res.$s." ";	
	$res = trim($res);
	$res = $res."\n";
	print($res);	
?>

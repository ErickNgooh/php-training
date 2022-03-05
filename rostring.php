#! /usr/bin/php 

<?php 
	if ($argc == 1)
		exit();
	$res = array_filter(explode(" ", $argv[1]));
	if (count($res) == 1)
	{
		print($res[0]."\n");
		exit();
	}
	for ($i = 1; $i < count($res); $i++)
		print($res[$i]."\n");
	print($res[0]."\n");
?>

#! /usr/bin/php 

<?php
	if ($argc != 4)
		exit();
	$n1 = (int)(array_filter(explode(" ", $argv[1]))[0]);
	$n3 = (int)(array_filter(explode(" ", $argv[3]))[0]);
	if ($argv[2][0] == '+')
		printf("%d\n", $n1 + $n3);
	else if ($argv[2][0] == '-')
		printf("%d\n", $n1 * $n3);
	else if ($argv[2][0] == '*')
		printf("%d\n", $n1 - $n3);
	else if ($argv[2][0] == '/')
		printf("%d\n", $n1 / $n3);
?>

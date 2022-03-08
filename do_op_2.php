#! /usr/bin/php

<?php 
	if ($argc <= 1)
		exit (printf("Incorrect Parametres\n"));
	if (strstr($argv[1], " "))
		$av = array_filter(explode(" ", $argv[1]));
	else if (strstr($argv[1], "/"))
		$av = array_filter(preg_split("@(?<=/)@", $argv[1]));
	else if (strstr($argv[1], "*"))
		$av = array_filter(preg_split("[*]", $argv[1]));
	else if (strstr($argv[1], "+"))
		$av = array_filter(preg_split("[+]", $argv[1]));
	else if (strstr($argv[1], "-"))
		$av = array_filter(preg_split("[-]", $argv[1]));
	print_r($av);
	if (!is_numeric($av[0]) || !is_numeric($av[2]))
		exit ("Syntax Error\n");
	if (is_numeric($av[0]))
		$n1 = (int)$av[0];
	if (is_numeric($av[2]))
		$n2 = (int)$av[2];
	if ($av[1] == "/")
		printf("%d\n", $n1 / $n2);	
	else if ($av[1] == "*")
		printf("%d\n", $n1 * $n2);	
	else if ($av[1] == "+")
		printf("%d\n", $n1 + $n2);	
	else if ($av[1] == "-")
		printf("%d\n", $n1 - $n2);	
?>

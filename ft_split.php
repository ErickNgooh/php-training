#!/usr/bin/php

<?PHP 
function ft_split($str)
{ 
	if (!$str)
		return ;
	$tab = array();
	$res = explode(" ", $str);
	foreach($res as $r)
	{	
		if ($r && strcmp(" ", $r) != 0)
			array_push($tab, $r);
	}
	return ($tab);
}
?>

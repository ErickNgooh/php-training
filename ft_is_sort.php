#! /usr/bin/php 

<?php 
	function ft_is_sort($str)
	{
		$ref = $str;
		sort($ref);
		for ($i = 0; $i < count($ref); $i++)
			if (strcmp($ref[$i], $str[$i]))
				return (false);
		return (true);
	}
?>

#! /usr/bin/php
<?PHP
$stdin = fopen("php://stdin", "r");
$res = 1;
while ($res)
{
	print("Entrer un numero: ");
	$res = fgets($stdin);
	$res = trim($res, "\n");
	if (!is_numeric($res))
		print("$res n'est pas un chifrre\n");
	else if ($res % 2 == 0)
		print("$res est paire\n");
	else if ($res % 2 != 0)
		print("$res est impaire\n");
}
fclose($stdin);
?>

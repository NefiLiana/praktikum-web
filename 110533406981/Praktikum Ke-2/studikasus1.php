<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitions//EN">
<html>
<head>
	<title>Studi Kasus 1</title>
</head>

<body>
<?php
$jam = 7;

if ($jam >17 and $jam<=24)
{
	echo "Sekaran Jam ". $jam. "WIB";
	echo "<br/>";
	echo "Greeting :";
	echo "Selamat Malam";
}
elseif ($jam>12 and $jam<=17)
{
	echo "Sekaran Jam ". $jam. "WIB";
	echo "<br/>";
	echo "Greeting :";
	echo "Selamat Siang";
}
elseif ($jam >=1 and $jam<=12)
{
	echo "Sekaran Jam ". $jam. "WIB";
	echo "<br/>";
	echo "Greeting :";
	echo "Selamat Pagi";
}

?>
</body>
</html>
	
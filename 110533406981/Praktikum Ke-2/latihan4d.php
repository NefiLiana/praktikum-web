<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitions//EN">
<html>
<head>
	<title>Seleksi if-Elseif</title>
</head>

<body>
<?php

$i = 0;

if ($i == 0){
	echo 'i equals 0';
}elseif ($i == 1){
	echo 'i equals 1';
}elseif($i == 2) {
	echo 'i equals 2';
}

//ekuivalen dengan pendekatan switch
switch ($i){
case 0:
	echo 'i equals 0';
	break;
case 1:
	echo 'i equals 1';
	break;
case 2:
	echo 'i equals 2';
	break;
}

?>

</body>
</html>
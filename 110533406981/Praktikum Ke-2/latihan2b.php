<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitions//EN">
<html>
<head>
	<title>Demo Variable</title>
</head>

<body>
<?php
$bil = 3;
var_dump($bil);
//output: int (3)
echo '<br/>';

$var = " ";
var_dump($var);
//output : String (0) " "
echo '<br/>';

$var = null;
var_dump ($var);
//output :NULL

?>

</body>
</html>
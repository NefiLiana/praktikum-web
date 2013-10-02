<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitions//EN">
<html>
<head>
	<title>studi kasus</title>
</head>

<body>
<p> studi kasus 2-->Meng-generate Table  <br/><br/></p> 
<table border= 1>
<?php
$a = 4;
$b = 3;
$c = 1;

for ($i = 1 ; $i <= $b; $i++){
?>

<tr>

<?php
for ($j = 1; $j <= $a ; $j++){
?>
<td width = "50px" height = "50px" align = "center">

	<?php
	echo $c++;
	?>
	</td>
		<?php
		}
		?>
</tr>
<?php
}
?>
</table>
</body>
</html>
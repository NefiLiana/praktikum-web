<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitions//EN">

<?php

function table ($sel, $kol){ ?>
	<table border =1>
<?php
$k = 1;
	while ($k <= $sel)
{ ?>
	<tr>
	
	<?php
	$l = 0;
	while ($l < $kol) {
	if ($k <= $sel){
	?>
		<td width = "50px" height = "50px" align = "center"><?php echo $k; ?> </td>
		<?php
		$k++;}
		$l++;}
		?>
	</tr>
<?php
}
?>
	</table>
<?php
}
?>

<html>
<head>
	<title>Tugas Praktikum 2</title>
</head>

<body>
<p> Meng-generate Table secara fleksibel <br/><br/></p> 
<?php
echo '<br/><br/>';
echo table(17,7)
?>
</body>
</html>
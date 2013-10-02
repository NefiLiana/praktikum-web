<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitions//EN">
<html>
<head>
	<title>Argumen fungsi atau prosedur</title>
</head>

<body>
<?php
/**
*mencetak string
*$teks nilai string
*$bold adalah argumen opsional
*/

function print_teks ($teks, $bold = true){
	echo $bold ? '<b>' .$teks. '</b>' : $teks;
}

print_teks ('Indonesiaku');
//mencetak dengan huruf tebal

echo '</br>';

print_teks ('Indonesiaku',false);
//mencetak dengan huruf reguler
?>

</body>
</html>
<! DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org//1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Data Seleksi</title>
</head>

<body>
<form action="<?php $_SERVER ['PHP_SELF'];?>" method="post">
Pekerjaan
<input type="checkbox" name="Pekerjaan[]" value ="Mahasiswa" CHECKED/> Mahasiswa
<input type="checkbox" name="Pekerjaan[]" value ="PNS"/> PNS
<input type="checkbox" name="Pekerjaan[]" value ="Polisi"/> Polisi
<input type="checkbox" name="Pekerjaan[]" value ="TNI"/> TNI <br />

<input type="submit" value="ok" />
</form>

<?php
// Ekstrasi nilai
if(isset($_POST ['Pekerjaan']))  {
foreach ($_POST ['Pekerjaan'] as $key => $val){
echo $key . '-> ' .$val .'<br />';
}
}
?>
</body>
</html>
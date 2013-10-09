<! DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org//1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Penanganan Seleksi</title>
</head>

<body>
<form action="<?php $_SERVER ['PHP_SELF'];?>" method="post">
Cita-cita
<select name="Cita-cita">
<option value="Guru" CHECKED/>Guru
<option value="Dokter">Dokter
<option value="Polisi">Polisi
<option value="Pilot">Pilot
<option value="Penulis">Penulis
</select><br/>

<input type="submit" value="ok" />
</form>

<?php
if(isset($_POST ['job']))  {
echo $_POST ['job'];
}
?>
</body>
</html>
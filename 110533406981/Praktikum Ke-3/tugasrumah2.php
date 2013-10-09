<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>

<head>

<title>Login Form by_Agus</title>


</head>

<body background="image.JPG" onLoad="document.form1.user.focus();">

<form name="form1" method="post" action="login.php">
<div width="400" height="400">

<div>

<div align="center"><font face="Arial" color="#FFFFFF" size="5"><strong><br>User Name :</strong>

<br>

<font face="Arial" color="#FFFFFF" size="5"><input type="text" name="user" size="35" value="" style="background-color:#FFFFFF">

<br>

<br>

<strong color="#FFFFF">Password : </strong>

<br>

<input type="password" name="pass" size="35" style="background-color:#FFFFFF">

<br>

<br>

</div>

</div>

<br>

<div align="center">

<input type="submit" name="submit" value=" L O G I N " onClick="check()">

</div>

<div id="footer" align="left"><br>


</div>

</div>
</div>
</form>

<script type="text/javascript">

function error1()
{
alert('Masukkan User Name dan Password Terlebih Dahulu ');
}

function check()
{
if(form1.pass.value == "" || form1.user.value=="")
{
error1();
}
}
</script>

</body>

</html>

Simpan kode program di atas dengan nama login.html

Kemudian buat kode program phpnya:
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Form Administrator</title>

</head>

<body>

<?php

if(($_POST['user']=='Agus') AND ($_POST['pass']=='Agus')) {

echo '<br><br><center>Selamat Datang di Halaman ini USER ' . $_POST['user'];

}

else {

echo "<br><br><br><body text='red'><strong><center>INVALID LOGIN<br><br><a href='login.html'><h4>Kembali ke Login</h4></a></center></strong></body>";

}

?>

</body>

</html>
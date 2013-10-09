<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
   <title>Login Form </title>
</head>

<body onLoad="document.form1.user.focus();">
<form name="form1" action="<?php $_SERVER['PHP_SELF'];?>"  method="post" onSubmit="return check(this)">
<div id="apDiv1">
  <div id="header">
    <br>
  </div>
  <div>
    <div align="center"><strong><br> Name :</strong>   
    <br>
    <input type="text" name="user" size="30" value="" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    <br>
    <strong>Password : </strong> 
    <br>
    <input type="password" name="pass" size="3o" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    <br>
    </div>
  </div>
  <br>
    <div id="apDiv3">
     <input type="submit" name="submit" value=" ENTER " >
    </div>
     <div id="footer" align="Center"><br>
    </div>
  </div>
<style type="text/css">
#apDiv1 {
    position:absolute;
    width:373px;
    height:330px;
    z-index:1;
    left: 441px;
    top: 62px;
    background-color: #FFFFFF;
    border: 2px solid Blue;
}
#apDiv3 {
    position:absolute;
    width:80px;
    height:25px;
    z-index:2;
    left: 289px;
    top: 274px;
}
.style3 {
    font-size: 10px;
    font-weight: bold;
}
#apDiv2 {
    position:absolute;
    width:412px;
    height:115px;
    z-index:2;
    top: 0px;
    left: 2px;
}
#header{
    width:373px;
    height:98px;
    background-image: url(headerlogin.JPG);
}
#footer{
    width:373px;
    height:40px;
    background-image: url(footer.JPG);
}
body {
    background-color: #99CCCC;
}
#apDiv4 {
    position:absolute;
    width:409px;
    height:221px;
    z-index:2;
    left: 426px;
    top: 411px;
}
</style>
</form>
<div id="apDiv4">
<?php
if(is_string($_POST['user']) AND ($_POST['pass']))
{   
    if (($_POST['user']=='Nefi')AND($_POST['pass']=='rahasia'))
    {
        echo 'Sukses, Anda berhasil login :'.$_POST['user'];
        
    }
    else
    {
        echo "<script>alert ('Username atau Password Anda Salah');</script>";
    }
   
}

?>
</div>

<script type="text/javascript">
function check()
{
    if(form1.user.value == "")
    {
        alert('Masukkan Name Terlebih Dahulu ');
        document.form1.user.focus();
        return false;
    }
    else if(form1.pass.value=="")
    {   
        alert('Masukkan Password Terlebih Dahulu ');
        document.form1.pass.focus();
        return false;
    }   
return true;
}

function Huruf(evt)
{
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
        alert('Masukkan User Name dan Password Harus Berupa Huruf ');
        return false;
    }
    return true;
}
</script>
</body>
</html>

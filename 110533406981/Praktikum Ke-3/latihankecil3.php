<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitions//EN">
<html>
<head>
	<title>prefill Data radio Button</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		jenis kelamin <br/>
		<input type="radio" name="sex" value="Pria" checked
		<?php
		if ($_POST ['sex'] == 'pria'){
			echo 'checked="checked"';
		}
		?>
		/>Pria
		<input type="radio" name="sex" value="Wanita" 
		<?php
		if ($_POST['sex'] == 'Wanita'){
		echo 'checked="checked"';
		}
		?>
		/> Wanita <br/>
		
		<input type="submit" value="ok"/>
		</form>
<?php
if (isset($_POST['sex'])){
	echo $_POST ['sex'];
}
?>

</body>
</html>
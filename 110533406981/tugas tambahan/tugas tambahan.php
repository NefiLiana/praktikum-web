<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
        <title>KALKULATOR</title>

</head>

<body>
<form action = "<?php $_SERVER['PHP_SELF'];?>" method = "get">

        <input type = 'number' name = 'a' value = "<?php echo isset ($_GET['a']) ? $_GET['a'] : ''; ?>">
        <select name = "operator">
        <option value = "+" <?php 
        if (@$_GET['operator'] == '+') {
        echo 'selected = "selected"';
        }
        ?>> +
        <option value = "-" <?php 
        if (@$_GET['operator'] == '-') {
        echo 'selected = "selected"';
        }
        ?>> -
        <option value = "/"
        <?php 
        if (@$_GET['operator'] == '/') {
        echo 'selected = "selected"';
        }
        ?>> /
        <option value = "*"
        <?php 
        if (@$_GET['operator'] == '*') {
        echo 'selected = "selected"';
        }
        ?>> *
        </select>

        <input type = 'number' name = 'b' value = "<?php echo isset ($_GET['b']) ? $_GET['b'] : ''; ?>" >
        <input type = "submit" value = "="/>

<?php 
$a = $_GET['a'];
$b = $_GET['b'];
?>
<?php
if (isset ($_GET['operator'])) {
        if (@$_GET['operator'] == '+') {
        $c = $a + $b;
        }
        elseif (@$_GET['operator'] == '-') {
        $c = $a - $b;
        }
        elseif (@$_GET['operator'] == '/') {
        $c = $a / $b;
        }
        elseif (@$_GET['operator'] == '*') {
        $c = $a * $b;
        }
        }?>

        <input type = 'text' name = 'b' value = '<?php echo $c;?>'>

<?php        
if (isset($_GET["a"]) && isset($_GET["b"]) && ($_GET["a"] =="") && ($_GET["b"] == "")){
?><script language = "JavaScript">
alert("belum ada angka yang akan dioperasikan")
document.location='tugas_tambahan.php'</script><?php
} ?>

</form>
</body>
</html>
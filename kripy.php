 <!DOCTYPE html>
<html>
<body>
 <?php
$x = 4;
$y = 4;
 
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}
 
addition();
echo $z;
?> 
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

</body>
</html> 
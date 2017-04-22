 <!DOCTYPE html>
<html>
<body>
 <?php
$x = 12;
$y = 12;
 
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}
 
addition();
echo $z;
?> 

</body>
</html> 

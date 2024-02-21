<?php
require 'config.php';
?>
<html>
<title> My PHP</title> 
<form action="lab1/lab1.php">
<table border=0><tr><td>Login:</td><td><input type='text' name='ULogin'></td><tr>
<tr><td>Пароль:</td><td><input type='password' name='Passw'></td><tr>
<tr><td><input type='submit' value='Go' name='Send'></td><td>&nbsp</td></td></tr> </table>
</form>
<?php
$zm=10;
echo "<h2>Програмування мовою PHP</h2>
<h3>Перелік лабораторних робіт Дутчак Марії</h3>
<h4>Варіант №1</h4>
<div class=list>
<a href=lab1_dutchak/lab1.php?zm=$zm>lab1.php</a><br>
<a href=lab3_dutchak/lab3.php?zm=".$zm.">lab3.php</a><br>
<a href=labJS_dutchak/labJS.php>PHP+JS</a><br>
<a href=labDB_dutchak/labDB.php>PHP+DB</a><br>";
echo "</div>";
echo "zm=$zm <br>";
echo "Zm=$Zm <br>";
echo 'zm=$zm <br>';

?>

</html>

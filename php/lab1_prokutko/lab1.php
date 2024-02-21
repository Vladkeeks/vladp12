<?php
require '../config.php';
if (!empty($_GET["zm"])) {echo "Значення переданої змінної zm=".$_GET["zm"];} else {echo "zminna zm not fount";}
$zm=$_GET["zm"];
if (!empty($_GET["ULogin"])) {echo "<br>Значення переданої змінної ULogin ".$_GET["ULogin"];} else {echo "<br>zminna ULogin not fount";}
$ULogin=$_GET["ULogin"];
 ?>

 <html>
<head>
    <title>Lab 1</title>
</head>
<body>
    <h1>Lab 1: PHP Operators</h1>
    <ul>
        <li><a href="examples/example_1_1_1.php">Example 1.1.1: PHP Style Descriptors</a></li>
        <li><a href="examples/example_1_1_2.php">Example 1.1.2: PHP Operators</a></li>
        <li><a href="examples/example_1_1_3.php">Example 1.1.3: Spaces</a></li>
        <li><a href="examples/example_1_1_4.php">Example 1.1.4: Comments</a></li>
        <li><a href="examples/example_1_1_5.php">Example 1.1.5: Accessing Form Variables</a></li>
        <li><a href="examples/example_1_1_6.php">Example 1.1.6: String Concatenation</a></li>
        <li><a href="examples/example_1_1_7.php">Example 1.1.7: Identifiers</a></li>
        <li><a href="examples/example_1_1_8.php">Example 1.1.8: Variable Types</a></li>
    </ul>
</body>
</html>

<title>PHP</title> 
<body>
<h3>Приклади з теорії</h3>
<a href="example1_1_5_1.php">Доступ до змінних форми post (приклад 1.1.5.1) </a><br>
<a href="example1_1_5_2.php">Доступ до змінних форми get (приклад 1.1.5.2)</a><br>
<a href="operator_if.php">if, eseif, else (приклади з 1.1.15,1.1.16,1.1.17, 1.1.18 )</a><br>
<a href="operator_switch.php">switch (приклад 1.1.19)</a><br>

<h3 class='back'><a href="../">Повернутися в меню</a><br></h3>
</div>
</body>
</html>

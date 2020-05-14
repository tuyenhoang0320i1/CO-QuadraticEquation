<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post"/>
<input type="text" name="a" placeholder="nhap a"/>
<input type="text" name="b" placeholder="nhap b"/>
<input type="text" name="c" placeholder="nhap c"/>
<input type="submit" value="result">

</form>
<?php
include "../test.php";
if ($_SERVER["REQUEST_METHOD"] = "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
$quad = new Quad($a, $b, $c );
$quad->getResult();
}
?>
</body>
</html>
<?
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $test = $_POST["test"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>This form belongs to <? if($test)echo $test; else echo "no one";?></h1>
<form action="test.php" method = "post">
    Name: <input name="test" type="text">
    <input type="submit" name="submit">
</form>


</body>
</html>
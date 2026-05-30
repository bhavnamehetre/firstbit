<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="#">
        enter your choice:<input type="text" name="arr"><br>
        1.asse sort by value<br>
        2.asse sort by key<br>
        3.desce sort by value<br>
        4.desce sort by key<br>
        <input type="submit" value="submit"><br>
</form>
</body>
</html>
<?php
$arr=$_POST["arr"];
$a=array("Sophiya"=>"31","Jacob"=>"41","Willium"=>"39","Ramesh"=>"40");
switch($arr)
{
    case 1:$array=asort($a);
    print_r($a);
    break;

    case 2:$b=ksort($a);
    print_r($a);
    break;

    case 3:$b=arsort($a);
    print_r($a);
    break;

    case 4:$b=krsort($a);
    print_r($a);
    break;
}
?>
<html>
    <body>
        <form action="#" method="POST">
            Enter first string:<input type="text" name="str"><br><br>
              Enter second string:<input type="text" name="str1"><br>
            1.small string:<input type="radio" name="r" value="1"><br>
            2.position:<input type="radio" name="r" value="2"><br>
            3.comparing both:<input type="radio" name="r" value="3"><br>
           
            <input type="submit" value="submit"><br>
</form>
</body>
</html>
<?php
$string1=$_POST["str"];
$string2=$_POST["str1"];
$ch=$_POST['r'];
switch($ch)
{
    case 1: $pos=strpos($string1,$string2);
    if($pos!=0)
    {
        echo "string2 are not present at the start of string1";
    }
    else
    {
      echo "string2 are present at the start of the string1";
    }
    break;
    case 2:$pos=strpos($string1,$string2);
    echo $pos;
    break;
    case 3:$pos=strcasecmp($string1,$string2);
    echo $pos;
    break;
}
?>
<html>
  <body>
    <form method="POST" action="#">
      enter your choice:<input type="text" name="arr"><br>
      1.insert<br>
      2.delete<br>
      3.dispaly<br>
      <input type="submit" value="submit">
</form>
</body>
</html>

<?php
$a=$_POST["arr"];
$ch=array(10,20,55,70,59);
switch($a)
{
  case 1:$c=array_push($ch,60);
  print_r($c);
  break;

  case 2:$d=array_pop($ch);
  print_r($d);
  break;

  case 3:print_r($ch);
  break;
}



?>
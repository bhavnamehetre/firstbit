<?php
session_start();
$eno=$_POST["e1"];
$ename=$_POST["e2"];
$eaddr=$_POST["e3"];

$_SESSION["eno"]=$eno;
$_SESSION["ename"]=$ename;
$_SESSION["eaddr"]=$eaddr;
?>
<html>
</body>
<form method="post" action="5.2.php">
    enter Basic:<input type="text" name="e4"><br><br>
    enter DA:<input type="text" name="e5"><br><br>
    enter HRA:<input type="text" name="e6"><br><br>
    <input type="submit" value="submit">
</form>
</body>
</html>
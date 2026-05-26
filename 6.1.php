<?php
$eno=$_POST["b1"];
$ename=$_POST["b2"];
$eaddr=$_POST["b3"];

setcookie("eno",$eno,time()+3600);
setcookie("ename",$ename,time()+3600);
setcookie("eaddr",$eaddr,time()+3600);

?>
<html>
    <body>
        <form method="post" action="6.2.php">
            enter basic:<input type="text" name="b4"><br><br>
            enter DA:<input type="text" name="b5"><br><br>
            enter HRA:<input type="text" name="b6"><br><br>
            <input type="submit" value="submit">
</form>
</body>
</html>
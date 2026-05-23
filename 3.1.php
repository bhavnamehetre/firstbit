<?php
$bgcolor=$_POST["t1"];
$size=$_POST["t2"];
$style=$_POST["t3"];
$color=$_POST["t4"];

setcookie("bgcolor",$bgcolor,time()+3600);
setcookie("size",$size,time()+3600);
setcookie("style",$style,time()+3600);
setcookie("color",$color,time()+3600);
?>
<html>
    <body>
        <form action="3.2.php" method="post">
            <input type="submit" value="submit">
</form>
</body>
</html>
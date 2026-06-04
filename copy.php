<html>
    <body>
        <form method="POST" action="#">
            enter first file:<input type="text" name="f1"><br><br>
            enter second file:<input type="text" name="f2"><br><br>
            <input type="submit" value="submit">
</form>
</body>
</html>
<?php
$f1=$_POST["f1"];
$f2=$_POST["f2"];
if(copy($f1,$f2))
{
    echo "copied file..!";
}
else
    {
    echo "not copy";
}
?>
<?php
$db=new mysqli("localhost","root","","tybcs")or die("not");
echo "connect";
$a="create table t(tno int primary key,tname varchar(20),quali varchar(20),sal dubble)";
if($db->query($a)===TRUE)
{
    echo "value inserted";
}
else
{
    echo "error";
}
$db->close();
?>
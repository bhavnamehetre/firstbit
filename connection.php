<?php
$conn=new mysqli("localhost","root","","student");
if($conn)
  echo "connection successfull";
$sql="select rollno,name,class from student";
$res=pg_query($conn,$sql);
if(!$res)
    echo pg_last_error($conn);
while($row=pg_fetch_row($res))
{
    echo "roll:$row[0] name:$row[1]  class:grow[2]";
   echo "<br>";
}
pg_close($conn);


?> 
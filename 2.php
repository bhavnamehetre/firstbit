<?php

if(isset($_COOKIE["count"]))
    {
        $a=$_COOKIE["count"]+1;
    }
    else
        {
            $a=$_COOKIE["count"]=1;
        }
    setcookie("count",$a,time()+3600);
    echo "position is:".$_COOKIE["count"];
?>
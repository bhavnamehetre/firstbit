<?php
$xml=simplexml_load_file("b1.xml");
foreach($xml->book as $b)
    {
        echo "<table border='1'>";
        "<tr><th>name</th></tr>";
        "</table>";
        echo "book name= $b->bname"."<br>";
        echo "book number= $b->bno"."<br>";
        echo "book author= $b->author"."<br><br>";
        
    }
?>
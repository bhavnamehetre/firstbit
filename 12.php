<?php
$xml=new SimpleXMLElement("<bookinfo/>");
$s=$xml->addChild("book");
$s->addChild("bno",101);
$s->addChild("bname","php");
$s->addChild("year",2012);
$s->addChild("price",205);
$xml->asXML("b.xml");
echo "file created....!";



?>
<?php
$filename="flat.dat";
$lines=file($fimename,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$total=0;
echo "<table border='1' cellspacing='0' cellpadding='5'>";
echo "<tr>
<th>code</th>
<th>name</th>
<th>units</th>
<th>rate</th>
<th>amount</th>
</tr>";

foreach($lines as $line)
{
    $parts=explode(",",$line);
    $code=trim($parts[0]);
    $code=trim($parts[0]);
    $code=trim($parts[0]);
    $code=trim($parts[0]);
}
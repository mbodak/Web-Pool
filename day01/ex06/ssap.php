#!/usr/bin/php
<?php
$i = 1;
$arr = array();
while ($argv[$i])
{
    $new = explode(" ", "$argv[$i]");
    foreach ($new as $value)
    {
        if ($value != "")
        $arr[] = $value;
    }
    $i++;
}
sort($arr);
foreach ($arr as $val)
    echo ("$val"."\n");
?>
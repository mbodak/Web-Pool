#!/usr/bin/php
<?php
$str = trim(preg_replace("/\s+/", " ", $argv[1]));
$arr = explode(" ", "$str");
$i = 1;
while ($arr[$i])
{
    echo ("$arr[$i] ");
    $i++;
}
echo ("$arr[0]"."\n");
?>
#!/usr/bin/php
<?php
if ($argc != 4)
{
    echo ("Incorrect Parameters"."\n");
    return (0);
}
$arr = array();
$i = 1;
while ($i < 4)
{
    $arr[$i] = trim(preg_replace("/\s+/", " ", $argv[$i]));
    $i++;
}
if (preg_match("/ /", "$arr[1]") || preg_match("/ /", "$arr[3]"))
    return (0);
if (!is_numeric($arr[1]) || !is_numeric($arr[3]))
    return (0);
if (strlen($arr[2]) != 1 || !strpbrk($arr[2], '+-*/%'))
    return (0);
if (($arr[2] == "/" && $arr[3] == 0) || ($arr[2] == "%" && $arr[3] == 0))
{
    echo ("ERROR. IS NULL!"."\n");
    return (0);
}
if ($arr[2] == "+")
    echo ($arr[1] + $arr[3]);
if ($arr[2] == "-")
    echo ($arr[1] - $arr[3]);
if ($arr[2] == "*")
    echo ($arr[1] * $arr[3]);
if ($arr[2] == "/")
    echo ($arr[1] / $arr[3]);
if ($arr[2] == "%")
    echo ($arr[1] % $arr[3]);
echo ("\n");
?>
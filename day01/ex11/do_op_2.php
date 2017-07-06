#!/usr/bin/php
<?php
if ($argc != 2)
{
    echo ("Incorrect Parameters"."\n");
    return (0);
}
$str = trim(preg_replace("/\s+/", " ", $argv[1]));
$first_num = intval($str);
$second_num = trim(mb_substr($str, strlen($first_num)));
$op = $second_num[0];
$second_num = trim(mb_substr($second_num, 1));
if (!is_numeric($first_num) || !is_numeric($second_num))
{
    echo ("Syntax Error"."\n");
    return (0);
}
if (strlen($op) != 1 || !strpbrk("$op", '+-*/%'))
{
    echo ("Syntax Error"."\n");
    return (0);
}
if (($op == "/" && $second_num == 0) || ($op == "%" && $second_num == 0))
{
    echo ("ERROR. IS NULL!"."\n");
    return (0);
}
if ($op == "+")
    echo ($first_num + $second_num);
if ($op == "-")
    echo ($first_num - $second_num);
if ($op == "*")
    echo ($first_num * $second_num);
if ($op == "/")
    echo ($first_num / $second_num);
if ($op == "%")
    echo ($first_num % $second_num);
echo ("\n");
?>
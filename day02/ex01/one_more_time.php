#!/usr/bin/php
<?php
if ($argc < 2)
    return (0);
$str = trim(preg_replace("/\s+/", " ", $argv[1]));
$arr = array();
$new = explode(" ", "$str");
foreach ($new as $value)
{
    if ($value != "")
        $arr[] = $value;
}
$time = explode(":", "$arr[4]");
if (count($arr) != 5 || count($time) != 3)
{
    echo ("Wrong Format"."\n");
    return (0);
}

//day validation
if (strlen($arr[1]) > 2 || !is_numeric($arr[1]) || $arr[1] < 1 || $arr[1] > 31)
{
    echo ("Wrong Format"."\n");
    return (0);
}

//year validation
if (strlen($arr[3]) != 4 || !is_numeric($arr[3]) || $arr[3] < 1970)
{
    echo ("Wrong Format"."\n");
    return (0);
}

$days_arr = array(
    1 => "lundi",
    2 => "mardi",
    3 => "mercredi",
    4 => "Jeudi",
    5 => "Vendredi",
    6 => "Samedi",
    7 => "Dimanche");

$month_arr = array(
    1 => "janvier",
    2 => "fevrier",
    3 => "mars",
    4 => "avril",
    5 => "mai",
    6 => "juin",
    7 => "juillet",
    8 => "aout",
    9 => "septembre",
    10 => "octobre",
    11 => "novembre",
    12 => "decembre");

//name of month/day validation
$arr[0] = lcfirst($arr[0]);
$day_key = array_search($arr[0], $days_arr);
$arr[2] = lcfirst($arr[2]);
$month_key = array_search($arr[2], $month_arr);
if (!$day_key || !$month_key)
{
    echo ("Wrong Format"."\n");
    return (0);
}

//time validation
if (strlen($time[0]) != 2 || !is_numeric($time[0]) || $time[0] < 0 || $time[0] > 23)
{
    echo ("Wrong Format"."\n");
    return (0);
}
if (strlen($time[1]) != 2 || !is_numeric($time[1]) || $time[1] < 0 || $time[1] > 59)
{
    echo ("Wrong Format"."\n");
    return (0);
}
if (strlen($time[2]) != 2 || !is_numeric($time[2]) || $time[2] < 0 || $time[2] > 59)
{
    echo ("Wrong Format"."\n");
    return (0);
}
date_default_timezone_set('Europe/Paris');
if (!checkdate($month_key, $arr[1], $arr[3]))
{
    echo ("Wrong Format"."\n");
    return (0);
}
$seconds = mktime($time[0], $time[1], $time[2], $month_key, $arr[1], $arr[3]);
echo ("$seconds"."\n");
?>
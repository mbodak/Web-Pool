#!/usr/bin/php
<?php
if ($argc >= 2)
{
    $arr = array();
    $i = 0;
    while (++$i < $argc)
    {
        $new = explode(" ", $argv[$i]);
        foreach ($new as $val)
        {
            if ($val != "")
                $arr[] = $val;
        }
    }
    function ft_compare($str2, $str1)
    {
        $cmp = "abcdefghijklmnopqrstuvwxyz0123456789";
        $i = 0;
        while ($str1[$i] && $str2[$i])
        {
            if (stripos($cmp, $str1[$i]) === false && stripos($cmp, $str2[$i]) !== false)
                return (-1);
            else if (stripos($cmp, $str1[$i]) !== false && stripos($cmp, $str2[$i]) === false)
                return (1);
            else if (stripos($cmp, $str1[$i]) > stripos($cmp, $str2[$i]))
                return (-1);
            else if (stripos($cmp, $str1[$i]) < stripos($cmp, $str2[$i]))
                return (1);
            else if (strcasecmp($str1[$i], $str2[$i]) !== 0)
                return (strcasecmp($str1[$i], $str2[$i]) * -1);
            $i++;
        }
        if (strlen($str1) > strlen($str2))
            return (1);
        else if (strlen($str1) < strlen($str2))
            return (-1);
        return (0);
    }
    usort($arr, "ft_compare");
    foreach ($arr as $value)
        echo ($value."\n");
}
?>
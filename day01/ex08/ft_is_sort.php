<?php
function ft_is_sort($tab)
{
    setlocale(LC_ALL, "en_US.UTF-8");
    $arr = $tab;
    sort($arr, SORT_LOCALE_STRING);
    if ($arr == $tab)
        return (1);
    $arr = $tab;
    rsort($arr, SORT_LOCALE_STRING);
    if ($arr == $tab)
        return (1);
    else
        return (0);
}
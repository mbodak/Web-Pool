<?php
function    ft_split($str)
{
    $my_arr = explode(" ", "$str");
    $new_arr = array();
    foreach ($my_arr as $val)
    {
        if ($val != "")
            $new_arr[] = $val;
    }
    sort($new_arr);
    return ($new_arr);
}
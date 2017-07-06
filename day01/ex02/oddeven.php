#!/usr/bin/php
<?php
while (1)
{
    echo "Enter a number: ";
    if (!$line = fgets(STDIN))
    {
        echo "\n";
        return (0);
    }
    $line = trim($line);
    if (is_numeric($line))
    {
        if ($line % 2 == 0)
            $str = "The number $line is even";
        else
            $str = "The number $line is odd";
    }
    else
        $str = "'$line' is not a number";
    echo ("$str"."\n");
}
?>
#!/usr/bin/php
<?php
if ($argc < 2)
    return (0);
$str = trim(preg_replace("/\s+/", " ", $argv[1]));
echo ("$str"."\n");
?>
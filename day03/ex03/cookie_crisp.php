<?php
$action = $_GET['action'];
if ($action == 'set')
{
    if ($_GET['name'] && $_GET['value'])
        setcookie($_GET['name'], $_GET['value']);
}
if ($action == 'get')
{
    if ($_GET['name'] && $_COOKIE[$_GET['name']] && !$_GET['value'])
        echo $_COOKIE[$_GET['name']]."\n";
}
if ($action == 'del')
{
    if ($_GET['name'] && !$_GET['value'])
        setcookie($_GET['name'], "", time() - 3600);
}
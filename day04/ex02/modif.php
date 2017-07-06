<?php
if ($_POST['login'] != NULL && $_POST['oldpw'] != NULL && $_POST['newpw'] != NULL && $_POST['submit'] == "OK")
{
    if (!($file = file_get_contents("../private/passwd")))
        echo ("ERROR\n");
    $data = unserialize($file);
    foreach ($data as $key => $value)
    {
        if ($value['login'] != $_POST['login'] || $value['passwd'] != hash("sha256", $_POST['oldpw']))
            $stop = TRUE;
        else
            $k = $key;
    }
    if (!$stop)
    {
        $arr[$k]['passwd'] = hash("sha256", $_POST['newpw']);
        $data[] = $arr;
        $str = serialize($data);
        file_put_contents("../private/passwd", $str);
        echo "OK\n";
    }
    else
        echo ("ERROR\n");
}
else
    echo ("ERROR\n");
?>
<?php
if ($_POST['login'] != NULL && $_POST['passwd'] != NULL && $_POST['submit'] == "OK")
{
    if (!file_exists("../private/passwd"))
    {
        mkdir("../private");
        $arr['login'] = $_POST['login'];
        $arr['passwd'] = hash("sha256", $_POST['passwd']);
        $data[] = $arr;
        $str = serialize($data);
        file_put_contents("../private/passwd", $str);
        echo "OK\n";
    }
    else
    {
        $data = unserialize(file_get_contents("../private/passwd"));
        foreach ($data as $value)
        {
            if ($value['login'] == $_POST['login'])
                $stop = TRUE;
        }
        if (!$stop)
        {
            $arr['login'] = $_POST['login'];
            $arr['passwd'] = hash("sha256", $_POST['passwd']);
            $data[] = $arr;
            $str = serialize($data);
            file_put_contents("../private/passwd", $str);
            echo "OK\n";
        }
        else
            echo ("ERROR\n");
    }
}
else
    echo ("ERROR\n");
?>
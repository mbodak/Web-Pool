<?php
session_start();
if ($_GET['login'] && $_GET['passwd'] && $_GET["submit"] && $_GET['submit'] == "OK")
{
    $_SESSION['login'] = $_GET['login'];
    $_SESSION['passwd'] = $_GET['passwd'];
}
?>
<html>
    <head>
        <title>ex00</title>
    </head>
    <style>
        body {
            background: black;
        }
        .text {
            color: white;
        }
        .log {
            position: relative;
            left: 0.5%;
        }
        .pass {
            position: relative;
            left: 0.6%;
        }
        .ok {
            position: relative;
            left: 6.5%;
            width: 2%;
            font-size: 100%;
        }
        #box {
            position: relative;
            top: 5%;
            left: 5%;
        }
    </style>
    <body>
<div id="box">
    <form action="index.php" method="get">
            <p class="text">Username: <input class="log" type="text" name="login" value="<?php $_SESSION['login']?>"/></p>
            <p class="text">Password: <input class="pass" type="password" name="passwd" value="<?php $_SESSION['passwd']?>"/></p>
            <p> <input class="ok" type="submit" name="submit" value="OK"/></p>
    </form>
</div>
    </body>
</html>
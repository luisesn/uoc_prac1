<?php
include_once('dbsqlite.php');
if (isset($_REQUEST['email'])) {
    if ($user=userCheck($_REQUEST['email'],$_REQUEST['password'])) {
        echo file_get_contents('views/web1.html');
        include_once('views/welcome.html');
        echo file_get_contents('views/web2.html');
        die();
    } else {
        $error="Datos incorrectos";
    }
}

echo file_get_contents('views/web1.html');
include_once('views/login.html');
echo file_get_contents('views/web2.html');
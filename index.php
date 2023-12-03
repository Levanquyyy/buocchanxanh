<?php

    require_once('model/connect.php');
    $db = new Database;
    $db->connect();
    require_once('controller/index.php');
?>
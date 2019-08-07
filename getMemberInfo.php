<?php
    include_once("config.php");
    session_start();
    
    $query = "SELECT * FROM user_data WHERE uid = {$_SESSION['uid']} ";
    $result = $db->query($query);

    while ($row = $result->fetch())
    {
        $userData = $row;
    }

    print_r(json_encode($userData));
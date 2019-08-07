<?php
    include_once("config.php");
    session_start();

    //update the user_data
    if(isset($_SESSION['uid'])){
        $query = "UPDATE user_data SET nickname='{$_POST['nickname']}', tel='{$_POST['tel']}', addr='{$_POST['addr']}' WHERE uid = {$_SESSION['uid']}";

        $result = $db->query($query);
    }else{
        header("Location: index.php");
    }
 

?>

<script>
    alert("Edit success!!");
    window.location.href = '/index.php';
</script>

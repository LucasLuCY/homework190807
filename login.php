<?php
include_once("config.php");
session_start();

//if session have key, back to index
if(isset($_SESSION['uid'])){
    header("Location: index.php");
}


//if input somethings
if(isset($_POST['username'])){
    //Remember username in cookie
    if(isset($_POST['remember'])){
        setcookie("username", $_POST['username']);
    }else{
        setcookie("username", "", time()-3600);
    }

    //Checked username and password
    $query = "SELECT uid FROM user_data 
                WHERE username = '{$_POST['username']}' 
                AND password = '{$_POST['password']}' ";
    $result = $db->query($query);

    while ($row = $result->fetch())
    {
        $_SESSION['uid'] = $row['uid'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        #login_form{
            border: 1px solid #ccc;
            border-radius: 12px;
            padding: 2em;
            text-align: center;
            margin: 5% auto;
        }
    </style>

    <script>
        <?php 
        //alert the result, then href
        if(isset($_SESSION['uid'])){
            echo "alert('Success for login!!');";
            echo "window.location.href = '/index.php';";
        }elseif(isset($_POST['username'])){
            echo "alert('Your username/password is wrong!!');";
        }
        ?>
    </script>
</head>
<body>
    <div id="login_form" class="col-3">
        <form method="POST" action="\login.php">
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" 
                placeholder="Enter user name" name="username" value="<?php echo $_COOKIE['username']??""; ?>">
                <small id="usernameHelp" class="form-text text-muted">You'll use this name for login.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="checkbox" name="remember" value="remember" <?php 
                    if(isset($_COOKIE['username'])) echo "checked";
                ?> >
                <label class="form-check-label" for="checkbox">Remember your name</label>
            </div>
             <div class="form-group">
                <small class="form-text text-danger">Tip. root // 0000</small>
            </div>      
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  
</body>
</html>
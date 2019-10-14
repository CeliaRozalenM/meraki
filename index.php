<?php
include "config/config.php";
include 'class/userClass.php';
$userClass = new userClass();


$errorMsgReg = '';
$errorMsgLogin = '';
/* Login Form */
if (!empty($_POST['loginSubmit'])) {
    $usernameEmail = $_POST['usernameEmail'];
    $password = $_POST['password'];
    if (strlen(trim($usernameEmail)) > 1 && strlen(trim($password)) > 1) {
        $uid = $userClass->userLogin($usernameEmail, $password);
        if ($uid) {
            $url = BASE_URL . '/pages/home.php';
            header("Location: $url");
        } else {
            $errorMsgLogin = "Datos introducidos incorrectos ";
        }
    }
}

/* Signup Form */
if (!empty($_POST['signupSubmit'])) {
    $username = $_POST['usernameReg'];
    $email = $_POST['emailReg'];
    $password = $_POST['passwordReg'];
    $name = $_POST['nameReg'];
    
    $username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
    $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.([a-zA-Z]{2,4})$~i', $email);
    $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);


    if ($username_check && $email_check && $password_check && strlen(trim($name)) > 0) {
        $uid = $userClass->userRegistration($username, $password, $email, $name);
        if ($uid) {
            // $url = BASE_URL . '/pages/home.php';
            // header("Location: $url");
            $errorMsgReg = "yes";
        } else {
            $errorMsgReg = "Usuario o Email ya en uso";
        }
    }
}
?>


<link href="css/styles.min.css" rel="stylesheet" type="text/css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meraki</title>
</head>
<body class="building">
    <div class="login">
        <h1>Meraki</h1>
        <form method="post" action="" name="login">
        <label>Username or Email</label>
        <input type="text" name="usernameEmail" autocomplete="off" />
        <label>Password</label>
        <input type="password" name="password" autocomplete="off"/>
        <div class="errorMsg"><?php echo $errorMsgLogin; ?></div>
        <input type="submit" class="button" name="loginSubmit" value="LOGIN">
        </form>
    </div>
</body>
</html>

<?php
    session_start();
    include "connect/connect.php";

    $mail = $_POST["mail"]; 
    $password = $_POST["password"]; 

    $_SESSION['mail'] = $mail;
    $_SESSION['mail_name'] = $mail;


    $sql1 = mysqli_query($conn,"SELECT * FROM Users WHERE email = '$mail' AND password = '$password'");
    $result = mysqli_num_rows($sql1);
    
    if($result > 0 )
    { 
        header('Location: update.php');
        exit;    
    }
    else
    {
        echo 'The username or password are incorrect!';
    }
?> 
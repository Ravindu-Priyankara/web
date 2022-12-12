<?php
    include "connect/connect.php";
    session_start();

    $mail = $_SESSION['mail'];

    $sql = "UPDATE Users SET status = 'Online' where email = '$mail';";

        if (mysqli_query($conn, $sql)) 
        {
            header('Location: log_anim/animation.php');
            exit;       
        }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
          
        mysqli_close($conn);
?>
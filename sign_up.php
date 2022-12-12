<?php
    include "connect/connect.php";

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $r_password = $_POST['password1'];
    $prof = $_POST['profession'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $p_code = $_POST['postal_code'];
    $num = $_POST['number'];

    if($password == $r_password)
    {
        $rand_id = rand(100,1000);
        $sql = "INSERT INTO Users (f_name, l_name, email, rand_id, password, whois, status,profession, address, city, country, postal_code, about_me, number) VALUES ('$f_name', '$l_name', '$mail', $rand_id,'$password', 'user', 'Online','$prof','$address','$city','$country','$p_code','custermer', '$num')";

        if (mysqli_query($conn, $sql))  
        {
            header('Location: ../login.html');
            exit;    
        }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
          
        mysqli_close($conn);
    }
    else
    {
        echo "<script>alert('Password and retype password are not same one.')</script>";
        //please setup page
    }

?>
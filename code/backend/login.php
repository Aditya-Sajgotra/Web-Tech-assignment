<?php
    session_start();
    $inputEmail = $_SESSION['user']['email'];
    $inputPassword = $_SESSION['user']['password'];

    $error = "";
    $success = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if($inputEmail == $_POST['email'] && $inputPassword == $_POST['password']){
            $success = "login successful";
    }
        else{
            $error = "Please Enter correct Credentials";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php 
        if($error){
            echo $error;
        }
        else{
            echo $success;
        }
        ?>
    </h1>
    <a href="./home.php">Go to Home</a>
</body>
</html>
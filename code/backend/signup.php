<?php
session_start();
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($fullname)) {
        $error = "Full Name is required";
    } elseif (empty($email)) {
        $error = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Enter a valid email";
    } elseif (empty($password)) {
        $error = "Password is required";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match";
    } else {
        $success = "Submitted Successfully!";
        $_SESSION['user'] = [
            'email' => $email,
            'password' => $password,
            'fullname' => $fullname
        ];
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Signup Result</title>
</head>
<body>

<h1>
    <?php
    if($error){
        echo $error;
    }
    else {
        echo $success;
    }
    ?>
    <a href="../html/login.html">Login</a>
</h1>


</body>
</html>

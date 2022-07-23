<?php
    session_start();

    include "conn.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $db->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");

    if($query->num_rows > 0) 
    {
        $user = mysqli_fetch_array($query);
        $_SESSION['username'] = $user['username'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['login'] = 1;

        echo "<script>alert('Login succeed')</script>";
        header("location: home.php");
    }
    else 
    {
        echo "<script>alert('Incorrect username or password')</script>";
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include './conn2.php';
        $conn = new Connection;
    ?>
    <form action="./login.php" method="POST">
        <input type="text" placeholder="Username" name="username">
        <input type="text" placeholder="Password" name="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test_2.php" method="GET">
        <label for="username">Username: </label>
        <br>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password: </label><br>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <input type="submit" name="submit" value="Login">
    </form>


    <?php 

        // echo "{$_GET["username"]}";
        // echo "{$_GET["password"]}";

        if(isset($_GET["submit"])){
            $username = $_GET["username"];
            $password = $_GET["password"];
            echo "Your username is {$username} and your password is {$password}";
            }

    ?>

</body>
</html>
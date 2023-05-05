<?php
session_start();

if(!isset($_SESSION["password"])) {
    header("Location: index.php");
    die;
}

$password = $_SESSION["password"];
unset($_SESSION["password"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Password</title>
</head>
<body>
    <h2>Your random password:</h2>
    <p><?php echo $password; ?></p>
</body>
</html>
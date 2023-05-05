<?php 
session_start();

include __DIR__ . '/partials/functions/function.php';

if(isset($_GET["lengthPassword"])) {
	$lengthPassword = $_GET["lengthPassword"];
	$password = generatePassword($lengthPassword);
    $_SESSION['password'] = $password;
    header('Location:  ./partials/template/password.php');
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
		<label for="lengthPassword">Length Password:</label>
		<input type="number" id="lengthPassword" name="lengthPassword" min="8" max="32" required>
		<button type="submit">Generate password</button>
	</form>

    <?php if(isset($_GET["lengthPassword"])){ ?>
        <h2>Your random password:</h2>
        <p> <?php echo $password ?> </p>
    <?php }?>
    
</body>
</html>
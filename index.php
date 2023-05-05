<?php 

if(isset($_GET["lengthPassword"])) {
	$lengthPassword = $_GET["lengthPassword"];
	$password = generatePassword($lengthPassword);
		
}
		
function generatePassword($lengthPassword) {
	$character = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
	$password = substr(str_shuffle($character), 0, $lengthPassword);
	return $password;
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
		<label for="lengthPassword">Lunghezza Password:</label>
		<input type="number" id="lengthPassword" name="lengthPassword" min="8" max="32" required>
		<button type="submit">Generate password</button>
	</form>

    <?php if(isset($_GET["lengthPassword"])){ ?>
        <h2>Your random password:</h2>
        <p> <?php echo $password ?> </p>
    <?php }?>
    
</body>
</html>
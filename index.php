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

    <?php include './partials/template/header.php' ?>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
		<label for="lengthPassword">Length Password:</label>
		<input type="number" id="lengthPassword" name="lengthPassword" min="8" max="32" required>
		<button type="submit">Generate password</button>
	</form>

    <?php if(isset($_GET["lengthPassword"])){ ?>
        <h2>Your random password:</h2>
        <p> <?php echo $password ?> </p>
    <?php }?>
    
<?php include './partials/template/footer.php' ?>
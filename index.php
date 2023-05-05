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
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center c92-height">
        <h1 class="text-white pb-5">Generate your secure password</h1>
        <form class="card card-element d-flex flex-column align-items-stratch justify-content-evenly" action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
            <div class="d-flex justify-content-evenly">
                <label for="lengthPassword" class="fw-semibold text-uppercase text-center text-white w-50">Length Password:</label>
                <input class="w-25 text-center fw-semibold text-color" type="number" id="lengthPassword" name="lengthPassword" min="8" max="32" required>
            </div>    
            <button type="submit" class="btn btn-outline-light w-50 align-self-center fw-semibold">Generate password</button>
        </form>

       
    </div>
   

    
<?php include './partials/template/footer.php' ?>
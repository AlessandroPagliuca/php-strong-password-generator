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

    <header>
        <h1 class="text-white pb-5 py-5 text-center">Generate your secure password</h1>
    </header>

    <main>
        <div class="container-fluid d-flex flex-column justify-content-center align-items-center h-100">
            <form class="card card-element d-flex flex-column align-items-stratch justify-content-evenly" action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
                <div class="d-flex justify-content-evenly">
                    <label for="lengthPassword" class="fw-semibold text-uppercase text-center text-white w-50">Length Password:</label>
                    <input class="w-25 text-center fw-semibold text-color" type="number" id="lengthPassword" name="lengthPassword" min="8" max="32" required>
                </div>    
                <button type="submit" class="btn btn-outline-light w-50 align-self-center fw-semibold">Generate password</button>
            </form>
        </div>
    </main>
    
<?php include './partials/template/footer.php' ?>

<style>
    body {
    background-color: rgb(23, 23, 100);
  }
header{
    width: 100vw;
    height: 10vh;
}
main{
    width: 100vw;
    height: 90vh;
}

.card-element{
    width: 350px;
    height: 275px;
    background-color: rgb(11, 11, 48);
    transition: width 0.6s ease-in-out, height 0.6s ease-in-out;
    border: 1px solid rgba(255, 255, 255, 0.726);
}

.card-element:hover {
    width: 360px;
    height: 285px;
    box-shadow: 1rem 1rem 1rem rgb(11, 11, 48);

}

.text-color{
    color: rgb(23, 23, 100);
}
</style>
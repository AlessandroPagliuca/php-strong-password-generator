<?php
session_start();

if(!isset($_SESSION["password"])) {
    header("Location: index.php");
    die;
}

$password = $_SESSION["password"];
unset($_SESSION["password"]);
?>

<?php include './header.php' ?>

    <div class="container-fluid d-flex flex-column justify-content-center align-items-center c92-height">
        
        <h2 class="text-white pb-5">Your random password:</h2>

        <div class="card card-element d-flex align-items-center justify-content-center">
            <p class="text-white fw-semibold fs-3"><?php echo $password; ?></p>
        </div>
    </div>

    

<?php include './footer.php' ?>

<style>

body {
    background-color: rgb(23, 23, 100);
  }

.c92-height{
    height: 100vh;
}

.card-element{
    width: 40%;
    height: 25%;
    background-color: rgb(11, 11, 48);
    transition: width 0.6s ease-in-out, height 0.6s ease-in-out;
    border: 1px solid rgba(255, 255, 255, 0.726);
}

.card-element:hover {
    width: 41%;
    height: 26%;
    box-shadow: 1rem 1rem 1rem rgb(11, 11, 48);

}

.text-color{
    color: rgb(23, 23, 100);
}

</style>
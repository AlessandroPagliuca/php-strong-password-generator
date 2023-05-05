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

    <header class="d-flex align-items-end justify-content-center">
        <h2 class="text-white pb-5 py-5">Your random password:</h2>    
    </header>

    <main>
        <div class="container-fluid d-flex justify-content-center align-items-start h-100">
            <div class="card card-element d-flex align-items-center justify-content-center">
                <p class="text-white text-center fw-semibold fs-3 overflow-wrap"><?php echo $password; ?></p>
                <button id="copy-btn" class="btn btn-outline-light">Copy password</button>
            </div>
        </div>
    </main>
    
<?php include './footer.php' ?>

<script>
    const copyBtn = document.getElementById('copy-btn');
    const passwordEl = document.querySelector('.card-element p');

    copyBtn.addEventListener('click', () => {
        navigator.clipboard.writeText(passwordEl.textContent)
            .then(() => {
                copyBtn.textContent = 'Copied!';
                setTimeout(() => {
                    copyBtn.textContent = 'Copy password';
                }, 3000);
            })
            .catch(error => {
                console.error('Unable to copy password', error);
            });
    });

</script>

<style>

body {
    background-color: rgb(23, 23, 100);
  }
header{
    width: 100vw;
    height: 40vh;
}
main{
    width: 100vw;
    height: 60vh;
}

.card-element{
    width: fit-content;
    height: 285px;
    background-color: rgb(11, 11, 48);
    transition: box-shadow 0.4s ease-in-out;
    border: 1px solid rgba(255, 255, 255, 0.726);
    padding: 1rem;

}

.card-element:hover {
    box-shadow: 1rem 1rem 1rem rgb(11, 11, 48);

}

.text-color{
    color: rgb(23, 23, 100);
}

.overflow-wrap{
    overflow-wrap: break-word;
}
</style>
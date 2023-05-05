<?php 
function generatePassword($lengthPassword = 8){
    
if(isset($_GET["lengthPassword"])) {
	$lengthPassword = $_GET["lengthPassword"];		
}

	$character = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
	$password = substr(str_shuffle($character), 0, $lengthPassword);
	return $password;
}

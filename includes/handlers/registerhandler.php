<?php

function sanitizeUsername($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;
}

function sanitizePassword($inputText) {
	$inputText = strip_tags($inputText);
	return $inputText;
}

function sanitizeString($inputText) {
	$inputText = strip_tags($inputText); // strips input of html tags
	$inputText = str_replace(" ", "", $inputText); //removes spaces
	//$inputText = ucfirst(strtolower($inputText)); //makes all letters lower caps
	return $inputText;
}


if(isset($_POST['signUpButton'])) {
	$username = sanitizeUsername($_POST['registerUsername']);
	$email = sanitizeString($_POST['registerEmail']);
	$email2 = sanitizeString($_POST['confirmEmail']);
	$password = sanitizePassword($_POST['registerPassword']);
	$password2 = sanitizePassword($_POST['confirmPassword']);
	
	$wasSuccesful = $account->register($username, $email, $email2, $password, $password2);
	
	if($wasSuccesful == true) {
		$_SESSION['userLoggedIn'] = $username;
		header("Location: login.php");
	}
}

function getInputValue($name) {
	if(isset ($_POST[$name])) {
		echo $_POST[$name];
	}
}
?>
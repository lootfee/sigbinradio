<?php
	class Account {
		private $con;
		private $errorArray;
		
		public function __construct($con) {
			$this->con = $con;
			$this->errorArray = array();
		}
		
		
		
		public function login($un, $pw) {
			$query = mysqli_query($this->con, "SELECT * FROM users WHERE username='$un'" );
			$password = $query->fetch_assoc();
			$passwordHash = $password['password'];
			//$pw = password_hash($pw);
			//$password = $_POST['loginPassword'];
			//$pwQuery = mysqli_query($this->con, "SELECT password FROM users WHERE username='$un'");
			//$pw = password_verify($_POST['loginPassword'], $pwQuery);
			//$pwverify = password_verify($pw, $pwQuery);
			
			if(mysqli_num_rows($query) == 1 AND password_verify($pw, $passwordHash) == TRUE) {
              return true;
			}
			else {
				array_push($this->errorArray, Constants::$loginFailed);
				return false;
			}
			/*if($pwverify == TRUE AND mysqli_num_rows($query) == 1){
				return true;
			}
			else {
				array_push($this->errorArray, Constants::$loginFailed);
				return false;
			}*/
		}
		
		public function register($un, $em, $em2, $pw, $pw2) {
			$this->validateUsername($un);
			$this->validateEmails($em, $em2);
			$this->validatePasswords($pw, $pw2);
			
			if(empty($this->errorArray) == true) {
				//insert into db
				return $this->insertUserDetails($un, $em, $pw);
			}
			else {
				return false;
			}
		}
		
		public function getError($error) {
			if(!in_array($error, $this->errorArray)) {
				$error = "";
			}
			return "<span class='errorMessage'>$error</span>";
		}
		
		private function insertUserDetails($un, $em, $pw) {
			$encryptedPw = password_hash($pw, PASSWORD_DEFAULT);
			$profilePic = "assets/images/profile-pic/profile1.jpg";
			$date = date("Y-m-d");
			
			$results = mysqli_query($this->con, "INSERT INTO users VALUES('', '$un', '$em', '$encryptedPw', '$date', 'profilePic')");
			
			return $results;
		}
		
		private function validateUsername($un) {
			if(strlen($un) < 4 || strlen($un) > 25){
				array_push($this->errorArray, Constants::$usernameCharacters);
				return;
			}
			
			$checkUsernameQuery = mysqli_query($this->con, "SELECT username FROM users WHERE username = '$un'");
			if (mysqli_num_rows($checkUsernameQuery) != 0 ) {
				array_push($this->errorArray, Constants::$usernameTaken);
				return;
			}
		}

		private function validateEmails($em, $em2){
			
			if($em != $em2) {
				array_push($this->errorArray, Constants::$emailMatch);
				return;
			}
			
			if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errorArray, Constants::$emailInvalid);
				return;
			}
			$checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users WHERE email = '$em'");
			if (mysqli_num_rows($checkEmailQuery) != 0 ) {
				array_push($this->errorArray, Constants::$emailTaken);
				return;
			}
			
		}
		
		private function validatePasswords($pw, $pw2){
			
			if($pw != $pw2) {
				array_push($this->errorArray, Constants::$passwordMatch);
				return;
			}
			
			/*if(preg_match('/[^A-Za-z0-9]/', $pw)) {
				array_push($this->errorArray, "Your password can only contain numbers and letters");
				return;
			}*/
			
			if(strlen($pw) < 8){
				array_push($this->errorArray, Constants::$passwordCharacters);
				return;
			}
		}
		
	}
	
	
?>
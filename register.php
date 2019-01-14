<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");
	
	$account = new Account($con);
		
	include("includes/handlers/registerhandler.php");
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Sigbin Radio</title>
  <link rel="stylesheet" type="text/css" href="assets/css/register.css" >
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe" rel="stylesheet">
</head>
	<body>
		<div id="backgroundImg">
			<div id="loginContainer">
				<div id="inputContainer">
				
					<form id="register" action="register.php" method="POST" >
						<h1>Sigbin Radio</h1>
						<h2>Create your free account!</h2>
						
						<p>
							<input id="registerUsername" name="registerUsername" type="text" placeholder="Username" value="<?php getInputValue ('registerUsername') ?>" required>
						</p>
						<p>
							<?php echo $account->getError(Constants::$usernameCharacters); ?>
							<?php echo $account->getError(Constants::$usernameTaken); ?>
						</p>
						
						<p>
							<input id="registerEmail" name="registerEmail" type="email" placeholder="Email address" value="<?php getInputValue ('registerEmail') ?>" required>
							<input id="confirmEmail" name="confirmEmail" type="email" placeholder="Confirm Email address" value="<?php getInputValue ('confirmEmail') ?>" required>
						</p>
						<p>
							<?php echo $account->getError(Constants::$emailMatch); ?>
							<?php echo $account->getError(Constants::$emailInvalid); ?>
							<?php echo $account->getError(Constants::$emailTaken); ?>
						</p>
						
						<p>
							<input id="registerPassword" name="registerPassword" type="password" placeholder="Password" required>
							<input id="confirmPassword" name="confirmPassword" type="password" placeholder="Confirm Password" required>
						</p>
						<p>
							<?php echo $account->getError(Constants::$passwordMatch); ?>
							<?php echo $account->getError(Constants::$passwordCharacters); ?>
						</p>
						
						<button type="submit" name="signUpButton" >Sign up</button>
						
							
					</form>
					<h5>Already have an account? <a href="login.php">Sign in!</a></h5>
					
				</div>
			</div>
			<a style="background-color:black;color:white;text-decoration:none;padding:2px 3px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:8px;font-weight:bold;line-height:1.2;display:inline-block;float:right;border-radius:3px" href="https://unsplash.com/@brunocervera?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from BRUNO CERVERA"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:8px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg></span><span style="display:inline-block;padding:2px 3px">BRUNO CERVERA</span></a>
		</div>
	
	</body>
	
	
</html>
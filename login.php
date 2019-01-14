<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");
	
		$account = new Account($con);
		
	include("includes/handlers/loginhandler.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Welcome Sigbin</title>
  <link rel="stylesheet" type="text/css" href="assets/css/login.css" >
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe" rel="stylesheet">
</head>
<body>
	<div id="loginBackgroundImg">
		
		<div id="loginContainer">
			<div id="inputContainer">
				<form id="login" action="login.php" method="POST" >
					<h1>Sigbin Radio</h1>
					<h2>Sign in to your Account</h2>
					
					<p>
					<input id="loginUsername" name="loginUsername" type="text" placeholder="Username" value="<?php getInputValue ('loginUsername') ?>" required>
					</p>
					
					<p>
					<input id="loginPassword" name="loginPassword" type="password" placeholder="Password" required>
					</p>
					<p>
						<?php echo $account->getError(Constants::$loginFailed); ?>
						<?php echo $account->getError(Constants::$passwordFailed); ?>
					</p>
					
					<button type="submit" id="loginButton" name="loginButton">Login</button>
					
					<h5>No account yet? <a href="register.php">Sign up!</a></h5>
					
				</form>
			</div>
			
		</div>
		
		<a style="background-color:black;color:white;text-decoration:none;padding:2px 3px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:8px;font-weight:bold;line-height:1.2;display:inline-block;float:right;border-radius:3px" href="https://unsplash.com/@thestoryofian?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Niels Smeets"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:8px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Niels Smeets</span></a>
	</div>
</body>
</html>
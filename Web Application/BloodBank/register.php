<?php include('server.php') ?>
<?php
$profpic = "assets/img/Tanna.jpg";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <style type="text/css">
body {
background-image: url('<?php echo $profpic;?>');
}
</style>
  
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  
  <div class="input-group">
  	  <label>Username    <br> </label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
	
	 
  	<div class="input-group">
  	  <label>Email <br></label>
  	                            <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	
  	<div class="input-group">
  	  <label>Password<br></label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password<br></label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
		<a href="indexx.html">Home</a>
  	</p>
  </form>
 
</body>
</html>

<?php include('server.php'); ?>
<html>
 <head>
  <title> Register form </title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
	<div class = "header">
	 <h2> ORGANISATIONAL REGISTRATION FORM </h2>
	</div>
	<form method="post" action="register.php">  
	<?php include('errors.php'); ?>
	<div class="form-create">
	<label> Organisation Name </label>
	<input type="text" name="name" value="<?php echo $name; ?>">
	</div>
	<div class="form-create">
	<label> Organisation Address </label>
	<input type="text" name="address" value="<?php echo $address; ?>">
	</div>
	<div class="form-create">
	<label> Password </label>
	<input type="password" name="password">
	</div>
	<div class="form-create">
	<label> Confirm Password </label>
	<input type="password" name="confirm">
	</div>
	<button type="submit" name="register"> REGISTER </button>
	<p>
	Already a member ? <a href="front.php">HOME</a>
	</p>
	</form>
 </body>
</html>
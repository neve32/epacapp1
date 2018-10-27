<?php include('server.php');?>
<html>
 <head>
  <title> login form </title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
	<div class = "header">
	 <h2> ORGANISATIONAL LOGIN HERE </h2>
	</div>
	<form method="post" action="login.php">
	<?php include('errors.php'); ?>
	<div class="form-create">
	<label> Organisation name </label>
	<input type="text" name="name">
	</div>
	<div class="form-create">
	<label> Password </label>
	<input type="password" name="password">
	</div>
	<button type="submit" name="login"> LOGIN </button>
	<p>
	 Not yet a member ? <a href="front.php">home</a>
	</p>
	</form>
 </body>
</html>
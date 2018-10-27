<?php include('server.php');
include('server1.php');?>
<html>
<head>
<title>EPAC</title>
<link rel="stylesheet" type="text/css" href="app.css">
</head>
<body>
<header>
<h1>EXPEDITTOUS NEED FOR PEOLPE AFFECTING IN CALAMITIES<h1>
</header>
<div class="link1">
 <a href="register.php">REGISTER</a> 
 <a href="login.php">LOGIN</a>
</div>
<form method="post" action="front.php">
<?php include('errors.php'); ?>
<h2>FUND US FOR A CAUSE !</h2>
<div class="output">
<input type="text" name="detail" >
</div>
<br>
<button type="submit" name="submit" >SUBMIT</button>
</form>
<h2>ORGANISATION PEOPLE ARE AVAILABLE</h2>
<div class = "link2">
	<?php if(isset($_SESSION['success'])):?>
		 <div class="success">
				<h3>
				<?php 
				echo $_SESSION['success'];
				unset($_SESSION['success']);
				?>
				</h3>
		 </div>		
	<?php endif ?>
	
	<?php if(isset($_SESSION["name"])): ?>
		<p><strong><?php echo $_SESSION['name']; ?></strong></p>
	<?php endif ?>
</div>
</body>
</html>
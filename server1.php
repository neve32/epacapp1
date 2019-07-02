<?php 
	  $text="";
	  $error= array();
	  
	  $db = mysqli_connect("localhost","root","","detail");
	  if(isset($_POST['submit'])){
		  if(phpversion() >= '4.3.0'){
			$text = mysqli_real_escape_string($db,$_POST['detail']);
	  }
	  if(count($errors) == 0)
		{
			$sql = "INSERT INTO  det(detail) 
					VALUES ('$text')";
			
			mysqli_query($db,$sql );
			$_SESSION['text'] = $text;
		} 
	  }
?>
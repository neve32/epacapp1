<?php
		session_start();

		$name = "";
		$address = "";
		$errors = array();
		
		$db = mysqli_connect("localhost","root","","organiser1");
		if(isset($_POST['register'])){
			if(phpversion() >= '4.3.0'){
			$name = mysqli_real_escape_string($db,$_POST['name']);
			$address = mysqli_real_escape_string($db,$_POST['address']);
			$password = mysqli_real_escape_string($db,$_POST['password']);
			$confirm = mysqli_real_escape_string($db,$_POST['confirm']);
			}
		if(empty($name)){
			array_push($errors,"Organisation name is required");
 		}
		if(empty($address)){
			array_push($errors,"Organisation address is required");
 		}
		if(empty($password)){
			array_push($errors,"Password is required");
 		}
		if($password != $confirm){
			array_push($errors,"Doesn't match password");
 		}
		
		if(count($errors) == 0)
		{
			$password = md5($password);
			$sql = "INSERT INTO orgreg2 (name, address , password) 
					VALUES ('$name' , '$address' ,'$password')";
			
			mysqli_query($db,$sql );
			$_SESSION['name'] = $name;
			$_SESSION['success'] = "YOUR ORGANISATION REGISTER IN";
			header('loacation: front.php');
			
		} 
	}
	if(isset($_POST['login'])){
		if(phpversion() >= '4.3.0'){
			$name = mysqli_real_escape_string($db,$_POST['name']);
			$password = mysqli_real_escape_string($db,$_POST['password']);
			}
		if(empty($name)){
			array_push($errors,"Organisation name is required");
 		}
		if(empty($password)){
			array_push($errors,"password is required");
	    }
		if(count($errors)== 0){
			$password = md5($password);
			$query = "SELECT * FROM orgreg2 WHERE name='$name' AND password ='$password' ";
			$result = mysqli_query($db,$query);
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['name']=$name;
				$_SESSION['success']="Your Organisation logged now";
				header('location: back.php');
			}
			else{
				array_push($errors,"wrong name/password combination");
	
			}
		}
	}	
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['name']);
		header('location:front.php');
	}
		
	?>	
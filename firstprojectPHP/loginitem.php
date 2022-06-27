<?php 
session_start(); 
include('config/connect.php');

if (isset($_POST['name']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['name']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM user WHERE nom='$uname' AND pw='$pass'";

		$result = mysqli_query($conn, $sql);
        
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            echo $row;
            if ($row['nom'] === $uname && $row['pw'] === $pass) {
            	$_SESSION['nom'] = $row['nom'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: index.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php?error=pb");
	exit();
}
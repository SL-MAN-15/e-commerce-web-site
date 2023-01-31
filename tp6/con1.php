<?php 
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>	Connexion </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
	<style>
		
		
		

		body{
			
			background-color: #383e46;
			margin: 0px;
		}
		*{
			color:white;
			
		}
		input{
			
			font-size: 20px;
		}
		label{
			font-size: 20px;
		}
		header{
	background-color:#277ef2;
	
	width: 100%;
    height: 65px;
    
    
	
    display: block;

}
		h1{
			color:white;
		}
		
		body{
			margin: 0px;
			padding: 0px;
			margin-left: 25%;
			
		}
		h1{
			margin-top: 0px;
		}
	
	</style>
	
</head>

<body>
	
	
	<header >
	<h1 align="center">Connexion</h1>
	</header>
	<br><br>
	<div align="center">
	<form action="" method="post" >
	  <label for="textfield">Login</label>
      <input type="text" name="log" id="textfield">
      <label for="password">Password</label>
      <input type="password" name="pw" id="password">
	
	<br>
	  <input type="submit" name="submit" id="submit" value="Submit">
	</form></div>
	<?php
	$_SESSION["con"]=0;
if(isset($_POST['submit']) && isset($_POST['log']) && isset($_POST['pw'])){
	if($_POST["log"]=="admin" && $_POST["pw"]=="admin2626" ){
		$_SESSION["con"]=1;
		header('Location:TP6.html');
		exit;
	}
	else{
		echo "password ou login faux ";
		
	}
	
	
}



?>
</body>
</html>

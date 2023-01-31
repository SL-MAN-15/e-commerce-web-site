<?php session_start();?>
<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Buy</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<link href="mainstyle.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	
	<link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
<link rel="manifest" href="../site.webmanifest">
<link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
	
	
	
	<style>
		.col
		{
			padding: 5px;
			margin: 5px;
			//border: solid;
			height: 600px;
			overflow: hidden;
			border-radius: 10px;
			 padding: 20px;
  box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1), 0 0 0 2px rgb(255, 255, 255),
    0.3em 0.3em 1em rgba(0, 0, 0, 0.3);

		}
		.col:hover{
			
		}
		
		footer{
			margin-bottom: 0px;
		}
		body{
			height: 100%;
		}
		.gg{
			height: 50px;
			text-align: center;
			 text-align: justify;
			text-align: center;
			padding-top: 10px;
		}
		footer{
   
    text-align: center;
    position: fixed;
    
    width: 67%;
			bottom: 0;
    border-top: 0px;
}
		.pp{
			margin-right: 100px;
		}
		img:hover{
   filter: blur(2px);
}

		body {
    text-align: center;
}
form {
    display: inline-block;
	margin-top: 30px;
}
		nav{
			margin-bottom: 50px;
		}
		.conf{
			margin-left: 80px;
		}
		.sub{
			width: 120px;
			height: 45px;
			margin-top: 50px;
			margin-left: 55px;
			
		}
		.l{
			margin-left: 110px;
		}
		
		@media only screen and (min-width: 1200px) {
  .tt{
			margin-left: 150px;
		}
			.conf{
			margin-left: 39px;
		}
}
	
	</style>
</head>

<body>
	<nav>
        <div class="back">
            <a href="../index.php" >retourner</a>
        </div>
        <div class="title">
            <h1>confirmer</h1>
        </div >
        <div class="back">
			
			</div>
    </nav>
	<h1 align="center"> s'insrire </h1>
	<form action="" method="post" >
	  <label for="textfield">Nom:</label>
      <input name="nom" type="text" required="required" >
      <label for="textfield2">Prenom:</label>
      <input name="prenom" type="text" required="required" >
		<label for="textfield2">Login:</label>
      <input name="login" type="text" required="required" >
      <label for="email">Email:</label>
      <input name="email" type="text" required="required" >
		<label for="email">Numero du telephone :</label>
      <input name="num" type="number" required="required" >
      <label for="password">Password:</label>
      <input name="pw1" type="password" required="required" >
      
      <label for="password2">Reperter le Password:</label>
      <input name="pw2" type="password" required="required" id="password2">
      <input type="submit" name="submit" id="submit" value="Submit" class="sub">
		
	
	
	
	</form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
	$n=$_POST["nom"];
	$p=$_POST["prenom"];
	$l=$_POST["login"];
		$e=$_POST["email"];
		$p1=$_POST["pw1"];
		$p2=$_POST["pw2"];
	$num=$_POST["num"];
	$_SESSION["c"]=0;
	
	
	if($p1==$p2){
		$_SESSION["num"]=$num;
		$_SESSION["nom"]=$n;
		$_SESSION["email"]=$e;
		//send mail hna 
		$_SESSION["l"]=$l;
		$_SESSION["p1"]=$p1;
		$_SESSION["p"]=$p;
		
		
		
		header('Location:mail/verifier.php');
			exit;
		
		
		
	}
	else{
		echo "verifer ton mot de pass ";
	}
	
}








?>
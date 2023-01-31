<?php session_start();?>
<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Buy</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="mainstyle.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
	
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
		.red{
			color: red;
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


		body {
    text-align: center;
}
form {
    display: inline-block;
}
		nav{
			margin-bottom: 50px;
		}
		.conf{
			margin-left: 40px;
		}
				@media only screen and (max-width: 800px) {
					.conf{
						margin-left: 100px;
						
					}
					.fl{
						font-size: 10px;
						padding: 0px;
						font-weight: 900;
							
					}
					nav .back a {
    padding: 8px 7px;
    text-decoration: none;
    color: #2c3e50;
    background: #f5f6fa;
    border-radius: 25px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
						display: none;
}
					
  
}
		
		
		@media only screen and (min-width: 1200px) {
  .tt{
			margin-left: 150px;
		}
			.conf{
			margin-left: 50px;
		}
}
	
	</style>
</head>

<body>
	<nav>
        <div class="back">
			
			
            <a href="../index.php" class="fl">retourner</a>
        </div>
        <div class="title">
            <h1>confirmer</h1>
        </div >
        <div class="back">
			
			</div>
    </nav>
	<br>
	
  
	  <form action="" method="post">
		
			
		
		
	    <label for="textfield">Nom : <span class="red">* </span></label>
            <input type="text" name="nom" id="textfield" required>
        <br><br>
		  <label for="textfield2">Prenom : <span class="red">* </span></label>
            <input type="text" name="prenom" id="textfield2" required>
        <br><br>
		  <label for="textfield2">Email :</label>
            <input type="text" name="email" id="textfield2">
            <br><br>
        <label for="number">Numero du telephone : <span class="red">* </span></label>
        <input type="number" name="num" id="number" required>
		  <br><br>
		  <label for="texield">Adresse : <span class="red">* </span></label>
		  <textarea name="add" required></textarea>
		  
		  <br><br>
	    <input type="submit" name="sub" id="submit" value="confirmer" class="conf">
		  <br>
		  <br>
	   
	  </form>
   <?php
		  
			  if($_SESSION["v"]==1){
				  
				  echo "<p >commande valider</p>";
			  }
		  
		  
		  
		  ?>
    	  

	
	
</body>
</html>

<?php

if(isset($_POST["sub"])){
$dd="market_26";
$ch="mysql:host=mysql-market.alwaysdata.net;dbname=$dd";
$u="market";
$pwd="Mouh2626";

$id=new PDO ($ch,$u,$pwd);
	
$ach=$_GET["va1"];	
$n=$_POST["nom"];

	$p=$_POST["prenom"];
	$e=$_POST["email"];
	$num=$_POST["num"];
	$ad=$_POST["add"];
	$date = date('d-m-y h:i:s');


	
	
	
$sql="INSERT INTO `buy` (nom,prenom,ntel,achat,date,email,address) 
VALUES ('$n','$p','$num','$ach','$date','$e','$ad')";

$id->exec($sql);
	
	$_SESSION["prenom"]=$p;
	$_SESSION["num"]=$num;
	$_SESSION["command"]=$ach;
	$_SESSION["add"]=$ad;
	
	header('Location:mail1/send1.php');
	

}



?>

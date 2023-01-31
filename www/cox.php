<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>connexion</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
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
		.err{
			color:red;
			
		}
		.conf{
			margin-left: 80px;
		}
		.sub{
			width: 120px;
			height: 45px;
			margin-top: 80px;
			
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
            <h1>connexion</h1>
        </div >
        <div class="back">
			
			</div>
    </nav>
	<br>
	<h1 align="center">Se connecter</h1>
	
	<form action="" method="post" align="center">
	  <label for="textfield" class="l">login:</label>
      <input type="text" name="login" id="textfield" class="l">
		
      <label for="password" class="l">Password:</label><input type="password" name="pw" id="password" class="l"><br>
		
		<br>
      
	
	
	
	
	
	  <input type="submit" name="submit" id="submit" value="Submit" class="sub b">

	</form>
		<a href="insc.php" class="ins b"><button>s'insrire</button></a>
	<?php 
		if(isset($_SESSION["x"]) && $_SESSION["x"]==1)
		
		echo "<h5 class='err'>faux password ou login</h5>";  
		
		?>
</body>
</html>


<?php

$_SESSION["coo"]=0;
if(isset($_POST["submit"])){
	
	if($_POST["pw"]=="2626" && $_POST["login"]=="admin"){
		$_SESSION["ses"]=1;
		$_SESSION["x"]=0;
		header('Location:admin.php');
exit;
		
	}
	else{
		$dd="market_26";
$ch="mysql:host=mysql-market.alwaysdata.net;dbname=$dd";
$u="market";
$pwd="Mouh2626";


//conecton a la data base :-----------------------------------------
$id=new PDO($ch,$u,$pwd);
$xv=0;
$sql="SELECT * FROM abon";
	$req= $id->prepare($sql);
	$e=$req->execute(); 
		if(!$e)	{
			echo "la requete a echouer ";}
				

	while ( $enreg= $req->fetch() ) {
	$mat=$enreg['id'];
		if($enreg['login'] == $_POST["login"]  && $enreg['pw'] == $_POST["pw"]){
			
			$_SESSION["login"]=$enreg['login'] ;
			$_SESSION["coo"]=1;
			header('Location:../index.php');
exit;
		}
	

	  }
		$_SESSION["x"]=1;
	}
	
	
	
	
}



?>
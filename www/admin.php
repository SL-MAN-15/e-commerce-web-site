<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Affichage</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<link href="mainstyle.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	
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
			height: 200px;
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

		
		@media only screen and (min-width: 1200px) {
  .tt{
			margin-right: 200px;
		}
}
	
	</style>
</head>

<body>
	<nav>
        <div class="back">
            <a href="../index.php" >Retourner</a>
        </div>
        <div class="title">
            <h1>affichage </h1>
        </div >
        
    </nav>
	<br><br>
	
	<table align="center">
	 <tbody>
    <tr align="center">
      <td align="center">ID</td>
      <td align="center">Nom</td>
      <td align="center">Numero du telephone</td>
      <td align="center">Produit</td>
      <td align="center" >Date</td>
      <td align="center">Adresse</td>
		
    </tr>
	  <?php 
		 
	$dd="market_26";
$ch="mysql:host=mysql-market.alwaysdata.net;dbname=$dd";
$u="market";
$pwd="Mouh2626";


//conecton a la data base :-----------------------------------------
$id=new PDO($ch,$u,$pwd);

$sql="SELECT * FROM buy";
	$req= $id->prepare($sql);
	$e=$req->execute(); 
		if(!$e)	{
			echo "la requete a echouer ";}
				

	while ( $enreg= $req->fetch() ) {
	$mat=$enreg['id'];
		$nom=$enreg['nom'];
		
		$age=$enreg['ntel'];
	$w=$enreg['achat'];
		$a=$enreg['date'];
	$x=$enreg['address'];
	
		
echo " <tr align='center'>

      <td align='center'>$mat</td>
      <td align='center'> $nom</td>
      
      <td align='center'>0$age</td>
	  <td align='center'>$w</td>
      <td align='center'>$a</td>
	  <td align='center'>$x</td>
    </tr>";
	  }
	  
	  ?>
  </tbody>
</table>
	
	

	
</body>
</html>
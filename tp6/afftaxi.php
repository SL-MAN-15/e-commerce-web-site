<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Affichage taxi</title>
<style>
		body{
			background-color: #383e46;
			
		}
	
		
		
	form{
		margin-left: 40%;
		
		
	}
		*{
			
			color: white;
		}
		
		input{
			background:#1C315E;
			display: block;
			font-size: 20px;
			height: 40px;
			border-radius: 10px;
			border-width: 2px;
			min-width: 90px;
			margin-bottom: 15px;
			border-style:solid;
			border-color: aqua;
			
			
		}
		#submit:hover{
			background-color: #277ef2;
		}
		a{
			text-decoration: none;
			
		}
		
		
		label{
			padding: 10px;
			font-size: 25px;
			margin-top:70px; 
			
		}
	a:hover{
		text-decoration:underline;
		cursor: pointer;
	}
		
	tr:nth-child(even) {background: #277ef2;}
	table{
		border-radius: 30px;
	border-width: 0px;
		font-size: 18px;
	}
	th,td{
		
		border-width: 0px;
		height: 28px;
		
	}
	</style>
	
	
</head>

<body style="padding:0px;
			margin-top:0px; 
			margin: 0px;
			background-color: #383e46;
			margin-left: 20%;
			 margin-right: 20%;
				">
	<nav style="background-color:#277ef2;
	margin: 0px;width: 100%;padding-top: 10px;height: 50px; display: block;margin-bottom: 30px;">
	<h1 align="center" style="	margin-top: 0px;
	color: white;margin-top: 0px;">table taxi</h1>
	</nav>
<a href="affi.php"><input type="button" value="return" ></a><br>
<table  align="center" cellpadding="0" cellspacing="0" >
	 <tbody >
    <tr align="center">
      <td width="227" height="39">matricule</td>
      <td width="234">nom chauffeur</td>
      <td width="275">wilaya</td>
      <td width="168">age vecule</td>
      
    </tr>
	  <?php 
		 
		 class taxi{
			 
			 public $x;
			 public function __construct($n){
				 $this->x=$n;
			 }
			 public function aff(){
				 	 
	$dd="slman26_28";

$ch="mysql:host=mysql-slman26.alwaysdata.net;dbname=$dd";
$u="slman26";
$pwd="mouh2626";


//conecton a la data base :-----------------------------------------
$id=new PDO($ch,$u,$pwd);

$sql="SELECT * FROM taxi";
	$req= $id->prepare($sql);
	$e=$req->execute(); 
		if(!$e)	{
			echo "la requete a echouer ";}
				

	while ( $enreg= $req->fetch() ) {
	$mat=$enreg['matricule'];
		$nom=$enreg['nomch'];
		$wil=$enreg['wilayae'];
		$age=$enreg['agevecul'];
	
		
echo " <tr align='center'>

      <td align='center'>$mat</td>
      <td align='center'> $nom</td>
      <td align='center'>$wil</td>
      <td align='center'>$age</td>
	  
    </tr>";
	  }
				 
				 
			 }
			 
		 }
		 
		 
		 $tax=new taxi("12");
		 $tax->aff()
		 
		 
		 
	
	  
	  ?>
  </tbody>
</table>
</body>
</html>
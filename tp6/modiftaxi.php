<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>modifier taxi</title>
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
	color: white;margin-top: 0px;">modifier taxi</h1>
	</nav>
	
	<form action="" method="post">
	<a href="modif.php"><input type="button" value="return" ></a><br>
		 <label for="textfield">valeur matriciule :</label>
      <input type="number" name="emat" >
	  <label for="textfield">Nouvelle valeur matriciule :</label>
      <input type="number" name="mat" >
		<label for="textfield"> Nouvelle valeur nom chaufeur :</label>
      <input type="text" name="nom" >
		<label for="textfield"> Nouvelle valeur wilaya :</label>
      <input type="text" name="wil" >
	<label for="textfield"> Nouvelle valeur age vehicule :</label>
      <input type="number" name="num" >
	  <input type="submit" name="submit" id="submit" value="Submit">
	</form>
	
</body>
</html>
<?php
if(isset($_POST["submit"])){
	
	
	class taxi{
		
		public $emat,$mat,$nom,$wil,$num;
	
		public function __construct($em,$m,$n,$w,$nu){
			$this->emat=$em;
			$this->mat=$m;
			$this->nom=$n;
			$this->wil=$w;
			$this->num=$nu;
			
		}
		public function modif(){
				/************* connexion */
        $dd="slman26_28";
           $ch="mysql:host=mysql-slman26.alwaysdata.net;dbname=$dd";
           $u="slman26";
            $pwd="mouh2626";

             $id=new PDO($ch,$u,$pwd);
/********************************************************************************/
			$m=$this->mat;
			$n=$this->nom;
			$w=$this->wil;
			$nu=$this->num;
			$em=$this->emat;
			
			$sql="UPDATE taxi SET matricule=$m,nomch='$n',wilayae='$w',agevecul=$nu where matricule=$em";
	
				$id->exec($sql);
			
		}
		
	}
	
	
$emat=$_POST['emat'];
$mat=$_POST['mat'];
$nom=$_POST['nom'];
$wil=$_POST['wil'];
$num=$_POST["num"];

	$mtaxi=new taxi($emat,$mat,$nom,$wil,$num);
	$mtaxi->modif();
	
	
	
	

}
?>


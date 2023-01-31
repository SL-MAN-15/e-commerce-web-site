<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ajouter taxi </title>
	
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
		a:hover{
		text-decoration:underline;
		cursor: pointer;
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
	color: white;margin-top: 0px;">Ajouter un taxi</h1>
	</nav>
	<form action="" method="post"><a href="ajou.php"><input type="button" value="return" ></a><br>
	  <label for="textfield">matriciule :</label>
		<input type="text" name="mat" >
<label for="textfield"> nom chaufeur :</label>
      <input type="text" name="nom" >
		<label for="textfield"> wilaya :</label>
      <input type="text" name="wil" >
	<label for="textfield"> age vehicule :</label>
      <input type="number" name="num" ><br>
	  <input type="submit" name="submit" id="submit" value="Submit" class="vv">
	</form>
	
</body>
</html>
<?php
if(isset($_POST["submit"])){
	
	class taxi{
		
		public $mat,$nom,$wil,$num;
	
		public function __construct($m,$n,$w,$nu){
			$this->mat=$m;
			$this->nom=$n;
			$this->wil=$w;
			$this->num=$nu;
			
		}
		public function ajouter(){
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
			
			$sql="INSERT INTO `taxi` VALUES
				($m, '$n','$w',$nu)";
	
				$id->exec($sql);
			
		}
		
	}
	
	

	
	
	
$mat=$_POST['mat'];
$nom=$_POST['nom'];
$wil=$_POST['wil'];
$num=$_POST["num"];

	$taxi=new taxi($mat,$nom,$wil,$num);
	$taxi->ajouter();

}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>modifier client</title>
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
	color: white;margin-top: 0px;">modifier client</h1>
	</nav>
	
	<form action="" method="post">
<a href="modif.php"><input type="button" value="return" ></a><br>
	
		<label for="textfield"> la valeur actuelle numero cart :</label>
      <input type="number" name="encart" >
	  <label for="textfield"> nouvelle valeur numero cart :</label>
      <input type="number" name="ncart" >
		<label for="textfield">nouvelle valeur  nom :</label>
      <input type="text" name="nom" >
		<label for="textfield"> nouvelle valeur numero de telephone :</label>
      <input type="number" name="num" >
	  <input type="submit" name="submit" id="submit" value="Submit">
	</form>
	
</body>
</html>
<?php
if(isset($_POST["submit"])){
	
	
	
		class clien{
		
		public $emat,$mat,$nom,$num;
	
		public function __construct($em,$m,$n,$nu){
			$this->emat=$em;
			$this->mat=$m;
			$this->nom=$n;
			$this->num=$nu;
			
		}
		public function modif(){
/****************************connexion*******************************************/
           $dd="slman26_28";
           $ch="mysql:host=mysql-slman26.alwaysdata.net;dbname=$dd";
           $u="slman26";
           $pwd="mouh2626";

            $id=new PDO($ch,$u,$pwd);
/********************************************************************************/
			$m=$this->mat;
			$n=$this->nom;
			$nu=$this->num;
			$em=$this->emat;
			
	
		$sql="UPDATE client SET numerocart=$m,nom='$n',numerotel=$nu where numerocart=$em";
	
		$id->exec($sql);
			
		}
		
	}
	
	
	$emat=$_POST['encart'];
	$mat=$_POST['ncart'];
	$nom=$_POST['nom'];
	$num=$_POST['num'];

	$mclien=new clien($emat,$mat,$nom,$num);
	$mclien->modif();
	
	
}
?>


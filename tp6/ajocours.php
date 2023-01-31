<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ajouter coure</title>
<style>
		body{
			background-color: #383e46;
			
		}
		
		
	form{
		margin-left: 40%;
		
		
	}
	a:hover{
		text-decoration:underline;
		cursor: pointer;
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
	color: white;margin-top: 0px;">Ajouter une  course</h1>
	</nav>
	
	<form action="" method="post">
		<a href="ajou.php"><input type="button" value="return" ></a><br>
	  <label for="textfield">longeur du trajet en km  :</label>
      <input type="number" name="mat" >
		
		<label for="textfield"> date de depart :</label>
      <input type="date" name="dtdep" >
		
		<label for="textfield"> date arriver :</label>
      <input type="date" name="dtarr" >
		
	<label for="textfield"> numero du client :</label>
      <input type="number" name="num" >
		
		<label for="textfield"> matricule de vecule :</label>
      <input type="number" name="matt" >
		  <input type="submit" name="submit" id="submit" value="Submit">
	</form>
	
</body>
</html>
<?php
if(isset($_POST["submit"])){
	
	
	class cours{
		
		public $mat,$dtdep,$dtar,$num,$matt;
	
		public function __construct($m,$dtdep,$dtar,$num,$matt){
			$this->mat=$m;
			$this->dtdep=$dtdep;
			$this->dtar=$dtar;
			$this->num=$num;
			$this->matt=$matt;
			
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
			$dtd=$this->dtdep;
			$d=$this->dtar;
			$n=$this->num;
			$ma=$this->matt;
			
			$x=rand(0,9999);
$sql="INSERT INTO `course` VALUES
	($x,$m, '$dtd','$d',$n,$ma)";
	$id->exec($sql);
			
		}
		
	}
	
	

	
	
$mat=$_POST['mat'];
$dtdep=$_POST['dtdep'];
$dtar=$_POST['dtarr'];
$num=$_POST["num"];
$matt=$_POST['matt'];

	$taxi=new cours($mat,$dtdep,$dtar,$num,$matt);
	$taxi->ajouter();
	
	
	
	
	
	
	
	
	
	
	

}
?>


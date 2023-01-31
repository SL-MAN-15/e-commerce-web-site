<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>modifier course</title>
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
	color: white;margin-top: 0px;">modifier course</h1>
	</nav>
	
	
	<form action="" method="post">
	<a href="modif.php"><input type="button" value="return" ></a><br>
	
		
		 <label for="textfield">code cours :</label>
      <input type="number" name="ecode" >
		
		 <label for="textfield">nouvelle valeur code cours :</label>
      <input type="number" name="code" >
		
	  <label for="textfield">nouvelle valeur longeur du trajet en km  :</label>
      <input type="number" name="mat" >
		
		<label for="textfield"> nouvelle valeur date de depart :</label>
      <input type="date" name="dtdep" >
		
		<label for="textfield">nouvelle valeur  date arriver :</label>
      <input type="date" name="dtarr" >
		
	<label for="textfield">nouvelle valeur  numero du client :</label>
      <input type="number" name="num" >
		
		<label for="textfield">nouvelle valeur  matricule de vecule :</label>
      <input type="number" name="mat" >
		  <input type="submit" name="submit" id="submit" value="Submit">
	</form>
	
</body>
</html>
<?php
if(isset($_POST["submit"])){
	
	
	class cours{
		
		public $ecode,$code,$dtdep,$dtar,$num,$matt;
	
		public function __construct($c,$ec,$mat,$dtdep,$dtar,$num,$mat1){
			$this->ecode=$ec;
			$this->code=$c;
			$this->mat=$mat;
			$this->dtdep=$dtdep;
			$this->dtar=$dtar;
			$this->num=$num;
			$this->matt=$mat1;
			
		}
		public function modif(){
				/************* connexion */
        $dd="slman26_28";
           $ch="mysql:host=mysql-slman26.alwaysdata.net;dbname=$dd";
           $u="slman26";
            $pwd="mouh2626";

             $id=new PDO($ch,$u,$pwd);
/********************************************************************************/
			$ecode=$this->ecode;
			$code=$this->code;
			$mat=$this->mat;
			$dtdep=$this->dtdep;
			$dtar=$this->dtar;
			$num=$this->num;
			$mat=$this->matt;
			
			
$sql="UPDATE course SET codecours=$code,longeur='$mat',datedep='$dtdep',datearr='$dtar',numclien=$num,matrivec=$mat where codecours=$ecode";
	$id->exec($sql);
			
		}
		
	}
	
	
	
$c=$_POST['code'];
$ec=$_POST['ecode'];
$mat=$_POST['mat'];
$dtdep=$_POST['dtdep'];
$dtar=$_POST['dtarr'];
$num=$_POST["num"];
$mat=$_POST['mat'];

	$taxi=new cours($c,$ec,$mat,$dtdep,$dtar,$num,$mat);
	$taxi->modif();
	
	

}
?>


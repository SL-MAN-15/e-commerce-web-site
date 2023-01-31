


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
	
	<link rel="apple-touch-icon" sizes="180x180" href="../../apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../favicon-16x16.png">
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
			width: 150px;
			height: 45px;
			margin-top: 50px;
			margin-left: 30px;
			
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
            <a href="../../index.php" >retourner</a>
        </div>
        <div class="title">
            <h1>confirmer</h1>
        </div >
        <div class="back">
			
			</div>
    </nav>
	<form action="" method="post">
		
	<input name="code" type="number" placeholder="code">
	<input type="submit" name="submit" class="sub">

	</form>
		<?php
		if(isset($_POST["submit"])){
			$e=$_POST["code"];
			$z=$_SESSION["c"];
			
	if($z==$e){
		//remplire data base avec les info inscription 
		echo "vrai";
		
		$num=$_SESSION["num"];
		$n=$_SESSION["nom"];
		$e=$_SESSION["email"];
		//send mail hna 
		$l=$_SESSION["l"];
		$p1=$_SESSION["p1"];
		$p=$_SESSION["p"];
		$l=$_SESSION["l"];
		$dd="market_26";
		$ch="mysql:host=mysql-market.alwaysdata.net;dbname=$dd";
		$u="market";
		$pwd="Mouh2626";

		$id=new PDO ($ch,$u,$pwd);
		
		$sql="INSERT INTO `abon` (login,nom,prenom,ntel,pw,email) 
		VALUES ('$l','$n','$p','$num','$p1','$e')";

		$id->exec($sql);
		header('Location:inter.php');
			exit;
		
		
	}
	else{
		
		echo "faux";
	}
	
	
}
		
		
		?>
</body>
</html>

<?php

$x=$_SESSION["email"];
$l=$_SESSION["l"];

/*##########Script Information#########
  # Purpose: Send mail Using PHPMailer#
  #          & Gmail SMTP Server 	  #
  # Created: 24-11-2019 			  #
  #	Author : Hafiz Haider			  #
  # Version: 1.0					  #
  # Website: www.BroExperts.com 	  #
  #####################################*/

//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
	
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	if($_SESSION["c"]==0){
		$mail->Username = "ecomalways@gmail.com";
//Set gmail password
	$mail->Password = "izfauszixecrjalo";
//Email subject
	$mail->Subject = "CODE DE VERIFICATION MARKET"; //object 
//Set sender email
	$mail->setFrom('ecomalways@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
		if($_SESSION["c"]==0){
  $ra=rand(1000,9999);
	$_SESSION["c"]=$ra;
	
}
//	$mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body = "<h1>bonjour $l</h1><P>bienvenu sur notre site web qui est fait pour le ecomerce</p><p>Voici le code $ra </p>";
//Add recipient
	$mail->addAddress($x);//email reciver liman 7ab neb3eth

//Finally send email

	if ( $mail->send() ) {
		
	}else{
		echo "Message could not be sent. Mailer Error: ";
	}
//Closing smtp connection
	$mail->smtpClose();
}


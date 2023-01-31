<?php
session_start();
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
	$mail->Username = "ecomalways@gmail.com";
//Set gmail password
	$mail->Password = "izfauszixecrjalo";
$com=$_SESSION['command'] ;
$p=$_SESSION["prenom"];
	$num=$_SESSION["num"];
$add=$_SESSION["add"];



//Email subject
	$mail->Subject = "commande $com"; //object 
//Set sender email
	$mail->setFrom('ecomalways@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
//	$mail->addAttachment('img/attachment.png');
//Email body


	$mail->Body = "<h1>commande $com </h1><p>prenom :$p  </p><p>numero :$num  </p><p>adresse : $add </p><p>commande : $com </p>";
//Add recipient
	$mail->addAddress('slimanebilek@gmail.com');//email reciver liman 7ab neb3eth
//Finally send email
	if ( $mail->send() ) {
		echo "Email Sent..!";
	}else{
		echo "Message could not be sent. Mailer Error: ";
	}
//Closing smtp connection
	$mail->smtpClose();

$_SESSION["v"]=1;
header('Location:../buy.php');
exit;



<?php
session_start();

if (!isset($_SESSION["coo"])){
	$_SESSION["coo"]=0;
	
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>market</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<link href="www/mainstyle.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
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
  box-shadow: inset 0 -3em 4em rgba(0, 0, 0, 0.05), 0 0 0 2px rgb(255, 255, 255),
    0.1em 0.1em 1em rgba(0, 0, 0, 0.3);
			

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
			padding-top: 15px;
		}
		footer{
   
    text-align: center;
    position: fixed;
    
    width: 67%;
			bottom: 0;
    border-top: 0px;
}
		/*****************************************/
		.fill {
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden
}
.fill .fff {
    flex-shrink: 0;
    min-width: 100%;
    min-height: 100%
}
		
		
		
		/*****************************************/
		
		.pp{
			margin-right: 100px;
		}
		.fff:hover{
   filter: blur(1px);
			
}
		.hhh{
			margin-top: 4px;
		}
		.col{
			padding-bottom: 20px;
			margin-top: 0px;
		}
		
		
		@media only screen and (min-width: 1200px) {
  .tt{
			margin-right: 200px;
		}
}
		.lien{
			color: black;
			font-weight: 600;
		}
		.lien:hover{
			text-decoration: none;
			color: gray;
			font-weight: 700;
		}
		.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 18%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 15px;
  padding: 10px;
  text-align: center;
			width: 210px;
			height: 50px;
			buttom:100px;
			top: 150px;
			
}
		@media only screen and (max-width: 1000px) {
			.overlay {
				
				width: 190px
			}
			.fin{
				display: none;
			}
			.hhh{
				display: none;
			}
			.gg{
				display: none;
			}
			img{
				height: auto;
				width: auto;
			}
			.row{
			display: block;
				hei
		}
			footer{
				display: none;
			}
			.ggg{
				position:absolute;
				right:20px;
				
			}
			.col{
				height: auto;
				width: 60%;
				margin-left: 20%;
				margin-bottom: 20px;
				border-radius: 5px;
			}
					.overlay {
  position:sticky; 
  bottom: :fixed;ckground: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 18%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 15px;
  padding: 10px;
  text-align: center;
			width: 100%;
			
			
}
			.yt{
				margin-right: 10px;
				
			}	
			.back{
				width: 60px;
			}
					.col .overlay {
  opacity: 1;
}
		
		}
			


		
			
		



		.container {
  position: relative;
 
 
}
	
		.fff {
  display: block;
  width: 100%;
  height: auto;
}
			@media only screen and (min-width: 1100px) {
		
						.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 18%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 15px;
  padding: 10px;
  text-align: center;
			width: 210px;
			height: 50px;
			buttom:100px;
			top: 150px;
			
}
							
.col:hover .overlay {
  opacity: 1;
}

		}
		
	</style>
</head>

<body >
	<nav>
        <div class="back">
            <a href="https://www.instagram.com/slimanebilek/" target="_blank"><img src="instra.png" alt=""/></a>
        </div>
        <div class="title">
            <h1>market</h1>
        </div >
        <div class="back yt">
			
			<a href="www/cox.php"> Login </a></div>
    </nav>
	<br>
	
	
	<br>
	
	 <div class="container">
  <div class="row">
    <div class="col fill">
    <a href="<?php if($_SESSION["coo"]==0){
	echo("www/buy.php?va1=Palmier");}
	else{
		echo "www/buyess.php?va1=Palmier";
}
?>"><img src="2841303994_1.jpg" alt="" height="500" class="fff"/> <div class="overlay" id="n">Nekhla 400000 DA</div> </a> </div>
    <div class="col fill">
		<a href="www/buy.php?va1=datte"><img src="tm.jpg" width="400" height="600" alt="" class="fff"/>
		 <div class="overlay" id="t">tmer 300 DA/KG</div>
		</a>
    </div>
    <div class="col fin">
      
    </div>
  </div>
		  <div class="row hhh">
    
      
     <div class="col gg">
		<a href="www/buy.php?va1=Palmier" class="lien">40000 DA</a>
     </div>
    <div class="col gg">
      <a href="www/buy.php?va1=datte" class="lien">300 DA</a>
    </div>
    <div class="col gg">
		
    </div>
  </div>
</div>
	<footer>
      
        <p class="tt"> Copyright © : market.alwaysdata.net </p>     
    </footer>
	<script> 
	var mq = window.matchMedia( "(max-width: 1100px)" );
if (mq.matches) {
    document.getElementById("n").innerHTML="Nekhla 400000 DA"
		document.getElementById("t").innerHTML="tmer 30000 DA"
}
else {
    // window width is greater than 570px
	document.getElementById("n").innerHTML="Nekhla"
		document.getElementById("t").innerHTML="tmer"
}
	
	
	
	
	</script>
</body>
</html>
<?php
$_SESSION["v"]=0;


?>
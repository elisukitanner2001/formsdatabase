<!DOCTYPE html>
<html>

	<head>
		<meta charset ="UTF-8">
		<title>Test PHP Eli</title>
		<link rel="stylesheet" type="text/css" href="CSS/testphp.css">
		<link rel="stylesheet" type="text/css" href="CSS/w3.css">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/testphp.js"></script>
	</head>
	<body>
		<style>
			table {
				width: 90%;
				margin: auto;
				border: 2px solid black;
				background-color: #aaccff;
				border-spacing: 5px;
				border-radius: 20px;
			}

			th {
				border: 2px solid black;
				background-color: #FF00FF;
				border-radius: 7px;
			}

			td {
				border: 2px solid black;
				padding: 10px;
				border-radius: 7px;
			}
		</style>

		<div class="w3-sidebar w3-bar-block" style="display:none; background-color: #26c855;" id="mySidebar">
			<button onclick="w3_close()" class="w3-bar-item w3-button w3-large">
				Close &times;
			</button>
			<a href="http://westada.net/b1/mrm" class="w3-bar-item w3-button">Mr. M</a>
			<a href="http://westada.net/b1/elit" class="w3-bar-item w3-button">Eli T.</a>
			<a href="http://westada.net/b1/dallind" class="w3-bar-item w3-button">Dallin D.</a>
			<a href="http://westada.net/b1/hannahw" class="w3-bar-item w3-button">Hannah W.</a>
			<a href="http://westada.net/b1/loganw" class="w3-bar-item w3-button">Logan W.</a>
			<a href="http://westada.net/b1/abdulazizk" class="w3-bar-item w3-button">Abdulaziz K.</a>
			<a href="http://westada.net/b1/chasek" class="w3-bar-item w3-button">Chase k.</a>
			<a href="http://westada.net/b1/kylet" class="w3-bar-item w3-button">Kyle K.</a>
			<a href="http://westada.net/b1/donavanw" class="w3-bar-item w3-button">Donavan W</a>

			<a href="http://westada.net/b1/lukec" class="w3-bar-item w3-button">Luke C.</a>
			<a href="http://westada.net/b1/tylerc" class="w3-bar-item w3-button">Tyler C.</a>
			<a href="http://westada.net/b1/peterh" class="w3-bar-item w3-button">Peter H.</a>
			<a href="http://westada.net/b1/justinf" class="w3-bar-item w3-button">Justin F.</a>
			<a href="http://westada.net/b1/ethana" class="w3-bar-item w3-button">Ethan A.</a>
			<a href="http://westada.net/b1/johnh" class="w3-bar-item w3-button">John H.</a>
			<a href="http://westada.net/b1/jjn" class="w3-bar-item w3-button">JJ N.</a>
			<a href="http://westada.net/b1/connerf" class="w3-bar-item w3-button">Conner F.</a>
			<a href="http://westada.net/b1/carterh" class="w3-bar-item w3-button">Carter H.</a>
			<a href="http://westada.net/b1/brendans" class="w3-bar-item w3-button">Brendans S.</a>
			<a href="http://westada.net/b1/alejandroe" class="w3-bar-item w3-button">Alejandro E.</a>
			<a href="http://westada.net/b1/roscoa" class="w3-bar-item w3-button">Rosco A.</a>

			<a href="http://westada.net/b1/danic" class="w3-bar-item w3-button">Dani C.</a>
			<a href="http://westada.net/b1/isaacw" class="w3-bar-item w3-button">Isaac W.</a>
<!--
			<a href="http://192.168.1.100/b1mrm" class="w3-bar-item w3-button">Mr. M</a>
			<a href="http://192.168.1.101/b1elit" class="w3-bar-item w3-button">Eli T.</a>
			<a href="http://192.168.1.102/b1dallind" class="w3-bar-item w3-button">Dallin D.</a>
			<a href="http://192.168.1.104/b1hannahw" class="w3-bar-item w3-button">Hannah W.</a>
			<a href="http://192.168.1.105/b1loganw" class="w3-bar-item w3-button">Logan W.</a>
			<a href="http://192.168.1.106/b1abdulazizk" class="w3-bar-item w3-button">Abdulaziz K.</a>
			<a href="http://192.168.1.107/b1chasek" class="w3-bar-item w3-button">Chase k.</a>
			<a href="http://192.168.1.108/b1kylet" class="w3-bar-item w3-button">Kyle K.</a>
			<a href="http://192.168.1.109/b1donavanw" class="w3-bar-item w3-button">Donavan W</a>

			<a href="http://192.168.1.110/b1lukec" class="w3-bar-item w3-button">Luke C.</a>
			<a href="http://192.168.1.111/b1tylerc" class="w3-bar-item w3-button">Tyler C.</a>
			<a href="http://192.168.1.112/b1peterh" class="w3-bar-item w3-button">Peter H.</a>
			<a href="http://192.168.1.113/b1justinf" class="w3-bar-item w3-button">Justin F.</a>
			<a href="http://192.168.1.114/b1ethana" class="w3-bar-item w3-button">Ethan A.</a>
			<a href="http://192.168.1.115/b1johnh" class="w3-bar-item w3-button">John H.</a>
			<a href="http://192.168.209/b1jjn" class="w3-bar-item w3-button">JJ N.</a>
			<a href="http://192.168.1.117/b1connerf" class="w3-bar-item w3-button">Conner F.</a>
			<a href="http://192.168.1.118/b1carterh" class="w3-bar-item w3-button">Carter H.</a>
			<a href="http://192.168.1.119/b1brendans" class="w3-bar-item w3-button">Brendans S.</a>
			<a href="http://192.168.1.120/b1alejandroe" class="w3-bar-item w3-button">Alejandro E.</a>
			<a href="http://192.168.1.121/b1roscoa" class="w3-bar-item w3-button">Rosco A.</a>

			<a href="http://192.168.1.122/b1danic" class="w3-bar-item w3-button">Dani C.</a>
			<a href="http://192.168.1.123/b1isaacw" class="w3-bar-item w3-button">Isaac W.</a>

			<a href="http://192.168.1.100/b1mrm" class="w3-bar-item w3-button">Mr. M</a>
			<a href="http://192.168.1.101/b1elit" class="w3-bar-item w3-button">Eli T.</a>
			<a href="http://192.168.1.102/b1dallind" class="w3-bar-item w3-button">Dallin D.</a>
			<a href="http://192.168.1.104/b1hannahw" class="w3-bar-item w3-button">Hannah W.</a>
			<a href="http://192.168.1.105/b1loganw" class="w3-bar-item w3-button">Logan W.</a>
			<a href="http://192.168.1.106/b1abdulazizk" class="w3-bar-item w3-button">Abdulaziz K.</a>
			<a href="http://192.168.1.107/b1chasek" class="w3-bar-item w3-button">Chase k.</a>
			<a href="http://192.168.1.108/b1kylet" class="w3-bar-item w3-button">Kyle K.</a>
			<a href="http://192.168.1.109/b1donavanw" class="w3-bar-item w3-button">Donavan W</a>

			<a href="http://192.168.1.110/b1lukec" class="w3-bar-item w3-button">Luke C.</a>
			<a href="http://192.168.1.111/b1tylerc" class="w3-bar-item w3-button">Tyler C.</a>
			<a href="http://192.168.1.112/b1peterh" class="w3-bar-item w3-button">Peter H.</a>
			<a href="http://192.168.1.113/b1justinf" class="w3-bar-item w3-button">Justin F.</a>
			<a href="http://192.168.1.114/b1ethana" class="w3-bar-item w3-button">Ethan A.</a>
			<a href="http://192.168.1.115/b1johnh" class="w3-bar-item w3-button">John H.</a>
			<a href="http://192.168.209/b1jjn" class="w3-bar-item w3-button">JJ N.</a>
			<a href="http://192.168.1.117/b1connerf" class="w3-bar-item w3-button">Conner F.</a>
			<a href="http://192.168.1.118/b1carterh" class="w3-bar-item w3-button">Carter H.</a>
			<a href="http://192.168.1.119/b1brendans" class="w3-bar-item w3-button">Brendans S.</a>
			<a href="http://192.168.1.120/b1alejandroe" class="w3-bar-item w3-button">Alejandro E.</a>
			<a href="http://192.168.1.121/b1roscoa" class="w3-bar-item w3-button">Rosco A.</a>

			<a href="http://192.168.1.122/b1danic" class="w3-bar-item w3-button">Dani C.</a>
			<a href="http://192.168.1.123/b1isaacw" class="w3-bar-item w3-button">Isaac W.</a>
			
			<a href="http://192.168.1.100/b1mrm" class="w3-bar-item w3-button">Mr. M</a>
			<a href="http://192.168.1.101/b1elit" class="w3-bar-item w3-button">Eli T.</a>
			<a href="http://192.168.1.102/b1dallind" class="w3-bar-item w3-button">Dallin D.</a>
			<a href="http://192.168.1.104/b1hannahw" class="w3-bar-item w3-button">Hannah W.</a>
			<a href="http://192.168.1.105/b1loganw" class="w3-bar-item w3-button">Logan W.</a>
			<a href="http://192.168.1.106/b1abdulazizk" class="w3-bar-item w3-button">Abdulaziz K.</a>
			<a href="http://192.168.1.107/b1chasek" class="w3-bar-item w3-button">Chase k.</a>
			<a href="http://192.168.1.108/b1kylet" class="w3-bar-item w3-button">Kyle K.</a>
			<a href="http://192.168.1.109/b1donavanw" class="w3-bar-item w3-button">Donavan W</a>

			<a href="http://192.168.1.110/b1lukec" class="w3-bar-item w3-button">Luke C.</a>
			<a href="http://192.168.1.111/b1tylerc" class="w3-bar-item w3-button">Tyler C.</a>
			<a href="http://192.168.1.112/b1peterh" class="w3-bar-item w3-button">Peter H.</a>
			<a href="http://192.168.1.113/b1justinf" class="w3-bar-item w3-button">Justin F.</a>
			<a href="http://192.168.1.114/b1ethana" class="w3-bar-item w3-button">Ethan A.</a>
			<a href="http://192.168.1.115/b1johnh" class="w3-bar-item w3-button">John H.</a>
			<a href="http://192.168.209/b1jjn" class="w3-bar-item w3-button">JJ N.</a>
			<a href="http://192.168.1.117/b1connerf" class="w3-bar-item w3-button">Conner F.</a>
			<a href="http://192.168.1.118/b1carterh" class="w3-bar-item w3-button">Carter H.</a>
			<a href="http://192.168.1.119/b1brendans" class="w3-bar-item w3-button">Brendans S.</a>
			<a href="http://192.168.1.120/b1alejandroe" class="w3-bar-item w3-button">Alejandro E.</a>
			<a href="http://192.168.1.121/b1roscoa" class="w3-bar-item w3-button">Rosco A.</a>

			<a href="http://192.168.1.122/b1danic" class="w3-bar-item w3-button">Dani C.</a>
			<a href="http://192.168.1.123/b1isaacw" class="w3-bar-item w3-button">Isaac W.</a>

-->

		</div>
		<div class="w3-teal">
			<button class="w3-hover-border-cyan" class="w3-amber" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">
				☰
			</button>
			<div class="w3-container">
				<h1 id="help">YAAAAASSSS! PHP website</h1>
				<h2>Created by Eli</h2>
				<h3>Started nov/2017</h3>
			</div>
		</div>

		<hr>
		<div style=" margin-top: 100px; margin-bottom: 100px; margin-right: 100px;  margin-left: 100px; background-color: #ffccaa; padding-left: 20px; padding-right: 20px;"  >
			<br>
			<br>
			<div id="meme1p"><img class="meme1" src="images/cybermen.jpeg">
			</div>
			<h3>Start PHP! look below</h3>
			<br>
			
			<!--DEV ONLY NOT OPS -IN OPS THIS WILL DESTROY ALL!!!! 
			<?php require 'php/DBconnect3parm.php';?>
			<?php include 'php/DBcreateDatabase.php';?>
			<?php include 'php/DBclose.php';?>
			<!-- MUST REMOVE WHEN WE GO TO OPS!!!! -->

			<!-- this is to use DB 
			<!--DEV ONLY NOT OPS -IN OPS THIS WILL DESTROY ALL!!!! 
			<?php include 'php/DBconnect_4parm.php';?>
			<?php include 'php/DBcreateTable.php';?>
			<?php include 'php/DBinsert.php';?>
			<?php include 'php/DBclose.php';?>
			<!-- MUST REMOVE WHEN WE GO TO OPS!!!! -->

			<br>
			<hr>
			<br>
			<h3>Start Form Creation and Testing -</h3>
			<br>
			<form id="NameEmailForm" action="php/DBaddRecords.php" method="post">
				<br>
				First-Name:
				<input type="text" name="firstname">
				<br>
				Last-Name:
				<input type="text" name="lastname">
				<br>
				E-mail:
				<input type="text" name="email">
				<br>
				<input type="submit">
				<input type="button" onclick="clearForm()" value="Clear Form">
			</form>
			<script>
				function clearForm() {
					document.getElementById("NameEmailForm").reset();

				}
			</script>

			<h3>- Show SQL Select Results using echo</h3>

			<?php include 'php/DBechoshow.php';	?>
			<hr>

			<h3>- Show SQL Select Results - formatted table</h3>
			<?php include 'php/DBconnect_4parm.php';?>
			<?php include 'php/DBtableshow.php';?>
			<?php include 'php/DBclose.php';?>

			<hr>
			<h3>end PHP! look above</h3>
			<br>
			<script>
			function w3_open() {
				document.getElementById("mySidebar").style.display = "block";
			}

			function w3_close() {
				document.getElementById("mySidebar").style.display = "none";
			}
		</script>
		</div>
	</body>

</html>
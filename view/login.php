<!DOCTYPE html>
<html>
<head>
	<title>Arma el Equipo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.4/angular.min.js"></script>

	<script src="../js/login.js"></script>
</head>

<body>
	<div class="w3-bar w3-teal w3-animate-top" style="height:8px">

        </div>
	<div class="w3-container w3-display-middle w3-center">
		<img src="../images/logo_completo.png" width=240px class="w3-animate-zoom">
		<br>
		<br>
		<br>
			<button class="w3-button w3-teal w3-center" onclick="document.getElementById('id01').style.display='block'">Login</button>
			<button class="w3-button w3-teal w3-center" onclick="document.getElementById('id02').style.display='block'">Sumate!</button>
	</div>
        <?php include_once "loginForm.php" ?> 
</body>
</html>

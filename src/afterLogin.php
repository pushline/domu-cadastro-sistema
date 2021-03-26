<?php 
	include("mysql.php");
	mysqli_set_charset($db, "utf8");

	session_start();
	if (isset($_SESSION['logado']) == false) {
		die("Impossível acessar está página!");
	}

	 ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
</head>

<body>
Logado =)
<br>
<br>
   
<p>
<a href="logout.php" style="color: red;padding-left: 10px;">Sair</a>
</p>


</body>
</html>
<?php 
	include("mysql.php");
	mysqli_set_charset($db, "utf8");

	session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Autenticação</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
	<form name="form_login" method="post" action="login.php">
		
		Email:
		<input type="text" name="email">
		<br><br>

		Senha: 
		<input type="password" name="senha">
		<br><br>

		<input type="submit" name="entrar" value="Entrar">
		<input type="reset" name="limpar" value="limpar"><br><br>

        <a href='cadastro.php'>Não tem uma conta? Clique aqui.</a>

		<?php

			if (isset($_POST['entrar'])) {

				$email = mysqli_real_escape_string($db, $_POST['email']);
				$senha = mysqli_real_escape_string($db, $_POST['senha']);
                
                $password = md5($senha);

			    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
			    $results = mysqli_query($db, $query);

			    if (mysqli_num_rows($results) == 1) {
					$_SESSION['logado'] = true;
					header('location: afterLogin.php');
					
			}
        }

		?>


</form>


</body>
<?php include("mysql.php");

session_start();

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Autenticação</title>
</head>

<body>
	<form name="form_login" method="post" action="cadastro.php">

		
		Email:
		<input type="text" name="email">
		<br><br>

		Senha: 
		<input type="password" name="senha">
		<br><br>

		<input type="submit" name="cadastrar" value="Cadastrar">
		<input type="reset" name="limpar" value="Limpar"><br>

		<a href='login.php'>Já tem uma conta? Clique aqui.</a>

		<?php

			if (isset($_POST['cadastrar'])) {
				
				$email = mysqli_real_escape_string($db, $_POST['email']);
				$senha = mysqli_real_escape_string($db, $_POST['senha']);


				$password = md5($senha);
		
		$query = "INSERT INTO users (email, password) VALUES('$email', '$password')";
		mysqli_query($db, $query);
		
		$_SESSION['logado'] = true;
		header('location: afterLogin.php');

			}

		?>


	</form>


</body>
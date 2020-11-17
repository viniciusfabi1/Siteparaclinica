<?php

  include_once("conexao.php");
	?>
	<html>
	<head>
	<title></title>
	<script type ="text/javascript">
	function loginsuccessfully() {
		setTimeout("window.location ='index - Copia.php' ", 3000);
	}

	function loginsuccessfully2() {
		setTimeout("window.location ='calendario.php' ", 3000);
	}
	
	function loginfailed() {
		setTimeout("window.location = 'Login.php' ",5000);
	
	
	}
	</script>
	</head>
	<?php

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	$result_usuario = "SELECT cpf, rg, nome FROM usuario WHERE cpf='$usuario' AND rg = '$senha' ";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
	$row = mysqli_num_rows($resultado_usuario);
	$roww = mysqli_fetch_array($resultado_usuario, MYSQLI_ASSOC);



		if($row > 0) {
			
			session_start();
			$_SESSION['usuario'] = $_POST['usuario'];
			$_SESSION['senha'] = $_POST['senha'];
			$_SESSION['nome'] =  $roww["nome"];

			if($usuario == 'admin') {
				echo"<script>loginsuccessfully2()</script>";
				echo "Você foi autenticado com sucesso!";
			}

			else {

			echo "Você foi autenticado com sucesso!";
			
			echo"<script>loginsuccessfully()</script>";
			}
		

		}
		else {
			echo"<center>Nome de usuário ou senha inválidos</center>";
			echo"<script>loginfailed()</script>";
		}
		?>
		
	</body>
	</html>
	
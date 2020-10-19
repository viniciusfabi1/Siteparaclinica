<?php
	$servidor = "mysql669.umbler.com:41890";
	$usuario = "santamonica";
	$senha = "projetointegrador";
	$dbname = "santamonica";
	
	//$servidor = "localhost";
	//$usuario = "root";
	//$senha = "";
	//$dbname = "projeto4";
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	?>
	<html>
	<head>
	<title></title>
	<script type ="text/javascript">
	function loginsuccessfully() {
		setTimeout("window.location ='index - Copia.php' ", 3000);
	}
	
	function loginfailed() {
		setTimeout("window.location = 'Login.php' ",5000);
	
	
	}
	</script>
	</head>
	<?php
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$result_usuario = "SELECT cpf, rg, nome FROM teste WHERE cpf='$usuario' AND rg = '$senha'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
	$row = mysqli_num_rows($resultado_usuario);
		if($row > 0) {
			session_start();
			$_session['usuario'] = $_POST['usuario'];
			$_session['senha'] = $_POST['senha'];
			echo "Você foi autenticado com sucesso!";
			
			echo"<script>loginsuccessfully()</script>";
		}
		else {
			echo"<center>Nome de usuário ou senha inválidos</center>";
			echo"<script>loginfailed()</script>";
		}
		?>
		
	</body>
	</html>
	
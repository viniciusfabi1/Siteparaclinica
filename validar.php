<?php
session_start();
include_once("conexao.php");
$Botaologin = filter_input(INPUT_POST, 'Botaologin', FILTER_SANITIZE_STRING);
if($Botaologin){
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$usuario - $senha";
	if((!empty($usuario)) AND (!empty($senha))){
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		$result_usuario = "SELECT cpf, rg, nome FROM teste WHERE cpf='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha, $row_usuario['rg'])){
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['usuario'] = $row_usuario['cpf'];
				$_SESSION['senha'] = $row_usuario['rg'];
				header("Location: administrativo.php");
			}else{
				$_SESSION['msg'] = "Login e senha incorreto!";
				header("Location: Login.html");
			}
		}
	}else{
		$_SESSION['msg'] = "Login e senha incorreto!";
		header("Location: Login.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: Login.php");
}

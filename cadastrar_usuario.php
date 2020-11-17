<?php
    include_once("conexao.php");
    ?>
    <script type ="text/javascript">
	function loginsuccessfully() {
		setTimeout("window.location ='login.php' ", 3000);
	}

	</script>
    <?php 
    $nome = $_POST ['nome'];
    $cpf = $_POST ['cpf'];
    $rg = $_POST ['rg'];
    $datanas = $_POST['datanas'];
    $cep = $_POST ['cep'];
	$bairro = $_POST ['bairro'];
	$rua = $_POST ['rua'];
    $sexo = $_POST ['sexo'];
    $email = $_POST ['email'];
    $telefone = $_POST ['telefone'];
	
	//banco de dados usuario - idusuario,nome, cpf, rg, datanas, sexo, email, telefone
					//endereço - idendereco,idusuario, cep, bairro,rua
    $query = "SELECT (codigo_tabela)+1 as codigo from gautoinc where tabela='usuario'";
    $result = mysqli_query($conn, $query);

/* associative array */
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$idusuario = $row["codigo"];

    mysqli_query($conn,"INSERT INTO usuario(idusuario,nome,cpf,rg,datanas,sexo, email, telefone) VALUES ($idusuario,'$nome','$cpf','$rg','$datanas','$sexo','$email', '$telefone' )"); 
    mysqli_query($conn,"INSERT INTO endereco(idusuario,rua,bairro,cep) VALUES($idusuario,'$rua','$bairro','$cep')");
    mysqli_query($conn,"UPDATE gautoinc set codigo_tabela=$idusuario where tabela='usuario'");
    
    echo"<script>loginsuccessfully()</script>";
	echo "Você foi cadastrado com sucesso!";
   
    ?>

 
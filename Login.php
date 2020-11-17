<?php

	session_start();
?>




<!DOCTYPE HTML>
<!--
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html>
	<head>
		<title>Login</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body>

	<!-- Header -->

		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">

					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="cadastro.php">Cadastro</a></li>
					</ul>
					
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Consultório Médico</a></h1>
					<span class="tag">Santa Monica</span>
				</div>
			</div>
		</div>

	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- Sidebar -->
					
						<section>
							<header>
								<h2>Acesse seu cadastro</h2>
							</header>
							<?php
								if(isset($_SESSION['msg']))
								?>
								<?php 
											  if(isset($_SESSION['msg'])){
												  echo $_SESSION['msg'];
												  unset($_SESSION['msg']);
												  } ?>		
												 </p>	
							<ul class="style">
								<li>
									<form method= "POST" action="conexao - login.php">
										<div class="form-group">
										  <label for="exampleInputEmail1">Usuário</label>
										  <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CPF">
										  <small id="emailHelp" class="form-text text-muted"><a href="Login.php">Esqueceu seu usuário?</a></small>
										</div>
										<div class="form-group">
										  <label for="exampleInputPassword1">Senha</label>
										  <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="RG">
										  <small id="emailHelp" class="form-text text-muted"><a href="Login.php">Esqueceu sua senha?</a></small>
										</div>
										<div class="form-check">
										  <input type="checkbox" class="form-check-input" id="exampleCheck1">
										  <label class="form-check-label" for="exampleCheck1">Lembrar minha senha</label>
										</div>

										<br><button type="submit" name="Botaologin" class="btn btn-primary" value="Acessar"> Entrar</button>		
									  </form>

									  <p class="text-center text-danger">
											  	
							</ul>
						</section>
						<section class="6u">
							<ul class="default">
								<a href="#" class="image full"><img src="./images/medic.jpg" alt=""></a>
							</ul>
						</section>
					</div>
		
				</div>
			</div>
		</div>
	<!-- /Main -->
	

	
	<!-- /Tweet -->

	<div id="tweet">
		<div class="container">
			<section>
				<blockquote>&ldquo; “Não existem coisas incuráveis, só existem coisas para as quais o homem não encontrou a cura”&rdquo;</blockquote>
			</section>
		</div>
	</div>

<!-- Footer -->
	<div id="footer">
		<div class="container">
			<section>
				<header>
					<h2>Consultório Médico Santa monica</h2>
					<span class="byline">Avenida Sarah Kubitschek, Número 55 , Cachoeira Paulista.</span>
				</header>
				<ul class="contact">
					<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
					<li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
					<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
					<li><a href="#" class="fa fa-tumblr"><span>Google+</span></a></li>
				</ul>
			</section>
		</div>
	</div>

<!-- Copyright -->
	<div id="copyright">
		<div class="container">
			
	</div>

</body>
</html>

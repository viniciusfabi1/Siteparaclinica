<?php 
session_start();
$logado = $_SESSION['nome'];

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Consultório Santa Monica</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
        <style>
  df-messenger {
   --df-messenger-bot-message: #0F43D8;
   --df-messenger-button-titlebar-color: #FFFFFF;
   --df-messenger-chat-background-color: #fafafa;
   --df-messenger-font-color: white;
   --df-messenger-send-icon: #878fac;
   --df-messenger-user-message: #FA8072;
   --df-messenger-button-titlebar-font-color: #0F43D8;
   --df-messenger-chat-background-color:#E7E8EC ;
  }
</style>
	</head>
	<body class="homepage">

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">

					<ul>
					
						<li> <span class="tag"> <?php echo $logado ?>  </span> </li>
		
						<li> <a href="sair.php">Sair</a>  </li> 
						
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

	<!-- Featured -->
		<div id="featured">
			<div class="container">
				<header>
					<h2>Bem-Vindo <?php echo $logado ?>! </h2>
					<br>
				
					<br/>
				</header>
				<p>O Consultório Médico Santa Mônica tem atendimento em diversas áreas da saúde com o  Funcionamento de segunda a sexta das 08:00 as 20:00 horas.<br>Obrigado por efetuar o cadastro e logar.</p>
				<hr />
				<div class="row">
					<section class="4u">
						<span class="pennant"><span class="fa fa-medkit"></span></span>
						<h3>Áreas de Atuação</h3>
						<p>Nosso consultório possui quatro áreas como foco de atuação sendo elas Psicologia, Fisioterapia, Fonoaudiologia e Odontologia.
					</section>
					<section class="4u">
						<span class="pennant"><span class="fa fa-laptop"></span></span>
						<h3>Atendimento Online</h3>
						<p>Caso tenha se interessado e queira agendar uma consulta com algum de nossos médicos, dê início ao seu cadastro abrindo o chat ao clicar no icone da enfermeira.</p>
					</section>
					<section class="4u">
                        <span class="pennant"><span class="fas fa-table"></span></span>
						<h3>Horário de Atendimento</h3>
						<p>A Clínica Santa Mônica atende de Segunda a Sexta, das 06:00 as 23:00<br> Seguindo uma ordem de atendimento:<br> Fisioterapia: 06:00 as 11:00<br>Psicologia: 11:00 as 15:00<br>Odontologia: 15:00 as 18:00<br>Fonoaudiologia: 18:00 as 23:00</p>
					</section>
			</div>
			</div>
		</div>

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">

				<div class="row">
					<section class="6u">
						<a href="#" class="image full"><img src="images/pic01.jpg" alt=""></a>
						<header>
							<h2>Psicologia</h2>
						</header>
						<p>A psicologia estuda a forma como o ser humano se comporta, sua maneira de pensar e reagir a cada situação. O profissional de psicologia irá fazer um diagnóstico para que assim consiga prevenir e tratar doenças mentais, distúrbios emocionais e de personalidade. O papel do psicólogo é ajudar o seu paciente a superar qualquer dificuldade em sua vida da melhor forma possível.</p>
					</section>				
					<section class="6u">
						<a href="#" class="image full"><img src="images/pic02.jpg" alt=""></a>
						<header>
							<h2>Fonoaudiologia</h2>
						</header>
						<p>O fonoaudiólogo é o profissional da área da saúde que trabalha com os diferentes aspectos da comunicação humana: linguagem oral e escrita, fala, voz, audição e funções responsáveis pela deglutição, respiração e mastigação.</p>
					</section>				
				</div>

				<div class="row">
					<section class="6u">
						<a href="#" class="image full"><img src="images/pic03.jpg" alt=""></a>
						<header>
							<h2>Fisioterapia</h2>
						</header>
						<p>O profissional em fisioterapia atua no tratamento e prevenção de doenças e lesões, decorrentes de fraturas ou má-formação ou vícios de postura. Possui técnicas como massagens e exercícios que restaurem a capacidade física e funcional dos pacientes.</p>
					</section>				
					<section class="6u">
						<a href="#" class="image full"><img src="images/pic04.jpg" alt=""></a>
						<header>
							<h2>Odontologia</h2>
						</header>
						<p>O médico dentista ou odontologista é um profissional da saúde responsável pelo tratamento das doenças do sistema mastigatório. Visitas ao dentista consistem, na maioria das vezes, em intervenções para tratar doenças dentárias, além de revisão da higiene bucal e integridade dos dentes, incluindo limpeza e profilaxia.</p>
					</section>				
				</div>
			
			</div>
		</div>

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;“Não existem coisas incuráveis, só existem coisas para as quais o homem não encontrou a cura”&rdquo;</blockquote>
				</section>
			</div>
		</div>

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Consultório Médico Santa monica</h2>
						<span class="byline">Avenida Sarah Kubitschek, Número 55 , Cachoeira Paulista-SP</span>
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
		
   <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="Clínica Santa Mônica"
  chat-icon="images/icone.png"
  agent-id="35d4d820-04a4-49bb-a2be-01c7d21ad197"
  language-code="pt-br"
   expand="true"
></df-messenger>
	</body>
</html>

<!DOCTYPE HTML>
<!--
   
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Cadastro</title>
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
					<li><a href="Login.php">Login</a></li>
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
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<section>
					<header>
						<h2>Cadastro</h2>
						<br>
					</header>
					<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                <form method="POST" class="well form-horizontal" action="cadastrar_usuario.php">
                    <fieldset>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Nome Completo</label>
                          <div class="col-md-8 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="nome" name="nome" placeholder="Nome Completo" class="form-control" required="true" value="" type="text"></div>
                           </div>
				           </div>
                          <div class="form-group">
                          <label class="col-md-4 control-label">CPF</label>
                          <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="cpf" name="cpf" placeholder="Ex: 000.000.000-00" maxlength="14"  class="form-control" required="true" value="" type="text"></div>
                            </div>
                           </div>
                        <div class="form-group">
                        <label class="col-md-4 control-label">RG</label>
                        <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="rg" name="rg" placeholder="Ex: 00.000.000-0" maxlength="12" class="form-control" required="true" value="" type="text"></div>
                        </div>
                        </div>
				          <!-- Break -->
                        <div class="form-group">
                        <label class="col-md-4 control-label">Data de Nascimento</label>
                        <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="data" name="datanas" placeholder="Ex: 00/00/0000" class="form-control" required="true" value="" type="date"></div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-4 control-label">CEP</label>
                        <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="cep" name="cep" placeholder="Ex: 00000-000" class="form-control" required="true" value="" type="text"></div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-4 control-label">Bairro</label>
                        <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="bairro" name="bairro" placeholder="Ex: Cabelinha" class="form-control" required="true" value="" type="text"></div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-4 control-label">Rua</label>
                        <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="rua" name="rua" placeholder="Ex: Rua das Palmeiras" class="form-control" required="true" value="" type="text"></div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-4 control-label">Sexo</label>
                        <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <select name="sexo" id="sexo" class="selectpicker" style="width:500px;; height:38px;">
                        <option>Masculino</option>
                        <option>Feminino</option>
                        </select>
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-4 control-label">Email</label>
                        <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required="true" value="" type="email"></div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-4 control-label">Numero de Telefone</label>
                        <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="telefone" name="telefone" placeholder="Ex: (00) 00000-0000" class="form-control" required="true" value="" type="tel"></div>
                        </div>
                        </div>
                        <!-- Break -->
                        <!-- Break -->
                    </fieldset>
										<!-- Break -->
				   <div class="col-lg-12" style="text-align: right;">
				   <ul class="actions">
                   <li><input type="submit"class="btn btn-primary" value="Cadastrar"/></li>
				   </ul>
                   </div>			
				</form>
                </td>
                <td colspan="1">
                   <form class="well form-horizontal">
                 </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div>
				</section>
         </div>
         
		</div>
	<!-- /Main -->

	<!-- Tweet -->
	
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
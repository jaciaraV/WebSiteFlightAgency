<!DOCTYPE html>
<html>
<head>
	<title>JET Cloud- About</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Paytone+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="JET-About.css">

</head>

<body>

  <!--NavBar-->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
			   <a class="logo" href="index.php"><img src="fotos/logo2.png" alt="Cloud Logo" height="70">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>	
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        		<span class="sr-only">Toggle navigation</span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	      </button>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"">
				<ul class="nav navbar-nav">
					<li><a href="index.php"><strong>Home</strong></a></li>
					<li class="active"><a href="#"><strong>About</strong></a></li>
					<li><a href="JET-Contacts.php"><strong>Contacts</strong></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#signup"><strong>Registra-se</strong><i class="fas fa-user-plus"></i></a></li>
					<li><a href="#" data-toggle="modal" data-target="#login"><strong>Login </strong><i class="fas fa-user"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>
  <!--NavBar End-->

 <!--SingUp Modal-->
  <div id="signup" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!--SignUp Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registrar-se</h4>
        </div>
        <div class="modal-body">
          <form method="POST">
          	<label for="username">Username:</label>
            <input type="text" name="username" placeholder="Username" id="username">
            <br>
            <label for="email">Email ID:</label>
            <input type="email" name="email" placeholder="Email" id="email">
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Password" id="password">
            <br>
            <label for="confpass">Confirm Password:</label>
            <input type="password" name="confpassword" placeholder="confirma password"id="confpassword">
            <br>
           <p><input type="submit" class="btn btn-success" name="submit" value="SUBMIT"/></p>
            <br>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      <!--SignUp Modal content End-->
    </div>
  </div>
  <!--SignUp Modal End-->

  <!--Login Modal-->
  <div id="login" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!--Login Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <form method="POST">
            <label for="username">Username:</label>
            <input type="text" name="usernameLogin" placeholder="Username" id="usernameLogin">
            <br>
            <label for="pass">Password:</label>
          <input type="password" name="passwordLogin" placeholder="Password" id="passwordLogin">
            <br>
            <p><input type="submit" class="btn btn-success" name="submit" value="SUBMIT"/></p>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      <!--Login Modal Content End-->
    </div>
  </div>
  <!--Login Modal End-->
  <h1>About</h1>
  <div class="container" id="cell">
  	<p>Bem-vindo a bordo da JET-Cloud, a companhia aérea doméstica preferida de Portugal, proporcionando uma das melhores experiências pelos céus. Nossos elevados padrões de serviço e confiabilidade, operações eficientes e foco na inovação nos tornaram uma das companhias aéreas favoritas do país.</p>
  	<p>Na JET-Cloud, adotamos uma abordagem holística à responsabilidade corporativa, além de nossos esforços para sermos a melhor companhia aérea de Portugal.</p>
  	<br>
  	<p>Todos os nossos esforços são voltados para agregar valor: às nossas pessoas, às nossas comunidades e ao nosso país. Nossa agenda é coordenada no nível do Grupo JET-Cloud, garantindo que tenhamos um programa coeso de iniciativas que cobre todos os aspectos dos nossos negócios e operações.</p>
  	<br>
  	<p>Todas as iniciativas são realizadas dentro do quadro de trabalho 'Juntos' da JET-Cloud.</p>
  	<br>
  	<p>Crescendo juntos<br>
  	Apoio à visão "Fazer em Portugal".</p>
  	<br>
  	<p>Mais verde juntos<br>
  	Compromisso com a minimização do nosso impacto ambiental.</p>
  	<br>
  	<p>Trabalhando juntos<br>
  	O desenvolvimento e bem-estar dos nossos diversos colaboradores.</p>
  	<br>
  	<p>Doando juntos<br>
  	Contribuições para instituições de caridade e apoio humanitário.</p>
  	<br>
  	<p>Nossa Responsabilidade<br>
  	Mais detalhes sobre o quadro de trabalho 'Juntos' e as iniciativas estão disponíveis em relatórios regulares, publicados desde 2010.</p>
</div>
</body>
</html>

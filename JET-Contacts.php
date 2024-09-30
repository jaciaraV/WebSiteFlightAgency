<!DOCTYPE html>
<html>
<head>
	<title>GET Cloud- Contact</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Paytone+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Contatos.css">

</head>
<body>
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
					<li><a href="JET-About.php"><strong>About</strong></a></li>
					<li class="active"><a href="#"><strong>Contacts</strong></a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#signup"><strong>Registra-se </strong><i class="fas fa-user-plus"></i></a></li>
					<li><a href="#" data-toggle="modal" data-target="#login"><strong>Login </strong><i class="fas fa-user"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>
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
</body>
</html>
<h2>Contact Us</h2>
	<div id="first">
		<h2>Contact Us</h2>
		 <p>Se precisar falar com a equipe de Relacionamento com o Cliente para qualquer resolução de reclamações.</p>
        <p>Envie um email para: atendimento@jetcloud.com</p>
        <p>Ligue para: +55 (21) 99999-8888</p>
        <p id="espace">Ou</p>
         <p>Ligue para: +55 (21) 88888-9999</p>
        <hr>
        <h2>Procedimento para Resolução de Reclamações</h2>
        <p>Para qualquer dúvida ou reclamação, preencha o formulário abaixo.</p>
        <hr>
        <h2>Links Relacionados</h2>
        <p>Agência de Viagens - JET Tours e Viagens</p>
	</div>
	<div id="second">
		<h2 id="space2">Formulário de procedimento</h2>
		<input type="text" name="name" placeholder="Name" size="55">
		<br>
		<br>
		<input type="email" name="email" placeholder="Email-Id" size="55" >
		<br>
		<br>
		<input type="text" name="subject" placeholder="Subject" size="55">
		<br>
		<br>
		<textarea name="message" rows="8" cols="54" placeholder="Message"></textarea>
		<br>
		<br>
		<button type="button" class="btn btn-danger btn-lg">Enviar</button>
	</div>
</body>
</html>
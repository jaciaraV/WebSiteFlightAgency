<!DOCTYPE html>
<html>
<head>
	<title>JET Cloud</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Paytone+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Style HomeCSS.css">
</head>

<body>

  <!--NavBar-->
	<nav class="navbar navbar-inverse">
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
			 
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#"><strong>Home</strong></a></li>
					<li><a href="JET-About.php"><strong>About</strong></a></li>
					<li><a href="JET-Contacts.php"><strong>Contacts</strong></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#signup"><strong>Registra-se </strong><i class="fas fa-user-plus"></i></a></li>
					<li><a href="#" data-toggle="modal" data-target="#login"><strong>Login </strong><i class="fas fa-user"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>
  <!--NavBar End-->
  <!--Heading/Moto-->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="content">
					<h1>Sua Experiencia Comeca Aqui!</h1>
				</div>
			</div>
		</div>
	</div>
  <!--Heading/Moto End-->
  <!--Tabs-->
	<div class="container" id="second">
    <!--Tabs Headings-->
   <ul class="nav nav-tabs">
    <li class="active"><a class="tabshead" data-toggle="tab" href="#home"><i class="fas fa-plane"></i> Voos</a></li>
    <li><a class="tabshead" data-toggle="tab" href="#visao-geral"><i class="fas fa-plane"></i> Visão Geral</a></li>
   </ul>
    <!--Tabs Headings End-->
	
    <!--Tabs Content-->
    <div class="tab-content">
      <!--Tab Content Flight-->
      <div id="home" class="tab-pane fade in active">
        <h3 class="lab">Pesquise seu Proximo Destino</h3>
        <form action="JET-HomeConn.php" method="POST"> 
          <select name="origin" class="drop" id="origem">
        	 <option value="Origem">Origem</option>
        	 <option value="Brasil">Brasil</option>
        	 <option value="Portugal">Portugal</option>
        	 <option value="Peru">Peru</option>
        	 <option value="Espanha">Espanha</option>
          </select>
          <i class="fas fa-exchange-alt"></i>
          <select name="destination" class="drop" id="destino">
          	<option value="Destinatino">Destino</option>
          	<option value="Brasil">Brasil</option>
          	<option value="Portugal">Portugal</option>
          	<option value="Peru">Peru</option>
          	<option value="Espanha">Espanha</option>
          </select>
          <input type="number" class="drop" name="passengers" step="1" min="1" max="10" placeholder="Numero de Passageiros">
          <span class="lab">Para:</span>
          <input type="date" name="depart" class="drop" id="depart">
          <span class="lab">Volta:</span>
          <input type="date" name="return" class="drop" id="return">
          <p><input type="submit" class="btn btn-success" name="submit" value="Pesquisar Voo"/></p> 
        </form>
      </div>
      <!--Tab Content Flight End-->
	  
      <!-- tab contents visao geral-->
	  <div id="visao-geral" class="tab-pane fade">
      <h3 class="lab2">Visão Geral de Voos</h3>
      <form action="JET-VisaoGeral.php" method="POST">
      <input type="submit" class="btn btn-success" name="submit" value="Ver Todos os Voos"/>
      </form>
      </div>
	  <!--tab contents visao geral end-->
  </div>
  <!--Tabs End-->
  
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
		  <input type="hidden" name="register" value="1">
          	<label for="username">Username:</label>
            <input type="text" name="username" placeholder="Username" id="username">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Email" id="email">
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Password" id="password">
            <br>
            <label for="confpassword">Confirm Password:</label>
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
		  <input type="hidden" name="login" value="1">
            <label for="usernameLogin">Username:</label>
            <input type="text" name="usernameLogin" placeholder="Username" id="usernameLogin">
            <br>
            <label for="passwordLogin">Password:</label>
            <input type="password" name="passwordLogin" placeholder="Password" id="passwordLogin">
            <br>
            <p><input type="submit" class="btn btn-success" name="submit" value="SUBMIT"/></p>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
  <!--Login Modal content end-->
    </div>
  </div>
    <!--Login Modal Content End-->
  <script type="text/javascript" src="JET-HomeJS.js"></script>
</body>
</html>

<?php
   
    // Configurações do banco de dados
    $servername = "localhost"; 
    $db_username = "root";
    $db_password = "";
    $dbname = "cinema";

    // Criando a conexão
    $conn = mysqli_connect($servername, $db_username, $db_password, $dbname);
    
    // Verificando a conexão
    if (!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    // Se o formulário de registro for submetido
    if (isset($_POST['register'])) {
        // Recebendo os dados do formulário de registro
        $username=mysqli_real_escape_string($conn, $_POST['username']);
        $email=mysqli_real_escape_string($conn, $_POST['email']);
        $password=mysqli_real_escape_string($conn, $_POST['password']);
        $confirm_password=mysqli_real_escape_string($conn, $_POST['confpassword']);

        // Verificar se os campos não estão vazios e se as senhas coincidem
        if (!empty($username) && !empty($email) && !empty($password) && $password == $confirm_password) {
			// Criptografar a senha
			$hashed_password = password_hash($password, PASSWORD_BCRYPT);
            // Inserindo os dados no banco de dados
            $query = "INSERT INTO usuarios (nome_usuario, email, senha) VALUES ('$username', '$email', '$hashed_password')";

            if (mysqli_query($conn, $query)) {
                echo "<script type='text/javascript'>
                            alert('Bem Vindo a JET Cloud');
                          </script>";
            } else {
                echo "<script type='text/javascript'>
                        alert('Error ao se Registra-se');
                      </script> ";
            }
        } else {
            echo "<script type='text/javascript'>
                        alert('Todos os Campos deve ser preenchidos');
                      </script> ";
        }
    }
     
    // Se o formulario de login for submetido
    if (isset($_POST['login'])) {
        // Recebendo os dados do formulario de login
        $login_username = mysqli_real_escape_string($conn, $_POST['usernameLogin']);
        $login_password = mysqli_real_escape_string($conn, $_POST['passwordLogin']);

        // Verificar se os campos de login nao estao vazios
        if (!empty($login_username) && !empty($login_password)) {
            // Buscando o usuario no banco de dados
            $query = "SELECT nome_usuario, senha FROM usuarios WHERE nome_usuario = '$login_username'";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                // Verificar se a senha inserida corresponde ao hash no banco de dados
                if (password_verify($login_password, $row['senha'])) {
                    echo "<script type='text/javascript'>
                            alert('Bem Vindo a JET Cloud');
                          </script>";
                } else {
                    echo "<script type='text/javascript'>
                            alert('Credenciais Inválidas');
                          </script>";
                }
            } else {
                echo "<script type='text/javascript'>
                        alert('Usuário não encontrado');
                      </script>";
            }
        } else {
            echo "Por favor, preencha todos os campos.";
        }
    }
?>

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
	<link rel="stylesheet" type="text/css" href="VisaoGeral.css">
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
  <script type="text/javascript" src="JET-HomeJS.js"></script>
</body>
</html>
<?php
// Configuração de conexão ao banco de dados
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "cinema";

// Estabelecendo a conexão
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if (!$conn) {
    die("Conexão Falhou: " . mysqli_connect_error());
}

// Construindo a query SQL
$queryVoos = "SELECT * FROM voos WHERE 1=1";

// Filtrando por origem
if (!empty($_POST['origin']) && $_POST['origin'] !== 'Origem') {
    $origin = mysqli_real_escape_string($conn, $_POST['origin']);
    $queryVoos .= " AND AeroportoOrigem = '$origin'";
}

// Filtrando por destino
if (!empty($_POST['destination']) && $_POST['destination'] !== 'Destino') {
    $destination = mysqli_real_escape_string($conn, $_POST['destination']);
    $queryVoos .= " AND AeroportoDestino = '$destination'";
}

// Filtrando por data de partida
if (!empty($_POST['depart'])) {
    $depart = mysqli_real_escape_string($conn, $_POST['depart']);
    $queryVoos .= " AND DATE(DataHoraPartida) = '$depart'";
}

// Executando a query
$result = mysqli_query($conn, $queryVoos);

// Verificando se houve algum erro na query
if (!$result) {
    die("Erro na consulta: " . mysqli_error($conn));
}

// Verificando se há voos disponíveis
if (mysqli_num_rows($result) > 0) {
    echo "<h1>Voos Disponíveis</h1>";
    echo "<table class='table'>
            <tr>
                <th>NumeroVoo</th>
                <th>Origem</th>
                <th>Destino</th>
                <th>Data e Hora de Partida</th>
                <th>Data e Hora de Chegada</th>
				<th> Precos</th>
            </tr>
			</thead>
			<tbody>";

    // Exibindo os resultados
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['NumeroVoo']}</td>
                <td>{$row['AeroportoOrigem']}</td>
                <td>{$row['AeroportoDestino']}</td>
                <td>{$row['DataHoraPartida']}</td>
                <td>{$row['DataHoraChegada']}</td>
				<td>{$row['preco']}€</td>
            </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "<p>Nenhum voo encontrado para os critérios selecionados.</p>";
}

// Fechando a conexão
mysqli_close($conn);
?>

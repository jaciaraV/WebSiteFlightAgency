<!DOCTYPE html>
<html>
<head>
	<title>JET Cloud - Voos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Paytone+One" rel="stylesheet">    
	<link rel="stylesheet" type="text/css" href="JET-HomeConn.css">
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
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"">
				<ul class="nav navbar-nav">
					<li><a href="index.php"><strong>Home</strong></a></li>
					<li><a href="JET-About.php"><strong>About</strong></a></li>
					<li><a href="JET-Contacts.php"><strong>Contacts</strong></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#signup"><strong>Registrar-se </strong><i class="fas fa-user-plus"></i></a></li>
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
            <input type="password" name="passwordLogin" id="passwordLogin">
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
	<div class="container">
		<h1 class="hsty" id="he1"></h1>
		<table id="t1" width="600" border="2" cellpadding="5" cellspacing="5">
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "cinema";

// Estabelecendo a conexão
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if (!$conn) {
    die("Conexão Falhou: " . mysqli_connect_error());
}

// Recebendo os dados via POST e escapando
if (isset($_POST['submit'])) {
    $origin = mysqli_real_escape_string($conn, $_POST['origin']);
    $destination = mysqli_real_escape_string($conn, $_POST['destination']);
    $depart = $_POST['depart'];
    $return = $_POST['return'];
    $passengers = $_POST['passengers'];

    // Verificando se os campos foram preenchidos
    if (!empty($origin) && !empty($destination)) {
        // Consulta SQL para Partidas
        $queryVoos = "SELECT * FROM voos 
                      WHERE UPPER(AeroportoOrigem) = UPPER('$origin') 
                      AND UPPER(AeroportoDestino) = UPPER('$destination') 
                      AND DATE(DataHoraPartida) = '$depart'";

        // Executando a consulta
        $resultVoos = mysqli_query($conn, $queryVoos);

        if ($resultVoos && mysqli_num_rows($resultVoos) > 0) {
            echo "<h1 class='hsty'>Voos Disponiveis</h1>";
            echo "<table id='t1' width='600' border='1' cellpadding='1' cellspacing='1'>";
            echo "<thead>
                    <tr>
                        <th>Numero do Voo</th>
                        <th>Origem</th>
                        <th>Destino</th>
                        <th>Hora da Partida</th>
                        <th>Hora de Chegada</th>
                        <th>Reservar</th>
                    </tr>
                  </thead><tbody>";
            
            while ($row = mysqli_fetch_assoc($resultVoos)) {
                echo "<tr>
                        <td>{$row['NumeroVoo']}</td>
                        <td>{$row['AeroportoOrigem']}</td>
                        <td>{$row['AeroportoDestino']}</td>
                        <td>{$row['DataHoraPartida']}</td>
                        <td>{$row['DataHoraChegada']}</td>
                        <td>
                            <form method='GET' action=''>
                                <input type='hidden' name='varname' value='{$row['NumeroVoo']}'>
                                <input type='submit' value='Reservar' style='color:Green'>
                            </form>
                        </td>
                      </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<p>Nenhum voo de partida encontrado.</p>";
        }
    }
}
// Fechar a conexão
mysqli_close($conn);
?>

</tbody>
</table>
	</div>

</body>
</html>
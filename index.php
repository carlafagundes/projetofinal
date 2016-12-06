<?php	
	require_once(dirname(__FILE__).'/class/Login.php');
	
	$objConnection = new Connection();
	$objLogin = new Login();

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página de login">
    <meta name="author" content="Edicarla Silva">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<!--     <link rel="icon" href="imagens/favicon.ico"> -->
  	<title>Faça seu login</title>
  </head>
<body>
	<section class="container container-padding">
    	<div class="wrap">
    		<div class="row">
    			<div class="col-md-12 margin-bottom padding-bottom">
    				<form class="form-signin" method="POST" action="">
				        <h2 class="form-signin-heading text-center">Login</h2>
				        <div class="form-group">
						    <label for="exampleInputPassword1" class="sr-only">Login</label>
						    <input type="text" name="email" class="form-control" id="email" placeholder="Login" required autofocus>
					  	</div>
				        <div class="form-group">
						    <label for="exampleInputPassword1" class="sr-only">Password</label>
						    <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha" required>
					  	</div>
				        <button class="btn btn-lg btn-primary btn-block" type="submit" value="Enviar" name="Enviar">Entrar</button>
      				</form>
    			</div>
    		</div>
    	</div>
    </section>

		<?php
			if(isset($_POST["Enviar"]) && $_POST["Enviar"] == "Enviar"){
				$logar = $objLogin->Logar($_POST["email"],$_POST['senha']);
			}
			?>
			<br />
			<?php 
			if (isset($logar)){
			?>
				<div class="container-erro">
					<?php echo $logar ?>
				</div>
		<?php } ?>
		<!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
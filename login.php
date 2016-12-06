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
    				<form class="form-signin" method="POST" action="validar.php">
				        <h2 class="form-signin-heading text-center">Login</h2>
				        <div class="form-group">
						    <label for="exampleInputPassword1" class="sr-only">Usuário</label>
						    <input type="text" name="usuario" class="form-control" placeholder="Usuário" required autofocus>
					  	</div>
				        <div class="form-group">
						    <label for="exampleInputPassword1" class="sr-only">Password</label>
						    <input type="password" name="senha" class="form-control" placeholder="Senha" required>
					  	</div>
				        <label>
					     	<input type="checkbox"> Lembrar-me
					    </label>
				        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      				</form>
    			</div>
    		</div>
    	</div>
    </section>
	<!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
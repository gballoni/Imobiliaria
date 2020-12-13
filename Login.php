<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta content="width=device-width, initial-scale=1.0" name="viewport">

	  <title>i-Mobiliária - Login</title>
	  <meta content="" name="descriptison">
	  <meta content="" name="keywords">

	  <!-- Links para as Favicons usadas -->
	  <link href="assets/img/favicon.png" rel="icon">

	  <!-- Fontes: Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	  <!-- Arquivos de CSS de apoio -->
	  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
	  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"> <!-- Biblioteca do carrossel usado -->

	  <!-- Arquivo de CSS principal -->
	  <link href="assets/css/style.css" rel="stylesheet">
	</head>
<body>
<?php include 'partials/menu.php'; ?>

  <main style = "margin-top: 50px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 section-t8">
			<center>

			<h3>Entre</h3>
                <form action="login_action.php" method="post" role="form">
                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
						<p class="text-left">E-Mail:</p>
                        <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Seu Email" data-rule="email" data-msg="Digite um Email válido">
                        <div class="validate"></div>
                      </div>
                      <div>
						<p class="text-left">Senha:</p>
                        <input name="password" type="password" class="form-control form-control-lg form-control-a" placeholder="Sua Senha" data-rule="password">
                        <div class="validate"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button id = "login" type="submit" class="btn btn-b">Entrar</button>
                    </div>
                  </div>
                </form>
                <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div>
          <p style= 'color: red'>ERRO: Usuario ou senha invalidos</p>
        </div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
				<div class="text-center section-t3">
					<a href="Recover.html" class="forgot-password-link">Esqueceu a senha?</a>
					<p class="login-wrapper-footer-text">Ainda não tem conta? <a href="Cadastro.php" class="text-reset">Crie aqui :)</a></p>
					<p class="login-wrapper-footer-text"><a href="Index.html" class="text-reset">Voltar para a Home</a></p>
				</div>
				</center>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="assets/img/login.jpg" alt="login image" class="login-img">
        </div>

      </div>
    </div>
  </main>
  <?php include 'partials/footer.php'; ?>
  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

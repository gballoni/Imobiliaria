<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>I-Mobiliária</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  
  <main id="main">
		<?php include 'partials/menu.php'; ?>
    <!-- ======= Intro Conteúdo ======= -->
    <section class="section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div>
              <h1>Fale Conosco</h1>
              <span>Nossa equipe está, em horário comercial, à disposição para prontamente te atender!</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Contato
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- Fim -->

    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
              <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118362.10720402168!2d-47.96609808658662!3d-22.01836582302881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b87726bb9dd181%3A0xd9d7d71505999bc!2zU8OjbyBDYXJsb3MsIFNQ!5e0!3m2!1spt-BR!2sbr!4v1604961866844!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
          </div>
          <div class="col-sm-12 section-t8">
            <div class="row">
              <div class="col-md-7">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
					    <p class="text-left">Nome:</p>
                        <input type="text" name="nome" class="form-control form-control-lg form-control-a" placeholder="Seu nome" data-rule="minlen:4" data-msg="">
                        <div class="validate"></div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
					    <p class="text-left">Email:</p>
                        <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Seu Email" data-rule="email" data-msg="Digite um Email válido">
                        <div class="validate"></div>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
					    <p class="text-left">Assunto:</p>
                        <input type="text" name="assunto" class="form-control form-control-lg form-control-a" placeholder="Assunto" data-rule="minlen:4" data-msg="Digite um assunto">
                        <div class="validate"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
					    <p class="text-left">Mensagem:</p>
                        <textarea name="mensagem" class="form-control" name="mensagem" cols="45" rows="8" data-rule="required" data-msg="Digite sua mensagem" placeholder="Mensagem"></textarea>
                        <div class="validate"></div>
                      </div>
                    </div>
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-b">Enviar</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="ion-ios-paper-plane"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Nos mande um Oi!</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">
                        <span class="color-a">contato@imobiliária.com</span>
                      </p>
                      <p class="mb-1">
                        <span class="color-a">(16) 9 9999-1111</span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="ion-ios-pin"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Nosso Escritório</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">
                        Avenida Sõa Carlos, São Carlos, 9999
                        <br> SP
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box">
                  <div class="icon-box-icon">
                    <span class="ion-ios-redo"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Nossas Redes Sociais</h4>
                    </div>
                    <div class="icon-box-content">
                      <div class="socials-footer">
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

	  <!-- Footer -->
	  <section class="section-footer">
		<div class="container">
		  <div class="row">
			<div class="col-sm-12 col-md-4">
				<h3 class="texto-principal">I-Mobiliária</h3>
				<div>
				  <p class="cor-texto-a">
					Prezamos pela experiência dos nossos clientes, e esse é o nosso diferencial: o melhor imóvel, de forma rápida e simples!
				  </p>
				</div>
				<div>
				  <ul class="list-unstyled">
					<li class="cor-a">
					  <span class="cor-texto-a">Email:</span> contacto@imobiliária.com</li>
					<li class="cor-a">
					  <span class="cor-texto-a">Telefone:</span> (16) 3414-5610</li>
				  </ul>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 section-md-t3">
				<h3 class="texto-principal">Sitemap</h3>
					<ul class="list-unstyled">
					  <li>
						<i class="fa fa-angle-right"></i> <a href="#">Home</a>
					  </li>
					  <li>
						<i class="fa fa-angle-right"></i> <a href="#">Imóveis</a>
					  </li>
					  <li>
						<i class="fa fa-angle-right"></i> <a href="#">Corretores</a>
					  </li>
					  <li>
						<i class="fa fa-angle-right"></i> <a href="#">Políticas de Privacidade</a>
					  </li>
					</ul>
			</div>
			<div class="col-sm-12 col-md-4 section-md-t3">
				<h3 class="w-titulo-a texto-principal">Login</h3>
				<div>
				  <ul class="list-unstyled">
					<li class="item-list-a">
					  <i class="fa fa-angle-right"></i> <a href="Login.html">Entrar</a>
					</li>
					<li class="item-list-a">
					  <i class="fa fa-angle-right"></i> <a href="Cadastro.html">Criar Cadastro</a>
					</li>
				  </ul>
				</div>
			</div>
		  </div>
		</div>
	  </section>

    <?php include 'partials/footer.php'; ?>

	  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
	  

	  <script src="assets/vendor/jquery/jquery.min.js"></script>
	  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	  <script src="assets/vendor/php-email-form/validate.js"></script>
	  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	  <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>


	  <script src="assets/js/main.js"></script>

</body>

</html>
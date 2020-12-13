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

<?php include 'partials/menu.php'; ?>

  <main id="main">

    <section class="section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
             <h1>Av. São Carlos 1234</h1>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="imoveis.html">Imóveis</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Av. São Carlos 1234
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

   
    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
              <div class="carousel-item-b">
                <img src="assets/img/slide-2.jpg" alt="">
              </div>
              <div class="carousel-item-b">
                <img src="assets/img/slide-3.jpg" alt="">
              </div>
              <div class="carousel-item-b">
                <img src="assets/img/slide-1.jpg" alt="">
              </div>
            </div>
            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class=" d-flex justify-content-center foo">
                  <div >
                    <div >
                      <span class="ion-money">R$</span>
                    </div>
                    <div class="align-self-center">
                      <h3>150.000,00</h3>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="section-t4">
                        <h3>Características:</h3>
                      </div>
                    </div>
                  </div>
                  <div>
                    <ul>
                      <li class="d-flex justify-content-between">
                        <strong>Tipo:</strong>
                        <span>Casa</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Status:</strong>
                        <span>Venda</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Tamanho:</strong>
                        <span>340m²
                        </span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Banheiros:</strong>
                        <span>2</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Quartos:</strong>
                        <span>3</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div>
                      <h3 class="title-d">Descrição do Imóvel</h3>
                    </div>
                  </div>
                </div>
                <div>
                  <p class="description color-text-a">
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                    neque, auctor sit amet
                    aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.
                    Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt
                    nibh pulvinar quam id dui posuere blandit.
                  </p>
                </div>
              </div>
            </div>
          </div>
		  
          <div class="col-md-12">
            <div class="row section-t3">
              <div class="col-sm-12">
                <div>
                  <h3 class="title-d">Gostou do Imóvel? Entre em contato!</h3>
                </div>
              </div>
            </div>
            <div class="row section-t1">
              <div class="col-md-12 col-lg-12">
                <div>
                  <ul class="list-unstyled">
                    <li>
                      <strong>Telefone:</strong>
                      <span>(16) 9 9999-1111</span>
                    </li>
                    <li>
                      <strong>Email:</strong>
                      <span class="color-text-a">contato@imobiliaria.com</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-12 col-lg-12">
                <div>
                  <form class="form-a">
                    <div class="row">
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
						  <p class="text-left">Nome:</p>
                          <input type="text" class="form-control form-control-lg form-control-a" id="inputName" placeholder="Nome *" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
						  <p class="text-left">Email:</p>
                          <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1" placeholder="Email *" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
						  <p class="text-left">Mensagem:</p>
                          <textarea id="textMessage" class="form-control" placeholder="Mensagem *" name="message" cols="45" rows="8" required></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-b">Mandar Mensagem</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  
  <?php include 'partials/footer.php'; ?>

	  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
	  
	  <!-- JS Files -->
	  <script src="assets/vendor/jquery/jquery.min.js"></script>
	  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	  <script src="assets/vendor/php-email-form/validate.js"></script>
	  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	  <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>

	  <script src="assets/js/main.js"></script>

</body>

</html>
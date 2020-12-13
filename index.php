<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta content="width=device-width, initial-scale=1.0" name="viewport">

	  <title>i-Mobiliária</title>
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
	  <!-- Seção HERO (capa) do Site -->
	  <div class="intro">
		  <div class="hero-capa" style="background-image: url(assets/img/slide-1.jpg)">
				<div class="overlay overlay-a"></div>
				<div class="display-tabela">
				  <div class="table-celula">
					<div class="container">
					  <div class="row">
						<div class="col-lg-8">
							<h1 class="intro-titulo">
								<span class="cor-b">OS MELHORES</span><br> Imóveis Da Região
							</h1>
							<p><a href="imoveis.php"><span class="preco-a">Saiba Mais</span></a></p>
						</div>
					  </div>
					</div>
				  </div>
				</div>
		  </div>
	  </div><!-- Fim da Seção Hero -->

	  <main id="main">
		<!-- Início da Seção de busca por imóveis -->
		  <section class="section-t8">
		  <div class="container">
			<div class="row">
			  <div class="col-md-12">
				<div class="titulo-wrap">
					<h2 class="titulo-a">Busque um imóvel</h2>
				</div>
			  </div>
			</div>
			<div class="row">
			  <div class="col-md-12">
				<form>
				<div class="row">
				  <div class="col-md-6">
					  <label for="tipo">Tipo</label>
					  <select class="form-control form-control-lg " id="type">
						<option>Todos</option>
						<option>Alugar</option>
						<option>Comprar</option>
					  </select>
				  </div>
				  <div class="col-md-6">
					  <label for="cidade">Cidade</label>
					  <select class="form-control form-control-lg " id="city">
						<option>Todas as Cidades</option>
						<option>São Carlos</option>
						<option>Araraquara</option>
					  </select>
				  </div>
				  <div class="col-md-6">
					  <label for="quartos">Quartos</label>
					  <select class="form-control form-control-lg " id="room">
						<option>01</option>
						<option>02</option>
						<option>03</option>
					  </select>
				  </div>
				  <div class="col-md-6">
					  <label for="garagem">Garagem</label>
					  <select class="form-control form-control-lg " id="garage">
						<option>Nenhuma</option>
						<option>01</option>
						<option>02</option>
					  </select>
				  </div>
				  <div class="col-md-6 mb-2">
					  <label for="banheiros">Banheiros</label>
					  <select class="form-control form-control-lg " id="bathroom">
						<option>01</option>
						<option>02</option>
						<option>03</option>
					  </select>
				  </div>
				  <div class="col-md-6 mb-2">
					  <label for="preco">Preço Mínimo</label>
					  <select class="form-control form-control-lg " id="price">
						<option>Todos</option>
						<option>R$ 50.000,00</option>
						<option>R$ 100.000,00</option>
						<option>R$ 150.000,00</option>
						<option>R$ 200.000,00</option>
					  </select>
				  </div>
				  <div class="col-md-12">
					<button type="submit" class="btn btn-b" id="buscar">Achar Imóvel</button>
				  </div>
				</div>
			  </form>
			  </div>
			</div>
			</div>
			</section>
	<script>
		document.getElementById("buscar").addEventListener("click", function(event) {
        event.preventDefault()
		var type = document.getElementById('type').value;
		var city = document.getElementById('city').value;
        var room = document.getElementById('room').value;
		var garage = document.getElementById('garage').value;
        var bathroom = document.getElementById('bathroom').value;
		var price = document.getElementById('price').value;

		
	

		//////////
		var http = new XMLHttpRequest();
		var url = "./search.php";

		
       var params = "type="+type+"&city="+city+"&room="+room+"&garage="+garage+"&bathroom="+bathroom+"&price="+price;
       console.log(params);
		http.open("POST", url);

		//Send the proper header information along with the request
		document.getElementById("retorno_imoveis").innerHTML  = '';

		http.onreadystatechange = function() {//Call a function when the state changes.
			if(http.readyState == 4 && http.status == 200) {
				console.log(http.responseText);
				document.getElementById("retorno_imoveis").innerHTML  = http.responseText;
			}
		}
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		http.send(params);
		//////////


	});
	</script>|
			<div class="container" style="margin-top:50px;">
        		<div class="row" id="retorno_imoveis">
						
				</div>
    		</div>

		<!-- Seção de Serviços -->
		<section class="section-t8">
		  <div class="container">
			<div class="row">
			  <div class="col-md-12">
				<div class="titulo-wrap">
					<h2 class="titulo-a">Nossos Serviços</h2>
				</div>
			  </div>
			</div>
			<div class="row">
			  <div class="col-md-4">
				  <div class="d-flex">
					<div class="card-box-bordas">
					  <span class="fa fa-gamepad"></span>
					</div>
					<div class="align-self-center">
					  <h2 class="titulo-servicos">Facilidade</h2>
					</div>
				  </div>
				  <div class="card-body-c">
					<p>Com nosso sistema único de busca, você consegue achar seu imóvel de maneira rápida e fácil
					</p>
				  </div>
			  </div>
			  
			  <div class="col-md-4">
				  <div class="d-flex">
					<div class="card-box-bordas">
					  <span class="fa fa-usd"></span>
					</div>
					<div class="align-self-center">
					  <h2 class="titulo-servicos">Aluguel</h2>
					</div>
				  </div>
				  <div>
					<p>Selecionamos os melhores imóveis para alugar nas cidades de São Carlos e Araraquara
					</p>
				  </div>
			  </div>
			  
			  <div class="col-md-4">
				  <div class="d-flex">
					<div class="card-box-bordas">
					  <span class="fa fa-home"></span>
					</div>
					<div class="align-self-center">
					  <h2 class="titulo-servicos">Venda</h2>
					</div>
				  </div>
				  <div>
					<p>Se você busca comprar um imóvel, esse portal também é o ideal para você!
					</p>
				  </div>
			  </div>
			</div>
		  </div>
		</section><!-- Fim da seção Serviços -->

		<!-- Seção de Imóveis em Destaque -->
		<section class="section-t8">
		  <div class="container">
			<div class="row">
			  <div class="col-md-12">
				<div class="titulo-wrap">
					<h2 class="titulo-a">Imóveis em Destaques</h2>
				</div>
			  </div>
			</div>

			<div id="property-carousel" class="owl-carousel">
				<div class="sombra">
					<img src="assets/img/property-6.jpg" alt="">
					<div class="overlay-casas">
						<div class="card-alinhamento">
							<h2 class="card-titulo-a">
								<a href="imovel.html">Av. São Carlos
									<br /> Nº 1234</a>
							</h2>
						</div>
						<div class="card-alinhamento-a">
							<div class="preco-box">
							  <span class="preco-a">R$ 120.000,00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="sombra">
					<img src="assets/img/property-5.jpg" alt="">
					<div class="overlay-casas">
						<div class="card-alinhamento">
							<h2 class="card-titulo-a">
								<a href="imovel.html">Av. Trabalhador São Carlense
									<br />Nº 432</a>
							</h2>
						</div>
						<div class="card-alinhamento-a">
							<div class="preco-box">
							  <span class="preco-a">R$ 240.000,00</span>
							</div>
						</div>
					</div>
				</div>

				<div class="sombra">
					<img src="assets/img/property-4.jpg" alt="">
					<div class="overlay-casas">
						<div class="card-alinhamento">
							<h2 class="card-titulo-a">
								<a href="imovel.html">Rua São Joaquim
									<br /> Nº 987</a>
							</h2>
						</div>
						<div class="card-alinhamento-a">
							<div class="preco-box">
							  <span class="preco-a">R$ 120.000,00</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row section-t3">
				<div class="col-md-12">
				<a href="imoveis.php"><button type="submit" class="btn btn-b">Ver Todas</button></a>
				</div>
			</div>
		  </div>
		</section><!-- Fim da seção de Imóveis em Destaque -->

		<!-- Corretores -->
		<section class="section-t8">
		  <div class="container">
			<div class="row">
			  <div class="col-md-12">
				<div class="titulo-wrap">
					<h2 class="titulo-a">Nossos Corretores</h2>
				</div>
			  </div>
			</div>

			<div class="row">
			  <div class="col-md-4">
				  <div>
					<img src="assets/img/agent-4.jpg" alt="" class="img-fluid">
				  </div>
					<div class="section-t3">
						<h3>Larissa
						</h3>
					</div>
					<div>
					  <p>Especialista em locação para famílias e estudantes</p>
					  <div>
						<p><strong>Celular: </strong> (16) 9876-1234</p>
						<p><strong>Email: </strong> larissa@imobiliaria.com</p>
					  </div>
					</div>
			  </div>

			  <div class="col-md-4">
				  <div>
					<img src="assets/img/agent-3.jpg" alt="" class="img-fluid">
				  </div>
					<div class="section-t3">
						<h3>João
						</h3>
					</div>
					<div>
					  <p>Corretor experiente voltado à venda de imóveis</p>
					  <div>
						<p><strong>Celular: </strong> (16) 9797-1212</p>
						<p><strong>Email: </strong> jooao@imobiliaria.com</p>
					  </div>
					</div>
			  </div>

			  <div class="col-md-4">
				  <div>
					<img src="assets/img/agent-5.jpg" alt="" class="img-fluid">
				  </div>
					<div class="section-t3">
						<h3>Aline
						</h3>
					</div>
					<div>
					  <p>Responsável por imóveis de alto padrão em São Carlos e Araraquara</p>
					  <div>
						<p><strong>Celular: </strong> (16) 9812-2189</p>
						<p><strong>Email: </strong> aline@imobiliaria.com</p>
					  </div>
					</div>
			  </div>
			</div>
		  </div>
		</section><!-- Fim da seção Corretores -->
		
		<!-- Seção de Depoimentos -->
		<section class="section-t8">
		  <div class="container">
			<div class="row">
			  <div class="col-md-12">
				<div class="titulo-wrap">
					<h2 class="titulo-a">Depoimentos!</h2>
				</div>
			  </div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div class="testimonial-img">
						<img src="assets/img/testimonial-1.jpg" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="testimonial-ico"><span class="ion-ios-quote"></span></div>
					<div>
						<p class="texto-depoimento">
						  "Ter escolhido a i-Mobiliária para nos ajudar a selecionar a casa ideal para nós foi a melhor escolha possível!<br>
						  Estamos realmente muito felizes!"
						</p>
					</div>
					<div class="box-depoimento">
						<img src="assets/img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
						<h5 class="autor-depoimento">Alberto e Erica</h5>
					</div>
				</div>
			</div>
		  </div>
		</section><!-- Fim da Seção de Depoimentos -->

	  </main><!-- Fim do #main -->

      <?php include 'partials/footer.php'; ?>

	  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
	  
	  <!-- Vendor JS Files -->
	  <script src="assets/vendor/jquery/jquery.min.js"></script>
	  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	  <script src="assets/vendor/php-email-form/validate.js"></script>
	  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	  <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>

	  <!-- Template Main JS File -->
	  <script src="assets/js/main.js"></script>
	</body>
</html>
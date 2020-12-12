	  <!-- Arquivos de CSS de apoio -->
	  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
	  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"> <!-- Biblioteca do carrossel usado -->
	  <!-- Arquivo de CSS principal -->
	  <link href="assets/css/style.css" rel="stylesheet">
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
		<div class="container">
		  <a class="navbar-brand texto-principal" href="index.php">i<span class="cor-b">Mobiliária</span></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDefault">
			<span class="navbar-toggler-icon"></span>
			<span class="navbar-toggler-icon"></span>
		</button>
		  <div class="justify-content-center  navbar-collapse collapse" id="navbarDefault">
			<ul class="navbar-nav">

			  <li class="nav-item">
				<a class="nav-link active" href="index.php">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="sobre.php">Sobre Nós</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="imoveis.php">Imóveis</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="contato.php">Contato</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="Login.php">Login</a>
			  </li>
			  <li class="btn-container nav-item">
            <button  type="button" class="btn btn-outline-dark" name="increase-font" id="increase-font" title="Aumentar fonte">A +</button>
            <button  type="button" class="btn btn-outline-dark" name="decrease-font" id="decrease-font" title="Diminuir fonte">A -</button>
        	</li>
			</ul>
	
		  </div>
		</div>
	  </nav>

	  <script type="text/javascript">
            window.onload = function() {
                var elementBody = document.querySelector('body');
                var elementBtnIncreaseFont = document.getElementById('increase-font');
                var elementBtnDecreaseFont = document.getElementById('decrease-font');
                // Padrão de tamanho, equivale a 100% do valor definido no Body
                var fontSize = 100;
                // Valor de incremento ou decremento, equivale a 10% do valor do Body
                var increaseDecrease = 10;

                // Evento de click para aumentar a fonte
                elementBtnIncreaseFont.addEventListener('click', function(event) {
                    fontSize = fontSize + increaseDecrease;
                    elementBody.style.fontSize = fontSize + '%';
                });

                // Evento de click para diminuir a fonte
                elementBtnDecreaseFont.addEventListener('click', function(event) {
                    fontSize = fontSize - increaseDecrease;
                    elementBody.style.fontSize = fontSize + '%';
                });
            }
        </script>


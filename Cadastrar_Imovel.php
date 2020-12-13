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

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>
<?php include 'partials/menu.php'; ?>

  <main id="main">

   <section class="section-t8">
		  <div class="container">
			<div class="row">
			  <div class="col-md-12">
				<div class="titulo-wrap">
					<h2 class="titulo-a">Cadastre um imóvel</h2>
				</div>
			  </div>
			</div>
			<div class="row">
			  <div class="col-md-12">
				<form>
				<div class="row">
				  <div class="col-md-6">
					  <label for="type">Tipo</label>
					  <select class="form-control form-control-lg " id="type">
						<option>Alugar</option>
						<option>Comprar</option>
					  </select>
                  </div>
                  <div class="col-md-6">
                    <label for="cep">CEP</label>
                    <input id="cep" type="text" class="form-control form-control-lg " required/>
                  </div>

                <div class="col-md-6">
                    <label for="neighborhood">Bairro</label>
                    <input id="neighborhood" type="text" class="form-control form-control-lg " required/>
                </div>
                <div class="col-md-6">
                    <label for="city">Cidade</label>
                    <input id="city" type="text" class="form-control form-control-lg " required/>
                </div>
				  <div class="col-md-6">
                  <label for="uf">Estado</label>
                    <select  class="form-control form-control-lg " id="uf">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    </select>
                </div>
				  <div class="col-md-6">
					  <label for="room">Quartos</label>
                      <input type="number" class="form-control form-control-lg " id="room" min ='1'>
				  </div>
				  <div class="col-md-6">
					  <label for="garage">Garagem</label>
					  <input type="number" class="form-control form-control-lg " id="garage" min ='1'>
			
				  </div>
				  <div class="col-md-6 mb-2">
					  <label for="bathroon">Banheiros</label>
					  <input type="number" class="form-control form-control-lg " id="bathroom" min ='0'>
				  </div>
				  <div class="col-md-6 mb-2">
                      <label for="price">Preço</label>
                      <input type="number" class="form-control form-control-lg " id= "price">
                  </div>
                  <div class="col-md-12 mb-2">
                  <label for="announcement">Anuncio:</label>
                  <textarea id="announcement" class="form-control form-control-lg "></textarea>
				  </div>
				  <div class="col-md-12">
					<button type="submit" class="btn btn-b" id ="salvar">Cadastrar Imovel</button>
				  </div>
				</div>
			  </form>
			  </div>
			</div>
			</div>
			</section>

  </main>
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



<script>
	document.getElementById("salvar").addEventListener("click", function(event) {
        event.preventDefault()
		var type = document.getElementById('type').value;
		var cep = document.getElementById('cep').value;
		var neighborhood = document.getElementById('neighborhood').value;
		var city = document.getElementById('city').value;
        var room = document.getElementById('room').value;
		var garage = document.getElementById('garage').value;
        var bathroom = document.getElementById('bathroom').value;
		var price = document.getElementById('price').value;
		var announcement = document.getElementById('announcement').value;
		
	

		//////////
		var http = new XMLHttpRequest();
		var url = "./insert_imovel.php";

		
       var params = "type="+type+"&cep="+cep+"&neighborhood="+neighborhood+"&city="+city+"&room="+room+"&garage="+garage+"&bathroom="+bathroom+"&price="+price+"&announcement="+announcement;
       console.log(params);
		http.open("POST", url);

		//Send the proper header information along with the request
		

		http.onreadystatechange = function() {//Call a function when the state changes.
			if(http.readyState == 4 && http.status == 200) {
				
			}
		}
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		http.send(params);
   
   
		//////////


	});
  </script>

</body>

</html>
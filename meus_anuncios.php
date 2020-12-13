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
	
<?php
require_once("conectDB.php"); 
 $sql = "SELECT  * FROM  property";
 $results = mysqli_query($mysqli, $sql) ;


?>


<body>
<?php include 'partials/menu.php'; ?>
  <main id="main">
	<table class="table" style ="margin-top:150px">
		<thead>
			<tr>
				<th>id </th>
				<th>city</th>
				<th>garage </th>
				<th>room</th>
				<th>price</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		
		<?php while ($row = mysqli_fetch_array($results)) { ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><input id='city_<?=$row['id']?>' class="input" type="text" value="<?php echo $row['city']; ?>"></td>
				<td><input id = 'garage_<?=$row['id']?>'class="input" type="text" value="<?php echo $row['garage']; ?>"></td>
				<td><input id ='room_<?=$row['id']?>' class="input" type="text" value="<?php echo $row['room']; ?>"></td>
				<td><input id= 'price_<?=$row['id']?>' class="input" type="text" value="<?php echo $row['price']; ?>"></td>
				<td>
					<a id ="edit"  data-imovel="<?php echo $row['id']; ?>"  class="btn btn-warning edit_btn" >Edit</a>
				</td>
				<td >
					<a id ="delete" data-imovel="<?php echo $row['id']; ?>" class="btn btn-danger del_btn">Delete</a>
				</td>
			</tr>
		<?php } ?>
	</table>
	<button onclick="window.location.href = './Cadastrar_Imovel.php'" id = "create"  class="btn btn-success " >Creat</button>	
  </main>
  <?php include 'partials/footer.php'; ?>
  <script>
	document.getElementById("delete").addEventListener("click", function(event) {

		event.preventDefault();
		var id = event.target.dataset.imovel 

	
		
	

		//////////
		var http = new XMLHttpRequest();
		var url = "./delete_imovel.php";

		
      
		var params = "id="+id;
       console.log(params);
		http.open("POST", url);

		//Send the proper header information along with the request
		

		http.onreadystatechange = function() {//Call a function when the state changes.
			if(http.readyState == 4 && http.status == 200) {
				alert("deletou");
				document.location.reload(true)
				console.log(http.responseText);
			}
		}
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		http.send(params);
		//////////


	});

	document.getElementById("edit").addEventListener("click", function(event) {

event.preventDefault();
var id = event.target.dataset.imovel;
var city = document.getElementById('city_'+id).value;  
var garage = document.getElementById('garage_'+id).value; 
var room = document.getElementById('room_'+id).value; 
var price =  document.getElementById('price_'+id).value; 





//////////
var http = new XMLHttpRequest();
var url = "./update_imovel.php";


var params = "id="+id+"&city="+city+"&garage="+garage+"&room="+room+"&price="+price;
console.log(params);
http.open("POST", url);

//Send the proper header information along with the request


http.onreadystatechange = function() {//Call a function when the state changes.
	if(http.readyState == 4 && http.status == 200) {
		alert("editou");
		document.location.reload(true)
		console.log(http.responseText);
	}
}
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
http.send(params);
//////////


});
  </script>
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
<?php 

    require_once("conectDB.php");
    $type = $_POST['type'];
    if($type == 'Alugar'){
        $tipo = 'A';
    }else{
        $tipo = 'C';
    }


    $city = $_POST['city'];

    $room = $_POST['room'];
    $garage = $_POST['garage'];
    $bathroom = $_POST['bathroom'];
    $price = $_POST['price'];
    
    $sql = 'select * from property where room = '.$room;
    $rs = mysqli_query($mysqli, $sql);
    $html = '';
    $has = mysqli_num_rows($rs);
    if($has>0){
        while($row = mysqli_fetch_assoc($rs)){
            echo '<div class="col-md-4 text-center">';
            echo '<img src="assets/img/property-1.jpg" alt="" class="img-fluid">';
            echo '<h2 class="section-t1">'.$row['neighborhood'].'</h2>';
            echo '<div>';
            echo '<div class="d-flex">';
            echo '<span class="preco-c">R$ '.$row['price'].'</span>';
            echo '</div>';
            echo '</div>';
            echo '<p class="section-t1">'.$row['announcement'].'</p>';
            echo '<p>Saiba mais!</p>';
            echo '<a href="imovel.php?id='.$row['id'].'"><button type="submit" class="btn btn-b">Ver Imóvel</button></a>';
            echo '</div>';
        }
    }else{
        echo 'Não encontrado';
    }
    


?>
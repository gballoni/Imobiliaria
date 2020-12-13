<?php 
    session_start();
    require_once("conectDB.php");
    $type = $_POST['type'];
    if($type == 'Alugar'){
        $tipo = 'A';
    }else{
        $tipo = 'C';
    }
    $cep = $_POST['cep'];
    $neighborhood = $_POST['neighborhood'];
    $city = $_POST['city'];
    $uf = 'AC';
    $room = $_POST['room'];
    $garage = $_POST['garage'];
    $bathroom = $_POST['bathroom'];
    $price = $_POST['price'];
    $announcement = $_POST['announcement'];
    $property_owner = $_SESSION['username'];
    



    $sql = 'insert into property (type, 
                            cep,
                            neighborhood, 
                            city, 
                            uf,
                            room,
                            garage,
                            bathroom,
                            price,
                            announcement,
                            property_owner, 
                            creation_date)
             values ("'.$tipo.'", "'.$cep.'", "'.$neighborhood.'",
              "'.$city.'", "'.$uf.'",'.$room.', '.$garage.', '.$bathroom.','.$price.', "'.$announcement.'", "'.$property_owner.'",Now())';

              echo $sql;
    $rs = mysqli_query($mysqli, $sql);
  
    if(!$rs){
        echo 'Erro: '.mysqli_error($mysqli);
    }

?>
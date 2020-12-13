<?php 

    require_once("conectDB.php");
    
    $id = $_POST['id'];
    $city = $_POST['city'];
    $room = $_POST['room'];
    $garage = $_POST['garage'];
    $price = $_POST['price'];


$sql = "UPDATE property SET city = '$city',room = '$room', garage = '$garage',  price = '$price' WHERE id =$id";
echo $sql;
    $rs = mysqli_query($mysqli, $sql);
    if(!$rs){
        echo 'Erro: '.mysqli_error($mysqli);
    }

?>
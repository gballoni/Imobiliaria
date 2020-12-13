<?php 

    require_once("conectDB.php");
    $id = $_POST['id'];
    $sql = 'delete  from property where id = '.$id;
    echo $sql;
    $rs = mysqli_query($mysqli, $sql);
    if($rs!=true){
        echo "erro".mysqli_error($mysqli);
    }
    
?>
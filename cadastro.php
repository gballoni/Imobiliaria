<?php 
    require_once("conectDB.php");
    $name = $_POST['name'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo 'Nome:'.$name;

    $sql = 'insert into user (name, username, email, password, creation_date)
             values ("'.$name.'", "'.$user_name.'", "'.$email.'", "'.$senha.'", Now())';
    $rs = mysqli_query($mysqli, $sql);
    if(!$rs){
        echo 'Erro: '.mysqli_error($rs);
    }

?>
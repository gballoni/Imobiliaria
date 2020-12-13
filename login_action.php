<?php
session_start();
require_once("conectDB.php");
echo $_POST['email'];
echo $_POST['password'];
if(empty($_POST['email'])||empty($_POST['password'])){
    header('Location:Login.php');
    exit();
 }

$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);

$query = "select username from user where email = '{$email}' and password = '{$password}'";
echo $query;
$result = mysqli_query($mysqli, $query);
$row = mysqli_num_rows($result);
echo $row;
if($row==1){
    $_SESSION['email'] = $email;
    $_SESSION['username'] = mysqli_fetch_array($result)['username'];
  
    header('Location:meus_anuncios.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location:Login.php');
    exit();
}

?>
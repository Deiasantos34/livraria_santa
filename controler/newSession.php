<?php
require ('../model/usuario.php');

$email = $_GET['email'];
$senha = $_GET['senha'];

$login = get($email, $senha);

if($login === true){
    if(!isset($_SESSION)){
    session_start();
    }
    $_SESSION['logged'] = true;
    header('location: ../view/read.php');
}else{
    header('location: ../index.php');
}
?>
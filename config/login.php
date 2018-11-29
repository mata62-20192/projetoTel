<?php
session_start();

include("../classes/Verifica.php");
$Verifica = new Verifica();

$email  = FILTER_INPUT(INPUT_POST,'email');
$senha  = FILTER_INPUT(INPUT_POST,'senha');

$situacao = $Verifica->login($email,$senha);
if($situacao){
    $msg    =   "Login Efetuado!";
    $page   =   "..\?page=intranet";
    $_SESSION['id'] = $situacao;
}else{
    $msg    =   "E-mail ou senha inválida!";
    $page   =   "..\?page=index";
}


echo " <script>alert('$msg');window.location.href= '$page';</script> ";

?>
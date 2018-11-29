<?php
include("../includes/conexao.php");
include("../classes/Cadastro.php");
$cadastro = new Usuario();

$nome   = FILTER_INPUT(INPUT_POST,'nomeCompleto');
$email  = FILTER_INPUT(INPUT_POST,'email');
$senha  = FILTER_INPUT(INPUT_POST,'senha');
$id     = FILTER_INPUT(INPUT_POST,'id');
if($senha){
    $status = $cadastro->updateUserSenha($id,$nome,$email,$senha);
}else{
    $status = $cadastro->updateUser($id,$nome,$email);
}
if($status == 1){
    $msg    =   "Dados atualizados!";
}else{
    $msg    =   "Erro ao atualizar seus dados!";
}


echo " <script>alert('$msg');window.location.href= '..\?page=intranet';</script> ";

?>
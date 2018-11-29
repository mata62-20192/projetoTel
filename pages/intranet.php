<?php
$usuario    =   $Exibe->dadosUsuario($_SESSION['id']);


?>
<div class="row">
   <div class="col-md-12">
    <form action="config/atualizaDados.php" method="post">
        <div class="form-group">
            <label for="nomeCompleto">Nome Completo:</label>
            <input type="text" name="nomeCompleto" value="<?=$usuario['nome'];?>" class="form-control" placeholder="Digite aqui seu nome completo" />
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" class="form-control" placeholder="Digite aqui seu e-mail" value="<?=$usuario['email'];?>">
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" class="form-control" plceholder="Digite aqui sua senha">
            <input type="hidden" name="id" value="<?=$_SESSION['id']?>">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
   </div>
</div>
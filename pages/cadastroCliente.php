<div class="row">
   <div class="col-md-12">
    <form action="config/cadUser.php" method="post">
        <div class="form-group">
            <label for="nomeCompleto">Nome Completo:</label>
            <input type="text" name="nomeCompleto" class="form-control" placeholder="Digite aqui seu nome completo" />
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" class="form-control cpf" placeholder="Digite aqui seu CPF">
        </div>
        <div class="form-group">
            <label for="rg">RG:</label>
            <input type="text" name="rg" class="form-control rg" required plceholder="Digite aqui seu RG">
        </div>
        <div class="form-group">
            <label for="dataNasc">Data de nascimento:</label>
            <input type="text" name="dataNasc" class="form-control data" required plceholder="Digite aqui sua data de nascimento">
        </div>
        <div class="form-group">
            <label for="eg">RG:</label>
            <input type="text" name="rg" class="form-control rg" required plceholder="Digite aqui sua senha">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
   </div>
</div>
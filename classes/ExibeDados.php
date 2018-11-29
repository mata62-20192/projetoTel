<?php

class Exibe {

    private $conexao;

    #### Construtor:
    public function __construct(){
        $this->conexao    = new mysqli("127.0.0.1","root","","") or die("Erro de conexão com o Banco de dados");
        $this->conexao->set_charset("utf8");
    }

    ##### funções:

    //Retorna os dados do usuário;
    public function dadosUsuario($id){
        
        $sql    =   $this->conexao->prepare("SELECT nome, email FROM projeto.usuario WHERE id = ?");
        $sql->bind_param('d',$id);
        $sql->execute();
        $sql->bind_result($dados['nome'],$dados['email']);
        $sql->fetch();
        $sql->close();
        return $dados;
    }

}
?>
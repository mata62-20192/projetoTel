<?php

class Cadastro {

    private $conexao;

    #### Construtor:
    public function __construct(){
        $this->conexao    = new mysqli("127.0.0.1","root","","") or die("Erro de conexão com o Banco de dados");
        $this->conexao->set_charset("utf8");
    }

    ##### funções:

    //Cadastro de usuário no banco de dados:
    public function cadUser($nome,$email,$senha){
        $sql    =   $this->conexao->prepare("SELECT id FROM projeto.usuario WHERE email = ?");
        $sql->bind_param('s',$email);
        $sql->execute();
        $sql->bind_result($id_);
        $sql->fetch();
        $sql->close();
        if($id_){
            return 1;
        }else{
            $sql    =   $this->conexao->prepare("INSERT INTO projeto.usuario (nome,email,senha) 
                                                VALUES (?,?, sha1($senha))");
            $sql->bind_param('ss',$nome,$email);
            $sql->execute();
            $sql->close();
            return 0;
        }
    }
        
    //Atualiza os dados do usuário:
    public function updateUser($id,$nome,$email,$senha=NULL){
        if($senha){
            $query = ",senha = $senha";
        }else{
            $query = null;
        }
        $sql = $this->conexao->prepare("UPDATE projeto.usuario SET nome = $nome, email = $email $query
        WHERE id = $id");
        if($sql->execute()){
            return 1;
        }else{
            return 0;
        }
        $sql->close();
    }
    



}

?>
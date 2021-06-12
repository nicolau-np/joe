<?php  

class UsuarioDao extends Conexao{
    

    public function index(){
        
    }

    public function create(){

    }

    public function store(Usuario $usuario){
        $this->resposta = null;
        $con = $this->ligar();
        $this->consulta = "insert into usuario (nome, sexo, "
                . "telefone, estado, email, palavra_passe)"
                . " values(:nome, :sexo, :telefone, :estado, :email, :palavra_passe)";
        try {
            $this->comando = $con->prepare($this->consulta);
            $this->comando->bindValue(":nome", $usuario->getNome(), PDO::PARAM_INT);
            $this->comando->bindValue(":sexo", $usuario->getSexo(), PDO::PARAM_INT);
            $this->comando->bindValue(":telefone", $usuario->getTelefone(), PDO::PARAM_INT);
            $this->comando->bindValue(":estado", $usuario->getEstado(), PDO::PARAM_STR);
            $this->comando->bindValue(":email", $usuario->getEmail(), PDO::PARAM_STR);
            $this->comando->bindValue(":palavra_passe", $usuario->getPalavra_passe(), PDO::PARAM_STR);
            $this->comando->execute();
            if ($this->comando):
                $this->resposta = $con->lastInsertId();
            endif;
            $this->desligar();
        } catch (PDOException $ex) {
            echo '' . $ex->getMessage();
        }

        return $this->resposta;
    }

    public function show($id){
        
    }

    public function edit($id){

    }

    public function update($id){
        
    }

    public function destroy($id){
        
    }

    public function logar(Usuario $usuario){
        $this->resposta = null;
        $this->consulta = "select *from usuario where email = :email "
                . "and palavra_passe = :palavra_passe";
        try {
            $this->comando = $this->ligar()->prepare($this->consulta);
            $this->comando->bindValue(":email", $usuario->getEmail(), PDO::PARAM_STR);
            $this->comando->bindValue(":palavra_passe", $usuario->getPalavra_passe(), PDO::PARAM_STR);
            $this->comando->execute();
            if ($this->comando):
                $this->resposta = $this->comando;
            endif;
            $this->desligar();
        } catch (PDOException $ex) {
            echo '' . $ex->getMessage();
        }
        return $this->resposta;
    }
}
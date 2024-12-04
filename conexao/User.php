<?php
require_once("Conn.php");
class User extends Conn
{
    public object $conn;
    public array $formData;


    public function create(){
        //Conexão com o  banco
        $this->conn = $this->connect();
        //Query sql
        $query="INSERT INTO usuario(nome, cpf, senha, telefone, endereco) VALUES (:nome, :cpf, :senha, :telefone, :endereco)";
        
            
        $addUser=$this->conn->prepare($query);

        //CRIPTOGRAFIA DA SENHA
        $senhaInsegura = filter_input(INPUT_POST, $this->formData['senha'], FILTER_DEFAULT);
        //$senhaSegura = password_hash($senhaInsegura,PASSWORD_DEFAULT);
        $senhaSegura = md5($this->formData['senha']);
          
        $addUser->bindParam(':nome',$this->formData['nome']);
        $addUser->bindParam(':cpf',$this->formData['cpf']);
        $addUser->bindParam(':senha', $senhaSegura);
        $addUser->bindParam(':telefone',$this->formData['telefone']);
        $addUser->bindParam(':endereco',$this->formData['endereco']);

        $addUser->execute();

        //Validação
        if($addUser->rowCount()){
            return true;
        }
        else{
            return false;
        }
    }

    public function login(): bool{
        $this->conn = $this->connect();
        $cpf = $this->formData['cpf'];
        $senha = md5($this->formData['senha']);
        $query_user ="SELECT cpf,senha from usuario where cpf='$cpf' and senha='$senha'";
        $add_user = $this->conn->prepare($query_user);
        $add_user->execute();

        if ($add_user->rowCount()) {
            return true;
            echo '<script>
            alert("Logado com sucesso!");
            location.href="../View.php";
            </script>';
        } else if ($add_user->rowCount() < 0) {
            return false;
        } else {
            return false;
            echo "bad";
        }
    }

    public function adicionarcomentario(){
        //Conexão com o  banco
        $this->conn = $this->connect();
        //Query sql
        $query="INSERT INTO comentarios(email, mensagem) VALUES (:email, :mensagem)";
        
            
        $addUser=$this->conn->prepare($query);

        $addUser->bindParam(':email',$this->formData['email']);
        $addUser->bindParam(':mensagem',$this->formData['mensagem']);

        $addUser->execute();

        //Validação
        if($addUser->rowCount()){
            return true;
        }
        else{
            return false;
        }
    }

    public function agendamento(){
        //Conexão com o  banco
        $this->conn = $this->connect();
        //Query sql
        $query = "INSERT INTO agendamento(nome, telefone, endereco, nomeTecnico, dia, escolha, pagamento, descricao) VALUES (:nome, :telefone, :endereco, :nomeTecnico, :dia, :escolha, :pagamento, :descricao)";
        
            
        $addUser=$this->conn->prepare($query);
          
        $addUser->bindParam(':nome',$this->formData['nome']);
        $addUser->bindParam(':telefone',$this->formData['telefone']);
        $addUser->bindParam(':endereco', $this->formData['endereco']);
        $addUser->bindParam(':nomeTecnico',$this->formData['nomeTecnico']);
        $addUser->bindParam(':dia',$this->formData['dia']);
        $addUser->bindParam(':escolha',$this->formData['escolha']);
        $addUser->bindParam(':pagamento',$this->formData['pagamento']);
        $addUser->bindParam(':descricao',$this->formData['descricao']);

        $addUser->execute();

        //Validação
        if($addUser->rowCount()){
            return true;
        }
        else{
            return false;
        }
    }
}
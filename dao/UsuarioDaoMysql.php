<?php 
require_once 'models/Usuario.php';

class UsuarioDaoMysql implements UsuarioDAO {
    private $pdo;

    public function __construct(PDO $driver) {
        $this->pdo = $driver;
    }



    public function add(Usuario $u){
        $sql =$this->pdo->prepare("INSERT INTO usuarios (name, email, senha) VALUES (:nome, :email, :senha)");
        $sql->bindValue(':nome', $u->getNome());
        $sql->bindValue(':email', $u->getEmail());
        $sql->bindValue(':senha', $u->getSenha());
        $sql->execute();

        $u->setId( $this->pdo->lastInsertId() );
        return $u;
    }

    public function findAll(){
        $array = [];


        $sql = $this->pdo->query("SELECT * FROM usuarios");
        if($sql->rowCount() > 0){
            $data = $sql->fetchAll();

            foreach($data as $item){
                $u = new Usuario();
                $u->setId($item['id']);
                $u->setNome($item['name']);
                $u->setEmail($item['email']);
                $u->setSenha($item['senha']);

                $array[] = $u;
            }
        }


        return $array;
    }

    public function findByEmail($email) {
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch();

            $u = new Usuario();
            $u->setId($data['id']);
            $u->setNome($data['name']);
            $u->setEmail($data['email']);
            $u->setSenha($data['senha']);

            return $u;
        }else {
            return false;
        }
    }

    public function findById($id){
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        
        if($sql->rowCount() > 0){
            $data = $sql->fetch();

            $u = new Usuario();
            $u->setId($data['id']);
            $u->setNome($data['name']);
            $u->setEmail($data['email']);
            $u->setSenha($data['senha']);

            return $u;
        }else {
            return false;
        }
    }
}
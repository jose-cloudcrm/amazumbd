<?php 
    session_start();

    if(!empty($_POST['email']) && !empty($_POST['senha'])) {

        require 'config.php';
        require 'dao/UsuarioDaoMysql.php';

        $usuarioDao = new UsuarioDaoMysql($pdo);
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $hash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        if($stmt->rowCount() < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header("Location: login.php");
        } else if(password_verify($senha, $hash)) {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header("Location: sistema.php");
        }
    } else {
        header("Location: login.php");
    }


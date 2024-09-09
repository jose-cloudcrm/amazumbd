<?php 
session_start();

if (!empty($_POST['email']) && !empty($_POST['senha'])) {

    require 'config.php';
    require 'dao/UsuarioDaoMysql.php';

    $usuarioDao = new UsuarioDaoMysql($pdo);
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute(); 

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    $hash = $usuario['senha'];

    if ($stmt->rowCount() < 1) {
        $_SESSION['login_error'] = "Usuário ou senha incorretos.";
        header("Location: login.php");
        exit();
    } elseif (password_verify($senha, $hash)) {
        $_SESSION['email'] = $email;
        header("Location: sistema.php");
        exit();
    } else {
        $_SESSION['login_error'] = "Usuário ou senha incorretos.";
        header("Location: login.php");
        exit();
    }
} else {
    $_SESSION['login_error'] = "Preencha todos os campos.";
    header("Location: login.php");
    exit();
}

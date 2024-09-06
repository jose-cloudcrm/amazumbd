<?php 
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha');

$hash = password_hash($senha, PASSWORD_DEFAULT);

if($name && $email){

    if($usuarioDao->findByEmail($email) === false) {
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($name);
        $novoUsuario->setEmail($email);
        $novoUsuario->setSenha($senha);

        $usuarioDao->add( $novoUsuario );

        header("location: sistema.php");
        exit;
    }else {
        header("location: index.php");
        exit;
    }
} else {
    header("location: index.php");
    exit;
}
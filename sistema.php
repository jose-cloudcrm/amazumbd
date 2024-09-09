<?php 
session_start();
if (!isset($_SESSION['email'])) {
    unset($_SESSION['email']);
    header("Location: login.php");
    exit();
} else {
    $logado = $_SESSION['email'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./main.css">
    <style>
        body{
            background-color: black;
        }
        .hnv {
            color: white;
            padding-left: 5px;
        }
        .pages{
            justify-content: end;
        }
        .bemv{
            font-family: Monocraft;
            color: blue;
            text-align: center;
            font-size: 50px;
        }
        .video-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: auto;
            padding-top: 150px;
        }
        h1{
            text-align: center;
            padding-top: 130px;
            color: white;
        }
    </style>
</head>
<body>
<header id="cabecalho">
        <div class="navbar navbar-expand-lg">
            <div class="container">
                <img class="logo" src="./images/amazumlogo.png" alt="">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav class="collapse navbar-collapse justify-content-end" id="menu">
                    <ul class="nav navbar-nav nav-pills">
                        <li class="nav-item loginnavbar">
                            <button type="button" class="btn btn-dark"><a href="sair.php">Sair</a></button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <h1>Ola <?= $_SESSION['email']; ?></h1>
        </div>
    </div>
    <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/YC8SLpnxsL4" title="One Piece Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</body>
</html>
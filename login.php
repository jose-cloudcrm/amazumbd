<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: black;
            margin: 0;
            padding: 0;
            height: 100vh;
        }
        .login {
            background-image: url('https://sparrow-streaming.vercel.app/Imagens/Wallpapers/One%20Piece.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            background-color: rgba(0, 0, 0, 0.7); /* Transparência no formulário */
            color: white;
        }
        .cadastro {
            text-align: center;
        }
        a {
            color: white;
        }
    </style>
</head>
<body>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="testlogin.php" method="post">
                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="senha">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Logar</button>
                            </form>
                            <div class="cadastro">
                                <a href="index.php">Home</a><br>
                                <a href="cadastro.php">Se cadastrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

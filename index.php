<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazum+</title>
    <link rel="shortcut icon" type="amazumicone.ico" href="./images/amazumicone.ico">
    <link rel="stylesheet" href="./lib/bootstrap.min.css">
    <link rel="stylesheet" href="./main.css">
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
                        <li class="nav-item">
                            <a class="nav-link active" href="#carousel-section">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#destaques">Destaques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#lancamentos">Lançamentos</a>
                        </li>
                        <li class="nav-item loginnavbar">
                            <button type="button" class="btn btn-dark"><a href="login.php">Login</a></button>
                        </li>
                        <li class="nav-item loginnavbar">
                            <button type="button" class="btn "><a href="cadastro.php">Cadastrar</a></button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div id="carousel-section">
        <div id="carousel-exemplo" class="carousel carousel-fade slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div data-bs-interval="3000" class="carousel-item active">
                    <img class="d-block w-100" src="https://wallpapercave.com/wp/wp9436253.jpg">
                </div>
                <div data-bs-interval="3000" class="carousel-item">
                    <img src="https://sparrow-streaming.vercel.app/Imagens/Wallpapers/One%20Piece.jpg">
                </div>
                <div data-bs-interval="3000" class="carousel-item">
                    <img src="https://sparrow-streaming.vercel.app/Imagens/Wallpapers/Fallout.jpg">
            </div>
            <button data-bs-target="#carousel-exemplo" data-bs-slide="prev" class="carousel-control-prev" type="button">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button data-bs-target="#carousel-exemplo" data-bs-slide="next" class="carousel-control-next" type="button">
                <span class="carousel-control-next-icon"></span>
            </button>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel-exemplo"  class="active" data-bs-slide-to="0"></button>
                <button type="button" data-bs-target="#carousel-exemplo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carousel-exemplo" data-bs-slide-to="2"></button>
            </div>
        </div>
    </div>
    <div data-bs-spy="scroll" data-bs-target="#cabecalho">
        <section class="section" id="destaques">
            <h2>Destaques</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-bg-dark">
                            <img src="https://wallpaper.forfun.com/fetch/00/00705788da03740d6f6e81b7470e2252.jpeg" alt="">
                            <div class="card-img-overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-bg-dark">
                            <img src="https://i.pinimg.com/564x/5e/b9/58/5eb95821117ee9cbc2a7c2f7dba103d6.jpg" alt="">
                            <div class="card-img-overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-bg-dark">
                            <img src="https://w0.peakpx.com/wallpaper/876/210/HD-wallpaper-spiderman-aranha-homem-homem-aranha-marvel-ps5-spider.jpg" alt="">
                            <div class="card-img-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>            
        <section class="section d-flex align-items-center text-light bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h2 class="mb-4">Assista do seu jeito</h2>
                        <p class="lead">
                            Aproveite seus favoritos a qualquer hora e em qualquer lugar com nossa plataforma de streaming, oferecendo uma vasta seleção de filmes, séries e músicas para todos os gostos. Basta ter uma conexão à internet e seu dispositivo preferido para acessar todo o conteúdo disponível e curtir os momentos de lazer sem limitações.
                        </p>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <img src="./images/plataformas.png" alt="Devices" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="lancamentos">
            <h2>Lançamentos</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-bg-dark">
                            <img src="https://i.pinimg.com/736x/3a/0b/43/3a0b4389476a1cbb888b594f8c93ca26.jpg" alt="">
                            <div class="card-img-overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-bg-dark">
                            <img src="https://i.pinimg.com/736x/b3/d7/3b/b3d73b83d4ebc421b93429a97ca5f507.jpg" alt="">
                            <div class="card-img-overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-bg-dark">
                            <img src="https://4kwallpapers.com/images/wallpapers/the-super-mario-750x1334-10880.jpg" alt="">
                            <div class="card-img-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="perguntasfrequentes">
            <h2 class="section-perguntas">Perguntas Frequentes</h2>
            <div class="container">
                <div class="accordion" data-bs-theme="dark" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Oquê esta incluido no Amazum+?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Experiência de entretenimento exclusiva.<br><br>
                                As melhores histórias Pixar, Marvel, Star Wars e National Geographic, tudo em um só lugar.<br><br>
                                Downloads ilimitados em até 10 dispositivos compatíveis.<br><br>
                                Mais de 300 títulos em 4K UHD e HDR.<br><br>
                                A possibilidade de assistir em até 4 dispositivos compatíveis simultaneamente sem custo adicional.
                            </div>
                        </div>
                        </div>
                        <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Quais forma de pagamento usar?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Você pode utilizar: cartão de débito, cartão de crédito, PayPal, Mercado Pago, e também empresas parceiras como Google Play Store, App Store da Apple; Mercado Livre e provedores locais de TV, telefonia e internet.
                            </div>
                        </div>
                        </div>
                        <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Onde assistir Amazum+?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                O aplicativo Amazum+ está disponível em seu dispositivo móvel, navegador da web, console de videogame, decodificador e Smart TV. Você pode ver a lista completa de dispositivos suportados na Central de Ajuda.
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <footer class="footer">
        <div class="container">
            <span>2024 &reg; Dev José Neto - Todos os direitos reservados</span>
        </div>
    </footer>
</body>
<script src="./lib/bootstrap.bundle.min.js"></script>
</html>

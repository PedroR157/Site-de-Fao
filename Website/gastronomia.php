<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vila de Fão</title>
        <link rel="icon" href="assets/FaoIcon.gif" type="image/x-icon">
        <link href="css/gastronomia.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
        <script src="mobile-navbar.js"></script>
    </head>
    <body>

        <?php
        //CARREGA O CABECALHO PADRÃO COM O TÍTULO
        $titulo = '- Website';
        include_once __DIR__. '/templates/cabecalho.php';
        ?>

        <div class="conainer">
            <div class="container-md">

                <div class="row ">
                    <div class="col-lg-4 p-5 ">
                        <img class="clarinhas" src="assets/clarinhas.jpg">
                    </div>

                    <div class="col-lg-8 p-5">
                
                            <h5 class="card-title">As Clarinhas de Fão</h5>
                            <p class="card-text">Em Fão existem as famosas Clarinhas de Fão qua nada mais é do que um doce feito com base de gemas de ovos juntamente com Abóbora Chila que dá um sabor bem doce e agrádavel.</p>
                   
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 p-5">
                        <h5 class="card-title">Lampreia à Bordosela</h5>
                        <p class="card-text">Também podemos encontrar outro prato muito famoso da região, A Lampreia à Bordasela, que consiste principalmente de carne de Lampreia, juntamente com vinho, azeite e de garnição um pão torrado. Também  comumente acompanhada de um arroz de Lampreia. </p>
                    </div>

                    <div class="col-lg-4 p-5">
                        <img class="clarinhas" src="assets/Lampreia.jpg">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 p-5">
                        <img class="clarinhas" src="assets/rf19-Casa-Dos-Folhadinhos-dessert.jpg">
                    </div>

                    <div class="col-lg-8 p-5">
                        <h5 class="card-title">Os Folhadinhos</h5>
                        <p class="card-text">Outra gostosura também tipicamente feita na região são os Folhadinhos que são feitas com a tradicional massa folhada e recheados com creme de ovos.</p>
                    </div>
                </div>
            </div>
        </div>

            <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="text-center">
                    <p id="onde">Onde comer em Fão ?</p>
                    <img src="assets/Shore-House-copia-jpg.jpg" alt="Shore" class="rounded" style="width:50%">
                </div>
                <div class="carousel-caption">
                <p class="small-text"> O Shore House é um bar, que possui ótimos Petiscos e uma </p>
                <p class="small-text">Cerveja artesanal excelente, juntamente com um ambiente aconchegante</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="text-center">
                    <p id="onde">Onde comer em Fão ?</p>
                    <img src="assets/Rita Fangueira.jpg" alt="Rita Fangueira" class="rounded" style="width:50%">
                </div>
                <div class="carousel-caption">
                <p class="small-text"> O Restaurante Rita Fangueira é uma boa pedida para </p>
                <p class="small-text"> culinária Mediterrânea com um Bacalhau e Polvo  excelentes</p>
                </div> 
            </div>
            <div class="carousel-item">
                <div class="text-center">
                    <p id="onde">Onde comer em Fão ?</p>
                    <img src="assets/Tio Pepe.jpg" alt="Tio Pepe" class="rounded" style="width:50%">
                </div>
                <div class="carousel-caption">
                <p class="small-text"> O Tio Pepe é um restaurante com uma ótima Costela,</p>
                <p class="small-text">também fazem uma deliciosa Lampreia à Bordasela    </p>
                </div>  
            </div>
            </div>
            
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        
 

       

        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-5">
                    <p class="mid">Ensino</p>
                    <img class="quadrado" src="assets/ceb_Fão.jpg">
                    <button onclick="location.href='ensino.php'">Saiba Mais +</button>
                </div>

                <div class="col-lg-4 p-5">
                    <p class="mid">Praias</p>
                    <img class="quadrado" src="assets/praia-de-fao-2.jpg">
                    <button onclick="location.href='praia.php'">Saiba Mais +</button>
                </div>

                <div class="col-lg-4 p-5">
                    <p class="mid ml-5">Turismo</p>
                    <img class="quadrado" src="assets/Igreja-do-Bom-Jesus-de-Fão-1.jpg">
                    <button onclick="location.href='turismo.php'">Saiba Mais +</button>
                </div>
            </div>

        </div>

        <?php
        //CARREGA O rodape 
        include_once __DIR__ . '/templates/rodape.php';
        ?>
        
    

    </body>
</html>
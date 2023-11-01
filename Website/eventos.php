<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vila de Fão</title>
    <link rel="icon" href="assets/FaoIcon.gif" type="image/x-icon">
    <link href="css/eventos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <script src="mobile-navbar.js"></script>
</head>
   

    <body>  
        
        <!-- Navbar-->

        <?php
//CARREGA O CABECALHO PADRÃO COM O TÍTULO
$titulo = '- Website';
include_once __DIR__. '/templates/cabecalho.php';
?>

        <div class="container">
            <div class="row">
                <div class="col-sm-4 p-5">
                    <p class="title"> Festa da Cerveja e Marisco </p>
                </div>

                <div class="col-sm-8 p-5">
                    <div class="image">
                        <img src="assets/Mariscos.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-5">
                    <img class="img-fluid" src="assets/festa_cerveja_marisco_cartaz.jpg">
                </div>

                <div class="col-lg-8 p-5">
                    <p class="card-text">A Festa da Cerveja e Marisco é uma grande comemoração comemorada anualmente, tendo como o nome sugere, cerveja e acompanhada de mariscos frescos. comumente acontece no periodo de Agosto e conta com diversas outras atrações 
                        como música ao vivo e artesanato.</p>
                </div>
            </div>

            <div class="row">

                <div class="col-12 p-5">
                    <img class="img-fluid" src="assets/Jesus.png"  alt="">
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-5">
                    <h6 class="title">Bom Senhor Jesus de Fão</h6>
                </div>

                <div class="col-lg-6 p-5">
                    <p class="card-text">A tradição que é realizada de 4 em 4 anos aconta com a Procissão do Senhor Bom Jesus de Fão, um dos pontos mais altos da festividades em honra do Senhor Bom jesus. Também há um longo caminho adornado com tapetes de pétalas de flores.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-5">
                    <img src="assets/feira.jpg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 p-5">
                    <p class="card-text">Aos Sábados comumente ocorre
                        a Feira de Vegetais e outros artigos nas redondesas da Alameda Bom Jesus.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-5">
                    <p class="mid">Turismo</p>
                    <img class="quadrado" src="assets/Igreja-do-Bom-Jesus-de-Fão-1.jpg">
                    <button onclick="location.href='turismoFesta da Cerveja e Marisco.php'">Saiba Mais +</button>
                </div>
    
                <div class="col-lg-4 p-5">
                    <p class="mid">Praias</p>
                    <img class="quadrado" src="assets/praia-de-fao-2.jpg">
                    <button onclick="location.href='praia.php'">Saiba Mais +</button>
                </div>
    
                <div class="col-lg-4 p-5">
                    <p class="mid">Comidas</p>
                    <img class="quadrado" src="assets/clarinhas.jpg">
                    <button onclick="location.href='gastronomia.php'">Saiba Mais +</button>
                </div>
            </div>
        </div>
        <?php
        //CARREGA O rodape 
        include_once __DIR__ . '/templates/rodape.php';
        ?>


    </body>
</html>

      
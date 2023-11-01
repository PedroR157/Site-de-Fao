
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vila de Fão</title>
        <link rel="icon" href="assets/FaoIcon.gif" type="image/x-icon">
        <link href="css/contatos.css" rel="stylesheet" />
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

                <div class="col-12 p-5">
                    <h6 class="title">Contatos </h6>
                </div>

            </div>
        </div>


        <div class="containers">   
            <div class="container ">
                <div class="row">
                    <div class="col-lg-4 p-5">
                        <img id="img" class="img-fluid" src="assets/tu.jpg">
                    </div>

                    <div class="col-lg-8 p-5">
                        <h6 class="title1 mb-5">André Pimentel</h6>
                        <p class="card-text"></p>
                        <img src="assets/email-svgrepo-com.svg" class="icon" alt="">
                        <p class="text ">andrepimentel@ipvc.pt</p>
                        <div class="p-2"></div>
                        <img src="assets/icons8-instagram.svg" class="icon" alt="">
                        <p class="text ">Askelardd</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="containers">   
            <div class="container mt-5 ">
                <div class="row">
                    <div class="col-lg-4 p-5">
                        <img id="img" class="img-fluid" src="assets/eu.png">
                    </div>

                    <div class="col-lg-8 p-5">
                        <h6 class="title1 mb-5">Pedro Ruiz</h6>
                        <p class="card-text"></p>
                        <img src="assets/email-svgrepo-com.svg" class="icon" alt="">
                        <p class="text ">pruiz@ipvc.pt</p>
                        <div class="p-2"></div>
                        <img src="assets/icons8-instagram.svg" class="icon" alt="">
                        <p class="text ">pedro_chewie</p>
                    </div>
                </div>
            </div>
        </div>
  
<?php
//CARREGA O rodape 
include_once __DIR__ . '/templates/rodape.php';
?>

    </body>
</html>

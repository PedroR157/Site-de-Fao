<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vila de Fão</title>
    <link rel="icon" href="assets/FaoIcon.gif" type="image/x-icon">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <script>b</script>
   
</head>

    <body>  
        
        <!-- Navbar-->

        <?php
        //CARREGA O CABECALHO PADRÃO COM O TÍTULO
        $titulo = '- Website';
        include_once __DIR__. '/templates/cabecalho.php';
        ?>


        <div class="container" id="conainer">
            <div class="row ml-5 ">
                <div class="col-12 ml-5">
                    <div class="text-center ml-5">
                        <img src="assets/Imagem_Menu.png" id="homeimg" class="img-fluid rounded" alt="">
                    </div>
                
            </div>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-5 p-5">
                
                    <img src="assets/praia-ofir.jpg" class="img-fluid" id="min" >

                </div>
                <div class="col-lg-7 col-sm-7 p-5">
                    <h5 class="card-title">As Praias</h5>
                    <p class="card-text">As praias de Fão são muito lindas e é isso que tem pra falar, nunca nem fui lá pra ser sincero, deve ser bem praia. </p>
                    <button  class="bottom" onclick="location.href='praia.php'"> Saiba mais +</button>
                </div>
            </div>
        </div>

        
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-5 col-sm-5 p-5">
                
                    <img src="assets/clarinhas.jpg" class="img-fluid" id="min" >

                </div>
                <div class="col-lg-7 col-sm-7 p-5">
                    <h5 class="card-title">A Gastronomia</h5>
                    <p class="card-text">A Gastronomia de Fão por ser igual a de Portugal é bem mid, nada supera o bom e velho Estupendo.</p>
                    <button  class="bottom" onclick="location.href='gastronomia.php'"> Saiba mais +</button>
                </div>
            </div>
        </div>

        
        
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 p-5">
                    <img src="assets/Igreja-do-Bom-Jesus-de-Fão-1.jpg" id="min" class="img-fluid">
                </div>
                
 
                

                <div class="col-lg-7 p-5">
                    <h5 class="card-title">O Turismo</h5>
                    <p class="card-text">De turismo temos Parques , Rio , Mar, Campos de Futebol e Igrejas realmente esbeltas para visitar, Fão tem pouca coisa mas vai valer a pena visitar esta pequena Vila . </p>
                    <button type="button" onclick="location.href='turismo.php'" class="bottom"  >Saiba mais + </button>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 p-5">
                    <img src="assets/ceb_Fão.jpg" id="min" class="img-fluid">
                </div>
                


                <div class="col-lg-7 p-5">
                    <h5 class="card-title">O Ensino</h5>
                    <p class="card-text"> De ensino tem 1 infantario , 1 escola de 1 Ciclo, duas de 2ºciclo e uma para tirar curso profissionais (Não aconselhavel pelo escritor)  </p>
                    <button class="bottom" onclick="location.href='ensino.php'" >Saiba mais + </button>
                </div>
            </div>
        </div>

        <?php
        //CARREGA O rodape 
        include_once __DIR__ . '/templates/rodape.php';
        ?>

       
    <script src="mobile-navbar.js"></script>
    <script src="buttom.js"></script>
    </body>
</html>
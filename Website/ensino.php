

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vila de Fão</title>
    <link rel="icon" href="assets/FaoIcon.gif" type="image/x-icon">
    <link href="css/ensino.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <script src="mobile-navbar.js"></script>
</head>
<?php
//CARREGA O CABECALHO PADRÃO COM O TÍTULO
$titulo = '- Website';
include_once __DIR__. '/templates/cabecalho.php';
?>

    <body>  
        <div class="container">
            <div class="row">
                <div class="col-12 p-5">
                    <div class="imageepe">
                        <img src="assets/epe.pc_.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="rounded-top">
                        <p class="text-center display-4" id="eps">Escola Profissinal de Esposende</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="conainer">
            <div class="container-md">
    
                <div class="row">
                    <div class="col-lg-4 p-5">
                        <img class="epe-logo" src="assets/EPE_logo_curvas-1.png">
                    </div>
    
                    <div class="col-lg-8 p-5">
                        <p class="card-text">A Escola Pofissional de Esposende existe desde 1993 e em 2002 abriu um Curso de Especialização Tecnológica, os quais conferem diplomas de especialização tecnológica e qualificação profissional de nível 5.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="conainer">
            <div class="container-md">
        
                <div class="row">
                        <div class="col-lg-8 p-5">
                            <p class="card-text">A Escola tem uma vasta lista de cursos profissionais como o de Restauração, Comunicação e Marketing, Animador Sociocultural, Gestão e Programação de Sistemas Informáticos, Gestão do Ambiente, Turismo dentre vários outros. A maioria dos cursos dão um certificado de nível 4 para o aluno já conseguir um estágio em sua área.</p>
                        </div>

                        <div class="col-lg-4 p-5">
                            <img class="clarinhaa" src="assets/Fish-Chefe-concurso-peixe-esposende-scaled.jpg">
                        </div>
                    </div>
                    
                <div class="row">
                    <div class="col-lg-8 p-5">
                        <h6 class="big-title">Escola Basica</h6>
                        <h6 class="title1">em Fão</h6>
                        <p class="title">1º CEB de Fão</p>
                        <p class="card-text">A escola tem seu principal foco no 1º, 2º e 3º Ciclo do ensino e fica na morada Rua de Santa Bárbara, 4740-355.</p>
                    </div>

                    <div class="col-lg-4 p-5">
                        <img class="clarinhas" src="assets/ceb_Fão.jpg">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-5">
                    <p class="mid">Turismo</p>
                    <img class="quadrado" src="assets/Igreja-do-Bom-Jesus-de-Fão-1.jpg">
                    <button onclick="location.href='turismo.php'">Saiba Mais +</button>
                </div>
    
                <div class="col-lg-4 p-5">
                    <p class="mid">Comidas</p>
                    <img class="quadrado" src="assets/clarinhas.jpg">
                    <button onclick="location.href='gastronomia.php'">Saiba Mais +</button>
                </div>
    
                <div class="col-lg-4 p-5">
                    <p class="mid">Praia</p>
                    <img class="quadrado" src="assets/praia-de-fao-2.jpg">
                    <button onclick="location.href='praia.php'">Saiba Mais +</button>
                </div>
            </div>
        </div>

<?php
//CARREGA O rodape 
include_once __DIR__ . '/templates/rodape.php';
?>

    </body>
</html>
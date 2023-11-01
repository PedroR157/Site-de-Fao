<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vila de Fão</title>
        <link rel="icon" href="assets/FaoIcon.gif" type="image/x-icon">
        <link href="css/noticia.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
        <script src="mobile-navbar.js"></script>
    </head>
    <body>
        <?php
            # CARREGA O CABECALHO PADRÃO COM O TÍTULO
            $titulo = '- Website';
            include_once __DIR__ . '/templates/cabecalho.php';
            require_once __DIR__ . '/../src/infraestrutura/basededados/repositorio-noticia.php';
            # FAZ O CARREGAMENTO DE TODOS OS noticias PARA MOSTRAR AO ADMINISTRADOR
            $noticias = lerTodosnoticias();
        
            ?>
        <?php
        foreach ($noticias as $noticia) 
        {
        ?>
            <div class="conainer">
                <div class="container-md">

                    <div class="row">
                        <div class="col-lg-4 p-5">
                            <img class="card-foto" src= "../recursos/imagens/uploads/<?= $noticia['foto'] ?? null ?>">
                        </div>

                        <div class="col-lg-8 p-5">
                            <h5 class="card-title"><?= $noticia['titulo'] ?? null ?></h5>
                            <p class="card-text"><?= $noticia['texto'] ?? null ?></p>
                            <p class="card-text">Escrito por <?= $noticia['autor'] ?? null ?></p>
                        </div>
                    </div>
        <?php
        }
        ?>
        
        <?php
            include_once __DIR__ . '/templates/rodape.php';
        ?>
    

    </body>
</html>
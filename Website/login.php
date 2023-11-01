<?php
# MIDDLEWARE PARA GARANTIR QUE APENAS UTILIZADORES NÃO AUTENTICADOS VEJAM A PÁGINA DE LOGIN
require_once __DIR__ . '/../src/middleware/middleware-nao-autenticado.php';


# DEFINI O TÍTULO DA PÁGINA
$titulo = ' - Login';
?>

<link href="css/cabecalho.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>

<header class="mt-5">
  <a href="/" class="d-flex justify-content-center text-dark text-decoration-none"><img src="/recursos/imagens/logo-estg.svg" alt="ESTG" class="mw-100"></a>
</header>

<body class="container">
  <div class="row mt-5">
    <main>
      <section>
        <?php
        # MOSTRA AS MENSAGENS DE ERRO CASO LOGIN SEJA INVÁLIDO
        if (isset($_SESSION['erros'])) {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
          foreach ($_SESSION['erros'] as $erro) {
            echo $erro . '<br>';
          }
          echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
          unset($_SESSION['erros']);
        }
        ?>
      </section>
      <form action="/src/controlador/Website/controlar-autenticacao.php" method="post">
        <h1 class="h3 mb-3 fw-normal mt-5 d-flex justify-content-center" id="title" >CRUD PHP</h1>
        <div class="form-floating mb-2">
          <input type="email" class="form-control" id="Email" placeholder="Email" name="email" maxlength="255" value="<?= isset($_REQUEST['email']) ? $_REQUEST['email'] : null ?>">
          <label for="Email">Endereço de Email</label>
        </div>
        <div class="form-floating mb-2">
          <input type="password" class="form-control" id="palavra_passe" placeholder="Palavra Passe" name="palavra_passe" maxlength="255" value="<?= isset($_REQUEST['palavra_passe']) ? $_REQUEST['palavra_passe'] : null ?>" >
          <label for="palavra_passe">Palavra Passe</label>
        </div>
        <div class="checkbox mb-3 d-flex justify-content-center" id="title2">
          <label><input type="checkbox"  value="lembra-me">Lembrar-me</label>
        </div>
        <button class="w-100 btn btn-lg btn-success mb-2" type="submit" name="utilizador" value="login">Entrar</button>
      </form>
      <a href="/"><button class="w-100 btn btn-lg btn-info mb-3">Voltar</button></a>

      <p id="title2" class="d-flex justify-content-center">IPVC ESTG - Desenvolvimento WEB | Andre Pimentel & Pedro Ruiz - 2022-2023</p>
    </main>

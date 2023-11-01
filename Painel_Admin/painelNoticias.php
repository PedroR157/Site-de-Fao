<?php
# INICIALIZA O REPOSITÓRIO
require_once __DIR__ . '/../src/infraestrutura/basededados/repositorio-noticia.php';

# MIDDLEWARE PARA GARANTIR QUE APENAS ADMNISTRADORES ACESSES ESTA PÁGINA
require_once __DIR__ . '/../src/middleware/middleware-administrador.php';

# FAZ O CARREGAMENTO DE TODOS OS noticias PARA MOSTRAR AO ADMINISTRADOR
$noticias = lerTodosnoticias();

# CARREGA O CABECALHO PADRÃO COM O TÍTULO
$titulo = ' - Painel de Administração';
require_once __DIR__ . '/templates/cabecalho.php';
?>

<main class="bg-light">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <section class="py-4">
  <h1> Painel de Administração </h1>

    <div class="d-flex justify-content">
  
      <a href="/Painel_Admin/noticia.php"><button class="btn btn-success px-4 me-2">Criar noticia</button></a>
      <a href="/Website/"><button class="btn btn-info px-2 me-2">Sair Administração</button></a>
      <a href="../Painel_Admin/index.php"><button class="btn btn-info px-2 me-2">Painel utilizadores</button></a>
      <form action="/src/controlador/aplicacao/controlar-autenticacao.php" method="post">
      <button class="btn btn-danger px-4" type="submit" name="noticia" value="logout">Fazer Logout</button>
      </form>
    </div>
  </section>
  <section>
    <?php
    # MOSTRA AS MENSAGENS DE SUCESSO E DE ERRO VINDA DO CONTROLADOR-noticia
    if (isset($_SESSION['sucesso'])) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
      echo $_SESSION['sucesso'] . '<br>';
      echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
      unset($_SESSION['sucesso']);
    }
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
  <section>
    <div class="table-responsive">
      <table class="table">
        <thead class="table-primary">
          <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Texto</th>
            <th scope="col">Foto</th>
          </tr>
        </thead>
        <tbody>
          <?php
          # VARRE TODOS OS noticias PARA CONSTRUÇÃO DA TABELA
          foreach ($noticias as $noticia) {
          ?>
            <tr>
              <th scope="row"><?= $noticia['titulo'] ?></th>
              <td><?= $noticia['autor'] ?></td>
              <td><?= $noticia['texto'] ?></td>
              <td><?= $noticia['foto'] ?></td>
            
              <td>
                <div class="d-flex justify-content">
                  <a href="/src/controlador/admin/controlar-noticia.php?<?= 'noticia=atualizar&id=' . $noticia['id'] ?>"><button type="button" class="btn btn-primary me-2">Atualizar</button></a>
                  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#deletar<?= $noticia['id'] ?>">Deletar</button>
                </div>
              </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="deletar<?= $noticia['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar Notícia</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Esta operação não poderá ser desfeita. Tem certeza que deseja deletar este Notícia?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <a href="/src/controlador/admin/controlar-noticia.php?<?= 'noticia=deletar&id=' . $noticia['id'] ?>"><button type="button" class="btn btn-danger">Confirmar</button></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim Modal -->
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </section>
</main>
<?php
# CARREGA O RODAPE PADRÃO
require_once __DIR__ . '/templates/rodape.php';
?>
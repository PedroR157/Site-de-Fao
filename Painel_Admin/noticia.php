<?php
# NOTA: O FORMULÁRIO noticia ESTÁ SENDO USADO PARA CRIAÇÃO E ALTERAÇÃO DE noticiaES
# PARA ISSO FUNCIONAR, EXISTE UM TRATAMENTO VIA GET/REQUEST ALTERANDO O VALOR DO BOTÃO DE NOME name="noticia" 

# CARREGA MIDDLEWARE PAGARA GARANTIR QUE APENAS noticiaES ACESSE O SITIO
require_once __DIR__ . '/../src/middleware/middleware-administrador.php';

# CARREGA O CABECALHO PADRÃO COM O TÍTULO
$titulo = ' - noticia';
require_once __DIR__ . '/templates/cabecalho.php';
?>

<main class="bg-light">
  <section class="py-4">
    <a href="/Painel_Admin/painelNoticias.php"><button type="button" class="btn btn-secondary px-5">Voltar</button></a>
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
  <section class="pb-4">
    <form enctype="multipart/form-data" action="/src/controlador/admin/controlar-noticia.php" method="post" class="form-control py-3">
      <div class="input-group mb-3">
        <span class="input-group-text">| Titulo |</span>
        <input type="text" class="form-control" name="titulo" maxlength="50" size="50" value="<?= isset($_REQUEST['titulo']) ? $_REQUEST['titulo'] : null ?>" required>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text">| Autor |</span>
        <input type="text" class="form-control" name="autor" maxlength="70" size="70" value="<?= isset($_REQUEST['autor']) ? $_REQUEST['autor'] : null ?>" required>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text">| Texto |</span>
        <input type="text" class="form-control" name="texto" maxlength="400" size="255" value="<?= isset($_REQUEST['texto']) ? $_REQUEST['texto'] : null ?>" required>
      </div>
      
      <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupFile01">| Foto |</label>
        <input accept="image/*" type="file" class="form-control" id="inputGroupFile01" name="foto" />
      
      </div>
      <div class="d-grid col-4 mx-auto">
        <input type="hidden" name="id" value="<?= isset($_REQUEST['id']) ? $_REQUEST['id']  : null ?>">
        <input type="hidden" name="foto" value="<?= isset($_REQUEST['foto']) ? $_REQUEST['foto'] : null ?>">
        <button type="submit" class="btn btn-success" name="noticia" <?= isset($_REQUEST['acao']) && $_REQUEST['acao'] == 'atualizar' ? 'value="atualizar"' : 'value="criar"' ?>>Enviar</button>
      </div>
    </form>
  </section>
</main>
<?php
# CARREGA O RODAPE PADRÃO
require_once __DIR__ . '/templates/rodape.php';
?>
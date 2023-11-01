<?php

####################
### DEPENDÊNCIAS ###
####################
require_once __DIR__ . '/../../infraestrutura/basededados/repositorio-noticia.php';
require_once __DIR__ . '/../../validacao/admin/validar-noticia.php';
require_once __DIR__ . '/../../auxiliadores/auxiliador.php';


##############
### VERBOS ###
##############

# VERBOS POST
## CONTROLA A ROTA PARA CRIAÇÃO E ATUALIZAÇÃO DE UMA NOTÍCIA NA PÁGINA NOTICIA
if (isset($_POST['noticia'])) {

    ## CONTROLA A CRIAÇÃO DE NOVAS NOTÍCIAS
    if ($_POST['noticia'] == 'criar') {

        # CRIA UM noticia
        criar($_POST);
    }

    ## CONTROLA A ATUALIZAÇÃO DE DADOS DAS NOTÍCIAS
    if ($_POST['noticia'] == 'atualizar') {

        # ATUALIZA UM noticia
        atualizar($_POST);
    }

    ## CONTROLA A ATUALIZAÇÃO DE DADOS DE PERFIL DAS NOTÍCIAS (WEBSITE)
    if ($_POST['noticia'] == 'perfil') {

        # ATUALIZA UM noticia
        atualizarPerfil($_POST);
    }

    ## CONTROLA A ATUALIZAÇÃO DO AUTOR DA NOTÍCIA (WEBSITE)
    if ($_POST['noticia'] == 'autor') {

        # ATUALIZA UM noticia
        alterarPalavraPasse($_POST);
    }
}

# VERBOS GET
## CONTROLA A ROTA PARA O CARREGAMENTO DE UMA NOTÍCIA NA PÁGINA ATUALIZAR-NOTICIA
if (isset($_GET['noticia'])) {

    ## CONTROLA A ROTA PARA A CRIAÇÃO DE NOVAS NOTÍCIAS
    if ($_GET['noticia'] == 'atualizar') {

        # RECUPERA DADOS DA NOTÍCA PELO ID RECEBIDO
        $noticia = lernoticia($_GET['id']);

        # CRIA A SESSÃO AÇÃO ATUALIZAR PARA MANIPULAR O BOTÃO DE ENVIO DO FORMULÁRIO NOTÍCIA
        $noticia['acao'] = 'atualizar';

        # ENVIA PARÂMETROS COM DADOS DA NOTÍCIA PARA A PÁGINA NOTÍCIA RECUPERAR DADOS PARA MANIPULAR A ALTERAÇÃO
        $params = '?' . http_build_query($noticia);

        header('location: /../Painel_Admin/noticia.php' . $params);
    }

    ## CONTROLA A ROTA PARA A EXCLUSÃO DE noticias
    if ($_GET['noticia'] == 'deletar') {

        # RECUPERA DADOS DA NOTÍCIA
        $noticia = lernoticia($_GET['id']);

        # DELETA NOTÍCIA
        $sucesso = deletar($noticia);

        # REDIRECIONA USUÁRIO PARA PÁGINA ADMIN COM MENSAGEM DE SUCCESO
        if ($sucesso) {
            # DEFINE MENSAGEM DE SUCESSO
            $_SESSION['sucesso'] = 'Notícia deletada com sucesso!';

            # REDIRECIONA USUÁRIO COM DADOS DO FORMULÁRIO ANTERIORMENTE PREENCHIDO
            header('location: /../Painel_Admin/');
        }
    }
}

###############
### FUNÇÕES ###
###############

/**
 * FUNÇÃO RESPONSÁVEL POR CRIAR UMA NOVA NOTÍCA
 */
function criar($requisicao)
{
    # VALIDA DADOS DA NOTÍCIA. FICHEIRO VALIDAÇÃO->APLICAÇAO->ADMIN->VALIDAR-NOTICIA.PHP
    $dados = noticiaValido($requisicao);

    # VERIFICA SE EXISTEM ERROS DE VALIDAÇÃO
    if (isset($dados['invalido'])) {

        # RECUPERA MENSAGEM DE ERRO, CASO EXISTA, E COLOCA EM SESSÃO PARA RECUPERANÃO NO FORMULARIO NOTÍCIA
        $_SESSION['erros'] = $dados['invalido'];

        # RECUPERA DADOS DO FORMULÁRIO PARA RECUPERAR PREENCHIMENTO ANTERIOR
        $params = '?' . http_build_query($requisicao);

        # REDIRECIONA USUÁRIO COM DADOS DO FORMULÁRIO ANTERIORMENTE PREENCHIDO
        header('location: /../Painel_Admin/noticia.php' . $params);

        return false;
    }

    # GARDA FOTO EM DIRETÓRIO LOCAL (FUNÇÃO LOCAL)
    $dados = guardaFoto($dados);

    # GUARDA NOTÍCIA NA BASE DE DADOS (REPOSITÓRIO PDO)
    $sucesso = criarnoticia($dados);

    # REDIRECIONA ADMIN PARA PÁGINA DE REGISTO COM MENSAGEM DE SUCCESO
    if ($sucesso) {

        # DEFINE MENSAGEM DE SUCESSO
        $_SESSION['sucesso'] = 'Notícia criada com sucesso!';

        # REDIRECIONA O UTILIZADO PARA A PÁGINA ADMIN
        header('location: /../Painel_Admin/');
    }
}

/**
 * FUNÇÃO RESPONSÁVEL POR ATUALIZAR UMA NOTÍCIA
 */
function atualizar($requisicao)
{
    # VALIDA DADOS DA NOTÍCIA
    $dados = noticiaValido($requisicao);

    # VERIFICA SE EXISTEM ERROS DE VALIDAÇÃO
    if (isset($dados['invalido'])) {

        # RECUPERA MENSAGEM DE ERRO, CASO EXISTA
        $_SESSION['erros'] = $dados['invalido'];

        # CRIA A SESSÃO AÇÃO ATUALIZAR PARA MANIPULAR O BOTÃO DE ENVIO DO FORMULÁRIO NOTÍCIA
        $_SESSION['acao'] = 'atualizar';

        # RECUPERA DADOS DO FORMULÁRIO PARA RECUPERAR PREENCHIMENTO ANTERIOR
        $params = '?' . http_build_query($requisicao);

        # REDIRECIONA ADIMIN COM DADOS DO FORMULÁRIO ANTERIORMENTE PREENCHIDO
        header('location: /../Painel_Admin/noticia.php' . $params);

        return false;
    }



    # GARDA FOTO EM DIRETÓRIO LOCAL E APAGA A FOTO ANTIGA ORIUNDA DA REQUISIÇÃO (FUNÇÃO LOCAL)
    if (!empty($_FILES['foto']['name'])) {
        $dados = guardaFoto($dados, $requisicao);
    }

    # ATUALIZA NOTÍCIA (REPOSITÓRIO PDO)
    $sucesso = atualizarnoticia($dados);

    # REDIRECIONA ADMIN PARA PÁGINA DE ALTERAÇÃO COM MENSAGEM DE SUCCESO
    if ($sucesso) {

        # DEFINE MENSAGEM DE SUCESSO
        $_SESSION['sucesso'] = 'Notícia alterada com sucesso!';

        # DEFINI BOTÃO DE ENVIO DO FORMULÁRIO
        $dados['acao'] = 'atualizar';

        # RECUPERA DADOS DO FORMULÁRIO PARA RECUPERAR PREENCHIMENTO ANTERIOR
        $params = '?' . http_build_query($dados);

        # REDIRECIONA noticia COM DADOS DO FORMULÁRIO ANTERIORMENTE PREENCHIDO
        header('location: /../Painel_Admin/noticia.php' . $params);
    }
}

/**
 * FUNÇÃO RESPONSÁVEL POR ATUALIZAR UMA NOTÍCIA
 */
function atualizarPerfil($requisicao)
{
    # VALIDA DADOS DA NOTÍCIA (VALIDAÇÃO)
    $dados = noticiaValido($requisicao);

    # VERIFICA SE EXISTEM ERROS DE VALIDAÇÃO
    if (isset($dados['invalido'])) {

        # RECUPERA MENSAGEM DE ERRO, CASO EXISTA
        $_SESSION['erros'] = $dados['invalido'];

        # RECUPERA DADOS DO FORMULÁRIO PARA RECUPERAR PREENCHIMENTO ANTERIOR
        $params = '?' . http_build_query($requisicao);

        # REDIRECIONA O ADIMIN COM DADOS DO FORMULÁRIO ANTERIORMENTE PREENCHIDO
        header('location: /../Painel_Admin/noticia.php' . $params);
    } 
}


/**
 * FUNÇÃO RESPONSÁVEL POR DELETAR UMA NOTÍCIA
 */
function deletar($noticia)
{
    # DEFINE O CAMINHO DO FICHEIRO
    $caminhoFicheiro = __DIR__ . '/../../../recursos/imagens/uploads/';

    # VALIDA DADOS DA NOTÍCIA
    $retorno = deletarnoticia($noticia['id']);

    # COMANDO PARA APAGAR O FICHEIRO
    unlink($caminhoFicheiro . $noticia['foto']);

    # RETORNA RESULTADO DO BANCO DE DADOS
    return $retorno;
}

/**
 * FUNÇÃO RESPONSÁVEL POR GARDAR FICHEIROS DE FOTOS NO DIRETÓRIO
 */
function guardaFoto($dados, $fotoAntiga = null)
{
    # UTILIZA VARIÁVEL GLOBAL PARA PEGAR O NOME DO FICHEIRO
    $nomeFicheiro = $_FILES['foto']['name'];

    # PAGA O FICHEIRO TEMPORÁRIO
    $ficheiroTemporario = $_FILES['foto']['tmp_name'];

    # PEGA TIPO DE EXTENSÃO DA FOTO
    $extensao = pathinfo($nomeFicheiro, PATHINFO_EXTENSION);

    # CONVERTE A EXTENSÃO PARA MINÚSCULO
    $extensao = strtolower($extensao);

    # CRIA UM NOME ÚNICO PARA O FICHEIRO
    $novoNome = uniqid('foto_') . '.' . $extensao;

    # DEFINE O CAMINHO DO FICHEIRO
    $caminhoFicheiro = __DIR__ . '/../../../recursos/imagens/uploads/';

    # DEFINE CAMINHO COMPLETO DO FICHEIRO
    $ficheiro = $caminhoFicheiro . $novoNome;

    # MOVE O FICHEIRO TEMPORÁRIO PARA O LOCAL DEFINITIVO
    if (move_uploaded_file($ficheiroTemporario, $ficheiro)) {

        # ATRIBUI NOME DO FICHEIRO NO ARRAY DE DADOS PARA ARMAZENAMENTO NA BASE DE DADOS
        $dados['foto'] = $novoNome;

        # APAGA FICHEIRO ANTERIOR, CASO SEJA UMA ATUALIZAÇÃO DE FOTO DA NOTÍCIA
        if (isset($dados['noticia']) && ($dados['noticia'] == 'atualizar') || ($dados['noticia'] == 'perfil')) {

            # COMANDO PARA APAGAR O FICHEIRO
            unlink($caminhoFicheiro . $fotoAntiga['foto']);
        }
    }

    # RETORNA OS DADOS DO FICHEIRO PARA GARDAR NA BASE DE DADOS
    return $dados;
}

<?php

/**
 * FUNÇÃO RESPONSÁVEL PELA VALIDAÇÃO DE UMA NOTÍCIA
 */
function noticiaValido($requisicao)
{
    # RETIRA ESPAÇOS VAZIOS
    foreach ($requisicao as $key => $value) {
        $requisicao[$key] =  trim($requisicao[$key]);
    }

    # VALIDANDO O CAMPO TITULO
    if (empty($requisicao['titulo']) || strlen($requisicao['titulo']) < 3 || strlen($requisicao['titulo']) > 50) {
        $erros['titulo'] = 'O campo Nome não pode estar vazio e deve ter entre 3 e 50 caracteres.';
    }

    # VALIDANDO O CAMPO AUTOR
    if (empty($requisicao['autor']) || strlen($requisicao['autor']) < 3 || strlen($requisicao['autor']) > 70) {
        $erros['autor'] = 'O campo autor não pode estar vazio e deve ter entre 3 e 70 caracteres.';
    }

    # VALIDANDO O CAMPO TEXTO
    if (empty($requisicao['texto']) || strlen($requisicao['texto']) < 3 || strlen($requisicao['texto']) > 400) {
        $erros['texto'] = 'O campo texto não pode estar vazio e deve ter entre 3 e 400 caracteres.';
    }

    # VALIDANDO FOTO DA NOTÍCIA
    if (isset(($_FILES['foto']['name'])) && ($_FILES['foto']['error'] == UPLOAD_ERR_OK)) {

        # DEFINE A LARGURA MÁXIMA DO FICHEIRO
        $largura = 1024;

        # DEFINE A ALTURA MÁXIMA DO FICHEIRO
        $altura = 1024;

        # DEFINE O TAMANHO MÁXIMO DO FICHEIRO EM PIXEL
        $tamanho = 1000000;

        # PEGA AS DIMENSÕES DO FICHEIRO
        $dimensoes = getimagesize($_FILES['foto']["tmp_name"]);

        # VERIFICA SE O FICHEIRO É UMA IMAGEM
        if (!preg_match("/^image\/(pjpeg|jpeg|png)$/", ($_FILES['foto']['type']))) {
            $erros['foto_formato']  = 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.png"';
        }

        # VERIFICA SE A LARGURA DA IMAGEM É MAIOR QUE A DEFINIDA
        if ($dimensoes[0] > $largura) {
            $erros['foto_largura'] = "A largura da foto não deve ultrapassar " . $largura . " pixels";
        }

        # VERIFICA SE A ALTURA DA IMAGEM É MAIOR QUE A ALTURA PERMITIDA
        if ($dimensoes[1] > $altura) {
            $erros['foto_altura'] = "A altura da foto não deve ultrapassar " . $altura . " pixels";
        }

        # VERIFICA SE O TAMANHO DA IMAGEM É MAIOR QUE O TAMANHO EM PIXEL PERMITIDO
        if ($_FILES['foto']["size"] > $tamanho) {
            $erros['foto_bytes'] = "A foto deve ter no máximo 1 Mb";
        }
    }

    # RETORNA ERROS
    if (isset($erros)) {
        return ['invalido' => $erros];
    }

    # RETORNA NOTÍCIA VALIDADA
    return $requisicao;
}

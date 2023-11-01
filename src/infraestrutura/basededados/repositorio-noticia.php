<?php
# INSERE DADOS DA CONEXÃO COM O PDO
require_once __DIR__ . '/criar-conexao.php';

/**
 * FUNÇÃO RESPONSÁVEL POR CRIAR UMA NOVA NOTÍCA
 */
function criarnoticia($noticia)
{

    # INSERE NOTÍCIAS COM PROTEÇÃO CONTRA SQLINJECTION
    $sqlCreate = "INSERT INTO 
    noticias (
        titulo,  
        autor,
        texto,
        foto) 
    VALUES (
        :titulo, 
        :autor,
        :texto,
        :foto
    )";

    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare($sqlCreate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
    $sucesso = $PDOStatement->execute
    ([
        ':titulo' => $noticia['titulo'],
        ':autor' => $noticia['autor'],
        ':texto' => $noticia['texto'],
        ':foto' => $noticia['foto']
    ]);

    # RECUPERA ID DA NOTÍCIA CRIADA
    if ($sucesso) {
        $noticia['id'] = $GLOBALS['pdo']->lastInsertId();
    }
    # RETORNO RESULTADO DA INSERSÃO 
    return $sucesso;
}

/**
 * FUNÇÃO RESPONSÁVEL POR LER UMA NOTÍCIA
 */
function lernoticia($id)
{
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare('SELECT * FROM noticias WHERE id = ?;');

    # FAZ O BIND
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA
    $PDOStatement->execute();

    # RETORNA OS DADOS
    return $PDOStatement->fetch();
}

/**
 * FUNÇÃO RESPONSÁVEL POR LER UMA NOTÍCIA PELO TÍTULO
 */
function lernoticiaPortitulo($titulo)
{
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare('SELECT * FROM noticias WHERE titulo = ? LIMIT 1;');

    # FAZ O BIND
    $PDOStatement->bindValue(1, $titulo);

    # EXECUTA A CONSULTA
    $PDOStatement->execute();

    # RETORNA OS DADOS
    return $PDOStatement->fetch();
}

/**
 * FUNÇÃO RESPONSÁVEL POR RETORNAR TODAS AS NOTÍCIAS
 */
function lerTodosnoticias()
{
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->query('SELECT * FROM noticias;');

    # INICÍA ARRAY DE NOTÍCIAS 
    $noticias = [];

    # PERCORRE TODAS AS LINHAS TRAZENDO OS DADOS
    while ($listaDenoticias = $PDOStatement->fetch()) {
        $noticias[] = $listaDenoticias;
    }

    # RETORNA UTLIZADORES
    return $noticias;
}

/**
 * FUNÇÃO RESPONSAVEL POR ATUALIZAR OS DADOS DE UMA NOTÍCIA NO SISTEMA
 */
function atualizarnoticia($noticia)
{

        # INSERE NOTÍCA COM PROTEÇÃO CONTRA SQLINJECTION, INCLUSINDO PALAVRA PASSE.
        $sqlUpdate = "UPDATE  
        noticias SET
        titulo = :titulo, 
        autor = :autor,
        texto = :texto,
        foto = :foto
        WHERE id = :id;";

        $PDOStatement = $GLOBALS['pdo']->prepare($sqlUpdate);

        # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
        return $PDOStatement->execute([
            ':id' => $noticia['id'],
            ':titulo' => $noticia['titulo'],
            ':autor' => $noticia['autor'],
            ':texto' => $noticia['texto'],
            ':foto' => $noticia['foto']

        ]);
    

    # SE NÃO HOUVER PALAVRA PASSE ALTERADA, INSERE NOTÍCIA COM PROTEÇÃO CONTRA SQLINJECTION SEM A PALAVRA PASSE
    $sqlUpdate = "UPDATE  
    noticias SET
        titulo = :titulo, 
        autor = :autor
        texto = :texto
        foto = :foto
    WHERE id = :id;";

    # PREPARA A CONSULTA
    $PDOStatement = $GLOBALS['pdo']->prepare($sqlUpdate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
    return $PDOStatement->execute([
        ':id' => $noticia['id'],
        ':titulo' => $noticia['titulo'],
        ':autor' => $noticia['autor'],
        ':texto' => $noticia['texto'],
        ':foto' => $noticia['foto']
    ]);
}

function atualizarAutor($noticia)
{
        # INSERE NOTÍCIA COM PROTEÇÃO CONTRA SQLINJECTION.
        $sqlUpdate = "UPDATE  
        noticias SET
        titulo = :titulo, 
            autor = :autor
        WHERE id = :id;";

        $PDOStatement = $GLOBALS['pdo']->prepare($sqlUpdate);

        # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
        return $PDOStatement->execute([
            ':id' => $noticia['id'],
            ':nome' => $noticia['nome'],
            ':autor' => $noticia['autor']
        ]);
    
} 

/**
 * FUNÇÃO RESPONSÁVEL POR DELETAR UMA NOTÍCIA DO SISTEMA
 */
function deletarnoticia($id)
{
    # PREPARA A CONSULTA
    $PDOStatement = $GLOBALS['pdo']->prepare('DELETE FROM noticias WHERE id = ?;');

    # REALIZA O BIND
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA E RETORNA OS DADOS
    return $PDOStatement->execute();
}

/**
 * FUNÇÃO RESPONSÁVEL POR REGISTRAR UMA NOVA NOTÍCIA
 */
function registarnoticia($noticia)
{

    # INSERE NOTÍCIA COM PROTEÇÃO CONTRA SQLINJECTION
    $sqlCreate = "INSERT INTO 
    noticias (
        titulo, 
        autor
        texto
        foto
        ) 
    VALUES (
        :titulo, 
        :autor
        :texto
        :foto
    )";

    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare($sqlCreate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
    $sucesso = $PDOStatement->execute([
        ':titulo' => $noticia['titulo'],
        ':autor' => $noticia['autor'],
        ':texto' => $noticia['texto'],
        ':foto' => $noticia['foto']
    ]);

    # RECUPERA ID DA NOTÍCIA CRIADA
    if ($sucesso) {
        $noticia['id'] = $GLOBALS['pdo']->lastInsertId();

        # RETORNO RESULTADO DA INSERSÃO 
        return $noticia;
    }

    return false;
}

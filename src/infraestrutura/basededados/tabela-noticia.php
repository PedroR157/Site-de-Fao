<?php
# TRATA-SE DE UMA FORMA RÁPIDA PARA REINICIAR O BANCO DE DADOS EM AMBIENTE DE DESENVOLVIMENTO
# ESTE FICHEIRO NÃO DEVE ESTAR DISPONÍVEL EM PRODUÇÃO

# INSERE DADOS DA CONEXÃO COM O PDO UTILIZANDO SQLITE

require __DIR__ . '/criar-conexao.php';

# APAGA TABELA SE ELA EXISTIR
$pdo->exec('DROP TABLE IF EXISTS noticias;');

echo 'Tabela noticias apagada!' . PHP_EOL;

# CRIA A TABELA NOTÍCIA
$pdo->exec('CREATE TABLE noticias (
    id INTEGER PRIMARY KEY, 
    titulo VARCHAR(50), 
    autor VARCHAR(70),
    texto VARCHAR(400),
    foto CHAR NULL
)');

echo 'Tabela noticias criada!' . PHP_EOL;

# ABAIXO UM ARRAY SIMULANDO A DADOS DE UMA NOTÍCIA 
$noticias = [
    'titulo' => 'Diario de 2 bananas',
    'autor' => 'Andre Bin Laden',
    'texto' => '',
    'foto' => null

];

# INSERE NOTÍCIA
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
$sucesso = $PDOStatement->execute([
    ':titulo' => $noticias['titulo'],
    ':autor' => $noticias['autor'],
    ':texto' => $noticias['texto'],
    ':foto' => $noticias['foto']
]);

echo 'noticias padrão criado!';

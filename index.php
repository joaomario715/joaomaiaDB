<?php

require_once 'conexao.php';

$sql = "CREATE TABLE IF NOT EXISTS usuarios (
id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telefone VARCHAR(20) UNIQUE NOT NULL,
    ativo BOOLEAN DEFAULT TRUE,
    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP
)
";
//preparar o comando 

$stmt = $pdo -> prepare($sql);

// executar comando 

$stmt -> execute();

echo "tabela criada ou já existente";
?>
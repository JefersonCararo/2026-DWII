<?php 
/*
includes/conexao.php
Arquivo de conexao PDO - incluir em qualquer página que use o banco
*/
// configuração da conexão
$host = '127.0.0.1';
$db = 'dwii_db';
//MARIADB_DATABASE
$user = 'dwii_user';
$pass = 'dwii2026';
$charset = 'utf8mb4';
//DSN data source name: string q indentifica o banco para o PDO
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;sslmode=disable";

$opcoes = [
    PDO::ATTR_ERRMODE   => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

//criar conexao com PDO
try{
    $pdo = new PDO($dsn, $user, $pass, $opcoes);
}catch (PDOException $e){
    //em produção: logar o erro, nunca exibir detalhes técnicos
    die('Erro de conexão com o banco de dados. Verifique o servidor.');
}
?>
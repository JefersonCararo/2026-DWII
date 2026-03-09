<!-- 01_php-intro/index.php -->
<!--
    Disciplina : Desenvolvimento Web II (DWII)
    Aula       : 03 - Arquitetura Web e Introdução ao PHP
    Autor      : Jeferson Adriano Cararo
    Data       : 02/03/2026
    Repositório: https://github.com/JefersonCararo/2026-DWII
-->

<?php
// Variáveis PHP - serão usadas no HTML abaixo
$nome  = "Jeferson Adriano Cararo";
$curso = "Técnico em Informática - IFPR";
$profissao = "Estudante de Tecnologia";
$pagina_atual
?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - <?php echo $nome; ?></title>
    <style>
        body {font-family: Arial, sans-serif; margin: 0; background: #ffffff;}
        nav { background: #010001; padding: 15px 30px;}
        nav a {color: white; text-decoration: none; margin-right: 20px; font-weight: bold;}
        nav a:hover {text-decoration: underline;}
        .hero {background: linear-gradient(135deg, #8d8d8d, #141414); color: white; text-align: center; padding: 60px 20px;}
        .hero h1 {font-size: 2.5em; margin-botton: 10px;}
        .hero p {font-size: 1.2em; opacity: 0.9;}
        .container {max-width: 800px; margin: 40px auto; padding: 0 20px;}
        footer {background: #000000; color: #ffffff; text-align: center; padding: 20px; margin-top: 60px; font-size: 14px}
    </style>
 </head>
 <body>

    <nav>
       <?php include 'includes/cabecalho.php'; ?>
    </nav>

    <div class="hero">
        <h1><?php echo $nome; ?></h1>
        <br><?php echo $profissao; ?> | <?php echo $curso; ?>
    </div>

    <div class="container">
        <h2>Bem-vindo ao meu portfólio</h2>
        <br>Esta página foi gerada pelo PHP em:
        <strong><?php echo date("d/m/Y \à\s H:i:s");?></strong>
    </div>

    <footer>
        <?php include 'includes/rodape.php'; ?>
    </footer>

 </body>
 </html>
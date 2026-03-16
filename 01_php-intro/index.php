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
$pagina_atual = "inicio";
$ano = "2026";
?>
 <!DOCTYPE html>
 <html lang="pt-br">

   <?php include '../includes/cabecalho.php';?>
<main>
  <body>
<div class="hero">
  <h1><?php echo $nome; ?></h1>
  
    <strong><?php echo $profissao; ?> | <?php echo $curso; ?></p>
</div>

<div class="container">
  <h2>Bem vindo ao meu portfólio</h2>
  <p>Está pagina foi gerada pelo PHP em:</p>
    <strong><?php echo date("d/m/Y \à\s H:i:s"); ?></strong></p>
</div>  

</main>
</body>
 
  <?php include '../includes/rodape.php';?>


 </html>
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

  <h1> Oi, Meu nome é <?php echo $nome; ?></h1>
  <p><h2>CURSO: <?php echo $curso; ?></h2></p>
  <p><h3>ANO: <?php echo $ano; ?></h3></p>
<br>
</main>
</body>
 
  <?php include '../includes/rodape.php';?>


 </html>
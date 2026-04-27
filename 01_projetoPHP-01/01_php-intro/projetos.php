<!-- 01_php-intro/projetos.php -->
 <?php
 $nome          ="Jeferson Adriano Cararo";
 $pagina_atual  ="projetos";
 $caminho_raiz  ="../"
 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 
    <?php include '../includes/cabecalho.php';?> 
<main>
    <h2>Esses são os meus projetos q eu fiz ao longo dos anos</h2><br>
        <h3>Projeto feito em 2024 sobre mim</h3><br>
         <a href="<?php echo $caminho_raiz; ?>01_php-intro/about.html"
    <?php echo menu_class("projetos", $pagina_atual); ?>>
    ABOUT ME</a>
<br></main><p>  
    <main>  
    <h3>Projeto feito em 2024 sobre o carro q a gente quer</h3><br>    
    <a href="<?php echo $caminho_raiz; ?>01_php-intro/carro.html"
    <?php echo menu_class("projetos", $pagina_atual); ?>></p>
    CARRO</a>
</main>
<main>
 <h3>Projeto feito em 2026 na primeira aula</h3><br>    
    <a href="<?php echo $caminho_raiz; ?>00_apresentacao/index.html"
    <?php echo menu_class("projetos", $pagina_atual); ?>></p>
    00_apresentacao</a>
</main>

 </head>
 <body style="font-family: Arial, sans-serif; margin: 0; background: #f3f4f6;">

    <?php include '../includes/rodape.php'; ?>

 </body>
 </html>
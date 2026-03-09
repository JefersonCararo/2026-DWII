<!-- 01_php-intro/sobre.php -->
 <?php
 $nome          ="Jeferson Adriano Cararo";
 $pagina_atual  ="sobre";
 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - <?php echo $nome; ?></title>
 </head>
 <body style="font-family: Arial, sans-serif; margin: 0; background: #f3f4f6;">

    <?php include 'includes/cabecalho.php'; ?>

    <div style="max-width: 800px; margin: 40px auto; padding: 0 20px;">
        <h1 style="color: #37033f;"> SOBRE MIM</h1>
        <br>Olá! Sou <strong><?php echo $nome; ?></strong>, estudante de Técnico em Informática no IFPR de Ponta Grossa.
        <br>Meus interesses são Fotografia e Cinema, os meus objetivos profissionais são tentar Arquitetura, 
        não sei se vou conseguir mas são oq eu irei tentar após o curso.
        <a href="index.php"
         style="color: #681088; font-weight: bold;"> VOLTAR AO INICIO</a>
    </div>

    <?php include 'includes/rodape.php'; ?>

 </body>
 </html>
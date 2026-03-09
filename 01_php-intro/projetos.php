<!-- 01_php-intro/projetos.php -->
 <?php
 $nome          ="Jeferson Adriano Cararo";
 $pagina_atual  ="projetos";
 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projetos - <?php echo $nome; ?></title>
 </head>
 <body style="font-family: Arial, sans-serif; margin: 0; background: #f3f4f6;">

    <?php include 'includes/cabecalho.php'; ?>

    <div style="max-width: 800px; margin: 40px auto; padding: 0 20px;">
        <h1 style="color: #37033f;"> MEUS PROJETOS</h1>
   <br>
    Primeiro site bonitinho que eu aprendi a fazer<br> 
        <a href="about.html"
            style="color: #681088; font-weight: bold;"> PROJETO SOBRE MIM FEITO EM 2024</a>
<br>
        <a href="index.php"
         style="color: #681088; font-weight: bold;"> VOLTAR AO INICIO</a>
    </div>

    <?php include 'includes/rodape.php'; ?>

 </body>
 </html>
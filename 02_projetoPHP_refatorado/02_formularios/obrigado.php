<?php

$nome   ="JEFERSON ADRIANO CARARO";
$pagina_atual ="contato";
$caminho_raiz ="../";
$titulo_pagina  ="OBRIGADO";

$nome_visitante = htmlspecialchars($_POST['nome'] ?? 'visitante');
$assunto = $_GET['assunto'] ?? 'Não Informado';
$chars = $_GET['chars'] ?? 0;
?>

<?php include '../includes/cabecalho.php'; ?>

    <div class="container confirmacao">
        <p class="confirmacao-icone"</p>
        <h1 class="confirmacao-titulo">
            Obrigado, <?php echo $nome_visitante; ?>!
</h1>
<p class="confirmacao-texto">
    Sua mensagem foi recebida. Entrarei em contato em breve.
</p>
    <a href="contato.php" class="btn"> ENVIAR OUTRA MENSAGEM</a>
</div>

<?php include '../includes/rodape.php'; ?>
<?php
/*
ARQUIVO : /cabecalho.php
DISCIPLINA: Desenvolvimento Web II (2026-DWII)
AULA: 04 - PHP para Web: Formulários, GET e POST
AUTOR: JEFERSON ADRIANO CARARO
CONCEITOS: Formularios HTML, method GET, $_GET, htmlspecialchars()
*/

$nome   ="JEFERSON ADRIANO CARARO";
$pagina_atual ="contato";
$caminho_raiz ="../";
$titulo_pagina  ="Contato";
$erros = [];
$nome_visitante = '';
$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
$nome_visitante = trim($_POST['nome_visitante'] ?? '');
$mensagem = trim($_POST['mensagem']  ?? '');

if (empty($nome_visitante)){
    $erros[] = 'O campo Nome é obrigatório.';
}
if (empty($mensagem)){
    $erros[] = 'O campo Mensagem é obrigatório.';
}elseif (strlen($mensagem) < 10) {
    $erros[] = 'A mensagem deve ter pelo menos 10 caracteres.';
}    
if (empty($erros) && $_SERVER['REQUEST_METHOD'] === 'POST'){
    header('Location: obrigado.php?nome=' . urlencode($nome_visitante));
}
}

?>


 
<?php include '../includes/cabecalho.php';?>

    <div class="container">
        <h1 class="titulo-secao"> FORMULARIO DE CONTATO</h1>

<form class="form-container" action="contato.php" method="post">
    <label>SEU NOME:</label>
    <input type="text" name="nome_visitante">

    <label>SUA MENSAGEM:</label>
    <textarea name="mensagem" rows="4"></textarea>

    <button type="submit">ENVIAR</button>


</form>
</div>


<?php if (!empty($erros)): ?>
    <div class="alerta-erro">
        <h3> CORRIJA OS ERROS:</h3>
        <?php foreach ($erros as $erro): ?>
            <p style="margin: 4px 0;"> X <?php echo htmlspecialchars($erro); ?></p>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>


<?php include '../includes/rodape.php';?>

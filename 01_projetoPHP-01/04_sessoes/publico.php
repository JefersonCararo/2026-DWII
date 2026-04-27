<?php
/*
DISCIPLINA: Desenvolvimento Web II (DWII)
AULA: 06 - Autenticação com sessões e controle de acesso
ARQUIVO: 04_sessões/publico.php
AUTOR: JEFERSON ADRIANO CARARO
DATA: 28/03/2026
*/

session_start();
$logado = isset($_SESSION['usuario']);

$titulo_pagina = 'Página Pública';
$caminho_raiz = '../';
$pagina_atual = '';
  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once __DIR__ . '/../includes/cabecalho.php'; ?>
</head>
<body>
    
<div class="container" style="text-align: center;">
    <h1 class="titulo-secao"> PÁGINA PÚBLICA</h1>
    <p>ESTE CONTEÚDO É VISIVEL PARA QUALQUER VISITANTE, SEM LOGIN.
    </p>
    <p></p>

    <?php if ($logado): ?>
        <p>Olá, <strong><?php echo htmlspecialchars($_SESSION['usuario']);?></strong>!
        VOCÊ JÁ ESTÁ AUTENTICADO.</p>
        <a href="painel.php"
           style="background: #8f1283; color: white; padding: 10px 24px;
           border-radius: 6px; text-decoration: none;
           font-weight: bold;">
           IR AO PAINEL
        </a>

    <?php else: ?>
        <a href="login.php"
           style="background: #9b2a81; color: white; padding: 10px 24px;
           border-radius: 6px; text-decoration: none;
           font-weight: bold;">
        ACESSAR ÁREA RESTRITA   
        </a> 

    <?php endif; ?>

</div>

<?php require_once __DIR__ . '/../includes/rodape.php';?>
</body>
</html>
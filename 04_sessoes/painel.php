<?php
/*
DISCIPLINA: Desenvolvimento Web II (DWII)
AULA: 06 - Autenticação com sessões e controle de acesso
ARQUIVO: 04_sessões/painel.php
AUTOR: JEFERSON ADRIANO CARARO
DATA: 28/03/2026
*/

//session_start();

//if(!isset($_SESSION['usuario'])){
//    header('Location: login.php');
//    exit;
//}

require_once __DIR__ . '/includes/auth.php';
requer_login();

$titulo_pagina = 'Painel - Área Restrita';
$caminho_raiz = '../';
$pagina_atual = '';

if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
}
$_SESSION['visitas']++;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   
<?php require_once __DIR__ . '/../includes/cabecalho.php';?>

</head>
<body>
    
<div class="container">
    <div class="alerta-sucesso">
        <p><strong>Usuário:</strong>
        <?php echo htmlspecialchars($_SESSION['usuario']);?>
        </p>
    <p><strong>Login realizado em:</strong>
    <?php echo htmlspecialchars($_SESSION['logado_em'] ?? '-'); ?>
    </p>
    <p><strong>Visitas:</strong>
    <?php echo htmlspecialchars($_SESSION['visitas']);?>
    </p>
</div>

<div class="card">
    <h3> PAINEL DE CONTROLE </h3>
    <p>ESTE CONTEÚDO SÓ É VISÍVEL PARA USUÁRIOS AUTENTICADOS.
    </p>
    <p>NAS PRÓXIMAS AULAS ESTE PAINEL TERÁ FUNCIONALIDADES REAIS (CRUD).
    </p>
</div>

<p style="margin-top: 24px; text-align: center;">
    <a href="logout.php"
        style="background: #cf1c21; color: white; padding:10px 24px;
        border-radius: 6px; text-decoration: none;
        font-weight:bold;">
        SAIR    
    </a>
</p>
<p style="margin-top: 24px; text-align: center;">
    <a href="perfil.php"
        style="background: #cf1c21; color: white; padding:10px 24px;
        border-radius: 6px; text-decoration: none;
        font-weight:bold;">
        VER PERFIL    
    </a>
</p>
</div>

<?php require_once __DIR__ . '/../includes/rodape.php';?>

</body>
</html>
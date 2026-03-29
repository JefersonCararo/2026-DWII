<?php 
/*
DISCIPLINA: Desenvolvimento Web II (DWII)
AULA: 06 - Autenticação com sessões e controle de acesso
ARQUIVO: 04_sessões/login.php
AUTOR: JEFERSON ADRIANO CARARO
DATA: 28/03/2026
*/

session_start();

if(isset($_SESSION['usuario'])){
    header('Location: login.php');
    exit;
}

$USUARIO_VALIDO = 'admin';
$SENHA_VALIDA = 'dwii2026';

$erro = '';
$login = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $login = trim($_POST['usuario'] ?? '');
    $senha = trim($_POST['senha'] ?? '');

    if($login === $USUARIO_VALIDO && $senha === $SENHA_VALIDA){
        session_regenerate_id(true);
        $_SESSION['usuario'] = $login;
        $_SESSION['logado_em'] = date('d/m/Y \à\s H:i');
        header('Location: painel.php');
        exit;
    }else{
        $erro = 'Usuário ou senha incorretos.';
    }
}

$titulo_pagina = 'Login - ÁREA RESTRITA';
$caminho_raiz = '../';
$pagina_atual = '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once __DIR__ . '/../includes/cabecalho.php';?>
</head>
<body>
    <div class="container" style="max-width: 420px;">
        <div class="form-container">

        <h1 class="titulo-secao" style="text-align: center;
        font-size: 22px;">
        ÁREA RESTRITA
    </h1>

    <?php if($erro): ?>
        <div class="alerta-erro">
            <p style="margin: 0; font-size:14px;">
              ❌ <?php echo htmlspecialchars($erro); ?> 
            </p>
        </div>

        <?php endif; ?>

        <form action="login.php" method="post">
            <label>Usuário:</label>
            <input type="text"
                    name="usuario"
                    value="<?php echo htmlspecialchars($login);?>"
                    autocomplete="username">
            
            <label>Senha:</label>
            <input type="password"
                   name="senha"
                   autocomplete="current-password">

            <button type="submit">Entrar</button>
        </form>

        <p style="text-align: center; margin-top:20px; font-size: 13px; color: #6b7280;">
            <a href="../index.php" style="color: #3b579d;">
                VOLTAR AO INICIO
            </a>
        </p>
    </div>
</div>

<?php require_once __DIR__ . '/../includes/rodape.php'; ?>

</body>
</html>

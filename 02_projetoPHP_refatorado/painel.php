<?php

require_once __DIR__ . '/includes/auth.php';
requer_login();

$pagina_atual = 'painel';
$titulo_pagina = 'Painel - Portfólio';
$caminho_raiz = './';

require_once __DIR__ . '/includes/cabecalho.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once __DIR__ . '/includes/cabecalho.php'; ?>
</head>
<body>
    <main>
        <div class="container">
            <h1 class="titulo-secao">Painel</h1>
            <p>Olá, <strong><?php echo htmlspecialchars(usuario_atual()); ?></strong>!
                Voce esta em uma area restrita.</p>
            <p>
                <a href="admin.php" class="btn-primario">Gerenciar projetos</a>
            </p>
        </div>
    </main>
<?php require_once __DIR__ . '/includes/rodape.php';?>
</body>
</html>


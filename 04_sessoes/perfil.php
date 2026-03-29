<?php require_once __DIR__ . '/includes/auth.php';
requer_login();
?>
  <?php require_once __DIR__ . '/../includes/cabecalho.php';?>  
<div class="container">
    <div class="alerta-sucesso">
        <p><strong>Usuário:</strong>
        <?php echo htmlspecialchars($_SESSION['usuario']);?>
        </p>
    <p><strong>Login realizado em:</strong>
    <?php echo htmlspecialchars($_SESSION['logado_em'] ?? '-'); ?>
    </p>
    <p><strong>Senha:</strong>
    <?php echo htmlspecialchars($_SESSION['senha']);?>
    </p>

</div>

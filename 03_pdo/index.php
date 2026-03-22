/*
DISCIPLINA: Desenvolvimento Web II (2026-DWII)
AULA: 05 - PHP + MariaDB: persistencia de dados via PDO
AUTOR: JEFERSON ADRIANO CARARO
DATA: 22/03/2026
*/

<?php
$titulo_pagina = "Catálogo de Tecnologias";
$pagina_atual = "catalogo";

require_once 'includes/conexao.php';

$stmt = $pdo->query('SELECT * FROM tecnologias ORDER BY nome ASC');
$tecnologias = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php include 'includes/cab_pdo.php';?>
</head>
<body>
    <div class="container">
    <h1 class="titulo-secao"> CATALOGO DE TECNOLOGIAS</h1>
    <p style="color: #92147b; margin-bottom: 20px;">
        <?php echo count($tecnologias); ?> tecnologia(s) cadastrada(s)
    </p>

    <?php foreach ($tecnologias as $tec): ?>
        <div class="card">
            <div style="display: flex; justify-content: space-between; align-items: center;">

            <h3><?php echo htmlspecialchars($tec['nome']); ?></h3>
            <span style="background: #e8edf5; color: #832288; padding: 3px 10px; border-radius: 20px; font-size: 13px;">
                <?php echo htmlspecialchars($tec['categoria']);?>
        </span>
</div>
<p><?php echo htmlspecialchars($tec['descricao']); ?></p>
<a href="/03_pdo/detalhe.php?id=<?php echo $tec['id']; ?>"
    style="color: #a4219e; font-size: 14px; font-weight: bold; display: inline-block; margin-top: 10px;">
    VER DETALHES 
</a>
</div>
<?php endforeach; ?>
</div>

<?php include 'includes/rod_pdo.php';?>
</body>
</html>

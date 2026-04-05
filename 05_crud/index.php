<?php
/*
Disciplina: Desenvolvimento Web II (DWII)
Aula: 07 - CRUD: Create e Read
Arquivo: 05_crud/index.php
Descrição: Exibe o formulário de cadastro e processa o INSERT
Autor: JEFRSON ADRIANO CARARO
Data: 30/03/2026
*/

require_once __DIR__ . '/../04_sessoes/includes/auth.php';
requer_login();

require_once __DIR__ . '/includes/conexao.php';

$pdo = conectar();
$stmt = $pdo->query('SELECT * FROM projetos ORDER BY criado_em DESC');
$projetos = $stmt->fetchAll();

$cadastroOK = isset($_GET['cadastro']) && $_GET['cadastro'] === 'ok';

$titulo_pagina = 'Meus Projetos - Portfólio';
$caminho_raiz = '../';
$pagina_atual = '';

$busca = $_GET['busca'] ?? '';

if($busca) {
    $stmt = $pdo->prepare('SELECT * FROM projetos WHERE nome LIKE :busca ORDER BY criado_em DESC ');
    $stmt->execute([':busca' => '%' . $busca . '%']);
}else{
    $stmt = $pdo->query('SELECT * FROM projetos ORDER BY criado_em DESC');
}
$projetos = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <?php require_once __DIR__ . '/../includes/cabecalho.php';?>
</head>
<body>
    
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; margin-bottom: 20px;">
            <h1 class="titulo-secao" style="margin: 0;">
                MEUS PROJETOS</h1><p></p>
                <a href="cadastrar.php" class="btn-primario">
                    NOVO PROJETO</a>
            <h1 class="titulo-secao" style="margin: 0;">
                <form method="get" style="margin-bottom: 20px;">
                <input type="text" name="busca" placeholder="Busca por nome" value="<?= htmlspecialchars($_GET['busca'] ?? '') ?> ">
                <button type="submit">PESQUISA</button>
            </h1> 
            </form>

    </div>

<?php require_once __DIR__ . '/detalhe.php'; ?>

</div> 

<?php require_once __DIR__ . '/../includes/rodape.php'; ?>

</body>
</html>
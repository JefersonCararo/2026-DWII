<?php
/*
Disciplina: Desenvolvimento Web II (DWII)
Aula: 07 - CRUD: Create e Read
Arquivo: 05_crud/editar.php
Descrição: Implementa o U do CRUD (Update). 
Este arquivo tem três responsabilidades:
    1. Validar o ID recebido via GET
    2. Exibir formulário preenchido com dados atuais (GET)
    3. Processar as alterações e executar UPDATE (POST)
Autor: JEFERSON ADRIANO CARARO
Data: 11/04/2026
*/

require_once __DIR__ . '/../04_sessoes/includes/auth.php';
requer_login();

require_once __DIR__ . '/includes/conexao.php';

$id = (int) ($_GET['id'] ?? 0);

if ($id <= 0){
    header('Location: index.php?erro=id_invalido');
    exit;
}

$pdo = conectar();
$stmt = $pdo->prepare('SELECT * FROM projetos WHERE id = :id');
$stmt->execute([':id' => $id]);
$projeto = $stmt->fetch();

if (!$projeto){
    header('Location: index.php?erro=nao_encontrado');
    exit;
}

$erro = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $nome = trim($_POST['nome'] ?? '');
    $descricao = trim($_POST['descricao'] ?? '');
    $tecnologias = trim($_POST['tecnologias'] ?? '');
    $link_github = trim($_POST['link_github'] ?? '');
    $ano = (int)($_POST['ano'] ?? date('Y'));

    if ($nome === '' || $descricao === '' || $tecnologias === '')
        {
            $erro = 'Preencha todos os campos obrigatóriosl.';
        }

    if ($erro === ''){
        
        $sql = 'UPDATE projetos
                    SET nome = :nome,
                        descricao = :descricao,
                        tecnologias = :tecnologias,
                        link_github = :link_github,
                        ano = :ano
                WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nome' => $nome,
            ':descricao' => $descricao,
            ':tecnologias' => $tecnologias,
            ':link_github' => $link_github !== '' ? $link_github: null,
            ':ano' => $ano,
            ':id' => $id,
        ]);

        header('Location: index.php?editado=ok');
        exit;
    }

    $projeto['nome'] = $nome;
    $projeto['descricao'] = $descricao;
    $projeto['tecnologias'] = $tecnologias;
    $projeto['link_github'] = $link_github;
    $projeto['ano'] = $ano;
}

$titulo_pagina = 'Editar Projeto - Portfólio';
$caminho_raiz = '../';
$pagina_atual = '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <?php require_once __DIR__ . '/../includes/cabecalho.php'; ?>
</head>
<body>
    <div class="container">

        <h1 class="titulo-secao"> EDITAR PROJETO</h1>

        <?php if ($erro): ?>
            <div class="alerta-erro">
                <p style="margin: 0;"> ❌ <?php echo htmlspecialchars($erro); ?></p>
            </div>
        <?php endif; ?>

        <form action="editar.php?id=<?php echo $id; ?>" method="post" class="formulario">
            
            <div class="campo">
                <label class="label-campo"> NOME DO PROJETO *</label>
                <input type="text" name="nome" class="input-texto" value="<?php echo htmlspecialchars($projeto['nome']); ?>">
            </div>

            <div class="campo">
                <label class="label-campo"> DESCRIÇÃO *</label>
                <textarea name="descricao" class="input-texto" rows="4"><?php echo htmlspecialchars($projeto['descricao']); ?></textarea>
            </div>

            <div class="campo">
                <label class="label-campo"> TECNOLOGIAS *</label>
                <input type="text" name="tecnologias" class="input-texto" value="<?php echo htmlspecialchars($projeto['tecnologias']); ?>">
            </div>

            <div class="campo"> 
                <label class="label-campo"> LINK GITHUB (opcional)*</label>
                <input type="url" name="link_github" class="input-texto" value="<?php echo htmlspecialchars($projeto['link_github'] ?? ''); ?>">
            </div>

            <div class="campo">
                <label class="label-campo"> ANO *</label>
                <input type="number" name="ano" class="input-texto" value="<?php echo (int) $projeto['ano']; ?>" min="2000" max="2099">
            </div>

            <div style="display: flex; gap: 12px; margin-top: 8px;">
                <button type="submit" class="btn-primario"> SALVAR ALTERAÇÕES</button>
                <a href="index.php" class="btn-secundario"> CANCELAR</a>
            </div>

    </form>

</div>
<?php require_once __DIR__ . '/../includes/rodape.php'; ?>
</body>
</html>
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
$editadoOK = isset($_GET['eidtado']) && $_GET['editado'] === 'ok';
$excluidoOK = isset($_GET['excluido']) && $_GET['excluido'] === 'ok';
$erroMsg = isset($_GET['erro']) ? $_GET['erro'] : '';

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

        <?php if($cadastroOK): ?>
            <div class="alerta-sucesso">
                <p style="margin: 0;">
                    PROJETO CADASTRADO COM SUCESSO!</p>
            </div>    
        <?php endif; ?>

        <?php if($editadoOK): ?>
            <div class="alerta-sucesso">
                <p style="margin: 0;">
                PROJETO ATUALIZADO COM SUCESSO!</p>
            </div>
            <?php endif; ?>

        <?php if($excluidoOK): ?>
            <div class="alerta-sucesso">
                <p style="margin: 0;">
                PROJETO EXCLUIDO COM SUCESSO!</p>
            </div>
            <?php endif; ?>

            <?php if($erroMsg === 'nao_encontrado'): ?>
                <div class="alerta-erro">
                    <p style="margin: 0;">
                    PROJETO NÃO ENCONTRADO. ELE PODE JÁ TER SIDO EXCLUIDO.</p>
                </div>
            <?php elseif($erroMsg === 'id_invalido'): ?>
                <div class="alerta-erro">
                    <p style="margin: 0;">
                        REQUISIÇÃO INVÁLIDA.</p>
                </div>
            <?php endif; ?>

            <?php if(empty($projetos)): ?>
                <div class="card" style="text-align: center; padding: 40px 20px; color: #6b7280;">
                    <p style="font-size: 40px; margin: 0 0 12px;">
                        📩</p>
                    <p style="font-size: 16px; margin: 0 0 16px;">
                        NENHUM PROJETO CADASTRADO NO MOMENTO</p>
                    <a href="cadastrar.php" class="btn-primario">
                        + CADASTRAR O PRIMEIRO PROJETO</a>
                </div>

        <?php else: ?>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px">
            <?php foreach ($projetos as $projeto): ?>
                <div class="card">
                    <h3 style="margin: 0 0 8px; color: #de32b9; font-size: 17px;">
                        <?php echo htmlspecialchars($projeto['nome']); ?>
                    </h3>

                    <p style="margin: 0 0 10px; font-size: 14px; color: #4c0c49; line-height: 1.6;">
                        <?php echo htmlspecialchars($projeto['descricao']); ?>
                    </p>

                    <p style="margin: 0 0 6px; font-size: 13px; color: #7d387e;">
                        <?php echo htmlspecialchars($projeto['tecnologias']); ?>
                    </p>

                    <p style="margin: 0 0 12px; font-size: 13px; color: #802e80;">
                        <?php echo htmlspecialchars($projeto['ano']); ?>
                    </p>

                    <?php if ($projeto['link_github']): ?>
                        <a href="<?php echo htmlspecialchars($projeto['link_github']); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="btn-secundario">
                        VER NO GITHUB</a>
                    <?php endif; ?>

                    <div style="margin-top: 12px; display:flex; gap: 8px; flex-wrap: wrap;">
                        <a href="editar.php?id=<?php echo (int) $projeto['id']; ?>"
                            class="btn-secundario"> EDITAR</a>
                        <a href="excluir.php?id=<?php echo (int) $projeto['id']; ?>"
                             class="btn-perigo"> EXCLUIR</a>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

        <p style="margin-top:  16px; font-size: 14px; color: #822e78; text-align: right;">
            <?php echo count($projetos); ?> projeto(s) cadastrado(s)
        </p>
 
<?php endif; ?>
    
</div> 

<?php require_once __DIR__ . '/../includes/rodape.php'; ?>

</body>
</html>
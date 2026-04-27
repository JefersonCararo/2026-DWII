<!-- 01_php-intro/projetos.php -->
 <?php

if (session_status() === PHP_SESSION_NONE) {
    session_status();
}

 $nome          ="Jeferson Adriano Cararo";
 $pagina_atual  ="projetos";
 $titulo_pagina ='Projetos | Portfólio DWII';
 $caminho_raiz  ="./";

require_once __DIR__ . '/includes/conexao.php';

$pdo = conectar();
$stmt = $pdo->query('SELECT * FROM projetos ORDER BY criado_em DESC');
$projetos = $stmt->fetchAll();
?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
     <?php include './includes/cabecalho.php';?> 
<main>
 </head>
 <body>
    <div class="container">

        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h1 class="titulo-secao" style="margin: 0;"> PROJETOS</h1>
            <?php if (!empty($projetos)): ?>
                <span style="color: #6b7280; font-size: 14px;">
                    <?php echo count($projetos); ?> projeto(s)
                </span>
             <?php endif; ?>
        </div>
    <?php if (empty($projetos)): ?>
    <?php else: ?>    

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px;">
            
            <?php foreach ($projetos as $projeto): ?>
                <div class="card">

                    <h3 style="margin: 0 0 8px; color: #3b579d; font-size: 17px;">
                        <?php echo htmlspecialchars($projeto['nome']); ?>
                    </h3>
    <?php include './includes/rodape.php'; ?>

</body>
</html>
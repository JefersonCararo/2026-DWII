<?php

$caminho_raiz ='../';

require_once 'includes/conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if(!$id){
    header('Location: index.php');
    exit;
}

$stmt = $pdo->prepare('SELECT * FROM tecnologias WHERE id = :id');
$stmt->execute(['id' => $id]);
$tec = $stmt->fetch();

if(!$tec){
    header('Location: index.php');
    exit;
}

$titulo_pagina = htmlspecialchars($tec['nome']) . " - CATALOGO";
$pagina_atual = "catalogo";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/cab_pdo.php';?>
</head>
<body>
    <div class="container">

    <a href="index.php" style="color: #832190; font-weight: bold;"> VOLTAR AO CATALOGO</a>
        <div style="display: flex; justify-content: space-between; align-items: flex-start;">
            <h1 style="color: #932a90; margin: 0 0 8px; font-size: 24px;">
                <?php echo htmlspecialchars($tec['nome']);?>
            </h1>
            <span style="background: #e8edf5; color: #3b579d; padding: 4px 12px; border-radius: 20px; font-size: 13px; font-weight: bold; white-space: nowrap;">
            <?php echo htmlspecialchars($tec['descricao']);?>
            </span>
        </div>
        <p style="font-size: 16px; margin: 16px 0;">
            <?php echo htmlspecialchars($tec['descricao']);?>
        </p>

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px; font-size: 14px;">
            <tr style="background: #f3f4f6;">
                <td style="padding: 10px; border: 1px solid #e5e7eb; font-weight: bold; width: 160px;">
                    ID</td>
        <td style="padding: 10px; border: 1px solid #e5e7eb;">
            <?php echo $tec['id'];?>
        </td>
    </tr> 
        <tr>       
        <td style="padding: 10px; border: 1px solid #e5e7eb; font-weight: bold;">
            ANO DE CRIAÇÃO</td>
            <td style="padding: 10px; border: 1px solid #e5e7eb;">
            <?php echo $tec['ano_criacao'];?>
            </td>
        </tr>
            <tr style="background: #f3f4f6;">
                <td style="padding: 10px; border: 1px solid #e5e7eb; font-weight: bold;">
                    CADASTRADO EM</td>
                <td style="padding: 10px; border: 1px solid #e5e7eb;">
                    <?php echo date('d/m/Y \à\s H:i', strtotime($tec['criado_em'])); ?>
                </td>
            </tr>
        </table>
    </div>
</div>

<?php include 'includes/rod_pdo.php';?>

</body>
</html>
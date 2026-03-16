<?php 
/*
ARQUIVO : index.php
DISCIPLINA: Desenvolvimento Web II (2026-DWII)
AULA: 04 - PHP para Web: Formulários, GET e POST
AUTOR: JEFERSON ADRIANO CARARO
CONCEITOS: Ponto de Entrada, array associativo, foreach, date(), htmlspecialchars()
*/

$nome = "JEFERSON ADRIANO CARARO";
$subtitulo = "Repositório 2026 - Desenvolvimento Web II";

$aulas =[
    [
        "numero"    =>"0",
        "nome"  =>"Apresentação Pessoal",
        "descricao" =>"Página estática com HTML e CSS - foto de perfil e layout responsivo.",
        "link"  =>"00_apresentacao/index.html",
        "icone" =>"👨‍💼",
        "cor" =>"#e1a9ff",
        "conceitos" =>"HTML semântico, CSS Flexbox, responsividade",
    ],
    [
        "numero" =>"03",
        "nome" =>"Portfólio Dinâmico com PHP",
        "descricao" =>"Mini-site de pportfólio com variáveis, includes e menu dinâmico.",
        "link" =>"01_php-intro/index.php",
        "icone" =>"🦝",
        "cor" =>"#fea8ff",
        "conceitos" =>"Variaveis, echo, include, foreach, operador ternário",
    ],
    [
        "numero" =>"04",
        "nome" =>"Formulário de Contato",
        "descricao" =>"Formulário com validação no servidor, proteção XSS e padrão PRG.",
        "link" =>"02_formularios/contato.php",
        "icone" =>"",
        "cor" =>"#eca7ff",
        "conceitos" =>"$_POST, validação, htmlspecialchars(), header() + exit",
    ],
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($subtitulo); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo $caminho_raiz; ?>includes/style.css">
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($nome); ?> 👨‍💼</h1>
        <br><?php echo htmlspecialchars($subtitulo); ?>
    </header>

    <div class="container">
        <div class="box-info" style="margin-top: 0;">
            <h3>COMO EXECUTAR O REPOSITÓRIO</h3>
            <p style="font-size: 14px; color: #74151;">
                Suba o servidor PHP na <strong>raiz</strong> para acessar todas as aulas;
            </p>
            <div style="background: #010000; color: #a8e6a3; padding: 10px 16px;
            border-radius: 6px; margin-top: 10px; font-family: 'Courier New, monospace;
                font-size: 13px; color: #6b7280; line-height: 1.8;">
            cd~/workspaces/2026-DWII<br>php -S localhost:8000
        </div>
            <p style="font-size: 13px; color: #6b7280; margin-top: 8px;">
                Esta página é o hub de navegação. Use os botões abaixo para acessar cada projeto.
            </p>
        </div>

<h2 class="secao"> PROJETOS POR AULA</h2>
<?php foreach ($aulas as $aula): ?>
    <div class="card-aula"
        style="border-left-color: <?php echo $aula['cor']; ?>;">

    <div class="icone"><?php echo $aula['icone']; ?></div>

    <div class="conteudo">
        <span class="badge">AULA <?php echo htmlspecialchars($aula['numero']); ?>
</span>
    <h3 style="color: <?php echo $aula['cor']; ?>;">
        <?php echo htmlspecialchars($aula['nome']); ?>
    </h3>
    <p><?php echo htmlspecialchars($aula['descricao']); ?></p>
    <span class="conceitos">
        🔑 <?php echo htmlspecialchars($aula['conceitos']); ?>
</span><br>
    <a href="<?php echo htmlspecialchars($aula['link']); ?>"
        class="btn"
        style="background: <?php echo $aula['cor']; ?>;">
        ABRIR ➡️
</a>
</div>

</div>
<?php endforeach; ?>

<p style="text-align: right; font-size: 13px; color: #9ca3af; margin-top: 8px;">
    GERADO EM : <?php echo date("d/m/Y \à\s H:i:s"); ?>
</p>

</div>

<footer>
    <?php echo htmlspecialchars($nome); ?>
    &copy; <?php echo date("Y"); ?>
    |DESENVOLVIDO COM PHP | IFPR - PONTA GROSSA|

</footer>
</body>
</html>
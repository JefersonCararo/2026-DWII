<!-- includes/cabecalho.php -->

<?php
/*
ARQUIVO : includes/cabecalho.php
DISCIPLINA: Desenvolvimento Web II (2026-DWII)
AULA: 04 - PHP para Web: Formulários, GET e POST
AUTOR: JEFERSON ADRIANO CARARO
CONCEITOS: Modularidade, include, isset(), caminho dinâmico
*/

if(!isset($titulo_pagina)) $titulo_pagina ="Portfólio DWII";
if(!isset($caminho_raiz)) $caminho_raiz ="../";

?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($titulo_pagina); ?></title>

<link rel="stylesheet" href="<?php echo $caminho_raiz; ?>includes/style.css">

<?php
include __DIR__ . '/nav.php';
?>
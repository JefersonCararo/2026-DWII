<?php
/*
ARQUIVO: 03_pdo/includes/cab_pdo.php
DISCIPLINA: Desenvolvimento Web II (2026-DWII)
AULA: 05 - PHP + MariaDB: persistencia de dados via PDO
*/

if(!isset($titulo_pagina)) $titulo_pagina = "Catálogo de Tecnologias";
if(!isset($pagina_atual)) $pagina_atual = "";

$caminho_raiz = '../';

include __DIR__ . '/../../includes/cabecalho.php';
?>
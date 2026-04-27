<?php
/*
DISCIPLINA: Desenvolvimento Web II (DWII)
AULA: 06 - Autenticação com sessões e controle de acesso
ARQUIVO: 04_sessões/logout.php
AUTOR: JEFERSON ADRIANO CARARO
DATA: 28/03/2026
*/

session_start();

session_unset();

session_destroy();

header('Location: login.php');
exit;
?>
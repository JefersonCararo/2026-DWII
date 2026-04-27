<?php 
/*
DISCIPLINA: Desenvolvimento Web II (DWII)
AULA: 06 - Autenticação com sessões e controle de acesso
ARQUIVO: 04_sessões/includes/auth.php
AUTOR: JEFERSON ADRIANO CARARO
DATA: 28/03/2026
*/

function requer_login(): void{
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }

    if(!isset($_SESSION['usuario'])){
        header('Location: /../04_sessoes/login.php');
        exit;
    }
}

function usuario_logado(): string
{
    return $_SESSION['usuario'] ?? '';
}
?>
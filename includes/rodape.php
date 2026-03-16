<!-- includes/rodape.php -->
<?php
/*
ARQUIVO : includes/rodape.php
DISCIPLINA: Desenvolvimento Web II (2026-DWII)
AULA: 04 - PHP para Web: Formulários, GET e POST
AUTOR: JEFERSON ADRIANO CARARO
CONCEITOS: Modularização, date(), isset(), fallback defensivo
*/

$autor = isset($nome) ? htmlspecialchars($nome) : "Portfólio";
?>

<footer>
    <?php echo $autor; ?>
    &copy; <?php echo date("Y");?>
    |Desenvolvido com PHP
    |IFPR - Ponta Grossa
</footer>
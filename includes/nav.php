<?php
/*
ARQUIVO : includes/nav.php
DISCIPLINA: Desenvolvimento Web II (2026-DWII)
AULA: 04 - PHP para Web: Formulários, GET e POST
AUTOR: JEFERSON ADRIANO CARARO
CONCEITOS: Menu dinâmico, operador ternário, $caminho_raiz
*/

if(!isset($pagina_atual)) $pagina_atual ="";
if(!isset($caminho_raiz)) $caminho_raiz ="../";

function menu_class($item, $atual){
    return ($item === $atual) ? 'class="ativo"' : '';
}

?>



<nav>
    <a href="<?php echo $caminho_raiz; ?>01_php-intro/index.php"
    <?php echo menu_class("inicio", $pagina_atual); ?>>
    INICIO
</a>
    <a href="<?php echo $caminho_raiz; ?>01_php-intro/sobre.php"
    <?php echo menu_class("sobre", $pagina_atual); ?>>
    SOBRE
</a>
    <a href="<?php echo $caminho_raiz; ?>01_php-intro/projetos.php"
    <?php echo menu_class("projetos", $pagina_atual); ?>>
    PROJETOS
</a>
    <a href="<?php echo $caminho_raiz; ?>02_formularios/contato.php"
    <?php echo menu_class("contato", $pagina_atual); ?>>
    CONTATO
</a>
</nav>
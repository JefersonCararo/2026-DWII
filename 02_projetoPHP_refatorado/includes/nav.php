<?php
/*
ARQUIVO : includes/nav.php
DISCIPLINA: Desenvolvimento Web II (2026-DWII)
AULA: 04 - PHP para Web: Formulários, GET e POST
AUTOR: JEFERSON ADRIANO CARARO
CONCEITOS: Menu dinâmico, operador ternário, $caminho_raiz
*/

// fallbacks defensivos
if(!isset($pagina_atual)) $pagina_atual ='';
if(!isset($caminho_raiz)) $caminho_raiz ='./';

function menu_class(string $item, string $atual): string{
    return ($item === $atual) ? 'class="ativo"' : '';
}

$logado = isset($_SESSION['usuario']);
?>

<nav>
    <a href="<?php echo $caminho_raiz; ?>index.php"
    <?php echo menu_class("inicio", $pagina_atual); ?>>
    INICIO
</a>
    <a href="<?php echo $caminho_raiz; ?>sobre.php"
    <?php echo menu_class("sobre", $pagina_atual); ?>>
    SOBRE
</a>
    <a href="<?php echo $caminho_raiz; ?>projetos.php"
    <?php echo menu_class("projetos", $pagina_atual); ?>>
    PROJETOS
</a>
    <a href="<?php echo $caminho_raiz; ?>contato.php"
    <?php echo menu_class("contato", $pagina_atual); ?>>
    CONTATO
</a>
 <a href="<?php echo $caminho_raiz; ?>03_pdo/index.php"
    <?php echo menu_class("catalogo", $pagina_atual); ?>>
    CATALOGO
 </a>

<?php if($logado): ?>

<a href="<?php echo $caminho_raiz; ?>04_sessoes/painel.php"
    <?php echo menu_class("painel", $pagina_atual); ?>>
    PAINEL
</a>

<a href="<?php echo $caminho_raiz; ?>04_sessoes/logout.php"
    <?php echo menu_class("logout", $pagina_atual); ?>>
    LOGOUT
</a>

<?php else: ?>

<a href="<?php echo $caminho_raiz; ?>04_sessoes/publico.php"
    <?php echo menu_class("login", $pagina_atual); ?>>
    LOGIN
</a> 
 
<?php endif; ?>

</nav>
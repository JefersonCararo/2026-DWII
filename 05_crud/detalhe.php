<?php

$id = (int)($_GET['id'] ?? 0);

?>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px">
            <?php foreach ($projetos as $projeto): ?>
                <div class="card">
                    <h3 style="margin: 0 0 8px; color: #de32b9; font-size: 17px;">
                        <?php echo htmlspecialchars($projeto['nome']); ?>
                    </h3>

                    <p style="margin: 0 0 10px; font-size: 14px; color: #4c0c49; line-height: 1.6;">
                        <?php echo htmlspecialchars($projeto['descricao']); ?>
                    </p>

                    <p style="margin: 0 0 6px; font-size: 13px; color: #7d387e;">
                        <?php echo htmlspecialchars($projeto['tecnologias']); ?>
                    </p>

                    <p style="margin: 0 0 12px; font-size: 13px; color: #802e80;">
                        <?php echo htmlspecialchars($projeto['ano']); ?>
                    </p>

                    <?php if ($projeto['link_github']): ?>
                        <a href="<?php echo htmlspecialchars($projeto['link_github']); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="btn-secundario">
                        VER NO GITHUB</a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <p style="margin-top:  16px; font-size: 14px; color: #822e78; text-align: right;">
            <?php echo count($projetos); ?> projeto(s) cadastrado(s)
        </p>
 
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Anterior</a>
        </li>
        <?php
        for ($i = 0; $i < $numero_paginas; $i++) {
            ?>
            <li class="page-item<?php if ($pagina == ($i + 1)) echo " disabled"; ?>">
                <a class="page-link" href="?pagina=<?= $i + 1 ?>">
                    <?= $i + 1 ?>
                </a>
            </li>
            <?php
        }
        ?>
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Siguiente</a>
        </li>
    </ul>
</nav>
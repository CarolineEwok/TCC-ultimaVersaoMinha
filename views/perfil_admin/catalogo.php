﻿<?php  require_once __DIR__."/indexperfil.php" ?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <!-- Page Content -->

    <div id="page-inner" class="container">

        <div class="row">

            <?php foreach ($listaProdutos as $produto ):?>
                <div class="col-md-3 col-sm-12">
                    <div class="thumbnail">
                        <a href="#"><img class="card-img-top" src="http://www.azzaboutique.com.br/image/cache/data/blazer%20chic-600x600.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="informacoesProduto.php"><?php $produto['nome'] ?></a>
                            </h4>
                            <p class="card-text"><?php $produto['preco'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

        </div>

    </div>

    <!-- /. PAGE WRAPPER  -->
</div>

<?php require_once __DIR__. "/rodape.php"; ?>
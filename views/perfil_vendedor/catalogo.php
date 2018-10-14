<?php require_once "indexperfil.php" ?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <!-- Page Content -->

    <div id="page-inner" class="container">


        <div class="row">

            <?php for ($i=0; $i<15; $i++):?>
                <div class="col-md-3 col-sm-12">
                    <div class="thumbnail">
                        <a href="#"><img class="card-img-top" src="http://www.azzaboutique.com.br/image/cache/data/blazer%20chic-600x600.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="informacoesProduto.php">Blusa amarela</a>
                            </h4>
                            <p class="card-text">R$50,00</p>
                        </div>
                    </div>
                </div>
            <?php endfor;?>

        </div>
    </div>

</div>

<?php require_once "rodape.php"; ?>
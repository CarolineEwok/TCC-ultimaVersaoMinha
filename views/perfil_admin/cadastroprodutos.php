<?php require_once "indexperfil.php"?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner" class="container">


            <div class="ui text container form-sobre-fotos" >
                <div class="ui text container centered aligned">
                    <h1><label><font color="black">Cadastro de Produto</font></label></h1>
                </div><br>

                <!--formulario de cadastro -->
                <form class="ui form" action="../../controllers/produto_controller.php?acao=salvar" method="post">

                    <div class="field">
                        <div class="fields">
                            <div class="twelve wide field">
                                <label>Nome do produto</label>
                                <input type="text" name="shipping[address]" placeholder="Insira o nome do produto">
                            </div>
                            <div class="four wide field">
                                <label>Preço</label>
                                <input type="text" name="shipping[address-2]" placeholder="Preço">
                            </div>
                        </div>
                    </div>
                    <div class="ui form">

                    </div>
                    <div class="ui form">
                        <div class="two fields">
                            <div class="field">
                                <label><font color="#363636">Tipo</font></label>
                                <select name="tipoProduto" id="tipoProduto">
                                    <option value="0">Selecione</option>
                                    <?php foreach ($tipos as $tipo) : ?>
                                    <option value="<?= $tipo['idTipoProduto'] ?>"><?= utf8_decode($tipo['tipo']) ?></option>
                                    <?php endforeach; ?>
                                </select>


                            </div>
                            <div class="field">
                                <label><font color="#363636" size="2">Cor</font></label>
                                <input type="text" name="cor" placeholder="Ex : Amarelo">
                            </div>
                        </div>

                        <div class="ui form">
                            <div class="three fields">
                                <div class="field">
                                    <label><font color="#363636">Tamanho</font></label>
                                    <input type="text" name="tamanho" placeholder="Ex: M">
                                </div>
                                <div class="field">
                                    <label><font color="#363636" size="2">Estoque Mínimo</font></label>
                                    <input type="text" name="estoqueMin" placeholder="Ex : 30">
                                </div>
                                <div class="field">
                                    <label><font color="#363636">Estoque Atual</font></label>
                                    <input type="text" name="estoque" placeholder="Ex: 100">
                                </div>
                            </div>
                        </div>

                        <div class="hundred wide field">
                            <label><font color="#363636">Descrição</font></label>
                            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></label>
                            <textarea rows="2" name="descricao" placeholder="Escreva aqui a descrição de seu produto."></textarea>
                        </div>
                        <div class="">
                            <label><font color="black">Importar Imagens</font></label>
                            <div class="hundred wide field">
                                <div class="hundred wide field">
                                    <input type="file" name="imagem" >
                                </div>
                            </div>
                        </div>
                        <br>
                        <button class="ui button" type="submit">Cadastrar</button>
                </form>
            </div>


                </div>

             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>

<?php require_once "rodape.php"; ?>

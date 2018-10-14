<?php require_once "indexperfil.php"; ?>

<link href="../../../assets/css/tiloCarrinho.css" rel="stylesheet" />


<div id="page-wrapper">
    <!-- Page Content -->
    <div id="page-inner" class="container">


    <div class="row" style="margin-right: 10px; margin-left: 10px;">

        <div class="col-12">
            <div class="table-responsive ">
                <label class="col-md-12">
                    <h2 class="ui horizontal divider header">Meu carrinho <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                    </h2>
            </div><br>
            <br>


            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col"> </th>
                    <th scope="col">Referência</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Tamanho</th>
                    <th scope="col">Cor</th>
                    <th scope="col" class="text-center">Quantidade</th>
                    <th scope="col" class="text-right">Preço</th>
                    <th scope="col" class="text-right">Data</th>
                    <th scope="col" class="text-right">Hora</th>
                    <th scope="col" class="text-right">Excluir</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                    <td>2341</td>
                    <td>Blusa</td>
                    <td>M</td>
                    <td>Amarelo</td>
                    <td><input class="form-control" type="text" value="1" style="margin-left: 65px; width: 130px" /></td>
                    <td class="text-right">124,90</td>
                    <td class="text-right">7/2/18 </td>
                    <td class="text-right">15:00 </td>
                    <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button>
                    </td>
                </tr>
                <tr>
                    <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                    <td>6542</td>
                    <td>Moletom</td>
                    <td>G</td>
                    <td>Preto</td>
                    <td><input class="form-control" type="text" value="1" style="margin-left: 65px; width: 130px" /></td>
                    <td class="text-right">33,90 </td>
                    <td class="text-right">7/2/18 </td>
                    <td class="text-right">15:00 </td>
                    <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button>
                    </td>
                </tr>
                <tr>
                    <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                    <td>2364</td>
                    <td>Camisa</td>
                    <td>P</td>
                    <td>Rosa</td>
                    <td><input class="form-control" type="text" value="1" style="margin-left: 65px; width: 130px" /></td>
                    <td class="text-right">70,00 </td>
                    <td class="text-right">7/2/18 </td>
                    <td class="text-right">15:00 </td>
                    <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button>
                    </td>

                </tr>
                </tbody>

            </table>
            <tr>
                <td><strong style="margin-left: 7px;">Total</strong></td>
                <td class="text-right"><strong>346,90</strong></td>
            </tr>
        </div>
    </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">

                    <tr class="info">
                        <td>Loja: Arildinho & Cia</td>

                    </tr>

                </table>
            </div>
        </div>
    <div class="col mb-2">
        <div class="row">
            <div class="col-sm-12  col-md-6">
                <a href="catalogo.php"><button class="btn btn-block btn-light"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Adicionar produtos</span></button>
            </div>
            <div class="col-sm-12 col-md-6 text-right">
                <button class="btn btn-lg btn-block btn-success text-uppercase" onclick="myFunction()"> Solicitar venda <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></button>
                <script>
                    function myFunction() {
                        alert("Solicitação confirmada!");
                    }
                </script>
            </div>
        </div>
    </div>
</div>
</div>




<?php require_once "rodape.php"; ?>
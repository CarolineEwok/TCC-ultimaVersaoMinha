<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Estoque do infinito</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../../../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../../../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="../../../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="../../../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" type="text/css" href="../../../assets/semantic/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/style.css">
    <script src="../jquery/EXE3/https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).read(function(){
            $("#botaovenda").click(function(){
                alert("lalala");
            });


        });


    </script>

</head>
<body>

<div id="wrapper">


    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <span id="tamanhoicones">
        <a href="notificaçoes.php" class="glyphicon glyphicon-bell" aria-hidden="true" style="top: 15px;"></a>
            </span>

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="catalogo.php">Leaneth</a>
        </div>
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="../tela_inicio.php" class="btn btn-danger square-btn-adjust">Logout</a></div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">


        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="../../../assets/img/find_user.png" class="user-image img-responsive"/>
                </li>


                <li>
                    <a class="active-menu"  href="catalogo.php"><i class="fa fa-desktop fa-3x"></i>Catálogo</a>
                </li>

                <li>
                    <a href="informacoesPerfil.php"><i class="glyphicon glyphicon-user fa-3x" style="margin-right: 10px" aria-hidden="true"></i> Perfil </a>
                </li>
                <li>
                    <a href="historico.php"><i class="glyphicon glyphicon-folder-close fa-3x" aria-hidden="true"></i> Histórico </a>

                </li>


                <li>
                    <a href="carrinho.php"><i class="glyphicon glyphicon-shopping-cart" style="font-size: 3em" aria-hidden="true"></i>Carrinho</a>
                </li>

            </ul>

        </div>

    </nav>
    </html>



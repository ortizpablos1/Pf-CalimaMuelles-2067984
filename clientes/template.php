<?php

require_once('productos.php');
require_once('categorias.php');

$ModeloProductos = new Productos();

$ModeloCategoria = new Categoria();

?>


<?php
    if(isset($_GET['enviar'])) {
        $busquda = $_GET['Busqueda'];

        $consulta = $con->query("SELEC * FROM productos WHERE nombre_productos LIKE '%$Busqueda'");
    while ($row = $consulta->fetch_array() ) {
        echo $row['productos'].'<br>';
    }
    
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Calimamuelles</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <!---<link rel="stylesheet" href="css/normalize.css">-->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/skeleton.css">
    






</head>

<style>


</style>

<body>
    <!-- HEADER -->
    <header>


        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="index.php" class="logo">
                                <img src="./img/lgo.png" style="width: 100px;" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form>

                                <select class="input-select" style="width: 130px;">
                                    <?php
                                    $listarCategorias = $ModeloCategoria->verCategorias();
                                    if ($listarCategorias != Null) {
                                        foreach ($listarCategorias as $listarCategoria) {
                                    ?>
                                            <option value="0">categorias

                                                <h5><?= $listarCategoria['nombre_categoria']; ?></h5>
                                            </option>


                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                                <input class="input" type="busquda" Nombre ="Busqueda" placeholder="Search here">
                                <button class="search-btn" type="submit" Nombre ="enviar"value="Buscar" >Search</button>

                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">

               
                            <!-- /Cart -->
                            <header class="header">
                                <div class="containers">
                                
                                        <div class="four columns">
                                            
                                        </div>
                                        <div class="two columns u-pull-right">
                                            <ul>
                                                <li class="submenu">
                                                    <img src="img/cart.png" alt="">
                                                    <div id="carrito">
                                                        <p class="vacio">Pagar Ahora</p>
                                                        <table id="lista-carrito" class="u-full-width">
                                                            <thead>
                                                                <tr>
                                                                    <th>Imagen</th>
                                                                    <th>Producto</th>
                                                                    <th>Precio</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                            </tbody>
                                                        </table>
                                                        <a href="#" id="vaciar-carrito" class="button u-full-width">vaciar carrito</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    
                                </div>
                            </header> 
                        </div>

                        <!-- Menu Toogle -->
                    </div>
                    <!-- /Menu Toogle -->

                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="#">carro</a></li>
                    <li><a href="#">Mis pedidos</a></li>


                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- NAVIGATION -->

    <!-- /NAVIGATION -->
    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/carro.js"></script>

    <!-- Bootstrap 4 -->
    <script src="../calimamuellesfinal/template/clienetlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->



</body>

</html>
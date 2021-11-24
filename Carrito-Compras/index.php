<?php

require_once('productos.php');

$ModeloProductos = new Productos;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/sweetalert2.min.css">

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

    <link rel="stylesheet" href="css/botones.css">

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/footer.css">





    <title>Carrito Compras </title>
</head>
<style>
    .carta {
        display: flex;
        justify-content: space-between;
    }

    .card {
        margin: 0px 6px;
    }

    .derecha {
        position: relative;
        left: -200px;
        width: 200px;
        height: 200px;
        background-color: red;
    }
</style>

<body>
    <header>


        <div class="container">
            <div class="row align-items-stretch justify-content-between">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarCollapse">


                        <!-- LOGO -->
                        <div class="col-md-3">
                            <div class="header-logo">
                                <a href="index.php" class="logo">
                                    <img src="./img/lgo.png" style="width: 100px;" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row height d-flex justify-content-center align-items-center">
                                <div class="col-md-8">

                                    <!-- <div class="search">
                                        <input type="text" class="form-control" placeholder="buscar...">
                                        <button class="btn btn-primary">Buscar</button>
                                    </div> -->

                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <img src="img/cesta-de-la-compra.png" class="nav-link dropdown-toggle img-fluid" height="40px" width="40px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></img>
                                <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    <table id="lista-carrito" class="table">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="vaciar-carrito" class="btn btn-primar btn-block">Vaciar carrito<img src="img/eliminar.png" style="width: 30px;"></a>
                                    <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar
                                        Compra<img src="img/metodo-de-pago.png" style="width: 30px;"></a>
                                </div>
                            </li>
                        </ul>


                    </div>
                </nav>
            </div>
        </div>
    </header>

    <br />
    <br />

    <p></p>

    <!-- Navbar -->
    <nav class="navbar2 navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->


            <!-- Collapsible wrapper -->

            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">

            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                <li class="nav-item dropdow">

                    <?php require_once('vistas/editarPerfil.php'); ?>

                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <img src="img/usuario.png" style="width:25px;">
                    </a>


                    <div class="dropdown-menu">
                        <a class="dropdown-item" name="btnEditar" data-toggle="modal" data-target="#editarPerfil">Perfil</a>
                        <ul id="salir">
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a class="dropdown-item manito-clic" id="salir-irse2">Cerrar Sesión</a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </li>
            </ul>

        </div>
    </nav>






    <!-- Navbar -->

    <section class="container">
        <br />
        <br />
        <br />


        <div class="col-12">

            <div class="card card-solid" id="lista-productos">

                <div class=" card-body  text-center">


                    <div class=" row ">


                        <?php

                        $listarproductos = $ModeloProductos->verinfoproductos();
                        if ($listarproductos != Null) {
                            foreach ($listarproductos as $productos) {
                        ?>


                                <div class="card mb-4  carta shadow-sm" style="height: 500px;width:350px;">
                                    <div class="card-header">
                                        <h4 class="my-0 font-weight-bold"><?= $productos['nombre_producto'] ?></h4>
                                        <li class="list-unstyled mt-3 mb-1"><?= $productos['cantidad'] ?></li>


                                    </div>
                                    <div class="card-body">
                                        <img src="data:image/jpg;base64, <?php echo base64_encode($productos['imagen']); ?>" style="width: 120px; heigth:120x;" />

                                        <br />
                                        <br />
                                        <h1 class="card-title pricing-card-title precio">$/ <span class=""><?= $productos['precio'] ?></span></h1>

                                        <ul class="list-unstyled mt-3 mb-4">

                                            <li><?= $productos['estado'] ?></li>

                                        </ul>



                                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="<?= $productos['codigo'] ?>">Agregar Al Carro <img src="img/cesta-de-la-compra.png" style="width: 20px;"></a>
                                    </div>
                                </div>
                        <?php

                            }
                        }
                        ?>

                    </div>
                </div>

            </div>
            <div class="col-1"></div>
        </div>
    </section>





    <!--<img src="data:image/jpg;base64, <?php echo base64_encode($productos['imagen']); ?>" style="width: 200px; height:200px;" />-->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Calima Muelles</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Categorias</h4>
                    <ul>
                        <li><a href="#">shock absorbers</a></li>
                        <li><a href="#">brakes</a></li>
                        <li><a href="#">springs</a></li>
                        <li><a href="#">nuts and bolts</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>


    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>
    <script src="js/alertas.js"></script>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>







</body>

</html>
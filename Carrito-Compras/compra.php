<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

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

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/estilos.css">

    <title>Carrito Compras en JavaScript</title>

</head>
<style>

.btn-info {
    color: #fff;
    background-color: gray;
    border-color: gray;
}

.btn-info:hover {
    color: white;
    background-color: black;
    border-color: black;
}
.btn-success {
    color: black;
    background-color: #fff159;
    border-color: #fff159;
}
.btn-success:hover {
    color: white;
    background-color: black;
    border-color: black;
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

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <br/>
    <br/>
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

    <br>

    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h2 class="d-flex justify-content-center mb-3">Realizar Compra</h2>
                    <form id="procesar-pago" action="#" method="post" >
                        <br>
                       

                        <div id="carrito" class="form-group table-responsive" >
                            <table class="table" id="lista-compra" >
                                <thead>
                                    <tr>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Sub Total</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>

                                </thead>
                                <tbody >

                                </tbody>
                                <tr>
                                    <th colspan="4" scope="col" class="text-right">SUB TOTAL :</th>
                                    <th scope="col">
                                        <p id="subtotal"></p>
                                    </th>
                                    <!-- <th scope="col"></th> -->
                                </tr>
                                <tr>
                                    <th colspan="4" scope="col" class="text-right">IVA :</th>
                                    <th scope="col">
                                        <p id="igv"></p>
                                    </th>
                                    <!-- <th scope="col"></th> -->
                                </tr>
                                <tr>
                                    <th colspan="4" scope="col" class="text-right">TOTAL :</th>
                                    <th scope="col">
                                        <input id="total" name="monto" class="font-weight-bold border-0" readonly style="background-color: white;"></input>
                                    </th>
                                    <!-- <th scope="col"></th> -->
                                </tr>

                            </table>
                        </div>

                        <div class="row justify-content-center" id="loaders">
                            <img id="cargando" src="img/lgo.png" width="220">
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-4 mb-2">
                                <a href="index.php" class="btn btn-info btn-block">Seguir comprando</a>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <button href="#" class="btn btn-success btn-block" id="procesar-compra">Realizar compra</button>
                            </div>
                        </div>
                    </form>


                </div>


            </div>

        </div>
    </main>





    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.3.2/dist/email.min.js"></script>

    <script src="js/carrito.js"></script>
    <script src="js/compra.js"></script>

    
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
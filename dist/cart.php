<?php 
require("includes/configuration.inc.php"); 
include($db_conn); 
include($product); 

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Page title -->
    <title>Cart</title>

    <!-- Required meta tags -->
    <?php include($meta); ?>
    
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss); ?>
 
    <!-- Google Fonts CSS -->
    <?php include($googleApisCss); ?>
    
    <!-- Font Awesome Script -->
    <?php include($fontAwesomeScript); ?>
    
    <!-- CUSTOM CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">

</head>

<body>

    <!-- MAIN HEADER NAVBAR -->
    <?php include($navigation); ?>

    <!-- END OF MAIN HEADER NAVBAR -->

    <!-- MAIN SECTION -->
    <div class="container">
        <div class="row mt-5 py-5">
            <div class="col">
                <h1>Shopping Cart</h1>

                <!-- PRODUCT CARD -->

                <div class="row card-body border-top product-cart px-5 px-md-0">
                    <div class="col col-md-2">
                        <img src="assets/img/product-1.png" class="img-fluid card-img-top" alt="Responsive image">

                    </div>
                    <div class="col-md-8 m-auto">
                        <h5>Apple Smart Watch<br>Dark Color</h5>
                    </div>
                    <div class="col-md-1 d-flex m-auto">
                        <h5>$250</h5>
                    </div>
                    <div class="col-md-1 d-flex m-auto">
                        <button type="button" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                        </button>

                    </div>

                </div>

                <!-- END OF PRODUCT CARD -->


                <!-- PRODUCT CARD -->

                <div class="row card-body border-top product-cart px-5 px-md-0">
                    <div class="col col-md-2">
                        <img src="assets/img/product-2.png" class="img-fluid card-img-top" alt="Responsive image">

                    </div>
                    <div class="col-md-8 m-auto">
                        <h5>Apple Smart Watch<br>Dark Color</h5>
                    </div>
                    <div class="col-md-1 d-flex m-auto">
                        <h5>$150</h5>
                    </div>
                    <div class="col-md-1 d-flex m-auto">
                        <button type="button" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                        </button>

                    </div>

                </div>

                <!-- END OF PRODUCT CARD -->

                <!-- PRODUCT CARD -->

                <div class="row card-body border-top product-cart px-5 px-md-0">
                    <div class="col col-md-2">
                        <img src="assets/img/product-3.png" class="img-fluid card-img-top" alt="Responsive image">

                    </div>
                    <div class="col-md-8 m-auto">
                        <h5>Apple Smart Watch<br>Dark Color</h5>
                    </div>
                    <div class="col-md-1 d-flex m-auto">
                        <h5>$350</h5>
                    </div>
                    <div class="col-md-1 d-flex m-auto">
                        <button type="button" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                        </button>

                    </div>

                </div>

                <!-- END OF PRODUCT CARD -->

            </div>

        </div>

        <div class="row mb-5 d-flex align-items-center justify-content-center">
            <button type="button" class="btn btn-outline-secondary mr-3 px-3">Back to shopping</button>
            <button type="button" class="btn btn-primary mr-3 px-3">Purchase</button>

        </div>
    </div>

    <!-- FOOTER -->
    <?php include($footer); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include($bootstrapScripts); ?>
    
    <!-- Custom javaScript -->
    <script src=""></script>

</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- CUSTOM FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9ec45dcb51.js" crossorigin="anonymous"></script>

    <!-- CUSTOM CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <title>Cart</title>
</head>

<body>

    <!-- MAIN HEADER NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top light-blue">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

                <li class="nav-item px-2 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FAQ</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown08">
                        <a class="dropdown-item" href="shipping.php">Shipping</a>
                        <a class="dropdown-item" href="return.php">Return</a>
                        <a class="dropdown-item" href="delivery.php">Delivery</a>
                        <a class="dropdown-item" href="payment.php">Payment</a>
                    </div>
                </li>


                <li class="nav-item px-2">
                    <a class="nav-link" href="cart.php">Shopping Cart
                    <i class="pl-3 fas fa-shopping-cart"></i>
                    </a>
                </li>

            </ul>
        </div>
    </nav>

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

    <footer class="page-footer ">

        <!-- Footer Links -->
        <div class="container text-center py-5 text-md-left ">
            <!-- Grid row -->
            <div class="row ">

                <!-- Grid column -->
                <div class="col-md-4 mx-auto pr-5 ">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis optio autem, quos exercitationem tempore, quo deleniti, perferendis provident ipsa hic excepturi dolorum modi laudantium. Voluptate dignissimos aliquid quam dicta quod!
                    </p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none ">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto ">

                    <!-- Links -->

                    <ul class="list-unstyled ">
                        <li>
                            <a href="#! ">About</a>
                        </li>
                        <li>
                            <a href="#! ">Store</a>
                        </li>
                        <li>
                            <a href="#! ">Blog</a>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none ">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto ">

                    <!-- Links -->

                    <ul class="list-unstyled ">
                        <li>
                            <a href="#! ">Payment</a>
                        </li>
                        <li>
                            <a href="#! ">Delivery</a>
                        </li>
                        <li>
                            <a href="#! ">Returns</a>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none ">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto ">

                    <!-- Links -->

                    <ul class="list-unstyled ">
                        <li>
                            <a href="#! ">Contact</a>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mx-auto ">

                    <!-- Social Links -->
                    <h6>Follow us</h6>
                    <div class="social-media-links ">
                        <div>
                            <a href="# ">
                                <i class=" fab fa-facebook-f "></i>
                            </a>
                        </div>

                        <div>
                            <a href="# ">
                                <i class="fab fa-instagram "></i>
                            </a>
                        </div>

                        <div>
                            <a href="# ">
                                <i class="fab fa-twitter "></i> </a>
                        </div>
                    </div>

                </div>
                <!-- Grid column -->


            </div>
            <!-- Grid row -->


            <!-- Copyright -->
            <div class="py-3 border-top mt-4 ">© 2020 Inertial Media for RIT Croatia
            </div>
            <!-- Copyright -->

        </div>


    </footer>

    <!-- Footer -->

    <!-- END OF FOOTER-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>

</body>

</html>
<!doctype html>
<html lang="en">
    <head>
        <title>PlantATree</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

        <title>PlantATree</title>
        <!-- this is some changes -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!-- Bootstrap core CSS -->
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="CSS/album.css" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg" style="background-color: rgb(96, 114, 62)">
            <div class="container">
                <a class="navbar-brand text-light" href="#">PlantATree</a>
                    <button class="navbar-toggler" style="background-color: slategrey" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample07">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="treeDetails.html">Tree Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="productPage.html">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="aboutPage.html">About</a>
                            </li>
                        </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <div class="btn-group dropleft">
                                    <!-- Shopping Cart -->
                                <div class="d-flex justify-content-around">
                                        <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown"> Shopping Cart<span class="caret"></span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <section class="container content-section">
                                                    <h2 class="section-header">CART</h2>
                                                    <div class="cart-row">
                                                        <div class="row">
                                                            <div class="col-6 col-md-4">
                                                                    <span class="cart-item cart-header cart-column"><h5> ITEM</h5></span>
                                                            </div>
                                                        </div>                                
                                                    </div>
                                                <div class="cart-items">   
                                                </div>
                                                <div class="cart-total">
                                                    <strong class="cart-total-title">Total</strong>
                                                    <span class="cart-total-price">$0</span>
                                                </div>
                                            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
                                            
                                        </section>
                                    </div>
                                </div>
                            </div>  
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
      
        <div style="height: 250px">
            <img src="images/nature.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover">
            <div class="centered text-light"><h1>PlantATree</h1></div>
        </div>
        <div class="container">
          <div>
            <br/>
            <h2 class="text-center">TreeCo</h2>
            <br/>
              <p>TreeCo, A company based in New Zealand that specializes at Tree sales. They sell trees at different stages for any projects from small to large.
                TreeCo developed a web application named PlantATree which enables customers to buy their products from anywhere in New Zealand through the use of their mobile phones.
              </p>
            <br/>
              <p>
                TreeCo values their loyal customers. They are respected and looked after through some special deals that they can claim at the checkout or the shopping cart. 
                Aside from selling different types of Trees. TreeCo also enables the purchase of gardening tools and suggested information that helps the buyer to maintain their Trees and Plants alive.
              </p>
          </div>  
        </div>
        <br/>
    </body>

    <!-- Footer -->
    <footer class="page-footer font-small blue" style="background-color: rgb(96, 114, 62)">
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
          <a href="" class="text-light"> PlantATree</a>
        </div>      
    </footer>
</html>

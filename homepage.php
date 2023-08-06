<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initiak-scale=1.0">
    <meta http-equiv="x-ua-COMPATIBLE" content="ie-edge">
    <title>HomePage</title>

    <!--Bootstra CDN-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--Font Aweosome CDN-->
    <script src="https://kit.fontawesome.com/03efa0b0be.js" crossorigin="anonymous"></script>

    <!--Custom StyleSheet-->
    <link rel="StyleSheet" href="./homepage.css">
    

</head>

<body>
  
    <!--Header-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12 ">
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle my-md-4 my-2 text-color" 
                        data-toggle="dropdown" 
                        aria-haspopup="true"
                        aria-expanded="false">RUPEE</button>

                        
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Rs-Rupee </a>
                        <a href="#" class="dropdown-item">CAD-Canadian Dollar </a>
                        <a href="#" class="dropdown-item">EUR-Euro </a>
                    </div>
                    
                    </div>
                </div>

                <div class="col-md-4 col-12 text-center ">
                    <h2 class="my-md-3 site-title text-color">Wholesaler</h2>
                </div>
                <div class="col-md-4 col-12 text-right text-color ">
                    <p class="my-md-4 header-links"> 
                        <a href="./index.php" class="px-2">SignIn</a>
                        <a href="./Register.php" class="px-1">Create an Account</a>
                        <a href="./logout.php" class="px-3">LogOut</a>
                    </p>
                </div>
              </div>
            </div>
        </div>
        
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Women Ethic <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Women Western</a>
                    </li>
                    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Men
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Top Wears</a>
          <a class="dropdown-item" href="#">Bottom Wears</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Inner Wears</a>
        </div>
      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kids</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Home & Kitchen</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Jewellery & Accessories</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="#">Bags & Footwear</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="#">Electronics</a>
                      </li>
                      </div>
                    </li>
                  </ul>
                  <div class="navbar-nav">
                    <li class="nav-item border rounded-circle mx-2 search-icon">
                      <i class="fas fa-search px-2"></i>
                    </li>
                    <li class="nav-item border rounded-circle mx-2 basket-icon">
                      <i class="fa-sharp fa-solid fa-shopping-basket px-2"></i>
                    </li>
                </div>
                </div>
              </nav>
    
            </div>
    </header>


    <!--Header-->

    <!--Main Section-->
  
      <section class="categories">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 p-0">
              <div class="categories_item">
                <img src="./assets/item10.jpeg" alt="" class="img-fluid">
              </div>
            </div>
          
            <div class="col-lg-6 p-0">
              <div class="categories_item">
                <img src="./assets/item5.jpeg" alt="" class="img-fluid">
              </div>
            </div>
          


  <!--          <div class="col-lg-6">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12 p-0">
                <div class="categories_item">
                <img src="./assets/item6.jpeg" alt="" class="img-fluid">
              </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 p-0">
                <div class="categories_item">
                <img src="./assets/item4.jpeg" alt="" class="img-fluid">
              </div>
                </div>


                
                <div class="col-lg-6 col-md-6 col-12 p-0">
                <div class="categories_item">
                <img src="./assets/item5.jpeg" alt="" class="img-fluid">
              </div>
                </div>

                
                <div class="col-lg-6 col-md-6 col-12 p-0">
                <div class="categories_item">
                <img src="./assets/item7.jpeg" alt="" class="img-fluid">
              </div>
                </div>

              </div>
          

          </div> -->
        </div>
        </div>
        </section>

        <section class="product spad">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <div class="section-title">
                  <h4>New Product</h4>
                </div>
              </div>
            </div>
            <div class="row proerty_gallery">
              <div class="com-lg-3 col-md-4 col-sm-6">
                <div class="product_item">
                  <div class="product_item_pic">
                  <div class="label new text-center">New</div>
                  <div class="text-center">
                    <img src="./assets/prd2.jpg" alt="">
                    </div>
                    <!--<ul class="product_hover">
                      <li><a href="#"><span class="arrow_axpand"></span></a></li>
                      <li><a href="#"><span class="arrow_axpand"></span></a></li>
                      <li><a href="#"><span class="arrow_axpand"></span></a></li>
                    </ul>-->
                  </div>
                  <div class="product_item_text text-center">
                    <h6><a href="#">Printed Men's White T-shirt</a></h6>
                    <div class="rating text-center">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="product_price text-center">Rs. 590</div>
                  
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        

<section id="feature">
  <div class="fe-box">
    <img src="./" alt="">
  </div>
</section>

    <!--Main Section-->
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <!--<script src="./main.js"></script>-->
    
 
</body>
</html>
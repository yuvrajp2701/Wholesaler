<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Wholesaler | Homepage</title>

    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div class="header">
      <div class="container">
        <div class="navbar">
          
          <div class="logo">
            <a href="index.php">
            <h1>Wholesaler </h1>
            </a>
          </div>
          <nav>
            <ul id="MenuItems">
              <li><a href="homepagee.php">Home</a></li>
              <li><a href="products.php">Products</a></li>
              <li><a href="index.php">SignIn</a></li>
              <li><a href="register.php">Register</a></li>
              <li><a href="./assets/index.html">Contact Us</a></li>
              <li><a href="logout.php">LogOut</a></li>
            
            </ul>
          </nav>
          <a href="cart.php"
            ><img src="images/cart.png" alt="" width="30px" height="30px"
          /></a>
        
         <!-- <img
            src="images/menu.png" width="125px"
            alt=""
            class="menu-icon"
            id="menu-icon"
            onclick="menutoggle()"
          />
          -->
          
           <div id="menuBtn">
              <img src="images/menu.png" id="menu">
            </div>

        </div>

  <div id="sideNav">
      <nav>
            <ul id="MenuItems">
            <li><a href="homepagee.php">Home</a></li>
              <li><a href="products.php">Products</a></li>
              <li><a href="index.php">SignIn</a></li>
              <li><a href="register.php">Register</a></li>
              <li><a href="./assets/index.html">Contact Us</a></li>
              <li><a href="logout.php">LogOut</a></li>
            </ul>
          </nav>
      </div>

        <div class="row">
          <div class="col-2">
            <h1>
              Give yourself<br />
              a New Style in this Summer!
            </h1>
          
            <a href="products.php" class="btn">Explore Now &#8594;</a>
          </div>
         
          <div class="col-2">
            <img id="image" src="images/image-1.jpg" alt="" onclick="openImg()"/>
          </div>
        </div>
      </div>
      <a href="product-details.php">
            <img src="./assets/item7.jpeg" alt=""
          /></a>
    
    </div>
    <!----- Featurd Categories--------->
    
    <div class="categories">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <a href="./prd1.php">
            <img src="images/category-1.jpg" alt="" />
            </a>
          </div>
          <div class="col-3">
          <a href="./prd2.php">  <img src="images/category-2.jpg" alt="" />
          </a>

          </div>
          <div class="col-3">
            <a href="./prd3.php"><img src="images/category-3.jpg" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
    <!----- Featurd Products--------->
    <div class="small-container">
      <h2 class="title">Featured Women Products</h2>
      <div class="row">
        <div class="col-4">
          <a href="product-details.php">
            <img src="images/product-1.jpg" alt=""
          /></a>
          <h4>Big Purse for Women</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹1199</p>
        </div>

        <div class="col-4">
          <img src="images/product-2.jpg" alt="" />
          <h4>Hand Purse for Girls</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹249</p>
        </div>

        <div class="col-4">
          <img src="images/product-3.jpg" alt="" />
          <h4>Blue Stilletor TRENDING</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>₹999</p>
        </div>
        <div class="col-4">
          <img src="images/product-4.jpg" alt="" />
          <h4>SUNGLASS For Women </h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹500</p>
        </div>
      </div>
      <h2 class="title">Latest Products</h2>
      <div class="row">
        <div class="col-4">
          <img src="images/product-5.jpg" alt="" />
          <h4>Brown Loafers</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹1500</p>
        </div>

        <div class="col-4">
          <img src="images/product-6.jpg" alt="" />
          <h4>Fashion Trends</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹500</p>
        </div>

        <div class="col-4">
          <img src="images/product-7.jpg" alt="" />
          <h4>Head Phone</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>₹3000</p>
        </div>
        <div class="col-4">
          <img src="images/product-8.jpg" alt="" />
          <h4>Reybon SunGlass</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹999</p>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <img src="images/product-9.jpg" alt="" />
          <h4>Nike Sneakers</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹5999</p>
        </div>

        <div class="col-4">
          <img src="images/product-10.jpg" alt="" />
          <h4>Digital Watch</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹8000</p>
        </div>

        <div class="col-4">
          <img src="images/product-11.jpg" alt="" />
          <h4>Travelling Bag</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>₹1500</p>
        </div>
        <div class="col-4">
          <img src="images/product-12.jpg" alt="" />
          <h4>Gaming Remote</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹500</p>
        </div>
      </div>
    </div>

    <!-------- Offer --------->
    <div class="offer">
      <div class="small-container">
        <div class="row">
          <div class="col-2">
            <a href="./royalproducts.php">
            <img src="images/royal.jpg" class="offer-img" alt="" />
            </a>
          </div>
          <div class="col-2">
            <p>Exclusively available on Wholesaler</p>
            <h1>"BE Royal" Fashion</h1>
            <h2>BEST quality, LOW price...!</h2>
            <a href="./royalproducts.php" class="btn">Buy Now &#8594;</a>
          </div>
        </div>
      </div>
    </div>

    <!-- part 1 ends here -->

    <!-- part 2 to be started -->

    <!------ Testimonial  ------>
    <div class="testimonial">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <i class="fa fa-quote-left"></i>

            <p>
            The company itself is a very successful company. She, to be
              which, from following the flight of the present, pleases pleasures with hatred
              of things
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="images/user-1.png" alt="" />
            <h3>ABC (person)</h3>
          </div>

          <div class="col-3">
            <i class="fa fa-quote-left"></i>

            <p> The company itself is a very successful company. She, to be
              which, from following the flight of the present, pleases pleasures with hatred
              of things
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="images/user-2.png" alt="" />
            <h3>MNO (OWNER)</h3>
          </div>

          <div class="col-3">
            <i class="fa fa-quote-left"></i>

            <p> The company itself is a very successful company. She, to be
              which, from following the flight of the present, pleases pleasures with hatred
              of things
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="images/user-3.png" alt="" />
            <h3>XYZ (Person)</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- Brands -->

    <div class="brands">
      <div class="small-container">
        <div class="row">
          <div class="col-5">
            <img src="images/logo-godrej.png" alt="" />
          </div>
          <div class="col-5">
            <img src="images/logo-oppo.png" alt="" />
          </div>
          <div class="col-5">
            <img src="images/logo-paypal.png" alt="" />
          </div>
          <div class="col-5">
            <img src="images/logo-philips.png" alt="" />
          </div>
          <div class="col-5">
            <img src="images/logo-coca-cola.png" alt="" />
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>
              Download App for Android <br />
              and ios mobile phone
            </p>
            <div class="app-logo">
              <img src="images/play-store.png" alt="" />
              <img src="images/app-store.png" alt="" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="./images/logo.png" alt="" />
            <p>
              BEST QUALITY <br />LOW PRICE
            
            </p>
          </div>
          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
            </ul>
          </div>

          <div class="footer-col-4">
            <h3>Follow us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>YouTube</li>
            </ul>
          </div>
        </div>
        <hr />
        <p class="copyright">Copyright 2023 - XYZ </p>
      </div>
    </div>
    <!-- JS for Toggle menu -->
    <script type="text/javascript" src="scriptt.js"></script>
   <!--
      <script>
      var MenuItems = document.getElementById("MenuItems");

      MenuItems.style.maxHeight = "0px";

      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>
     -->
  </body>
</html>

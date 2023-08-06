<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wholesaler |HOMEPAGE</title>
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
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <a href="homepagee.php">
          <h1>Wholesaler </h1></a>
        </div>
        <nav>
          <ul id="MenuItems">
          <li><a href="homepagee.php">Home</a></li>
              <li><a href="products.php">Products</a></li>
              <li><a href="index.php">SignIn</a></li>
              <li><a href="register.php">Register</a></li>
              <li><a href="./assets/index.html">Contact Us</a></li>
              <li><a href="logout.php">LogOut</a></li>
  <!-- TODo: 22:20 -->
          </ul>
        </nav>
        <a href="#"
          ><img src="./images/cart.png" alt="" width="30px" height="30px"
        /></a>
        <div id="menuBtn">
              <img src="images/menu.png" id="menu">
            </div>

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
    </div>

    <!-- Single Products Detail -->
    <div class="small-container single-product">
      <div class="row">
        <div class="col-2">
          <img src="images/category-3.jpg" width="100%" id="ProductImg" />

          </div>
        <div class="col-2">
          <p>Home / COMBO</p>
          <h2>Fashion Trends</h2>
          <h4>₹14999</h4>
          <input type="number" value="1" />
          <h3>Combo pack for WOMEN</h3>
          <a href="./cart.php" class="btn">Add to Cart</a>
          <a href="./order.php" class="btn">Cash on Delivary</a>
          <h3>Product Details<i class="fa fa-indent"></i></h3>
          <br />
          <p>ZARA Faux Leather Women Shoes, Shoulder Hobo Sweatshirt With Blue Jeans..!
          </p>
        </div>
      </div>
    </div>

    <!-- Title -->
    <div class="small-container">
      <div class="row row-2">
        <h2>Related Products</h2>
        <p>View More</p>
      </div>
    </div>

    <!-- Similar Products -->

    <div class="small-container">
      <div class="row">
        <div class="col-4">
          <img src="images/product-9.jpg" alt="" />
          <h4>Fashion Trends</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$50.00</p>
        </div>

        <div class="col-4">
          <img src="images/product-10.jpg" alt="" />
          <h4>Fashion Trends</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$50.00</p>
        </div>

        <div class="col-4">
          <img src="images/product-11.jpg" alt="" />
          <h4>Fashion Trends</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>$50.00</p>
        </div>
        <div class="col-4">
          <img src="images/product-12.jpg" alt="" />
          <h4>Fashion Trends</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$50.00</p>
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
            <img src="images/logo.png" alt="" />
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
        <p class="copyright">Copyright 2023 - XYZ</p>
      </div>
    </div>
    <!-- JS for Toggle menu
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
    </script>-->


    <!-- JS for Toggle menu -->
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

    <!-- js for product gallery -->
    <script>
      var ProductImg = document.getElementById("ProductImg");
      var smallImg = document.getElementsByClassName("small-img");
      smallImg[0].onclick = function () {
        ProductImg.src = smallImg[0].src;
      };
      smallImg[1].onclick = function () {
        ProductImg.src = smallImg[1].src;
      };
      smallImg[2].onclick = function () {
        ProductImg.src = smallImg[2].src;
      };
      smallImg[3].onclick = function () {
        ProductImg.src = smallImg[3].src;
      };
    </script>
    <script type="text/javascript" src="scriptt.js"></script>
</body>
</html>

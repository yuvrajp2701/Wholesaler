<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Cart - Wholesaler</title>
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
          <a href="./homepagee.php">
          <h1>Wholesaler </h1>
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
        <a href="cart.php"
          ><img src="images/cart.png" alt="" width="30px" height="30px"
        /></a>
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
              <li><a href="">Contact Us</a></li>
              <li><a href="logout.php">LogOut</a></li>
            </ul>
          </nav>
      </div>

      </div>
    

    <!-- Cart Items Details -->
    <div class="small-container cart-page">
      <table>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/buy-1.jpg" alt="" />
              <div>
                <p>Fashion Trend </p>
                <small>Price: ₹1500</small>
                <br />
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="nunber" value="1" /></td>
          <td>₹1500</td>
        </tr>

        <tr>
          <td>
            <div class="cart-info">
              <img src="images/buy-2.jpg" alt="" />
              <div>
                <p>Brown Top for Women </p>
                <small>Price: ₹699</small>
                <br />
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="nunber" value="1" /></td>
          <td>₹699</td>
        </tr>

        <tr>
          <td>
            <div class="cart-info">
              <img src="images/buy-3.jpg" alt="" />
              <div>
                <p>Royal Combo pack</p>
                <small>Price: ₹5999</small>
                <br />
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="nunber" value="1" /></td>
          <td>₹5999</td>
        </tr>
      </table>

      <div class="total-price">
        <table>
          <tr>
            <td>Subtotal</td>
            <td>₹8198</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>₹150</td>
          </tr>
          <tr>
            <td>Total</td>
            <td>₹8348</td>
          </tr>
        </table>
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

    <!-- JS for Toggle menu -->
    <script type="text/javascript" src="scriptt.js"></script>
  </body>
</html>

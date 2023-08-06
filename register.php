<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Wholesaler | Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="./regstyle.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-box">
  <h2>Registration Form</h2>

  
  <form action="./conn.php" method="post">
    <div class="user-box">
    
      <input type="text" name="name">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password">
      <label>Password</label>
    </div>
    
    <div class="user-box">
      <input type="password" name="rpassword">
      <label>Re-Type Password</label>
    </div>
    
    <div class="user-box">
      <input type="text" name="phone">
      <label>Phone Number</label>
    </div>
    
    <div class="user-box">
      <input type="email" name="email">
      <label>Email id</label>
    </div>
        <button type="submit" class="btn btn-outline-success btn-rounded btn-lg"  name="go">
          SUBMIT
        </button>
    
        <a  href="./index.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Already Have Account?
    </a>
   
  </form>
  
</div>
<!-- partial -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>


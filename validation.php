<?php
session_start();
header('localhost:index.php');
$conn = mysqli_connect('localhost','root');
if($conn){
    echo"connection successful";
}
else {
    echo"no connection";
}


mysqli_select_db($conn,'project');

$username = $_POST['username'];
$pass = $_POST['password'];

$q = " select * from signin where name = '$username' && password = '$pass' ";

$result = mysqli_query($conn, $q);
$row=mysqli_fetch_array($result);

if($row["usertype"]=="user")
{
   header("location:homepagee.php");
}


elseif($row["usertype"]=="admin")
{
    header("location:adminn/AdminHp.php");
}

else{
    echo"username or password incorrect";
}
/*$num = mysqli_num_rows($result);
if ($num == 1) {
   $_SESSION['username'] = $username;
   header('location:admin/homepage.php');
}
else {
    header('location:index.php');
}*/

?>
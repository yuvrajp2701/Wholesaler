<?php
session_start();
$conn = mysqli_connect('localhost','root');
if($conn){
    echo"connection successful";
}
else {
    echo"no connection";
}


mysqli_select_db($conn,'project');



if(isset($_POST['go']))
{
    $username = $_POST['name'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
    $email = $_POST['email'];

    if($password == $rpassword)
    {
        

    $user_query = "INSERT INTO signin (name,phone,email,password) VALUES ('$username','$phone','$email','$password')";
    $user_query_run = mysqli_query($conn,$user_query);

    if($user_query_run)
    {
        $_SESSION['status'] = "User added Successfully";
        header("location: homepagee.php");
    }
    else {
        $_SESSION['status'] = "User not added";
        header("location: register.php");
    }

    
    }
}







/*session_start();
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
$pno = $_POST['pno'];
$email = $_POST['email'];

$q = " select * from signin where name = '$username' && password = '$pass' ";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);
if ($num == 1) {
    echo"Dublicate data...!";
}
else {
    $qy = "insert into signin(name , password, phone, email) values ('$username' , '$pass' , '$pno' , '$email')";
    mysqli_query($conn, $qy);
    header('location:homepage.php');
}
*/
?>
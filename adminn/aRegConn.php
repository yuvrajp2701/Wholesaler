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

if(isset($_POST['product_update']))
{
    $product_id = $_POST['product_id'];
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $small_description = $_POST['small_description'];   
    $long_description = $_POST['long_description'];
    $price = $_POST['price'];
    $offerprice = $_POST['offerprice'];
    $tax = $_POST['tax'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'] == true ? '1':'0';
    
    $image = $_FILES['image']['name'];
    $old_image = $_FILES['old_image'];

    if($image != '')
    {
        $update_filename = $_FILES['image'] ['name'];

        $allowed_extentions = array('png','jpg','jpeg','JPG');
        $file_extention = pathinfo($image, PATHINFO_EXTENSION);
        $filename = $image.'.'.$file_extention;     
        if(in_array($file_extention,$allowed_extentions))
        {

            $update_filename = $old_image;               
            $query = "UPDATE products SET  name='$name', small_description ='$small_description', long_description ='$long_description' , price='$price',
             offerprice='$offerprice', tax='$tax', quantity='$quantity', image='$filename' WHERE id='$product_id' ";
             $_SESSION['status'] = "UPDATED>>>>>>>";
        }
        else {
            $_SESSION['status'] = "you are allowed with only jpg, png, jpeg image";
            header('location: product.php');
            exit(0);
        }
    }
}
else {
    $update_filename = $old_image;
}


if(isset($_POST['product_save']));
{
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $small_description = $_POST['small_description'];   
    $long_description = $_POST['long_description'];
    $price = $_POST['price'];
    $offerprice = $_POST['offerprice'];
    $tax = $_POST['tax'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'] == true ? '1':'0';
    $image = $_FILES['image']['name'];


    $allowed_extentions = array('png','jpg','jpeg','JPG');
    $file_extention = pathinfo($image, PATHINFO_EXTENSION);

    $filename = time().''.$file_extention;


    if(in_array($file_extention,$allowed_extentions))
    {
        
        $query = "INSERT INTO products (category_id, name, small_description, long_description, price, offerprice, tax, quantity, image, status)
         VALUES ('$category_id','$name','$small_description','$long_description','$price','$offerprice','$tax','$quantity','$filename','$status') ";

         $query_run = mysqli_query($conn, $query);
         if($query_run)
         {
            move_uploaded_file($image = $_FILES['image']['tmp_name'], 'dist/img'.$filename);
            $_SESSION['status'] = "product added Successfully";        
            header("Location:product.php");
            exit(0);
         }
         else
         {
           
            $_SESSION['status'] = "product something went wrong";        
            header("Location:product.php");
            exit(0);

         }

    }
}


if(isset($_POST['category_update']))
{
    $cate_id = $_POST['cate_id'];
    $name = $_POST['name'];
    $desctiption = $_POST['desctiption'];
    $trending = $_POST['trending'] == true ? '1':'0';
    $status = $_POST['status'] == true ? '1':'0';

        $query = "UPDATE categories SET  name='$name',description='$description',trending='$trending',status='$status' WHERE id='$cate_id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            $_SESSION['status'] = "Category Updated Successfully";        
            header("Location:category.php");
    
        }
        else {
            # code...
            $_SESSION['status'] = "Category Updating Failed";        
            header("Location:category.php");
            
        }
}
else {
    echo"AEEEEEEEEEEEEEEEEEEEEEEEEE";
}

if(isset($_POST['category_save']))
{
    $name = $_POST['name'];
    $description = $_POST['description'];
    $trending = $_POST['trending'] == true ? '1' : '0';
    $status = $_POST['status'] == true ? '1' : '0';

    $category_query = "INSERT INTO categories (name,description,trending,status) VALUES ('$name','$description','$trending','$status')";
    $category_query_run = mysqli_query($conn, $category_query);

    if($category_query_run)
    {
        $_SESSION['status'] = "Category Inserted Successfully";        
        header("Location:category.php");

    }
    else {
        # code...
        $_SESSION['status'] = "Category Insertion Failed";        
       // header("Location:adminhp.php");
        
    }
}

else{
    echo"marja bhai NAHI HUAA...!";
}






if(isset($_POST['check_Emailbtn']))
{
    $email = $_POST['email'];

    $checkemail = "SELECT email FROM signin where email='$email'";
    $checkemail_run = mysqli_query($conn, $checkemail);

        if(mysqli_num_rows($checkemail_run) > 0)
        {
            echo"Email ID already TAKEN";        
        }
        else {
   echo"Available Email ID";
        }
}
else{
    echo"marja Bhai NAHI HUAA...!";
}




if(isset($_POST['addUser']))
{

    $username = $_POST['name'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $rpassword = $_POST['rpassword'];


    if($password == $rpassword)
    {
        $checkemail = "SELECT email FROM signin where email='$email' limit 1";
        $checkemail_run = mysqli_query($conn, $checkemail);

            if(mysqli_num_rows($checkemail_run) > 0)
            {
                //taken already exist
                $_SESSION['status'] = "Email id is already taken";
                header("location: registered.php");
            }
            else {
                //available

            

            $user_query = "INSERT INTO signin (name,phone,email,password) VALUES ('$username','$phone','$email','$password')";
            $user_query_run = mysqli_query($conn,$user_query);

            if($user_query_run)
            {
                $_SESSION['status'] = "User added Successfully";
                header("location: registered.php");
            }
            else {
                $_SESSION['status'] = "User not added";
                header("location: registered.php");
            }
        }
    }
    else {
             $_SESSION['status'] = "Password doesn't match";
                header("location: registered.php");
    }
}

if(isset($_POST['updateuser']))
{
    $id = $_POST['id'];
    $username = $_POST['name'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

        $query = "UPDATE signin SET name='$username', password='$password', phone='$phone', email='$email' WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            $_SESSION['status'] = "User Updated Successfully";
            header("location: registered.php");
        }
        else
        {
            $_SESSION['status'] = "User Updated Failed";
            header("location: registered.php");
        }
}

if(isset($_POST['DeleteUserbtn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM signin WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
        {
            $_SESSION['status'] = "User Deleted Successfully";
            header("location: registered.php");
        }
        else
        {
            $_SESSION['status'] = "User Deleting Failed";
            header("location: registered.php");
        }

}

?>
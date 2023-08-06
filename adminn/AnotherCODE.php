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


if(isset($_POST['cate_delete_btn']))
{
    $cate_id = $_POST['cate_delete_id'];
    $query = "DELETE FROM categories where id='$cate_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
        {
            $_SESSION['status'] = "Category Deleted Successfully";        
            header("Location:category.php");

        }
        else {
            # code...
            $_SESSION['status'] = "Category Delting Failed";        
            header("Location:category.php");
            
        }

       }
else {
    # code... 
    echo"AEEEEEEEEEEEEEEEEEEEEEEEEE";
}


if(isset($_POST['prod_delete_btn']))
{
    $prod_id = $_POST['prod_delete_id'];
    $query = "DELETE FROM products where id='$prod_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
        {
            $_SESSION['status'] = "Category Deleted Successfully";        
            header("Location:product.php");

        }
        else {
            # code...
            $_SESSION['status'] = "Category Delting Failed";        
            header("Location:product.php");
            
        }

       }
else {
    # code... 
    echo"AEEEEEEEEEEEEEEEEEEEEEEEEE";
}

?>
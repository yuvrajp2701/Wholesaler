<?php
session_start();
include('./header.php');
include('./topbar.php');
include('./sidebar.php');

?>

<div class="content-wrapper">
<?php
 $conn = mysqli_connect('localhost','root');
 mysqli_select_db($conn,'project');

if(isset($_GET['prod_id']))
{
    $product_id = $_GET['prod_id'];
    $query = "SELECT * FROM products where id='$product_id' ";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        $productitem = mysqli_fetch_array($query_run);
        ?>

<div class="content mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php include('message.php') ?>
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Products - Edit
                            <a href="product.php" class="btn btn-danger float-right" >Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="./aRegConn.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="product_id" value="<?= $productitem['id'] ?>">
                   
                        <div class="row">
                            <div class="col-md-12">
                                <label >Select Category</label>
                                <?php
                                    $conn = mysqli_connect('localhost','root');
                                    mysqli_select_db($conn,'project');
                                    $query = "SELECT * FROM categories";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                      
                                            ?>
                                            <select name="category_id" required class="form-control">
                                                <option value=""> Select Category</option>
                                            <?php foreach($query_run as $item) { ?>
                                                 <option value="<?= $item['id'] ?>" <?= $productitem['category_id'] == $item['id'] ? 'selected':'' ?> >
                                                 <?= $item['name'] ?> </option>
                                                <?php } ?>
                                            
                                            </select>
                                            
                                            <?php
                                        
                                    }
                                ?>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label >Product name</label>
                                    <input type="text" name="name" class="form-control" value="<?=$productitem['name']?>" placeholder="Enter Product">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Small Description</label>
                                    <textarea name="small_description" class="form-control" required rows="3" placeholder="Enter small Description"><?=$productitem['small_description']?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Long Description</label>
                                    <textarea name="long_description" class="form-control" required rows="3" placeholder="Enter long Description"> <?=$productitem['long_description']?></textarea>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label >Price</label>
                                    <input type="text" name="price" class="form-control"value="<?=$productitem['price']?>" placeholder="Enter Price">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label >Offer price</label>
                                    <input type="text" name="offerprice" class="form-control" value="<?=$productitem['offerprice']?>" placeholder="Enter offer price">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label >Tax</label>
                                    <input type="text" name="tax" class="form-control" value="<?=$productitem['tax']?>" placeholder="Enter TAX">
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="text" name="quantity" class="form-control" value="<?=$productitem['quantity']?>" placeholder="Enter Quantity">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label >Status (Check = show / Hide)</label> <br>
                                    <input type="checkbox" name="status"<?=$productitem['status'] == '1' ? 'chacked':'' ?>> Show / Hide
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label >Upload image</label>
                                    <input type="file" name="image" class="form-control" required>
                                    <input type="hidden" name="old_image" value="<?= $productitem['id'] ?>">
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                
                                    <button type="submit" name="product_update" class="btn btn-primary">Update </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
}
else {
    echo"no such product found";
}
}
?>


<?php include('./Fscript.php'); ?>
<?php include('./footer.php'); ?>

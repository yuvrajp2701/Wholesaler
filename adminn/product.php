<?php
session_start();
include('./header.php');
include('./topbar.php');
include('./sidebar.php');

?>

<div class="content-wrapper">

<div class="content mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php include('message.php') ?>
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Gift Products
                            <a href="productAdd.php" class="btn btn-primary float-right" >Add</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $conn = mysqli_connect('localhost','root');
                                mysqli_select_db($conn,'project');

                                    $query = "SELECT * FROM products";
                                    $query_run = mysqli_query($conn, $query);
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                            foreach($query_run as $prod_item)
                                            {
                                                
                                            
                                            ?>
                                                <tr>
                                                    <td> <?=$prod_item['id']; ?> </td>
                                                    <td> <?=$prod_item['name']; ?> </td>
                                                    <td> <?=$prod_item['price']; ?> </td>
                                                        <td>
                                                    <input type="checkbox" <?=$prod_item['status'] == '1' ? 'checked':'' ?> readonly />

                                                         </td>
                                                    <td> <?=$prod_item['created_at']; ?> </td>
                                                    <td>
                                                        <a href="productEdit.php?prod_id=<?=$prod_item['id']  ?>" class="btn btn-success">Edit</a>
                                                    </td>
                                                    
                                                    <td>
                                                    <form action="./AnotherCODE.php" method="post">
                                                            <input type="hidden" name="prod_delete_id" value="<?=$prod_item['id']; ?>">
                                                            <button type="submit" name="prod_delete_btn" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                    }
                                    else
                                    {
                                       // echo"no record found";
                                       ?>
                                            <tr>
                                                <td colspan="6">No Record found</td>
                                            </tr>
                                       <?php
                                    }
                                ?>
                            </tbody>
                        </table>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="categorymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gift Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

            <form action="./aRegConn.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="modal-body">
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" rows="3"required></textarea>
                            
                        </div>
                        <div class="modal-body">
                        <div class="form-group">
                            <label for="">Trending</label>
                            <input type="checkbox" name="trending" >Trending
                        </div>
                        <div class="modal-body">
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" >Status
                        </div>
                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="category_save" class="btn btn-primary">Save</button>
                    </div>
            </form>
    </div>
  </div>
</div>

</div>

</div>

<?php include('./Fscript.php'); ?>
<?php include('./footer.php'); ?>

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
                            Edit Gift Category
                            <a href="./category.php" class="btn btn-danger float-right" >Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="./AnotherCODE.php" method="post">
                        <?php
                            if(isset($_GET['id']))
                            {

                                $conn = mysqli_connect('localhost','root');
                                mysqli_select_db($conn,'project');
                                $cate_id = $_GET['id'];
                                $query = "SELECT * FROM categories  WHERE id='$cate_id' ";
                                $query_run = mysqli_query($conn, $query);

                                foreach($query_run as $item) : 

                                ?>
                                    <input type="hidden" name="cate_id" value="<?= $item['id']; ?>">
                                    <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Category Name</label>
                                        <input type="text" name="name" value="<?= $item['name']; ?>" class="form-control" required>
                                    </div>
                                    <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="description" class="form-control" rows="3"required ><?= $item['description']; ?> </textarea>
                                        
                                    </div>
                                    <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Trending</label>
                                        <input type="checkbox" name="trending" <?= $item['trending'] == "1" ? 'checked':''; ?> />Trending
                                    </div>
                                    <div class="modal-body">
                                    <div class="form-group">
                                        <label for="" >Status</label>
                                        <input type="checkbox" name="status" <?= $item['status'] == "1" ? 'checked':''; ?> />Status
                                    </div>
                                    

                                </div>
                                <div class="modal-footer">
                                    <a href="./category.php" class="btn btn-secondary">Back</a>
                                    <button type="submit" name="category_update" class="btn btn-primary">Update</button>
                                </div>     
                                <?php
                              endforeach;
                            }
                            else {
                                echo"no id found";
                            }
                                    ?>
                               
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


                    <?php include('./Fscript.php'); ?>

                    <?php include('./footer.php'); ?>

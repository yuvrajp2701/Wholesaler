<?php

session_start();
include('./header.php');
include('./topbar.php');
include('./sidebar.php');

?>
                    <?php
                     $host = "localhost";
                     $username = "root";
                     $password = "";
                     $database = "project";

                     $conn = mysqli_connect("$host","$username","$password","$database");
                        $query = "SELECT * FROM signin";
                        $query_run = mysqli_query($conn, $query);
                    ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit-Registered Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->   
    <section class="content">
<div class="container">
    <div class="row">
        <div class="col-md-12">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit-Registered Users
                </h3>
                <a href="registered.php" class="btn btn-danger btn-sm float-right">Back</a>
              </div>
              <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            <form action="./aRegConn.php" method="post">
                                    <div class="modal-body">
                                <?php
                                if(isset($_GET['id']))
                                {
                                    $id = $_GET['id'];
                                    $query = "SELECT * FROM signin WHERE id='$id' limit 1";
                                    $query_run = mysqli_query($conn,$query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                     <div class="form-group">
                                                <label for="">Name</label>
                                                <input type="text"  name="name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Phone Number</label>
                                                <input type="text" name="phone" value="<?php echo $row['phone'] ?>" class="form-control" placeholder="phone number">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email Id</label>
                                                <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="password" name="password" value="<?php echo $row['password'] ?> "class="form-control" placeholder="Password">
                                            </div>
                                                <?php
                                            }

                                        }
                                        else {
                                            echo"<h4> No  record found </h4>";
                                        }
                                }
                                    


                                ?>
                            
                                           
                                    </div>
                                    <div class="modal-footer">
                                       
                                        <button type="submit" name="updateuser" class="btn btn-primary">UPDATE</button>
                                    </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>


        <?php include('./Fscript.php');?>
                

        <?php include('./footer.php');?>
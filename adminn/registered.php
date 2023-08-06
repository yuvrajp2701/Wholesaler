<?php

session_start();
include('./header.php');
include('./topbar.php');
include('./sidebar.php');
?>


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
<!-- Modal -->
<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

    <form action="./aRegConn.php" method="post">
      <div class="modal-body">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text"  name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="">Phone Number</label>
                <input type="text" name="phone" class="form-control" placeholder="phone number">
            </div>
            <div class="form-group">
                <label for="">Email Id</label>
                <span class="email_error text-danger ml-2"></span>
                <input type="email" name="email" class="form-control email_id" placeholder="Email">
            </div>
            <div class="row">
              <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Re-Type Password</label>
                    <input type="password" name="rpassword" class="form-control" placeholder="Re-Type Password">
                </div>
              </div>
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="addUser" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--Delete User-->
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="./aRegConn.php" method="post">
      <div class="modal-body">
      <input type="hidden" name="delete_id" class="delete_user_id">
      <p>Are you sure. You want to delete this data?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="DeleteUserbtn" class="btn btn-primary">Yes, Delete...!</button>
      </div>
      </form>
    </div>
  </div>
</div>

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
              <li class="breadcrumb-item active">Registered Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<div class="container">
    <div class="row">
        <div class="col-md-12">
            
        <?php

        if(isset($_SESSION['status']))
        {
          echo"<h4>" .$_SESSION['status']. "</h4>";
          unset($_SESSION['status']);
        }


        ?>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registered Users
                </h3>
                <a href="#" data-bs-toggle="modal" data-bs-target="#AddUserModal" class="btn btn-primary btn-sm float-right">Add User</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email Id</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                     $host = "localhost";
                     $username = "root";
                     $password = "";
                     $database = "project";

                     $conn = mysqli_connect("$host","$username","$password","$database");
                        $query = "SELECT * FROM signin";
                        $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run) > 0){
                              foreach($query_run as $row)
                              {
                        
                                ?>
                                    <tr>
                   <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td>
                      <a href="registered-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm" >Edit</a>
                      <button type="button" value="<?php echo $row['id']; ?>" class="btn btn-danger btn-sm deletebtn">Delete</button>
                    </td>
                  </tr>
                                <?php
                              }
                        }
                        else{
                          ?>
                            <tr>
                              <td> No Record Found.</td>
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


<?php include('./Fscript.php');?>
<script>

$(document).ready(function() {

  $('.email_id').keyup(function(e) {
    var email = $('.email_id').val();
    //console.log(email);
    
    $.ajax({
      type: "POST",
      url: "aRegConn.php",
      data: {
        'check_Emailbtn' :1,
        'email' :email,
      },
      success: function (response){
         // console.log(response);
         $('.email_error').text(response);
      }
    })
  });
  
});

</script>
                        <script>
                            $(document).ready(function() {
                                $('.deletebtn').click(function (e) {
                                    e.preventDefault();
                                    

                                    var id = $(this).val();
                                    //console.log(id);
                                    $('.delete_user_id').val(id);
                                    $('#DeleteModal').modal('show');

                                });
                            });

                        </script>
<?php include('./footer.php');?>
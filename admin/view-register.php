<?php
    include('authentication.php');
    include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
    </ol>
    <div class="row">

    <div class="col-md-12">
        
        <?php include('message.php'); ?>

        <div class="card">
            <div class="card-header">
                <a href="register-admin.php" class="btn btn-primary float-end">Add user</a>
                <h4>Registered Users</h4>
            </div>
            <div class="card-body">
                 
                <div class="table-responsive">
                    <table id="myDataTable" class="table table-bordered table-stripe">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM users ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $row['id'];?></td>
                                        <td><?= $row['fname'];?></td>
                                        <td><?= $row['lname'];?></td>
                                        <td><?= $row['email'];?></td>
                                        <td>
                                            <?php
                                            if($row['role_as'] == '1'){
                                                echo 'Admin';
                                            }
                                            elseif($row['role_as'] == '0'){
                                                echo 'User';
                                            }
                                            ?>
                                        </td>
                                        <td><a href="user-edit.php?id=<?=$row['id'];?>" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <form action="code.php" method="POST" class="d-inline">
                                                <button type="submit" name="user-delete" value="<?= $row['id'];?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                            ?>
                                <tr>
                                    <td colspan="5">No record found</td>
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

<?php
    include('includes/footer.php');
    include('includes/scripts.php');
?>
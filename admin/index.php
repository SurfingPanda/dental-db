<?php
    include('authentication.php');
    include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Total Users
                    <?php
                        $dash_users_query = "SELECT * FROM users";
                        $dash_users_query_run = mysqli_query($con, $dash_users_query);

                        if($user_total = mysqli_num_rows($dash_users_query_run))
                        {
                            echo '<h4 class="mb-0">' .$user_total.' </h4>';
                        }
                        else
                        {
                            echo '<h4 class="mb-0"> No data found. </h4>';
                        }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="view-register.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Total Patients
                    <h4 class="mb-0">4</h4>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include('includes/footer.php');
    include('includes/scripts.php');
?>
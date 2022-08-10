<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <?php include('message.php') ?>

                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="logincode.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" placeholder="Enter email address" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" placeholder="Enter password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="login-btn" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('includes/footer.php');
?>
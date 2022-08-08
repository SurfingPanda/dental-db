<?php
session_start();
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
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="registercode.php" method="post">
                            <div class="form-group mb-3">
                                <label for="">First name</label>
                                <input type="text" name="fname" placeholder="Enter first name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Last name</label>
                                <input type="text" name="lname" placeholder="Enter last name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" placeholder="Enter email address" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" placeholder="Enter password" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Confirm password</label>
                                <input type="password" name="cpassword" placeholder="Confirm password" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
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
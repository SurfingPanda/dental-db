<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        
                        <div class="form-group mb-3">
                            <label for="">First name</label>
                            <input type="text" placeholder="Enter first name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Last name</label>
                            <input type="text" placeholder="Enter last name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="email" placeholder="Enter email address" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="password" placeholder="Enter password" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Confirm password</label>
                            <input type="password" placeholder="Confirm password" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('includes/footer.php');
?>
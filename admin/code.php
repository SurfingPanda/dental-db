<?php
    include('authentication.php');

    if(isset($_POST['update-user']))
    {
        $user_id = $_POST['user-id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role_as = $_POST['role_as'];
        $status = $_POST['status'] == true ? '1' : '0';

        $query = "UPDATE users SET fname='$fname', lname='$lname', email='$email', password='$password', role_as='$role_as', status='$status'
                    WHERE id='$user_id' ";

        $query_run = mysqli_query($con, $query);

        if($query_run)
        {   
            $_SESSION['message'] = "Updated successfully!";
            header("Location: view-register.php");
            exit(0);
        }
        
    }
?>
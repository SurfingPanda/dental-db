<?php
    include('authentication.php');

    if(isset($_POST['user-delete']))
    {
        $user_id = $_POST['user-delete'];

        $query = "DELETE FROM users WHERE id='$user_id' ";

        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            $_SESSION['message'] = "You have successfully deleted a user.";
            header('Location: view-register.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Something went wrong.";
            header('Location: view-register.php');
            exit(0);
        }
    }

    if(isset($_POST['add-user']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role_as = $_POST['role_as'];
        $status = $_POST['status'] == true ? '1' : '0';

        $query = "INSERT INTO users (fname, lname, email, password, role_as, status) VALUES ('$fname', '$lname', '$email', '$password', '$role_as', '$status')";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            $_SESSION['message'] = "You have successfully added a user.";
            header('Location: view-register.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Something went wrong.";
            header('Location: view-register.php');
            exit(0);
        }
    }



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
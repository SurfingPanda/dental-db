<?php
session_start();

if(isset($_POST['logout-btn']))
{
    // session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth-user']);
    
    $_SESSION['message'] = "You have logged out successfully!";
    header("Location: login.php");
    exit(0);
}

?>
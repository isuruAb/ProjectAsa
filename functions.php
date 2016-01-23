<?php
$errors="";
function login_user($login_user,$login_pass)
{
    
    include_once('database.php');
    $sql = "SELECT username, password FROM users WHERE username='".$login_user."' AND password='".md5($login_pass)."'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        session_start();
        $_SESSION['login']='true';
        header('Location:dashboard.php');
    } else {
        return "Enter valid username and password";
    }
    $conn->close();
}
function login_true()
{
    session_start();
    if(isset($_SESSION['login']))
    {
        if($_SESSION['login']=="true")
        {
            header('Location:dashboard.php');
        }
    }


}
function login_fales()
{
    session_start();
    if(!isset($_SESSION['login']))
    {

            header('Location:login.php');

    }


}
function register_user()
{
    
}
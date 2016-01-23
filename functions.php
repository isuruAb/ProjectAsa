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
        $conn->close();
        header('Location:dashboard.php');
        
    } else {
        $conn->close();
        return "Enter valid username and password";
    }
    
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
function register_user($name,$u_name,$u_pass,$email,$tel,$org,$desi,$activated)
{
    include_once('database.php');
    $sql = "SELECT * FROM users WHERE username='".$name."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        $errors="Your username is already exist check something else<br>";
    }
    $sql = "SELECT * FROM users WHERE email='".$email."'"; 
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        $errors.="You have already registered with this email address<br>";
    }    
    $sql = "SELECT * FROM users WHERE telephone='".$tel."'"; 
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        $errors.="You have already registered with this Telephone number<br>";       
    }   
       
    if($errors=="")
    {
        $sql = "INSERT INTO users (name,username,password,email,telephone,organization,designation,activated)
        VALUES ('".$name."','".$u_name."','".md5($u_pass)."','".$email."','".$tel."','".$org."','".$desi."',".$activated.")";
                    
        if ($conn->query($sql) === TRUE)
        {
            $errors="You have successfully registered";
                       
            // the message
            $msg = "Please complete your registration for Aza.";
                            
            // use wordwrap() if lines are longer than 70 characters
            $msg = wordwrap($msg,70);
            $header = 'From: info@projectaza.com>' . "\r\n";
            // send email
            mail("'".$email."'","Start with Aza",$msg,$header);
        } else
        {
                        $errors="Something went wrong";
                        //$errors="Error: " . $sql . "<br>" . $conn->error;
        }
    
    }

    $conn->close();
    return $errors;
        
}
    
    
    

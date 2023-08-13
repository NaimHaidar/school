<?php 

require_once 'connection.php';
session_start();
if(isset($_POST['username']) && $_POST['username']!=""
        && isset($_POST['pass']) && $_POST['pass']!="")   
{
    $user=sanitize($_POST['username']);
    $pass=sanitize($_POST['pass']);
    
    $query="Select * From `users` where username='".$user."' and password='".$pass."'";
    
    $res= mysqli_query($con, $query);
    
    $nbrows= mysqli_num_rows($res);
    if($nbrows == 0)
    {
        $_SESSION['err']="The username or password you entered is incorrect.";
        header("Location:login.php");
    }
    else if($nbrows==1) {
        
        $_SESSION['isloggedin']=1;
        $_SESSION['user']=$user;
        header("Location:index.php");
   }
} 
else header("Location:login.php");

?>
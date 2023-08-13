
<?php session_start();
require_once "connection.php";
if(isset($_POST['fname']) && $_POST['fname']!=""
        && isset($_POST['username']) && $_POST['username']!=""
        && isset($_POST['email']) && $_POST['email']!=""
        && isset($_POST['pass']) && $_POST['pass']!=""){
           
            $fname=sanitize($_POST['fname']);
            $username=sanitize($_POST['username']);
            $email=sanitize($_POST['email']);
            $pass=sanitize($_POST['pass']);
            $about=sanitize($_POST['about']);
            $pic="public/user.png";
                       
            $query="SELECT * FROM `users` WHERE `username` = '".$username."'";
            $result=mysqli_query($con, $query);
            if(mysqli_num_rows($result)>0){
                $_SESSION['err']="username already taken";
                header("Location:sign-up.php");
            }else{
            $query="SELECT * FROM `users` WHERE `email` = '".$email."'";
            $result=mysqli_query($con, $query);
            if(mysqli_num_rows($result)>0){
                $_SESSION['err']="email already in use";
                header("Location:sign-up.php");
            }else{
                if (!empty($_FILES['pic']['name'])) {
                    $pic = $_FILES['pic']['name'];
                    $sourceFilePath = $_FILES["pic"]["tmp_name"];
                    $destinationFilePath = "public/" . $pic;
                    
                    move_uploaded_file($sourceFilePath, $destinationFilePath);
                } else {
                    echo "No file uploaded.";
                }
               $query="INSERT INTO `users` (`user_id`, `username`, `email`, `fullname`, `password`, `about`, `profile_pic`, `create_date`, `privileges`)
                VALUES (NULL, '".$username."', '".$email."', '".$fname."', '".$pass."', '".$about."', '".$destinationFilePath."', NOW(), '0')";
                $result=mysqli_query($con, $query);
               if ($result) {header("Location:login.php");}
            }}


        }
        else header("Location:sign-up.php");
?>
<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"]=="POST")
{   
    include '_dbconnect.php';
    $user_email = $_POST['signupEmail'];//signup modal m se name fetch karrega array m na ki id
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];

    // we have to check that username exist or not

    $existSql = "SELECT * FROM `users` WHERE user_email = '$user_email' ";
    $result  =  mysqli_query($conn , $existSql);
   $numRows = mysqli_num_rows($result);

    if($numRows>0)//user data h to  error show hoga
    {
        $showError = "Email already in use";
    }
    else//user data exist nhi h pehle se to ye chalega
    {
        if($pass==$cpass) // work on password same
        {
            $hash = password_hash($pass , PASSWORD_DEFAULT);//this makes hash of password from default algorithm
            $sql = "INSERT INTO `users` ( `user_email`, `user_pass`, `timestamp`) VALUES ( '$user_email', '$hash', current_timestamp())";
           // $result  =  mysqli_query($conn , $sql);
            
            
          //  $showAlert = true;
            header("Location : /job/index.php?signup_success=true");
            exit();
        }

        else  // password galat hone p chalega
        {
            $showError = "Passwords do not match";
        }
    }
    
    header("Location : /job/index.php?signupsuccess=false&error=$showError");
} 


 ?>
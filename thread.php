<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <title>Jobify</title>
    </head>

    <body>
        <?php include 'include/_header.php'; ?>
        <?php include 'include/_dbconnect.php'; ?>
        <?php 
            $id = $_GET['threadid'];
            $sql = "SELECT * FROM `thread` WHERE thread_id=$id"; 
            $result = mysqli_query($conn , $sql); 
            while($row = mysqli_fetch_assoc($result)){

                $title = $row['thread_subject'];
                $desc = $row['thread_description'];
                $thread_user_id = $row['thread_user_id'];
                
            }
        ?>

<?php
        $showalert = false;
        $method = $_SERVER['REQUEST_METHOD'];
       // echo $method;
        if($method=='POST')
        {
            //Insert  comment into database
            $comment = $_POST['comment'];
            $sno = $_POST['sno'];
            $sql =" INSERT INTO `comments` ( `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ( '$comment', '$id','$sno ', current_timestamp())"; 
            $result = mysqli_query($conn , $sql); 
           $showalert = true;
           if($showalert)
           {
               echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>Success : </strong>Your comment has been added.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
            </div>';
           }
        }
        ?>



        <!-- Category container starts here -->

        <div class="container my-4 ">
            <div class="jumbotron jumbotron-fluid  bg-dark text-light">
                <div class="container">
                    <h1 class="display-4"> <?php  echo $title;?> </h1>
                    <p class="lead"><?php  echo $desc;?>.</p>
                    <hr class="my-4">
                    
                            <!-- Ye work nhi kr rha h -->
                    <!-- <p class="mx-2"><b>Posted by :  </b></p>
                    $sql2="SELECT user_email FROM `users` WHERE sno =$thread_user_id";
                $result2 = mysqli_query($conn , $sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $posted_by = $row['user_email']; -->
                    <a class="btn btn-primary mx-2 my-3 btn-md" href="include/_privacy.php" role="button"> Privacy
                        Policy</a>
                </div>
            </div>
        </div>
        <?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
echo '       <div class="container">
<h2 class="text-center my-4 py-2">Post a comment</h2>

<form action=" ' .$_SERVER['REQUEST_URI'] . '" method="post">

    <div class="form-group">
        <label for="exampleInputPassword1 ">Type your comment</label>
        <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
        <input type="hidden" name="sno" value=" ' . $_SESSION["sno"] . '">
    </div>

    <button type="submit" class="btn btn-success my-2">Post Comment</button>
</form>
</div>';
    }

    else{
    echo'    <div class="container my-5">
    <h2 class="text-center my-4 py-2 bg-dark text-light">Post a Comment</h2>
    <p class="lead text-center" > You are not logged in, Login to Post comments</p>


</div>';
    }

?>

        

        <div class="container ">
            <h2 class="text-center my-4 py-2 bg-dark text-light ">Discussions</h2>

            <?php 
            $id = $_GET['threadid'];
            $sql = "SELECT * FROM `comments` WHERE thread_id=$id"; 
            $result = mysqli_query($conn , $sql);
            $noResult = true; 
            while($row = mysqli_fetch_assoc($result))
            {
                $noResult = false;
                $id = $row['comment_id'];
                $content = $row['comment_content'];
                $comment_time =  $row['comment_time'];
                $thread_user_id = $row['comment_by'];
                $sql2="SELECT user_email FROM `users` WHERE sno =$thread_user_id";
                $result2 = mysqli_query($conn , $sql2);
                $row2 = mysqli_fetch_assoc($result2);
                 
        echo    '<div class="media my-5">
            <img src="image/user-default.jpg" width="50px" class="mr-3" alt="...">
            <div class="media-body">
            <p class="font-weight-bold my-0">' . $row2['user_email'] . ' at ' . $comment_time . '</p>
                ' . $content . '
            </div>
        </div>';

            
        


            if($noResult)
            {
            echo '<div class="jumbotron jumbotron-fluid bg-dark text-light">
                <div class="container">
                    <p class="display-6 text-center">No Questions Found</p>
                    <p class="lead my-3 py-3 text-center">Be the first Person to ask.</p>
                </div>
            </div>';
            }
        }
        ?>
        </div>

        <?php include 'include/_footer.php'; ?>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    </body>

</html>
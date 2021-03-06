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
        <?php include 'include/_dbconnect.php'; ?>
        <?php include 'include/_header.php'; ?>
     


   <!-- Carousel -->

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>


        <div class="container my-4">
            <h1 class="text-center my-4 "><b>Jobify</b></h1>
            <h2 class="text-center my-4">Browse-Categories</h2>

            <!-- Card -->
            
            <div class="row my-4">
            
                    <?php
                    // loop to fetch categories from database 
                    $sql = "SELECT * FROM `job_cat`"; 
                    $result = mysqli_query($conn , $sql); 
                    while($row = mysqli_fetch_assoc($result))
                    {
                        /*echo $row['category_id'];
                        echo $row['category_name'];
                        */
                        $id  =  $row['category_id'];
                        $cat =  $row['category_name'];
                        $desc = $row['category_description'];

                    echo '      
                            <div class="col mx-4 mb-4">
            
                                <div class="card" style="width: 18rem;">
                                    <img src="https://source.unsplash.com/500x400/?' .$cat. ',coding" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="threadlist.php?catid=' .$id. '"> '  . $cat  . '</a></h5>
                                        <p class="card-text">' .substr($desc ,0 ,90). '... </p>
                                        <a href="threadlist.php?catid=' .$id. '" class="btn btn-primary">Requirement</a>
                                    </div>
                                </div>
                            </div>';
                    }
                    ?> 
            </div>
       


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
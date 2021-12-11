<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
            <link  href="css/style.css" rel="stylesheet" >

        <title>Jobify</title>
    </head>

    <body>
        <?php include 'include/_header.php'; ?>


<div class="about-section">
  <h1>About Us </h1>
  <p>Some text about who we are and what we do.</p>
</div>

<h2 style="text-align:center " class="my-3">Our Team</h2>
<div class="row ">
  <div class="column">
    <div class="card">
      <img src="../htdocs/job/image/1.jpg" alt="Shivam" style="width:100%">
      <div class="container">
        <h2>Shivam Salame</h2>
        <!-- <p class="title">Backend & Frontend.</p> -->
        <!-- <p>Experienced In PHP,Html,Css,Bootstrap.</p> -->
        <p>lawnjoker@gmail.com</p>
        <p><button class="button"><a href="/job/contact.php" class="text-light">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../htdocs/job/image/2.jpg" alt="Himanshu" style="width:100%">
      <div class="container">
        <h2>Himanshu Warkad</h2>
        <!-- <p class="title">Front End Designer</p> -->
        <!-- <p>Experienced In Html,Css,Javascript,Bootstrap.</p> -->
        <p>himanshu@gmail.com</p>
        <p><button class="button"><a href="/job/contact.php" class="text-light" >Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column ">
    <div class="card">
      <img src="../htdocs/job/image/3.jpg" alt="Amul" style="width:100%">
      <div class="container">
        <h2>Amul Sharma</h2>
        <!-- <p class="title">Backend Developer</p> -->
        <!-- <p>Experienced In PHP,Html,Css.</p> -->
    
        <p>amulOP@gmail.com</p>
        <p><button class="button"><a href="/job/contact.php"class="text-light" >Contact</a></button></p>
      </div>
    </div>
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
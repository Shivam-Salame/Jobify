<?php
session_start();
echo'
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/job">Jobify</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/job">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link " href="contact.php" tabindex="-1" >Contact</a>
        </li>
      </ul>
      <div class="d-flex">';
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
      
{
echo '     <form class="d-flex mx-1">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" type="submit">Search</button>
      <p class="text-light my-0 mx-2 mt-2">' . $_SESSION['useremail']. ' </p> 
    <a href="include/_logout.php" class="btn btn-outline-success mx-2"  >Logout</a>   
      </form>';
}

    else{
 echo '       <form class="d-flex mx-1" method="get" action="search.php">
      <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-success" type="submit">Search</button>
      </form>
    <button class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#loginModal" >Login</button>
    <button class="btn btn-outline-success ml-auto mr-1" data-bs-toggle="modal" data-bs-target="#signupModal" >Signup</button>';
    }

 echo  '   </div>
    </div>
  </div>
</nav>';

include 'include/_loginModal.php';
include 'include/_signupModal.php';

if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true")
{
echo'
  <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Success!</strong> You can now Login using your email.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
';
}  
  ?>
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
     
        
   <!-- // <img src="../htdocs/job/image/black.jpg" > -->
        
    <?php include 'include/_dbconnect.php'; ?>
        <?php include 'include/_header.php'; ?>

<div class="container my-3 ">
<h2 class="text-center my-3"> Contact Us</h2>
<form>
  <div class="form-group my-3">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  
  <div class="form-group my-3">
    <label for="exampleFormControlSelect2 ">Select one of them</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1. Login problem</option>
      <option>2. Signup problem</option>
      <option>3. Company Related issue</option>
      <option>4. Resume Related issue</option>
      <option>5. Website Related issue</option>
    </select>
  </div>
  <div class="form-group my-3">
    <label for="exampleFormControlTextarea1">Explain your problem</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
  <button class=" btn btn-success my-3">Submit</bt></div>


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
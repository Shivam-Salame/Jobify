<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Top Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">';

          $sql ="SELECT category_name, category_id from `job_cat` LIMIT 3";
          $result = mysqli_query($conn , $sql); 
          while($row = mysqli_fetch_assoc($result)){
          echo '  <li><a class="dropdown-item" href="threadlist.php?cat_id='.$row['category_id'].'"> '.$row['category_name'].'</a></li>';
          } 
        echo'  </ul>
        </li>
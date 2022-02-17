
<div class="sidebar col-2" style="background-color:#FAFFC1" >
  <div class="d-flex flex-column align-items-center px-3 pt-2 text-white  ">
      <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <h3 class="sidebar_eclass d-none d-sm-inline ps-3 font-weight-bolder  text-dark"><span class="pl-2"></span>E-classe</h3>
      </a>
      <div class="d-flex flex-column align-items-center text-dark ">
          <img class="rounded-circle w-75 d-none d-sm-inline" src="./img/youcode1.png" alt="photo">
          <p class=" h5 font-weight-bold pt-2 m-0 d-none d-sm-inline"><?php echo $_SESSION['name'];?>  </p>
          <a class="pb-3 h5 font-weight-light d-none d-sm-inline text-primary" href="#">Admin</a>
      </div>
      <ul class=" nav nav-pills flex-column mb-sm-auto mb-0 p-0 align-items-center align-items-sm-start w-75 "
          id="menu">
          <li class="nav-item w-100 ">
              <a href="./dashboard.php" class="nav-link align-middle px-0 text-dark">
                  <i class="fa fa-home" aria-hidden="true"></i>
                  <span class="ms-1 d-none d-sm-inline ps-2 ">Home</span>
              </a>
          </li>
          <li class="nav-item  w-100 ">
              <a href="./courses.php" data-bs-toggle="" class="nav-link px-0 align-middle text-dark">
                  <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                  <span class=" ms-1 d-none d-sm-inline ps-3">Course</span>
              </a>
          </li>
          <li class="w-100 nav-item" >
              <a href="./student.php" class="nav-link px-0 align-middle text-dark">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                  <span class=" ms-1 d-none d-sm-inline ps-1">Students</span></a>
          </li>
          <li  class="w-100 nav-item" >
              <a href="./payment.php" data-bs-toggle="" class="nav-link px-0 align-middle text-dark">
                  <i class="fa fa-money" aria-hidden="true"></i> 
                  <span class="ms-1 d-none d-sm-inline ps-2">Payment</span>
              </a>
          </li>
          <li class="w-100 " >
              <a href="#" data-bs-toggle="" class="nav-link px-0 align-middle text-dark">
                  <i class="fa fa-file-text-o" aria-hidden="true"></i>
                  <span class=" ms-1 d-none d-sm-inline ps-2">Report</span>
              </a>
          </li>
          <li class="w-100 " >
              <a href="#" class="nav-link px-0 align-middle text-dark">
                  <i class="fa fa-cogs" aria-hidden="true"></i> 
                  <span class="ms-1 d-none d-sm-inline ps-2">Settings</span> </a>
          </li>
      </ul>
      <hr>
      <form class=" pb-4 " method="post">
          <div class="color_blue">
          <input type="submit" name="logout" id="logout"  value="logout" class="border-0 bg-transparent " >
              <label  for="logout"> <i class="fa fa-sign-out pl-1 color_blue"  aria-hidden="true"></i> </label>

          </div>

<!--          <a href=""  class="nav-link px-0 align-middle" name="logout">-->
<!--              <span class="ms-1 d-none d-sm-inline ps-2">Logout</span>-->
<!--
              <i class="fa fa-sign-out pl-1" aria-hidden="true"></i>-->
<!--          </a>-->

<!--              <input type="submit" name="submit" class="" aria-hidden="true">-->

      </form>
  </div>
</div>

<?php


    if(isset($_POST['logout'])){

        session_unset();
        session_destroy();
        header('location:index.php');
       // var_dump($email1);

    }

?>
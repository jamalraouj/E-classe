<?php
  
 echo '<div class="sidebar col-2 position-sticky " style="background-color:#FAFFC1" >
  <div
      class="d-flex flex-column align-items-center align-items-center px-3 pt-2 text-white  ">
      <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <h3 class="fs-5  d-sm-inline ps-3 font-weight-bolder  text-dark">E-classe</h3>
      </a>
      <div class="d-flex flex-column align-items-center align-items-center text-dark ">
          <img class="rounded-circle w-75" src="./img/youcode1.png" alt="photo">
          <p class=" h5 font-weight-bold pt-2 m-0">Admin name</p>
          <p class="pb-3 h5 font-weight-light fs-6 text-primary" href="#">Admin</p>
      </div>
      <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-75 "
          id="menu">
          <li class="nav-item width_100prs text-sm-start">
              <a href="./dashboard.php" class="nav-link align-middle px-0">
                  <i class="fa fa-home" aria-hidden="true"></i>
                  <span class="text-dark ms-1 d-none d-sm-inline ps-2 ">Home</span>
              </a>
          </li>
          <li class="nav-item  width_100prs text-sm-start">
              <a href="./dashboard.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                  <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                  <span class=" text-dark ms-1 d-none d-sm-inline ps-3">Course</span>
              </a>
          </li>
          <li class="width_100prs text-sm-start" >
              <a href="./student.php" class="nav-link px-0 align-middle">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                  <span class="text-dark ms-1 d-none d-sm-inline ps-1">Students</span></a>
          </li>
          <li  class="width_100prs text-sm-start" >
              <a href="./payment.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                  <i class="fa fa-money" aria-hidden="true"></i> 
                  <span class="text-dark ms-1 d-none d-sm-inline ps-2">Payment</span>
              </a>
          </li>
          <li class="width_100prs text-sm-start" >
              <a href="#" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                  <i class="fa fa-flag" aria-hidden="true"></i> 
                  <span class="text-dark ms-1 d-none d-sm-inline ps-2">Report</span>
              </a>
          </li>
          <li class="width_100prs text-sm-start" >
              <a href="#" class="nav-link px-0 align-middle">
                  <i class="fa fa-cogs" aria-hidden="true"></i> 
                  <span class="text-dark ms-1 d-none d-sm-inline ps-2">Settings</span> </a>
          </li>
      </ul>
      <hr>
      <div class="dropdown pb-4">
          <a href="./index.php" class="nav-link px-0 align-middle">
              <span class="ms-1 d-none d-sm-inline ps-2">Logout</span> 
              <i class="fa fa-sign-out pl-1" aria-hidden="true"></i> 
          </a>
              
      </div>
  </div>
</div>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap static/css/bootstrap.min.css ">
    <link rel="stylesheet" href="./bootstrap static/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>dashboard</title>
</head>
   
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php include 'sidebar.php'?>
            <div class="col py-1 bg-white"> 
                <div class="our-webcoderskull padding-lg">
                    <?php include 'nav.php' ?>
                    <ul class="row list-unstyled mt-4 d-flex justify-content-evenly">
                        <li class="col-12 mb-2 col-md-6 mb-md-2 col-lg-3">
                            <div class="cnt-block equal-hight border p-3 bg-color border-0 rounded-2" style="background-color: #F0F9FF"; >
                                <a  href="./student.php"> 
                                    <i class="fa fa-graduation-cap fs-1 colry" aria-hidden="true"></i>
                                    <p class="text-info">Students</p>
                                </a>
                                <div class="p-O d-flex justify-content-end">
                                    <p class="mt-3 mb-0 fw-bolder fs-4 ">243</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-12 mb-2 col-md-6 mb-md-2 col-lg-3">
                            <div class="cnt-block equal-hight border p-3 bg-color-one border-0 rounded-2" style="background-color: #FEF6FB;">
                                <a href="./dashboard.php">
                                    <i class="fa fa-bookmark-o fs-1 colry-one" aria-hidden="true"></i>
                                    <p class="text-info">Course</p>
                                </a>
                                <div class="p-O d-flex justify-content-end">
                                    <p class="mt-3 mb-0 fw-bolder fs-4 ">13</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-12 mb-2 col-md-6 mb-md-2 col-lg-3">
                            <div class="cnt-block equal-hight border p-3 bg-color-two border-0 rounded-2" style="background-color:#FEFBEC;">
                                <a href="./payment.php">
                                    <i class="fa fa-money fs-1 colry-two" aria-hidden="true"></i>
                                    <p class="text-info">Payments</p>
                                </a>
                                <div class="p-O d-flex justify-content-end">
                                    <p class="mt-3 mb-0 fw-bolder fs-4 "><span class="fs-5 fw-bold">DHS</span> 556,000</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-12 col-md-6 col-lg-3">
                            <div class="cnt-block equal-hight border p-3 bg-color-three border-0 rounded-2" style="background:Linear-Gradient(110.42deg , #00C1FE 18.27% ,#FAFFC1 91.84%);"             
                             >
                                <div class="">
                                    <i class="fa fa-user-o fs-1 text-white" aria-hidden="true"></i>
                                    <p class="text-info">Users</p>
                                </div>
                                <div class="p-O d-flex justify-content-end">
                                    <p class="mt-3 mb-0 fw-bolder fs-4 ">3</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                
                </div>
            </div>
        </div>
    </div>
    <!-- "C:\xampp\htdocs\E-classe\bootstrap static\js\bootstrap.bundle.js" -->
    <!-- <script src="./bootstrap static/js/bootstrap.bundle.js"></script> 
    <script src="./bootstrap static/js/bootstrap.min.js"></script>
    <script src="./bootstrap static/js/bootstrap.bundle.min.js"></script>
    <script  > src="./bootstrap static/css/bootstrap.min.css"</script> -->

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     
</body>

</html>
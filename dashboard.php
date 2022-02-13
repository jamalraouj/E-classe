<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'; ?>
    <title>dashboard</title>
</head>

<body>
   <?php include_once './crud-mysql/db-conn.php'; ?>
   <?php 
        //student
        $num_std = "SELECT COUNT(id) AS numberStudent FROM table_student" ;
        $sql = mysqli_query($conn , $num_std);
        $data_assoc = mysqli_fetch_array($sql);
        // _______________
        //amount_paid
        $sql_pym_paid =  "SELECT SUM(amount_paid) from table_payment";
        $sql_p = mysqli_query( $conn, $sql_pym_paid);
        $sql_p_assoc = mysqli_fetch_array($sql_p);
        //_________
        //course
        $sql_course = "SELECT COUNT(id) from table_course";
        $sql_obj = mysqli_query($conn , $sql_course);
        $data_array = mysqli_fetch_array($sql_obj);
        // admin
          $sql_admin = "SELECT COUNT(id) from admin";
          $sql_ad_obj = mysqli_query($conn , $sql_admin);
          $sql_array = mysqli_fetch_array($sql_ad_obj);
          


        ?>

        <div class="row flex-nowrap vh-100">
            <?php include 'sidebar.php'?>
            <div class="col py-1 bg-white"> 
                <div class="">
                    <?php include 'nav.php' ?>
                    <ul class="row list-unstyled mt-4">
                        <li class="col-12  col-md-6 col-lg-3">
                            <div class="border p-3 bg-color border-0 rounded-2" style="background-color: #F0F9FF"; >
                                <a  href="./student.php"> 
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <p class="text-info">Students</p>
                                </a>
                                <div class="d-flex justify-content-end">
                                    <p class="mt-3 mb-0">
                                     <?php echo $data_assoc[0];
                                      ?></p>
                                </div> 
                            </div>
                        </li>
                        <li class="col-12  col-md-6 col-lg-3">
                            <div class="border p-3 border-0 rounded-2" style="background-color: #FEF6FB;">
                                <a href="./courses.php">
                                    <i class="fa fa-bookmark-o " aria-hidden="true"></i>
                                    <p class="text-info">Course</p>
                                </a>
                                <div class="d-flex justify-content-end">
                                    <p class="mt-3 mb-0 "><?php echo $data_array[0]; ?></p>
                                </div>
                            </div>
                        </li>
                        <li class="col-12  col-md-6 col-lg-3">
                            <div class=" border p-3 bg-color-two border-0 rounded-2" style="background-color:#FEFBEC;">
                                <a href="./payment.php">
                                    <i class="fa fa-money " aria-hidden="true"></i>
                                    <p class="text-info">Payments</p>
                                </a>
                                <div class="d-flex justify-content-end">
                                    <p class="mt-3 mb-0"><span>DHS </span><?php echo $sql_p_assoc[0]; ?></p>
                                </div>
                            </div>
                        </li>
                        <li class="col-12 col-md-6 col-lg-3">
                            <div class="border p-3 border-0 rounded-2" style="background:Linear-Gradient(110.42deg , #00C1FE 18.27% ,#FAFFC1 91.84%);"             
                             >
                                <div class="">
                                    <i class="fa fa-user-o  text-white" aria-hidden="true"></i>
                                    <p class="text-info">Users</p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <p class="mt-3 mb-0 "><?php echo $sql_array[0] + $data_assoc[0]; ?></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                
                </div>
            </div>
        </div>
        <?php include 'includejs.php'; ?>
        <?php mysqli_close($conn); ?>
</body>

</html>
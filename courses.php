<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location:index.php');
    }

include './crud-mysql/db-conn.php';

 $sql_str_crs = "SELECT * FROM `table_course`";
 $crs_obj = mysqli_query( $conn, $sql_str_crs);


 $sql_str_my_crs = "SELECT * FROM `table_my_course`";
 $my_crs_obj = mysqli_query($conn , $sql_str_my_crs);

 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'; ?>
    <title>course</title>
</head>

<body>
    
        <div class="vh-100 row flex-nowrap ">
            <?php include 'sidebar.php' ?>
            <div class="col py-1 " style="background-color: #E5E5E5;"> 
                <div class="padding-lg">
                    <?php include 'nav.php' ?>
                    <div>
                    <div class="d-flex justify-content-between flex-wrap pb-2 px-3 border-bottom ">
                        <h2>Courses</h2>
                        <div class="d-flex align-items-center" >
                            <i class=" fa fa-sort Primary color_blue mr-2" aria-hidden="true"></i>
                        </div>
                    </div>
                
                    <div class="table-responsive overflow-scroll scroll_wdout_bar px-sm-3 height_dash ">

                      <table class="table " >
                        
                        <thead class=" w-100">
                            <!-- <img src="./img/students.png invisible" alt=""> -->
                            <tr>
                               <th>Title</th>
                               <th>F/S</th>
                               <th>Type</th>
                               <th >Hours</th>
                               <th>Price</th>
                               <th>Last Update</th> 
                               <th>Description</th> 
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($row = mysqli_fetch_assoc($crs_obj)) {?>
                            <tr class="bg-white mb-2 flex-wrap">
                                <td class="align-middle"><?php echo $row['title']; ?></td>
                                <td class="align-middle"><?php echo $row['F/S'];?></td>
                                <td class="align-middle"><?php echo $row['type'];?></td>
                                <td class="align-middle"><?php echo "<span>DHS </span>". $row['hours'];?></td>
                                <td class="align-middle"><?php echo "<span>DHS </span>". $row['price'];?></td>
                                <td class="align-middle"><?php echo $row['lastupdate'];?></td>
                                <td class="align-middle"><?php echo $row['description'];?></td>
                                <td class="width_60 d-flex justify-content-lg-around">
                                <i class="fa fa-eye  color_blue" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                    </div>
                    
                  </div>
                </div>
            </div>
        </div>
   
        <?php include 'includejs.php'; ?>

</body>

</html>
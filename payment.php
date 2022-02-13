
<?php
 include './crud-mysql/db-conn.php';


//  $string_payment= file_get_contents("./fils-json/payment-student.json");
//  $array_payment=json_decode($string_payment , true);
 $sql_str_pym = "SELECT * FROM `table_payment`";
 //var_dump($sql_str_pym);
 $pym_obj = mysqli_query( $conn, $sql_str_pym);

 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'; ?>
    <title>payment</title>
</head>

<body>
    
        <div class="vh-100 row flex-nowrap  ">
            <?php include 'sidebar.php' ?>
            <div class="col py-1 " style="background-color: #E5E5E5;"> 
                <div class="padding-lg">
                    <?php include 'nav.php' ?>
                    <div>
                    <div class="d-flex justify-content-between flex-wrap pb-2 px-3 border-bottom ">
                        <h2>Payment details</h2>
                        <div class="d-flex align-items-center" >
                            <i class=" fa fa-sort Primary color_blue mr-2" aria-hidden="true"></i>
                            
                        </div>
                    </div>
                    <div class="table-responsive px-sm-3 overflow-scroll scroll_wdout_bar height_dash ">
                      <table class="table" >
                        
                        <thead class=" w-100">
                            <!-- <img src="./img/students.png invisible" alt=""> -->
                            <tr>
                               <th>Name</th>
                               <th>Payement schedule</th>
                               <th>Bill Number</th>
                               <th >Amount paid</th>
                               <th>Balance amount</th>
                               <th>Date</th> 
                            </tr>
                        </thead>
                        <!-- ____________ height_70 d-flex justify-content-between align-items-center bg-white mb-2 flex-wrap ml-3 pl-1-->
                        <?php while($row = mysqli_fetch_assoc($pym_obj)) {?>
                            <tr class="bg-white mb-2 flex-wrap">
                                <td class="align-middle"><?php echo $row['name']; ?></td>
                                <td class="align-middle"><?php echo $row['payment_schedule'];?></td>
                                <td class="align-middle"><?php echo $row['bill_number'];?></td>
                                <td class="align-middle"><?php echo "<span>DHS </span>". $row['amount_paid'];?></td>
                                <td class="align-middle"><?php echo "<span>DHS </span>". $row['balance_amount'];?></td>
                                <td class="align-middle"><?php echo $row['date'];?></td>
                                <td class="width_60 d-flex justify-content-lg-around">
                                <i class="fa fa-eye  color_blue" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <?php } ?>

                    </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
   
        <?php include 'includejs.php'; ?>
    
</body>

</html>
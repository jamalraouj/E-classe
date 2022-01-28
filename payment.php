
<?php

 $string_payment= file_get_contents("./fils-json/payment-student.json");
 $array_payment=json_decode($string_payment , true);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'; ?>
    <title>payment</title>
</head>

<body>
    
        <div class="row flex-nowrap  ">
            <?php include 'sidebar.php' ?>
            <div class="col py-1 " style="background-color: #E5E5E5;"> 
                <div class="padding-lg">
                    <?php include 'nav.php' ?>
                    <div>
                    <div class="d-flex justify-content-between flex-wrap pb-2 px-3 border-bottom ">
                        <h2>Payment details</h2>
                        <div class="d-flex align-items-center" >
                            <i class=" fa fa-sort Primary color_blue mr-2" aria-hidden="true"></i>
                            <button class="btn_signin border-0 rounded h-100 w-100 px-1 text-white">Add new student</button>
                        </div>
                    </div>
                    <div class="table-responsive px-sm-3 overflow-scroll scroll_wdout_bar height_dash ">
                      <table class="table" >
                        
                        <thead class=" w-100">
                            <!-- <img src="./img/students.png invisible" alt=""> -->
                            <tr>
                               <th scope="col">Name</th>
                               <th scope="col">Payement schedule</th>
                               <th scope="col">Bill Number</th>
                               <th >Amount paid</th>
                               <th>Balance amount</th>
                               <th>Date</th> 
                            </tr>
                        </thead>
                        <!-- ____________ height_70 d-flex justify-content-between align-items-center bg-white mb-2 flex-wrap ml-3 pl-1-->
                        <?php foreach($array_payment as $lang) :?>
                            <tr class="bg-white mb-2 flex-wrap">
                                <td class="align-middle"><?php echo $lang['lname']; ?></td>
                                <td class="align-middle"><?php echo $lang['payment-schedule'];?></td>
                                <td class="align-middle"><?php echo $lang['bill-number'];?></td>
                                <td class="align-middle"><?php echo "<span>DHS </span>". $lang['amount-paid'];?></td>
                                <td class="align-middle"><?php echo "<span>DHS </span>". $lang['balance-amount'];?></td>
                                <td class="align-middle"><?php echo $lang['date'];?></td>
                                <td class="width_60 d-flex justify-content-lg-around">
                                <i class="fa fa-eye  color_blue" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        
                    </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
   
        <?php include 'includejs.php'; ?>
    
</body>

</html>
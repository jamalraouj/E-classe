
<?php
  $array_payment =array(

    array(
        'lname' =>'raouj',
        'Payement-schedule'=>'First',
         'bill-number'=>'00012223',
         'amount-paid'=> '64738291',
          'balance-amount'=> '64738291',
          'date'=> '08/Dec,21'
     )
     ,
     array(
        'lname' =>'elbokri',
        'Payement-schedule'=>'First',
         'bill-number'=>'00012223',
         'amount-paid'=> '64738291',
          'balance-amount'=> '64738291',
          'date'=> '08/Dec,21'
     )
     ,
     array(
        'lname' =>'nadir',
        'Payement-schedule'=>'First',
         'bill-number'=>'00012223',
         'amount-paid'=> '64738291',
          'balance-amount'=> '64738291',
          'date'=> '08/Dec,21'
     )
     ,
     array(
        'lname' =>'nqar',
        'Payement-schedule'=>'First',
         'bill-number'=>'00012223',
         'amount-paid'=> '64738291',
          'balance-amount'=> '64738291',
          'date'=> '08/Dec,21'
     )
     ,
     array(
        'lname' =>'assadiq',
        'Payement-schedule'=>'First',
         'bill-number'=>'00012223',
         'amount-paid'=> '64738291',
          'balance-amount'=> '64738291',
          'date'=> '08/Dec,21'
     )
     ,
     array(
        'lname' =>'raouj',
        'Payement-schedule'=>'First',
         'bill-number'=>'00012223',
         'amount-paid'=> '64738291',
          'balance-amount'=> '64738291',
          'date'=> '08/Dec,21'
     )
,
array(
    'lname' =>'raouj',
    'Payement-schedule'=>'First',
     'bill-number'=>'00012223',
     'amount-paid'=> '64738291',
      'balance-amount'=> '64738291',
      'date'=> '08/Dec,21'
 )
 ,
 array(
    'lname' =>'elbokri',
    'Payement-schedule'=>'First',
     'bill-number'=>'00012223',
     'amount-paid'=> '64738291',
      'balance-amount'=> '64738291',
      'date'=> '08/Dec,21'
 )
 ,
 array(
    'lname' =>'nadir',
    'Payement-schedule'=>'First',
     'bill-number'=>'00012223',
     'amount-paid'=> '64738291',
      'balance-amount'=> '64738291',
      'date'=> '08/Dec,21'
 )
 ,
 array(
    'lname' =>'nqar',
    'Payement-schedule'=>'First',
     'bill-number'=>'00012223',
     'amount-paid'=> '64738291',
      'balance-amount'=> '64738291',
      'date'=> '08/Dec,21'
 )
 ,
 array(
    'lname' =>'assadiq',
    'Payement-schedule'=>'First',
     'bill-number'=>'00012223',
     'amount-paid'=> '64738291',
      'balance-amount'=> '64738291',
      'date'=> '08/Dec,21'
 )
 ,
 array(
    'lname' =>'raouj',
    'Payement-schedule'=>'First',
     'bill-number'=>'00012223',
     'amount-paid'=> '64738291',
      'balance-amount'=> '64738291',
      'date'=> '08/Dec,21'
 )
,
array(
    'lname' =>'raouj',
    'Payement-schedule'=>'First',
     'bill-number'=>'00012223',
     'amount-paid'=> '64738291',
      'balance-amount'=> '64738291',
      'date'=> '08/Dec,21'
 )
 ,
 array(
    'lname' =>'elbokri',
    'Payement-schedule'=>'First',
     'bill-number'=>'00012223',
     'amount-paid'=> '64738291',
      'balance-amount'=> '64738291',
      'date'=> '08/Dec,21'
 )
 ,
 array(
    'lname' =>'nadir',
    'Payement-schedule'=>'First',
     'bill-number'=>'00012223',
     'amount-paid'=> '64738291',
      'balance-amount'=> '64738291',
      'date'=> '08/Dec,21'
 )
 ,
 array(
    'lname' =>'nqar',
    'Payement-schedule'=>'First',
     'bill-number'=>'00012223',
     'amount-paid'=> '64738291',
      'balance-amount'=> '64738291',
      'date'=> '08/Dec,21'
 )
 ,
 array(
    'lname' =>'assadiq',
    'Payement-schedule'=>'First',
     'bill-number'=>'00012223',
     'amount-paid'=> '64738291',
      'balance-amount'=> '64738291',
      'date'=> '08/Dec,21'
 )
 ,
 array(
    'lname' =>'raouj',
    'Payement-schedule'=>'First',
     'bill-number'=>'00012223',
     'amount-paid'=> '64738291',
      'balance-amount'=> '64738291',
      'date'=> '08/Dec,21'
 )

);
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap static/css/bootstrap.min.css ">
    <link rel="stylesheet" href="./bootstrap static/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>payment</title>
</head>

<body>
    
        <div class="row flex-nowrap  ">
            <?php include 'sidebar.php' ?>
            <div class="col py-1 " style="background-color: #E5E5E5;"> 
                <div class="our-webcoderskull padding-lg">
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
                            <tr class="height_70 bg-white mb-2 flex-wrap">
                                <td class="align-middle"><?php echo $lang['lname']; ?></td>
                                <td class="align-middle"><?php echo $lang['Payement-schedule'];?></td>
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
   

    
    <!-- <script src="./bootstrap static/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
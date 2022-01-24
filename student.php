
<?php
  $array_student =array(

     array(
       'name'=> 'jamal',
       'lname' =>'raouj',
       'email'=>'jamalrwj@gmail.com',
        'phone'=>'0463728464',
         'number'=> '64738291',
         'date'=> '08/Dec,21'
    )
    ,
   array(
      'name'=> 'abdesamad',
      'lname' =>'soiri',
      'email'=>'abdesamad@gmail.com',
       'phone'=>'0643542785',
        'number' =>'984563',
       'date' => '08/Jun,2021'
   )
   ,
   array(
     
    'name'=> 'jalil',
    'lname' =>'nadir',
    'email'=>'jalil@gmail.com',
     'phone'=>'0463284642',
      'number' =>'647382912',
     'date' => '08/Dec,212'
 )
 ,
 array(
    'name'=> 'abdeslam',
    'lname' =>'el boukri',
    'email'=>'abdesslam-elboukri@gmail.com',
     'phone'=>'04637284642',
      'number' =>'647382912',
     'date' => '08/Dec,212'
 )
 ,
  array(
    'name'=> 'mohammed',
    'lname' =>'maitit',
    'email'=>'mohammed@gmail.com',
     'phone'=>'04637284642',
      'number' =>'647382912',
     'date' => '08/Dec,212'
  ),
  array(
    'name'=> 'jamal',
    'lname' =>'raouj',
    'email'=>'jamalrwj@gmail.com',
     'phone'=>'0463728464',
      'number'=> '64738291',
      'date'=> '08/Dec,21'
 )
 ,
array(
   'name'=> 'abdesamad',
   'lname' =>'soiri',
   'email'=>'abdesamad@gmail.com',
    'phone'=>'0643542785',
     'number' =>'984563',
    'date' => '08/Jun,2021'
)
,
array(
  
 'name'=> 'jalil',
 'lname' =>'nadir',
 'email'=>'jalil@gmail.com',
  'phone'=>'0463284642',
   'number' =>'647382912',
  'date' => '08/Dec,212'
)
,
array(
 'name'=> 'abdeslam',
 'lname' =>'el boukri',
 'email'=>'abdesslam-elboukri@gmail.com',
  'phone'=>'04637284642',
   'number' =>'647382912',
  'date' => '08/Dec,212'
)
,
array(
 'name'=> 'mohammed',
 'lname' =>'maitit',
 'email'=>'mohammed@gmail.com',
  'phone'=>'04637284642',
   'number' =>'647382912',
  'date' => '08/Dec,212'
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
    <title>Student</title>
</head>

<body class=""> 
    
        <div class="row flex-nowrap  ">
            <!-- col-auto col-md-3 col-xl-2 px-sm-2 px-0 w-25 -->
            <?php include 'sidebar.php' ; ?>
            <div class=" col p-0 vh-100" style="background-color: #E5E5E5;"> 
                <div class="our-webcoderskull padding-lg">
                    
                <?php include 'nav.php';?>    
                 <div class="  ">
                       <div class="d-flex justify-content-between flex-wrap pb-2 px-3 border-bottom ">
                            <h2>Students List</h2>
                            <div class="d-flex align-items-center" >
                                <i class=" fa fa-sort Primary color_blue mr-2" aria-hidden="true"></i>
                                <button class="btn_signin border-0 rounded h-100 w-100 px-1 text-white">Add new student</button>
                            </div>
                      </div>
                      <div class=" table-responsive px-sm-3 overflow-scroll scroll_wdout_bar height_dash ">
                     <table class="dashboard_student table  ">
                       
                            <thead >
                                <tr >
                                    <th scope="col" ></th>
                                    <th scope="col">Name</th>
                                    <th scope="col"  >Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col" >Enroll number</th>
                                    <th scope="col" >Date of admission</th>
                                    <th scope="col" ></th>
                                </tr>  
                                
                            </thead>
                        <!-- ____________ -->
                         <tbody>
                             <?php foreach($array_student as $lang) :?>
                            <tr class="height_70 bg-white mb-2 flex-wrap">
                                <td scope="row"><img src="./img/students.png" alt=""></td>
                                <td class="align-middle"><?php echo $lang['name']; ?></td>
                                <td class="align-middle"><?php echo $lang['email'];?></td>
                                <td class="align-middle"><?php echo $lang['phone'];?></td>
                                <td class="align-middle"><?php echo $lang['number'];?></td>
                                <td class="align-middle"><?php echo $lang['date'];?></td>
                                <td class="align-middle  ">
                                    <div class="w-100  d-flex align-items-center justify-content-around">
                                    <i class="fa fa-pencil color_blue" aria-hidden="true"></i>
                                    <i class="fa fa-trash color_blue" aria-hidden="true"></i>
                                    </div>
                                </td>
                            </tr>
                            
                            <?php   endforeach ?>

                            
                        </tbody>
                    </table>
                </div>
                  </div>
                </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>

</html>
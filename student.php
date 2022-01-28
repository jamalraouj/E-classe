
<?php

    $string_students = file_get_contents("./fils-json/data-students.json");
    $array_students = json_decode($string_students, true);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'; ?> 
    <title>Student</title>
</head>

<body > 
    <main>
        <div class="row flex-nowrap  ">

            <?php include 'sidebar.php' ; ?>
            <div class="p-0 vh-100" style="background-color: #F8F8F8;"> 
                <div class="">
                    
                <?php include 'nav.php';?>    
                 <div class="  ">
                       <div class="d-flex justify-content-between flex-wrap pb-2 px-3 border-bottom ">
                            <h2>Students List</h2>
                            <div class="d-flex align-items-center" >
                                <i class=" fa fa-sort color_blue mr-2" aria-hidden="true"></i>
                                <button class="btn_signin border-0 rounded h-100 w-100 px-1 text-white">Add new student</button>
                            </div>
                      </div>
                      <div class="table-responsive px-sm-3 overflow-scroll scroll_wdout_bar height_dash">
                     <table class="dashboard_student table  " >
                       
                            <thead >
                                <tr>
                                    <th scope="col" ></th>
                                    <th scope="col">Name</th>
                                    <th scope="col"  >Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col" >Enroll number</th>
                                    <th scope="col" >Date of admission</th>
                                    <th scope="col" ></th>
                                </tr>
                                
                            </thead>
                                     
                         <tbody>
                         <?php 
                              foreach($array_students as $lang) :?>
                            <tr class="height_70 mt-2 bg-white flex-wrap">
                                <td><img src="./img/students.png" alt="profile"></td>
                                <td class="align-middle"><?php echo $lang['name']; ?></td>
                                <td class="align-middle"><?php echo $lang['email'];?></td>
                                <td class="align-middle"><?php echo $lang['phone'];?></td>
                                <td class="align-middle"><?php echo $lang['number'];?></td>
                                <td class="align-middle"><?php echo $lang['date'];?></td>
                                <td class="align-middle">
                                    <div class="w-100 d-flex align-items-center justify-content-around">
                                    <i class="fa fa-pencil color_blue " aria-hidden="true"></i>
                                    <i class="fa fa-trash color_blue pl-3" aria-hidden="true"></i>
                                    </div>
                                </td>
                            </tr>
                            
                         <?php endforeach ;?>

                        </tbody>
                    </table>
                </div>
                  </div>
                </div>
            </div>
        </div>
        <?php include 'includejs.php'; ?>
     </main>    
    </body>

</html>
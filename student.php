<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location:index.php');
}

// $string_students = file_get_contents("./fils-json/data-students.json");
    // $array_students = json_decode($string_students, true);
    include './crud-mysql/read-database.php' ;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'; 
    //include './crud-mysql/read-database.php';
    ?> 
    <title>Student</title>
</head>

<body > 
    <main class="">
        <div class="row flex-nowrap  ">

            <?php include 'sidebar.php' ; ?>
            <div class="p-0 col-10 vh-100" style="background-color: #F8F8F8;"> 
                <div class="">
                    
                <?php include 'nav.php';?>
                 <div class="">
                       <div class="d-flex justify-content-between flex-wrap pb-2 px-3 border-bottom ">
                            <h2>Students List</h2>
                            <div class="d-flex align-items-center" >
                                <i class=" fa fa-sort color_blue mr-2" aria-hidden="true"></i>
                                <button class="btn_signin border-0 rounded h-100 w-100 px-1 text-white"><a href="./add_student.php">Add new student</a></button>
                            </div>
                      </div>
                      <div class="table-responsive px-sm-3 overflow-scroll scroll_wdout_bar height_dash">
                     <table class=" table  " >
                       
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
                         if(mysqli_num_rows($result)>0){
                              while($row = mysqli_fetch_assoc($result)) {
                                  
                                  ?>
                            <tr class="height_70 mt-2 bg-white flex-wrap">
                                <td><img src="./img/students.png" alt="profile"></td>
                                <td class="align-middle"><?php echo $row["name"]; ?></td>
                                <td class="align-middle"><?php echo $row["email"];?></td>
                                <td class="align-middle"><?php echo $row["phone"];?></td>
                                <td class="align-middle"><?php echo $row["enroll_number"];?></td>
                                <td class="align-middle"><?php echo $row["date_of_admission"];?></td>
                                <td class="align-middle">
                                    <div class="w-100 d-flex align-items-center justify-content-around">
                                       <a href="./update_student.php?id=<?php echo $row['id'];?>"> <i class="fa fa-pencil color_blue " aria-hidden="true"></i></a>
                                       <a href="./crud-mysql/delete-database.php?id=<?php echo $row['id'];?>" >  <i class="fa fa-trash color_blue pl-3" aria-hidden="true"></i></a>
                                    </div>
                                </td>
                            </tr>
                             
                         <?php }  
                         } mysqli_close($conn); ?>

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
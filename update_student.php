
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; ?> 

    <title>Update | e-class</title>
</head>
<body>
    <main class="vh-100 d-flex justify-content-center align-items-center back" >
        <div class="col-lg-6 col-sm-8 col-md-7 ">
            <div class=" rounded-3 shadow bg-light p-3 ">
                <div class="d-flex flex-column ">
                    <div class="text-center d-flex justify-content-between">
                     <img class="width_23" src="./img/back.png" alt=""/>
                        <h1 >Update un utilisateur</h1>
                    </div>
                    <?php
                    include_once './crud-mysql/db-conn.php';
                    $id = $_GET['id'];
                    echo $id; 
                    $str_Sql= "SELECT `id`, `img`, `name`, `email`, `phone`, `enroll_number`, `date_of_admission` FROM `table_student` WHERE id = $id";

                    $result =mysqli_query($conn, $str_Sql);
                    $data=mysqli_fetch_assoc($result);
                    $name=$data['name'];
                    $email=$data['email'];
                    $phone=$data['phone'];
                    $enrol_number=$data['enroll_number'];
                    $date = $data['date_of_admission'];
                    
                    ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="img">Image</label>
                            <input type="file" class="form-control-file" name="img" id="img">
                        </div>
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo"$name"?> ">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"  value="<?php echo"$email"?>">
                        </div>
                        <div class="form-group">
                            <label for="phone">phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="<?php echo"$phone"?>">
                        </div>
                        <div class="form-group">
                            <label for="enroll_number">Enroll number</label>
                            <input type="number" class="form-control" name="enroll_number" id="enroll_number" value="<?php echo"$enrol_number"?>">
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" name="date" id="date" value="<?php echo"$date"?>">
                        </div>
                        <div class="form-group">
                            <input type="submit"  name="submit" class="btn btn-primary">
                        </div>
                    </form>
                    <?php
                    if(isset($_POST['submit'])){
                            $img = $_POST['img'];
                        
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            $enroll_number = $_POST['enroll_number'];
                            $date_of_admission = $_POST['date'];
                            
                            if($name && $email && $phone && $enroll_number && $date_of_admission){
                            $update = "UPDATE `table_student` SET `name`='$name',`email`='$email',`phone`='$phone',`enroll_number`='$enroll_number',`date_of_admission`='$date_of_admission' WHERE `id`=$id";
                            $result = mysqli_query($conn ,$update );
                            
                          header('location:student.php');
                          
                        }

                            mysqli_close($conn);

                            

      }
                    ?>
                </div>
            </div>
        </div>
    </main>
<!-- Code injected by live-server -->
  
</body>
</html>
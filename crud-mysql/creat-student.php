<?php
  include 'db-conn.php';
global $conn;

  if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enroll_number = $_POST['enroll_number'];
    $date_of_admission = $_POST['date'];
    
    if($name && $email && $phone && $enroll_number && $date_of_admission) {

 
    $add = "INSERT INTO `table_student`(`name`, `email`, `phone`, `enroll_number`, `date_of_admission`)
    VALUES ('$name','$email','$phone','$enroll_number','$date_of_admission')";
    $result = mysqli_query($conn ,$add );
    //$array_data = mysqli_fetch_assoc($result);
    //var_dump($result); 
  header('location:student.php');
}
    mysqli_close($conn);
    
}
?>
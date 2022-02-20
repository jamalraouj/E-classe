<?php 
   include_once ("db-conn.php");
global $conn;
   $query = "SELECT * FROM `table_payment`";//quary is string
   // $querycreat = ("INSERT INTO `table_student`(`id`, `img`, `name`, `email`, `phone`, `enroll_number`, `date_of_admission`) VALUES ( '',0,'mohammed',
   // 'mohammed@gmail.com','06343425216',42526,20211119)");
   // $first_row = mysqli_query($conn , $querycreat);
            
   $result = mysqli_query($conn , $query);

?>
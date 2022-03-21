<?php
   include 'db-conn.php';
   $id = $_GET['id'];
   $delete = "DELETE FROM `table_student` WHERE id = $id";
   mysqli_query($conn , $delete);
   mysqli_close($conn);
   header('location:../student.php');
 ?>
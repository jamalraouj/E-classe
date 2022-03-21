<?php

 include_once ("db-conn.php");
    $query = "SELECT * FROM `table_student`";//quary is string
    // $querycreat = ("INSERT INTO `table_student`(`id`, `img`, `name`, `email`, `phone`, `enroll_number`, `date_of_admission`) VALUES ( '',0,'mohammed',
    // 'mohammed@gmail.com','06343425216',42526,20211119)");
    // $first_row = mysqli_query($conn , $querycreat);
    $result = mysqli_query($conn , $query);//check connection  and taks $query(request)
   // {  if(mysqli_num_rows($result)>0){//if all rows in table >0 & return int
    //     while($row = mysqli_fetch_assoc($result)){//convert $result to array associative ...momkin array|null|false
    //          echo ("id: ".$row["id"]."image: ".$row["img"]."name: ".$row["name"] ."email: ".$row["email"].
    //          "phone: ".$row["phone"]."enroll number: ".$row["enroll_number"] ."date of admission: " .$row["date_of_admission"]. "</br>" );
    //     }//id img	name	email	phone	enroll_number	date_of_admission
    // }else{    
    //     echo "no record";
    // }

    //var_dump($result) ;
    //mysqli_close($conn);}

?>
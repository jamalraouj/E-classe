<?php

    $hostname='localhost';
    $username='root';
    $password='';
    $dname='employee';

    $conn=new mysqli ($hostname,$username,$password,$dname);
    // if(!$conn){
    //     echo "Error!! " ;
    // }
    // else{
    //     echo 'connected';
    // }
    if($conn -> connect_error){
        echo ("Error!! " . $conn->connect_error) ;
    }
?>
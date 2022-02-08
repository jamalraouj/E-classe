<?php 
    // MySQLi (object-oriented)
    // MySQLi (procedural) 
    // PDO
    // ____________
    //this code for: connect DATABASE(mysql)
    
    $hostname='localhost';
    $username='root';
    $password='';
    $dname='employese';
    //$conn=mysqli_connect($hostname,$username,$password,$dname);//mysqli_connect is function 
    $conn=new mysqli ($hostname,$username,$password,$dname);//mysqli is a class has 4 parameter
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
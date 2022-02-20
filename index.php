<?php
    session_start();
if(isset($_SESSION['email'])){
    header('location:dashboard.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
  <?php include 'head.php'; ?>

    <title>E-classe sign in</title>

  </head>
  <body>
    <?php
    include './crud-mysql/db-conn.php';

    ?>
    <main class="page_sign_in d-flex justify-content-center align-items-center vh-100">
       <section class=" card_sign_in container-md   bg-white border-2 pb-2 p-4  shadow">
          <form method="post" action="index.php" class="form_card">
            <div class="E_h3 " ><h3><span class="pl-2"></span>E-classe</h3></div>
            <p class="p_signin fs-5 mt-3 text-center ">SIGN IN</p>
            <p class="text-center text-muted">Enter your credentials to access your account</p>
            <div class="mb-2">
              <label for="exampleInputEmail1" class=" fw-bold text-muted">Email</label>
              <input  type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php get_info('email'); ?>" placeholder="Entre your email" >
             </div>
            <div class="mb-1">
              <label for="exampleInputPassword1" class="fw-bold text-muted">Password</label>
              <input type="password" name="pass" class="form-control" value="<?php get_info('pass'); ?>" id="exampleInputPassword1" placeholder="Entre your password" >
            </div>
            <div class="mb-2 form-check d-flex align-items-center">
              <input type="checkbox" name="remember" class="form-check-input " id="exampleCheck1">
              <label class="form-check-label fw-bold text-muted ml-3" for="exampleCheck1">Remember Me</label>
            </div>
<!--            <a  class="btn w-100 btn_signin text-white" href="./dashboard.php" >SIGN IN</a>-->
              <input  type="submit" name="submit" class="btn btn-primary btn w-100 btn_signin " >
            <p class="mt-3 text-center">Forgot your password? <a href="">Reset Password</a></p>
          </form><!--href="./dashboard.php" -->
       </section>
    </main>
<?php


//      start Validate form
//       setcookie('email',$email);
//       setcookie('pass',$pass);
//if(isset( $_COOKIE['email'])){
////    echo $_COOKIE['name'];
////    echo $_COOKIE['email'];
////    echo $_COOKIE['pass'];
//
//}
include './crud-mysql/db-conn.php';

    if  (isset($_POST['submit'])){

        $emails = $_POST['email'];
        $passr = $_POST['pass'];
        if($emails && $passr){
    //      start  Validate form
            $email= test_input($emails);
            $pass= test_input($passr);

    //        $row = select_users($email);
    //        print_r($row);
        try{
            $row = select_users($email);
             if($pass == $row['password']){
               $name= $row['name'];
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['pass'] = $pass;

               if(isset($_POST['remember'])){// if remember = on
                    setcookie('email' , $email ,time()+(3600*24),"/");//strtotime
                    setcookie('pass' , $pass , time()+(3600*24) ,"/");
               }

               header('location:dashboard.php');
           }
        }catch (Exception $e){
            echo 'error :'.$e->getMessage();
        }

    }
    }

    function test_input($data) {
        $data = trim($data);// || trim( $data=>delete spaces , text delete )
        $data = stripslashes($data);//delete back slash
        $data = htmlspecialchars($data);//read
        //var_dump($data);
        return $data;//r eturn string containes email or pass and all use function test_input();

}
    function select_users($var_email){
      global $conn;
        $sql_str = "SELECT * FROM `users` WHERE email = '$var_email'";
        $sql_obj = mysqli_query($conn ,$sql_str);
        $arr_assoc = mysqli_fetch_assoc($sql_obj);

         return $arr_assoc;

    }
    function get_info($var){
        if (isset($_COOKIE["$var"])){
            echo $_COOKIE["$var"];
        }
    }


   ?>
<!--           // echo $_COOKIE['name'];-->
    <?php global $conn; mysqli_close($conn); ?>
    <?php include 'includejs.php'; ?>
  </body>
</html>
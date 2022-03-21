

<!doctype html>
<html lang="en">
  <head>
  <?php include 'head.php'; ?>

    <title>E-classe sign up</title>

  </head>
  <body>

    <?php
    include './crud-mysql/db-conn.php';
    ?>
    <main class="page_sign_in d-flex justify-content-center align-items-center vh-100 ">
         <section class=" card_sign_in container-md   bg-white border-2 pb-2 p-4  shadow">
            <form name="myForm"  method="post" action="signup.php" class="form_card">
              <div class="E_h3 " ><h3><span class="pl-2"></span>E-classe</h3></div>
              <p class="p_signin fs-5 mt-3 text-center ">SIGN UP</p>
              <p class="text-center text-muted">Enter your credentials to access your account</p>
                <div class="bg-danger">
                    <p class="text-center" id="textShow"></p>
                </div>

                <div class="mb-2">
                     <label for="f_name" class=" fw-bold text-muted">Name</label>
                     <input  type="text" class="form-control" id="f_name" name="name"  placeholder="Entre your name" >
                </div>
              <div class="mb-2">
                <label for="exampleInputEmail1" class=" fw-bold text-muted">Email</label>
                <input  type="text" class="form-control" id="exampleInputEmail1" name="email" value=""  placeholder="Entre your email" >
               </div>
              <div class="mb-1 ">
                <label for="exampleInputPassword1" class="fw-bold text-muted">Password</label>
                <input type="password" name="pass" class="form-control" value="" id="exampleInputPassword1" placeholder="Entre your password" >
              </div>
                <input  type="submit" name="submit" value="Sign Up" class="btn btn-primary btn w-100 btn_signin mt-3" >


                <p class="mt-3 text-center">You have an account <a href="./index.php">Sign In</a></p>
            </form><!--href="./dashboard.php" -->
         </section>
      </main>

    <?php
            if(!empty($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];

                global $conn;
                $sql = "SELECT `email` FROM `users` WHERE `email`  = '$email'";
                $sql_obj = mysqli_query($conn, $sql);
                $aql_assoc = mysqli_fetch_assoc($sql_obj);
                if ($aql_assoc === null) {
                    $sql = "INSERT INTO `users`(`id`, `name`, `email`, `password`) VALUES ('','$name','$email','$pass')";
                    mysqli_query($conn, $sql);
                    echo "<script> window.location.href='index.php';</script>";

                }
            }

     ?>

    <?php global $conn; mysqli_close($conn);?>
    <?php include 'includejs.php'; ?>

    <script>
        //var submit = document.getElementByName('submit');
        let form = document.myForm;
        var check = false;
        function validate() {
            if( document.myForm.name.value == "") {
                document.getElementById('textShow').innerText = "Please provide your name!";
                document.myForm.name.focus() ;
                return false;
            }
            if( document.myForm.email.value == "" ) {
                document.getElementById('textShow').innerText = "Please provide your Email!";
                document.myForm.email.focus() ;
                return false;
            }
            if( document.myForm.pass.value == "" ) {
                document.getElementById('textShow').innerText = "Please provide your Password!";
                document.myForm.pass.focus() ;
                return false;
            }

            isEmailValid(document.myForm.email.value);
            //isPassValid();


        }
        function isEmailValid(email){

            const emailRegexp = new RegExp(
                 /^[a-zA-Z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1}([a-zA-Z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1})*[a-zA-Z0-9]@[a-zA-Z0-9][-\.]{0,1}([a-zA-Z][-\.]{0,1})*[a-zA-Z0-9]\.[a-zA-Z0-9]{1,}([\.\-]{0,1}[a-zA-Z]){0,}[a-zA-Z0-9]{0,}$/i

            )
            if(emailRegexp.test(email) ){
                check = true;
            }
            return emailRegexp.test(email);
        }
        function isPassValid(){}//==========="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$"
        form.addEventListener( 'submit', (e)=>{
            validate();
            if(check === false){
                e.preventDefault();
            }
        })

    </script>

  </body>
</html>
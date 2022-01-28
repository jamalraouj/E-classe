<!doctype html>
<html lang="en">
  <head>
  <?php include 'head.php'; ?> 

    <title>E-classe sign in</title>

    
  </head>
  <body>

    <main class="page_sign_in d-flex justify-content-center align-items-center vh-100">
       <section class=" card_sign_in container-md   bg-white border-2 pb-2 p-4  shadow">
          <form class="form_card">
            <div class="E_h3 " ><h3><span class="pl-2"></span>E-classe</h3></div>
            <p class="p_signin fs-5 mt-3 text-center ">SIGN IN</p>
            <p class="text-center text-muted">Enter your credentials to access your account</p>
            <div class="mb-2">
              <label for="exampleInputEmail1" class=" fw-bold text-muted">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entre your email" >
             </div>
            <div class="mb-1">
              <label for="exampleInputPassword1" class="fw-bold text-muted">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entre your password">
            </div>
            <div class="mb-2 form-check d-flex align-items-center">
              <input type="checkbox" class="form-check-input " id="exampleCheck1">
              <label class="form-check-label fw-bold text-muted ml-3" for="exampleCheck1">Remember Me</label>
            </div>
            <a  class="btn w-100 btn_signin text-white" href="./dashboard.php"  >SIGN IN</a>
            <p class="mt-3 text-center">Forgot your password? <a href="">Reset Password</a></p>
          </form>
       </section>
    </main>
    <?php include 'includejs.php'; ?>
  </body>
</html>
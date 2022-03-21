<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; ?> 
    <title>Ajoute | e-class</title>
</head>
<body>
    <main class="vh-100 d-flex justify-content-center align-items-center back" >
        <div class="col-lg-6 col-sm-8 col-md-7 ">
            <div class=" rounded-3 shadow bg-light p-3 ">
                <div class="d-flex flex-column ">
                    <div class="text-center d-flex justify-content-between">
                     <img class="width_23 " src="./img/back.png" alt=""/>
                        <h1 >Ajouter un utilisateur</h1>
                    </div>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="img">Image</label>
                            <input type="file" class="form-control-file" name="img" id="img">
                        </div>
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" >
                        </div>
                        <div class="form-group">
                            <label for="phone">phone</label>
                            <input type="text" class="form-control" name="phone" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="enroll_number">Enroll number</label>
                            <input  type="number" class="form-control" name="enroll_number" id="enroll_number">
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" name="date" id="date">
                        </div>
                        <div class="form-group">
                            <label for="promo">Promo</label>
                            <input type="text" class="form-control" name="promo" id="promo">
                        </div>

                        <div class="form-group">
                            <input type="submit"  name="submit" class="btn btn-primary">
                        </div>
                    </form>
                    <?php
                    
                         include './crud-mysql/creat-student.php';

                    ?>
                </div>
            </div>
        </div>
    </main>
<!-- Code injected by live-server -->

</body>
</html>
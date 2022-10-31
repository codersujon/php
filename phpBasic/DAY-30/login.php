<?php require_once 'header.php'?>


    <!-- Login Page Start -->
    <div class="login vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4 ">

                <?php 
                    session_start();
                    if(isset($_SESSION["userinfo"])){
                        header("Location: dashboard.php");
                    }

                    if(isset($_POST['login'])){
                        $user =  $_POST['username'];
                        $pass= $_POST['password'];

                        if ($user == "admin" || $user == "csesujon155@gmail.com" && $pass == "1234") {
                                header('Location: dashboard.php');
                                $_SESSION['userinfo'] = $user;
                                
                        } else {
                            echo '<div class="alert alert-danger fade-in-down">
                                    <strong>Error:</strong> Your user ID or password is incorrect!
                                  </div>';
                        }
                    }
                ?>
                    <div class="login__form bg-light p-5 my-5 rounded border border-primary">
                        
                        <form action="" method="POST">
                            <div class="form-group mb-4">
                                <label for="username">User Name or Email</label>
                                <input type="text" name="username" id="username" class="form-control border border-primary" placeholder="Username / Email Address">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control border border-primary" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" name="login">Login</button>
                            </div>
                        </form>
                        <p>Are you new member? <a href="registration.php"> Register Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Page End -->

    <?php require_once 'footer.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Styles Include -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>

<body>

    <!-- Login Page Start -->
    <div class="login py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4 ">
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
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Page End -->


    <!-- JS Include -->
    <script src="./assets/js/jquery-3.6.1.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
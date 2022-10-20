<?php  ?>

<?php 
    require 'classes.php';
    $r = new Result();

    if(isset($_POST["submit"])){
       $num1 =  $_POST["num1"];
       $num2 =  $_POST["num2"];
       $totalNumber = $r-> sum($num1, $num2);
       $grade = $r->grade($totalNumber);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class, Methods and Object</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- RESULT START HERE-->
    <div class="result py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-3 text-center text-primary">Result with Grade</h1>
                    <hr>
                    <!-- FORM START HERE-->
                    <form action="" method="POST" class="py-4">
                        <div class="row">
                            <div class="col col-sm-2">
                          <input type="text" name="num1" placeholder="Enter First Number" class="form-control" value="<?php if(isset($_POST["submit"])){echo $num1;}?>">
                            </div>
                            <div class="col col-sm-2">
                              <input type="text" name="num2" placeholder="Enter Second Number" class="form-control" value="<?php if(isset($_POST["submit"])){echo $num2;}?>">
                            </div>
                            <div class="col col-sm-2">
                              <input type="text" value="<?php if(isset($_POST["submit"])){echo $totalNumber;}?>" placeholder="Total Number" class="form-control">
                            </div>
                            <div class="col col-sm-2">
                                 <input type="text" value="<?php if(isset($_POST["submit"])){echo $grade;}?>" placeholder="Grade" class="form-control">
                            </div>
                            <div class="col col-sm-2">
                                 <button name="submit" class="btn btn-outline-primary">Result</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- RESULT END -->
</body>
</html>
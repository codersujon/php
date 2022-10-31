<?php require_once 'header.php' ?>

<?php 
    session_start();
    if(!isset($_SESSION["userinfo"])){
       header("location: login.php"); 
    }

?>


<!-- Dashboard Start -->
<div class="dashboard text-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 m-0 p-0">
               <div class="sidebar bg-primary vh-100 p-5 w-25 ">
                    <h1 class="display-4 py-4">Dashboard</h1>
                    <ul class="list-inline fs-4 mt-5">
                        <li class="p-2"><a href="#" class="text-decoration-none text-light">Home</a></li>
                        <li class="p-2"><a href="#" class="text-decoration-none text-light">User Control</a></li>
                        <li class="p-2"><a href="#" class="text-decoration-none text-light">Add Product</a></li>
                        <li class="p-2"><a href="#" class="text-decoration-none text-light">Manage Product</a></li>
                        <li class="p-2"><a href="logout.php" class="text-decoration-none text-light">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard End -->




<?php require_once 'footer.php' ?>
<?php include "include\session.php"?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GrowthPad Admin Login</title>
    <link rel="icon" type="image/png" href="images/Growthpad Icon.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;1,100&display=swap" rel="stylesheet">
</head>

<script type = "text/javascript"> 

(function() 
{
'use strict';
window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();

</script> 

<body class="h-100">

    <!-- Start your project here-->
    <div class="container-fluid h-100">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-md-6 col-12">

                    <form name="adminlogin" method="POST" action="#" class="needs-validation" class="position-relative" novalidate id="form">                  
                        <div>
                        <div class="logo position-absolute">
                            <a href="."> <img src="images/Growthpad Icon.png" alt="GrowthPad Logo"> </a>
                        </div>
                        <div class="form-heading pt-5 mb-5 text-center">
                            <h4>Admin Login</h4>
                        </div>

                        <div class="form-group position-relative">
                            <input name="username" type="text" class="form-control p-4 rounded-pill" id="validationCustom03" placeholder="Username" required>
                            <span class="invalid-feedback"> Username is Required. </span>
                            
                            <!-- <span class="px-3 position-absolute rounded-lg" class="errorMsg">This Field can't be empty <i class="fas fa-caret-up"></i></span>

                            <i class="fa fa-exclamation-circle position-absolute  py-3 wrong" aria-hidden="true"></i> -->
                        </div>
                        

                        <div class="form-group position-relative" data-validate="Password is Required">
                            <input name="password" type="password" class="form-control p-4 rounded-pill" id="validationCustom01" placeholder="Password" required>
                            <span class="invalid-feedback"> Password is Required. </span>
                            <!-- <span class="invalid-feedback px-3 position-absolute rounded-lg" class="errorMsg">This Field can't be empty <i class="fas fa-caret-up"></i></span>

                            <i class="fa fa-exclamation-circle position-absolute  py-3 wrong" aria-hidden="true"></i> -->
                        </div>
                       

                        <div class="form-group">
                            <input type="submit" value="Login" name=submit class="loginBtn w-100 rounded-pill">
                        </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
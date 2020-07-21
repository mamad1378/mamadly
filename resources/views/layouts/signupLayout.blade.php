<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/signup.css">
    <title>@yield('signupTitle')</title>
</head>
<body >
    <div class="row h-100">
        <div class="col-4 d-none d-sm-block m-0 p-0 bg-danger">
            <img src="/img/newspaper1.jpg" class="w-100 h-100" alt="">
        </div>
        <div class="col-lg-6 col-sm-8">
            <div class="container-fluid  h-100 d-flex align-items-center">
               @yield('form')
            </div>
        </div>
        
    </div>
    <script src="css/bootstrap/bootstrap.min.js"></script>
    <script src="css/bootstrap/jquery-3.5.1.slim.min.js"></script>
    <script src="css/bootstrap/popper.min.js"></script>
</body>
</html>
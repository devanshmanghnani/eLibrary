<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <!-- End Bootstrap -->

    <!--Compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- end compiled js -->

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/36a236c794.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5ec862f73b.js" crossorigin="anonymous"></script>

    <!-- End Font Awesome -->


    <!-- Google Font Link -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;600&family=Source+Sans+Pro:wght@200;300;400;600;700&display=swap"
        rel="stylesheet">
    <!-- End Google Font Link -->

    <!-- Css Link -->
    <link rel="stylesheet" href="openlib.css">
    <!-- End Css Link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body style="background:url(bgs/bg10.jpg); background-size:cover;">
    
    <section class="lgn_section w-100 bod">
        <div class="container h-100">
            <div class="row jcc bod lgn_sec--inner" style="margin-top: 6rem;">
                 <!-- form section -->
                
                    <div class="col-md-4 cont_card  bod pxy1">
                        
                        <!-- Logo  -->
                        <div class="row mxy1">
                            <div class="col-12 p-0 mb4 text-center">
                                <img src="prject_img/iconfinder-white.svg" alt="" style="width:25%;">
                            </div>
                        </div>
                        <!-- End Logo -->
                        <form action="checklogin.php" method="post">
                    
                        <div class="row jcse">
                
                        <div class="col-md-12 col-12 bod">
                                <div>
                                    <label for="user" class="bold5 lbl">Username:</label>
                                </div>
                                <input type="text" class="cont_input" name="n" placeholder="Username" required>
                            </div>
                            <div class="col-md-12 col-12 bod m3">
                                <div>
                                    <label for="pass" class="bold5 lbl">Password:</label>
                                </div>
                                <input type="password" class="cont_input" name="p" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="m2">
                            <button type="submit" class="cont_btn mbtn w-100 bold5 txtc" value="Send">
                                Login</button>
                        </div>
                </form> 
                    <!--form section end-->
                </div>
            </div>
        </div>
    </section>
</body>   
</html>



<!-- FOR CATEGORY VIEW AND PDF DISPLAY -->

<html>
<head>
    <title> open library</title>


        

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>test</title>

        <!-- Bootstrap Css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- End Bootstrap -->

        <!-- Bootstrap Js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- End Bootstrap -->

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/36a236c794.js" crossorigin="anonymous"></script>
        <!-- End Font Awesome -->

        <!-- Css -->
        <link rel="stylesheet" href="openlib.css">
        <!-- end Css -->
    
        </head>
        <body>
              <!--header  -->
        <header class="head_bg">
            <div class="container">
                <div class="row aic py-4">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-5 p-2 bod text-center">
                        <img src="prject_img/opl2.jpg" class="logo_wid bod">
                    </div>

                    <!-- bootstrap dropdown -->

                    <div class="col-lg-1 col-6 col-md-2 bod mhide thide me-5">

                        <div class="dropdown">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                          Discover
                        </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="openlib.php">Home</a></li>
                                <li><a class="dropdown-item" href="contactus.php">ContactUs</a></li>
                                <li><a class="dropdown-item" href="aboutus.php">AboutUs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-4  mhide p-0">
                        <form class="d-flex mb-0">
                            <input class="form-control me-2" type="text" placeholder="Search">
                            <button class="btn btn-primary" type="button">Search</button>
                        </form>
                    </div>

                    <div class="col-lg-5 col-md-2 col-4  mhide p-0 txte ">
                        <button class="head_links">
                        <a href="adminlogin.php">ADMIN LOGIN</a>
                    </button>
                    </div>
                    <div class="col-md-1 col-sm-8 col-7 dhide mblock tblock txtr">
                        <button class="head_micon"><i class="fas fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </header>
        <!-- header -->

        

        <!--CATEGORIES-->
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
            <?php  $category=$_REQUEST["a"];
             ?>
                <h4 style="text-transform:uppercase"><?php echo $category; ?> BOOKS</h4>
                </div>
            </div>
            <div class="row">
            <?php
            $con=mysqli_connect("localhost","root","","ebooks");
            
            $r=mysqli_query($con,"select * from  addbook where b_category='$category'");
            while($row=mysqli_fetch_array($r)){
            ?>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-12 ">
                  
                        <a href="pdf/<?php echo $row[5]; ?>" target='_blank'>
                        <img src="photos/<?php echo $row[3] ?>" class=" pop_img" alt="...">
                    </a>
                </div>
                <?php } ?>
               
        </div>

          <!-- footer -->
          <section class="footer_1 mt-5">
            <div class="container ">
                <div class="row aic">
                    <div class="col-lg-3">
                        <h5 class="wht mb-4">Library</h5>
                        <ul class="footer_link">
                            <li>
                                <a href="#">Genres</a>
                            </li>
                            <li>
                                <a href="#">Languages</a>
                            </li>
                            <li>
                                <a href="#">Authors</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h5 class="wht mb-4">Community</h5>
                        <ul class="footer_link">
                            <li>
                                <a href="#">Articles</a>
                            </li>
                            <li>
                                <a href="#">Author Interviews</a>
                            </li>
                            <li>
                                <a href="#">Newsletter</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h5 class="wht mb-4">Company</h5>
                        <ul class="footer_link">
                            <li>
                                <a href="#">Author Services</a>
                            </li>
                            <li>
                                <a href="#">About/Contact</a>
                            </li>
                            <li>
                                <a href="#">Accessibility Statement</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h5 class="wht mb-4">Follow</h5>
                        <ul class="footer_link">
                            <li>
                                <a href="#">Facebook</a>
                            </li>
                            <li>
                                <a href="#">Twitter</a>
                            </li>
                            <li>
                                <a href="#">Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row aic">
                    <div class="col-lg-6 col-md-5 col-sm-6 col-7 txts">
                        <p class="wht mb-0">Copyright © 2021 Codevweb.com</p>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-6 col-5 txtr">
                        <p class="wht mb-0">Terms - Privacy</p>
                    </div>
                </div>
            </div>
        </section>





       

</body>
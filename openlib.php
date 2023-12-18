<!-- HOOME PAGE -->

<html>
<head>
    <title> open library</title>

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>test</title>

        <!-- Bootstrap Css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- End Bootstrap -->

        <!-- Bootstrap Js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                                <li><a class="dropdown-item" href=contactus.php>ContactUs</a></li>
                                <li><a class="dropdown-item" href="aboutus.php">AboutUs</a></li>
                                <!--<li><a class="dropdown-item" href="#">Link 3</a></li>-->
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

        <!-- Carousel -->

        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="prject_img/bookdisplaysmall.jpg" class="d-block w-100">
                    <div class="carousel-caption">
                        <h2>LOTS OF EBOOKS. 100 % FREE</h2>
                        <p class="mhide">Welcome to your friendly neighborhood library. We have more than 50,000 free ebooks waiting to be discovered.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="prject_img/bookcoverssmall2.jpg" class="d-block w-100">
                    <div class="carousel-caption">
                        <h2>FREE AND DISCOUNTED BESTSELLERS</h2>
                        <p class="mhide">Join 150,000+ fellow readers. Get free and discounted bestsellers straight to your inbox with the ManyBooks eBook deals newsletter. </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="prject_img/bookstackssmall.jpg" class="d-block w-100">
                    <div class="carousel-caption">
                        <h2>The Ultimate Guide to Free eBooks</h2>
                        <p class="mhide">Not sure what to read next? Explore our catalog of public domain books with our editors. Some real gems are hidden in our library. </p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <!-- Carousel -->

        <!-- Genre section -->
        <div class="container mrg">
            <div class="row mb-3">
                <div class="col-12">
                    <h4>CATEGORIES (View all)</h4>
                </div>
            </div>
            <div class="row">
            <?php
            $con=mysqli_connect("localhost","root","","ebooks");
            $r=mysqli_query($con,"select * from  category");
            while($row=mysqli_fetch_array($r)){
            ?>
            <div class="col-sm-2">
                    <a href="#">
                        <div class="card bg-dark text-white">
                        
                          <img src="cphoto/<?php  echo $row[2];?>" class="card-img position-relative" alt="...">
                            <div class="card-img-overlay position-absolute">
                                <h5 class="card-title">  <a href='bf.php?a=<?php echo $row[1]; ?>'> 
                                <?php echo $row[1]; ?></a></h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>

            </div>
        </div>

        <!-- Genre section -->

        <!--Popular Classics-->
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <h4>Popular Books</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-12 ">
                    <a href="PopBooks/the_great_indian_novel.pdf" target="_blank">
                        <img src="prject_img/50.jpg" class=" pop_img" alt="...">
                    </a>
                </div>
                <div class="col-lg-2  col-md-3 col-sm-3 col-6">
                    <a href="PopBooks/HAUNTED.pdf" target="_blank">
                        <img src="prject_img/60.jpg" class=" pop_img" alt="...">
                    </a>
                </div>
                <div class="col-lg-2  col-md-3 col-sm-3 col-12">
                    <a href="PopBooks/sachin%20bio.pdf" target="_blank">
                        <img src="prject_img/30.jpg" class=" pop_img" alt="...">
                    </a>
                </div>
                <div class="col-lg-2  col-md-3 col-sm-3 col-12">
                    <a href="PopBooks/I%20Too%20Had%20a%20Love%20Story.pdf" target="_blank">
                        <img src="prject_img/20.jpg" class=" pop_img" alt="...">
                    </a>
                </div>
                <div class="col-lg-2  col-md-3 col-sm-3 col-6">
                    <a href="PopBooks/srimad_bhagavad_gita2.pdf" target="_blank">
                        <img src="prject_img/11.jpg" class=" pop_img" alt="...">
                    </a>
                </div>
                <div class="col-lg-2  col-md-3 col-sm-3 col-12">
                    <a href="PopBooks/Half%20Girlfriend.pdf" target="_blank">
                        <img src="prject_img/40.jpg" class=" pop_img" alt="...">
                    </a>
                </div>
                
            </div>
           
                

            </div>
        </div>

        <!-- blog -->
        <div class="container mrg">
            <div class="row mb-3">
                <div class="col-12">
                    <h4>From The Blog (View all)</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <a href="blog1.html">
                        <img src="prject_img/horoscope-g28904cb68_1920.jpg" class="w-100">
                    </a>
                    <h5 class="my-3">Books Like The Mirror Sisters</h5>
                </div>
                <div class="col-lg-6">
                    <a href="blog2.html">
                        <img src="prject_img/alittlered8.jpg" class="w-100">
                    </a>
                    <h5 class="my-3">A Little Red, 3 Colors Trilogy, Bethany Maines</h5>
                </div>
            </div>
        </div>
        <!--blog -->


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

<!-- javascript -->
        <script>
            $(document).ready(function() {
                var owl = $('.owl-carousel');
                owl.owlCarousel({
                    margin: 10,
                    nav: true,
                    loop: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 5
                        }
                    }
                })
            })
        </script>
 </body>
</html>
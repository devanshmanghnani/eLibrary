<!-- CODE FOR CONTACT US -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUs</title>

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
<body style="background:url(bgs/bg1.jpg); background-size:cover;">
    <section class="section-s cont_bck w-100 m-1">
        <div class="container bod">
            <div class="row jcc" >
                <div class="col-lg-6 bod mt">
                    <form action="contact.php" method="post">
                        <div  class="cont_card bod">
                            <div class="row jcse">
                                <div class="col-md-6 col-12 bod">
                                    <div>
                                        <label for="fname" class="bold5 lbl">First Name:</label>
                                    </div>
                                    <input type="text" class="cont_input" name="fname" placeholder="First name" required>
                                </div>
                                <div class="col-md-6 col-12 bod">
                                    <div>
                                        <label for="lname" class="bold5 lbl">Last Name:</label>
                                    </div>
                                    <input type="text" class="cont_input" name="lname" placeholder="Last name" required>
                                </div>
                            </div>

                            <div class="row m3">
                                <div class="col-md-12 col-12 bod p-0">
                                    <div>
                                        <label for="email" class="bold5 lbl">Email:</label>
                                    </div>
                                    <input type="email" class="cont_input cont_email w-100" name="email" placeholder="Email"
                                        required>
                                </div>
                            </div>

                            <div class="row m3">
                                <div class="col-md-12 col-12 bod p-0">
                                    <div>
                                        <label for="message" class="bold5 lbl">Message:</label>
                                    </div>
                                    <input type="text" class="cont_input cont_email w-100" name="message"
                                        placeholder="Message" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div>
                                        <label for="description" class="bold5 lbl">Additional Details:</label>
                                    </div>
                                    <textarea name="description" class="cont_textarea" rows="5" cols="54" placeholder="Write Your Concern Here!"></textarea>
                                </div>
                            </div>

                            <div class="row m2">
                                <div class="col-md-12 col-12 p-0">
                                    <button type="btn" class="cont_btn mbtn w-100 bold5 txtc" value="Send">Send Message</button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-12 lbl">
                                    <h5 class="bold5 option_title m4 ltag pd">Contact Information</h5>
                                    <div class="pd cont_icon m2">
                                        <i class="fas fa-map-pin px1"></i>
                                        <span>Monnos 90A, 8200 Aarhus</span><br>
                                    </div>
                                    <div class="m1 pd cont_icon">
                                        <i class="fas fa-phone-alt px1"></i>
                                        <span>+457199770766</span>
                                    </div>
                                    <div class="pd cont_icon">
                                        <i class="fas fa-envelope px1"></i>
                                        <span>mail@monnos.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>    
                </div>
            </div>
        </div>    
    </section>
</body>
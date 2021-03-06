<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Pirares Hotel</title>

    <!--icon-->
    <link rel="shortcut icon" type="icon" href="asset/img/icon-hotel.png">
    
    <!--Bootstrap 4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--CSS import-->
    <link rel="stylesheet" href="asset/js/jquery-ui-1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="asset/css/normalize.min.css">
    <link rel="stylesheet" href="asset/css/main.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="asset/fonts/fontawesome-free-5.13.0-web/css/all.css">
   
    <!--font familly-->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;700&display=swap" rel="stylesheet">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="asset/js/jquery-ui-1.12.1/jquery-ui.js"></script>
    
</head>
<body>
    <div id="home">
        <!--NAVIGATION-->
        <nav class="navbar navbar-expand-xl  navbar-light bg-light sticky-top" id="navbar">
            <a class="navbar-brand" href="./index.php">THE PIRATES</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#aboutUs">ABOUT US<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#rooms">ROOMS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#promotions">PROMOTIONS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact-us">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="asset/view/account.php">ACCOUNT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- BUTTON BACK TO TOP -->
        <a href="#home" class="back-to-top-button"><i class="fas fa-angle-up"></i></a href="#">

        <!-- BACKGROUND ####################################################################33 -->
        <div class="container-fluid homePage__background" style="background-image: url(./asset/img/index.jpg);"></div>
        
        <!-- HOME ############################################################################3 -->
        <div class="container homePage">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="homePage__description">         
                        <h1>The Pirates <span style="color: (--beachColor);">A Luxury Hotel</span></h1>
                        <p>Here are the best hotel booking sites, including recommendations for international
                        travel and for finding low-priced hotel rooms.</p>
                        <a class="button" href="#" style="transform: 3s;">Discover Now <i id="arrow-down-discover" style="margin-left: 20px;" class="fas fa-long-arrow-alt-down"></i> </a>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="homePage__formRegister">
                        <h3>Booking Your Hotel</h3>
                        <form action="asset/Controller/addCheckin.php" method="POST">
                            <div class="form__check-date">
                                <label for="check-in">Check in:</label>
                                <input class="datePicker" type="text" name="checkIn" id="check-in-date-id" placeholder="dd/mm/yy" required>
                                
                            </div>
                            <div class="form__check-date">
                                <label for="check-out">Check out:</label>
                                <input class="datePicker" type="text" name="checkOut" id="check-out-date-id" placeholder="dd/mm/yy" required>
                            </div>
                            <div class="form__number">
                                <label for="guests">Guests:</label>
                                <input type="number" id="number-guests" name="guest" value="1" min="1" max="30" required>
                            </div>
                            <div class="form__number">
                                <label for="rooms">Rooms:</label>
                                <input type="number" id="number-rooms" name="room" value="1" min="1" max="5" required>
                            </div>
                            <button class="button" id="submitForm" type="submit">Check Availability</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- ABOUT US ############################################3 -->
        <div class="container aboutUs" id="aboutUs">
            <div class="row space">
                <div class="col-lg-6 col-12">
                    <div class="desc__aboutUs">
                        <div class="aboutUs__title">
                            <span>About us</span>
                            <h2>The Pirares Hotel</h2>
                        </div>
                        <div class="aboutUS__para">
                            <p>thepirateshotel.com is a leading online accommodation site. We’re passionate about travel. Every day, we inspire and reach millions of travelers across 90 local websites in 41 languages.</p>
                            <p>So when it comes to booking the perfect hotel, vacation rental, resort, apartment, guest house, or tree house, we’ve got you covered.</p>
                        </div>
                        <div class="readmore">
                            <a href="#" class="button">See Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="img__aboutUs">
                        <img class="rounded mx-auto d-block" src="asset/img/img-bg3-beach.jpg" alt="Beach" width="100%">
                    </div>
                </div>
            </div>
        </div>


        <!-- ROOM ##################################################3 -->
        <div class="container-fluid rooms" id="rooms">
            <div class="row justify-content-md-center rooms__desc">
                <div class="col-lg-6 desc__rooms">
                    <h2>Rooms & Suites</h2>
                    <p>Are you looking to surprise that someone special
                        with a romantic getaway, or you want to enjoy 
                        a culinary party until the sun goes down and 
                        can relax while enjoying a car ride? Great bike
                        ride on the sand dunes? We currently offer 9 
                        special arrangements for entertainment on another level.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-12 img__rooms-card">
                    <div class="card shadow rooms-card__items">
                        <div class="scale-img">
                            <img class="card-img-top" src="./asset/img/img-single-room-index.jpg" alt="Single Room">
                        </div>
                        <div class="card-body card-rooms-body">
                            <h5 class="card-title">SINGLE ROOM </h5>
                            <div class="card-rooms-body__price">
                                <span>from</span>
                                <sup>$</sup>
                                <span style="font-weight: 400; font-size: 50px;">60</span>
                                <span>/ per night</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12 img__rooms-card">
                    <div class="card shadow rooms-card__items">
                        <div class="scale-img">
                            <img class="card-img-top" src="./asset/img/img-delux-room-index.jpg" alt="Single Room">
                        </div>
                        <div class="card-body card-rooms-body">
                            <h5 class="card-title">DELUXE ROOM </h5>
                            <div class="card-rooms-body__price">
                                <span>from</span>
                                <sup>$</sup>
                                <span style="font-weight: 400; font-size: 50px;">70</span>
                                <span>/ per night</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12 img__rooms-card">
                    <div class="card shadow rooms-card__items">
                        <div class="scale-img">
                            <img class="card-img-top" src="./asset/img/img-family-room-index.jpg" alt="Single Room">
                        </div>
                        <div class="card-body card-rooms-body">
                            <h5 class="card-title">FAMILY ROOM </h5>
                            <div class="card-rooms-body__price">
                                <span>from</span>
                                <sup>$</sup>
                                <span style="font-weight: 400; font-size: 50px;">75</span>
                                <span>/ per night</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12 img__rooms-card">
                    <div class="card shadow rooms-card__items">
                        <div class="scale-img">
                            <img class="card-img-top" src="./asset/img/img-president-room-index.jpg" alt="Single Room">
                        </div>
                        <div class="card-body card-rooms-body">
                            <h5 class="card-title">PRESIDENT ROOM </h5>
                            <div class="card-rooms-body__price">
                                <span>from</span>
                                <sup>$</sup>
                                <span style="font-weight: 400; font-size: 50px;">80</span>
                                <span>/ per night</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-md-center row__btnShowMore">
                <div class="col-lg-6 showmore">
                        <a href="asset/View/rooms.php">Show all rooms</a>
                </div>
            </div>
        </div>

        <!-- PROMOTIONS ####################################### -->
        <div class="container-fluid promotion" style="background: url('./asset/img/img-bg2.jpg');">
            <div class="container">
                <div class="row row-promotions__title">
                    <div class="col-lg-12 promotions-title">
                        <h2>Promotions</h2>
                        <p style="font-size: 18px;">Our hotel has extremely interesting offers, making your trip as complete as possible.</p>
                    </div>
                </div>
                <div class="row row-promotions__offers">
                    <div class="col-xl-4 col-md-6 col-12 img__promotions-card">
                        <div id="offer01" class="card shadow promotions-card__items">
                            <div class="scale-img">
                                <img class="card-img-top" src="./asset/img/img-promotion-booking.jpg" alt="Booking offer">
                            </div>
                            <div class="card-body card-promotions-body">
                                <div class="name-promotions">
                                    <h5 class="card-title">Rooms Sale off up to 10%</h5>
                                </div>
                                <div class="script-promotions">
                                    <span>Come to our hotel on weekdays, you will receive a discount of up to 10%.</span>
                                </div>
                                <a id="" href="#" class="button">See Detail</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">From Monday to Friday every week</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 img__promotions-card">
                        <div id="offer02" class="card shadow promotions-card__items">
                            <div class="scale-img">
                                <img class="card-img-top" src="asset/img/img-promotion-buffet.jpg" alt="Buffet offer">
                            </div>
                            <div class="card-body card-promotions-body">
                                <div class="name-promotions">
                                    <h5 class="card-title">Buffet from 15$</h5>
                                </div>
                                <div class="script-promotions">
                                    <p>If you want to eat at our restaurant, with every 
                                        buffet there are many dishes from Asia to Europe 
                                        for only $ 15 per person.</p>
                                </div>
                                <a id="" href="#" class="button">See Detail</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">From Monday to Sunday</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 img__promotions-card">
                        <div id="offer03" class="card shadow promotions-card__items">
                            <div class="scale-img">
                                <img class="card-img-top" src="asset/img/img-promotion-massage.jpg" alt="Massage offer">
                            </div>
                            <div class="card-body card-promotions-body">
                                <div class="name-promotions">
                                    <h5 class="card-title">Massage Sale off up to 20%</h5>
                                </div>
                                <div class="script-promotions">
                                    <p>Our services also include massage, sauna, ... 
                                        those services will be discounted up to 20% if you
                                        use them every Thursday.</p>
                                </div>
                                <a id="" href="#" class="button">See Detail</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">From Thursday every week</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center row__btnShowMore">
                    <div class="col-lg-6 showmore">
                            <a href="#">Show all Specials</a>
                    </div>
                </div>
            </div>
        </div>

        <!--CONTACT US ###################################-->
        <div class="container getInTouch">
            <div class="row">
                <div class="col-lg-7 getInTouch_col">
                    <div class="getInTouch_col__form">
                        <h1 class="display-4" style="margin-bottom: 10px;">Get In Touch</h1>
                        <p style="margin-bottom: 30px; font-weight: 300;">
                            If you have any questions or unsatisfactory experiences about 
                            our service, please send us a comment. We are trying to change 
                            day by day to make your experiences the best. We are delighted
                            with your contributions. Thank you</p>
                        <form action="mailto:thepirates@gmail.com" method="post" enctype="text/plain">
                            <div class="form-group">
                                <label for="contact-name">Your name: </label>
                                <input type="text" class="form-control" required>
                                </div>
                            <div class="form-group">
                                <label for="contact-email">Email address: </label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="contact-message">Message: </label>
                                <textarea class="form-control" rows="3" required></textarea>
                            </div>
                            <input class="btn-contact" type="submit" value="Send">
                            <input class="btn-contact" type="reset" value="Reset">
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row row-contactUs__contact">
                        <h1 class="display-4" style="margin-bottom: 20px;">Contact with</h1>
                        <div class="col-lg-12 contact__items">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>19 Đường Nguyễn Hữu Thọ, Tân Hưng, Quận 7, Hồ Chí Minh</p>
                        </div>
                        <div class="col-lg-12 contact__items">
                            <i class="far fa-envelope"></i>
                            <p>thepirateshotel@gmail.com</p>
                        </div>
                        <div class="col-lg-12 contact__items">
                            <i class="fas fa-phone-alt"></i>
                            <p>+84833335699</p>
                        </div>
                        <div class="col-lg-12 contact__items-socialMedia">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="#">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="#">
                                        <i class="fab fa-instagram-square"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid carousal">
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./asset/img/img-carousal-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./asset/img/img-carousal-2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./asset/img/img-carousal-3.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./asset/img/img-carousal-4.jpg" alt="Forth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./asset/img/img-carousal-5.jpg" alt="Fifth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./asset/img/img-carousal-6.jpg" alt="Sixth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./asset/img/img-carousal-7.jpg" alt="Seventh slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./asset/img/img-carousal-8.jpg" alt="Eighth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./asset/img/img-carousal-9.jpg" alt="Nineth slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    
                </div>
            </div>
        </div>


        <!--FOOTER ##################################-->
        <footer>
            <div class="container-fluid footer">
                <div class="row row-footer">
                    <div class="col-lg-4 col-md-6 col-12 footer__aboutUs-contact">
                        <p style="font-size: 24px; text-transform: uppercase;">We are honored to serve you. Have a nice day. </p>
                        <p>Contact me: <span style="font-weight: 900; background-color: black; color:  white; padding: 10px">+84833335699</span></p>
                        <img src="asset/img/logo-brandName.png" alt="logo-brandName" width="100%">
                    </div>
                    <div class="col-lg-2 col-md-6 col-6 footer__useFul-link">
                        <h6 class="footer-title">Useful link</h4>
                        <div class="link">
                            <ul class="list-group-flush listgroup-link">
                                <li class="list-group-item link-item">
                                    <a href="#superContainer__desc">About us</a>
                                </li>
                                <li class="list-group-item link-item">
                                    <a href="#superContainer__rooms">Roons</a>
                                </li>
                                <li class="list-group-item link-item">
                                    <a href="#superContainer__promotions">Promotions</a>
                                </li>
                                <li class="list-group-item link-item">
                                    <a href="./asset/Controller/signIn_Up.php">Account</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 footer__follow-us">
                        <h6 class="footer-title">Social Media</h4>
                        <p style="margin-top: 20px; font-size: 16px;">If you don't want to miss any promotion, please follow us on our social media platform.</p>
                        <div class="icon-area">
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 footer__contact">
                        <h6 class="footer-title">Contact Us</h4>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt" style="margin-top: 22px; margin-right: 5px;"></i>
                            <p style="margin-top: 20px; font-size: 16px; color: black !important;" >19 Đường Nguyễn Hữu Thọ, Tân Hưng, Quận 7, Hồ Chí Minh</p>
                        </div>
                        <div class="contact-item">
                            <i class="far fa-envelope" style="margin-top: 22px; margin-right: 5px;"></i>
                            <p style="margin-top: 20px; font-size: 16px; color: black !important;" >thepirateshotel@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-footer container-fluid d-flex justify-content-around py-3 footer__row-copyright">
                <div class="footer-footer-name" style="font-family:'Courier New', Courier, monospace">
                    Copyright ©2020 All rights reserved 
                </div>
            </div>
        </footer>
    </div>

    <script src="asset/js/main.js"></script>
</body>
</html>
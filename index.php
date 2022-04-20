<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIBERT HOTEL S.C - Home</title>

        <!-- links -->

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>

    <style>       
        .availability-form{
            margin-top: -58px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availability-form{
            margin-top: 25px;
            padding: 0 35px;
        }
    </style>
</head>
    <body class="bg-light">

        <!-- header -->

        <?php require('inc/header.php'); ?>

        <!-- Carousel -->
        
        <div class="container-fluid px-lg-4 mt-4">
            <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <img src="images/carousel/1.png" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                <img src="images/carousel/2.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                <img src="images/carousel/3.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                <img src="images/carousel/4.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                <img src="images/carousel/5.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                <img src="images/carousel/6.jpg" class="w-100 d-block"/>
                </div>
            </div>
            </div>
        </div>

        <!-- check availability form -->

        <div class="container availability-form">
            <div class="row">
                <div class="col-lg-12 bg-white shadow p-4 rounded">
                    <h5 class="mb-4">Check Booking Availability</h5>
                    <form>
                        <div class="row align-items-end">
                            <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Chack-in</label>
                            <input type="date" class="form-control shadow-none">  
                            </div>
                            <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Chack-out</label>
                            <input type="date" class="form-control shadow-none">  
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">Adult</label>
                                <select class="form-select shadow-none">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-2 mb-3">
                                <label class="form-label" style="font-weight: 500;">Children</label>
                                <select class="form-select shadow-none">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-1 mb-lg-3 mt-2">
                                <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- our Rooms -->

        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="width: 350px; margin: auto;">
                        <img src="images/rooms/presidential suit.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Presidential Suit</h5>
                            <h6 class="mb-4">3000 ETB per night</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    4 Children
                                </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                <a href="rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            </div>                       
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="width: 350px; margin: auto;">
                        <img src="images/rooms/twin.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Twin Room</h5>
                            <h6 class="mb-4">1290 ETB per night</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    4 Children
                                </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                <a href="rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            </div>                       
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="width: 350px; margin: auto;">
                        <img src="images/rooms/king.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>King Room</h5>
                            <h6 class="mb-4">950 ETB per night</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    4 Children
                                </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                <a href="rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            </div>                       
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12 text-center mt-5">
                    <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
                </div>
            </div>
        </div>
        
        <!-- our Facilities -->

        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/features/wifi.svg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/features/cocktail.png" width="80px">
                    <h5 class="mt-3">National and International Restaurants</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/features/van.png" width="80px">
                    <h5 class="mt-3">Shuttle Service</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/features/meeting-room.png" width="80px">
                    <h5 class="mt-3">Modern Meeting and Conference room</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/features/parking.png" width="80px">
                    <h5 class="mt-3">secured parking lots</h5>
                </div>
                <div class="col-lg-12 text-center mt-5">
                    <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
                </div>
            </div>
        </div>

        <!-- Testimonials -->

        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

        <div class="container mt-5">
            <div class="swiper swiper-testimonials">
                <div class="swiper-wrapper mb-5">

                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/features/wifi.svg" width="30px">
                            <h6 class="m-0 ms-2">Random user1</h6>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati excepturi aut 
                        voluptatum quibusdam vel accusantium doloremque dolore fuga dolorem! Unde?
                        </p>

                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/features/wifi.svg" width="30px">
                            <h6 class="m-0 ms-2">Random user1</h6>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati excepturi aut 
                        voluptatum quibusdam vel accusantium doloremque dolore fuga dolorem! Unde?
                        </p>
                        
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/features/wifi.svg" width="30px">
                            <h6 class="m-0 ms-2">Random user1</h6>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati excepturi aut 
                        voluptatum quibusdam vel accusantium doloremque dolore fuga dolorem! Unde?
                        </p>
                        
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                    <a href="about.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
            </div>
        </div> 

        <!-- Clients/partners -->
        
        <!-- Reach us -->

        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                    <iframe class="w-100 rounded" height="320px"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.116883181723!2d37.739085214834425!3d10.332530270055159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164fb0a3dcc5f8cd%3A0xaa1540bcf1bb9791!2z4Yuo4Yuw4Yml4YioIOGIm-GIreGJhuGItSDhi6nhipLhiajhiK3hiLLhibIg4YuL4YqTIOGJoOGIrQ!5e0!3m2!1sam!2set!4v1645111467852!5m2!1sam!2set"  loading="lazy"></iframe>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="bg-white p-4 rounded mb-4">
                        <h5>Call us</h5>
                        <a href="tel: +251977885542" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> +251977885542
                        </a>
                        <br>
                        <a href="tel: +251977885542" class="d-inline-block text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> +251977885542
                        </a>
                        
                    </div>
                    <div class="bg-white p-4 rounded mb-4">
                        <h5>Follow us</h5>
                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2"> 
                                <i class="bi bi-twitter me-1"></i> Twitter
                            </span>
                        </a>
                        <br>
                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2"> 
                                <i class="bi bi-facebook me-1"></i> Facebook
                            </span>
                        </a>
                        <br>
                        <a href="#" class="d-inline-block">
                            <span class="badge bg-light text-dark fs-6 p-2"> 
                                <i class="bi bi-instagram me-1"></i> Instagram
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->

        <?php require('inc/footer.php'); ?>

        
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay:{
                delay: 2500,
                disableOninteraction: false,
            }
        });

        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
            },
            pagination: {
            el: ".swiper-pagination",
            },
            breakpoints:{
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
        </script>
    </body>
</html>
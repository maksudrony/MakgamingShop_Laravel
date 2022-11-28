<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gaming PC Builder Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <!-- botman chatbox -->
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}

    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s" id="navbar">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>69, 71 New Elephant Rd, Dhaka 1205</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>maksudrony44@gmail.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-white-50 ms-3" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                <a class="text-white-50 ms-3" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                <a class="text-white-50 ms-3" href="https://www.linkedin.com/in/makrony/"><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white-50 ms-3" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div>

            
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="{{ url('/') }}" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold m-0">Mak<span class="text-white">Gaming</span></h1>
            </a>
            <p style="margin-top: 35px; color: #F0EBCE;">-build your own Pc</p>
            {{-- <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button> --}}
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="{{ url('/storeitems') }}" class="nav-item nav-link">Products</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="" class="dropdown-item">Service</a>
                            <a href="#contact" class="dropdown-item">contact</a>
                            <a href="" class="dropdown-item">Our Team</a>
                            
                        </div>
                        
                    </div>
                    <a href="#contact" class="nav-item nav-link">Contact</a>

                    @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-item text-decoration-none">Dashboard</a>
                        
                        @else
                        <a href="{{ route('login') }}" class="nav-item text-decoration-none">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-item text-decoration-none">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                    

                </div>
            </div>

        </nav>


    </div>

    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide animated animate__rubberBand" data-bs-ride="carousel">
            <div class="carousel-inner ">
                <div class="carousel-item active" data-bs-interval="1500">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown ">DDR6 Graphics Card</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInUp">MSI Radeon RX 6500 XT Mech 2X 4G OC GDDR6 Graphics Card</p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInRight" href="">
                                        See more
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">CPU COOLER</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInUp">ASUS ROG STRIX LC II 360 ARGB WHITE EDITION ALL IN ONE LIQUID CPU COOLER</p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInLeft" href="">
                                        See More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Mouse, Keyboard,Mousepad & Headset</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInUp">Xtrike Me CMX-411 Mouse, Keyboard,Mousepad & Headset Gaming Combo</p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInRight" href="">
                                        See More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-4.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Gaming RAM</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInUp">Gigabyte AORUS RGB 16GB (2x8GB) DDR4 4400MHz Desktop Gaming RAM</p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInLeft" href="">
                                        See More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl mb-3 py-5" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="img/carousel-3.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="img/carousel-4.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInDown" data-wow-delay="1s">
                    <div class="h-100">
                        <div style="background-color: #FFFAE7; color: #FFC600;" class="d-inline-block fw-bold fs-2 rounded-pill py-1 px-3 mb-3">About Us</div>
                        <h1 class="display-6 mb-5">We sell best products Around Dhaka</h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">For developing a nation, it is important to provide education to each one of living in the society. The key to a developed nation is connected with the education system of a society.</p>
                            <span class="text-primary">Maksud Alam</span>
                        </div>
                        <p class="mb-5">Educational Institutions are established for availing education to students. Teachers are an integral part of the education system; they put their efforts into educating children and youths. Sadly, education is also suffering from class conflict. Poor are not blessed with education. The rural education system is degrading day by day due to various social and financial reasons. There must be a common agenda made for availing education to everyone. Socio-Economic differences can be solved by the education system. A backward society can only be lifted up by education.</p>
                        <a class="btn btn-primary py-2 px-3 me-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                        <a class="btn btn-outline-primary py-2 px-3" href="#contact">
                            Contact Us
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    
    <!-- store item Start --> 

    {{-- admin's gpu menu ekhane eshe homepage a update hobe --}}
    @include("storehome"); 
    <!-- store item End -->
    


    <!-- Contact Start -->
    
    @include("contact");

    <!-- contact End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer  pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">Mak<span class="text-white">Gaming</span></h1>
                    <p>For developing a nation, it is important to provide education to each one of living in the society.</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>69, 71 New Elephant Rd, Dhaka 1205</p>
                    <p><i class="fa fa-phone-alt me-3"></i>01521331239</p>
                    <p><i class="fa fa-envelope me-3"></i>maksudrony44@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="#contact">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>For developing a nation, it is important to provide education</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-white w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Maksud</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                       
                        Designed By <a href="#">Maksud</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#navbar" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="owlcarousel/owl.theme.default.min.css"></script>
    <script src="lib/parallax/parallax.min.js"></script>

    <script id="botmanWidget" src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    <script>
        var botmanWidget = {
        introMessage: 'hi im from makGaming Team',
        aboutText: 'Ronyyyyyyy'    
        };
    </script>
    <script src="js/main.js"></script>
    <script>
        (function (window, document) {
            var loader = function () {
                var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
                tag.parentNode.insertBefore(script, tag);
            };
    
            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
        })(window, document);
    </script>
</body>

</html>
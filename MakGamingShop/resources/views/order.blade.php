<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Order Now</title>
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

    
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/order.css">
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
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                    <a href="" class="nav-item nav-link">About</a>
                    <a href="{{ url('/storeitems') }}" class="nav-item nav-link">Products</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="" class="dropdown-item">Service</a>
                            <a href="#contact" class="dropdown-item">contact</a>
                            <a href="" class="dropdown-item">Our Team</a>
                            
                        </div>
                    </div>
                    <a href="" class="nav-item nav-link">Contact</a>
                </div>
                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    {{-- #1B1A17 --}}
    <div class="container-fluid py-5" data-parallax="scroll" style="background-color: #3D3C42;">

       
        <div class=" text-center mx-auto mb-5 wow fadeInDown" data-wow-delay="0.5s" style="padding-top: 110px; max-width: 500px;">
            
            
            <div class="d-inline-block rounded-pill bg-secondary py-1 px-3 mb-3" style="font-size: 25px ; color: #FD841F;">
                My Cart items
            </div>
        </div>
        <div class="cart">
            <div class="col-md-12 col-lg-10 mx-auto">
                <div class="cart-item">
                    <div class="row">
                       <div class="col-md-7 center-item">
                          <img src="img/evga gpu-1.png" alt="">
                          <h5>EVGA GEFORCE RTX 3080 10GB FTW3 ULTRA GAMING GDDR6X GRAPHICS CARD</h5>
                       </div>
  
                       <div class="col-md-5 center-item">
                          <div class="input-group number-spinner">
                             <button id="phone-minus" class="btn btn-default"><i class="fas fa-minus"></i></button>
                             <input id="phone-number" type="number" min="0" class="form-control text-center" value="1">
                             <button id="phone-plus" class="btn btn-default"><i class="fas fa-plus"></i></button>
                          </div>
                          <h5><span id="phone-total">105000</span> TK</h5>
                          <img src="img/remove.png" alt="" class="remove-item">
                       </div>
                    </div>
                 </div>
  
                 <div class="cart-item">
                    <div class="row">
                       <div class="col-md-7 center-item mx-auto">
                          <img src="img/gpu-2.png" alt="">
                          <h5>SAPPHIRE TOXIC AMD RADEON RX 6950 XT 16GB OC LE GDDR6 GRAPHICS CARD	</h5>
                       </div>
                       <div class="col-md-5 center-item">
                          <div class="input-group number-spinner">
                             <button id="case-minus" class="btn btn-default"><i class="fas fa-minus"></i></button>
                             <input id="case-number" type="number" min="0" class="form-control text-center" value="1">
                             <button id="case-plus" class="btn btn-default"><i class="fas fa-plus"></i></button>
  
                          </div>
                          <h5><span id="case-total">173900</span> TK</h5>
                          <img src="img/remove.png" alt="" class="remove-item">
                       </div>
                    </div>
                 </div>
  
                 <div class="cart-item">
                    <div class="row">
  
                       <div class="col-md-8">
                          <h5>Subtotal: </h5>
                          <h5>Tax:</h5>
                          <h5>Total:</h5>
                       </div>
  
                       <div class="col-md-4 status">
                          <h5><span id="sub-total">278900</span> TK</h5>
                          <h5><span id="tax-amount">0</span> TK</h5>
                          <h5><span id="total-price">278900</span> TK</h5>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-12 pt-4 pb-4">

                    <button type="button" class="btn btn-success check-out">
                        <a href="{{ url('/example1')}}" style="text-decoration: none; color: white">Confirm</a>
                        </button>
                 </div>
              </div>
       
               </div>
        </div>

    </div>
    
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

    
    <script src="js/main.js"></script>
    <script src="js/order.js"></script>

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
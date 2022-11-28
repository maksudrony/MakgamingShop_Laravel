<div id="contact" class="container-fluid py-5" data-parallax="scroll"  data-image-src="img/carousel-4.jpg">
    <div class="container w-100 py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn animate__bounceInLeft" data-wow-delay="0.7s">
                
                <h1 class="display-6 text-white mb-5">Thanks For The Results Achieved With You</h1>
                <div class="row g-3">
                    <div class="fs-2  text-warning  ">Contact us:</div>
                <div class="">
                    
                    <div class="d-flex pt-2 px-2">
                        <a class="btn btn-square me-1 bg-warning" href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1 bg-warning" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1 bg-warning" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-1 bg-warning" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-square me-1 bg-warning" href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new"><b>G</b></a>
                    </div>
                </div>
                </div>
                <div style="color: #FD841F;">
                    <h2 class=" mb-4 text-primary mt-4">Address</h2>
                    <p><i class="fa fa-map-marker-alt me-3"></i>69, 71 New Elephant Rd, Dhaka 1205</p>
                    <p><i class="fa fa-phone-alt me-3"></i>01521331239</p>
                    <p><i class="fa fa-envelope me-3"></i>maksudrony44@gmail.com</p>
                </div>
            </div>
            <div class="animate__zoomInDown col-lg-6 wow fadeIn" data-wow-delay="1s">
                
                <div class="opacity-75 h-100 p-5">
                    <form action="{{ url('contact') }}" method="post">
                        @csrf
                        {{-- csrf send data to the database --}}
                        <div class="d-inline-block rounded-pill fs-2 bg-white text-warning py-1 px-3 mb-3">Message US</div>
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input name="name" type="text" class="form-control bg-light border-0" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input name="email" type="email" class="form-control bg-light border-0" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    
                                    <input name="phone" class="form-control bg-light border-0" type="num" id="phone" placeholder="Phone Number*" required="">
                                    <label for="phone">Your Phone</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control bg-light border-0" rows="6" id="message" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-contact btn-submittt px-5" style="height: 60px;">
                                    Submit Now
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
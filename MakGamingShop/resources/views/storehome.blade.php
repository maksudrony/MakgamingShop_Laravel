<div class="container-fluid py-5" data-parallax="scroll" style="background-color: #1B1A17;">
    
        <div class=" text-center mx-auto mb-5 wow fadeInDown" data-wow-delay="0.5s" style="max-width: 500px;">
            
                <div class="d-inline-block rounded-pill bg-secondary py-1 px-3 mb-3" style="font-size: 25px ; color: #FD841F;">
                    <a href="{{ url('/storeitems') }}" class="fw-bold text-decoration-none text-info">Store Items</a> 
                    {{-- {{ url('/viewcontact') }} --}}
                </div>
            
            <h1 class="display-6 mb-5" style="color: #FFE227;">ULTRA GAMING GRAPHICS CARDS</h1>
        </div>
        <div class=" owl-carousel testimonial-carousel wow fadeInUp animated animate__bounce" data-wow-delay="1s">
            
            @foreach ($data as $data )
                
            
            
            <div class="testimonial-item text-center animatedanimate__pulse">
                <div class="img-fluid p-2 mx-auto mb-4" 
                style="background-image: url('/gpuimage/{{ $data ->image }}'); height:400px; width: 500px;">

                </div>
                {{-- <img class="img-fluid p-2 mx-auto mb-4" src="{{ url('/gpuimage/{{ $data ->image }}') }}" style="width: 400px; height: 350px;"> --}}
                <div class="testimonial-text rounded text-center p-4">
                    <p>{{ $data ->title }}</p>
                    <h5 class="mb-1">{{ $data ->price }}</h5>
                    <p>{{ $data ->description }}</p>
                    
                    <div class=" text-center mx-auto wow fadeInDown" data-wow-delay="0.5s" style="max-width: 500px;">
            
                        <div class="d-inline-block rounded-pill bg-secondary py-1 px-3 mb-3" style="font-size: 25px ; color: #FD841F;">
                            <a href="{{ url('/storeitems') }}" class="fw-bold text-decoration-none text-warning">View More Store Items</a> 
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mx-auto wow fadeInUp">
                        <a class="btn btn-outline-primary py-2 px-3 bg-danger text-white" href="{{ url('/order') }}">
                            Order Now
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
            @endforeach            
</div>
</div>


        
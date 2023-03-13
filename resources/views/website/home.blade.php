
        

@extends('website.base')
@section('content')
@php
    $year = date('Y')
@endphp
    <div>
        <section class="default-banner active-blog-slider">
            
            <div class="item-slider relative" style="background: url(img/hajj1.jpg);background-size: cover;">
                <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
                <div class="container">
                    <div class="row fullscreen justify-content-center align-items-center">
                        <div class="col-md-10 col-12">
                            <div class="banner-content text-center">
                                <h4 class="text-white mb-20 text-uppercase">Discover the Colorful World</h4>
                                <h1 class="text-uppercase text-white">Hajj {{$year}}  </h1>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br>
                                or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                <a href="{{route('package',2)}}" class="text-uppercase header-btn">Discover Now</a>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
            <div class="item-slider relative" style="background: url(img/hajj5.jpg);background-size: cover;">
                <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
                <div class="container">
                    <div class="row fullscreen justify-content-center align-items-center">
                        <div class="col-md-10 col-12">
                            <div class="banner-content text-center">
                                <h4 class="text-white mb-20 text-uppercase">Discover the Colorful World</h4>
                                <h1 class="text-uppercase text-white">Umrah {{$year}}                                    </h1>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br>
                                or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                <a href="{{route('package',3)}}" class="text-uppercase header-btn">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-slider relative" style="background: url(img/hajj3.jpg);background-size: cover;">
                <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
                <div class="container">
                    <div class="row fullscreen justify-content-center align-items-center">
                        <div class="col-md-10 col-12">
                            <div class="banner-content text-center">
                                <h4 class="text-white mb-20 text-uppercase">Discover the Colorful World</h4>
                                <h1 class="text-uppercase text-white">Air Ticketing</h1>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br>
                                or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                <a href="#contact" class="text-uppercase header-btn">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Start about Area -->
        <section class="section-gap info-area" id="about" style="background-color: #f9f9ff;">
        <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Why Choose Us Your Travel Agency</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>					
        <div class="single-info row mt-40">
            <div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
                <div class="info-thumb" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <img src="img/hajj4.jpg" style="width: 100%; height:auto; " alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 no-padding info-rigth">
                <div class="info-content">
                    <h2 class="pb-30">Experience the Difference with Our Trusted Travel Agency</h2>
                    <p>Welcome to SmTravels, your trusted partner for Hajj and Umrah travel. We are committed to providing our clients with a unique and personalized travel experience, tailored to meet their individual needs and preferences.</p>
                    
                    
                    <p>We offer a range of Hajj and Umrah packages to suit your needs, from economy to deluxe, and everything in between. Our packages are designed to provide you with a hassle-free and comfortable journey, with amenities such as air-conditioned transportation, quality accommodations, and guided tours of holy sites.</p>
                    
                   <p> Our team is available 24/7 to answer any questions or concerns you may have.</p>
                    
                    <p>Browse our website to learn more about our Hajj and Umrah packages, and feel free to contact us if you have any questions. We look forward to helping you fulfill your spiritual obligations with ease and comfort.</p>
                    </div>
            </div>
        </div>
        </div>
        </section>
        <!-- End about Area -->
        
        <!-- Start feature Area -->
        <section class="feature-area section-gap" id="secvice">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Some Features that Made us Unique</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>						
            <div class="row">
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-feature mb-30">
                        <div class="title d-flex flex-row pb-20">
                            <span class="lnr lnr-user"></span>
                            <h4><a href="{{route('package',2)}}">Hajj {{$year}}  </a></h4>
                        </div>
                        <p>
                            Our hajj packages are prepared for the pilgrims who want to pray in a tension free environment & get the most satisfaction.
                        </p>	
                        <a href="{{route('package',2)}}" class="genric-btn success circle arrow">Success<span class="lnr lnr-arrow-right"></span></a>						
                    </div>							
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-feature mb-30">
                        <div class="title d-flex flex-row pb-20">
                            <span class="lnr lnr-license"></span>
                            <h4><a href="{{route('package',3)}}">Umrah {{$year}}  </a></h4>
                        </div>
                        <p>
                            Hand curated and custom build umrah packages prepared for the comfort & mental satisfaction in the prayer of the pilgrims.
        
                        </p>
                        <a href="{{route('package',3)}}" class="genric-btn success circle arrow">Success<span class="lnr lnr-arrow-right"></span></a>							
                    </div>							
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-feature mb-30">
                        <div class="title d-flex flex-row pb-20">
                            <span class="lnr lnr-phone"></span>
                            <h4><a href="#contact">Air Ticketing</a></h4>
                        </div>
                        <p>
                            Air Ticketing ! Looking for a perfect hotel for your trip? Contact us to get the most exciting deal on hotel booking all over the globe.
                        </p>			
                        <a href="#contact" class="genric-btn success circle arrow">Success<span class="lnr lnr-arrow-right"></span></a>				
                    </div>							
                </div>
                                                                                         
            </div>
        </div>	
        </section>
        <!-- End feature Area -->
        
        
        
        
        
        <!-- Start project Area -->
        <section class="project-area section-gap" id="project">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-30 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Experience Hassle-Free Travel with Our Trusted Travel Agency</h1>
                        <p>Embark on a spiritual journey of a lifetime with our trusted Hajj travel agency.</p>
                    </div>
                </div>
            </div>						
            <div class="row justify-content-center d-flex">
                <div class="active-works-carousel mt-40 col-lg-8">
                    <div class="item">
                        <img class="img-fluid" src="img/hajj7.jpg" alt="">
                        <div class="caption text-center mt-20">
                            <h6 class="text-uppercase">Vector Illustration</h6>
                            <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have <br> allowed humanity to create slimmer, more portable technology.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="img/hajj10.jpg" alt="">
                        <div class="caption text-center mt-20">
                            <h6 class="text-uppercase">Vector Illustration</h6>
                            <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have <br> allowed humanity to create slimmer, more portable technology.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="img/hajj9.jpg" alt="">
                        <div class="caption text-center mt-20">
                            <h6 class="text-uppercase">Vector Illustration</h6>
                            <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have <br> allowed humanity to create slimmer, more portable technology.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="img/hajj5.jpg" alt="">
                        <div class="caption text-center mt-20">
                            <h6 class="text-uppercase">Vector Illustration</h6>
                            <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have <br> allowed humanity to create slimmer, more portable technology.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="img/hajj3.jpg" alt="">
                        <div class="caption text-center mt-20">
                            <h6 class="text-uppercase">Vector Illustration</h6>
                            <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have <br> allowed humanity to create slimmer, more portable technology.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
        </section>
        <!-- End project Area -->
        
        
        
        
        
        <!-- Start gallery Area -->
        <section class="gallery-area" id="gallery">
        <div class="container-fluid">
            <div class="row no-padding">
                <div class="active-gallery">
                    <div class="item single-gallery">
                        <img style="height:200px; object-fit:cover; objection-postion:center; " src="img/hajj9.jpg" alt="">
                    </div>	
                    <div class="item single-gallery">
                        <img style="height:200px; object-fit:cover; objection-postion:center; " src="img/hajj1.jpg" alt="">
                    </div>	
                    <div class="item single-gallery">
                        <img style="height:200px; object-fit:cover; objection-postion:center; " src="img/hajj3.jpg" alt="">
                    </div>	
                    <div class="item single-gallery">
                        <img style="height:200px; object-fit:cover; objection-postion:center; " src="img/hajj7.jpg" alt="">
                    </div>	
                    <div class="item single-gallery">
                        <img style="height:200px; object-fit:cover; objection-postion:center; " src="img/hajj8.jpg" alt="">
                    </div>	
                    <div class="item single-gallery">
                        <img style="height:200px; object-fit:cover; objection-postion:center; " src="img/hajj5.jpg" alt="">
                    </div>																		
                </div>
            </div>
        </div>	
        </section>
        <!-- End gallery Area -->
        
        
        <!-- Start faq Area -->
        <section class="faq-area section-gap" id="faq">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Frequently Asked Questions</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>							
            <div class="row d-flex align-items-center">
              
                <div class="faq-content ">
                    <div class="single-faq">
                        <h2 class="text-uppercase">
                            Are your Templates responsive?
                        </h2>
                        <p>
                            “Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
                        </p>
                    </div>
                    <div class="single-faq">
                        <h2 class="text-uppercase">
                            Does it have all the plugin as mentioned?
                        </h2>
                        <p>
                            “Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
                        </p>
                    </div>
                    <div class="single-faq">
                        <h2 class="text-uppercase">
                            Can i use the these theme for my client?
                        </h2>
                        <p>
                            “Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
                        </p>
                    </div>												
                </div>									
            </div>
        </div>
        </section>
        <!-- End faq Area -->
        
        
        
        
        <!-- Start logo Area -->
        <section class="logo-area">
        <div class="container">
            <div class="row">
                
            </div>
        </div>	
        </section>
        <!-- End logo Area -->
        
                    
        <!-- start contact Area -->		
        <section class="contact-area section-gap" id="contact">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Contact With Us</h1>
                        <h1 class="mb-10">Contact us to Get Air Tickts , Hajj Or Umrah information</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>										
            <form class="form-area " action="{{route('contacts.contact.store')}}" method="post"  id="myForm"  >
                @csrf
                <div class="row">	
                <div class="col-lg-6 form-group">
                    <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text" required>
                
                    <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
        
                    <input name="phone" placeholder="Enter your Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone number'" class="common-input mb-20 form-control" required="" type="phone" required>
                </div>
                <div class="col-lg-6 form-group">
                    <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                    <button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
                    <div class="alert-msg">								
                </div>
                </div></div>
            </form>						
            
        </div>	
        </section>
        <!-- end contact Area -->		
    </div>


@endsection
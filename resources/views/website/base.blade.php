<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    
    <meta name="description" content="Looking for a reliable Hajj and Umrah travel agency? Look no further than SmTravels. We specialize in providing all-inclusive travel packages that cater to your needs and budget. Contact us today to start your spiritual journey.">
    <title>SmTravels - Your Trusted Hajj and Umrah Travel Agency</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

                <style> 
                    .img-fluid {
            max-width: 100%;
            height: 350px;
            background-size: cover;
        }
                </style>
    </head>
    <body>
      @include('sweetalert::alert')
        <!-- start banner Area -->
        <section class=" generic-banner banner-area" id="home">
            <!-- Start Header Area -->
            <header class="default-header">
                <nav class="navbar navbar-expand-lg  navbar-light">
                    <div class="container">
                          <a class="navbar-brand" href="{{route('website')}}">
                              {{-- <img src="img/logo.png" alt=""> --}}
                              <h2 class="text-white font-weight-bold">SM Travels</h2>
                          </a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="text-white lnr lnr-menu"></span>
                          </button>

                          <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li><a href="{{route('website')}}">Home</a></li>
                                <li><a href="{{route('package',2)}}">Hajj 2023</a></li>									
                                <li><a href="{{route('package',3)}}">Umrah</a></li>
                                <li><a href="{{route('website')}}/#contact">Air Tickts</a></li>
                                <li><a href="{{route('contact_us')}}">Contact</a></li>

                            </ul>
                          </div>						
                    </div>
                </nav>
            </header>
            <!-- End Header Area -->				
        </section>

        
            @yield('content')
        
            <div style="  position: fixed;
            bottom: 60px;
            right: 19px;
            margin-bottom:40px;
            z-index:99999;
            ">
           <a href="https://wa.me/8801776666661" target="_blank">
            <img src="{{asset('img/whatsapp.png')}}" width="65" alt="whatsapp">
          </a>
            </div>
                   <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "126396511377089");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v16.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

        <!-- start footer Area -->		
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>About Us</h6>
                            <address class="text-muted">
                                <strong>Mirpur Office:</strong><br>
                                House-2, Road-4, Block-E<br>
                                Mirpur-12, Dhaka-1216<br>
                              </address>
                            <p>
                                Embark on a spiritual journey of a lifetime with our premium Hajj travel packages and services.
                            </p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Newsletter</h6>
                            <p>Stay update with our latest</p>
                            <div class="" id="mc_embed_signup">

                                    <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                                    <div class="d-flex flex-row">

                                        <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                            <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                            <div style="position: absolute; left: -5000px;">
                                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                            </div>
                                          
                                        <!-- <div class="col-lg-4 col-md-4">
                                            <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                        </div>  -->
                                    </div>		
                                    <div class="info"></div>
                                    </form>
                            </div>
                            </div>
                    </div>						
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <h6>Follow Us</h6>
                            <p>Let us be social</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>							
                </div>
            </div>
        </footer>	
        <!-- End footer Area -->			

        <script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>	
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>			
        <script src="{{asset('js/jquery.sticky.js')}}"></script>
        <script src="{{asset('js/slick.js')}}"></script>
        <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('js/waypoints.min.js')}}"></script>		
        <script src="{{asset('js/main.js')}}"></script>	
    </body>
</html>
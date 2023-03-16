@extends('website.base')
@section('content')

<style>
    .generic-banner .height {
    height: 300px;
}
.single-feature {
    background-color: #f9f9ff;
    padding: 30px 30px 15px 30px;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    height: 100px;
}
</style>

<div>
    <div class=" generic-banner">
        <div class="row height align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="generic-banner-content">
                    <h2 class="text-white">CONTACT US</h2>
                    <p class="text-white">We'd love to hear from you, please drop us a line if you've any query.</p>
                </div>							
            </div>
        </div>
    </div>


<!-- About Generic Start -->
<div class="main-wrapper">
    

<!-- Start feature Area -->
<section class="feature-area section-gap" id="secvice">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 ">
                <div class="single-feature mb-30">
                    <div class="title d-flex flex-row pb-20">
                        <span class="lnr lnr-user"></span>
                        <h4>Road,-4, Block -E <br/>
                             House-2 ,Mirpur -12 , Dhaka -1216</h4>
                    </div>
                   
                </div>							
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="single-feature mb-30">
                    <div class="title d-flex flex-row pb-20">
                        <span class="lnr lnr-license"></span>
                        <h4>Mobile <br/>
                             01776-666661, 01977-118812
                            </h4>
                    </div>
                                              </div>							
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="single-feature mb-30">
                    <div class="title d-flex flex-row pb-20">
                        <span class="lnr lnr-phone"></span>
                        <h4>Email: smtravels@gmail.com</h4>
                    </div>
                       </div>							
            </div>
                                                                                     
        </div>
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    
                </div>
            </div>
        </div>						
        <div class="container">
        									
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
        <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.0577723192273!2d90.36475171496883!3d23.816544592163073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c12f3371c69b%3A0x20372e925b8b0246!2shouse-2%2C%20House%20%2312%20Road%20No.%204%2C%20Dhaka%201216!5e0!3m2!1sen!2sbd!4v1678608931339!5m2!1sen!2sbd" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    </div>	
    </div>	
</section>


<!-- End feature Area -->

<!-- Start Generic Area -->
<section class="about-generic-area pb-100">
    <div class="container border-top-generic">
        <h3 class="about-title mb-30">S M Travels International</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="img-text">
                    <p>
                        S M Travels International is a company that provides Umrah and Hajj packages in Bangladesh. 
                        It was founded in 2010 with the aim to assist the community in fulfilling the obligation of a 
                        lifetime and enable pilgrims to travel to Islam’s holiest shrines in comfort, dignity, and in the
                         proper frame of mind. The company is recognized as the only truly professional organization of
                          its kind. Luxury Umrah Packages is one of the services provided by the company, which is 
                          designed to offer the top luxury Umrah packages for the year. The package includes 
                          accommodations in the most luxurious 5-star hotels in Mecca and Medina, daily guided tours 
                          of the holy sites, and all transportation to ensure that the journey is hassle-free.
                          <br> The team of experienced travel professionals ensures that every detail of the Umrah journey
                           is taken care of, including creating a customized itinerary that suits the pilgrim’s 
                           preferences and budget. The company offers a range of Umrah packages to suit the pilgrim’s
                            preferences and budget, with exceptional service available 24/7 to ensure that the journey 
                            runs smoothly and to provide any assistance needed.
                    </p>
                </div>
            </div>
           
        
        </div>
    </div>
</section>
<!-- End Generic Start -->		


</div>
</div>


@endsection

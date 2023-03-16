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
        <div class="">
            <div class="bg-light p-4 rounded">
                <div class=" mb-30">
                    <img src="{{$package->img()}}" style="width: 100%; height : 500px;object-fit:cover; objection-postion:center;" alt="ss">  <br>
                   <div class="mt-4">
                    <span class="badge rounded-pill bg-info black-border  text-white p-3 mt-1">{{$package->time}} Days</span>
                    <span class="badge rounded-pill bg-info text-white p-3 mt-1">{{$package->price}} Taka</span>

                   </div>
                    <div class="title d-flex flex-row pb-20 mt-4 ">
                        <span class="lnr lnr-arrow-right"></span>
                        <h1><a href="#">{{$package->title ?? " "}}</a></h4>
                    </div>
                    <h5 class="text-justify">
                        {{$package->discription}}
                    </h5>
                    <p class="text-justify mt-4">
                        {{$package->notes}}
                    </p>
                    
                </div>							
            </div>

        </div>
    </div>	
    </div>	
</section>


<!-- End feature Area -->

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="menu-content pb-60 col-lg-8">
            <div class="title text-center">
                <h1 class="mb-10">Contact us to For More</h1>
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

</div>
</div>


@endsection

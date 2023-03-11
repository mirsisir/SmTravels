@extends('website.base')
@section('content')

<style>
    .generic-banner .height {
    height: 300px;
}
</style>

<div>
    <div class=" generic-banner">
        <div class="row height align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="generic-banner-content">
                    <h2 class="text-white">{{$category->name}}</h2>
                    <p class="text-white">{{$category->discription ?? " "}}</p>
                </div>							
            </div>
        </div>
    </div>


<!-- About Generic Start -->
<div class="main-wrapper">

<!-- Start feature Area -->
<section class="feature-area section-gap" id="secvice">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Affordable Service</h1>
                    <p>We provide you with details of all services including Hajj and Umrah.</p>
                </div>
            </div>
        </div>						
        <div class="row">
            @foreach ($packages as $package)
            <div class="col-lg-4 col-md-6 rounded">
                <div class="single-feature mb-30">
                    <img src="{{$package->img()}}" width="300" alt="ss"> 
                    <span class="badge rounded-pill bg-info black-border  text-white p-3 mt-1">{{$package->time}} Days</span>
                    <span class="badge rounded-pill bg-info text-white p-3 mt-1">{{$package->price}} Taka</span>

                    <div class="title d-flex flex-row pb-20 mt-4">
                        <span class="lnr lnr-arrow-right"></span>
                        <h4><a href="#">{{$package->title ?? " "}}</a></h4>
                    </div>
                    <p>
                        {{$package->discription}}
                    </p>
                    
                    <a href="#" class="genric-btn   info-border circle arrow" style="color:black  ">Info<span class="lnr lnr-arrow-right"></span></a>
                </div>							
            </div>

            @endforeach														
        </div>
    </div>	
</section>
<!-- End feature Area -->

<!-- Start Generic Area -->
<section class="about-generic-area pb-100">
    <div class="container border-top-generic">
        <h3 class="about-title mb-30">Elaboration about Generic Page</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="img-text">
                    <img src="img/a.jpg" alt="" class="img-fluid float-left mr-20 mb-20">
                    <p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking systems that accept players from the United States that wish to play in online casinos.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking systems that accept players from the United States that wish to play in online casinos.</p>
            </div>
            <div class="col-lg-12">
                <p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking systems that accept players from the United States that wish to play in online casinos.</p>
            </div>
            <div class="col-md-12">
                <div class="img-text">
                    <img src="img/a2.jpg" alt="" class="img-fluid float-left mr-20 mb-20">
                    <p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking systems that accept players from the United States that wish to play in online casinos.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Generic Start -->		


</div>
</div>


@endsection

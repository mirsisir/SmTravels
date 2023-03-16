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
                    <p class="text-justify">
                        {{ implode(' ', array_slice(explode(' ', $package->discription), 0, 50)) }} ...
                    </p>
                    
                    <a href="{{route('package_details',$package->id)}}" class="genric-btn   info-border circle arrow" style="color:black  ">Info<span class="lnr lnr-arrow-right"></span></a>
                </div>							
            </div>

            @endforeach														
        </div>
    </div>	
</section>
<!-- End feature Area -->

<section class="about-generic-area pb-100">
    <div class="container border-top-generic">
        <h3 class="about-title mb-30">Hajj</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="img-text">
                    

<h4>Makkah</h4> 

<p>After years of facing towards this great city in each and every prayer and learning about the magnificent history of this most blessed place on Earth, you can now finally pray in front of the first house built and dedicated for the worship of Allah – the Ka’bah. You’ll hear, live, the glorious call to prayer from the famous muadhins, calling ‘Allahu Akbar, Allaaaahu Akbar’ as the sound of the adhaan echoes from the speakers and moves your soul and elevates your imaan. As you join the rows, lines straight and hearts upright, seeking to draw closer to Allah, standing before Him in humility and prayer, you realise, Allah has chosen you to be His Guest in this great journey of faith.
</p> <br>

<h4>Mazarat</h4> 

<p>Join us as we relive some of the most defining moments in the history of Islam. Experience the DST difference with our immersive historical tour of Makkah delivered by expert guides that will transport you a prophetic era.
</p> <br>
<p>A moving and inspiring story of seclusion and revelation, of prophethood and perseverance, it all starts with a trip to Jabal al Noor, the Mountain of Light, where the Prophet (ﷺ) first received revelation.
</p> <br>
<p>Learn about the persecution faced by early Muslims and how they were driven out of Makkah whilst holding firmly onto their faith. Learn about the migration of the Prophet (ﷺ) and the remarkable occurrences at Jabal Thawr that instilled within the believers lessons of tawakkul, of absolute, unwavering reliance in Allah SWT.
</p> <br>
<p>Visit the iconic Jabal Ar-Rahmah, the Mount of Mercy, whereupon the Prophet (ﷺ) delivered his famous last sermon and the site which forms the pinnacle of the rites of Hajj. Journey through Mina, the city of tents, where pilgrims follow the example of the Prophet and stay for several days during the Hajj and pelt the three Jamarat, symbolic of warding off the devil and rooted in the story of Ibrahim (عَلَيْهِ ٱلسَّلَامُ).
</p> <br>
<p>For the ultimate experience, join us for our unique and exclusive ‘Walking Tour of AlMasjid AlHaram’, where we recount some of the most notable moments and places, delivered by our renowned expert guides.
</p> <br>
<p>An immersive experience of the history of Makkah like never before.
</p> <br>

<h4>Madinah</h4>

<p>Madinah is known and loved for the tranquillity that it brings to our hearts – that feeling that we have finally made it back home – home is definitely where the heart is and our hearts are profoundly connected with a deep love of the Prophet Muhammad (ﷺ) and his beautiful city. It is city that is filled with stories of love and sacrifice, of prophetic wisdom and illustrious companionship. Madinah is a city that keeps on giving – rich in history and lessons that build our faith and traditions and inspire us to become the best versions of ourselves. Welcome home, welcome to Madinah.
</p> <br>
<h4>Mazarat</h4> 

<p>Travel back in time with us as we go back some 1400 years and relive some of the most significant moments in the life of the Prophet Muhammad (ﷺ) and his companions. Exclusive to DST, a unique and immersive experience that will leave you longing for more.
</p> <br>
<p>From the very first masjid built in Madinah, which the Prophet (ﷺ) himself help construct, Masjid Quba, to Masjid Qiblatain – the masjid of two qiblahs – where the companions prayed in two directions as the qiblah changed from Masjid Al Aqsa in Jerusalem to Masjid Al Haram in Makkah. Be prepared to be in awe of the rich history and insights gained from this tour.
</p> <br>
<p>You may be tempted to unsheathe your sword as we recount the epic Battle of Uhud where over seventy companions were killed, live and on site. You’ll get to ascend the archers mount as well as visit and pray for the Martyrs of Uhud.
</p> <br>
<p>For the ultimate experience, join us for our exclusive ‘Walking Tour of the Prophet’s Masjid’, where we recount some of the most notable moments in what was then the entire city of Madinah, delivered by our renowned expert guides.
</p> <br>
<p>An immersive experience of the history of Madinah like never before.
</p> <br>
                </div>
            </div>
           
        
        </div>
    </div>
</section>


<section class="about-generic-area pb-100">
    <div class="container border-top-generic">
        <h3 class="about-title mb-30">Umrah Packages</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="img-text">
                    <p>                    Welcome to Luxury Umrah Packages, where we offer the top Luxury Umrah Packages for the year. Our packages are designed to provide you with the best in comfort, convenience, and spiritual guidance, ensuring that your Umrah journey is one of the most fulfilling experiences of your life.
                    </p>
                    <p>                    Our Luxury Umrah package includes accommodations in the most luxurious 5-star hotels in Mecca and Medina. Haram View Suites Available. Our Umrah packages includes a Mutawwif (Umrah Tour Guide) who is a knowledgeable person and will be responsible for guiding and taking care of you through all your Umrah steps by step.
                    </p>                    
                    <p>                    Our Luxury packages includes accommodations in the most luxurious 5-star hotels in Mecca and Medina:
                    </p>                    
                    <p>
                        Our Hotels in Mecca:  Fairmont Makkah, Clock Royal, Conrad Makkah Hotel & Jabal Omar Hyatt Regency. Haram View Suites Available.
                    </p>                    

                    <p>
                        Our Hotels in Medina: Oberoi Al Madinah Hotel, Madinah Hitlon Hotel & Anwar Al Madinah Movenpick. Haram View Suites Available.

                    </p>

                    <p>
                        Expert Guidance: Our team of experienced travel professionals has extensive knowledge of the holy sites and Islamic  traditions, ensuring that you have a truly spiritual and informative experience.

                    </p>

                    <p>                    Personalized Itineraries: We work closely with you to create a customized itinerary that suits your preferences and budget, taking into account your interests, schedules, and preferences.
                    </p>

                    <p>
                        Attention to Detail: We go above and beyond to ensure that every detail of your Umrah journey is taken care of, from transportation to accommodations to activities.

                    </p>

                    <p>
                        Daily guided tours of the holy sites, and all transportation to ensure that your journey is hassle-free

                    </p>
                    <p>
                        @ We offer the top 20 best luxury Umrah tours and excursions for a truly unforgettable pilgrimage experience. Our packages are designed to provide you with the best in comfort, convenience, and spiritual guidance, ensuring that your Umrah journey is one of the most fulfilling experiences of your life.
                    Classic Umrah: Our Classic Umrah package includes accommodations in 5-star hotels, daily guided tours of the holy sites, and all transportation to ensure that your journey is hassle-free
                    
                    </p>


                    <p>                    @@ Umrah with Dubai: Combine your Umrah pilgrimage with a luxurious vacation in Dubai, with accommodations in 5-star hotels and a variety of activities and tours.
                    </p>

                    <p>
                        Umrah with Turkey: Visit the historic city of Istanbul and perform Umrah with this package, which includes visits to the Blue Mosque, Hagia Sophia, and more.

                    </p>

                    <p>
                        Umrah with Egypt: Immerse yourself in the rich culture and history of Egypt and perform Umrah with this package, which includes visits to the Pyramids of Giza, the Sphinx, and more

                    </p>
                    

                    <p>
                        At our website, we offer a range of Umrah packages to suit your preferences and budget, with customized itineraries and exceptional service to ensure that your journey is as fulfilling and memorable as possible. Here are just a few reasons to choose our Umrah tours and excursions:

                    </p>
                    
    <p>
        Exceptional Service: Our team is available 24/7 to ensure that your journey runs smoothly and to provide any assistance you may need.
    
    </p>                    
                    
            <p>
                Choose our website for a truly unforgettable Umrah journey, where spirituality and luxury come together to create a once-in-a-lifetime experience.

            </p>
            </div>
            </div>
           
        
        </div>
    </div>
</section>

</div>
</div>


@endsection

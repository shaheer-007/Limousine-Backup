@extends('main')
@section('content')

    <!-- ===== PAGE HERO ===== -->
    <section class="ve-page-hero" style="background-image:url({{ asset('assets/img/our-services/prom-night.webp') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Unforgettable Night</span>
            <h1>Prom <span>Limousine Service</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('our-services') }}">Services</a></li>
                    <li class="active">Prom Limo</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ===== SERVICE DETAIL SECTION ===== -->
    <section class="ve-section bg-light">
        <div class="container">
            <div class="row">
                <!-- Sidebar Column -->
                <div class="col-12 col-lg-4 mb-5 mb-lg-0 order-2 order-lg-1">
                    @include('components.service-sidebar')
                </div>

                <!-- Content Column -->
                <div class="col-12 col-lg-8 order-1 order-lg-2">
                    <div class="ve-service-detail-content">
                        <div class="ve-detail-main-img mb-40 wow fadeIn" data-wow-delay="100ms">
                            <img src="{{ asset('assets/img/our-services/prom-night.webp') }}" alt="Prom Limousine" class="img-fluid rounded-12 shadow-sm">
                        </div>

                        <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                            <span class="ve-section-tag">Style & Safety</span>
                            <h2>The Ultimate <span>Prom Experience</span></h2>
                            <p class="ve-lead">Arrive in style and make a grand entrance at your prom with our espectacular fleet of luxury limousines and party buses.</p>
                            
                            <p>Prom night is a once-in-a-lifetime event, and you deserve a ride that's as spectacular as your outfit. At Elite Limo, we provide more than just transportation; we provide the ultimate backdrop for your prom memories. From the moment our sparkling limousine pulls up to your door to the final drop-off, you'll feel like a true celebrity.</p>
                            
                            <p>We understand that for parents, safety is the top priority. That's why all our chauffeurs are background-checked, professionally trained, and committed to a strict zero-tolerance policy for underage drinking and unsafe behavior. With Elite Limo, students get the style they want, and parents get the peace of mind they need.</p>

                            <div class="row mt-40 mb-40">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-music"></i>
                                        <h5>Epic Sound & Lights</h5>
                                        <p>Premium Bluetooth sound systems and custom fiber-optic lighting to get the party started before you arrive.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-users"></i>
                                        <h5>Group Packages</h5>
                                        <p>Affordable rates and high-capacity vehicles so you can split the cost with all your friends.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-shield"></i>
                                        <h5>Safety Certified</h5>
                                        <p>Professional chauffeurs who prioritize student safety and follow all parent-specified itineraries.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-camera"></i>
                                        <h5>Photo Opportunities</h5>
                                        <p>Our pristine vehicles provide the perfect, glamorous background for your pre-prom group photos.</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Luxury for <span>Every Group Size</span></h3>
                            <p>Whether you're going as a couple or with twenty of your closest friends, our fleet has you covered. Choose from our elegant stretch limos, powerful SUV limousines, or our high-energy party buses. Every vehicle is meticulously cleaned and stocked with complimentary refreshments to ensure your night is perfect from start to finish.</p>

                            <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Chilled Soft Drinks & Water</li>
                                            <li><i class="fa fa-check"></i> Bluetooth Audio Integration</li>
                                            <li><i class="fa fa-check"></i> Multi-Point Pickup & Drop-off</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Climate Controlled Interior</li>
                                            <li><i class="fa fa-check"></i> Privacy Partitions</li>
                                            <li><i class="fa fa-check"></i> Professional Suited Chauffeurs</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="ve-detail-extra-content mt-50">
                                <div class="row align-items-center">
                                    <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                        <img src="{{ asset('assets/img/fleet/mercedes-sprinter-limo.webp') }}" alt="Prom Party Bus" class="img-fluid rounded-12 shadow-sm">
                                    </div>
                                    <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                        <h3>Celebrate <span>with the Squad</span></h3>
                                        <p>Our Mercedes Sprinter Limos and Party Buses are the most popular choice for prom groups. With standing room, perimeter seating, and immersive light shows, the celebration starts the moment you step inside. </p>
                                        <p>Our chauffeurs are experts at navigating the busiest prom venues, ensuring you're dropped off right at the front door like a VIP.</p>
                                    </div>
                                </div>

                                <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                    <h3>A Parent's <span>Top Choice</span></h3>
                                    <p>We take our responsibility to our younger passengers seriously. Our office staff maintains open communication with parents, providing the driver's contact info and confirming all pickup times. We ensure that students stay together and arrive home safely at the end of the night.</p>
                                    
                                    <div class="ve-quote-box mt-30">
                                        <i class="fa fa-quote-left"></i>
                                        <p>I was so worried about my son and his friends driving on prom night. Elite Limo was amazing. The driver was professional, the car was spotless, and most importantly, I knew they were in safe hands all night.</p>
                                        <div class="ve-quote-author">
                                            <strong>Mary Henderson</strong>
                                            <span>High School Parent</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center mt-50 mb-30">
                                    <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-delay="100ms">
                                        <h3>Custom <span>Itineraries</span></h3>
                                        <p>Want to go to a special dinner before the dance? Or a glamorous photo spot at the park? We accommodate your custom itinerary, providing the flexibility you need to have the perfect night. Just let us know your stops, and we'll handle the rest.</p>
                                        <p>Our goal is to provide a seamless, stress-free experience so you can focus on having the time of your life with your friends.</p>
                                    </div>
                                    <div class="col-md-6 order-1 order-md-2 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                        <img src="{{ asset('assets/img/our-services/prom-night.webp') }}" alt="Prom Night Memories" class="img-fluid rounded-12 shadow-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')
@endsection

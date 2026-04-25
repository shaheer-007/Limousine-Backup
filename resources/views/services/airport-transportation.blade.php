@extends('main')
@section('content')

    <!-- ===== PAGE HERO ===== -->
    <section class="ve-page-hero" style="background-image:url({{ asset('assets/img/our-services/aiport-transfer.webp') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Premium Service</span>
            <h1>Airport <span>Transportation</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('our-services') }}">Services</a></li>
                    <li class="active">Airport Transportation</li>
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
                            <img src="{{ asset('assets/img/our-services/aiport-transfer.webp') }}" alt="Airport Transportation" class="img-fluid rounded-12 shadow-sm">
                        </div>

                        <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                            <span class="ve-section-tag">Stress-Free Travel</span>
                            <h2>Professional Airport <span>Transfer Services</span></h2>
                            <p class="ve-lead">Arrive at your terminal refreshed and on time with our executive class airport transportation solutions.</p>
                            
                            <p>Navigating airport traffic and parking can be one of the most stressful parts of any journey. At Alar Chauffeur Service, we transform that experience into a seamless, relaxing transition between your home or office and the airport terminal.</p>
                            
                            <p>Our professional chauffeurs monitor your flight status in real-time, ensuring we are there when you land, regardless of delays or early arrivals. We provide curbside pickup or a personalized meet and greet service inside the terminal, complete with luggage assistance.</p>

                            <div class="row mt-40 mb-40">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-clock-o"></i>
                                        <h5>Punctual and Reliable</h5>
                                        <p>We pride ourselves on our 100% on time performance record for airport pickups.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-plane"></i>
                                        <h5>Flight Tracking</h5>
                                        <p>Real-time monitoring of your flight ensures we're there exactly when you need us.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-suitcase"></i>
                                        <h5>Luggage Assistance</h5>
                                        <p>Your chauffeur handles all your bags, so you don't have to lift a finger.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-map-marker"></i>
                                        <h5>Wait and Greet</h5>
                                        <p>Professional signage and greeting services at the terminal for a VIP experience.</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Serving All Major <span>Airports</span></h3>
                            <p>We provide consistent, high quality car service to and from all primary airports in the region, including executive terminals and private hangars. Whether you're traveling solo for business or with a large family group, our diverse fleet has the perfect vehicle for your luggage and passenger needs.</p>

                            <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> 60 Minutes Complimentary Wait Time</li>
                                            <li><i class="fa fa-check"></i> Bottled Water & WiFi Access</li>
                                            <li><i class="fa fa-check"></i> Child Safety Seats (Upon Request)</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Clean, Sanitized Late Model Fleet</li>
                                            <li><i class="fa fa-check"></i> Professional Suited Chauffeurs</li>
                                            <li><i class="fa fa-check"></i> 24/7 Dispatch and Support</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="ve-detail-extra-content mt-50">
                                <div class="row align-items-center">
                                    <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                        <img src="{{ asset('assets/img/fleet/mercedes-s550.webp') }}" alt="Luxury Sedan" class="img-fluid rounded-12 shadow-sm">
                                    </div>
                                    <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                        <h3>The Ultimate <span>Comfort Experience</span></h3>
                                        <p>Our airport fleet features late model vehicles equipped with premium leather seating, individualized climate control, and plenty of legroom. Whether you need to finish some work or simply catch up on sleep, our vehicles provide the perfect sanctuary from the outside world.</p>
                                        <p>We understand that international and long haul travel can be exhausting. That's why we ensure every detail of your ride is optimized for relaxation.</p>
                                    </div>
                                </div>

                                <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                    <h3>Professionalism <span>at Every Turn</span></h3>
                                    <p>Our chauffeurs are more than just drivers; they are trained hospitality professionals who understand the nuances of executive travel. From discretion and confidentiality to knowing the most efficient routes to avoid unexpected delays, your chauffeur is dedicated to your safety and satisfaction.</p>
                                    
                                    <div class="ve-quote-box mt-30">
                                        <i class="fa fa-quote-left"></i>
                                        <p>Alar Chauffeur Service has been my go-to for years. Their airport service is unbeatable for its reliability and the sheer quality of the vehicles. I never have to worry about being late for a flight.</p>
                                        <div class="ve-quote-author">
                                            <strong>Robert Sterling</strong>
                                            <span>Frequent Business Traveler</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center mt-50 mb-30">
                                    <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-delay="100ms">
                                        <h3>Personalized <span>Meet and Greet</span></h3>
                                        <p>Avoid the confusion of crowded terminals. Our professional Meet and Greet service includes your chauffeur waiting for you at the arrivals area with a personalized sign. We'll assist with your luggage and lead you directly to your waiting vehicle, parked in the closest possible proximity to the terminal.</p>
                                        <p>This service is highly recommended for international travelers, families with young children, or anyone looking for the smoothest possible transition from flight to car.</p>
                                    </div>
                                    <div class="col-md-6 order-1 order-md-2 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                        <img src="{{ asset('assets/img/our-services/aiport-transfer.webp') }}" alt="Meet and Greet" class="img-fluid rounded-12 shadow-sm">
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

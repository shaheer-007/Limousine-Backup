@extends('main')
@section('content')

    <!-- ===== PAGE HERO ===== -->
    <section class="ve-page-hero"
        style="background-image:url({{ asset('assets/img/our-services/cruise-limo.webp') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Start Your Vacation Right</span>
            <h1>Cruise Port <span>Transfers</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('our-services') }}">Services</a></li>
                    <li class="active">Cruise Transfers</li>
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
                            <img src="{{ asset('assets/img/our-services/cruise-limo.webp') }}"
                                alt="Cruise Port Transfer" class="img-fluid rounded-12 shadow-sm">
                        </div>

                        <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                            <span class="ve-section-tag">Seamless Travel</span>
                            <h2>Smooth Sailing <span>To Your Terminal</span></h2>
                            <p class="ve-lead">Begin and end your cruise vacation with the comfort and reliability of our premium port transfer services.</p>

                            <p>Getting to the cruise port shouldn't be the most stressful part of your vacation. Navigating unfamiliar coastal highways, fighting for expensive long term parking, and hauling heavy luggage across massive terminal lots can quickly drain the excitement of your upcoming voyage.</p>

                            <p>Alar Chauffeur Service provides point to point transportation directly to the major cruise terminals. Whether you need a transfer from the airport to your pre cruise hotel, or direct transportation from your home right to the ship's gangway, our chauffeurs ensure a smooth, relaxing start to your maritime adventure.</p>

                            <div class="row mt-40 mb-40">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-ship"></i>
                                        <h5>Direct Terminal Access</h5>
                                        <p>Authorized access to drop off and pick up directly at the luggage porters and check in terminals.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-suitcase"></i>
                                        <h5>Luggage Handling</h5>
                                        <p>Cruise vacations mean heavy bags. Your chauffeur will load and unload all your luggage for you.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-clock-o"></i>
                                        <h5>Perfect Timing</h5>
                                        <p>We coordinate with ship departure and debarkation schedules to ensure you are never rushed or waiting.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-users"></i>
                                        <h5>Family Friendly</h5>
                                        <p>Spacious SUVs and vans to accommodate the whole family comfortably, with car seats available upon request.</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Serving Major <span>Cruise Ports</span></h3>
                            <p>We offer reliable ground transportation to all the major sea ports and cruise terminals in the region. We monitor local port traffic and security checkpoints to determine the most efficient routing, bypassing the stress of typical port congestion.</p>

                            <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Airport to Port Transfers</li>
                                            <li><i class="fa fa-check"></i> Hotel Pickup and Coordination</li>
                                            <li><i class="fa fa-check"></i> Spacious Cargo Capacity</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Real time Traffic Monitoring</li>
                                            <li><i class="fa fa-check"></i> Disembarkation Wait and Greet</li>
                                            <li><i class="fa fa-check"></i> Large Group Mini Coaches</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="ve-detail-extra-content mt-50">
                                <div class="row align-items-center">
                                    <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                        <img src="{{ asset('assets/img/fleet/chevrolet-suburban.webp') }}" alt="Luxury SUV Transfer"
                                            class="img-fluid rounded-12 shadow-sm">
                                    </div>
                                    <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                        <h3>Stress Free <span>Debarkation</span></h3>
                                        <p>Returning from a cruise can be chaotic with thousands of passengers trying to find transportation simultaneously. Skip the long taxi lines.</p>
                                        <p>Your chauffeur will be waiting in the designated pre arranged transport area the moment you clear customs, ready to whisk you smoothly back to the airport or your home.</p>
                                    </div>
                                </div>

                                <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                    <h3>Trusted by <span>Travelers</span></h3>
                                    <p>Our commitment to reliable, high quality service makes us the preferred transportation partner for seasoned cruise vacationers.</p>

                                    <div class="ve-quote-box mt-30">
                                        <i class="fa fa-quote-left"></i>
                                        <p>We booked Alar Chauffeur Service for our family cruise out of the main port. Getting 8 people and 12 pieces of luggage there was intimidating, but their Sprinter van handled it flawlessly. It set the perfect tone for our vacation!</p>
                                        <div class="ve-quote-author">
                                            <strong>The Harrison Family</strong>
                                            <span>Annual Cruisers</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center mt-50 mb-30">
                                    <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-delay="100ms">
                                        <h3>Vans and SUVs <span>for Groups</span></h3>
                                        <p>Cruising is often a group activity. Our luxury SUVs and high top passenger vans provide ample head room and expansive cargo space, making group travel to the terminal efficient and affordable.</p>
                                        <p>Keep your party together from the moment you leave your front door.</p>
                                    </div>
                                    <div class="col-md-6 order-1 order-md-2 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                        <img src="{{ asset('assets/img/our-services/cruise-limo.webp') }}"
                                            alt="Port Transfer" class="img-fluid rounded-12 shadow-sm">
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

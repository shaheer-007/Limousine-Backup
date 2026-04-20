@extends('main')
@section('content')

    <!-- ===== PAGE HERO ===== -->
    <section class="ve-page-hero"
        style="background-image:url({{ asset('assets/img/our-services/group-transportation.webp') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Travel Together</span>
            <h1>Group <span>Transportation</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('our-services') }}">Services</a></li>
                    <li class="active">Group Transportation</li>
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
                            <img src="{{ asset('assets/img/our-services/group-transportation.webp') }}"
                                alt="Group Transportation" class="img-fluid rounded-12 shadow-sm">
                        </div>

                        <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                            <span class="ve-section-tag">Logistics Perfected</span>
                            <h2>Seamless Logistics <span>for Large Groups</span></h2>
                            <p class="ve-lead">Coordinate safe, reliable, and comfortable transportation for groups of any size with our premium fleet.</p>

                            <p>Organizing travel for a large group can be an overwhelming logistical challenge. From corporate retreats and family reunions to major conventions and guided tours, coordinating multiple vehicles and pickup times often leads to confusion and delays. Elite Limo provides a consolidated, stress-free solution for all your group transportation needs.</p>

                            <p>Our dedicated group logistics coordinators work with you to plan every detail. We offer a versatile fleet consisting of large luxury SUVs, Mercedes Sprinter vans, and spacious motor coaches. We don't just provide vehicles; we provide a comprehensive transportation strategy tailored specifically to your itinerary.</p>

                            <div class="row mt-40 mb-40">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-users"></i>
                                        <h5>Any Group Size</h5>
                                        <p>Whether you need to move 10 people or 500, we have the fleet capacity to handle it comfortably.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-map-signs"></i>
                                        <h5>Custom Routing</h5>
                                        <p>Multi-stop itineraries, hotel shuttles, and complex convention routing planned by experts.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-suitcase"></i>
                                        <h5>Ample Storage</h5>
                                        <p>Generous luggage capacity for extended trips, sports equipment, or convention materials.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-check-circle"></i>
                                        <h5>On-Site Coordinators</h5>
                                        <p>For very large events, we provide on-site staff to manage loading and ensure smooth departures.</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Versatile Fleet <span>Options</span></h3>
                            <p>Comfort doesn't have to be sacrificed when traveling in numbers. Our top-of-the-line Sprinter vans and motor coaches feature executive-style seating, climate control, and entertainment systems. You'll experience the same Elite Limo luxury whether you're in a sedan or a 55-passenger bus.</p>

                            <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Wi-Fi & Power Outlets</li>
                                            <li><i class="fa fa-check"></i> PA Systems for Tour Guides</li>
                                            <li><i class="fa fa-check"></i> Reclining Executive Seats</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Tinted Windows & Privacy</li>
                                            <li><i class="fa fa-check"></i> ADA Accessible Options</li>
                                            <li><i class="fa fa-check"></i> Dedicated Event Managers</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="ve-detail-extra-content mt-50">
                                <div class="row align-items-center">
                                    <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                        <img src="{{ asset('assets/img/fleet/55-passenger-bus.webp') }}" alt="Motor Coach"
                                            class="img-fluid rounded-12 shadow-sm">
                                    </div>
                                    <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                        <h3>Corporate & <span>Convention Travel</span></h3>
                                        <p>Impress your attendees and ensure your event runs smoothly with reliable shuttle services. We specialize in point-to-point transfers between airports, convention centers, and partner hotels.</p>
                                        <p>We provide a reliable backbone for your event logistics, so you can focus on the program rather than worrying about attendees getting lost in a new city.</p>
                                    </div>
                                </div>

                                <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                    <h3>Trusted by <span>Event Planners</span></h3>
                                    <p>Our meticulous attention to detail and flawless execution make us the go-to partner for professional event planners and travel agents nationwide.</p>

                                    <div class="ve-quote-box mt-30">
                                        <i class="fa fa-quote-left"></i>
                                        <p>Elite Limo moved our entire 300-person conference flawlessly. The vehicles were immaculate, the drivers were courteous, and their event coordinator made my job so much easier. Phenomenal service.</p>
                                        <div class="ve-quote-author">
                                            <strong>Sarah Jenkins</strong>
                                            <span>Corporate Event Director</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center mt-50 mb-30">
                                    <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-delay="100ms">
                                        <h3>Family Reunions & <span>Tours</span></h3>
                                        <p>Keep the family together! When navigating the city for a reunion, sightseeing tour, or massive celebration, keeping everyone in one vehicle enhances the fun and ensures nobody gets left behind.</p>
                                        <p>Our polite, knowledgeable chauffeurs can provide insights into the local area and adapt to route changes, so your group can explore at their own pace.</p>
                                    </div>
                                    <div class="col-md-6 order-1 order-md-2 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                        <img src="{{ asset('assets/img/fleet/mercedes-sprinter.webp') }}"
                                            alt="Group Van" class="img-fluid rounded-12 shadow-sm">
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
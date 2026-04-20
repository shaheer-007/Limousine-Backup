@extends('main')
@section('content')

    <!-- ===== PAGE HERO ===== -->
    <section class="ve-page-hero"
        style="background-image:url({{ asset('assets/img/our-services/sporting-events.webp') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Game Day Ready</span>
            <h1>Sporting Events <span>Transportation</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('our-services') }}">Services</a></li>
                    <li class="active">Sporting Events</li>
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
                            <img src="{{ asset('assets/img/our-services/sporting-events.webp') }}"
                                alt="Sporting Events Transportation" class="img-fluid rounded-12 shadow-sm">
                        </div>

                        <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                            <span class="ve-section-tag">Unmatched Game Day Experience</span>
                            <h2>Premium Transportation <span>for the Big Game</span></h2>
                            <p class="ve-lead">Upgrade your game day with comfortable, stress-free transportation to and from the stadium.</p>

                            <p>Nothing beats the excitement of live sports, but navigating stadium traffic, paying exorbitant parking fees, and appointing a designated driver can quickly drain the fun out of game day. Elite Limo takes the hassle out of sporting events, allowing you and your group to focus purely on the action.</p>

                            <p>Whether you're heading to a local matchup or a major championship game, our professional chauffeurs provide seamless door-to-door service. From luxury SUVs for smaller groups to spacious party buses for the ultimate tailgate, we have the perfect vehicle to kick off your celebration right.</p>

                            <div class="row mt-40 mb-40">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-car"></i>
                                        <h5>Skip the Traffic</h5>
                                        <p>Our chauffeurs know the quickest routes to get you to the stadium on time and away from the crowds afterward.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-glass"></i>
                                        <h5>Tailgate in Style</h5>
                                        <p>Pre-game in our luxurious vehicles equipped with premium sound systems and onboard refreshments.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-users"></i>
                                        <h5>Group Transportation</h5>
                                        <p>Travel together! Our fleet accommodates groups of any size, from small squads to large fan clubs.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-shield"></i>
                                        <h5>Safe & Reliable</h5>
                                        <p>Enjoy the game responsibly. Your designated driver is a trained professional who ensures everyone gets home safely.</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Your Roster <span>of Luxury Vehicles</span></h3>
                            <p>We boast a diverse fleet tailored for game day excitement. Select a sleek SUV for an executive experience, or go all out with a Party Bus equipped with LED lighting, flat-screen monitors, and perimeter seating. Whatever your style, you'll travel safely and comfortably.</p>

                            <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> VIP Curbside Drop-off & Pickup</li>
                                            <li><i class="fa fa-check"></i> High-End Audio & Video Systems</li>
                                            <li><i class="fa fa-check"></i> Ice Bins and Glassware Included</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Climate-Controlled Interiors</li>
                                            <li><i class="fa fa-check"></i> Privacy Partitions available</li>
                                            <li><i class="fa fa-check"></i> Ample Storage for Tailgating Gear</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="ve-detail-extra-content mt-50">
                                <div class="row align-items-center">
                                    <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                        <img src="{{ asset('assets/img/fleet/mercedes-sprinter.webp') }}" alt="Group Transportation"
                                            class="img-fluid rounded-12 shadow-sm">
                                    </div>
                                    <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                        <h3>The Ultimate <span>Pre-Game Party</span></h3>
                                        <p>Start the celebration the moment our vehicle arrives. Connect your playlist via Bluetooth, enjoy a cold beverage, and build the anticipation with your fellow fans.</p>
                                        <p>Our spacious vehicles offer plenty of room to stretch out, socialize, and get fired up for the big game without the stress of navigating through the pre-game rush.</p>
                                    </div>
                                </div>

                                <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                    <h3>Driven by <span>Excellence</span></h3>
                                    <p>Our commitment to reliable, high-quality service makes us the preferred transportation partner for sports fans looking for an elevated experience. Let us handle the driving while you focus on cheering your team to victory.</p>

                                    <div class="ve-quote-box mt-30">
                                        <i class="fa fa-quote-left"></i>
                                        <p>Booking Elite Limo for the championship game was the best decision we made. We avoided all the parking nightmares and had an amazing time tailgating in the Sprinter van. Highly recommended!</p>
                                        <div class="ve-quote-author">
                                            <strong>Michael T.</strong>
                                            <span>Die-hard Sports Fan</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center mt-50 mb-30">
                                    <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-delay="100ms">
                                        <h3>Post-Game <span>Convenience</span></h3>
                                        <p>When the final whistle blows, your chauffeur will be waiting at a pre-arranged location near the stadium exit. Avoid the massive lines for rideshares and public transit, and slide straight into your comfortable, climate-controlled ride home.</p>
                                        <p>No matter if your team wins or loses, you're guaranteed to finish the day like a champion with Elite Limo.</p>
                                    </div>
                                    <div class="col-md-6 order-1 order-md-2 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                        <img src="{{ asset('assets/img/our-services/sporting-events.webp') }}"
                                            alt="Stadium Action" class="img-fluid rounded-12 shadow-sm">
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
@extends('main')
@section('content')

    <!-- ===== PAGE HERO ===== -->
    <section class="ve-page-hero"
        style="background-image:url({{ asset('assets/img/our-services/our-services.webp') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Arrive Like a Star</span>
            <h1>Concerts & <span>Festivals</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('our-services') }}">Services</a></li>
                    <li class="active">Concerts & Festivals</li>
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
                            <img src="{{ asset('assets/img/our-services/concerts-and-festivals.webp') }}"
                                alt="Concerts and Festivals" class="img-fluid rounded-12 shadow-sm">
                        </div>

                        <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                            <span class="ve-section-tag">Unforgettable Nights</span>
                            <h2>Premium Transportation <span>for Live Music Events</span></h2>
                            <p class="ve-lead">Skip the parking nightmare and let the good times roll from the moment we pick you up.</p>

                            <p>Attending a live concert or a multi-day festival should be all about the music and the memories. But getting in and out of a packed venue can quickly turn a great night into a stressful ordeal. Elite Limo takes the hassle out of event transportation so you can focus on the show.</p>

                            <p>Whether you're heading to an intimate theater or a massive outdoor stadium, our professional chauffeurs provide seamless door-to-door service. Ditch the surge-pricing of rideshares, keep your group together, and enjoy the true VIP experience.</p>

                            <div class="row mt-40 mb-40">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-music"></i>
                                        <h5>Start the Party Early</h5>
                                        <p>Connect to our premium sound systems via Bluetooth and enjoy your favorite pre-game playlist.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-map-marker"></i>
                                        <h5>VIP Drop-off</h5>
                                        <p>Our drivers know the venues. We get you as close to the entrance as possible, bypassing long walks.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-glass"></i>
                                        <h5>Bring Your Own</h5>
                                        <p>Enjoy onboard refreshments in our limos and party buses without worrying about a designated driver.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-clock-o"></i>
                                        <h5>Easy Post-Show Exit</h5>
                                        <p>Your chauffeur will be waiting at a designated spot. No wandering around trying to find your ride.</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Luxury Tailored <span>to Your Vibe</span></h3>
                            <p>We boast a diverse fleet tailored for any concert experience. Select a sleek SUV for an intimate night out, or go all out with a Party Bus equipped with LED lighting, flat-screen monitors, and perimeter seating. Whatever your style, you'll travel safely and comfortably.</p>

                            <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> High-End Audio Systems</li>
                                            <li><i class="fa fa-check"></i> Ice Bins and Glassware Included</li>
                                            <li><i class="fa fa-check"></i> Deep Tinted Privacy Windows</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Multi-Point Pickup & Drop-Offs</li>
                                            <li><i class="fa fa-check"></i> Reliable Up-Front Pricing</li>
                                            <li><i class="fa fa-check"></i> Safe Returns Guaranteed</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="ve-detail-extra-content mt-50">
                                <div class="row align-items-center">
                                    <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                        <img src="{{ asset('assets/img/fleet/black-hummer-limo.webp') }}" alt="Hummer Limo"
                                            class="img-fluid rounded-12 shadow-sm">
                                    </div>
                                    <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                        <h3>The Ultimate <span>Festival Transport</span></h3>
                                        <p>Heading to a massive outdoor festival? Forget the dusty parking lots and gridlocked exits. Our larger vehicles, like our Hummer Limousines and Party Buses, are the ultimate basecamp.</p>
                                        <p>We provide a reliable, air-conditioned sanctuary where the group can recharge, ensuring everyone makes it safely back to the hotel after an exhausting day.</p>
                                    </div>
                                </div>

                                <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                    <h3>Driven by <span>Excellence</span></h3>
                                    <p>Our commitment to reliable, high-quality service makes us the preferred transportation partner for music fans looking for an elevated experience. Let us handle the driving.</p>

                                    <div class="ve-quote-box mt-30">
                                        <i class="fa fa-quote-left"></i>
                                        <p>We rented a Sprinter for the music festival, and it was the best decision ever! We bypassed the huge Uber line at the end of the night and chilled in the AC while everyone else was stuck.</p>
                                        <div class="ve-quote-author">
                                            <strong>Jessica M.</strong>
                                            <span>Festival Goer</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center mt-50 mb-30">
                                    <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-delay="100ms">
                                        <h3>Stress-Free <span>Coordination</span></h3>
                                        <p>Don't worry about trying to keep a caravan of cars together. When you book with Elite Limo, everyone arrives at the same time and leaves at the same time.</p>
                                        <p>Enjoy the music, enjoy the drinks, and let our professional chauffeurs worry about the road.</p>
                                    </div>
                                    <div class="col-md-6 order-1 order-md-2 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                        <img src="{{ asset('assets/img/our-services/concerts-and-festivals.webp') }}"
                                            alt="Live Music Action" class="img-fluid rounded-12 shadow-sm">
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

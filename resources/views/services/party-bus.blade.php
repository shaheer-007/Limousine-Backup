@extends('main')
@section('content')

    <!-- ===== PAGE HERO ===== -->
    <section class="ve-page-hero"
        style="background-image:url({{ asset('assets/img/our-services/party-bus.webp') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Rolling Nightclub</span>
            <h1>Party Bus <span>Rentals</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('our-services') }}">Services</a></li>
                    <li class="active">Party Bus</li>
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
                            <img src="{{ asset('assets/img/our-services/party-bus.webp') }}"
                                alt="Luxury Party Bus" class="img-fluid rounded-12 shadow-sm">
                        </div>

                        <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                            <span class="ve-section-tag">Unmatched Entertainment</span>
                            <h2>The Ultimate <span>Party on Wheels</span></h2>
                            <p class="ve-lead">Take your celebration to the next level with our state of the art party buses, designed for the ultimate night out.</p>

                            <p>When you're rolling with a large crew and want the celebration to never stop, an Alar Chauffeur Service Party Bus is the only way to travel. Forget squeezing into tight sedans or splitting up into multiple rideshares. Our party buses let you stand up, walk around, and dance while en route to your destination.</p>

                            <p>Perfect for bachelor/bachelorette parties, milestone birthdays, wine tours, and epic nights on the town, our vehicles are essentially private VIP rooms that move. From the booming sound systems to the dazzling light displays, we provide an unforgettable atmosphere.</p>

                            <div class="row mt-40 mb-40">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-music"></i>
                                        <h5>Epic Sound Systems</h5>
                                        <p>Massive subwoofers and Bluetooth connectivity put you in complete control of the DJ booth.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-lightbulb-o"></i>
                                        <h5>Laser Light Shows</h5>
                                        <p>Immersive fiber optic lighting, strobes, and LED ceilings create a true nightclub environment.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-glass"></i>
                                        <h5>Built in Bars</h5>
                                        <p>Multiple wet bars stocked with ice, glassware, and bottled water. You supply the beverages, we supply the fun.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-arrows-alt"></i>
                                        <h5>Room to Groove</h5>
                                        <p>High ceilings allow guests to stand, mingle, and comfortably socialize throughout the vehicle.</p>
                                    </div>
                                </div>
                            </div>

                            <h3>A Fleet Built <span>for Celebrating</span></h3>
                            <p>We offer a variety of sizes to ensure the perfect fit for your crew. Whether you have an intimate group of 12 or a massive party of 30+, we have a meticulously maintained bus ready to roll. Each vehicle features plush perimeter leather seating ensuring everyone has a prime spot.</p>

                            <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Flat Screen TVs and Media Ports</li>
                                            <li><i class="fa fa-check"></i> Hardwood Dance Floors</li>
                                            <li><i class="fa fa-check"></i> Privacy Shades</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Multi zone Climate Control</li>
                                            <li><i class="fa fa-check"></i> Dedicated Professional Chauffeur</li>
                                            <li><i class="fa fa-check"></i> Fully Insured and DOT Regulated</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="ve-detail-extra-content mt-50">
                                <div class="row align-items-center">
                                    <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                        <img src="{{ asset('assets/img/fleet/25-bus-passanger.webp') }}" alt="Party Bus Interior"
                                            class="img-fluid rounded-12 shadow-sm">
                                    </div>
                                    <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                        <h3>Safe and Reliable <span>Designated Driving</span></h3>
                                        <p>The best part of booking a party bus? Everyone gets to participate in the fun. Our professional, background checked chauffeurs serve as your reliable designated driver for the evening.</p>
                                        <p>We handle the traffic, the directions, and the parking, ensuring every single member of your group gets home safely at the end of the night.</p>
                                    </div>
                                </div>

                                <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                    <h3>Driven by <span>Excellence</span></h3>
                                    <p>Our commitment to reliable, high quality service makes us the preferred transportation partner for epic celebrations.</p>

                                    <div class="ve-quote-box mt-30">
                                        <i class="fa fa-quote-left"></i>
                                        <p>We rented the large party bus for my sister's bachelorette, and it was INSANE. The lights, the sound, the driver—everything was absolutely perfect. The bus was the highlight of the night!</p>
                                        <div class="ve-quote-author">
                                            <strong>Amanda W.</strong>
                                            <span>Bachelorette Party Planner</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center mt-50 mb-30">
                                    <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-delay="100ms">
                                        <h3>Custom Built <span>Itineraries</span></h3>
                                        <p>Hit all your favorite spots in one night. Whether it's a pub crawl, a multi stop wine tasting tour, or just cruising the city streets, you call the shots.</p>
                                        <p>Provide us your itinerary in advance, or just tell your driver where to go next. The night is yours to command.</p>
                                    </div>
                                    <div class="col-md-6 order-1 order-md-2 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                        <img src="{{ asset('assets/img/our-services/party-bus.webp') }}"
                                            alt="Night on the Town" class="img-fluid rounded-12 shadow-sm">
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
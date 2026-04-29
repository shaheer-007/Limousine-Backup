@extends('main')
@section('meta_title', 'Luxury Chauffeur Service in New York | Alar Chauffeur Service')
@section('meta_description', 'Book luxury chauffeur service in New York with Alar Chauffeur Service for Manhattan business travel, airport transfers, events, and private transportation.')
@section('content')

    <!-- ===== PAGE HERO (Sophisticated Text-Only) ===== -->
    <section class="ve-page-hero-simple">
        <div class="container">
            <div class="ve-hero-simple-content">
                <span class="ve-section-tag">Service Areas</span>
                <h1>Luxury Transportation in <span>New York</span></h1>
                <p>Sophisticated chauffeur solutions for the city that never sleeps.</p>
            </div>
        </div>
    </section>

    <!-- ===== DETAIL CONTENT ===== -->
    <section class="ve-section bg-white">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-12 col-lg-8">
                    <div class="ve-service-area-detail">
                        <div class="ve-area-intro mb-50">
                            <h2 class="mb-20">Premium Chauffeur Service <span>NYC</span></h2>
                            <p class="ve-lead">Experience the pinnacle of luxury transportation in the Empire State. Our New York chauffeur service provides unparalleled coverage across Manhattan, Brooklyn, and the surrounding boroughs.</p>
                            
                            <p>At Alar Chauffeur Service, we understand that New York demands a level of precision and professionalism that only a premier service can provide. Navigating the complex streets of Manhattan requires local expertise and a commitment to punctuality that we have perfected over years of dedicated service.</p>
                        </div>

                        <div class="ve-area-features mb-50">
                            <h3>Our New York <span>Capabilities</span></h3>
                            <div class="row mt-30">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-plane"></i>
                                        <h5>Airport Excellence</h5>
                                        <p>Seamless transfers to JFK, LaGuardia, and Newark with real-time flight monitoring and terminal greeting.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-briefcase"></i>
                                        <h5>Corporate Logistics</h5>
                                        <p>Reliable transportation for executive meetings, roadshows, and corporate events across the Financial District and Midtown.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-map-marker"></i>
                                        <h5>Borough Coverage</h5>
                                        <p>Dedicated service extending from the heart of Manhattan to Brooklyn, Queens, and the Bronx.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-clock-o"></i>
                                        <h5>Hourly Discretion</h5>
                                        <p>Professional on-call chauffeurs available for as long as your schedule requires, providing absolute flexibility.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ve-area-description">
                            <h3>A Tradition of <span>Excellence</span></h3>
                            <p>Whether you are attending a high-profile gala, a critical business engagement, or simply require the comfort of a private vehicle after a long flight, Alar Chauffeur Service is your trusted partner in New York. Our fleet of late model sedans and SUVs is maintained to the highest standards, ensuring that your arrival is as impressive as your destination.</p>
                            <p>We pride ourselves on our discretion and our ability to handle the unique requirements of our New York clientele. From celebrity transport to diplomatic missions, we provide a level of service that is unmatched in the industry.</p>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-12 col-lg-4 mt-50 mt-lg-0">
                    <div class="ve-service-sidebar">
                        <div class="ve-sidebar-widget">
                            <h5>Other Service Areas</h5>
                            <ul class="ve-sidebar-links">
                                <li><a href="{{ route('service-area.new-jersey') }}">New Jersey</a></li>
                                <li class="active"><a href="{{ route('service-area.new-york') }}">New York</a></li>
                                <li><a href="{{ route('service-area.california') }}">California</a></li>
                                <li><a href="{{ route('service-area.san-francisco') }}">San Francisco</a></li>
                                <li><a href="{{ route('service-area.nevada') }}">Nevada</a></li>
                                <li><a href="{{ route('service-area.seattle') }}">Seattle</a></li>
                            </ul>
                        </div>
                        
                        <div class="ve-sidebar-cta" style="background: var(--ve-dark); padding: 30px; border-radius: 12px; color: #fff;">
                            <h4 style="color: #fff; margin-bottom: 15px;">Book Your NYC Ride</h4>
                            <p style="font-size: 14px; opacity: 0.8; margin-bottom: 20px;">Ready to experience the Alar difference in New York? Book your chauffeur online today.</p>
                            <a href="{{ route('book-online') }}" class="ve-btn-primary" style="width: 100%; text-align: center;">Book Online</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')

@endsection

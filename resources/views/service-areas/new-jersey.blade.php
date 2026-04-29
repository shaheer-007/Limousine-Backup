@extends('main')
@section('meta_title', 'Luxury Chauffeur Service in New Jersey | Alar Chauffeur Service')
@section('meta_description', 'Experience premium chauffeur service in New Jersey with Alar Chauffeur Service for airport transfers, executive travel, events, and reliable luxury transportation.')
@section('content')

    <!-- ===== PAGE HERO (Sophisticated Text-Only) ===== -->
    <section class="ve-page-hero-simple">
        <div class="container">
            <div class="ve-hero-simple-content">
                <span class="ve-section-tag">Service Areas</span>
                <h1>Luxury Transportation in <span>New Jersey</span></h1>
                <p>Reliable and elegant chauffeur services across the Garden State.</p>
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
                            <h2 class="mb-20">Premium Chauffeur Service <span>New Jersey</span></h2>
                            <p class="ve-lead">Providing seamless transportation solutions from the Hudson Waterfront to the Jersey Shore. Our New Jersey service is designed for the discerning traveler who values efficiency and comfort.</p>
                            
                            <p>New Jersey is a hub of international commerce and residential excellence. At Alar Chauffeur Service, we bridge the gap between your home and your destination with a fleet that represents the height of modern luxury. Our chauffeurs are intimately familiar with the unique traffic patterns of the state, ensuring you arrive on time, every time.</p>
                        </div>

                        <div class="ve-area-features mb-50">
                            <h3>Our New Jersey <span>Expertise</span></h3>
                            <div class="row mt-30">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-plane"></i>
                                        <h5>EWR Airport Specialists</h5>
                                        <p>Expert navigation to Newark Liberty International Airport with personalized pickup and drop-off services.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-building"></i>
                                        <h5>Corporate Corridors</h5>
                                        <p>Efficient transport for the major corporate headquarters in Jersey City, Princeton, and Morristown.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-star"></i>
                                        <h5>Event Excellence</h5>
                                        <p>Sophisticated transportation for weddings, galas, and private events in New Jersey's most prestigious venues.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-road"></i>
                                        <h5>State to State Travel</h5>
                                        <p>Comfortable long-distance journeys between New Jersey and neighboring states like New York and Pennsylvania.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ve-area-description">
                            <h3>Commitment to <span>Reliability</span></h3>
                            <p>We understand that your time is your most valuable asset. Whether you are commuting to Manhattan for a board meeting or require a reliable ride to Teterboro for a private flight, Alar Chauffeur Service is dedicated to providing a stress free environment where you can relax or work in peace.</p>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-12 col-lg-4 mt-50 mt-lg-0">
                    <div class="ve-service-sidebar">
                        <div class="ve-sidebar-widget">
                            <h5>Other Service Areas</h5>
                            <ul class="ve-sidebar-links">
                                <li class="active"><a href="{{ route('service-area.new-jersey') }}">New Jersey</a></li>
                                <li><a href="{{ route('service-area.new-york') }}">New York</a></li>
                                <li><a href="{{ route('service-area.california') }}">California</a></li>
                                <li><a href="{{ route('service-area.san-francisco') }}">San Francisco</a></li>
                                <li><a href="{{ route('service-area.nevada') }}">Nevada</a></li>
                                <li><a href="{{ route('service-area.seattle') }}">Seattle</a></li>
                            </ul>
                        <div class="ve-sidebar-cta" style="background: var(--ve-dark); padding: 30px; border-radius: 12px; color: #fff;">
                            <h4 style="color: #fff; margin-bottom: 15px;">Book Your Ride</h4>
                            <p style="font-size: 14px; opacity: 0.8; margin-bottom: 20px;">Ready to experience the Alar difference in New Jersey? Book your professional chauffeur online today.</p>
                            <a href="{{ route('book-online') }}" class="ve-btn-primary" style="width: 100%; text-align: center;">Book Online</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')

@endsection

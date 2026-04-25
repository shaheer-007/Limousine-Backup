@extends('main')
@section('content')

    <!-- ===== PAGE HERO (Sophisticated Text-Only) ===== -->
    <section class="ve-page-hero-simple">
        <div class="container">
            <div class="ve-hero-simple-content">
                <span class="ve-section-tag">Service Areas</span>
                <h1>Luxury Limo Service in <span>San Francisco</span></h1>
                <p>Sophisticated transportation solutions for the Bay Area and Silicon Valley.</p>
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
                            <h2 class="mb-20">Elite Chauffeur Experience <span>San Francisco</span></h2>
                            <p class="ve-lead">Navigate the iconic hills and innovative tech corridors of San Francisco with absolute elegance. Our premier limo service is designed to meet the rigorous demands of the Bay Area's corporate and private elite.</p>
                            
                            <p>San Francisco is a city defined by its unique geography and its role as a global technology hub. At Alar Chauffeur Service, we provide specialized transportation that handles the city's complex routes with grace and precision. From the Financial District to the heart of Silicon Valley, we ensure your journey is seamless and productive.</p>
                        </div>

                        <div class="ve-area-features mb-50">
                            <h3>Our Bay Area <span>Specialties</span></h3>
                            <div class="row mt-30">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-plane"></i>
                                        <h5>SFO Airport Luxury</h5>
                                        <p>Personalized greeting and transfer services for San Francisco International, Oakland, and Mineta San Jose airports.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-laptop"></i>
                                        <h5>Silicon Valley Logistics</h5>
                                        <p>Reliable transportation for tech executives and campus visits across Mountain View, Palo Alto, and Sunnyvale.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-building"></i>
                                        <h5>Corporate Meetings</h5>
                                        <p>Efficient black car services for board meetings, conferences, and high-level engagements in the Financial District.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-map-o"></i>
                                        <h5>Regional Travel</h5>
                                        <p>Premium long-distance options for visits to Napa Valley, Monterey, and other surrounding luxury destinations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ve-area-description">
                            <h3>Sophistication <span>Redefined</span></h3>
                            <p>We understand the fast-paced nature of the San Francisco business world. That's why our service is built on a foundation of reliability and absolute discretion. Whether you need a quiet space to prepare for a pitch or a professional driver to handle your guest's logistics, Alar Chauffeur Service is your premier choice in the Bay Area.</p>
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
                                <li><a href="{{ route('service-area.new-york') }}">New York</a></li>
                                <li><a href="{{ route('service-area.california') }}">California</a></li>
                                <li class="active"><a href="{{ route('service-area.san-francisco') }}">San Francisco</a></li>
                                <li><a href="{{ route('service-area.nevada') }}">Nevada</a></li>
                                <li><a href="{{ route('service-area.seattle') }}">Seattle</a></li>
                            </ul>
                        <div class="ve-sidebar-cta" style="background: var(--ve-dark); padding: 30px; border-radius: 12px; color: #fff;">
                            <h4 style="color: #fff; margin-bottom: 15px;">Book Your Ride</h4>
                            <p style="font-size: 14px; opacity: 0.8; margin-bottom: 20px;">Ready for the elite Bay Area experience? Book your San Francisco chauffeur online today.</p>
                            <a href="{{ route('book-online') }}" class="ve-btn-primary" style="width: 100%; text-align: center;">Book Online</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')

@endsection

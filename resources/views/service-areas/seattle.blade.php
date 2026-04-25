@extends('main')
@section('content')

    <!-- ===== PAGE HERO (Sophisticated Text-Only) ===== -->
    <section class="ve-page-hero-simple">
        <div class="container">
            <div class="ve-hero-simple-content">
                <span class="ve-section-tag">Service Areas</span>
                <h1>Luxury Transportation in <span>Seattle</span></h1>
                <p>Elite chauffeur services for the Emerald City and the Pacific Northwest.</p>
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
                            <h2 class="mb-20">Premium Chauffeur Service <span>Seattle</span></h2>
                            <p class="ve-lead">Navigate the dynamic landscape of the Pacific Northwest with absolute elegance. Our Seattle chauffeur service provides sophisticated travel solutions for the city's tech leaders, maritime industries, and private elite.</p>
                            
                            <p>Seattle is a city of innovation, nestled between breathtaking natural beauty and a thriving industrial base. At Alar Chauffeur Service, we understand the importance of reliability in the Emerald City's fast-paced environment. Whether you are visiting the tech campuses of Redmond or the busy maritime terminals, we ensure your journey is smooth, safe, and professional.</p>
                        </div>

                        <div class="ve-area-features mb-50">
                            <h3>Our Seattle <span>Excellence</span></h3>
                            <div class="row mt-30">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-plane"></i>
                                        <h5>SEA-Tac Specialists</h5>
                                        <p>Expert terminal greeting and seamless transfers to and from Seattle-Tacoma International Airport.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-laptop"></i>
                                        <h5>Tech Sector Logistics</h5>
                                        <p>Reliable transportation for executives and teams visiting major campuses in Seattle, Bellevue, and Redmond.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-ship"></i>
                                        <h5>Maritime & Cruise</h5>
                                        <p>Sophisticated terminal transfers for cruise passengers and maritime industry professionals at the Port of Seattle.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-map-marker"></i>
                                        <h5>Regional Coverage</h5>
                                        <p>Dedicated service extending from the heart of downtown Seattle to Tacoma, Everett, and beyond.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ve-area-description">
                            <h3>A Sanctuary of <span>Comfort</span></h3>
                            <p>We pride ourselves on our ability to handle the unique requirements of the Seattle region. Our commitment to excellence and our attention to every detail make us the premier choice for those who demand only the best in the Pacific Northwest.</p>
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
                                <li><a href="{{ route('service-area.san-francisco') }}">San Francisco</a></li>
                                <li><a href="{{ route('service-area.nevada') }}">Nevada</a></li>
                                <li class="active"><a href="{{ route('service-area.seattle') }}">Seattle</a></li>
                            </ul>
                        <div class="ve-sidebar-cta" style="background: var(--ve-dark); padding: 30px; border-radius: 12px; color: #fff;">
                            <h4 style="color: #fff; margin-bottom: 15px;">Book Your Ride</h4>
                            <p style="font-size: 14px; opacity: 0.8; margin-bottom: 20px;">Experience the best of the Pacific Northwest. Book your Seattle chauffeur online today.</p>
                            <a href="{{ route('book-online') }}" class="ve-btn-primary" style="width: 100%; text-align: center;">Book Online</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')

@endsection

@extends('main')
@section('content')

    <!-- ===== PAGE HERO (Sophisticated Text-Only) ===== -->
    <section class="ve-page-hero-simple">
        <div class="container">
            <div class="ve-hero-simple-content">
                <span class="ve-section-tag">Service Areas</span>
                <h1>Luxury Transportation in <span>Nevada</span></h1>
                <p>Sophisticated chauffeur services from the desert lights to the mountain peaks.</p>
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
                            <h2 class="mb-20">Premium Chauffeur Service <span>Nevada</span></h2>
                            <p class="ve-lead">Experience the height of luxury transportation in the Silver State. From the high-energy streets of Las Vegas to the serene beauty of Lake Tahoe, our Nevada service offers unparalleled professionalism and style.</p>
                            
                            <p>Nevada is a state of contrast and grandeur. Whether you are arriving for a major convention, a world-class entertainment event, or a private mountain retreat, Alar Chauffeur Service provides a seamless travel experience. Our fleet of late model luxury vehicles and expert chauffeurs ensure your Nevada journey is defined by comfort and absolute punctuality.</p>
                        </div>

                        <div class="ve-area-features mb-50">
                            <h3>Our Nevada <span>Capabilities</span></h3>
                            <div class="row mt-30">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-plane"></i>
                                        <h5>LAS Airport Excellence</h5>
                                        <p>Personalized greeting and seamless transfers at Harry Reid International Airport for a stress-free arrival.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-star"></i>
                                        <h5>Strip & Event Logistics</h5>
                                        <p>Discreet and reliable transportation for major conventions, world-class shows, and high-profile events along the Strip.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-briefcase"></i>
                                        <h5>Corporate Solutions</h5>
                                        <p>Professional transportation for board meetings, executive retreats, and corporate campus visits throughout Nevada.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-map-marker"></i>
                                        <h5>Regional Coverage</h5>
                                        <p>Dedicated service extending from the heart of Las Vegas to Henderson, Reno, and the Lake Tahoe region.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ve-area-description">
                            <h3>A Tradition of <span>Excellence</span></h3>
                            <p>We understand the unique demands of our Nevada clientele. Whether you are a frequent business traveler or visiting for a special occasion, Alar Chauffeur Service provides a sanctuary of peace in the middle of the desert. Our commitment to discretion and our attention to every detail make us the premier choice for luxury travel in Nevada.</p>
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
                                <li class="active"><a href="{{ route('service-area.nevada') }}">Nevada</a></li>
                                <li><a href="{{ route('service-area.seattle') }}">Seattle</a></li>
                            </ul>
                        <div class="ve-sidebar-cta" style="background: var(--ve-dark); padding: 30px; border-radius: 12px; color: #fff;">
                            <h4 style="color: #fff; margin-bottom: 15px;">Book Your Ride</h4>
                            <p style="font-size: 14px; opacity: 0.8; margin-bottom: 20px;">Planning your Nevada journey? Book your professional chauffeur service online today.</p>
                            <a href="{{ route('book-online') }}" class="ve-btn-primary" style="width: 100%; text-align: center;">Book Online</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')

@endsection

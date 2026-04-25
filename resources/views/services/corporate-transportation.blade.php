@extends('main')
@section('content')

    <!-- ===== PAGE HERO ===== -->
    <section class="ve-page-hero"
        style="background-image:url({{ asset('assets/img/our-services/corporate-limo.webp') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Executive Service</span>
            <h1>Corporate <span>Transportation</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('our-services') }}">Services</a></li>
                    <li class="active">Corporate Transportation</li>
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
                            <img src="{{ asset('assets/img/our-services/corporate-limo.webp') }}"
                                alt="Corporate Transportation" class="img-fluid rounded-12 shadow-sm">
                        </div>

                        <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                            <span class="ve-section-tag">Business Excellence</span>
                            <h2>Alar Corporate <span>Travel Solutions</span></h2>
                            <p class="ve-lead">Elevate your business profile with our sophisticated, reliable, and discreet executive chauffeur services.</p>

                            <p>For the modern executive, time is the most valuable asset. At Alar Chauffeur Service, we provide a mobile office environment that allows you to focus on your business goals while we handle the complexities of the road. Whether it's a critical meeting, a corporate event, or hosting high-value clients, our service reflects the professionalism of your brand.</p>

                            <p>Our corporate accounts offer flexible billing, priority scheduling, and a dedicated account manager to ensure your transportation needs are met with perfect precision at any hour of the day or night.</p>

                            <div class="row mt-40 mb-40">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-briefcase"></i>
                                        <h5>Executive Chauffeurs</h5>
                                        <p>Our drivers are highly trained in executive protocol, ensuring complete discretion and professionalism.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <h5>Priority Dispatch</h5>
                                        <p>Corporate account holders receive priority vehicle assignment even during peak seasonal periods.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-line-chart"></i>
                                        <h5>Flexible Billing</h5>
                                        <p>Simplified monthly invoicing and digital receipts for easy expense tracking and management.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-shield"></i>
                                        <h5>Confidentiality</h5>
                                        <p>Strict non-disclosure standards maintained by all staff to protect your business conversations.</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Comprehensive <span>Corporate Solutions</span></h3>
                            <p>Beyond individual executive travel, we specialize in high capacity logistics for corporate roadshows, industry conventions, and employee shuttle services. Our fleet ranges from executive sedans to luxury motor coaches, capable of moving hundreds of attendees with pinpoint coordination.</p>

                            <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                             <li><i class="fa fa-check"></i> High Speed In Car Wi-Fi</li>
                                             <li><i class="fa fa-check"></i> Mobile Charging Stations</li>
                                             <li><i class="fa fa-check"></i> Daily Newspapers and Magazines</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> 100% Punctuality Guarantee</li>
                                            <li><i class="fa fa-check"></i> Real-Time Route Optimization</li>
                                            <li><i class="fa fa-check"></i> Dedicated Corporate Support</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="ve-detail-extra-content mt-50">
                                <div class="row align-items-center">
                                    <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                        <img src="{{ asset('assets/img/about-us/excellence-and-discretion-2.webp') }}" alt="Executive Meeting"
                                            class="img-fluid rounded-12 shadow-sm">
                                    </div>
                                    <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                         <h3>A Productive <span>Mobile Environment</span></h3>
                                         <p>Our vehicles are selected for their quiet cabins and smooth ride characteristics, creating the ideal space for conference calls or last minute presentation reviews. With complimentary connectivity and power access, you never have to be offline.</p>
                                         <p>We handle the traffic and navigation so you can arrive at your meeting focused, prepared, and ready to win.</p>
                                    </div>
                                </div>

                                <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                    <h3>Trusted by <span>Industry Leaders</span></h3>
                                    <p>From Fortune 500 companies to innovative startups, we are the preferred transportation partner for organizations that demand excellence. Our commitment to safety, reliabilty, and transparency sets the benchmark for executive travel.</p>

                                     <div class="ve-quote-box mt-30">
                                         <i class="fa fa-quote-left"></i>
                                         <p>The level of professionalism displayed by Alar Chauffeur Service is unparalleled. For our executive team, they aren't just a car service, they are a critical component of our logistical operations.</p>
                                         <div class="ve-quote-author">
                                             <strong>Eleanor Vance</strong>
                                             <span>Chief Operating Officer</span>
                                         </div>
                                     </div>
                                </div>

                                <div class="row align-items-center mt-50 mb-30">
                                    <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-delay="100ms">
                                        <h3>Global <span>Network Coordination</span></h3>
                                         <p>Planning travel for a visiting delegation? Our coordination team can manage multiple arrivals and departures across different hubs, ensuring a consistent brand experience for your guests from the moment they step off the plane.</p>
                                         <p>We provide real time GPS tracking and live status updates, so your executive assistants are always informed of the vehicle's position and estimated time of arrival.</p>
                                    </div>
                                    <div class="col-md-6 order-1 order-md-2 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                        <img src="{{ asset('assets/img/our-services/corporate-limo.webp') }}"
                                            alt="Global Logistics" class="img-fluid rounded-12 shadow-sm">
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
@extends('main')
@section('content')
    <section class="ve-page-hero" style="background-image:url({{ asset('assets/img/banner/about-us.webp') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Who We Are</span>
            <h1>About <span>Us</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">About Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ===== WHY US (two-column: image left, content right) ===== -->
    <section class="ve-section ve-whyus-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Side -->
                <div class="col-12 col-lg-5 order-md-2 order-2 order-lg-0">
                    <div class="ve-whyus-img-wrap wow fadeInLeft" data-wow-delay="100ms">
                        <div class="ve-whyus-img-main bg-img"
                            style="background-image:url({{ asset('assets/img/bg-img/5.jpg') }});"></div>
                        <div class="ve-whyus-badge">
                            <strong>12+</strong>
                            <span>Years of Financial Excellence</span>
                        </div>
                    </div>
                </div>
                <!-- Content Side -->
                <div class="col-12 col-lg-7 order-md-1 order-1 mb-5 order-lg-0 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-whyus-content">
                        <span class="ve-section-tag">About Us</span>
                        <h2>A Smarter Way to Travel <span>In Luxury</span></h2>
                        <p>We combine premium vehicles with highly trained professional chauffeurs to ensure your journey is
                            as smooth as it is stylish.</p>
                        <div class="ve-checklist">
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                                <div><strong>Professional Chauffeurs</strong>
                                    <p>Our drivers are vetted, trained, and committed to providing the highest level of
                                        service.</p>
                                </div>
                            </div>
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                                <div><strong>Fixed & Transparent Pricing</strong>
                                    <p>No unexpected surcharges. Know your fare upfront when you book with us.</p>
                                </div>
                            </div>
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                                <div><strong>Reliable & Punctual</strong>
                                    <p>We value your time. Our chauffeurs arrive 15 minutes early to ensure on-time
                                        departure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="ve-fleet-btns mt-4" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                            <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MISSION / VISION / VALUES -->
    <section class="ve-mvv-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Our Foundation</span>
                <h2>Our Mission &amp; <span>Core Values</span></h2>
            </div>
            <div class="ve-mvv-grid">
                <div class="ve-mvv-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-mvv-icon"><i class="fa fa-bullseye"></i></div>
                    <h4>Our Mission</h4>
                    <p>To provide reliable, safe, and sophisticated transportation solutions that exceed the expectations of
                        our most discerning clients.</p>
                </div>
                <div class="ve-mvv-card wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-mvv-icon"><i class="fa fa-eye"></i></div>
                    <h4>Our Vision</h4>
                    <p>To become the world's most trusted name in luxury transportation, known for our innovation and
                        unwavering attention to detail.</p>
                </div>
                <div class="ve-mvv-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-mvv-icon"><i class="fa fa-heart"></i></div>
                    <h4>Our Values</h4>
                    <p>Punctuality, absolute discretion, safety first, and a commitment to maintaining the finest fleet in
                        the industry.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SPLIT -->
    <section class="ve-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                    <div>
                        <span class="ve-section-tag">Why Choose Us</span>
                        <h2>The Elite Standard in <span>Luxury Travel</span></h2>
                        <p class="ve-lead">We are a team of professional transportation specialists dedicated to providing
                            more than just a ride—we provide a premium travel experience.</p>
                        <p>Founded in 2012, our service was built on a single mission: to redefine luxury transportation
                            through punctuality, safety, and unparalleled comfort. Today, we operate a world-class fleet
                            serving thousands of satisfied clients.</p>
                        <div class="ve-about-features">
                            <div class="ve-af-item"><i class="fa fa-badge"></i><span>Certified Professional
                                    Chauffeurs</span></div>
                            <div class="ve-af-item"><i class="fa fa-shield"></i><span>Fully Insured & Licensed Fleet</span>
                            </div>
                            <div class="ve-af-item"><i class="fa fa-clock-o"></i><span>Guaranteed On-Time Arrival</span>
                            </div>
                            <div class="ve-af-item"><i class="fa fa-star"></i><span>5-Star Premium Amenities</span></div>
                        </div>
                        <div class="ve-fleet-btns mt-4" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                            <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 wow fadeInLeft " data-wow-delay="100ms">
                    <div class="ve-about-text">
                        <div class="ve-about-img-1 bg-img"
                            style="background-image:url({{ asset('assets/img/bg-img/14.jpg') }});"></div>
                        <div class="ve-about-img-2 bg-img"
                            style="background-image:url({{ asset('assets/img/bg-img/5.jpg') }});"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== TESTIMONIALS ===== -->
    <section class="ve-section ve-testimonials-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Client Stories</span>
                <h2>What Our Clients <span>Say</span></h2>
            </div>
            <div class="owl-carousel ve-testimonials-slider">
                <div class="ve-testi-card">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"The chauffeur was waiting for me before I even landed. The car was spotless and the ride was
                        incredibly smooth. Best airport service ever!"</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar-text">AM</div>
                        <div><strong>Alex Morgan</strong><span>Client</span></div>
                    </div>
                </div>
                <div class="ve-testi-card">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"We used their stretch limo for our wedding and it was perfect! The driver was so helpful and
                        patient. Highly recommend for any special event."</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar-text">SP</div>
                        <div><strong>Sarah Patel</strong><span>Client</span></div>
                    </div>
                </div>
                <div class="ve-testi-card">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"Outstanding corporate service. Their attention to detail and professional attitude makes them our
                        go-to for all executive transport needs."</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar-text">JL</div>
                        <div><strong>James Liu</strong><span>Client</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.cta')

@endsection
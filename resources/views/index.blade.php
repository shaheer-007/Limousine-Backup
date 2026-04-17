@extends('main')
@section('content')

    <!-- ===== HERO: Split layout — left text, right image panel ===== -->
    <section class="ve-hero">
        <!-- Left Panel -->
        <div class="ve-hero-left">
            <h1>Arrive in <span class="ve-highlight">Style</span><br>With Perfection</h1>
            <p>Luxury transportation for every occasion. Experience the peak of comfort, safety, and professionalism with
                our premium chauffeur-driven limousine services.</p>
            <div class="ve-hero-btns">
                <a href="{{ route('book-online') }}" class="ve-btn-primary">Book Online</a>
                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost">Call Now</a>
            </div>
        </div>
        <!-- Right Panel: overlapping image cards -->
        <div class="ve-hero-right">
            <div class="ve-hero-img-main bg-img"
                style="background-image:url({{ asset('assets/img/slider/slider-1.webp') }});">
            </div>
            <div class="ve-hero-img-accent bg-img"
                style="background-image:url({{ asset('assets/img/slider/slider-2.webp') }});">
            </div>
            <!-- Floating card -->

        </div>
    </section>

    <!-- ===== MARQUEE TRUST BAR ===== -->
    <!-- <div class="ve-trust-bar">
                <div class="ve-trust-inner">
                    <span>Florida</span>
                    <span>New York</span>
                    <span>New Jersey</span>
                    <span>Pennsylvania</span>
                    <span>Georgia</span>
                    <span>Tennessee</span>
                    <span>Texas</span>
                    <span>California</span>
                    <span>Nevada</span>
                    <span>Massachusetts</span>
                </div>
            </div>
         -->

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
    <!-- ===== SERVICES GRID (new card layout) ===== -->
    <section class="ve-section ve-services-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Elite Choice</span>
                <h2>Our <span>Features</span></h2>
                <p>Discover the premium amenities and standards that set our limousine service apart.</p>
            </div>
            <div class="ve-services-grid">
                <div class="ve-service-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-service-icon"><i class="fa fa-plane"></i></div>
                    <h4>Airport Transfers</h4>
                    <p>Reliable and punctual pickups from all major airports. Your chauffeur awaits you at the terminal.</p>
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-service-icon"><i class="fa fa-briefcase"></i></div>
                    <h4>Corporate Travel</h4>
                    <p>Impress your business partners with our executive class service and quiet, comfortable interiors.</p>
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-service-icon"><i class="fa fa-heart"></i></div>
                    <h4>Wedding Limousine</h4>
                    <p>Make your special day unforgettable with our beautifully decorated wedding limousines.</p>
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-service-icon"><i class="fa fa-glass"></i></div>
                    <h4>Night Out Service</h4>
                    <p>Celebrate in style without worrying about traffic or parking. Luxury travel for your party night.</p>
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="500ms">
                    <div class="ve-service-icon"><i class="fa fa-star"></i></div>
                    <h4>Special Events</h4>
                    <p>From proms to anniversaries, we add a touch of class to every celebratory occasion you host.</p>
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="600ms">
                    <div class="ve-service-icon"><i class="fa fa-car"></i></div>
                    <h4>Our Fleet</h4>
                    <p>Explore our range of late-model sedans, SUVs, and stretch limousines for your next trip.</p>
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
                            <div class="ve-fleet-btns mt-4" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="#" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book
                                    Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call
                                    Now</a>
                            </div>
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

    <!-- ===== COUNTERS ===== -->
    <section class="ve-counter-section">
        <div class="container">
            <div class="ve-counter-grid">
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="100ms">
                    <i class="fa fa-users"></i>
                    <strong class="counter" data-count="15000">0</strong><span>+</span>
                    <p>Happy Passengers</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="200ms">
                    <i class="fa fa-car"></i>
                    <strong class="counter" data-count="250">0</strong><span>+</span>
                    <p>Luxury Vehicles</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="300ms">
                    <i class="fa fa-map-marker"></i>
                    <strong class="counter" data-count="50">0</strong><span>+</span>
                    <p>Cities Covered</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="400ms">
                    <i class="fa fa-star"></i>
                    <strong class="counter" data-count="12">0</strong><span></span>
                    <p>Service Awards</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SUPERIOR AMENITIES (Icon Highlights) ===== -->
    <section class="ve-section ve-home-amenities">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Luxury Standard</span>
                <h2>Superior <span>On-Board Amenities</span></h2>
                <p>We provide more than just a ride; we provide an environment of absolute comfort and sophistication.</p>
            </div>
            <div class="ve-amenities-grid">
                <div class="ve-amenity-item wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-amenity-icon"><i class="fa fa-diamond"></i></div>
                    <h5>First-Class Seating</h5>
                    <p>Meticulously crafted leather interiors designed for ultimate relaxation.</p>
                </div>
                <div class="ve-amenity-item wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-amenity-icon"><i class="fa fa-thermometer-half"></i></div>
                    <h5>Climate Control</h5>
                    <p>Individualized temperature zones to suit your personal preference.</p>
                </div>
                <div class="ve-amenity-item wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-amenity-icon"><i class="fa fa-music"></i></div>
                    <h5>Entertainment</h5>
                    <p>High-fidelity audio systems and seamless multi-media connectivity.</p>
                </div>
                <div class="ve-amenity-item wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-amenity-icon"><i class="fa fa-lock"></i></div>
                    <h5>Absolute Privacy</h5>
                    <p>Advanced privacy partitions and tinted windows for total discretion.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== OUR SERVICES (Image Cards) ===== -->
    <section class="ve-section ve-services-visual-section" style="background-color: var(--ve-light);">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Premium Experience</span>
                <h2>Our Best <span>Services</span></h2>
                <p>We provide professionally chauffeured luxury transportation services for all your special needs.</p>
            </div>
            <div class="row gy-5">
                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/our-services/aiport-transfer.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Airport Transportation</h5>
                            <p>Reliable and luxurious transportation to and from all major airports with professional
                                chauffeurs.</p>
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Book Online</a>
                                <a href="{{ 'tel:' . config('contact.phone_tel') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Call Now</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/our-services/wedding-transportation.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Wedding Limo</h5>
                            <p>Make your wedding day unforgettable with our elegant and beautifully decorated stretch
                                limousines.</p>
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/our-services/corporate-limo.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Corporate Transportation</h5>
                            <p>Sophisticated transportation solutions for executives and business events with premium
                                comfort.</p>
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-5 text-center wow fadeInUp" data-wow-delay="500ms">
                    <a href="services.html" class="ve-btn-primary">View More Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== OUR FLEET ===== -->
    <section class="ve-section ve-fleet-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Luxury Fleet</span>
                <h2>Experience Our <span>Premium Vehicles</span></h2>
                <p>Choose from our diverse collection of late-model, meticulously maintained luxury vehicles.</p>
            </div>
            <div class="row gy-5">
                <!-- Fleet 1 -->
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/mercedes-s550.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Mercedes-Benz S550</h5>
                            <p>The pinnacle of luxury sedans, perfect for executive travel and airport transfers.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 3 Passengers</span>
                                <span><i class="fa fa-briefcase"></i> 3 Bags</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fleet 2 -->
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/cadillac-escalade.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Cadillac Escalade</h5>
                            <p>Spacious, powerful, and iconic. The ideal choice for groups and long-distance travel.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 6 Passengers</span>
                                <span><i class="fa fa-briefcase"></i> 6 Bags</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fleet 3 -->
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/escalade-limo.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Escalade Stretch Limo</h5>
                            <p>Ultimate luxury for your special events, weddings, and party nights with premium lighting.
                            </p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 14 Passengers</span>
                                <span><i class="fa fa-glass"></i> Mini Bar</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-5 text-center wow fadeInUp" data-wow-delay="500ms">
                    <a href="#" class="ve-btn-primary">View All Fleet</a>
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
                <div class="ve-testi-card">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"Booked for prom night and it exceeded all expectations. The limo was gorgeous and our driver
                        was incredibly professional. Will use again!"</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar-text">RK</div>
                        <div><strong>Rachel Kim</strong><span>Client</span></div>
                    </div>
                </div>
                <div class="ve-testi-card">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"Reliable, punctual and extremely comfortable. I've used Elite Limo for all my business trips
                        and they never disappoint. Five stars every time!"</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar-text">DW</div>
                        <div><strong>David Wilson</strong><span>Executive</span></div>
                    </div>
                </div>
                <div class="ve-testi-card">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"Absolutely loved the group shuttle for our sporting event. Comfortable, on time and the driver
                        knew all the best routes. Highly recommended!"</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar-text">MT</div>
                        <div><strong>Mike Torres</strong><span>Client</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')
@endsection
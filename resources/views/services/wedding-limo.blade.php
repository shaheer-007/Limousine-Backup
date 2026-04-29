@extends('main')
@section('meta_title', 'Wedding Limo Service | Alar Chauffeur Service')
@section('meta_description', 'Arrive in style with wedding limo and luxury chauffeur service from Alar Chauffeur Service for ceremonies, receptions, bridal parties, and guest transportation.')
@section('content')

    <!-- ===== PAGE HERO ===== -->
    <section class="ve-page-hero" style="background-image:url({{ asset('assets/img/our-services/wedding-transportation.webp') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Elegant Experience</span>
            <h1>Wedding <span>Limousine Service</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('our-services') }}">Services</a></li>
                    <li class="active">Wedding Limo</li>
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
                            <img src="{{ asset('assets/img/our-services/wedding-transportation.webp') }}" alt="Wedding Limousine" class="img-fluid rounded-12 shadow-sm">
                        </div>

                        <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                            <span class="ve-section-tag">Your Special Day</span>
                            <h2>Elegant Wedding <span>Transportation</span></h2>
                            <p class="ve-lead">Make your wedding day truly unforgettable with our premium, high class limousine and luxury chauffeur services.</p>
                            
                            <p>Your wedding is one of the most important days of your life, and every detail should be perfect. At Alar Chauffeur Service, we specialize in providing sophisticated and reliable transportation that adds a touch of magic to your celebration. From arriving at the ceremony in a stunning stretch limousine to the final "Just Married" getaway, we ensure your journey is as beautiful as the destination.</p>
                            
                            <p>Our dedicated wedding coordinators work closely with you to customize every aspect of your transportation. Whether you need a single luxury sedan for the bride and groom or a fleet of SUVs and party buses for the entire wedding party and guests, we have the perfect vehicles to match your style and needs.</p>

                            <div class="row mt-40 mb-40">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-heart"></i>
                                        <h5>Romantic Decor</h5>
                                        <p>Meticulously decorated vehicles with ribbons, flowers, and "Just Married" signage at your request.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-star"></i>
                                        <h5>Red Carpet Service</h5>
                                        <p>Experience the true VIP treatment with a formal red carpet rollout for your grand entrance and exit.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-glass"></i>
                                        <h5>Champagne Toast</h5>
                                        <p>Celebrate your new journey with a complimentary chilled bottle of champagne or sparkling cider.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-box">
                                        <i class="fa fa-clock-o"></i>
                                        <h5>Perfect Timing</h5>
                                        <p>Our chauffeurs arrive early and coordinate with your wedding planner to ensure everything runs on schedule.</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Luxury for the <span>Whole Wedding Party</span></h3>
                            <p>We provide comprehensive transportation solutions for more than just the couple. Our fleet of premium SUVs, vans, and buses is ideal for transporting family members, bridesmaids, groomsmen, and even providing shuttle services for your guests between the hotel, ceremony, and reception venues.</p>

                            <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Chilled Bottled Water and Ice</li>
                                            <li><i class="fa fa-check"></i> Premium Sound Systems</li>
                                            <li><i class="fa fa-check"></i> Climate Control Comfort</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Professional Uniformed Chauffeurs</li>
                                            <li><i class="fa fa-check"></i> Late Model Meticulous Fleet</li>
                                            <li><i class="fa fa-check"></i> Multi Car Package Discounts</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="ve-detail-extra-content mt-50">
                                <div class="row align-items-center">
                                    <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                        <img src="{{ asset('assets/img/fleet/escalade-limo.webp') }}" alt="Wedding SUV Limo" class="img-fluid rounded-12 shadow-sm">
                                    </div>
                                    <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                        <h3>Arrive in <span>Grand Style</span></h3>
                                        <p>Our stretch limousines and luxury SUVs are the epitome of elegance. With spacious interiors and premium amenities, you and your bridal party can relax and celebrate while our professional chauffeurs handle the navigation and traffic.</p>
                                        <p>We take pride in keeping our vehicles in showroom condition, ensuring that your wedding photos look spectacular with our fleet as a backdrop.</p>
                                    </div>
                                </div>

                                <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                    <h3>A Legacy of <span>Excellence</span></h3>
                                    <p>With years of experience in wedding logistics, we understand the importance of reliability and attention to detail. Our chauffeurs go above and beyond to provide a stress free environment, allowing you to focus entirely on your celebration.</p>
                                    
                                    <div class="ve-quote-box mt-30">
                                        <i class="fa fa-quote-left"></i>
                                        <p>Everything was perfect! The limo was gorgeous, and the driver was so incredibly helpful with my dress and making sure we were comfortable. They made our wedding day feel even more special.</p>
                                        <div class="ve-quote-author">
                                            <strong>Jessica and David</strong>
                                            <span>Married May 2025</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center mt-50 mb-30">
                                    <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-delay="100ms">
                                        <h3>Stress Free <span>Guest Logistics</span></h3>
                                        <p>Don't let your guests worry about directions or parking. Our group transportation services are a thoughtful way to ensure everyone arrives safely and on time. From luxury vans for the immediate family to large shuttle buses for the entire guest list, we have you covered.</p>
                                        <p>We can coordinate multiple pickup locations and return trips at the end of the night, providing a safe and sophisticated end to your perfect day.</p>
                                    </div>
                                    <div class="col-md-6 order-1 order-md-2 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                        <img src="{{ asset('assets/img/our-services/wedding-transportation.webp') }}" alt="Wedding Guest Shuttle" class="img-fluid rounded-12 shadow-sm">
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

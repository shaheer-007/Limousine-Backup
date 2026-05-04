@extends('main')
@section('meta_title', 'Blogs | Alar Chauffeur Service')
@section('meta_description', 'Explore blogs of Alar Chauffeur Service, including airport transfers, corporate transportation, weddings, prom, group travel, cruise transfers, and special events.')
@section('content')

    <!-- ===== PAGE HERO ===== -->
    <section class="ve-page-hero" style="background-image:url({{ asset('assets/img/banner/blog.webp') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Blog</span>
            <h1>Our <span>Blogs</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Blogs</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ===== SERVICES GRID ===== -->
    <section class="ve-section bg-light">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Blogs</span>
                <h2>Our <span>Blogs</span></h2>
            </div>

            <div class="row">
                <!-- Airport Transportation -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/our-services/aiport-transfer.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Luxury Chauffeur Service for FIFA 2026 in NYC & New Jersey</h5>
                            <p>Experience premium limo and chauffeur service for FIFA World Cup 2026 with seamless travel to MetLife Stadium.</p>
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('blog.luxury-chauffeur-service-for-fifa-2026-in-nyc-new-jersey') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')

@endsection

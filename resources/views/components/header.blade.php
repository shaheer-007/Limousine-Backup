    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ===== NAVBAR (single dark bar, logo left, nav center, CTA right) ===== -->
    <header class="ve-header" id="ve-sticky">
        <div class="container-fluid ve-nav-wrap">
            <!-- Logo -->
            <div class="ve-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/logo/logo-3.svg') }}" alt="Logo">
                </a>
            </div>
            <!-- Nav Links -->
            <nav class="ve-nav">
                <ul>
                    <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                    <li class="{{ request()->routeIs('book-online') ? 'active' : '' }}"><a href="{{ route('book-online') }}">Book Online</a></li>
                    <li class="{{ request()->routeIs('about-us') ? 'active' : '' }}"><a href="{{ route('about-us') }}">About us</a></li>
                    <li class="{{ request()->routeIs('our-services') ? 'active' : '' }}"><a href="{{ route('our-services') }}">Our Services</a></li>
                    <li class="{{ request()->routeIs('our-fleet') ? 'active' : '' }}"><a href="{{ route('our-fleet') }}">Our Fleet</a></li>
                    <li class="{{ request()->routeIs('contact-us') ? 'active' : '' }}"><a href="{{ route('contact-us') }}">Contact us</a></li>
                </ul>
            </nav>
            <!-- CTA -->
            <div class="ve-nav-cta">
                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-cta-btn"><i class="fa fa-phone"></i> Call Now</a>
            </div>
            <!-- Mobile Toggle -->
            <button class="ve-toggler" id="ve-toggle">
                <span></span><span></span><span></span>
            </button>
        </div>
        <div class="ve-mobile-menu" id="ve-mobile-menu">
            <div class="ve-mobile-menu-header">
                <a href="{{ route('home') }}" class="ve-mobile-logo">
                    <img src="{{ asset('assets/img/logo/logo-3.svg') }}" alt="Logo">
                </a>
                <button class="ve-mobile-close" id="ve-mobile-close">&times;</button>
            </div>
            <ul>
                <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                <li class="{{ request()->routeIs('book-online') ? 'active' : '' }}"><a href="{{ route('book-online') }}">Book Online</a></li>
                <li class="{{ request()->routeIs('about-us') ? 'active' : '' }}"><a href="{{ route('about-us') }}">About us</a></li>
                <li class="{{ request()->routeIs('our-services') ? 'active' : '' }}"><a href="{{ route('our-services') }}">Our Services</a></li>
                <li class="{{ request()->routeIs('our-fleet') ? 'active' : '' }}"><a href="{{ route('our-fleet') }}">Our Fleet</a></li>
                <li class="{{ request()->routeIs('contact-us') ? 'active' : '' }}"><a href="{{ route('contact-us') }}">Contact us</a></li>
            </ul>
            <div class="ve-mobile-contact">
                <p><a href="tel:{{ config('contact.phone_tel') }}"><i class="fa fa-phone"></i> {{ config('contact.phone_display') }}</a></p>
                <p><a href="mailto:{{ config('contact.email') }}"><i class="fa fa-envelope"></i> {{ config('contact.email') }}</a></p>
                <div class="ve-mobile-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </header>

@extends('main')
@section('content')
    <!-- ===== PAGE HERO ===== -->
    <section class="ve-page-hero" style="background-image:url({{ asset('assets/img/banner/book-online.webp') }});"> 
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Easy Booking</span>
            <h1>Book Your <span>Ride</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Book Online</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ===== BOOKING FORM ===== -->
    <section class="ve-section ve-booking-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="ve-booking-card">
                        <!-- Card Header -->
                        <div class="ve-booking-card-header">
                            <div class="ve-booking-icon"><i class="fa fa-car"></i></div>
                            <div>
                                <h3>Reserve Your Luxury Vehicle</h3>
                                <p>Fill out the form below and we'll confirm your booking within minutes.</p>
                            </div>
                        </div>

                        <form id="bookingForm" class="ve-booking-form" method="POST" action="#">
                            @csrf

                            <!-- Trip Type Tabs -->
                            <div class="ve-trip-tabs">
                                <button type="button" class="ve-trip-tab active" data-type="one-way">
                                    <i class="fa fa-long-arrow-right"></i> One Way
                                </button>
                                <button type="button" class="ve-trip-tab" data-type="round-trip">
                                    <i class="fa fa-exchange"></i> Round Trip
                                </button>
                                <button type="button" class="ve-trip-tab" data-type="hourly">
                                    <i class="fa fa-clock-o"></i> Hourly Charter
                                </button>
                            </div>
                            <input type="hidden" name="trip_type" id="tripType" value="one-way">

                            <!-- Locations -->
                            <div class="row">
                                <div class="col-12 col-md-6 mb-4">
                                    <label class="ve-form-label"><i class="fa fa-map-marker"></i> Pickup Location</label>
                                    <input type="text" name="pickup_location" class="ve-form-input" placeholder="Enter pickup address" required>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <label class="ve-form-label"><i class="fa fa-flag-checkered"></i> Dropoff Location</label>
                                    <input type="text" name="dropoff_location" class="ve-form-input" placeholder="Enter destination address" required>
                                </div>

                                <!-- Date & Time -->
                                <div class="col-12 col-md-6 mb-4">
                                    <label class="ve-form-label"><i class="fa fa-calendar"></i> Pickup Date</label>
                                    <input type="date" name="pickup_date" class="ve-form-input" required>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <label class="ve-form-label"><i class="fa fa-clock-o"></i> Pickup Time</label>
                                    <input type="time" name="pickup_time" class="ve-form-input" required>
                                </div>

                                <!-- Return date (shown for round-trip) -->
                                <div class="col-12 col-md-6 mb-4 ve-return-field" style="display:none;">
                                    <label class="ve-form-label"><i class="fa fa-calendar-check-o"></i> Return Date</label>
                                    <input type="date" name="return_date" class="ve-form-input">
                                </div>
                                <div class="col-12 col-md-6 mb-4 ve-return-field" style="display:none;">
                                    <label class="ve-form-label"><i class="fa fa-clock-o"></i> Return Time</label>
                                    <input type="time" name="return_time" class="ve-form-input">
                                </div>

                                <!-- Vehicle & Passengers -->
                                <div class="col-12 col-md-6 mb-4">
                                    <label class="ve-form-label"><i class="fa fa-car"></i> Vehicle Type</label>
                                    <select name="vehicle_type" class="ve-form-input" required>
                                        <option value="">Select a Vehicle</option>
                                        <option value="sedan"> Luxury Sedan </option>
                                        <option value="suv"> Luxury SUV </option>
                                        <option value="van"> Luxury Van </option>
                                        <option value="stretch"> Stretch Limousine </option>
                                        <option value="sprinter"> Sprinter Van </option>
                                        <option value="coach"> Executive Coach </option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <label class="ve-form-label"><i class="fa fa-users"></i> Number of Passengers</label>
                                    <input type="number" name="passengers" class="ve-form-input" placeholder="e.g. 4" min="1" max="50" required>
                                </div>

                                <!-- Divider -->
                                <div class="col-12 mb-3">
                                    <div class="ve-form-divider"><span>Your Contact Details</span></div>
                                </div>

                                <!-- Contact Info -->
                                <div class="col-12 col-md-6 mb-4">
                                    <label class="ve-form-label"><i class="fa fa-user"></i> Full Name</label>
                                    <input type="text" name="name" class="ve-form-input" placeholder="Your full name" required>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <label class="ve-form-label"><i class="fa fa-envelope"></i> Email Address</label>
                                    <input type="email" name="email" class="ve-form-input" placeholder="your@email.com" required>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <label class="ve-form-label"><i class="fa fa-phone"></i> Phone Number</label>
                                    <input type="tel" name="phone" class="ve-form-input" placeholder="+1 (555) 000-0000" required>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <label class="ve-form-label"><i class="fa fa-tag"></i> Service Type</label>
                                    <select name="service_type" class="ve-form-input">
                                        <option value="">Select Service</option>
                                        <option value="airport">Airport Transfer</option>
                                        <option value="wedding">Wedding Transportation</option>
                                        <option value="corporate">Corporate Travel</option>
                                        <option value="prom">Prom & Graduation</option>
                                        <option value="event">Special Events</option>
                                        <option value="sports">Sporting Events</option>
                                        <option value="concert">Concerts & Festivals</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <!-- Special Requests -->
                                <div class="col-12 mb-4">
                                    <label class="ve-form-label"><i class="fa fa-pencil"></i> Special Requests (Optional)</label>
                                    <textarea name="special_requests" class="ve-form-input" rows="4" placeholder="e.g. Child seat, champagne, specific music, extra stops..."></textarea>
                                </div>

                                <!-- Submit -->
                                <div class="col-12 text-center">
                                    <button type="submit" class="ve-booking-submit">
                                        <i class="fa fa-check-circle"></i> Confirm Booking Request
                                    </button>
                                    <p class="ve-booking-note">We'll contact you within 30 minutes to confirm details & pricing.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Sidebar Info -->
                <div class="col-12 col-lg-4 mt-4 mt-lg-0">
                    <div class="ve-booking-sidebar">
                        <div class="ve-booking-info-card">
                            <div class="ve-binfo-icon"><i class="fa fa-phone"></i></div>
                            <div>
                                <h5>Call Us Directly</h5>
                                <a href="tel:{{ config('contact.phone_tel') }}">{{ config('contact.phone_display') }}</a>
                            </div>
                        </div>
                        <div class="ve-booking-info-card">
                            <div class="ve-binfo-icon"><i class="fa fa-envelope"></i></div>
                            <div>
                                <h5>Email Us</h5>
                                <a href="mailto:{{ config('contact.email') }}">{{ config('contact.email') }}</a>
                            </div>
                        </div>
                        <div class="ve-booking-info-card">
                            <div class="ve-binfo-icon"><i class="fa fa-clock-o"></i></div>
                            <div>
                                <h5>Available</h5>
                                <span>24/7 — Every Day of the Year</span>
                            </div>
                        </div>

                        <div class="ve-booking-why mt-4">
                            <h5 class="ve-booking-why-title">Why Book With Us?</h5>
                            <ul class="ve-booking-why-list">
                                <li><i class="fa fa-check"></i> Professional, licensed chauffeurs</li>
                                <li><i class="fa fa-check"></i> Punctual & reliable service</li>
                                <li><i class="fa fa-check"></i> Luxury, well-maintained fleet</li>
                                <li><i class="fa fa-check"></i> Transparent, fixed pricing</li>
                                <li><i class="fa fa-check"></i> Flight tracking included</li>
                                <li><i class="fa fa-check"></i> Free cancellation policy</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')

    <script>
        // Trip type tab switching
        document.querySelectorAll('.ve-trip-tab').forEach(function(tab) {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.ve-trip-tab').forEach(function(t) { t.classList.remove('active'); });
                this.classList.add('active');
                document.getElementById('tripType').value = this.dataset.type;
                var returnFields = document.querySelectorAll('.ve-return-field');
                if (this.dataset.type === 'round-trip') {
                    returnFields.forEach(function(f) { f.style.display = 'block'; });
                } else {
                    returnFields.forEach(function(f) { f.style.display = 'none'; });
                }
            });
        });
    </script>
@endsection

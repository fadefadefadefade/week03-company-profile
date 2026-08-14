@extends('layouts.app')

@section('title', 'About Us | FreshSpin Laundry Services')

@section('content')

<div class="about-page">

    <!-- ========================================
         PAGE HEADER
         ======================================== -->

    <section class="about-header">
        <div class="about-container">

            <span class="about-label">Who We Are</span>

            <h1>About FreshSpin Laundry Services</h1>

            <p>
                Get to know the local laundry shop dedicated to fresh,
                clean, and convenient laundry care in Luisiana, Laguna.
            </p>

        </div>
    </section>


    <!-- ========================================
         BUSINESS BACKGROUND
         ======================================== -->

    <section class="about-section about-background">
        <div class="about-container about-two-col">

            <div class="about-image-box">
                <div class="about-image-inner">
                    <span>🧺</span>
                    <p>FreshSpin Laundry</p>
                </div>
            </div>

            <div class="about-text">

                <span class="about-label">Our Story</span>

                <h2>Business Background</h2>

                <p>
                    FreshSpin Laundry Services is a local laundry shop located
                    in Luisiana, Laguna. We provide convenient laundry
                    solutions for individuals, families, and nearby residents.
                </p>

                <p>
                    Our business was created to help customers save time and
                    effort by providing reliable and affordable laundry
                    services. FreshSpin offers services such as wash and fold,
                    wash dry and fold, dry cleaning, blanket cleaning,
                    comforter cleaning, and express laundry.
                </p>

                <p>
                    We aim to make everyday laundry easier by providing
                    customers with a convenient and accessible place to have
                    their clothes and other washable items cleaned.
                </p>

                <a href="/services" class="about-btn">View Our Services</a>

            </div>

        </div>
    </section>


    <!-- ========================================
         MISSION
         ======================================== -->

    <section class="about-section about-mission-section">
        <div class="about-container">

            <div class="about-mission-card">

                <span class="about-label">Our Purpose</span>

                <h2>Our Mission</h2>

                <p>
                    Our mission is to provide convenient, reliable, and
                    affordable laundry services while making sure that every
                    customer's laundry is handled with care.
                </p>

                <p>
                    FreshSpin Laundry Services aims to make laundry less
                    stressful for customers by providing quality service and
                    a convenient experience that they can always count on.
                </p>

            </div>

        </div>
    </section>


    <!-- ========================================
         WHY CHOOSE FRESHSPIN
         ======================================== -->

    <section class="about-section about-why">
        <div class="about-container">

            <div class="about-section-heading">
                <span class="about-label">Our Advantages</span>
                <h2>Why Choose FreshSpin?</h2>
                <p>
                    Here's what makes FreshSpin the reliable laundry choice
                    for the Luisiana community.
                </p>
            </div>

            <div class="reasons-grid">

                <div class="reason-card">
                    <div class="reason-icon">🕐</div>
                    <h3>Convenient Services</h3>
                    <p>
                        We provide different laundry services designed to
                        help customers save time and effort.
                    </p>
                </div>

                <div class="reason-card">
                    <div class="reason-icon">💰</div>
                    <h3>Affordable Pricing</h3>
                    <p>
                        Our services are offered at reasonable prices to
                        provide practical laundry solutions for local
                        customers.
                    </p>
                </div>

                <div class="reason-card">
                    <div class="reason-icon">✅</div>
                    <h3>Reliable Service</h3>
                    <p>
                        We provide dependable service so customers receive
                        their laundry in good condition and on time.
                    </p>
                </div>

                <div class="reason-card">
                    <div class="reason-icon">🧼</div>
                    <h3>Quality Cleaning</h3>
                    <p>
                        We strive to provide proper cleaning and care for
                        different types of clothing and household laundry.
                    </p>
                </div>

                <div class="reason-card">
                    <div class="reason-icon">😊</div>
                    <h3>Customer-Focused</h3>
                    <p>
                        FreshSpin values its customers and aims to provide
                        friendly and helpful service throughout the process.
                    </p>
                </div>

                <div class="reason-card">
                    <div class="reason-icon">📍</div>
                    <h3>Local &amp; Accessible</h3>
                    <p>
                        Located in Luisiana, Laguna, FreshSpin is a
                        convenient option for residents in the community.
                    </p>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================
         CTA
         ======================================== -->

    <section class="about-cta">
        <div class="about-container about-cta-content">

            <div>
                <h2>Ready to Try FreshSpin?</h2>
                <p>View our full list of laundry services and pricing.</p>
            </div>

            <a href="/services" class="about-btn">View Services</a>

        </div>
    </section>

</div>

@endsection

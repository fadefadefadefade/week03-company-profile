@extends('layouts.app')

@section('title', 'Home | FreshSpin Laundry Services')

@section('content')

    <!-- ========================================
         HERO BANNER
         ======================================== -->

    <section class="home-hero">

        <div class="home-container hero-content">

            <div class="hero-text">

                <span class="hero-label">
                    Fresh Laundry. Fresh Start.
                </span>

                <h1>
                    Clean Clothes,
                    <span>Fresh Feeling.</span>
                </h1>

                <p>
                    FreshSpin Laundry Services provides reliable and
                    convenient laundry care for customers in
                    Luisiana, Laguna.
                </p>

                <div class="hero-buttons">

                    <a href="/services" class="home-btn primary-btn">
                        View Services
                    </a>

                    <a href="/contact" class="home-btn secondary-btn">
                        Contact Us
                    </a>

                </div>

            </div>


            <div class="hero-visual">

                <div class="hero-image-wrapper">
                    <img src="/fresh-spin.webp" alt="FreshSpin Laundry Services" class="hero-img">
                </div>

                <div class="hero-card hero-card-top">
                    <strong>Clean</strong>
                    <small>Every Time</small>
                </div>

                <div class="hero-card hero-card-bottom">
                    <strong>Fresh</strong>
                    <small>Every Wash</small>
                </div>

            </div>

        </div>

    </section>


    <!-- ========================================
         COMPANY INTRODUCTION
         ======================================== -->

    <section class="home-introduction">

        <div class="home-container introduction-content">

            <div class="introduction-image">

                <div class="intro-image-box">
                    <span>🧺</span>
                    <p>FreshSpin Laundry</p>
                </div>

            </div>


            <div class="introduction-text">

                <span class="section-label">
                    About FreshSpin
                </span>

                <h2>
                    Laundry Care You Can Trust
                </h2>

                <p>
                    FreshSpin Laundry Services is a local laundry shop
                    dedicated to providing clean, fresh, and carefully
                    handled laundry services to customers in
                    Luisiana, Laguna.
                </p>

                <p>
                    Whether you need regular washing, drying and folding,
                    or specialized cleaning for blankets and comforters,
                    our goal is to make laundry easier and more convenient
                    for you.
                </p>

                <a href="/about" class="text-link">
                    Learn More About Us →
                </a>

            </div>

        </div>

    </section>


    <!-- ========================================
         FEATURED SERVICES
         ======================================== -->

    <section class="home-services">

        <div class="home-container">

            <div class="section-heading">

                <span class="section-label">
                    Our Services
                </span>

                <h2>
                    FreshSpin Featured Services
                </h2>

                <p>
                    Simple and convenient laundry solutions designed
                    to keep your clothes and household items fresh.
                </p>

            </div>


            <div class="featured-services-grid">

                <!-- Service 1 -->
                <div class="featured-service-card">

                    <div class="service-icon">
                        🧺
                    </div>

                    <h3>Wash & Fold</h3>

                    <p>
                        Professional washing and folding service
                        for your everyday laundry.
                    </p>

                    <span class="service-price">
                        ₱80 / 5 kg
                    </span>

                </div>


                <!-- Service 2 -->
                <div class="featured-service-card">

                    <div class="service-icon">
                        👕
                    </div>

                    <h3>Wash, Dry & Fold</h3>

                    <p>
                        A complete laundry service from washing
                        to drying and folding.
                    </p>

                    <span class="service-price">
                        ₱120 / 5 kg
                    </span>

                </div>


                <!-- Service 3 -->
                <div class="featured-service-card">

                    <div class="service-icon">
                        ⚡
                    </div>

                    <h3>Express Laundry</h3>

                    <p>
                        Faster laundry processing for customers
                        who need their clothes ready quickly.
                    </p>

                    <span class="service-price">
                        ₱180 / 5 kg
                    </span>

                </div>

            </div>


            <div class="services-link">

                <a href="/services" class="home-btn primary-btn">
                    View All Services
                </a>

            </div>

        </div>

    </section>


    <!-- ========================================
         CALL TO ACTION
         ======================================== -->

    <section class="home-cta">

        <div class="home-container cta-content">

            <div>

                <span class="cta-label">
                    Need Fresh Laundry?
                </span>

                <h2>
                    Let FreshSpin Take Care of It.
                </h2>

                <p>
                    Save time and enjoy fresh, clean laundry
                    without the hassle.
                </p>

            </div>

            <a href="/contact" class="home-btn cta-btn">
                Get in Touch
            </a>

        </div>

    </section>

@endsection
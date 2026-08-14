@extends('layouts.app')

@section('title', 'Services | FreshSpin Laundry Services')

@section('content')

<div class="services-page">

    <!-- ========================================
         PAGE HEADER
         ======================================== -->

    <section class="services-header">
        <div class="services-container">

            <span class="services-label">What We Offer</span>

            <h1>Our Laundry Services</h1>

            <p>
                FreshSpin Laundry Services offers convenient and reliable
                laundry and cleaning services for customers in
                Luisiana, Laguna. Choose from our range of services
                based on your needs.
            </p>

        </div>
    </section>


    <!-- ========================================
         SERVICE LISTINGS
         ======================================== -->

    <section class="services-listings">
        <div class="services-container">

            <div class="services-grid">

                <!-- Wash & Fold -->
                <div class="service-card">

                    <div class="service-card-icon">
                        🧺
                    </div>

                    <div class="service-card-body">
                        <h2>Wash &amp; Fold</h2>
                        <span class="service-card-price">₱80 / 5 kg</span>
                        <p>
                            A convenient laundry service that includes
                            washing and neatly folding your clothes so
                            they're ready to wear or store.
                        </p>
                    </div>

                </div>


                <!-- Wash, Dry & Fold -->
                <div class="service-card">

                    <div class="service-card-icon">
                        👕
                    </div>

                    <div class="service-card-body">
                        <h2>Wash, Dry &amp; Fold</h2>
                        <span class="service-card-price">₱120 / 5 kg</span>
                        <p>
                            A complete laundry service that includes
                            washing, drying, and folding your clothes
                            from start to finish.
                        </p>
                    </div>

                </div>


                <!-- Dry Cleaning -->
                <div class="service-card">

                    <div class="service-card-icon">
                        👔
                    </div>

                    <div class="service-card-body">
                        <h2>Dry Cleaning</h2>
                        <span class="service-card-price">₱150 / item</span>
                        <p>
                            A specialized cleaning service for individual
                            items that require dry cleaning to preserve
                            their quality.
                        </p>
                    </div>

                </div>


                <!-- Blanket Cleaning -->
                <div class="service-card">

                    <div class="service-card-icon">
                        🛏️
                    </div>

                    <div class="service-card-body">
                        <h2>Blanket Cleaning</h2>
                        <span class="service-card-price">₱150 / piece</span>
                        <p>
                            Professional cleaning for blankets to help
                            keep them fresh, clean, and free from dust
                            and allergens.
                        </p>
                    </div>

                </div>


                <!-- Comforter Cleaning -->
                <div class="service-card">

                    <div class="service-card-icon">
                        🛌
                    </div>

                    <div class="service-card-body">
                        <h2>Comforter Cleaning</h2>
                        <span class="service-card-price">₱200 / piece</span>
                        <p>
                            Cleaning service for comforters to help keep
                            them fresh, fluffy, and ready for a
                            comfortable night's sleep.
                        </p>
                    </div>

                </div>


                <!-- Express Laundry -->
                <div class="service-card">

                    <div class="service-card-icon">
                        ⚡
                    </div>

                    <div class="service-card-body">
                        <h2>Express Laundry</h2>
                        <span class="service-card-price">₱180 / 5 kg</span>
                        <p>
                            A faster laundry option for customers who
                            need their laundry processed quickly without
                            sacrificing quality.
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- ========================================
         PRICING NOTE
         ======================================== -->

    <section class="services-note">
        <div class="services-container">
            <div class="services-note-box">
                <span class="services-label">Good to Know</span>
                <h3>Pricing Information</h3>
                <p>
                    All prices listed are our standard rates. For special
                    items or bulk laundry, feel free to contact us for a
                    custom quote. We're happy to help find the right
                    service for your needs.
                </p>
                <a href="/contact" class="services-btn">Contact Us</a>
            </div>
        </div>
    </section>

</div>

@endsection

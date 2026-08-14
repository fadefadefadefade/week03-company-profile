@extends('layouts.app')

@section('title', 'Contact Us | FreshSpin Laundry Services')

@section('content')

<div class="contact-page">

    <!-- ========================================
         PAGE HEADER
         ======================================== -->

    <section class="contact-header">
        <div class="contact-container">

            <span class="contact-label">Get in Touch</span>

            <h1>Contact FreshSpin Laundry Services</h1>

            <p>
                Have a question about our laundry services? We'd love to
                hear from you. Reach out through the form below or visit
                us directly in Luisiana, Laguna.
            </p>

        </div>
    </section>


    <!-- ========================================
         CONTACT MAIN SECTION
         ======================================== -->

    <section class="contact-main">
        <div class="contact-container contact-two-col">


            <!-- LEFT: Contact Information -->
            <div class="contact-info">

                <span class="contact-label">Our Details</span>
                <h2>Contact Information</h2>

                <div class="contact-info-list">

                    <div class="contact-info-item">
                        <div class="contact-info-icon">📍</div>
                        <div class="contact-info-text">
                            <strong>Address</strong>
                            <p>
                                25 Laundry Lane, Barangay Poblacion,<br>
                                Luisiana, Laguna
                            </p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">📞</div>
                        <div class="contact-info-text">
                            <strong>Phone Number</strong>
                            <p>+63 917 555 0148</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">✉️</div>
                        <div class="contact-info-text">
                            <strong>Email Address</strong>
                            <p>hello@freshspin.example</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">🕐</div>
                        <div class="contact-info-text">
                            <strong>Business Hours</strong>
                            <p>Monday – Saturday: 8:00 AM – 7:00 PM</p>
                            <p>Sunday: 9:00 AM – 5:00 PM</p>
                        </div>
                    </div>

                </div>


                <!-- Social Media -->
                <div class="contact-social">

                    <h3>Follow Us</h3>

                    <div class="contact-social-links">

                        <a href="https://social.example/freshspin" target="_blank" class="contact-social-link">
                            ↗ FreshSpin Social
                        </a>

                        <a href="https://connect.example/freshspin" target="_blank" class="contact-social-link">
                            ↗ FreshSpin Connect
                        </a>

                        <a href="https://community.example/freshspin" target="_blank" class="contact-social-link">
                            ↗ FreshSpin Community
                        </a>

                    </div>

                </div>

            </div>


            <!-- RIGHT: Inquiry Form -->
            <div class="contact-form-wrapper">

                <span class="contact-label">Customer Inquiry</span>
                <h2>Send Us a Message</h2>

                <form class="contact-form" action="#" method="POST">

                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Enter your full name"
                            autocomplete="name"
                        >
                    </div>

                    <div class="form-row">

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Enter your email"
                                autocomplete="email"
                            >
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                placeholder="Enter your phone number"
                                autocomplete="tel"
                            >
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            placeholder="What is your inquiry about?"
                        >
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            placeholder="Write your message here..."
                        ></textarea>
                    </div>

                    <button type="button" class="contact-btn">
                        Send Inquiry
                    </button>

                </form>

            </div>

        </div>
    </section>

</div>

@endsection

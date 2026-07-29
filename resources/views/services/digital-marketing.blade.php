@extends('layouts.app')

@section('content')

<section class="service-hero">

    <div class="container">

        <div class="service-hero-grid">

            <div class="service-left">

                <span class="service-badge">
                    📈 Digital Marketing
                </span>

                <h1>

                    Grow Your Business

                    <span>With Digital Marketing</span>

                </h1>

                <p>

                    We help businesses grow online through
                    SEO, Social Media Marketing, Google Ads,
                    Facebook Ads, Content Marketing, Email Marketing,
                    and complete digital branding strategies.

                </p>

                <div class="hero-buttons">

                    <a href="#contact" class="btn-primary-custom">
                        Get Free Quote
                    </a>

                    <a href="#portfolio" class="btn-secondary-custom">
                        View Portfolio
                    </a>

                </div>

            </div>

            <div class="service-right">

                <img
                    src="{{ asset('assets/images/services/digital-marketing.png') }}"
                    alt="Digital Marketing">

            </div>

        </div>

    </div>

</section>

<x-service-features />

<x-development-process />

@endsection
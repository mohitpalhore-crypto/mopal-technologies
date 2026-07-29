@extends('layouts.app')

@section('content')

<section class="service-hero">

    <div class="container">

        <div class="service-hero-grid">

            <div class="service-left">

                <span class="service-badge">
                    🔍 SEO Services
                </span>

                <h1>

                    Rank Higher On

                    <span>Google Search</span>

                </h1>

                <p>

                    Improve your website visibility with our complete SEO services.
                    We provide On-Page SEO, Technical SEO, Local SEO, Link Building,
                    Keyword Research, Content Optimization, and Performance Tracking
                    to help your business attract more organic traffic.

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
                    src="{{ asset('assets/images/services/seo-services.png') }}"
                    alt="SEO Services">

            </div>

        </div>

    </div>

</section>

<x-service-features />

<x-development-process />

@endsection
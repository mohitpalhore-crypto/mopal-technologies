@extends('layouts.app')

@section('content')

<section class="service-hero">

    <div class="container">

        <div class="service-hero-grid">

            <!-- Left -->

            <div class="service-left">

                <span class="service-badge">
                    🛒 E-Commerce Development
                </span>

                <h1>

                    Build Powerful

                    <span>Online Stores That Sell More</span>

                </h1>

                <p>

                    We build secure, modern and high-converting
                    e-commerce websites with payment gateway,
                    inventory management and mobile-friendly design.

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

            <!-- Right -->

            <div class="service-right">

                <img
                    src="{{ asset('assets/images/services/ecommerce.png') }}"
                    alt="E-Commerce Development">

            </div>

        </div>

    </div>

</section>

<x-service-features />

@endsection
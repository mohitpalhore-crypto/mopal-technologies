@extends('layouts.app')

@section('content')

<section class="service-hero">

    <div class="container">

        <div class="service-hero-grid">

            <div class="service-left">

                <span class="service-badge">
                    📱 Mobile App Development
                </span>

                <h1>

                    Build Amazing

                    <span>Android & iOS Apps</span>

                </h1>

                <p>

                    We build modern, scalable and high-performance
                    Android and iOS mobile applications using the
                    latest technologies. From startup ideas to
                    enterprise applications, we create beautiful
                    mobile experiences that users love.

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
                    src="{{ asset('assets/images/services/mobile-app.png') }}"
                    alt="Mobile App Development">

            </div>

        </div>

    </div>

</section>

<x-service-features />

@endsection
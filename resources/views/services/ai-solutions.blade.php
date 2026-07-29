@extends('layouts.app')

@section('content')

<section class="service-hero">

    <div class="container">

        <div class="service-hero-grid">

            <div class="service-left">

                <span class="service-badge">
                    🤖 AI Solutions
                </span>

                <h1>

                    Smart Business

                    <span>Powered By Artificial Intelligence</span>

                </h1>

                <p>

                    Transform your business with AI-powered solutions.
                    We build intelligent chatbots, AI automation,
                    predictive analytics, document processing,
                    recommendation systems, and custom AI applications
                    that improve productivity and reduce operational costs.

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
                    src="{{ asset('assets/images/services/ai-solutions.png') }}"
                    alt="AI Solutions">

            </div>

        </div>

    </div>

</section>

<x-service-features />

<x-development-process />

@endsection
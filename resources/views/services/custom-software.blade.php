@extends('layouts.app')

@section('content')

<section class="service-hero">

    <div class="container">

        <div class="service-hero-grid">

            <!-- Left -->

            <div class="service-left">

                <span class="service-badge">
                    💻 Custom Software Development
                </span>

                <h1>

                    Build Powerful

                    <span>Custom Software Solutions</span>

                </h1>

                <p>

                    We develop secure, scalable and high-performance
                    custom software tailored to your business.
                    From CRM to ERP, HRMS, Billing Systems,
                    Inventory and Enterprise Applications,
                    we build everything your business needs.

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
                    src="{{ asset('assets/images/services/custom-software.png') }}"
                    alt="Custom Software Development">

            </div>

        </div>

    </div>

</section>

<x-service-features />

@endsection
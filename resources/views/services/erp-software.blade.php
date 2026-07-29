@extends('layouts.app')

@section('content')

<section class="service-hero">

    <div class="container">

        <div class="service-hero-grid">

            <!-- Left -->

            <div class="service-left">

                <span class="service-badge">
                    🏢 ERP Software
                </span>

                <h1>

                    Smart ERP Solutions

                    <span>For Modern Businesses</span>

                </h1>

                <p>

                    We develop custom ERP software to manage
                    HR, Inventory, Billing, CRM, Accounting,
                    Payroll and complete business operations
                    from one powerful dashboard.

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
                    src="{{ asset('assets/images/services/erp-software.png') }}"
                    alt="ERP Software">

            </div>

        </div>

    </div>

</section>

<x-service-features />

<x-development-process />

@endsection
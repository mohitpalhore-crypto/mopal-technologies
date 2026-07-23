@extends('layouts.app')

@section('content')

<section class="service-hero">

    <div class="container">

        <div class="service-hero-grid">

            <div class="service-left">

                <span class="service-badge">
                    🌐 Website Development
                </span>

                <h1>

                    We Build Modern

                    <span>High Performance Websites</span>

                </h1>

                <p>

                    Mopal Technologies develops modern,
                    responsive and SEO-friendly websites
                    that help businesses grow online.

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
                    src="{{ asset('assets/images/services/website-development.png') }}"
                    alt="Website Development">

            </div>

        </div>

    </div>

</section>

<x-service-features />

@endsection
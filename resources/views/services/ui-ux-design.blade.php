@extends('layouts.app')

@section('content')

<section class="service-hero">

    <div class="container">

        <div class="service-hero-grid">

            <div class="service-left">

                <span class="service-badge">
                    🎨 UI / UX Design
                </span>

                <h1>

                    Beautiful Interfaces

                    <span>Exceptional User Experience</span>

                </h1>

                <p>

                    We design modern, clean and intuitive user
                    interfaces that improve customer engagement
                    and increase conversions. Our UI/UX process
                    focuses on usability, accessibility and
                    beautiful digital experiences.

                </p>

                <div class="hero-buttons">

                    <a href="{{ url('/') }}#contact" class="btn-primary-custom">
                        Get Free Quote
                    </a>

                    <a href="{{ url('/') }}#portfolio" class="btn-secondary-custom">
                        View Portfolio
                    </a>

                </div>

            </div>

            <div class="service-right">

                <img
                    src="{{ asset('assets/images/services/ui-ux-design.png') }}"
                    alt="UI UX Design">

            </div>

        </div>

    </div>

</section>

<x-service-features />

@endsection
@extends('layouts.user')
    
@section('content')
<div class="hero-section">
    <div class="hero-content fade-in">
        <h1 class="hero-title">Welcome to Guidance Office</h1>
        <p class="hero-subtitle">Your safe space for support, guidance, and mental wellness</p>
    </div>
</div>

<div class="main-content">
    <div class="container">
        <section class="section">
            <h2 class="section-title slide-up">Our Services</h2>
            <div class="grid grid-3">
                <div class="card fade-in">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-concierge-bell"></i>
                        </div>
                        <h3 class="service-title">Guidance Services</h3>
                        <p class="mb-3">Access comprehensive counseling and academic guidance services tailored to your needs.</p>
                        <a href="{{ route('user.services') }}" class="btn btn-primary">Explore Services</a>
                    </div>
                </div>

                <div class="card fade-in">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3 class="service-title">e-Hayag</h3>
                        <p class="mb-3">Express your thoughts and feelings in a safe, anonymous space where you can be heard.</p>
                        <a href="{{ route('user.freedomwall.add') }}" class="btn btn-primary">Share Your Thoughts</a>
                    </div>
                </div>

                <div class="card fade-in">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3 class="service-title">Emergency Hotlines</h3>
                        <p class="mb-3">24/7 access to emergency contact numbers for immediate assistance and support.</p>
                        <a href="{{ route('user.hotline') }}" class="btn btn-primary">View Hotlines</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="card slide-up">
                <div class="card-body text-center">
                    <h3 class="card-title">Need Immediate Help?</h3>
                    <p class="mb-4">If you're experiencing a crisis or need immediate support, don't hesitate to reach out. Our emergency hotlines are available 24/7.</p>
                    <a href="{{ route('user.hotline') }}" class="btn btn-danger">
                        <i class="fas fa-exclamation-triangle"></i>
                        Emergency Contact
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
@extends('layouts.user')
    
@section('content')
<<<<<<< HEAD
    <section class="hotlines-hero-section">
        <div class="hotlines-hero-container">
            <h1 class="hotlines-hero-title">Together, let us <span class="hotlines-nurture-hope">#NUrtureHope</span></h1>
            <div class="hotlines-hero-divider"></div>
            <p class="hotlines-hero-subtitle">You are not alone. Support is here for you.</p>
        </div>
    </section>



    <section class="contact-section">
        <div class="contact-container">
            <h2 class="contact-title">Contact Us</h2>
            <div class="contact-title-underline"></div>
            <p class="contact-subtitle">Reach out to the NU Laguna Center for Guidance Services</p>
        
            <div class="contact-content">
                <div class="help-available">
                    <h3>Help is always<br>Available</h3>
                </div>
            
                <div class="contact-info-box">
                    <h4 class="contact-info-title">NU LAGUNA CENTER FOR GUIDANCE SERVICES</h4>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">📞</div>
                        <span>0966 811 7755</span>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">✉️</div>
                        <span>cgs@nu-laguna.edu.ph</span>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">📍</div>
                        <span>NU Laguna Center for Guidance Services</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="crisis-section">
        <div class="crisis-container">
            <h2 class="crisis-title">24/7 Crisis Hotlines</h2>
            <div class="crisis-title-underline"></div>
            <p class="crisis-subtitle">
                If you or someone you know is in crisis, these services are available anytime, day or night.
            </p>
        
            <h3 class="emergency-title">In case of emergency</h3>
        
            <div class="emergency-steps">
                <div class="emergency-step">Stay calm and speak clearly</div>
                <div class="emergency-step">Describe the emergency situation</div>
                <div class="emergency-step">Provide your exact location</div>
                <div class="emergency-step">Follow the operator's instructions</div>
            </div>

            <div class="hotline-cards">
                @foreach($entries as $entry)
                <div class="hotline-card">
                    <div class="hotline-logo">🛡️</div>
                    <div class="hotline-name">{{ $entry->name }}</div>
                    <ul class="hotline-numbers">
                        <li>📞 {{ $entry->phone_number }}</li>
                        @if($entry->email)
                            <li>✉️ {{ $entry->email }}</li>
                        @endif
                        @if($entry->availability)
                            <li>🕒 {{ $entry->availability }}</li>
                        @endif
                    </ul>
                    <a href="tel:{{ $entry->phone_number }}" class="service-button">
                        📞 Call Now
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('body-class', 'hotlines-page')
=======
<div class="hero-section">
    <div class="hero-content fade-in">
        <h1 class="hero-title">Emergency Hotlines</h1>
        <p class="hero-subtitle">24/7 Emergency Contact Numbers for Immediate Assistance</p>
    </div>
</div>

<div class="main-content">
    <div class="container">
        <section class="section">
            <div class="grid grid-3">
                @foreach($entries as $entry)
                <div class="card fade-in">
                    <div class="card-body text-center">
                        <div class="service-icon mb-3">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3 class="card-title">{{ $entry->name }}</h3>
                        <p class="text-muted mb-3">{{ $entry->email }}</p>
                        <div class="mb-3" style="font-size: 1.5rem; font-weight: 600; color: var(--primary-color);">
                            {{ $entry->phone_number }}
                        </div>
                        <p class="text-muted mb-3">{{ $entry->availability }}</p>
                        @if($entry->site_link)
                            <div class="mb-3">
                                <a href="{{ $entry->site_link }}" target="_blank" class="btn btn-secondary">
                                    <i class="fas fa-globe"></i> Visit Website
                                </a>
                            </div>
                        @endif
                        <a href="tel:{{ $entry->phone_number }}" class="btn btn-danger">
                            <i class="fas fa-phone-alt"></i> Call Now
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <section class="section">
            <div class="card slide-up">
                <div class="card-body">
                    <h3 class="card-title">
                        <i class="fas fa-info-circle" style="color: var(--secondary-color);"></i>
                        Important Guidelines
                    </h3>
                    <p class="mb-3">These emergency hotlines are available 24/7. In case of emergency:</p>
                    <div class="grid grid-2">
                        <ul style="list-style: none; padding: 0;">
                            <li class="mb-2">
                                <i class="fas fa-check-circle" style="color: var(--success); margin-right: 0.5rem;"></i>
                                Stay calm and speak clearly
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle" style="color: var(--success); margin-right: 0.5rem;"></i>
                                Provide your exact location
                            </li>
                        </ul>
                        <ul style="list-style: none; padding: 0;">
                            <li class="mb-2">
                                <i class="fas fa-check-circle" style="color: var(--success); margin-right: 0.5rem;"></i>
                                Describe the emergency situation
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle" style="color: var(--success); margin-right: 0.5rem;"></i>
                                Follow the operator's instructions
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
>>>>>>> 981c78de8711ec6faef251bb1b15ad310561bc71

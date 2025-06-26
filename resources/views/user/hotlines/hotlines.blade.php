@extends('layouts.user')
    
@section('content')
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

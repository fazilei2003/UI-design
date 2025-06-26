@extends('layouts.user')
    
@section('content')
    <section class="welcome-hero-section">
        <div class="welcome-hero-container">
            <div class="welcome-hero-content">
                <h1 class="welcome-hero-title">NU LAGUNA</h1>
                <h2 class="welcome-hero-subtitle">CENTER FOR GUIDANCE SERVICES</h2>
                
                <div class="welcome-hero-divider"></div>
                
                <div class="welcome-hero-contact">
                    <div class="welcome-contact-item">
                        <div class="welcome-contact-icon">✉</div>
                        <span>cgs@nu-laguna.edu.ph</span>
                    </div>
                    <div class="welcome-contact-item">
                        <div class="welcome-contact-icon">🌐</div>
                        <span>bit.ly/NUL-MySchool</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section">
        <div class="services-container">
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">📞</div>
                    <h3 class="service-title">Emergency Hotline</h3>
                    <p class="service-description">
                        In times of urgent need, our 24/7 hotline provides immediate, compassionate support for students and the community in Calamity. Your well-being is our priority.
                    </p>
                    <a href="{{ route('user.hotline') }}" class="service-button">
                        → View
                    </a>
                </div>

                <div class="service-card">
                    <div class="service-icon">🔔</div>
                    <h3 class="service-title">Services</h3>
                    <p class="service-description">
                        This section is your central hub for all the support and resources offered by the NU Laguna Center for Guidance Services. Designed to assist you throughout your academic and personal journey.
                    </p>
                    <a href="{{ route('user.services') }}" class="service-button">
                        → View
                    </a>
                </div>

                <div class="service-card">
                    <div class="service-icon">📢</div>
                    <h3 class="service-title">e-Hayag</h3>
                    <p class="service-description">
                        This is your safe and judgment-free space to express your thoughts, feelings, and experiences. Your personal corner for comfort and honesty.<br><br>
                    </p>
                    <a href="{{ route('user.freedomwall.add') }}" class="service-button">
                        → View
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="awareness-section">
        <div class="awareness-container">
            <h2 class="section-title">Guidance Awareness Month</h2>
            <div class="section-subtitle"></div>
            
            <div class="awareness-content">
                <div class="video-container">
                    <div class="video-placeholder">
                        ▶
                    </div>
                </div>
                
                <div class="awareness-text">
                    <p>As we celebrate the Guidance Awareness Month on this month of May, let's retrospect on the <span class="highlight">guidance and initiatives</span> provided by NU Laguna Center for Guidance Services.</p>
                    
                    <p>Let this month serve as a reminder for all of us of the significance of promoting mental health and renewing our commitment to highly relevant programs for NU Laguna community.</p>
                    
                    <p>Together, we can create a safe environment where everyone can flourish. <span class="highlight">💙</span></p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('body-class', 'welcome-page')

@extends('layouts.user')
    
@section('content')
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
@extends('layouts.user')
    
@section('content')
<div class="hero-section">
    <div class="hero-content fade-in">
        <h1 class="hero-title">{{ $service->name }}</h1>
        <p class="hero-subtitle">Detailed information about this service</p>
    </div>
</div>

<div class="main-content">
    <div class="container">
        <section class="section">
            <div class="card fade-in">
                <div class="card-body">
                    <h2 class="card-title">Service Description</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8;">{{ $service->description }}</p>

                    @if($service->consultation)
                        <div class="mt-5">
                            <h3 class="card-title">
                                <i class="fas fa-calendar-check" style="color: var(--secondary-color);"></i>
                                Related Consultation
                            </h3>
                            <div class="card" style="background: var(--light-blue); border: 2px solid var(--accent-color);">
                                <div class="card-body">
                                    <h4 style="color: var(--primary-color);">{{ $service->consultation->name }}</h4>
                                    <p class="mb-3">{{ $service->consultation->description }}</p>
                                    <a href="{{ $service->consultation->request_link }}" class="btn btn-primary" target="_blank">
                                        <i class="fas fa-external-link-alt"></i>
                                        Request Consultation
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="mt-5">
                            <div class="card" style="background: var(--light-blue);">
                                <div class="card-body text-center">
                                    <i class="fas fa-info-circle" style="font-size: 2rem; color: var(--secondary-color); margin-bottom: 1rem;"></i>
                                    <p class="mb-0" style="color: var(--text-light);">No consultation link is currently associated with this service.</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="text-center mt-5">
                        <a href="{{ route('user.services') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i>
                            Back to Services
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
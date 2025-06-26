@extends('layouts.user')
    
@section('content')
<div class="hero-section">
    <div class="hero-content fade-in">
        <h1 class="hero-title">Guidance Services</h1>
        <p class="hero-subtitle">Comprehensive support for your academic and personal growth</p>
    </div>
</div>

<div class="main-content">
    <div class="container">
        <!-- Services Offered Section -->
        <section class="section">
            <h2 class="section-title">Services Offered</h2>
            <div class="grid grid-2" id="services-list">
                @foreach($services as $index => $service)
                    <div class="card fade-in {{ $index >= 4 ? 'hidden-service' : '' }}" style="{{ $index >= 4 ? 'display: none;' : '' }}">
                        <div class="card-body">
                            <h3 class="card-title">{{ $service->name }}</h3>
                            <p class="mb-3">{{ Str::limit(strip_tags($service->description), 150, '...') }}</p>
                            <a href="{{ route('user.services.details', $service->id) }}" class="btn btn-primary">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            @if(count($services) > 4)
                <div class="text-center mt-4">
                    <button id="toggle-services-btn" class="btn btn-secondary">Show All Services</button>
                </div>
            @endif
        </section>

        <!-- Counselor Information Section -->
        <section class="section">
            <h2 class="section-title">Meet Our Counselors</h2>
            
            <div id="counselors-container" style="display: none;">
                <div class="grid grid-3">
                    @foreach($counselors as $counselor)
                        <div class="card fade-in">
                            <div class="card-body text-center">
                                <div class="service-icon mb-3">
                                    @if($counselor->image)
                                        <img src="{{ asset('storage/' . $counselor->image) }}" alt="{{ $counselor->name }}" 
                                             style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover;">
                                    @else
                                        <i class="fas fa-user-tie"></i>
                                    @endif
                                </div>
                                <h3 class="card-title">{{ $counselor->name }}</h3>
                                <p class="text-muted mb-2">{{ $counselor->position }}</p>
                                <p class="text-muted mb-3">{{ $counselor->college }}</p>
                                <a href="{{ route('user.counselors.details', $counselor->id) }}" class="btn btn-primary">
                                    View Profile
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="text-center">
                <button id="toggle-counselors-btn" class="btn btn-secondary">Meet Our Team</button>
            </div>
        </section>

        <!-- Consultation Links Section -->
        <section class="section">
            <h2 class="section-title">Request Consultation</h2>
            <div class="grid grid-2">
                @foreach($consultations as $consultation)
                    <div class="card slide-up">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <h3 class="card-title">{{ $consultation->name }}</h3>
                            <p class="mb-4">{{ $consultation->description }}</p>
                            <a href="{{ $consultation->request_link }}" target="_blank" class="btn btn-primary">
                                Request Consultation <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Services toggle
        const servicesBtn = document.getElementById('toggle-services-btn');
        const hiddenServices = document.querySelectorAll('.hidden-service');

        if (servicesBtn) {
            servicesBtn.addEventListener('click', function () {
                const isHidden = hiddenServices[0].style.display === 'none';

                hiddenServices.forEach(service => {
                    service.style.display = isHidden ? 'block' : 'none';
                });

                servicesBtn.textContent = isHidden ? 'Show Less' : 'Show All Services';
            });
        }

        // Counselors toggle
        const counselorsBtn = document.getElementById('toggle-counselors-btn');
        const counselorsContainer = document.getElementById('counselors-container');

        if (counselorsBtn) {
            counselorsBtn.addEventListener('click', function () {
                if (counselorsContainer.style.display === 'none') {
                    counselorsContainer.style.display = 'block';
                    counselorsBtn.style.display = 'none';
                }
            });
        }
    });
</script>
@endsection
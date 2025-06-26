@extends('layouts.user')
    
@section('styles')
    @vite('resources/css/main.css')
@endsection

@section('content')
    <!-- Thank You Hero Section -->
    <section class="submitted-hero-section">
        <div class="submitted-hero-container">
            <div class="submitted-checkmark-icon">
                <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10" stroke="white" stroke-width="2" fill="rgba(255,255,255,0.2)"/>
                    <path d="m9 12 2 2 4-4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h1 class="submitted-hero-title">Thank You</h1>
            <p class="submitted-hero-subtitle">Your message has been received with care</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="submitted-main-section">
        <div class="submitted-container">
            
            <!-- Success Message Card -->
            <div class="success-message-card">
                <div class="success-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="10" fill="#10b981"/>
                        <path d="m9 12 2 2 4-4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="success-content">
                    <h3 class="success-title">Message Submitted Successfully</h3>
                    <p class="success-description">
                        Thank you for sharing your thoughts with us. Your message has been safely received and will be 
                        reviewed by our guidance counselors. Remember, you are heard, you are valued, and you are not alone.
                    </p>
                </div>
            </div>

            <!-- What's Next Section -->
            <div class="whats-next-section">
                <h2 class="whats-next-title">What's Next?</h2>
                
                <div class="next-actions-grid">
                    <!-- Explore Services -->
                    <div class="action-card">
                        <div class="action-icon explore-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7l10 5 10-5-10-5z" fill="white"/>
                                <path d="m2 17 10 5 10-5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="m2 12 10 5 10-5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h4 class="action-title">Explore Services</h4>
                        <p class="action-description">
                            Discover our comprehensive guidance and counseling services designed to support your journey.
                        </p>
                        <a href="{{ route('user.services') }}" class="action-button">
                            View Services →
                        </a>
                    </div>

                    <!-- Share Again -->
                    <div class="action-card">
                        <div class="action-icon share-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" fill="white"/>
                            </svg>
                        </div>
                        <h4 class="action-title">Share Again</h4>
                        <p class="action-description">
                            Feel free to return anytime to share more thoughts or feelings. We're always here to listen.
                        </p>
                        <a href="{{ route('user.freedomwall.add') }}" class="action-button">
                            Write Again →
                        </a>
                    </div>

                    <!-- Need Help -->
                    <div class="action-card">
                        <div class="action-icon help-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" fill="white"/>
                            </svg>
                        </div>
                        <h4 class="action-title">Need Help?</h4>
                        <p class="action-description">
                            Access emergency hotlines for immediate support and assistance when you need it most.
                        </p>
                        <a href="{{ route('user.hotline') }}" class="action-button help-button">
                            Get Help →
                        </a>
                    </div>
                </div>
            </div>

            <!-- You're Not Alone Section -->
            <div class="not-alone-section">
                <div class="heart-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" fill="#333e8f"/>
                    </svg>
                </div>
                <h3 class="not-alone-title">You're Not Alone</h3>
                <p class="not-alone-description">
                    Every step forward is progress. Every conversation matters. You're not alone on 
                    this journey. The NU Laguna Center for Guidance Services is here to support you 
                    every step of the way.
                </p>
            </div>

        </div>
    </section>

@endsection

@section('body-class', 'submitted-page')

@section('scripts')
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if($randomQuote)
        <script>
            // Show quote popup after a short delay
            setTimeout(() => {
                Swal.fire({
                    title: '{{ $randomQuote->author }} says:',
                    text: '{{ $randomQuote->quote }}',
                    icon: 'success',
                    showCancelButton: true,
                    showDenyButton: true,
                    confirmButtonText: 'Thank you',
                    denyButtonText: 'Need help?',
                    cancelButtonText: 'Close',
                    confirmButtonColor: '#333e8f',
                    denyButtonColor: '#ef4444'
                }).then((result) => {
                    if (result.isConfirmed) { 
                        // Scroll to not alone section
                        document.querySelector('.not-alone-section').scrollIntoView({ 
                            behavior: 'smooth' 
                        });
                    } else if (result.isDenied) {
                        window.location.href = "{{ route('user.hotline') }}";
                    }
                });
            }, 1500);
        </script>
    @endif
@endsection

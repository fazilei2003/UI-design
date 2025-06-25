@extends('layouts.user')
    
@section('content')
<div class="hero-section">
    <div class="hero-content fade-in">
        <h1 class="hero-title">Thank You</h1>
        <p class="hero-subtitle">Your message has been received with care</p>
    </div>
</div>

<div class="main-content">
    <div class="container">
        <section class="section">
            <div class="card slide-up text-center">
                <div class="card-body">
                    <div class="service-icon mb-4" style="margin: 0 auto;">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3 class="card-title">Message Submitted Successfully</h3>
                    <p class="mb-4">
                        Thank you for sharing your thoughts with us. Your message has been safely received and will be reviewed by our guidance counselors. 
                        Remember, you are heard, you are valued, and you are not alone.
                    </p>
                    
                    @if($randomQuote)
                    <div class="card" style="background: var(--light-blue); border: 2px solid var(--accent-color);">
                        <div class="card-body">
                            <h4 style="color: var(--primary-color);">
                                <i class="fas fa-quote-left"></i>
                                A Message for You
                            </h4>
                            <blockquote style="font-style: italic; font-size: 1.1rem; margin: 1rem 0;">
                                "{{ $randomQuote->quote }}"
                            </blockquote>
                            @if($randomQuote->author)
                                <cite style="color: var(--text-light);">- {{ $randomQuote->author }}</cite>
                            @endif
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">What's Next?</h2>
            <div class="grid grid-3">
                <div class="card fade-in">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-concierge-bell"></i>
                        </div>
                        <h3 class="service-title">Explore Services</h3>
                        <p class="mb-3">Discover our comprehensive guidance and counseling services.</p>
                        <a href="{{ route('user.services') }}" class="btn btn-primary">View Services</a>
                    </div>
                </div>

                <div class="card fade-in">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3 class="service-title">Share Again</h3>
                        <p class="mb-3">Feel free to return anytime to share more thoughts or feelings.</p>
                        <a href="{{ route('user.freedomwall.add') }}" class="btn btn-primary">Write Again</a>
                    </div>
                </div>

                <div class="card fade-in">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3 class="service-title">Need Help?</h3>
                        <p class="mb-3">Access emergency hotlines for immediate support and assistance.</p>
                        <a href="{{ route('user.hotline') }}" class="btn btn-primary">Get Help</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if($randomQuote)
<script>
    Swal.fire({
        title: '{{ $randomQuote->author ? $randomQuote->author . " says:" : "A message for you:" }}',
        text: '{{ $randomQuote->quote }}',
        icon: 'success',
        showCancelButton: true,
        showDenyButton: true,
        confirmButtonText: 'Thank you',
        denyButtonText: 'Need help?',
        cancelButtonText: 'Close',
        confirmButtonColor: '#2D5A87',
        denyButtonColor: '#4A90C2',
        cancelButtonColor: '#6C757D'
    }).then((result) => {
        if (result.isConfirmed) { 
            // Stay on page
        } else if (result.isDenied) {
            window.location.href = "{{ route('user.hotline') }}";
        }
    });
</script>
@endif
@endsection
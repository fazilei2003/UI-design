@extends('layouts.user')
    
@section('content')
<div class="hero-section">
    <div class="hero-content fade-in">
        <h1 class="hero-title">e-Hayag</h1>
        <p class="hero-subtitle">Your safe space to express thoughts, feelings, and experiences without judgment</p>
    </div>
</div>

<div class="main-content">
    <div class="container">
        <section class="section">
            <div class="card slide-up">
                <div class="card-body">
                    <h3 class="card-title text-center">
                        <i class="fas fa-heart" style="color: var(--accent-color);"></i>
                        Welcome to Your Safe Space
                    </h3>
                    <p class="text-center mb-4">
                        Here you may pour out whatever is in your heart – joy, sadness, hope, frustration, gratitude, confusion, or anything in between. 
                        Whether you're working through a challenge, carrying a heavy burden, having a bad day, revisiting past experiences, 
                        or simply reflecting on your current situation, this is your personal corner of comfort and honesty.
                    </p>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="card fade-in">
                <div class="card-body">
                    <h3 class="card-title">
                        <i class="fas fa-info-circle" style="color: var(--secondary-color);"></i>
                        How to Use This Space
                    </h3>
                    <p class="mb-3"><strong>Fear not because this will only be seen by your guidance counselors.</strong></p>
                    
                    <div class="grid grid-2">
                        <ul style="list-style: none; padding: 0;">
                            <li class="mb-3">
                                <i class="fas fa-heart" style="color: var(--accent-color); margin-right: 0.5rem;"></i>
                                <strong>Be honest</strong> – Share what you truly feel. There's no need to filter or pretend
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-hands-helping" style="color: var(--success); margin-right: 0.5rem;"></i>
                                <strong>Be kind</strong> – To yourself and to others. This is a judgment-free zone
                            </li>
                        </ul>
                        <ul style="list-style: none; padding: 0;">
                            <li class="mb-3">
                                <i class="fas fa-user-secret" style="color: var(--primary-color); margin-right: 0.5rem;"></i>
                                <strong>Be anonymous if you wish</strong> – You don't have to sign your name. What matters is that you feel heard
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-clock" style="color: var(--warning); margin-right: 0.5rem;"></i>
                                <strong>Take a moment</strong> – Breathe. Write. Here, you are heard. You are valued. You are home
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section text-center">
            <h2 class="section-title">Ready to Express Your Thoughts?</h2>
            <a href="{{ route('user.freedomwall.create') }}" class="btn btn-primary" style="font-size: 1.2rem; padding: 1rem 2rem;">
                <i class="fas fa-pen"></i>
                Start Writing
            </a>
        </section>
    </div>
</div>
@endsection
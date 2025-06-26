@extends('layouts.user')
<<<<<<< HEAD

@section('content')
    <section class="ehayag-hero-section">
        <div class="ehayag-hero-container">
            <div class="ehayag-chat-icon">💬</div>
            <h1 class="ehayag-hero-title">e-Hayag</h1>
            <p class="ehayag-hero-subtitle">Your safe space to express thoughts, feelings, and experiences without judgment</p>
        </div>
    </section>

    <section class="ehayag-main-section">
        <div class="ehayag-container">
            <div class="ehayag-content">
                <!-- Chat Section -->
                <div class="chat-section">
                    <div class="chat-header">
                        <h2 class="chat-title">Start Your Conversation</h2>
                        <p class="chat-subtitle">Share whatever is on your mind. I'm here to listen and support you.</p>
                    </div>

                    <div class="chat-messages">
                        <div class="chat-message">
                            <div class="message-content">
                                <p class="message-text">Your message will be kept confidential and will only be seen by our guidance counselors. We're here to listen, support, and help you through whatever you're experiencing.</p>
                            </div>  
                            <div class="message-time">06:45 AM</div>

                        </div>

                        <div class="chat-message message-user">
                        </div>

                        <div class="chat-message">
                        </div>
                    </div>

                    <form action="{{ route('freedomwall.store') }}" method="POST" class="chat-input-section">
                        @csrf
                        <input type="hidden" name="postName" value="Anonymous">
                        
                        <div class="chat-input-container">
                            <textarea 
                                name="post" 
                                class="chat-input" 
                                placeholder="Type your message here..."
                                required
                                rows="1"
                            ></textarea>
                            <button type="submit" class="chat-send-btn">
                                ➤
                            </button>
                        </div>
                        <p class="chat-help-text">Press Enter to send, Shift+Enter for new line</p>
                    </form>
                </div>

                <!-- Sidebar -->
                <div class="ehayag-sidebar">
                    <!-- Safe Space Guidelines -->
                    <div class="sidebar-card">
                        <h3 class="sidebar-title">
                            <span class="sidebar-icon">🛡️</span>
                            Safe Space Guidelines
                        </h3>
                        <ul class="guidelines-list">
                            <li class="guideline-item">
                                <div class="guideline-bullet"></div>
                                <div class="guideline-text">
                                    <span class="guideline-strong">Be honest</span> – Share what you truly feel. There's no need to filter or pretend
                                </div>
                            </li>
                            <li class="guideline-item">
                                <div class="guideline-bullet"></div>
                                <div class="guideline-text">
                                    <span class="guideline-strong">Be kind</span> – To yourself and to others. This is a judgment-free zone
                                </div>
                            </li>
                            <li class="guideline-item">
                                <div class="guideline-bullet"></div>
                                <div class="guideline-text">
                                    <span class="guideline-strong">Be anonymous if you wish</span> – You don't have to sign your name. What matters is that you feel heard
                                </div>
                            </li>
                            <li class="guideline-item">
                                <div class="guideline-bullet"></div>
                                <div class="guideline-text">
                                    <span class="guideline-strong">Take a moment</span> – Breathe. Write. Here, you are heard. You are valued. You are home
                                </div>
=======
    
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
>>>>>>> 981c78de8711ec6faef251bb1b15ad310561bc71
                            </li>
                        </ul>
                    </div>

                    <!-- Need More Support -->
                    <div class="sidebar-card">
                        <h3 class="sidebar-title">
                            <span class="sidebar-icon">🤝</span>
                            Need More Support?
                        </h3>
                        <div class="support-links">
                            <a href="{{ route('user.hotline') }}" class="support-link">Emergency Hotline</a>
                            <a href="{{ route('user.services') }}" class="support-link">Counseling Services</a>
                            <a href="{{ route('user.services') }}" class="support-link">Mental Health Resources</a>
                        </div>
                    </div>

                    <!-- You Matter -->
                    <div class="sidebar-card you-matter-card">
                        <div class="heart-icon">💜</div>
                        <h3 class="you-matter-title">You Matter</h3>
                        <p class="you-matter-text">
                            Every step forward is progress. Every conversation matters. You're not alone on this journey.
                        </p>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
        </div>
    </section>

    <x-alert />
@endsection

@section('body-class', 'ehayag-page')

@section('scripts')
<script>
    // Auto-resize textarea
    const textarea = document.querySelector('.chat-input');
    textarea.addEventListener('input', function() {
        this.style.height = 'auto';
        this.style.height = Math.min(this.scrollHeight, 120) + 'px';
    });

    // Handle Enter key for form submission
    textarea.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            this.closest('form').submit();
        }
    });
</script>
@endsection
=======
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
>>>>>>> 981c78de8711ec6faef251bb1b15ad310561bc71

@extends('layouts.user')

@section('content')
<div class="hero-section">
    <div class="hero-content fade-in">
        <h1 class="hero-title">e-Hayag</h1>
        <p class="hero-subtitle">Express yourself freely and authentically</p>
    </div>
</div>

<div class="main-content">
    <div class="container">
        <section class="section">
            <div class="card fade-in" style="max-width: 600px; margin: 0 auto;">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">
                        <i class="fas fa-pen" style="color: var(--accent-color);"></i>
                        Share Your Thoughts
                    </h3>
                    
                    <form action="{{ route('freedomwall.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="postName" class="form-label">
                                <i class="fas fa-user"></i>
                                Name <small style="color: var(--text-light);">(Optional - Leave blank to remain anonymous)</small>
                            </label>
                            <input type="text" id="postName" name="postName" class="form-control" 
                                   placeholder="Enter your name or leave blank for anonymous">
                        </div>

                        <div class="form-group">
                            <label for="post" class="form-label">
                                <i class="fas fa-heart"></i>
                                Your Message <span style="color: var(--danger);">*</span>
                            </label>
                            <textarea id="post" name="post" class="form-control" rows="8" required
                                      placeholder="Pour out your heart here... Share your thoughts, feelings, experiences, or anything that's on your mind. This is your safe space."></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" style="padding: 0.75rem 2rem;">
                                <i class="fas fa-paper-plane"></i>
                                Submit Your Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="card slide-up">
                <div class="card-body text-center">
                    <h4 class="card-title">
                        <i class="fas fa-shield-alt" style="color: var(--success);"></i>
                        Your Privacy Matters
                    </h4>
                    <p class="mb-0">
                        Your message will be kept confidential and will only be seen by our guidance counselors. 
                        We're here to listen, support, and help you through whatever you're experiencing.
                    </p>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
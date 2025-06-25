@extends('layouts.user')

@section('content')
<div class="hero-section">
    <div class="hero-content fade-in">
        <h1 class="hero-title">{{ $counselor->name }}</h1>
        <p class="hero-subtitle">{{ $counselor->position }}</p>
    </div>
</div>

<div class="main-content">
    <div class="container">
        <section class="section">
            <div class="card fade-in">
                <div class="card-body">
                    <div class="d-flex align-center gap-3 mb-4" style="flex-wrap: wrap;">
                        <div class="service-icon" style="flex-shrink: 0;">
                            @if($counselor->image)
                                <img src="{{ asset('storage/' . $counselor->image) }}" alt="{{ $counselor->name }}" 
                                     style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; box-shadow: var(--shadow);">
                            @else
                                <i class="fas fa-user-tie"></i>
                            @endif
                        </div>
                        <div style="flex: 1;">
                            <h2 class="card-title" style="margin-bottom: 0.5rem;">{{ $counselor->name }}</h2>
                            <p style="font-size: 1.1rem; color: var(--secondary-color); margin-bottom: 0.5rem;">
                                <i class="fas fa-briefcase"></i> {{ $counselor->position }}
                            </p>
                            <p style="color: var(--text-light); margin-bottom: 0.5rem;">
                                <i class="fas fa-university"></i> {{ $counselor->college }}
                            </p>
                            <p style="color: var(--text-light); margin-bottom: 0.5rem;">
                                <i class="fas fa-envelope"></i> 
                                <a href="mailto:{{ $counselor->email }}" style="color: var(--secondary-color);">{{ $counselor->email }}</a>
                            </p>
                            <p style="color: var(--text-light);">
                                <i class="fab fa-microsoft"></i> {{ $counselor->ms_teams_account }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="card slide-up">
                <div class="card-body">
                    <h3 class="card-title">
                        <i class="fas fa-calendar-alt" style="color: var(--secondary-color);"></i>
                        Weekly Availability
                    </h3>
                    
                    @php
                        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
                    @endphp

                    <div class="grid grid-2">
                        @foreach($days as $day)
                            @php
                                $daySchedules = $counselor->schedules->where('day_of_week', $day);
                            @endphp
                            <div class="mb-4">
                                <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">
                                    <i class="fas fa-clock"></i> {{ $day }}
                                </h4>
                                @if($daySchedules->isNotEmpty())
                                    <ul style="list-style: none; padding: 0;">
                                        @foreach($daySchedules as $schedule)
                                            <li style="background: var(--light-blue); padding: 0.5rem 1rem; margin-bottom: 0.5rem; border-radius: 8px; border-left: 4px solid var(--accent-color);">
                                                <i class="fas fa-clock" style="color: var(--secondary-color);"></i>
                                                {{ \Carbon\Carbon::parse($schedule->start_time)->format('h:i A') }} - 
                                                {{ \Carbon\Carbon::parse($schedule->end_time)->format('h:i A') }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p style="color: var(--text-light); font-style: italic;">
                                        <i class="fas fa-times-circle"></i> Not Available
                                    </p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="section text-center">
            <a href="{{ route('user.services') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i>
                Back to Services
            </a>
        </section>
    </div>
</div>
@endsection
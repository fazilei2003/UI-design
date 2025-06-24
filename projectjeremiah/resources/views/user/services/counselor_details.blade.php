@extends('layouts.user')

@section('styles')
    @vite('resources/css/styles.css')
@endsection

@section('content')
<div class="container my-5">
    <div class="card p-4">
        <div class="text-center">
            <img src="{{ asset('storage/' . $counselor->image) }}" alt="{{ $counselor->name }}" 
    class="teacher-avatar mb-3 mx-auto w-32 h-32 rounded-full object-cover">
            <h2 class="text-primary">{{ $counselor->name }}</h2>
            <p><strong>Position:</strong> {{ $counselor->position }}</p>
            <p><strong>Assigned Department:</strong> {{ $counselor->college }}</p>
            <p><strong>Email:</strong> <a href="mailto:{{ $counselor->email }}">{{ $counselor->email }}</a></p>
            <p><strong>MS Teams:</strong> {{ $counselor->ms_teams_account }}</p>
        </div>

                    <div class="counselor-schedule">
                <h3>Weekly Availability</h3>
                @php
                    $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
                @endphp

                @foreach($days as $day)
                    @php
                        $daySchedules = $counselor->schedules->where('day_of_week', $day);
                    @endphp
                    <div class="day-block">
                        <h4>{{ $day }}</h4>
                        @if($daySchedules->isNotEmpty())
                            <ul>
                                @foreach($daySchedules as $schedule)
                                    <li>{{ \Carbon\Carbon::parse($schedule->start_time)->format('h:i A') }} - {{ \Carbon\Carbon::parse($schedule->end_time)->format('h:i A') }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>Not Available</p>
                        @endif
                    </div>
                @endforeach
            </div> 
    </div>
</div>
@endsection

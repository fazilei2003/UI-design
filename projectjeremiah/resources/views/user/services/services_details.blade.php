@extends('layouts.user')
    
@section('styles')
    @vite('resources/css/styles.css')
@endsection
@section('content')
   <div class="container my-5">

    <div class="card p-5">
        <h2 class="text-primary mb-4">{{ $service->name }}</h2>

        <p>{{ $service->description }}</p>

        @if($service->consultation)
            <div class="mt-4">
                <h4>Related Consultation</h4>
                <p><strong>{{ $service->consultation->name }}</strong></p>
                <p>{{ $service->consultation->description }}</p>
                <a href="{{ $service->consultation->request_link }}" class="btn btn-primary mt-2" target="_blank">
                    Go to Consultation Request →
                </a>
            </div>
        @else
            <p class="mt-4 text-muted">No related consultation linked.</p>
        @endif

        <a href="" class="btn btn-secondary mt-4">
            ← Back to Services
        </a>
    </div>

</div>
@endsection

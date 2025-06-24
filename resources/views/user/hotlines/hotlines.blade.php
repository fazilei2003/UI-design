@extends('layouts.user')
    
@section('styles')
    @vite('resources/css/styles.css')
@endsection

@section('content')
    <div class="emergency-header text-center">
        <div class="container">
            <h1 class="display-12 fw-bold">Emergency Hotlines</h1>
            <p class="lead">24/7 Emergency Contact Numbers for Immediate Assistance</p>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            @foreach($entries as $entry)
            <!-- Police Hotline -->
            <div class="col-md-4">
                <div class="card hotline-card">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-shield-alt category-icon"></i>
                        <h3 class="card-title mb-3">{{ $entry->name }}</h3>
                        <p class="text-muted mb-3">{{ $entry->email }}</p>
                        <div class="contact-number mb-3">{{ $entry->phone_number }}</div>
                        <a href="{{ 'tel:' . $entry->phone_number }}" class="btn btn-primary">
                            <i class="fas fa-phone-alt me-2"></i>Call Now
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- for additional information -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3"><i class="fas fa-info-circle me-2"></i>Important Note</h4>
                        <p>These emergency hotlines are available 24/7. In case of emergency:</p>
                        <ul>
                            <li>Stay calm and speak clearly</li>
                            <li>Provide your exact location</li>
                            <li>Describe the emergency situation</li>
                            <li>Follow the operator's instructions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



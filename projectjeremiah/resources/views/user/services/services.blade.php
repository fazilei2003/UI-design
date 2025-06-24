@extends('layouts.user')
    
@section('styles')
    @vite('resources/css/styles.css')
@endsection
@section('content')

<div class="container my-5">

    <!-- Services Offered Section -->
        <div class="card mb-5 p-4">
            <h2 class="mb-4 text-primary">Services Offered</h2>
            <div class="row" id="services-list">
                @foreach($services as $index => $service)
                    <div class="col-md-4 mb-4 {{ $index >= 3 ? 'hidden-service' : '' }}">
                        <a href="{{ route('user.services.details', $service->id) }}" class="text-primary">
                            <div class="card p-3 h-100">
                                <h4 class="text-center">{{ $service->name }}</h4>
                                <p>{{ Str::limit(strip_tags($service->description), 120, '......') }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            @if(count($services) > 3)
                <div class="text-center mt-3">
                    <button id="toggle-services-btn" class="btn btn-primary">Show All Services</button>
                </div>
            @endif
        </div>


    <!-- Counselor Information Section -->
        <div class="card mb-5 p-4">
        <h2 class="mb-4 text-primary"><center>Counselor Information</h2>
        
        <div id="counselors-container" style="display: none;">
            <div class="row">
                @foreach($counselors as $counselor)
                    <div class="col-md-4 mb-4">
                        <div class="card p-3 h-100 text-center">
                            <a href="{{ route('user.counselors.details', $counselor->id) }}" class="text-decoration-none text-dark">
                                <img src="{{ asset('storage/' . $counselor->image) }}" alt="{{ $counselor->name }}" class="teacher-avatar mb-3">
                                <h4>{{ $counselor->name }}</h4>
                                <p>{{ $counselor->position }}</p>
                                <p>{{ $counselor->college }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </center>

        <div class="text-center mt-3">
            <button id="toggle-counselors-btn" class="btn btn-primary">Meet our Counselors</button>
        </div>
    </div>


    <!-- Consultation Links Section -->
    <div class="card p-4">
        <h2 class="mb-4 text-primary">Consultation Links</h2>
        <div class="row justify-content-center">
            @foreach($consultations as $consultation)
                <div class="col-md-6 mb-2">
                    <div class="consultation-link">
                        <h4>{{ $consultation->name }}</h4>
                        <p>{{ $consultation->description }}</p>
                        <a href="{{ $consultation->request_link }}" target="_blank" class="btn btn-primary">
                            Request Here <i class="fas fa-external-link-alt ml-2"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const btn = document.getElementById('toggle-services-btn');
        const hiddenServices = document.querySelectorAll('.hidden-service');

        btn.addEventListener('click', function () {
            const isHidden = hiddenServices[0].style.display === 'none' || hiddenServices[0].style.display === '';

            hiddenServices.forEach(service => {
                service.style.display = isHidden ? 'block' : 'none';
            });

            btn.textContent = isHidden ? 'Show Less' : 'Show All Services';
        });
    });


    /* COUNSELOR  */
     document.addEventListener('DOMContentLoaded', function () {
        const btn = document.getElementById('toggle-counselors-btn');
        const container = document.getElementById('counselors-container');

        btn.addEventListener('click', function () {
            if (container.style.display === 'none' || container.style.display === '') {
                container.style.display = 'block';
                btn.style.display = 'none'; // hide the button after showing counselors
            }
        });
    });
    
</script>
@endsection


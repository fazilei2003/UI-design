@extends('layouts.user')
    
@section('styles')
    @vite('resources/css/styles.css')
@endsection

@section('content')
     <div class="emergency-header text-center">
        <div class="container">
            <h1 class="display-12 fw-bold">WELCOME</h1>
            <p class="lead">GUIDANCE OFFICE</p>
        </div>
    </div>


     <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                      
                        <div class="row">
                           
                            <div class="col-md-4 mb-4">
                                <div class="card teacher-card">
                                    <div class="teacher-avatar">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <h4>EMERGENCY HOTLINE</h4>
                                    <p class="text-muted"><a class="btn btn-primary" href="{{ route('user.hotline') }}">View</a></p>
                                </div>
                            </div>

                            
                            <div class="col-md-4 mb-4">
                                <div class="card teacher-card">
                                    <div class="teacher-avatar">
                                        <i class="fas fa-bullhorn"></i>
                                    </div>
                                    <h4>FREEDOM WALL</h4>
                                    <p class="text-muted"><a class="btn btn-primary" href="{{ route('user.freedomwall.add') }}">View</a></p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

{{-- @section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Hello!',
                text: 'This is a test popup.',
                icon: 'info',
                denyButtonText: 'Next Page',
                cancelButtonText: 'Cancel'
            });
        });
    </script>
@endsection
 --}}

@section('scripts')
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if($randomQuote)
        <script>
            Swal.fire({
                title: '{{ $randomQuote->author }} says:',
                text: '{{ $randomQuote->quote }}',
                icon: 'success',
                showCancelButton: true,
                showDenyButton: true,
                confirmButtonText: 'Yes',
                denyButtonText: 'Need help?',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) { 
                    location.reload();
                } else if (result.isDenied) {
                    window.location.href = "{{ route('user.hotline') }}";
                }
            });
        </script>
    @endif
@endsection

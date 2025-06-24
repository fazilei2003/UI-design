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
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <h4>SERVICES</h4>
                                    <p class="text-muted"><a class="btn btn-primary" href="{{ route('user.services') }}">View</a></p>
                                </div>
                            </div>


                            
                            <div class="col-md-4 mb-4">
                                <div class="card teacher-card">
                                    <div class="teacher-avatar">
                                        <i class="fas fa-bullhorn"></i>
                                    </div>
                                    <h4>e-Hayag</h4>
                                    <p class="text-muted"><a class="btn btn-primary" href="{{ route('user.freedomwall.add') }}">View</a></p>
                                </div>
                            </div>

                                                        <div class="col-md-4 mb-4">
                                <div class="card teacher-card">
                                    <div class="teacher-avatar">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <h4>EMERGENCY HOTLINE</h4>
                                    <p class="text-muted"><a class="btn btn-primary" href="{{ route('user.hotline') }}">View</a></p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        

@endsection



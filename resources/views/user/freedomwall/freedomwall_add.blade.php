@extends('layouts.user')
    
@section('styles')
    @vite('resources/css/styles.css')
@endsection

@section('content')

<div class="emergency-header text-center">
        <div class="container">
            <h1 class="display-12 fw-bold">e-Hayag</h1>
            <p class="lead">Welcome to e-Hayag – your safe space to express your thoughts, feelings, and experiences without fear of judgment. Here you may pour out whatever is in your heart – joy,
sadness, hope, frustration, gratitude, confusion or anything in between. Whether you're working through a challenge, carrying a heavy burden, having a bad day, revisiting past experiences, or simply reflecting on your current situation, this is your personal corner of comfort and honesty.<br>        </div>
</div>

 <!-- for additional information -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3"><i class="fas fa-info-circle me-2"></i>How to Use this Space: </h4>
                        <p><strong>Fear not because this will only be seen by your guidance counselors.</strong></p></p>
                        <ul>
                            <li><strong>Be honest </strong> – Share what you truly feel. There’s no need to filter or pretend</li>
                            <li><strong>Be kind </strong> – To yourself and to others. This is a judgment-free zone. </li>
                            <li><strong>Be anonymous if you wish </strong> – You don’t have to sign your name. What matters is that you feel heard.</li>
                            <li><strong>Be kind </strong> – To yourself and to others. This is a judgment-free zone. </li>
                            <ul>Take a moment</ul>
                            <ul>Breathe. </ul>
                            <ul>Write. </ul>
                            <ul>Here, you are heard. You are valued. You are home.    </ul>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <center>
         <div class="top-bar">
            <h2 class="navigation-title">Ready to express your thought?</h2>
            <a href="{{route('user.freedomwall.create')}}" class="btn btn-primary">
                <i class="fas fa-heart category-icon"> </i>   Click Here
            </a>
        </div>
        <div class="nav-line-separator"></div>
        </center>
        <br>    

@endsection



@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Dashboard</h1>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
        @endauth

        @guest
        <h1>NETWORK SECURITY DEVELOPMENT CENTRE​</h1>
        <p class="lead">A company that implements Information Security Management System (ISMS) and focuses on becoming Malaysia’s First Network Security Development Center. We provide diverse solution including Training & Workshop, Knowledge Sharing & Technology Updates, Network Assessment, Application Assessment, Security Assessment, Cyber Defense & Offense Simulation Range, Network Visibility & Monitoring Solutions and Training Facilities to a variety of customers from government and private sectors.</p>
        @endguest
    </div>
@endsection

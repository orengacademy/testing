@extends('layouts.app-master')

@section('content')

    <div >
        @auth

        <br>
        <img class="mb-4" src="{{ URL('storage/Logo-OrenG.png') }}" alt="" width="" height=40>
        <!-- <p><strong>Oreng Academy Sdn Bhd</strong></p> -->
        <!-- <div class="card mb-3">
        <img src="{{ URL('storage/Logo-OrenG.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        </div> -->


    <h5>Hi, {{auth()->user()->name}}</h5>
    <p>Welcome to Oreng Management System. You can find everythings here.</p>


        <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="{{ URL('storage/project.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Total Project</h5>
      <h5>{{$project}}</h5>
      <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ URL('storage/staff.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Total Staff</h5>
      <h5>{{$staff}}</h5>
      <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ URL('storage/leave.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Total Leave</h5>
      <h5>5</h5>
      <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
    </div>
  </div>
</div>








        @endauth

        @guest
        <h1>NETWORK SECURITY DEVELOPMENT CENTRE​</h1>
        <p class="lead">A company that implements Information Security Management System (ISMS) and focuses on becoming Malaysia’s First Network Security Development Center. We provide diverse solution including Training & Workshop, Knowledge Sharing & Technology Updates, Network Assessment, Application Assessment, Security Assessment, Cyber Defense & Offense Simulation Range, Network Visibility & Monitoring Solutions and Training Facilities to a variety of customers from government and private sectors.</p>
        @endguest
    </div>
@endsection

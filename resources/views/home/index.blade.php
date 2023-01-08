@extends('layouts.app-master')

@section('content')

<br><br>
<div class="card mb-3">
<img src="/images/Logo-OrenG.png" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
</div>
</div>
<div class="card">
<div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
</div>
<img src="..." class="card-img-top" alt="...">
</div>


    <div class="bg-light p-5 rounded">
        @auth
        <p>Hi, {{auth()->user()->name}}</p>

        <div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>


<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
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

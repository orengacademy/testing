@extends('layouts.app-master')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Project</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Client : {{ $project->client }}</h5>
        <p class="card-text">Project Name : {{ $project->titleproject }}</p>
        <p class="card-text">Project Code : {{ $project->projectcode }}</p>
        <p class="card-text">PMO : {{ $project->PMO }}</p>
        <p class="card-text">Engineers Involve : {{ $project->Engineers }}</p>
        <p class="card-text">Start Date : {{ $project->startdate }}</p>
        <p class="card-text">End Date : {{ $project->enddate }}</p>
        <p class="card-text">Scope : {{ $project->scope }}</p>
        <p class="card-text">Type of Assessment : {{ $project->type }}</p>
        <p class="card-text">Status : {{ $project->status }}</p>
  </div>
  </div>
</div>
@endsection

@section('content')

@extends('layouts.app-master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

@section('content')
    <div class="bg-light p-5 rounded">
        @auth

        <form action="{{ url('project/assign/' .$project->id) }}" method="post">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <!-- <img class="mb-4" src="{!! url('images/OrenG-Logo-3-7-768x276.svg') !!}" alt="" width="72" height="57"> -->

            <h1 class="h3 mb-3 fw-normal">Assign Engineers</h1>

            @include('layouts.partials.messages')

            <div class = "form-group row g-3" >


              <div class="col-md-6 form-floating">
                  <input type="text" class="form-control" name="client" id="client" value="{{$project->client}}" placeholder="Password" required="required">
                  <label for="floatingPassword">Client/Agency</label>
                  @if ($errors->has('password'))
                      <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                  @endif
              </div>

        <div class="col-md-6 form-floating">
          <div class="form-group">
        <label for="sel1">Status</label>
        <select class="form-control" name="status" id="status">
          <option>Completed</option>
          <option>In Review</option>
          <option>In Progress</option>
        </select>
      </div>
      </div>

      <div class="col-md-6 form-floating">
          <input type="date" class="form-control" name="startdate" id="startdate" value="{{ old('password') }}" placeholder="Password" required="required">
          <label for="floatingPassword">Start Date</label>
          @if ($errors->has('password'))
              <span class="text-danger text-left">{{ $errors->first('password') }}</span>
          @endif
      </div>

      <div class="col-md-6 form-floating">
          <input type="date" class="form-control" name="enddate" id="enddate" value="{{ old('password') }}" placeholder="Password" required="required">
          <label for="floatingPassword">End Date</label>
          @if ($errors->has('password'))
              <span class="text-danger text-left">{{ $errors->first('password') }}</span>
          @endif
      </div>



    <!-- <div class="col-md-2 form-floatingp">
        <label><strong> Scope :</strong></label><br>
        <label><input type="checkbox" name="scope[]" value="Red"> WASA</label>
        <label><input type="checkbox" name="scope[]" value="Blue"> EPT</label>
        <label><input type="checkbox" name="scope[]" value="Green"> IPT</label>
        <label><input type="checkbox" name="scope[]" value="Yellow"> HVA</label>
        <label><input type="checkbox" name="scope[]" value="Red"> WSA</label>
        <label><input type="checkbox" name="scope[]" value="Blue"> API</label>
        <label><input type="checkbox" name="scope[]" value="Green"> MPT</label>
        <label><input type="checkbox" name="scope[]" value="Yellow"> NDA</label>
      </div>


      <div class="col-md-4 form-floatingp">
          <label><strong> Engineer :</strong></label><br>
          <label><input type="checkbox" name="Engineers[]" value="Red"> Farzul</label>
          <label><input type="checkbox" name="Engineers[]" value="Blue"> Saharuddin</label>
          <label><input type="checkbox" name="Engineers[]" value="Green"> Elman</label>
          <label><input type="checkbox" name="Engineers[]" value="Yellow"> Ilyas</label>
          <label><input type="checkbox" name="Engineers[]" value="Red"> Daniel</label>
          <label><input type="checkbox" name="Engineers[]" value="Blue"> Izzat</label>
          <label><input type="checkbox" name="Engineers[]" value="Green"> Khairul</label>
          <label><input type="checkbox" name="Engineers[]" value="Yellow"> Syukri</label>
        </div> -->





            <button class="w-100 btn btn-lg btn-primary" type="submit">Add Project</button>
            </div>
            @include('auth.partials.copy')
        </form>

        @endauth
    </div>



@endsection

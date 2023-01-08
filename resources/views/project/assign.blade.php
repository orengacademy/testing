@section('content')

@extends('layouts.app-master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

@section('content')
    <div class="bg-light p-5 rounded">
        @auth

        <form action="{{ url('project') }}" method="post">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <!-- <img class="mb-4" src="{!! url('images/OrenG-Logo-3-7-768x276.svg') !!}" alt="" width="72" height="57"> -->

            <h1 class="h3 mb-3 fw-normal">New Project</h1>

            @include('layouts.partials.messages')

            <div class = "form-group row g-3" >
            <div class="col-md-6 form-floating">
                <input type="text" class="form-control" name="titleproject" id="titleproject" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                <label for="floatingName">Project Title</label>
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
            </div>

            <div class="col-md-6 form-floating">
                <input type="text" class="form-control" name="client" id="client" value="{{ old('password') }}" placeholder="Password" required="required">
                <label for="floatingPassword">Client/Agency</label>
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="col-md-6 form-floating">
                <input type="text" class="form-control" name="projectcode" id="projectcode" value="{{ old('password') }}" placeholder="Password" required="required">
                <label for="floatingPassword">Project Code</label>
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="col-md-6 form-floating">
                <input type="text" class="form-control" name="year" id="year" value="{{ old('password') }}" placeholder="Password" required="required">
                <label for="floatingPassword">Year</label>
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>


          <div class="col-md-6 form-floating">
            <div class="form-group">
          <label for="sel1">Project Manager (PMO)</label>
          <select class="form-control" name="PMO" id="PMO">
            <option>Intan Harnila</option>
            <option>Fyka</option>
            <option>Rafidah</option>
            <option>Amira</option>
          </select>
        </div>
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

    <script>
    $(document).ready(function(){
    $('#category').multiselect({
    nonSelectedText: 'Select category',
    enableFiltering: true,
    enableCaseInsensitiveFiltering: true,
    buttonWidth:'400px'
    });
    $('#category_form').on('submit', function(event){
    event.preventDefault();
    var form_data = $(this).serialize();
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $.ajax({
    url:"{{ url('store') }}",
    method:"POST",
    data:form_data,
    success:function(data)
    {
    $('#category option:selected').each(function(){
    $(this).prop('selected', false);
    });
    $('#category').multiselect('refresh');
    alert(data['success']);
    }
    });
    });
    });
    </script>

@endsection

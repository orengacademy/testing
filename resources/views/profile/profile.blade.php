@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth


        <form method="post" action="{{ route('login.perform') }}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <!-- <img class="mb-4" src="{!! url('images/OrenG-Logo-3-7-768x276.svg') !!}" alt="" width="72" height="57"> -->
    
            <h1 class="h3 mb-3 fw-normal">Profile Pages</h1>
    
            @include('layouts.partials.messages')
            
            
            <div class = "form-group row g-2" >

                {{-- name --}}
                <div class="col-xs-3 form-floating">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="name" required="required" autofocus>
                    <label for="floatingName">Full Name</label>
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
        
                {{-- email --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="email" required="required" autofocus>
                    <label for="floatingName">Email Address</label>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                {{-- gender --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="gender" value="{{ old('gender') }}" placeholder="gender" required="required" autofocus>
                    <label for="floatingName">Gender</label>
                    @if ($errors->has('gender'))
                        <span class="text-danger text-left">{{ $errors->first('gender') }}</span>
                    @endif
                </div>

                {{-- resident Status --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="residentstatus" value="{{ old('residentstatus') }}" placeholder="residentstatus" required="required" autofocus>
                    <label for="floatingName">Resident status</label>
                    @if ($errors->has('residentstatus'))
                        <span class="text-danger text-left">{{ $errors->first('residentstatus') }}</span>
                    @endif
                </div>

                {{-- type of resident --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="typeofresident" value="{{ old('typeofresident') }}" placeholder="typeofresident" required="required" autofocus>
                    <label for="floatingName">Type Of Resident</label>
                    @if ($errors->has('typeofresident'))
                        <span class="text-danger text-left">{{ $errors->first('typeofresident') }}</span>
                    @endif
                </div>

                {{-- nationality --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="nationality" value="{{ old('nationality') }}" placeholder="nationality" required="required" autofocus>
                    <label for="floatingName">Nationality</label>
                    @if ($errors->has('nationality'))
                        <span class="text-danger text-left">{{ $errors->first('nationality') }}</span>
                    @endif
                </div>

                

                
            
        
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </div>
            @include('auth.partials.copy')
        </form>

        @endauth
    </div>
@endsection

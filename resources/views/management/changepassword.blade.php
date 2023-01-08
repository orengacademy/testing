@extends('layouts.app-master')

@section('content')

    <div class="bg-light p-5 rounded">
        @auth


        <form method="post" action="{{ url('profile/'.auth()->user()->id) }}">

            @method('PUT')
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <!-- <img class="mb-4" src="{!! url('storage/OrenG-Logo-3-7-768x276.svg') !!}" alt="" width="72" height="57"> -->

            <h1 class="h3 mb-3 fw-normal">Profile</h1>

            <p class="p mb-1 fw-normal">Personal Identity</p>


            @include('layouts.partials.messages')


            <div class = "form-group row g-2" >


                <div class="form-group form-floating mb-3">
                    <input type="password" class="form-control" name="password" value="{{ auth()->user()->password }}" placeholder="Password" required="required">
                    <label for="floatingPassword">Password</label>
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Change Password</button>
            </div>
            @include('auth.partials.copy')
        </form>

        @endauth
    </div>
@endsection

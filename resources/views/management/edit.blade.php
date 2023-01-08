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

                {{-- name --}}
                <div class="col-xs-3 form-floating">
                    <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}" placeholder="name"  autofocus>
                    <label for="floatingName">Full Name</label>
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                {{-- email --}}
                <div class="col-xs-3 form-floating">
                    <input type="text" class="form-control" name="email" value="{{ auth()->user()->email }}" placeholder="email"  autofocus>
                    <label for="floatingName">Email Address</label>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                {{-- gender --}}
                <div class="col-md-4 form-floating">
                    <select class="form-control" id="exampleFormControlSelect1" name="gender">

                        <option value="male"
                            @if(auth()->user()->gender=="male")
                                selected
                            @endif
                        >Male</option>

                        <option value="female"
                            @if(auth()->user()->gender=="female")
                                selected
                            @endif
                        >Female</option>
                      </select>


                    {{-- <input type="text" class="form-control" name="gender" value="{{ auth()->user()->gender }}" placeholder="gender"  autofocus> --}}
                    <label for="floatingName">Gender</label>
                    @if ($errors->has('gender'))
                        <span class="text-danger text-left">{{ $errors->first('gender') }}</span>
                    @endif
                </div>

                {{-- ID --}}
                <div class="col-md-4 form-floating">
                    <input type="text" class="form-control" name="ic" value="{{ auth()->user()->ic }}" placeholder="ic" autofocus>
                    <label for="floatingName">Identity Card/Registration No.</label>
                    @if ($errors->has('ic'))
                        <span class="text-danger text-left">{{ $errors->first('ic') }}</span>
                    @endif
                </div>

                {{-- dob --}}
                <div class="col-md-4 form-floating">
                    <input type="date" value="{{ auth()->user()->dob }}" class="form-control" name="dob" placeholder="dob" autofocus>
                    <label for="floatingName">Date Of Birth</label>
                    @if ($errors->has('dob'))
                        <span class="text-danger text-left">{{ $errors->first('ic') }}</span>
                    @endif
                </div>
                <p class="p mb-1 mt-4 fw-normal">Resident & Race Information</p>

                {{-- resident Status --}}
                <div class="col-md-6 form-floating">
                    <select class="form-control" id="exampleFormControlSelect1" name="residentstatus">
                    <option value="resident"
                        @if(auth()->user()->residentstatus=="resident")
                            selected
                        @endif
                    >Resident</option>

                    <option value="nonresident"
                        @if(auth()->user()->residentstatus=="nonresident")
                            selected
                        @endif
                    >Non-Resident</option>
                    </select>
                    {{-- <input type="text" class="form-control" name="residentstatus" value="{{ old('residentstatus') }}" placeholder="residentstatus"  autofocus> --}}
                    <label for="floatingName">Resident status</label>
                    @if ($errors->has('residentstatus'))
                        <span class="text-danger text-left">{{ $errors->first('residentstatus') }}</span>
                    @endif
                </div>

                {{-- race --}}
                <div class="col-md-6 form-floating">
                    <select class="form-control" id="exampleFormControlSelect1" name="race">
                        <option value="malay"
                            @if(auth()->user()->race=="malay")
                                selected
                            @endif
                        >Malay</option>

                        <option value="chinese"
                            @if(auth()->user()->race=="chinese")
                                selected
                            @endif
                        >Chinese</option>

                        <option value="indian"
                            @if(auth()->user()->race=="indian")
                                selected
                            @endif
                        >Indians</option>

                        <option value="others"
                            @if(auth()->user()->race=="others")
                                selected
                            @endif
                        >Others</option>
                    </select>
                    {{-- <input type="text" class="form-control" name="race" value="{{ old('race') }}" placeholder="race"  autofocus> --}}
                    <label for="floatingName">Race</label>
                    @if ($errors->has('race'))
                        <span class="text-danger text-left">{{ $errors->first('race') }}</span>
                    @endif
                </div>

                {{-- type of resident --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="typeofresident" value="{{ auth()->user()->typeofresident }}" placeholder="typeofresident"  autofocus>
                    <label for="floatingName">Type Of Resident</label>
                    @if ($errors->has('typeofresident'))
                        <span class="text-danger text-left">{{ $errors->first('typeofresident') }}</span>
                    @endif
                </div>

                {{-- nationality --}}
                <div class="col-md-6 form-floating">
                    <select class="form-control" id="exampleFormControlSelect1" name="nationality">
                        <option value="malaysia"
                            @if(auth()->user()->nationality=="malaysia")
                                selected
                            @endif
                        >Malaysia</option>

                        <option value="nonmalaysia"
                            @if(auth()->user()->nationality=="nonmalaysia")
                                selected
                            @endif
                        >Non-Malaysia</option>
                    </select>
                    {{-- <input type="text" class="form-control" name="nationality" value="{{ old('nationality') }}" placeholder="nationality"  autofocus> --}}
                    <label for="floatingName">Nationality</label>
                    @if ($errors->has('nationality'))
                        <span class="text-danger text-left">{{ $errors->first('nationality') }}</span>
                    @endif
                </div>

                {{-- Disability --}}
                <div class="col-md-4 form-floating">
                    <input type="text" class="form-control" name="disabilitystatus" value="{{ auth()->user()->disabilitystatus }}" placeholder="disabilitystatus"  autofocus>
                    <label for="floatingName">disabilitystatus</label>
                    @if ($errors->has('disabilitystatus'))
                        <span class="text-danger text-left">{{ $errors->first('disabilitystatus') }}</span>
                    @endif
                </div>

                <p class="p mb-1 mt-4 fw-normal">Marital & Children Information</p>

                {{-- maritalstatus --}}
                <div class="col-md-6 form-floating">
                    <select class="form-control" id="exampleFormControlSelect1" name="maritalstatus">
                        <option value="single"
                            @if(auth()->user()->maritalstatus=="single")
                                selected
                            @endif
                        >Single</option>

                        <option value="nonsingle"
                            @if(auth()->user()->maritalstatus=="nonsingle")
                                selected
                            @endif
                        >Married</option>
                    </select>
                    {{-- <input type="text" class="form-control" name="maritalstatus" value="{{ old('maritalstatus') }}" placeholder="maritalstatus"  autofocus> --}}
                    <label for="floatingName">Marital status</label>
                    @if ($errors->has('maritalstatus'))
                        <span class="text-danger text-left">{{ $errors->first('maritalstatus') }}</span>
                    @endif
                </div>

                {{-- children Status --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="children" value="{{ auth()->user()->children }}" placeholder="children"  autofocus>
                    <label for="floatingName">Children and PCB deduction</label>
                    @if ($errors->has('children'))
                        <span class="text-danger text-left">{{ $errors->first('children') }}</span>
                    @endif
                </div>

                <p class="p mb-1 mt-4 fw-normal">Address Information</p>

                {{-- personalemail --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="personalemail" value="{{ auth()->user()->personalemail }}" placeholder="personalemail"  autofocus>
                    <label for="floatingName">Personal Email</label>
                    @if ($errors->has('personalemail'))
                        <span class="text-danger text-left">{{ $errors->first('personalemail') }}</span>
                    @endif
                </div>

                {{-- mobilephone --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="mobilephone" value="{{ auth()->user()->mobilephone }}" placeholder="mobilephone"  autofocus>
                    <label for="floatingName">Phone Number</label>
                    @if ($errors->has('mobilephone'))
                        <span class="text-danger text-left">{{ $errors->first('mobilephone') }}</span>
                    @endif
                </div>

                {{-- Full Street Address --}}
                <div class="col-xs-3 form-floating">
                    <input type="text" class="form-control" name="streetaddress" value="{{ auth()->user()->streetaddress }}" placeholder="streetaddress"  autofocus>
                    <label for="floatingName">Full Street Address</label>
                    @if ($errors->has('streetaddress'))
                        <span class="text-danger text-left">{{ $errors->first('streetaddress') }}</span>
                    @endif
                </div>

                {{-- state --}}
                <div class="col-md-4 form-floating">
                    <input type="text" class="form-control" name="state" value="{{ auth()->user()->state }}" placeholder="state"  autofocus>
                    <label for="floatingName">State</label>
                    @if ($errors->has('state'))
                        <span class="text-danger text-left">{{ $errors->first('state') }}</span>
                    @endif
                </div>

                {{-- Postcode --}}
                <div class="col-md-4 form-floating">
                    <input type="text" class="form-control" name="postcode" value="{{ auth()->user()->postcode }}" placeholder="postcode"  autofocus>
                    <label for="floatingName">Postcode</label>
                    @if ($errors->has('postcode'))
                        <span class="text-danger text-left">{{ $errors->first('postcode') }}</span>
                    @endif
                </div>

                {{-- city --}}
                <div class="col-md-4 form-floating">
                    <input type="text" class="form-control" name="city" value="{{ auth()->user()->city }}" placeholder="city"  autofocus>
                    <label for="floatingName">City</label>
                    @if ($errors->has('city'))
                        <span class="text-danger text-left">{{ $errors->first('city') }}</span>
                    @endif
                </div>

                <p class="p mb-1 mt-4 fw-normal">Emergency Contact</p>

                {{-- emergencycontactname --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="emergencycontactname" value="{{ auth()->user()->emergencycontactname }}" placeholder="emergencycontactname"  autofocus>
                    <label for="floatingName">Emergency Contact Name</label>
                    @if ($errors->has('emergencycontactname'))
                        <span class="text-danger text-left">{{ $errors->first('emergencycontactname') }}</span>
                    @endif
                </div>

                {{-- emergencycontactno --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="emergencycontactno" value="{{ auth()->user()->emergencycontactno }}" placeholder="emergencycontactno"  autofocus>
                    <label for="floatingName">Emergency Contact number</label>
                    @if ($errors->has('emergencycontactno'))
                        <span class="text-danger text-left">{{ $errors->first('emergencycontactno') }}</span>
                    @endif
                </div>

                <p class="p mb-1 mt-4 fw-normal">Payment Method</p>

                {{-- paymentmethod --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="paymentmethod" value="{{ auth()->user()->paymentmethod }}" placeholder="paymentmethod"  autofocus>
                    <label for="floatingName">Payment Method</label>
                    @if ($errors->has('paymentmethod'))
                        <span class="text-danger text-left">{{ $errors->first('paymentmethod') }}</span>
                    @endif
                </div>

                {{-- bank name --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="bankname" value="{{ auth()->user()->bankname }}" placeholder="bankname"  autofocus>
                    <label for="floatingName">Bank Name</label>
                    @if ($errors->has('bankname'))
                        <span class="text-danger text-left">{{ $errors->first('bankname') }}</span>
                    @endif
                </div>

                {{-- bank account --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="bankaccount" value="{{ auth()->user()->bankaccount }}" placeholder="bankaccount"  autofocus>
                    <label for="floatingName">Bank Name</label>
                    @if ($errors->has('bankaccount'))
                        <span class="text-danger text-left">{{ $errors->first('bankaccount') }}</span>
                    @endif
                </div>

                <p class="p mb-1 mt-4 fw-normal">Employment Details</p>

                {{-- joindate --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="joindate" value="{{ auth()->user()->joindate }}" placeholder="joindate"  autofocus>
                    <label for="floatingName">Join Date</label>
                    @if ($errors->has('joindate'))
                        <span class="text-danger text-left">{{ $errors->first('joindate') }}</span>
                    @endif
                </div>

                {{-- position --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="position" value="{{ auth()->user()->position }}" placeholder="position"  autofocus>
                    <label for="floatingName">Position</label>
                    @if ($errors->has('position'))
                        <span class="text-danger text-left">{{ $errors->first('position') }}</span>
                    @endif
                </div>

                {{-- location --}}
                <div class="col-xs-3 form-floating">
                    <input type="text" class="form-control" name="location" value="{{ auth()->user()->location }}" placeholder="location"  autofocus>
                    <label for="floatingName">Location</label>
                    @if ($errors->has('location'))
                        <span class="text-danger text-left">{{ $errors->first('location') }}</span>
                    @endif
                </div>

                {{-- earningfreq --}}
                <div class="col-md-4 form-floating">
                    <input type="text" class="form-control" name="earningfreq" value="{{ auth()->user()->earningfreq }}" placeholder="earningfreq"  autofocus>
                    <label for="floatingName">Earning Frequency</label>
                    @if ($errors->has('earningfreq'))
                        <span class="text-danger text-left">{{ $errors->first('earningfreq') }}</span>
                    @endif
                </div>

                <p class="p mb-1 mt-4 fw-normal">Statutory Requirements</p>

                {{-- Contributing EPF --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="epf" value="{{ auth()->user()->epf }}" placeholder="epf"  autofocus>
                    <label for="floatingName">Contributing EPF</label>
                    @if ($errors->has('epf'))
                        <span class="text-danger text-left">{{ $errors->first('epf') }}</span>
                    @endif
                </div>

                {{-- socso --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="socsocategory" value="{{ auth()->user()->socsocategory }}" placeholder="socsocategory"  autofocus>
                    <label for="floatingName">SOCSO Category</label>
                    @if ($errors->has('socsocategory'))
                        <span class="text-danger text-left">{{ $errors->first('socsocategory') }}</span>
                    @endif
                </div>

                {{-- ssfwnumber --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="ssfwnumber" value="{{ auth()->user()->ssfwnumber }}" placeholder="ssfwnumber"  autofocus>
                    <label for="floatingName">SSFW number</label>
                    @if ($errors->has('ssfwnumber'))
                        <span class="text-danger text-left">{{ $errors->first('ssfwnumber') }}</span>
                    @endif
                </div>

                {{-- pcbnumber --}}
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="pcbnumber" value="{{ auth()->user()->pcbnumber }}" placeholder="pcbnumber"  autofocus>
                    <label for="floatingName">PCB Number</label>
                    @if ($errors->has('pcbnumber'))
                        <span class="text-danger text-left">{{ $errors->first('pcbnumber') }}</span>
                    @endif
                </div>



                <button class="w-100 btn btn-lg btn-primary" type="submit">Update Profile</button>
            </div>
            @include('auth.partials.copy')
        </form>

        @endauth
    </div>
@endsection

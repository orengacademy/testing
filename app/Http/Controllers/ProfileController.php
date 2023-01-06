<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display register page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('profile.profile');
    }

    /**
     * Handle account registration request
     *
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(RegisterRequest $request)
    {
        //validation rules

        $request->validate([
            'name' =>'required|min:4|string|max:255',
            'email'=>'required|email|string|max:255',
            'gender' =>'required|min:4|string|max:255',
            'residentstatus' =>'required|min:4|string|max:255',
            'typeofresident' =>'required|min:4|string|max:255',
            'nationality' =>'required|min:4|string|max:255',
            'maritalstatus' =>'required|min:4|string|max:255',
            'personalemail' =>'required|min:4|string|max:255',
            'streetaddress' =>'required|min:4|string|max:255',
            'mobilephone' =>'required|min:4|string|max:255',
            'emergencycontactname' =>'required|min:4|string|max:255',
            'emetgenctcontactno'=>'required|email|string|max:255',
            'joindate' =>'required|min:4|string|max:255',
            'position' =>'required|min:4|string|max:255',
            'ic' =>'required|min:4|string|max:255',
            'dob' =>'required|min:4|string|max:255',
            'race' =>'required|min:4|string|max:255',
            'disabilitystatus' =>'required|min:4|string|max:255',
            'children' =>'required|min:4|string|max:255',
            'state' =>'required|min:4|string|max:255',
            'postcode' =>'required|min:4|string|max:255',
            'city'=>'required|email|string|max:255',
            'paymentmethod' =>'required|min:4|string|max:255',
            'bankname' =>'required|min:4|string|max:255',
            'bankaccount' =>'required|min:4|string|max:255',
            'earningfreq' =>'required|min:4|string|max:255',
            'location' =>'required|min:4|string|max:255',
            'epf' =>'required|min:4|string|max:255',
            'ssfwnumber' =>'required|min:4|string|max:255',
            'socsocategory' =>'required|min:4|string|max:255',
            'pcbnumber' =>'required|min:4|string|max:255',
        ]);

        $user =Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->name = $request['gender'];
        $user->email = $request['residentstatus'];
        $user->name = $request['typeofresident'];
        $user->email = $request['nationality'];
        $user->name = $request['maritalstatus'];
        $user->email = $request['personalemail'];
        $user->name = $request['streetaddress'];
        $user->email = $request['mobilephone'];
        $user->name = $request['emergencycontactname'];
        $user->email = $request['emetgenctcontactno'];
        $user->name = $request['joindate'];
        $user->email = $request['position'];
        $user->name = $request['ic'];
        $user->email = $request['dob'];
        $user->name = $request['race'];
        $user->email = $request['disabilitystatus'];
        $user->name = $request['children'];
        $user->email = $request['state'];
        $user->name = $request['postcode'];
        $user->email = $request['city'];
        $user->name = $request['paymentmethod'];
        $user->email = $request['bankname'];
        $user->name = $request['bankaccount'];
        $user->email = $request['earningfreq'];
        $user->name = $request['location'];
        $user->email = $request['epf'];
        $user->name = $request['ssfwnumber'];
        $user->email = $request['socsocategory'];
        $user->name = $request['pcbnumber'];
        $user->save();
        return back()->with('message','Profile Updated');
    }
    
}

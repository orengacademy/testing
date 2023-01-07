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
    public function update(Request $request, $id)
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
            'emergencycontactno'=>'required|string|max:255',
            'joindate' =>'required|min:4|string|max:255',
            'position' =>'required|min:4|string|max:255',
            'ic' =>'required|min:4|string|max:255',
            'dob' =>'required|min:4|string|max:255',
            'race' =>'required|min:4|string|max:255',
            'disabilitystatus' =>'min:4|string|max:255',
            'children' =>'min:4|string|max:255',
            'state' =>'required|min:4|string|max:255',
            'postcode' =>'required|min:4|string|max:255',
            'city'=>'required|string|max:255',
            'paymentmethod' =>'min:4|string|max:255',
            'bankname' =>'min:4|string|max:255',
            'bankaccount' =>'min:4|string|max:255',
            'earningfreq' =>'required|min:4|string|max:255',
            'location' =>'required|min:4|string|max:255',
            'epf' =>'required|min:4|string|max:255',
            'ssfwnumber' =>'required|min:4|string|max:255',
            'socsocategory' =>'required|min:4|string|max:255',
            'pcbnumber' =>'required|min:4|string|max:255',
        ]);

        $user =User::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('profile')->with('flash_message', 'profile Updated!');
        // $user->name = $request['name'];
        // $user->email = $request['email'];
        // $user->gender = $request['gender'];
        // $user->residentstatus = $request['residentstatus'];
        // $user->typeofresident = $request['typeofresident'];
        // $user->nationality = $request['nationality'];
        // $user->maritalstatus = $request['maritalstatus'];
        // $user->personalemail = $request['personalemail'];
        // $user->streetaddress = $request['streetaddress'];
        // $user->mobilephone = $request['mobilephone'];
        // $user->emergencycontactname = $request['emergencycontactname'];
        // $user->emergencycontactno = $request['emergencycontactno'];
        // $user->joindate = $request['joindate'];
        // $user->position = $request['position'];
        // $user->ic = $request['ic'];
        // $user->dob = $request['dob'];
        // $user->race = $request['race'];
        // $user->disabilitystatus = $request['disabilitystatus'];
        // $user->children = $request['children'];
        // $user->state = $request['state'];
        // $user->postcode = $request['postcode'];
        // $user->city = $request['city'];
        // $user->paymentmethod = $request['paymentmethod'];
        // $user->bankname = $request['bankname'];
        // $user->bankaccount = $request['bankaccount'];
        // $user->earningfreq = $request['earningfreq'];
        // $user->location = $request['location'];
        // $user->epf = $request['epf'];
        // $user->ssfwnumber = $request['ssfwnumber'];
        // $user->socsocategory = $request['socsocategory'];
        // $user->pcbnumber = $request['pcbnumber'];
        // $user->save();
        // return back()->with('message','Profile Updated');
    }
    
}

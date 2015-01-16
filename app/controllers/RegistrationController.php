<?php

class RegistrationController extends BaseController{


    public function registerUser(){

        $rules = array(
            'prefix' => 'required',
            'legal_first' => 'required',
            'legal_last' => 'required',
            'prefname_first' => 'required',
            'prefname_last' => 'required',
            'dob_month' => 'required',
            'dob_day' => 'required',
            'dob_year' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'banner' => 'required',
            'airport' => 'required',
            'shirtsize' => 'required',
            'shoesize' => 'required',
            'password' => 'required|min:8',
        );

        $friendly_names = array(
            'prefix.required' => 'We need your <strong>Prefix</strong>',
            'legal_first.required' => 'We need your <strong>Legal First Name</strong>',
            'legal_last.required' => 'We need your <strong>Legal Last Name</strong>',
            'prefname_first.required' => 'We need your <strong>Name Tag First Name</strong>',
            'prefname_last.required' => 'We need your <strong>Name Tag Last Name</strong>',
            'dob_month.required' => 'We need your <strong>Birth Month</strong>',
            'dob_day.required' => 'We need your <strong>Birth Day</strong>',
            'dob_year.required' => 'We need your <strong>Birth Year</strong>',
            'email.required' => 'We need your <strong>Email Address</strong>',
            'email.email' => 'Please make sure your email address is valid.</strong>',
            'email.unique' => 'Have you already signed up with this email addres?</strong>',
            'phone.required' => 'We need your <strong>Phone Number</strong>',
            'banner.required' => 'We need your <strong>Banner</strong>',
            'airport.required' => 'We need your <strong>Closest Airport</strong>',
            'shirtsize.required' => 'We need your <strong>Shirt Size</strong>',
            'shoesize.required' => 'We need your <strong>Shoe Size</strong>',
            'password.required' => 'Please enter a password',
            'password.min' => 'Please make sure your password is at least 8 characters long'
        );

        $validator = Validator::make(Input::all(), $rules, $friendly_names);

        if ($validator->fails())
        {
            return Redirect::to('register')->withErrors($validator);
        }


        $regdetails = array(

            'prefix' => Input::get('prefix'),
            'legal_first' => Input::get('legal_first'),
            'legal_middle' => Input::get('legal_middle'),
            'legal_last' => Input::get('legal_last'),
            'prefname_first' => Input::get('prefname_first'),
            'prefname_last' => Input::get('prefname_last'),
            'gender' => Input::get('gender'),
            'dob_month' => Input::get('dob_month'),
            'dob_day' => Input::get('dob_day'),
            'dob_year' => Input::get('dob_year'),
            'store' => Input::get('store'),
            'banner' => Input::get('banner'),
            'email' => Input::get('email'),
            'phone' => Input::get('phone'),
            'airport' => Input::get('airport'),
            'altairport' => Input::get('altairport'),
            'diet' => Input::get('diet'),
            'shirtsize' => Input::get('shirtsize'),
            'shoesize' => Input::get('shoesize'),
            'cannot_attend' => Input::get('cantcome'),

        );

        $reg = Registrations::create($regdetails);
        $reg->save();

        //$pass = Input::get('password');
        //$pass = Hash::make(Input::get('password'));

        $userdetails = array(

            'email' => Input::get('email'),
            'password' => Hash::make(Input::get('password'))

        );

        $user = User::create($userdetails);
        $user->save();

        return View::make('registration/registrationsuccess');

    }



}

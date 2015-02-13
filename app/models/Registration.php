<?php

class Registration extends Eloquent{

    protected $fillable = array('legal_first', 'prefix', 'legal_middle', 'legal_last', 'prefname_first', 'prefname_last', 'gender', 'dob_month', 'dob_day', 'dob_year', 'store', 'banner', 'email', 'phone', 'airport', 'altairport', 'diet', 'shirtsize', 'shoesize', 'cannot_attend');


    public static function getStoreNumber($email){
        $storeno = DB::table('registrations')
            ->select('store as no')
            ->where('email','=', $email)
            ->get();
        return $storeno[0]->no;
    }
}

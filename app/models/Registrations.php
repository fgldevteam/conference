<?php

class Registrations extends Eloquent{

    protected $fillable = array('legal_first', 'prefix', 'legal_middle', 'legal_last', 'prefname_first', 'prefname_last', 'gender', 'dob_month', 'dob_day', 'dob_year', 'store', 'banner', 'email', 'phone', 'airport', 'altairport', 'diet', 'shirtsize', 'shoesize', 'cannot_attend');

}

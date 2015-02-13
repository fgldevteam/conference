<?php

class ActivitySelection extends \Eloquent {
    protected $table = 'activityselections';
    protected $fillable = ['user_name', 'user_store', 'activity'];

    public static function getCount($actid){
        $count = DB::table('activityselections')
            ->select( DB::raw('count(*) as actcount'))
            ->where('activity','=', $actid)
            ->get();
        return $count[0]->actcount;
    }

    public static function checkActivitySelection($user){
        $count = DB::table('activityselections')
            ->select( DB::raw('count(*) as usercount'))
            ->where('user_name','=', $user)
            ->get();
        return $count[0]->usercount;    
    }

}
